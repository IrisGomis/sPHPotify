import React from "react";
import logo from "../../images/logo/para-fondo-negro.png";
import ListButton from "../atomos/ListButton";
import ListTabla from "../atomos/listTablaTrainer";
import "./styles/listView.css";
import "./styles/listButton.css";

const ListViewTrainer = () => {
    return (
      <div className="containerList">
        <div className="logoMicro">
          <img className="microLog" src={logo} alt="logo micro con fondo negro" />
        </div>
        <div className="bottonAdd">
          <ListButton />
        </div>
         <ListTabla/>
      
      </div>
    );
  };
  
  export default ListViewTrainer;
  

