import React from 'react';
import './App.css';
import Routes from '../src/Routes';
import { BrowserRouter } from 'react-router-dom';

function App() {
  return (
    <>
      <BrowserRouter>
        <Routes />
     </BrowserRouter> 
    </>  
  );
}

export default App;
