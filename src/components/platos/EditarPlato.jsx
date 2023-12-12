import React, { useState, useEffect } from 'react';
import { Link, useParams, useNavigate  } from 'react-router-dom';
import Titulo from '../layouts/titulo';
import Footer from '../layouts/Footer';

const EditarPlato = () => {
    const [dish, setDish] = useState({
        Nombre: '',
        Descripcion: '',
        Precio: '',
        Activo: '',
        // Imagen: null, // Dependiendo de cómo quieras manejar la carga de imágenes
    });
    const { id } = useParams();
    const navigate = useNavigate();


    useEffect(() => {
        fetch(`http://127.0.0.1:8000/api/dishes/${id}`)
            .then(response => response.json())
            .then(data => setDish(data))
            .catch(error => console.error('Error:', error));
    }, [id]);

    const handleChange = (e) => {
        const { name, value } = e.target;
        setDish(prevDish => ({
            ...prevDish,
            [name]: value
        }));
    };

    const handleSubmit = (e) => {
        e.preventDefault();

    const formData = new FormData();
    formData.append('Nombre', dish.Nombre);
    formData.append('Descripcion', dish.Descripcion);
    formData.append('Precio', dish.Precio);
    formData.append('Activo', dish.Activo);
    // Añade la imagen solo si se ha seleccionado una
    if (dish.Imagen) formData.append('Imagen', dish.Imagen);

    fetch(`http://127.0.0.1:8000/api/dishes/update/${id}`, {
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
            <h1 style={{ textAlign: 'center', marginBottom: '20px' }}>Editar Plato</h1>

            <form onSubmit={handleSubmit} style={{ backgroundColor: '#f9f9f9', padding: '20px', border: '1px solid #ccc', borderRadius: '5px', boxShadow: '0 0 10px rgba(0, 0, 0, 0.1)' }}>
                <div style={{ marginBottom: '15px' }}>
                    <label htmlFor="Nombre" style={{ display: 'block', marginBottom: '5px' }}>Nombre:</label>
                    <input type="text" name="Nombre" id="Nombre" value={dish.Nombre} onChange={handleChange} required style={{ width: '100%', padding: '10px', border: '1px solid #ccc', borderRadius: '4px' }} />
                </div>

                <div style={{ marginBottom: '15px' }}>
                    <label htmlFor="Descripcion" style={{ display: 'block', marginBottom: '5px' }}>Descripción:</label>
                    <textarea name="Descripcion" id="Descripcion" value={dish.Descripcion} onChange={handleChange} required style={{ width: '100%', padding: '10px', border: '1px solid #ccc', borderRadius: '4px' }} />
                </div>

                <div style={{ marginBottom: '15px' }}>
                    <label htmlFor="Precio" style={{ display: 'block', marginBottom: '5px' }}>Precio:</label>
                    <input type="number" name="Precio" id="Precio" value={dish.Precio} onChange={handleChange} step="0.01" required style={{ width: '100%', padding: '10px', border: '1px solid #ccc', borderRadius: '4px' }} />
                </div>

                <div style={{ marginBottom: '15px' }}>
                    <label htmlFor="Activo" style={{ display: 'block', marginBottom: '5px' }}>Estado activo:</label>
                    <select name="Activo" id="Activo" value={dish.Activo} onChange={handleChange} style={{ width: '100%', padding: '10px', border: '1px solid #ccc', borderRadius: '4px' }}>
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>

                {/* <div style={{ marginBottom: '15px' }}>
                    <label htmlFor="Imagen" style={{ display: 'block', marginBottom: '5px' }}>Imagen:</label>
                    <input type="file" name="Imagen" accept="image/*" style={{ width: '100%', padding: '10px', border: '1px solid #ccc', borderRadius: '4px' }} />
                </div> */}

                <button type="submit" style={{ backgroundColor: '#3498db', color: 'white', padding: '10px 20px', border: 'none', borderRadius: '4px', cursor: 'pointer' }}>Actualizar Plato</button>
            </form>

            

            <Link to="/platos-react" style={{ display: 'block', marginTop: '20px', textDecoration: 'none', color: '#3498db' }}>Volver a la Lista de Platos</Link>
        </div>
        <Footer/>
        </>
    );
};

export default EditarPlato;
