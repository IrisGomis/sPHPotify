import React from 'react';
import logo from '../../images/logo/para-fondo-negro.png';
import { Link } from 'react-router-dom';
import "../views/styles/initView.css"

const InitView  = () => {
  return (

    <div className="containerHome">
      <div className="logoMicro">
        <img className="logo" src={logo} alt="logo micro con fondo negro" />
      </div>
      <div className="botones">
        <Link to="/ListView">
          <button className="btn1">Coder</button>
        </Link>
        <br />
        <Link to="/ListViewTrainer">
          <button className="btn2">Trainer</button>
        </Link>
      </div>
    </div>
  );
}

export default InitView;

