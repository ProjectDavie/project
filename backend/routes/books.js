const express = require("express");
const router = express.Router();
const pool = require("../db/pool");

// GET all books
router.get("/", async (req, res) => {
  const result = await pool.query(
    "SELECT * FROM books ORDER BY created_at DESC"
  );
  res.json(result.rows);
});

// ADD a book
router.post("/", async (req, res) => {
  const { title, description } = req.body;

  const result = await pool.query(
    "INSERT INTO books (title, description) VALUES ($1, $2) RETURNING *",
    [title, description]
  );

  res.json(result.rows[0]);
});

// DELETE a book
router.delete("/:id", async (req, res) => {
  const { id } = req.params;

  await pool.query("DELETE FROM books WHERE id = $1", [id]);
  res.json({ success: true });
});

module.exports = router;
