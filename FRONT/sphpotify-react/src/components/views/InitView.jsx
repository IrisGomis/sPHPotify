import React from "react";
import logo from "../../images/logo/para fondo negro.png";
import "../views/styles/initView.css";

const InitView = () => {
  return (
    <div className="containerHome">
      <div className="logoMicro">
      <img className="logo" src={logo} />
      </div>
      <div className="botones">
        <button className="btn1">Coder</button>
        <br />
        <button className="btn2">Trainer</button>
      </div>
    </div>
  );
};
export default InitView;
