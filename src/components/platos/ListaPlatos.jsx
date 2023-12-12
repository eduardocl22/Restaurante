import React, { useEffect, useState } from 'react'
import { Link, useNavigate } from 'react-router-dom';


export default function ListaPlatos() {
    const [dishes, setDishes] = useState([]);
    const navigate = useNavigate();
    useEffect(() => {
      fetch('http://127.0.0.1:8000/api/dishes')
        .then(response => response.json())
        .then(data => setDishes(data))
        .catch(error => console.error('Error:', error));
    }, []);


    function handleDelete(id) {
        fetch(`http://127.0.0.1:8000/api/dishes/delete/${id}`, {
            method: 'DELETE',
        
        
        })
        .then(response => response.json())
        .then(data => {
            console.log('plato eliminado');
            fetch('http://127.0.0.1:8000/api/dishes')
            .then(response => response.json())
            .then(data => setDishes(data))
            .catch(error => console.error('Error:', error));
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }

  
  return (

    <>
        <div style={{maxWidth: "800px", margin: "0 auto"}}>
        <h1 style={{textAlign: "center", marginBottom: "20px"}}>Lista de Platos</h1>
        <Link 
    to="/platos-react/dish/create" // Cambia esto por la ruta correcta que tengas en tu aplicación React
    style={{
        display: 'block',
        marginBottom: '10px',
        textDecoration: 'none',
        color: '#3498db',
        fontWeight: 'bold',
        border: '1px solid #3498db',
        padding: '8px 16px',
        borderRadius: '4px',
        transition: 'background-color 0.3s, color 0.3s'
    }}
>
    Crear Nuevo Plato
</Link>

        <table style={{ width: '100%', borderCollapse: 'collapse', marginBottom: '20px' }}>
            <thead>
                <tr style={{ backgroundColor: '#4CAF50', color: 'white' }}>
                    <th style={{ padding: '12px' }}>Nombre</th>
                    <th style={{ padding: '12px' }}>Descripción</th>
                    <th style={{ padding: '12px' }}>Precio</th>
                    <th style={{ padding: '12px' }}>Estado Activo</th>
                    <th style={{ padding: '12px' }}>Imagen</th>
                    <th style={{ padding: '12px' }}>Acciones</th>
                </tr>
            </thead>
            <tbody>
                {dishes.map((d) => (
                    <tr key={d.id}>
                        <td style={{ padding: '8px' }}>{d.Nombre}</td>
                        <td style={{ padding: '8px' }}>{d.Descripcion}</td>
                        <td style={{ padding: '8px' }}>{d.Precio}</td>
                        <td style={{ padding: '8px' }}>{d.Activo ? 'Activo' : 'Inactivo'}</td>
                        <td style={{ padding: '8px' }}>
                            {d.Imagen ? (
                                <img src={`images/${d.Imagen}`} alt={d.Nombre} style={{ maxWidth: '100px' }} />
                            ) : (
                                'No hay imagen'
                            )}
                        </td>
                        <td style={{ padding: '8px' }}>
                            <Link to={`/platos-react/dish/show/${d.id}`} style={{ backgroundColor: 'green', color: 'white', border: 'none', padding: '5px 10px', borderRadius: '4px', cursor: 'pointer' }}>Ver</Link>
                            <Link to={`/platos-react/dish/edit/${d.id}`} style={{ backgroundColor: 'blue', color: 'white', border: 'none', padding: '5px 10px', borderRadius: '4px', cursor: 'pointer' }}>Editar</Link>
                            <Link  style={{backgroundColor: '#d9534f', color: 'white', border: 'none', padding: '5px 10px', borderRadius: '4px', cursor: 'pointer', marginRight: '10px'}}
                                    onClick={()=>{handleDelete(d.id)}}>Eliminar</Link>
                            
                        </td>
                    </tr>
                ))}
            </tbody>
        </table>
        </div>

    </>
  )
}
