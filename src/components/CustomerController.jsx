import React, { useState } from 'react';
import axios from 'axios';

const CustomerController = ({ setCustomers }) => {
  const [newCustomerData, setNewCustomerData] = useState({
    NombreCompleto: '',
    Email: '',
  });

  const handleAddCustomer = async () => {


    fetch('http://127.0.0.1:8000/api/customers')
    .then(response => response.json())
    .then(data => console.log(data));
    
    // const endpint = "http://127.0.0.1:8000/"
    // const res = await axios.get(endpint+'api/customers')
    // console.log(res.data)
    return false
    try {

      const response = await axios.post('/api/customers', newCustomerData);

      setCustomers((prevCustomers) => [...prevCustomers, response.data]);

      setNewCustomerData({ NombreCompleto: '', Email: '' });
    } catch (error) {
      console.error('Error adding customer:', error);
    }
  };

  return (
    <div>
      <h2>Controlador de Clientes</h2>
      <div>
        <label>Nombre Completo:</label>
        <input
          type="text"
          value={newCustomerData.NombreCompleto}
          onChange={(e) =>
            setNewCustomerData({
              ...newCustomerData,
              NombreCompleto: e.target.value,
            })
          }
        />
      </div>
      <div>
        <label>Email:</label>
        <input
          type="text"
          value={newCustomerData.Email}
          onChange={(e) =>
            setNewCustomerData({
              ...newCustomerData,
              Email: e.target.value,
            })
          }
        />
      </div>
      <button onClick={handleAddCustomer}>Agregar Cliente</button>
    </div>
  );
};

export default CustomerController;