<!DOCTYPE html>
<html lang="en">
<head>
  <title>Post Meat Establishment Report</title>

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
          <span class="card-title">Post Meat Establishment Report</span>
          <br>
          <hr>
          <div class="data-table-wrap">
            <table class="striped">
              <thead class="thead">
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Meatshop/ Establishment</th>
                    <th>Concessionaire/ Owner/ Mark</th>
                    <th>Quantity of Meat Inspected</th>
                    <th>Technical Requirements</th>
                    <th>Findings and corrective Action</th>
                    <th>Acknowledgement/ Corrective Action</th>
                    <th><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Add" id="add-postmeatest"><i class="material-icons">add</i></a></th>
                    <th></th>
                    <th></th>
                </tr>
              </thead>

              <tbody>
                <tr class="td1">
                  <td>1</td>
                  <td>
                    <input id="Date_Inspected" type="date" class="datepicker">
                  </td> 
                  <td>
                    <input id="ME_Name" type="text" class="validate">
                  </td>
                  <td>
                    <input id="ME_Owner" type="text" class="validate">
                  </td>
                  <td>
                    <input id="Quantity_Inspected" type="number" class="validate">
                  </td>
                  <td>
                    <input type="checkbox" id="COMI" name="COMI" />
                    <label for="COMI">COMI</label>

                    <input type="checkbox" id="MMPIC" name="MMPIC"/>
                    <label for="MMPIC">MMPIC</label>

                    <input type="checkbox" id="MIC" name="MIC"/>
                    <label for="MIC">MIC</label>

                    <input type="checkbox" id="BSP" name="BSP"/>
                    <label for="BSP">Business & Sanitary Permits</label>

                    <input type="checkbox" id="LH" name="LH"/>
                    <label for="LH">Labeling Handling</label>
                  </td>
                  <td>
                    <input id="Findings" type="text" class="validate">
                  </td>
                  <td>
                    <input id="ack" type="text" class="validate">
                  </td>
                  <td><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Done" onclick="Materialize.toast('Data is Added!', 4000)"><i class="material-icons">done</i></a></td>
                  <td><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Cancel"><i class="material-icons center">clear</i></a></td>
                  <td></td>
                </tr>
               
                <?php
                  include("data-postmeatest.php");
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
    $('#add-postmeatest').click(function() {
     $('.td1').toggle('show');
    });
  </script>
  </body>
</html>
