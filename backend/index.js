const express = require("express");
const cors = require("cors");
const setupDatabase = require("./db/setup");
const booksRoutes = require("./routes/books");

const app = express();
app.use(cors());
app.use(express.json());

async function startServer() {
  await setupDatabase(); // 👈 THIS IS THE KEY PART

  app.use("/books", booksRoutes);

  app.listen(4000, () => {
    console.log("🚀 Backend running on http://localhost:4000");
  });
}

startServer();
