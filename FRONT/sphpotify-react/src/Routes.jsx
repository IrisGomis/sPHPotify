import * as React from 'react';
import {Routes, Route} from "react-router-dom";
import ListViewTrainer from './components/views/listViewTrainer';
import InitView from './components/views/InitView';
import FormView from './components/views/FormView';
import ListView from './components/views/ListView';



const Rutas = () => {
    return (
        <Routes>
            <Route path="/"  element={<InitView />} />
            <Route path="/FormView" element={<FormView />} />
            <Route path="/ListView" element={<ListView />} />
            <Route path="/ListViewTrainer" element={<ListViewTrainer />} />

        </Routes> 
     )
}
export default Rutas;        