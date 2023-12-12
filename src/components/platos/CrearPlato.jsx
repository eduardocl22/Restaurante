import React, { useState } from 'react';
import Titulo from '../layouts/titulo';
import Footer from '../layouts/Footer';
import { Link, useNavigate } from 'react-router-dom';

const CrearPlato = () => {
    const [nombre, setNombre] = useState('');
    const [descripcion, setDescripcion] = useState('');
    const [precio, setPrecio] = useState('');
    const [activo, setActivo] = useState('1');
    const [imagen, setImagen] = useState(null);
    const navigate = useNavigate();
    const handleSubmit = (e) => {
        e.preventDefault();

        const formData = new FormData();
        formData.append('Nombre', nombre);
        formData.append('Descripcion', descripcion);
        formData.append('Precio', precio);
        formData.append('Activo', activo);
        if (imagen) {
            formData.append('Imagen', imagen);
        }

        fetch(`http://127.0.0.1:8000/api/dishes/create`, {
            method: 'POST',
            body: formData,
        
        })
        .then(response => response.json())
        .then(data => {
            console.log('Success:', data);
            navigate('/platos-react'); 
        })
        .catch((error) => {
            console.error('Error:', error);
        });

    };

    return (
        <>
         <Titulo/>
        <div style={{ maxWidth: '800px', margin: '0 auto' }}>
            <h1 style={{ textAlign: 'center', marginBottom: '20px' }}>Crear Plato</h1>

            <form onSubmit={handleSubmit} style={{ backgroundColor: '#f9f9f9', padding: '20px', border: '1px solid #ccc', borderRadius: '5px', boxShadow: '0 0 10px rgba(0, 0, 0, 0.1)' }}>
                <div style={{ marginBottom: '15px' }}>
                    <label htmlFor="Nombre" style={{ display: 'block', marginBottom: '5px' }}>Nombre:</label>
                    <input type="text" id="Nombre" required style={{ width: '100%', padding: '10px', border: '1px solid #ccc', borderRadius: '4px' }} value={nombre} onChange={(e) => setNombre(e.target.value)} />
                </div>

                <div style={{ marginBottom: '15px' }}>
                    <label htmlFor="Descripcion" style={{ display: 'block', marginBottom: '5px' }}>Descripción:</label>
                    <textarea id="Descripcion" required style={{ width: '100%', padding: '10px', border: '1px solid #ccc', borderRadius: '4px' }} value={descripcion} onChange={(e) => setDescripcion(e.target.value)} />
                </div>

                <div style={{ marginBottom: '15px' }}>
                    <label htmlFor="Precio" style={{ display: 'block', marginBottom: '5px' }}>Precio:</label>
                    <input type="number" id="Precio" step="0.01" required style={{ width: '100%', padding: '10px', border: '1px solid #ccc', borderRadius: '4px' }} value={precio} onChange={(e) => setPrecio(e.target.value)} />
                </div>

                <div style={{ marginBottom: '15px' }}>
                    <label htmlFor="Activo" style={{ display: 'block', marginBottom: '5px' }}>Estado activo:</label>
                    <select id="Activo" style={{ width: '100%', padding: '10px', border: '1px solid #ccc', borderRadius: '4px' }} value={activo} onChange={(e) => setActivo(e.target.value)}>
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>

                <div style={{ marginBottom: '15px' }}>
                    <label htmlFor="Imagen" style={{ display: 'block', marginBottom: '5px' }}>Imagen:</label>
                    <input type="file" id="Imagen" style={{ width: '100%', padding: '10px', border: '1px solid #ccc', borderRadius: '4px' }} onChange={(e) => setImagen(e.target.files[0])} />
                </div>

                <button type="submit" style={{ backgroundColor: '#3498db', color: 'white', padding: '10px 20px', border: 'none', borderRadius: '4px', cursor: 'pointer' }}>Guardar Plato</button>
            </form>

            <Link to="/platos-react" style={{ display: 'block', marginTop: '20px', textDecoration: 'none', color: '#3498db' }}>Volver a la Lista de Platos</Link>

        </div>
        <Footer/>
        </>
    );
};

export default CrearPlato;
