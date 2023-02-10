import React from "react";
import '../moleculas/styles/songsForm.css'
import LogoBM from "../../images/logo/para-fondo-negro.png"

function Search() {
  return (
    <>
    <img className="logoBM" src={LogoBM} alt="" />
    <div class="container">
      <form action="/action_page.php">
        <div class="row">
          <div class="col-25">
            <label for="fname">First Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="fname" name="firstname" placeholder="Your name.."></input>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Last Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="lname" name="lastname" placeholder="Your last name.."></input>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="country">Country</label>
        </div>
        <div class="col-75">
          <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Subject</label>
        </div>
        <div class="col-75">
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        </div>
      </div>
      <br></br>
      <div class="row">
        <input type="submit" value="Submit"></input>
      </div>
    </form>
  </div>
    </>
  );
}

export default Search;