<!DOCTYPE html>
<html lang="en">
<head>
  <title>About CVETIS</title>

  <!--Header-->
  <?php
    include("header.php");
  ?>
  
</head>
<!--MODALS-->
  <!--Dog Registry Form-->
  <?php
  include("details-dogreg.php");
  ?>
  <!--Post Meat Establishment-->
  <?php
  include("details-postmeatest.php");
  ?>
  <!--Post Meat Establishment-->
  <?php
  include("details-mmp-cert.php");
  ?>
  <!--Permit to slaughter-->
  <?php
  include("details-pslr.php");
  ?>
  <!--Condemnation Slip-->
  <?php
  include("details-cs.php");
  ?>
  <!--Daily Animal Inspection Report Ruminants-->
  <?php
  include("details-dair-r.php");
  ?>
  <!--Daily Animal Inspection Report Swine-->
  <?php
  include("details-dair-s.php");
  ?>
  <!--Daily Meat Inspection Report Ruminants-->
  <?php
  include("details-dmir-r.php");
  ?>
   <!--Daily Meat Inspection Report Swine-->
  <?php
  include("details-dmir-s.php");
  ?> 

<!--MAIN-->
<body>
  <!-- Navbar -->
  <?php 
  include("navbar.php");
  ?>

  <!--1st parallax img-->
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center red-text text-lighten-2">CVETIS</h1>
        <div class="row center">
          <h5 class="header col s12 light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/pets/cat.jpg" alt="Unsplashed background img 1"></div>
  </div>

  <!--Services-->
  <div class="container">
    <div class="section">
      <div id="services" class="row scrollspy" >
        <div id="title">
          <h4 class="center">SERVICES</h4>
          <h6 class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</h6>
        </div>

        <br>
        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center red-text"><i class="material-icons">pets</i> Veterinary Services</h5>
              <p class="center light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          </div>
          <a class='dropdown-button btn' href='#' data-activates='v-services'>Forms List</a>
          <ul id='v-services' class='dropdown-content'>
            <li><a href="#details-dogreg" class="modal-trigger">Dog Registry Form</a></li>
          </ul>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center red-text"><i class="material-icons">pets</i> Livestock Services</h5>
            <p class="center light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          </div>
          <a class='dropdown-button btn' href='#' data-activates='l-services'>Forms List</a>
          <ul id='l-services' class='dropdown-content'>
            <li><a href="#details-pslr" class="modal-trigger">Permit to Slaughter Large Ruminants</a></li>
            <li><a href="#details-cs" class="modal-trigger">Condemnation Slip</a></li>
          </ul>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center red-text"><i class="material-icons">pets</i> Meat Services</h5>
            <p class="center light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          </div>
          <a class='dropdown-button btn' href='#' data-activates='m-services'>Forms List</a>
          <ul id='m-services' class='dropdown-content'>
            <li><a href="#details-dair-r" class="modal-trigger">Daily Animal Inspection Report (Ruminants)</a></li>
            <li><a href="#details-dair-s" class="modal-trigger">Daily Animal Inspection Report (Swine)</a></li>
            <li><a href="#details-dmir-r" class="modal-trigger">Daily Meat Inspection Report (Ruminants)</a></li>
            <li><a href="#details-dmir-s" class="modal-trigger">Daily Meat Inspection Report (Swine)</a></li>
            <li><a href="#details-postmeatest" class="modal-trigger">Post Meat Establishment Report</a></li>
            <li><a href="#details-mmp-cert" class="modal-trigger">Meat and Meat Product Inspection Certificate</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!--2nd parallax img-->
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/pets/puppy.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <!--Features-->
  <div class="container">
    <div class="section">

      <div id="features" class="row">
       <div id="title">
          <h4 class="center">Features</h4>
          <h6 class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</h6>
        </div>
        <br>
        <div class="col s12 m6">
          <div class="icon-block">
            <h5 class="center red-text"><i class="material-icons">dashboard</i> Dashboard</h5>

            <p class="center light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="icon-block">
            <h5 class="center red-text"><i class="material-icons">description</i> E-Forms</h5>

            <p class="center light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!--3rd parallax img-->
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/pets/catdog.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <!--meat d team-->
  <div class="container">
    <div class="section">

      <div id="developers" class="row">
       <div id="title">
          <h4 class="center">Meat the Team</h4>
          <h6 class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</h6>
        </div>
        <br>
        <div class="col s4">
          <img src="img/ruby.jpg" style="width:100%;">
          <div class="icon-block">
            <h5 class="center red-text">BUTTERCUP</h5>
            <p class="center light">Lorem ipsum dolor sit amet, <br>
                consectetur adipiscing elit, sed do eiusmod <br>
                tempor incididunt ut labore <br></p>
          </div>
        </div>

        <div class="col s12 m4">
          <img src="img/chua.jpg" style="width:100%;">
          <div class="icon-block">
            <h5 class="center red-text">BLOSSOM</h5>
            <p class="center light">Lorem ipsum dolor sit amet, <br>
                consectetur adipiscing elit, sed do eiusmod <br>
                tempor incididunt ut labore <br></p>
          </div>
        </div>

        <div class="col s12 m4">
          <img src="img/sam.jpg" style="width:100%;">
          <div class="icon-block">
            <h5 class="center red-text">BUBBLES</h5>
            <p class="center light">Lorem ipsum dolor sit amet, <br>
                consectetur adipiscing elit, sed do eiusmod <br>
                tempor incididunt ut labore <br></p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!--footer-->
  <?php 
  include("footer-red.php");
  ?>

  </body>
<script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  $(document).ready(function(){
    $('ul.tabs').tabs(
      /*for identifying which tab is active then diabling some buttons from http://jsfiddle.net/queryj/CnEUh/1/

          activate: function (event, ui) {
              var active = $('#tabs').tabs('option', 'active');
              $("#tabid").html('the tab id is ' + $("#tabs ul>li a").eq(active).attr("href"));
          }
      */
      );
  });
  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: false, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'center' // Displays dropdown with edge aligned to the left of button
    }
  );

  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
  $(document).ready(function() {
    $('select').material_select();
  });
$(document).ready(function(){
    $('.scrollspy').scrollSpy();
  });

</html>
