import React, { useState } from "react";
import ListIconos from "./ListIconos";
import ListTrash from "./DeleteButton.jsx";
import DeleteTrash from "./DeleteButton.jsx";

const ListTabla = () => {
  const [data, setData] = useState([
    {
      song: "",
      url: "",
      artist: "",
      genre: "",
      date: "",
      image: "",
      user: "",
    },
  ]);

  const addRow = () => {
    setData([
      ...data,
      {
        song: "",
        url: "",
        artist: "",
        genre: "",
        date: "",
        image: "",
        user: "",
      },
    ]);
  };

  const deleteRow = (index) => {
    const newData = [...data];
    newData.splice(index, 1);
    setData(newData);
  };

  const editRow = (index, updatedValues) => {
    const newData = [...data];
    newData[index] = { ...newData[index], ...updatedValues };
    setData(newData);
  };

  return (
    <div className="tabla">
      <table className="table1">
        <tr className="celdas">
          <td>Song</td>
          <td>URL</td>
          <td>Artist</td>
          <td>Genre</td>
          <td>Date</td>
          <td>Image</td>
          <td>User</td>
          <td>Options</td>
        </tr>
        {data.map((item, index) => (
          <tr key={index}>
            <td>{item.song}</td>
            <td>{item.url}</td>
            <td>{item.artist}</td>
            <td>{item.genre}</td>
            <td>{item.date}</td>
            <td>{item.image}</td>
            <td>{item.user}</td>
            <td>
              <button onClick={() => deleteRow(index)}>
                <ListIconos />
              </button>
            </td>
          </tr>
        ))}
      </table>
    </div>
  );
};

export default ListTabla;
