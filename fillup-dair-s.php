<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daily Animal Inspection Report (Swine)</title>

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
          <span class="card-title">Daily Animal Inspection Report (Swine)</span>
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
                  <th rowspan="3">Date</th>
                  <th rowspan="3">Time of Arrival</th>
                  <th rowspan="3">Shipment/ Batch Code</th>
                  <th rowspan="3">Means of Transport</th>
                  <th rowspan="3">Reference Delivery Receipt</th>
                  <th rowspan="3">Age Classification</th>
                  <th rowspan="3">No. of Heads</th>
                  <th rowspan="3">Total Live Weight (kg)</th>
                  <th rowspan="3">Trader's/ Dealer's Name</th>
                  <th rowspan="3">Owner/ Name of Farm</th>
                  <th rowspan="3">Address of the Farm</th>
                  <th rowspan="3">Shipping Documents Presented</th>
                  <th rowspan="3">Holding Pen Number</th>
                  <th rowspan="4"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Add" id="add-dair-s"><i class="material-icons">add</i></a></th>
                  <th rowspan="4"></th>
                  <th rowspan="4"></th>
                </tr>
                <tr>
                </tr>
                <tr>
                </tr>
                <tr>
                  <td class="tg-2nhx">(1)</td>
                  <td class="tg-2nhx">(2)</td>
                  <td class="tg-2nhx">(3)</td>
                  <td class="tg-2nhx">(4)</td>
                  <td class="tg-2nhx">(5)</td>
                  <td class="tg-2nhx">(6)</td>
                  <td class="tg-2nhx">(7)</td>
                  <td class="tg-2nhx">(8)</td>
                  <td class="tg-2nhx">(9)</td>
                  <td class="tg-2nhx">(10)</td>
                  <td class="tg-2nhx">(11)</td>
                  <td class="tg-2nhx">(12)</td>
                  <td class="tg-2nhx">(13)</td>
                </tr>
              </thead>
              <tbody>
                <tr class="td1">
                  <td rowspan="3">1</td>
                  <td rowspan="3">
                    <input id="Date" type="date" class="datepicker">
                  </td>
                  <td rowspan="3">
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
                  <td rowspan="3">
                    <input id="SH_Name" type="text" class="validate">
                  </td>
                  <td rowspan="3">
                    <select name="SH_Type">
                      <option value="" disabled selected>Choose your option</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                  </td>
                  <td rowspan="3">
                    <input id="Accreditation_No" type="number" class="validate">
                  </td>
                  <td rowspan="3">
                    <input id="Date" type="date" class="datepicker">
                  </td>
                  <td rowspan="3">
                    <input id="Time_Arrival" type="date" class="datepicker">
                  </td>
                  <td rowspan="3">
                    <input id="Shipment_Code" type="text" class="datepicker">
                  </td>
                  <td rowspan="3">
                    <input id="Transport_Type" type="text" class="datepicker">
                  </td>
                  <td rowspan="3">
                    <input id="Delivery_Receipt" type="text" class="datepicker">
                  </td>
                  <td>
                    Culled Sow/Boar
                  </td>
                  <td>
                    <input id="Quantity" type="number" class="validate">
                  </td>
                  <td>
                    <input id="Weight" type="number" class="validate">
                  </td>
                  <td rowspan="3">
                    <input id="Dealer_Name" type="text" class="datepicker">
                  </td>
                  <td rowspan="3">
                    <input id="Farm_Name" type="text" class="datepicker">
                  </td>
                  <td rowspan="3">
                    <input id="Farm_Address" type="text" class="datepicker">
                  </td>
                  <td rowspan="3">
                    <input type="checkbox" id="S.P." name="S.P." />
                    <label for="S.P.">S.P.</label>

                    <input type="checkbox" id="V.H.C." name="V.H.C."/>
                    <label for="V.H.C.">V.H.C.</label>

                    <input type="checkbox" id="C.O." name="C.O."/>
                    <label for="C.O.">C.O.</label>

                    <input type="checkbox" id="C.T.D." name="C.T.D."/>
                    <label for="C.T.D.">C.T.D.</label>

                    <input type="checkbox" id="None" name="None"/>
                    <label for="None">None</label>                  </td>
                  <td rowspan="3">
                    <input id="Pen_No" type="text" class="datepicker">
                  </td>
                  <td rowspan="3"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Done" onclick="Materialize.toast('Data is Added!', 4000)"><i class="material-icons">done</i></a></td>
                  <td rowspan="3"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Cancel"><i class="material-icons center">clear</i></a></td>
                  <td rowspan="3"></td>
                </tr>
                <tr class="td1">
                  <td class="female">Fattener</td>
                  <td class="female">
                    <input id="Quantity" type="number" class="validate">
                  </td>
                  <td class="female">
                    <input id="Weight" type="number" class="validate">
                  </td>
                </tr>
                <tr class="td1">
                  <td>Grower</td>
                  <td>
                    <input id="Quantity" type="number" class="validate">
                  </td>
                  <td>
                    <input id="Weight" type="number" class="validate">
                  </td>
                </tr>
                <?php
                  include("data-dair-s.php");
                ?>
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
    $('#add-dair-s').click(function() {
     $('.td1').toggle('show');
    });
  </script>
  </body>
</html>
