import React from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faTrash} from "@fortawesome/free-solid-svg-icons";




function ListIconos() {
  return (
    <div>
      <button>
      <FontAwesomeIcon icon={faTrash} />
      </button>
    </div>
  );
}

export default ListIconos;