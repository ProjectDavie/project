require("dotenv").config();
const { Pool } = require("pg");

const adminPool = new Pool({
  user: process.env.DB_USER,
  host: process.env.DB_HOST,
  password: process.env.DB_PASSWORD,
  port: process.env.DB_PORT,
  database: "postgres",
});

async function setupDatabase() {
  const dbCheck = await adminPool.query(
    "SELECT 1 FROM pg_database WHERE datname = $1",
    [process.env.DB_NAME]
  );

  if (dbCheck.rowCount === 0) {
    console.log(`📦 Creating database ${process.env.DB_NAME}...`);
    await adminPool.query(`CREATE DATABASE ${process.env.DB_NAME}`);
  }

  await adminPool.end();

  const appPool = new Pool({
    user: process.env.DB_USER,
    host: process.env.DB_HOST,
    password: process.env.DB_PASSWORD,
    port: process.env.DB_PORT,
    database: process.env.DB_NAME,
  });

  await appPool.query(`
    CREATE TABLE IF NOT EXISTS books (
      id SERIAL PRIMARY KEY,
      title TEXT NOT NULL,
      description TEXT,
      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )
  `);

  await appPool.end();
  console.log("✅ Database and table ready");
}

module.exports = setupDatabase;
