import React from "react";
import { NavLink } from "react-router-dom";


const ListButton = () => {
  return (
    <div className="bottonAdd">
      <NavLink to="/FormView">
        <button>Add Song</button> 
      </NavLink>
    </div>
  );
}

export default ListButton;
