"use client";
import { useEffect, useState } from "react";

type Book = {
  id: number;
  title: string;
  description: string;
};

export default function Home() {
  const [books, setBooks] = useState<Book[]>([]);
  const [title, setTitle] = useState("");
  const [description, setDescription] = useState("");

  const loadBooks = async () => {
    const res = await fetch("http://localhost:4000/books");
    setBooks(await res.json());
  };

  useEffect(() => {
    loadBooks();
  }, []);

  const addBook = async (e: React.FormEvent) => {
    e.preventDefault();

    await fetch("http://localhost:4000/books", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ title, description }),
    });

    setTitle("");
    setDescription("");
    loadBooks();
  };

  const deleteBook = async (id: number) => {
    await fetch(`http://localhost:4000/books/${id}`, {
      method: "DELETE",
    });
    loadBooks();
  };

  return (
    <main className="container">
      <h1 className="title">📚 Project Davie</h1>
      <p className="subtitle">Books I’ve Read</p>

      {/* FORM */}
      <form className="card" onSubmit={addBook}>
        <h2>Add a Book</h2>

        <input
          className="input"
          placeholder="Book title"
          value={title}
          onChange={e => setTitle(e.target.value)}
          required
        />

        <textarea
          className="textarea"
          placeholder="Short description"
          value={description}
          onChange={e => setDescription(e.target.value)}
        />

        <button className="primary">Add Book</button>
      </form>

      {/* LIST */}
      <section className="list">
        {books.length === 0 && (
          <p className="empty">No books added yet.</p>
        )}

        {books.map(book => (
          <div key={book.id} className="card book">
            <div>
              <h3>{book.title}</h3>
              <p>{book.description}</p>
            </div>

            <button
              className="danger"
              onClick={() => deleteBook(book.id)}
            >
              Delete
            </button>
          </div>
        ))}
      </section>
    </main>
  );
}
