<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daily Meat Inspection Report (Ruminants)</title>

  <!--Header-->
  <?php
    include("header.php");
  ?>
  
</head>
<body>

  <!-- Navbar -->
  <?php 
  include("navbar.php");
  ?>
  <div class="row red darken-2">
    <div class="col s12">
      <div class="card large white darken-1">
        <div class="center card-content grey-darken-3-text">
          <div class="form-action">
            <a href="" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Export to PDF" ><i class="small material-icons">file_download</i></a>
            <a href="" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Print" ><i class="small material-icons">print</i></a>
            <a href="" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Statistics" ><i class="small material-icons">dashboard</i></a>
          </div>
          <form>
            <div class="input-field col s3" style="margin:0 !important; float:right;">
              <input id="search" type="search" required>
              <label for="search"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
            </div>
          </form>
          <span class="card-title">Daily Meat Inspection Report (Ruminants)</span>
          <br>
          <hr>
          <div class="data-table-wrap">
            <table class="striped">
              <thead>
                <tr>
                  <th rowspan="4">#</th>
                  <th rowspan="4">Month</th>
                  <th rowspan="4">Region</th>
                  <th rowspan="4">Province</th>
                  <th rowspan="4">City</th>
                  <th rowspan="4">Name of Slaughterhouse</th>
                  <th rowspan="4">Type of Slaughterhouse</th>
                  <th rowspan="4">Accreditation No.</th>
                  <th rowspan="3">Shipment/ Batch Code</th>
                  <th rowspan="3">Date</th>
                  <th rowspan="3">Time of Inspection</th>
                  <th rowspan="3">Sex of <br>Species</th>
                  <th colspan="2" rowspan="2">Fit for Slaughter</th>
                  <th colspan="3" rowspan="2">Condemnation</th>
                  <th colspan="2" rowspan="2">Suspect</th>
                  <th rowspan="3">Time of Inspection</th>
                  <th colspan="2" rowspan="2">Fit for Human Consumption</th>
                  <th colspan="9">Condemnation</th><th class="tg-s6z2" rowspan="3">Establishment</th>
                  <th rowspan="3">Destination</th>
                  <th rowspan="3">Weight (kg)</th>
                  <th rowspan="4"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Add" id="add-dmir-r"><i class="material-icons">add</i></a></th>
                  <th rowspan="4"></th>
                  <th rowspan="4"></th>
                </tr>
                <tr>
                  <td rowspan="2">No. of Heads</td>
                  <td rowspan="2">Weight (kg)</td>
                  <td rowspan="2">Causes</td>
                  <td colspan="2">Organ</td>
                  <td colspan="2">Organ</td>
                  <td colspan="2">Organ</td>
                </tr>
                <tr>
                  <th>No. of Heads</td>
                  <th>Total Live Weight (kg)</td>
                  <th>No. of Heads</td>
                  <th>Total Live Weight (kg)</td>
                  <th>Cause/s</td>
                  <th>No. of Heads</td>
                  <th>Cause/s</td>
                  <td>No. of Heads</td>
                  <td>Dressed Weight (kg)</td>
                  <td>Weight (kg)</td>
                  <td>Causes</td>
                  <td>Weight (kg)</td>
                  <td>Causes</td>
                  <td>Weight (kg)</td>
                  <td>Causes</td>
                </tr>
                <tr>
                  <td class="tg-2nhx">(16)</td>
                  <td class="tg-2nhx">(17</td>
                  <td class="tg-2nhx">(18)</td>
                  <td class="tg-2nhx">(19)</td>
                  <td class="tg-2nhx">(20)</td>
                  <td class="tg-2nhx">(21)</td>
                  <td class="tg-2nhx">(22)</td>
                  <td class="tg-2nhx">(23)</td>
                  <td class="tg-2nhx">(24)</td>
                  <td class="tg-2nhx">(25)</td>
                  <td class="tg-2nhx">(26)</td>
                  <td class="tg-2nhx">(27)</td>
                  <td class="tg-2nhx">(28)</td>
                  <td class="tg-2nhx">(29)</td>
                  <td class="tg-2nhx">(30)</td>
                  <td class="tg-2nhx">(31)</td>
                  <td class="tg-2nhx">(32)</td>
                  <td class="tg-2nhx">(33)</td>
                  <td class="tg-2nhx">(34)</td>
                  <td class="tg-2nhx">(35)</td>
                  <td class="tg-2nhx">(36)</td>
                  <td class="tg-2nhx">(37)</td>
                  <td class="tg-2nhx">(38)</td>
                  <td class="tg-2nhx">(39)</td>
                  <td class="tg-2nhx">(40)</td>
                  <td class="tg-2nhx">(41)</td>
                </tr>
              </thead>
              <tbody>
                <tr class="td1">
                  <td rowspan="2">1</td>
                  <td rowspan="2">
                    <input id="Date" type="date" class="datepicker">
                  </td>
                  <td rowspan="2">
                    <select>
                      <option value="" disabled selected>Choose your option</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                  </td>
                  <td rowspan="3">
                    <!--
                    <?php
                      include("municipality.php");
                    ?>
                    -->
                  </td>
                  <td rowspan="3">
                    <!--
                    <?php
                      include("province.php");
                    ?>
                    -->
                  </td>
                  <td rowspan="2">
                    <input id="SH_Name" type="text" class="validate">
                  </td>
                  <td rowspan="2">
                    <select name="SH_Type">
                      <option value="" disabled selected>Choose your option</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                  </td>
                  <td rowspan="2">
                    <input id="Accreditation_No" type="number" class="validate">
                  </td>
                  <td rowspan="2">
                    <input id="Shipment_Code" type="text" class="validate">
                    </td>
                  <td rowspan="2">
                    <input id="Date" type="date" class="datepicker">
                  </td>
                  <td rowspan="2">
                    <input id="AnteTime_Inspect" type="date" class="datepicker">
                  </td>
                  <td>Male</td>
                  <td>
                    <input id="Quantity" type="number" class="validate">
                  </td>
                  <td>
                    <input id="Weight" type="number" class="validate">
                  </td>
                  <td>
                    <input id="Quantity" type="number" class="validate">
                  </td>
                  <td>
                    <input id="Weight" type="number" class="validate">
                  </td>
                  <td>
                    <input id="Condemn_Cause" type="text" class="validate">
                  </td rowspan="2">
                  <td>
                    <input id="Quantity" type="number" class="validate">
                  </td>
                  <td rowspan="2">
                    <input id="Condemn_Cause" type="text" class="validate">
                  </td>
                  <td rowspan="2">
                    <input id="AnteTime_Inspect" type="date" class="datepicker">
                  </td>
                  <td>
                    <input id="Quantity" type="number" class="validate">
                  </td>
                  <td>
                    <input id="Weight" type="number" class="validate">
                  </td>
                  <td>
                    <input id="Quantity" type="number" class="validate">
                  </td>
                  <td>
                    <input id="Weight" type="number" class="validate">
                  </td>
                  <td>
                    <input id="Condemn_Cause" type="text" class="validate">
                  </td>
                  <td>
                    <input id="Weight" type="number" class="validate">
                  </td>
                  <td>
                    <input id="Condemn_Cause" type="text" class="validate">
                  </td>
                  <td>
                    <input id="Weight" type="number" class="validate">
                  </td>
                  <td>
                    <input id="Condemn_Cause" type="text" class="validate">
                  </td>
                  <td>
                    <input id="Weight" type="number" class="validate">
                  </td>
                  <td>
                    <input id="Condemn_Cause" type="text" class="validate">
                  </td>
                  <td rowspan="2">
                    <select>
                      <option value="" disabled selected>Choose your option</option>
                      <option value="1">Wet Market</option>
                      <option value="2">Meat Shops</option>
                      <option value="3">Meat Cutting</option>
                      <option value="3">Hotel &amp; Restaurant</option>
                      <option value="3">Supermarket</option>
                      <option value="3">Meat Processing Plant</option>
                      <option value="3">Cold Storage</option>
                    </select>                  
                  </td>
                  <td rowspan="2">
                    <select>
                      <option value="" disabled selected>Choose your option</option>
                      <option value="1">Within the City</option>
                      <option value="2">Within the province</option>
                      <option value="3">Outside the Province</option>
                    </select>                  
                  </td>
                  <td rowspan="2">
                    <input id="Weight" type="number" class="validate">                 
                  </td>
                  <td rowspan="2"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Done" onclick="Materialize.toast('Data is Added!', 4000)"><i class="material-icons">done</i></a></td>
                  <td rowspan="2"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Cancel"><i class="material-icons center">clear</i></a></td>
                  <td rowspan="2"></td>
                </tr>
                <tr class="td1">
                  <td class="female">Female</td>
                  <td class="female">
                    <input id="Quantity" type="number" class="validate">
                  </td>
                  <td class="female">
                    <input id="Weight" type="number" class="validate">
                  </td>
                  <td class="female">
                    <input id="Quantity" type="number" class="validate">
                  </td>
                  <td class="female">
                    <input id="Weight" type="number" class="validate">
                  </td>
                  <td class="female">
                    <input id="Condemn_Cause" type="text" class="validate">
                  </td>
                  <td class="female">
                    <input id="Quantity" type="number" class="validate">
                  </td>
                  <td class="female">
                    <input id="Quantity" type="number" class="validate">
                  </td>
                  <td class="female">
                    <input id="Weight" type="number" class="validate">
                  </td>
                  <td class="female">
                    <input id="Quantity" type="number" class="validate">
                  </td>
                  <td class="female">
                    <input id="Weight" type="number" class="validate">
                  </td>
                  <td class="female">
                    <input id="Condemn_Cause" type="text" class="validate">
                  </td>
                  <td class="female">
                    <input id="Weight" type="number" class="validate">
                  </td>
                  <td class="female">
                    <input id="Condemn_Cause" type="text" class="validate">
                  </td>
                  <td class="female">
                    <input id="Weight" type="number" class="validate">
                  </td>
                  <td class="female">
                    <input id="Condemn_Cause" type="text" class="validate">
                  </td>
                  <td class="female">
                    <input id="Weight" type="number" class="validate">
                  </td>
                  <td class="female">
                    <input id="Condemn_Cause" type="text" class="validate">
                  </td>
                </tr>
                <?php
                  include("data-dmir-r.php");
                ?>
              </thead>
              <tbody>
              </tbody>
            </table>

          </div>

          <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active red"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
          </ul>   
        </div>
      </div>
    </div>
  </div>

  <!--footer-->
  <?php
    include("footer-white.php");
  ?>
  
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      $('.modal-trigger').leanModal();
    });
    $(document).ready(function() {
      $('select').material_select();
    });
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15 // Creates a dropdown of 15 years to control year
    });
    $('#add-dmir-r').click(function() {
     $('.td1').toggle('show');
    });
  </script>
  </body>
</html>
