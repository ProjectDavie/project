// D:\ProjectDavie\CODE\project\frontend\app\page.tsx
"use client";

import { useEffect, useState } from "react";

interface Property {
  id: number;
  name: string;
  description: string;
  type: string;
  created_at: string;
}

export default function TenantDashboard() {
  const [properties, setProperties] = useState<Property[]>([]);
  const [loading, setLoading] = useState<boolean>(true);
  const [error, setError] = useState<string | null>(null);

useEffect(() => {
  fetch("http://127.0.0.1:8000/api/properties")
    .then(res => res.json())
    .then(data => setProperties(data));
}, []); // ✅ empty dependency array

  if (loading) return <p style={{ padding: "20px" }}>Loading properties...</p>;
  if (error) return <p style={{ padding: "20px", color: "red" }}>{error}</p>;

  return (
    <div style={{ padding: "20px" }}>
      <h1>Tenant Dashboard</h1>
      {properties.length === 0 ? (
        <p>No properties available</p>
      ) : (
        <table border={1} cellPadding={5} cellSpacing={0}>
          <thead>
            <tr>
              <th>Name</th>
              <th>Description</th>
              <th>Type</th>
              <th>Created At</th>
            </tr>
          </thead>
          <tbody>
            {properties.map((property) => (
              <tr key={property.id}>
                <td>{property.name}</td>
                <td>{property.description}</td>
                <td>{property.type}</td>
                <td>{new Date(property.created_at).toLocaleString()}</td>
              </tr>
            ))}
          </tbody>
        </table>
      )}
    </div>
  );
}