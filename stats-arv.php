<!DOCTYPE html>
<html lang="en">
<head>
  <title>ARV Statistics</title>

  <!--Header-->
  <?php
    include("header.php");
  ?>
  
  <style type="text/css">
  .card.large{
    margin: 50px auto;
    width: 80%;
  }
  </style>
</head>
<body>

  <!-- Navbar -->
  <?php 
  include("navbar.php");
  ?>

  <div class="row red darken-2">
    <div id="stats" class="col s12" style="display:flex;">
      <div class="card large white darken-1">
        <div class="center card-content grey-darken-3-text">
          <div class="form-action">
            <a href="" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Export to PDF" ><i class="small material-icons">file_download</i></a>
            <a href="" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Print" ><i class="small material-icons">print</i></a>
            <a href="" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Statistics" ><i class="small material-icons">dashboard</i></a>
          </div>
          <form>
            <div class="input-field col s3" style="margin:0 !important; float:right;">
               <input type="date" class="datepicker">
               to
               <input type="date" class="datepicker">
            </div>
          </form>
          <span class="card-title left-align">ARV Statistics</span>
          <br>
          <hr>
          <div>
            <div class="row">
              <canvas id="bar-canvas" width="800" height="600"></canvas>

            </div>
            <canvas id="line-canvas" width="1200" height="600"></canvas>
          </div>
        </div>
        <div class="card-action">
          <div class="chip">ARV Summary Report</div>
          <div class="chip">Dog Registry Form</div>
        </div>
      </div>
    </div>
  </div>
  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large brown lighten-5">
      <i class="large material-icons red-text">get_app</i>
    </a>
    <ul>
      <li><a class="btn-floating brown lighten-3 red-text" id="download-pdf">PDF</a></li>
      <li><a class="btn-floating brown lighten-4 red-text">XML</a></li>
    </ul>
  </div>
  
  <!--footer-->
  <?php
  include("footer-white.php");
  ?>

  </body>
  
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/jspdf.min.js"></script>
  <script type="text/javascript">
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15 // Creates a dropdown of 15 years to control year
    });
  </script>
</html>
