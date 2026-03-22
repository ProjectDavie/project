"use client";

import { useEffect, useState } from "react";
import axios from "axios";

export default function Dashboard() {
  const [properties, setProperties] = useState([]);

  useEffect(() => {
    axios.get("http://127.0.0.1:8000/api/tenant/properties", { withCredentials: true })
      .then(res => setProperties(res.data));
  }, []);

  return (
    <div>
      <h1>Hello World</h1>
      <p>Welcome to the dashboard!</p>
    </div>
  );
}