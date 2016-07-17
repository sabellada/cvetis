<!DOCTYPE html>
<html lang="en">
<head>
  <title>Permit to Slaughter Large Ruminants</title>

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
          <span class="card-title">Permit to Slaughter Large Ruminants</span>
          <br>
          <hr>
          <div class="data-table-wrap">
            <table class="striped">
              <thead class="thead">
                <tr>
                  <th>#</th>
                  <th>Owner</th>
                  <th>Transfer to</th>
                  <th>Date</th>
                  <th>Address</th>
                  <th>Point of Origin</th>
                  <th>Species</th>
                  <th>Sex</th>
                  <th>Brand/Age</th>
                  <th>Documents Presented</th>
                  <th>Pregnancy Diagnosis</th>
                  <th><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Add" id="add-pslr"><i class="material-icons">add</i></a></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr class="td1">
                  <td>1</td>
                  <td>
                    <input name="Dealer_Name" type="text" class="validate">
                  </td>
                  <td>
                    <input name="Transfer" type="text" class="validate">
                  </td>
                  <td>
                    <input name="Date" type="date" class="validate">
                  </td>
                  <td>
                    <input name="address" type="text" class="validate">
                  </td>
                  <td>
                    <input name="Origin" type="text" class="datepicker">
                  </td>
                  <td>
                    <select name="Species_Type">
                      <option value="" disabled selected>Choose</option>
                      <option value="beef">Beef</option>
                      <option value="pork">Pork</option>
                    </select>
                  </td>
                  <td>
                    <select name="Species_Gender">
                      <option value="" disabled selected>Choose</option>
                      <option value="beef">Male</option>
                      <option value="pork">Female</option>
                    </select>
                  </td>
                  <td>
                    <input name="Age" type="number" class="validate">
                  </td>
                  <td>
                    <input type="checkbox" name="COLC" />
                    <label for="COLC">COLC</label>

                    <input type="checkbox" name="TOLC" />
                    <label for="TOLC">TOLC</label>

                    <input type="checkbox" name="VHC" />
                    <label for="VHC">VHC</label>

                    <input type="checkbox" name="others" />
                    <label for="others">Others</label>
                  </td>
                  <td>
                    <select name="Preg_Diagnosis">
                      <option value="" disabled selected>Choose</option>
                      <option value="beef">Positive</option>
                      <option value="pork">Negative</option>
                    </select>                  
                  </td>
                  <td><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Done" onclick="Materialize.toast('Data is Added!', 4000)"><i class="material-icons">done</i></a></td>
                  <td><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Cancel"><i class="material-icons center">clear</i></a></td>
                  <td></td>
                </tr>     
                        
                <?php
                  include("data-pslr.php");
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
    $('#add-pslr').click(function() {
     $('.td1').toggle('show');
    });
  </script>
  </body>
</html>
