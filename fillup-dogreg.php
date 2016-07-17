<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dog Registry Form</title>

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
          <span class="card-title">Dog Registry Form</span>
          <br>
          <hr>
          <div class="data-table-wrap">
            <table class="striped">
              <thead>
                <tr>
                    <th>#</th>
                    <th>Province</th>
                    <th>Municipality</th>
                    <th>Barangay</th>
                    <th>Date of Registration</th>
                    <th>Owner</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Dog's Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Desexed</th>
                    <th class="breed">Breed</th>
                    <th>Color</th>
                    <th>Distinguishing Mark</th>
                    <th>Microchip Number</th>
                    <th>Date of last Vaccination</th>
                    <th>Dog Origin</th>
                    <th>Remarks</th>
                    <th><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Add" id="add-dogreg"><i class="material-icons">add</i></a></th>
                    <th></th>
                    <th></th>
                </tr>
              </thead>

              <tbody>
                <tr class="td1">
                  <td rowspan="3">
                    <?php
                      include("province.php");
                    ?>
                  </td>
                  <td>45</td>
                  <td rowspan="3">
                    <?php
                      include("municipality.php");
                    ?>
                  </td>
                  <td>
                    <select>
                      <option value="" disabled selected>Choose your option</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                  </td>
                  <td>
                    <input id="Reg-Date" type="date" class="datepicker">
                  </td>
                  <td>
                      <input id="Owner_Name" type="text" class="validate">
                  </td></td>
                  <td>
                      <input id="Address" type="text" class="validate">
                  </td>
                  <td>
                      <input id="Contact_No" type="number" class="validate">
                  </td>
                  <td>
                      <input id="Pet_Name" type="text" class="validate">
                  <td>
                      <input id="Pet_Age" type="text" class="validate">
                  </td>
                  <td>
                    <select>
                      <option name="Pet_Sex" value="" disabled selected>Choose</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </td>
                  <td>
                    <select name="Desexed">
                      <option value="" disabled selected>Choose</option>
                      <option value="male">Yes</option>
                      <option value="female">No</option>
                    </select>
                  </td>
                  <td>
                    <select name="Pet_Breed">
                      <option value="" disabled selected>Choose</option>
                      <option value="Affenpinscher">Affenpinscher</option>
                      <option value="Afghan-Hound" >Afghan Hound</option>
                      <option value="Airedale-Terrier" >Airedale Terrier</option>
                      <option value="Akita" >Akita</option>
                      <option value="Alaskan-Malamute" >Alaskan Malamute</option>
                      <option value="American-Cocker-Spaniel" >American Cocker Spaniel</option>
                      <option value="American-Eskimo-Dog-(Miniature)" >American Eskimo Dog (Miniature)</option>
                      <option value="American-Eskimo-Dog-(Standard)" >American Eskimo Dog (Standard)</option>
                      <option value="American-Eskimo-Dog-(Toy)" >American Eskimo Dog (Toy)</option>
                      <option value="American-Foxhound" >American Foxhound</option>
                      <option value="American-Staffordshire-Terrier" >American Staffordshire Terrier</option>
                      <option value="American-Water-Spaniel" >American Water Spaniel</option>
                      <option value="Anatolian-Shepherd" >Anatolian Shepherd</option>
                      <option value="Australian-Cattle-Dog" >Australian Cattle Dog</option>
                      <option value="Australian-Shepherd" >Australian Shepherd</option>
                      <option value="Australian-Terrier" >Australian Terrier</option>
                      <option value="Basenji" >Basenji</option>
                      <option value="Basset-Hound" >Basset Hound</option>
                      <option value="Beagle" >Beagle</option>
                      <option value="Bearded-Collie" >Bearded Collie</option>
                      <option value="Bedlington-Terrier" >Bedlington Terrier</option>
                      <option value="Belgian-Malinois" >Belgian Malinois</option>
                      <option value="Belgian-Sheepdog" >Belgian Sheepdog</option>
                      <option value="Belgian-Tervuren" >Belgian Tervuren</option>
                      <option value="Bernese-Mountain-Dog" >Bernese Mountain Dog</option>
                      <option value="Bichon-Frise" >Bichon Frise</option>
                      <option value="Black-and-Tan-Coonhound" >Black and Tan Coonhound</option>
                      <option value="Bloodhound" >Bloodhound</option>
                      <option value="Border-Collie" >Border Collie</option>
                      <option value="Border-Terrier" >Border Terrier</option>
                      <option value="Borzoi" >Borzoi</option>
                      <option value="Boston-Terrier" >Boston Terrier</option>
                      <option value="Bouvier-des-Flandres" >Bouvier des Flandres</option>
                      <option value="Boxer" >Boxer</option>
                      <option value="Briard" >Briard</option>
                      <option value="Brittany" >Brittany</option>
                      <option value="Brussels-Griffon" >Brussels Griffon</option>
                      <option value="Bull-Terrier" >Bull Terrier</option>
                      <option value="Bulldog" >Bulldog</option>
                      <option value="Bullmastiff" >Bullmastiff</option>
                      <option value="Cairn-Terrier" >Cairn Terrier</option>
                      <option value="Canaan-Dog" >Canaan Dog</option>
                      <option value="Cardigan-Welsh-Corgi" >Cardigan Welsh Corgi</option>
                      <option value="Cavalier-King-Charles-Spaniel" >Cavalier King Charles Spaniel</option>
                      <option value="Chesapeake-Bay-Retriever" >Chesapeake Bay Retriever</option>
                      <option value="Chihuahua" >Chihuahua</option>
                      <option value="Chinese-Crested-Dog" >Chinese Crested Dog</option>
                      <option value="Chinese-Shar-Pei" >Chinese Shar-Pei</option>
                      <option value="Chow-Chow" >Chow Chow</option>
                      <option value="Clumber-Spaniel" >Clumber Spaniel</option>
                      <option value="Collie" >Collie</option>
                      <option value="Curly-Coated-Retriever" >Curly-Coated Retriever</option>
                      <option value="Dachshund-(Standard)" >Dachshund (Standard)</option>
                      <option value="Dachsund-(Miniature)" >Dachsund (Miniature)</option>
                      <option value="Dalmatian" >Dalmatian</option>
                      <option value="Dandie-Dinmont-Terrier" >Dandie Dinmont Terrier</option>
                      <option value="Doberman-Pinscher" >Doberman Pinscher</option>
                      <option value="English-Cocker-Spaniel" >English Cocker Spaniel</option>
                      <option value="English-Foxhound-" >English Foxhound </option>
                      <option value="English-Setter" >English Setter</option>
                      <option value="English-Springer-Spaniel" >English Springer Spaniel</option>
                      <option value="English-Toy-Spaniel" >English Toy Spaniel</option>
                      <option value="Field-Spaniel" >Field Spaniel</option>
                      <option value="Finnish-Spitz" >Finnish Spitz</option>
                      <option value="Flat-Coated-Retriever" >Flat-Coated Retriever</option>
                      <option value="French-Bulldog" >French Bulldog</option>
                      <option value="German-Shepherd-Dog" >German Shepherd Dog</option>
                      <option value="German-Shorthaired-Pointer" >German Shorthaired Pointer</option>
                      <option value="German-Wirehaired-Pointer" >German Wirehaired Pointer</option>
                      <option value="Giant-Schnauzer" >Giant Schnauzer</option>
                      <option value="Golden-Retriever" >Golden Retriever</option>
                      <option value="Gordon-Setter" >Gordon Setter</option>
                      <option value="Great-Dane" >Great Dane</option>
                      <option value="Great-Pyrenees" >Great Pyrenees</option>
                      <option value="Greater-Swiss-Mountain-Dog" >Greater Swiss Mountain Dog</option>
                      <option value="Greyhound" >Greyhound</option>
                      <option value="Harrier" >Harrier</option>
                      <option value="Havanese" >Havanese</option>
                      <option value="Ibizan-Hound" >Ibizan Hound</option>
                      <option value="Irish-Setter" >Irish Setter</option>
                      <option value="Irish-Terrier" >Irish Terrier</option>
                      <option value="Irish-Water-Spaniel" >Irish Water Spaniel</option>
                      <option value="Irish-Wolfhound" >Irish Wolfhound</option>
                      <option value="Italian-Greyhound" >Italian Greyhound</option>
                      <option value="Jack-Russell-Terrier" >Jack Russell Terrier</option>
                      <option value="Japanese-Chin" >Japanese Chin</option>
                      <option value="Keeshond" >Keeshond</option>
                      <option value="Kerry-Blue-Terrier" >Kerry Blue Terrier</option>
                      <option value="Komondor" >Komondor</option>
                      <option value="Kuvasz" >Kuvasz</option>
                      <option value="Labrador-Retriever" >Labrador Retriever</option>
                      <option value="Lakeland-Terrier" >Lakeland Terrier</option>
                      <option value="Lhasa-Apso" >Lhasa Apso</option>
                      <option value="Lowchen" >Lowchen</option>
                      <option value="Maltese" >Maltese</option>
                      <option value="Manchester-Terrier-(Standard)" >Manchester Terrier (Standard)</option>
                      <option value="Manchester-Terrier-(Toy)" >Manchester Terrier (Toy)</option>
                      <option value="Mastiff" >Mastiff</option>
                      <option value="Miniature-Bull-Terrier" >Miniature Bull Terrier</option>
                      <option value="Miniature-Pinscher" >Miniature Pinscher</option>
                      <option value="Miniature-Schnauzer" >Miniature Schnauzer</option>
                      <option value="Newfoundland" >Newfoundland</option>
                      <option value="Norfolk-Terrier" >Norfolk Terrier</option>
                      <option value="Norwegian-Elkhound" >Norwegian Elkhound</option>
                      <option value="Norwich-Terrier" >Norwich Terrier</option>
                      <option value="Old-English-Sheepdog" >Old English Sheepdog</option>
                      <option value="Otterhound" >Otterhound</option>
                      <option value="Papillon" >Papillon</option>
                      <option value="Pekingese" >Pekingese</option>
                      <option value="Pembroke-Welsh-Corgi" >Pembroke Welsh Corgi</option>
                      <option value="Petit-Basset-Griffon-Vendeen" >Petit Basset Griffon Vendeen</option>
                      <option value="Pharaoh-Hound" >Pharaoh Hound</option>
                      <option value="Pointer" >Pointer</option>
                      <option value="Pomeranian" >Pomeranian</option>
                      <option value="Poodle-(Miniature)" >Poodle (Miniature)</option>
                      <option value="Poodle-(Standard)" >Poodle (Standard)</option>
                      <option value="Poodle-(Toy)" >Poodle (Toy)</option>
                      <option value="Portuguese-Water-Dog" >Portuguese Water Dog</option>
                      <option value="Pug" >Pug</option>
                      <option value="Puli" >Puli</option>
                      <option value="Rhodesian-Ridgeback" >Rhodesian Ridgeback</option>
                      <option value="Rottweiler" >Rottweiler</option>
                      <option value="Saint-Bernard" >Saint Bernard</option>
                      <option value="Saluki-(or-Gazelle-Hound)" >Saluki (or Gazelle Hound)</option>
                      <option value="Samoyed" >Samoyed</option>
                      <option value="Schipperke" >Schipperke</option>
                      <option value="Scottish-Deerhound" >Scottish Deerhound</option>
                      <option value="Scottish-Terrier" >Scottish Terrier</option>
                      <option value="Sealyham-Terrier" >Sealyham Terrier</option>
                      <option value="Shetland-Sheepdog" >Shetland Sheepdog</option>
                      <option value="Shiba-Inu" >Shiba Inu</option>
                      <option value="Shih-Tzu" >Shih Tzu</option>
                      <option value="Siberian-Husky" >Siberian Husky</option>
                      <option value="Silky-Terrier" >Silky Terrier</option>
                      <option value="Skye-Terrier" >Skye Terrier</option>
                      <option value="Smooth-Fox-Terrier" >Smooth Fox Terrier</option>
                      <option value="Soft-Coated-Wheaten-Terrier" >Soft Coated Wheaten Terrier</option>
                      <option value="Spinone-Italiano" >Spinone Italiano</option>
                      <option value="Staffordshire-Bull-Terrier" >Staffordshire Bull Terrier</option>
                      <option value="Standard-Schnauzer" >Standard Schnauzer</option>
                      <option value="Sussex-Spaniel" >Sussex Spaniel</option>
                      <option value="Tibetan-Spaniel" >Tibetan Spaniel</option>
                      <option value="Tibetan-Terrier" >Tibetan Terrier</option>
                      <option value="Vizsla" >Vizsla</option>
                      <option value="Weimaraner" >Weimaraner</option>
                      <option value="Welsh-Springer-Spaniel" >Welsh Springer Spaniel</option>
                      <option value="Welsh-Terrier" >Welsh Terrier</option>
                      <option value="West-Highland-White-Terrier" >West Highland White Terrier</option>
                      <option value="Whippet" >Whippet</option>
                      <option value="Wire-Fox-Terrier" >Wire Fox Terrier</option>
                      <option value="Wirehaired-Pointing-Griffon" >Wirehaired Pointing Griffon</option>
                      <option value="Yorkshire-Terrier" >Yorkshire Terrier</option>
                    </select>
                  </td>
                  <td>
                      <select name="Pet_Color">
                        <option value="" disabled selected>Choose</option>
                        <option value="red">Red</option>
                        <option value="orange">orange</option>
                        <option value="yellow">Yellow</option>
                        <option value="green">Green</option>
                        <option value="blue">Blue</option>
                        <option value="violet">Violet</option>
                        <option value="black">Black</option>
                        <option value="white">White</option>
                        <option value="gray">Gray</option>
                      </select>
                  </td>
                  <td>
                      <input id="Pet_Mark" type="text" class="validate">
                  <td>
                      <input id="Micro_No" type="text" class="validate">
                  </td>
                  <td>
                      <input id="Vac_Date" type="date" class="datepicker">
                    </div>
                  </td>
                  <td>
                      <input id="Pet_Origin" type="text" class="validate">
                    </div>
                  </td>
                  <td>
                     <input id="remarks" type="text" class="validate">
                  </td>
                  <td><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Done" onclick="Materialize.toast('Data is Added!', 4000)"><i class="material-icons">done</i></a></td>
                  <td><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Cancel"><i class="material-icons center">clear</i></a></td>
                  <td></td>
                <?php
                  include("data-dogreg.php");
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

  </body>
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
    $('#add-dogreg').click(function() {
     $('.td1').toggle('show');
    });
  </script>
</html>
