import React from "react";
import logo from "../../images/logo/para fondo negro.png";
import ListIconos from "../atomos/ListIconos";
import ListButton from "../atomos/ListButton";
import ListTabla from "../../../src/components/atomos/listTabla";
import "./styles/listView.css";
import "./styles/listButton.css";




const ListView = () => {
  return (
    <div className="containerList">
      <div className="logoMicro">
        <img className="microLog" src={logo} />
      </div>
      <div className="bottonAdd">
        <ListButton />
      </div>
      <ListTabla/>
    
    </div>
  );
};

export default ListView;
