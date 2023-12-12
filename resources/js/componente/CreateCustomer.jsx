import React, { useState } from 'react';

const CreateCustomer = () => {
  const [formData, setFormData] = useState({
    Nombre: '',
    Telefono: '',
    Email: '',
    FechaRegistro: '',
  });

  const handleSubmit = (e) => {
    e.preventDefault();

    // Aquí puedes manejar la lógica para enviar los datos al backend
    console.log('Form data submitted:', formData);

    // Limpia el formulario después de enviar los datos
    setFormData({
      Nombre: '',
      Telefono: '',
      Email: '',
      FechaRegistro: '',
    });
  };

  const handleInputChange = (e) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value,
    });
  };

  return (
    <div style={{ maxWidth: '400px', margin: '0 auto' }}>
      <h1 style={{ textAlign: 'center', marginBottom: '20px' }}>Crear Cliente</h1>

      <form
        onSubmit={handleSubmit}
        style={{
          backgroundColor: '#fff',
          padding: '20px',
          border: '1px solid #ccc',
          boxShadow: '0 2px 4px rgba(0, 0, 0, 0.1)',
        }}
      >
        <div style={{ marginBottom: '15px' }}>
          <label htmlFor="Nombre" style={{ display: 'block', marginBottom: '8px' }}>
            Nombre:
          </label>
          <input
            type="text"
            name="Nombre"
            id="Nombre"
            value={formData.Nombre}
            onChange={handleInputChange}
            style={{
              width: '100%',
              padding: '10px',
              border: '1px solid #ccc',
              borderRadius: '4px',
            }}
            required
          />
        </div>

        <div style={{ marginBottom: '15px' }}>
          <label htmlFor="Telefono" style={{ display: 'block', marginBottom: '8px' }}>
            Teléfono:
          </label>
          <input
            type="text"
            name="Telefono"
            id="Telefono"
            value={formData.Telefono}
            onChange={handleInputChange}
            style={{
              width: '100%',
              padding: '10px',
              border: '1px solid #ccc',
              borderRadius: '4px',
            }}
            required
          />
        </div>

        <div style={{ marginBottom: '15px' }}>
          <label htmlFor="Email" style={{ display: 'block', marginBottom: '8px' }}>
            Email:
          </label>
          <input
            type="email"
            name="Email"
            id="Email"
            value={formData.Email}
            onChange={handleInputChange}
            style={{
              width: '100%',
              padding: '10px',
              border: '1px solid #ccc',
              borderRadius: '4px',
            }}
            required
          />
        </div>

        <div style={{ marginBottom: '15px' }}>
          <label htmlFor="FechaRegistro" style={{ display: 'block', marginBottom: '8px' }}>
            Fecha de Registro:
          </label>
          <input
            type="date"
            name="FechaRegistro"
            id="FechaRegistro"
            value={formData.FechaRegistro}
            onChange={handleInputChange}
            style={{
              width: '100%',
              padding: '10px',
              border: '1px solid #ccc',
              borderRadius: '4px',
            }}
            required
          />
        </div>

        <button
          type="submit"
          style={{
            backgroundColor: '#4CAF50',
            color: '#fff',
            padding: '10px 20px',
            border: 'none',
            borderRadius: '4px',
            cursor: 'pointer',
            display: 'block',
            width: '100%',
          }}
        >
          Guardar Cliente
        </button>
      </form>

      <a
        href="/customers"
        style={{
          display: 'block',
          textAlign: 'center',
          marginTop: '10px',
          color: '#3498db',
          textDecoration: 'none',
        }}
      >
        Volver a la Lista de Clientes
      </a>
    </div>
  );
};

export default createCustomer;
