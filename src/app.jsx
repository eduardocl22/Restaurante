import React from "react";
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';

import  ReactDOM  from "react-dom/client";
import Platos from "./components/platos/Platos";
import ViewPlato from "./components/platos/ViewPlato";
import CrearPlato from "./components/platos/CrearPlato";
import EditarPlato from "./components/platos/EditarPlato";


if(document.getElementById('root')){
    const Index = ReactDOM.createRoot(document.getElementById('root'));
    Index.render(
        <Router>
       <Routes>
        <Route path="/platos-react/dish/show/:id" element={<ViewPlato />} />
        <Route path="/platos-react/dish/edit/:id" element={<EditarPlato />} />
        <Route path="/platos-react/dish/create" element={<CrearPlato />} />
        <Route path="/platos-react" element={<Platos />} />
      </Routes>
    </Router>
    )
    
}