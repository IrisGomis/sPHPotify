import React from "react";
import '../moleculas/styles/songsForm.css';
import LogoBM from "../../images/logo/para-fondo-negro.png";

function Search() {
  return (
    <>
    <div className="container">
      <img className="logoBM" src={LogoBM} alt="" />
      <div className="img-added">
        <img src="" alt=""/>
      </div>
      <div className="img-imput">
        <input type="file" name="image"/>
        <br></br>
      </div>
      <form className="form-items" action="" method="">
        <div className="elements-group">
          <label for="track">Song</label>
          <input type="text" id="track-name" placeholder="Insert New Song"></input>
        </div>

        <div className="elements-group">
          <label for="url">URL</label>
          <input type="url" id="url-name" placeholder="URL"></input>
        </div>

        <div className="elements-group">
          <label for="artist">Artist</label>
          <input type="text" id="artist-name" placeholder="Insert New Artist"></input>
        </div>

        <div className="elements-group">
          <label for="genre">Genre</label>
          <input type="text" id="genre-name" placeholder="Insert Genre"></input>
        </div>

        <div className="elements-group">
          <label for="date">Date</label>
          <input type="date" id="date-name" placeholder="Insert date."></input>
        </div>

        <div className="elements-group">
          <label for="user">User</label>
          <input type="text" id="user-name" placeholder="Insert New User."></input>
        </div>
        <div>
          <button className="btn-done">Done</button>
        </div>
      </form>

    </div>
    </>
  );
}

export default Search;