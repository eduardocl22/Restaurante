import React, { useEffect, useState } from 'react'
import Titulo from '../layouts/titulo'
import Headers from '../layouts/Footer'
import { Link, useParams } from 'react-router-dom';

export default function ViewPlato() {
    const { id } = useParams();
    const [dish, setDish] = useState(null);


    useEffect(() => {
        fetch(`http://127.0.0.1:8000/api/dishes/${id}`) // Asegúrate de que la URL sea correcta
            .then(response => response.json())
            .then(data => setDish(data))
            .catch(error => console.error('Error:', error));
    }, [id]);

    if (!dish) {
        return <div>Cargando...</div>; // O algún otro indicador de carga
    }

  return (
    <>
    <div>
    <Titulo/>
    <div style={{ maxWidth: '800px', margin: '0 auto' }}>
            <h1 style={{ textAlign: 'center', marginBottom: '20px' }}>Detalles del Plato</h1>

            <table style={{ width: '100%', borderCollapse: 'collapse', marginBottom: '20px' }}>
                <tbody>
                    <tr>
                        <th style={{ width: '30%' }}>Nombre:</th>
                        <td>{dish.Nombre}</td>
                    </tr>
                    <tr>
                        <th>Descripción:</th>
                        <td>{dish.Descripcion}</td>
                    </tr>
                    <tr>
                        <th>Precio:</th>
                        <td>{dish.Precio}</td>
                    </tr>
                    <tr>
                        <th>Estado Activo:</th>
                        <td>{dish.Activo ? 'Activo' : 'Inactivo'}</td>
                    </tr>
                    <tr>
                        <th>Imagen:</th>
                        <td>
                            {dish.Imagen ? (
                              
                                <img src={`/images/${dish.Imagen}`} alt={dish.Nombre} style={{ maxWidth: '300px', border: '1px solid #ccc', borderRadius: '4px', marginBottom: '10px' }} />
                            ) : (
                                <p>No hay imagen disponible.</p>
                            )}
                        </td>
                    </tr>
                </tbody>
            </table>

            <Link to={`/platos-react/dish/edit/${dish.id}`} style={{ display: 'inline-block', textDecoration: 'none', backgroundColor: '#3498db', color: 'white', padding: '10px 20px', border: 'none', borderRadius: '4px', cursor: 'pointer', marginRight: '10px' }}>Editar Plato</Link>
            <Link to="/platos-react" style={{ display: 'inline-block', textDecoration: 'none', color: '#3498db', border: '1px solid #3498db', padding: '10px 20px', borderRadius: '4px', transition: 'background-color 0.3s, color 0.3s' }}>Volver a la Lista de Platos</Link>
        </div>
    <Headers/>
    </div>
    
    </>
  )
}
