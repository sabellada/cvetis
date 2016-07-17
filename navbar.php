<style type="text/css">
ul#stats.dropdown-content{
  width: 200px !important;
}
#login.modal{
  width: 300px;
  min-height: 50%;
}
</style>

<div class="navbar-fixed">
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo tooltipped" data-position="bottom" data-delay="50" data-tooltip="Go to CVETIS Home"><img src="img/cvetis.png" style="padding-top:10px;" height="50px;">CVETIS</a>
      <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-button" href="#!" data-activates="services">Services<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="#!" data-activates="stats">Statistics<i class="material-icons right">arrow_drop_down</i></a></li>          
        <li><a class="waves-effect waves-light modal-trigger" href="#login">Login</a></li>
        <li><a class="waves-effect waves-light modal-trigger" href="#signup">Sign Up</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a class="dropdown-button" href="#!" data-activates="servicesm">Services<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="#!" data-activates="statsm">Statistics<i class="material-icons right">arrow_drop_down</i></a></li>          
        <li><a class="waves-effect waves-light modal-trigger" href="#login">Login</a></li>
        <li><a class="waves-effect waves-light modal-trigger" href="#signup">Sign Up</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>

<!--Login Modal-->
<div id="login" class="modal">
  <div style="border-bottom: 1px solid rgba(0, 0, 0, 0.1); margin-top: 15px; z-index: 100000;">
    <h4 class="center">Login</h4>
  </div>
  <div class="row">
    <form class="col s12">
      <div class="row">
      <div class="input-field col s12">
        <input placeholder="Placeholder" id="first_name" type="text" class="validate">
        <label for="first_name">First Name</label>
      </div>
      <div class="input-field col s12">
        <input id="password" type="password" class="validate">
        <label for="password">Password</label>
      </div>
      </div>
        <button style="margin-bottom:5px;" class="btn waves-effect waves-light col s12" type="submit" name="action">Submit
          <i class="material-icons right">send</i>
        </button>
        <button class="btn waves-effect waves-light col s12" type="submit" name="action">Cancel
          <i class="material-icons right">clear</i>
        </button>
    </form>
  </div>
</div>   

  <!--Stats drop down-->
<ul id="stats" class="dropdown-content">
  <li><a href="#!">ARV Statistics</a></li>
  <li><a href="#!">Meatshop Statistics</a></li>
  <li><a href="#!">Livestock Statistics</a></li>
</ul>

  <ul id='services' class='dropdown-content'>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
    <li><a class='dropdown-button2 d' href='#' data-activates='dropdown2' data-hover="hover" data-alignment="left">Drop Me!</a></li>
</ul>


  <!--Sign Up Modal-->
<div id="signup" class="modal modal-fixed-footer">
    <div style="border-bottom: 1px solid rgba(0, 0, 0, 0.1); margin-top: 15px; z-index: 100000;">
      <h4 class="center">Sign Up</h4>
    </div>
    <div class="modal-content" style="overflow: hidden;">
      <div class="row">
        <div id="signUp-form" class="col s12" style="overflow-y: auto; height: 440px">
          <form class="col s12">
            <div class="input-field col m3">
              <input id="dogreg-date" type="date" class="datepicker">
              <label for="dogreg-date">Date of Registration</label>
            </div>
            <div class="input-field col m3">
              <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label>Province</label>
            </div>
            <div class="input-field col m3">
              <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label>Municipality</label>
            </div>
            <div class="input-field col m3">
              <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label>Zone</label>
            </div>
            <div class="divider"></div>
            <div class="section">
              <h5>Owner Details</h5>
            </div>
            <div class="divider"></div>
            <div class="input-field col m4">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Owner First Name</label>
            </div>
            <div class="input-field col m4">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Owner Last Name</label>
            </div>
            <div class="input-field col m4">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Contact Number</label>
            </div>
            <div class="input-field col m12">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Address</label>
            </div>

            <div class="divider"></div>
              <div class="section">
              <h5>Dog Details</h5>
            </div>
            <div class="divider"></div>
            <div class="input-field col m4">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Name</label>
            </div>
            <div class="input-field col m2">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Age</label>
            </div>
            <div class="input-field col m3">
              <select>
                <option value="" disabled selected>Choose</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
              </select>
              <label>Gender</label>
            </div>
            <div class="input-field col m3">
              <select>
                <option value="" disabled selected>Choose</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
              </select>
              <label>Desexed</label>
            </div>
            <div class="input-field col m4">
              <select>
                <option value="" disabled selected>Choose</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
              </select>
              <label>Breed</label>
            </div>
            <div class="input-field col m4">
              <select>
                <option value="" disabled selected>Choose</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
              </select>
              <label>Color</label>
            </div>
            <div class="input-field col m4">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Distinguishing Mark</label>
            </div>
            <div class="input-field col m4">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Microchip Number</label>
            </div>
            <div class="input-field col m4">
              <input id="last_vac" type="date" class="datepicker">
              <label for="last_vac">Date of Last Vaccination</label>
            </div>
            <div class="input-field col m4">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Dog Origin</label>
            </div>
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">Remarks</label>
            </div>
            <div class="modal-footer">
              <a href="fillup-dogreg.php" class="waves-effect waves-light btn red" id="view">View Data</a>
              <a href="stats-arv.php" class="waves-effect waves-light btn red" id="view">View Statistics</a>
            </div>
          </form>
       </div>

      </div>
    </div>
  </div>   