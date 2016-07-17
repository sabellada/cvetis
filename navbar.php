<style type="text/css">
ul#stats.dropdown-content{
  width: 200px !important;
}
#login.modal{
  width: 300px;
  min-height: 50%;
}
#signup.modal{
  width: 500px;
  height: auto;
}
#signup.modal-content{
  height: auto;
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
  <div style="border-bottom: 3px solid #F44336; margin-top: 15px; z-index: 100000;">
    <h4 class="center">Sign Up</h4>
  </div>
  <div class="modal-content" style="overflow: hidden;">
    <div class="row">
      <div class="col s12" style="overflow: auto; height: 500px;">
        <form class="col s12" method="post" action="<?=$_SERVER['PHP_SELF']?>">
          <div class="input-field col m6">
            <select name="region">
              <option value="" disabled selected>Choose your option</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
            <label>Region</label>
          </div>
          <div class="input-field col m6">
            <select name="province">
              <option value="" disabled selected>Choose your option</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
            <label>Province</label>
          </div>
          <div class="input-field col m6">
            <select name="City">
              <option value="" disabled selected>Choose your option</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
            <label>City</label>
          </div>

          <div class="input-field col m6">
            <input id="contact_no" name="contact_no" id="contact_no" type="text" class="validate">
            <label for="contact_no">Contact Number</label>
          </div>

          <div class="input-field col m12">
            <input id="password" name="password" id="password" type="text" class="validate">
            <label for="password">Password</label>
          </div>

          <div class="input-field col m12">
            <h4>Please tick the Services offered in your office</h4>
              <div class="section">
                <h5>Veterinary Services</h5>
                <p>
                  <input type="checkbox" name="dogreg" id="dogreg" value="dogreg" />
                  <label for="dogreg">Dog Registry</label>
                </p>
              </div>
              <div class="divider"></div>

              <div class="section">
                <h5>Livestock Services</h5>
                <p>
                  <input type="checkbox" name="pslr" id="pslr" value="pslr"/>
                  <label for="pslr">Permit to Slaughter Large Ruminants</label>

                  <input type="checkbox" name="cs" id="cs" value="cs" />
                  <label for="cs">Condemnation Slip</label>
                </p>
              </div>
              <div class="divider"></div>

              <div class="section">
                <h5>Meat Inspection Services</h5>
                <p>
                  <input type="checkbox" value="dair-r" id="dair-r" name="avservice" value="dair-r" />
                  <label for="dair-r">Daily Animal Inspection Report (Ruminants)</label>

                  <input type="checkbox" value="dair-s" id="dair-s" name="avservice" value="dair-s" />
                  <label for="dair-s">Daily Animal Inspection Report (Ruminants)</label>

                  <input type="checkbox" value="dmir-r" id="dmir-r" name="avservice" value="dmir-r" />
                  <label for="dmir-r">Daily Meat Inspection Report (Ruminants)</label>

                  <input type="checkbox" value="dmir-s" id="dmir-s" name="avservice" value="dmir-s" />
                  <label for="dmir-s">Daily Meat Inspection Report (Ruminants)</label>

                  <input type="checkbox" value="mmp-cert" id="mmp-cert" name="avservice" value="mmp-cert" />
                  <label for="mmp-cert">Meat and Meat Products Inspection Certificate</label>

                  <input type="checkbox" value="postmeatest" id="postmeatest" name="avservice" value="postmeatest" />
                  <label for="postmeatest">Post Meat Establishment Report</label>
                </p>
              </div>
            </div>
        <div class="modal-footer" id="view">
          <input class="waves-effect waves-light btn red" type="reset" value="Reset Form">
          <input class="waves-effect waves-light btn red" type="submit" name="submitok" value="Submit">
        </div>
        </form>
     </div>
    </div>
  </div>
</div>   
<?php
if(isset($_POST['submitok'])){//to run PHP script on submit
if(!empty($_POST['avservice'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['avservice'] as $selected){
echo $selected."</br>";
}
}
}
?>