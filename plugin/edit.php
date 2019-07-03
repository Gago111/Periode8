
<?php
  require_once "config.php";

  $yourURL = get_the_permalink(162);

  if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
      echo ("<script>location.href='$yourURL'</script>");
  }

  $sql = "SELECT * FROM user_data WHERE userID=" .  $_SESSION['id'];
  $result = $link->query($sql);

  	if(isset($_GET['edit']))
  	{
  		$id = $_GET['edit'];
  		$res = mysqli_query($link,"SELECT * FROM user_data WHERE id=$id");
  		$row = mysqli_fetch_array($res);
  	}

  	if(isset($_GET['id']))
  	{
  		$newText = $_GET['voornaam'];
      $newText2 = $_GET['tussenvoegsel'];
      $newText3 = $_GET['achternaam'];
      $newText4 = $_GET['stemsoort'];
      $newText5 = $_GET['adres'];
      $newText6 = $_GET['postcode'];
      $newText7 = $_GET['plaats'];
      $newText8 = $_GET['telefoon'];
      $newText9 = $_GET['mobiel'];
      $newText10 = $_GET['email'];
      $newText11 = $_GET['status'];
      $newText12 = $_GET['lid_sinds'];
      $newText13 = $_GET['lid_tot'];

  		$id	 = $_GET['id'];
      $res = mysqli_query($link,"SELECT * FROM user_data WHERE id=$id");
      $row = mysqli_fetch_array($res);
  		$sql     = "UPDATE user_data SET voornaam='$newText', tussenvoegsel='$newText2', achternaam='$newText3', stemsoort='$newText4', adres='$newText5', postcode='$newText6', plaats='$newText7', telefoon='$newText8', mobiel='$newText9', email='$newText10', status='$newText11',lid_sinds='$newText12',lid_tot='$newText13' WHERE id=$id";
  		$res 	 = mysqli_query($link,$sql)
                                      or die("Could not update".mysqli_error($link));
      $yourURL = get_the_permalink(171);
  		echo ("<script>location.href='$yourURL'</script>");
  	}
  ?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <title></title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="style.min.css">
    </head>

    <body>
      <style media="screen">
        input {
          float:right;
        }
        .form-control {
          height:34px;
        }

        h1.entry-title {
          display:none;
        }

        .card-body {
          font-size:15px;
        }

        #text-2 p ,li,h2 {
          color:gray;
        }
      </style>

      <div class="container">
        <div class="row">
          <div style="margin-top:8%; margin-bottom:10%;" class="col-lg-10 mx-auto">
            <div class="card pt-4">
              <div class="card-body">
                <div class="">
                  <form action="<?php echo get_the_permalink(200); ?>" method="GET" enctype="multipart/form-data">

                    <h1>Wijzig je gegevens</h1>

                  <!-- <div class="form-group text-center" required>
                    <img class="profile" src="<?php echo plugin_dir_url( __FILE__ ) . 'images/'; echo $row['foto'];?>" onclick="triggerClick()" id="profileDisplay" alt=""><br>
                    <label for="profileImage">Selecteer een profielfoto</label>
                    <input type="file" id="profileImage" name="profileImage" onchange="displayImage(this)" value="profileImage" style="display:none;">
                  </div> -->

                  <div class="mb-2">
                    <label for="">Voornaam</label>
                    <input type="text" name="voornaam" value="<?php echo $row[1];?>"></input><br>
                  </div>

                  <div class="mb-2">
                    <label for="">Tussenvoegsel</label>
                    <input type="text" name="tussenvoegsel" value="<?php echo $row[2];?>"></input><br>
                  </div>

                  <div class="mb-2">
                    <label for="">Achternaam</label>
                    <input type="text" name="achternaam" value="<?php echo $row[3];?>"></input><br>
                  </div>

                  <label for="">Stemsoort</label>
                   <select class="form-control mb-4" name="stemsoort" id="exampleFormControlSelect1" >
                     <option selected disabled><?php echo $row[4];?></option>
                     <option>Sophraan</option>
                     <option>Alt</option>
                     <option>Tenor</option>
                     <option>Bas</option>
                   </select>

                  <div class="mb-2">
                    <label for="">Adres</label>
                    <input type="text" name="adres" value="<?php echo $row[5];?>"></input><br>
                  </div>

                  <div class="mb-2">
                    <label for="">Postcode</label>
                    <input type="text" name="postcode" value="<?php echo $row[6];?>"></input><br />
                  </div>

                  <div class="mb-2">
                    <label for="">Plaats</label>
                    <input type="text" name="plaats" value="<?php echo $row[7];?>"></input><br />
                  </div>

                  <div class="mb-2">
                    <label for="">Telefoon</label>
                    <input type="text" name="telefoon" value="<?php echo $row[8];?>"></input><br />
                  </div>

                  <div class="mb-2">
                    <label for="">Mobiel</label>
                    <input type="text" name="mobiel" value="<?php echo $row[9];?>"></input><br />
                  </div>

                  <div class="mb-2">
                    <label for="">E-mail</label>
                    <input type="email" name="email" value="<?php echo $row[10];?>"></input><br />
                  </div>

                  <label for="">Status</label>
                   <select class="form-control mb-4" name="status" id="exampleFormControlSelect1" >
                     <option selected disabled></option>
                     <option>oud-lid</option>
                     <option>lid</option>
                     <option>projectlid</option>
                     <option>oud-projectlid</option>
                   </select>

                  <div class="mb-2">
                    <label for="">Lid sinds</label>
                    <input type="date" name="lid_sinds"value="<?php echo $row[12];?>"></input>
                  </div>

                  <div class="mb-2">
                    <label for="">Lid tot</label>
                    <input type="date" name="lid_tot" value="<?php echo $row[13];?>"></input><br />
                  </div>

                  <div class="">
                    <input type="hidden" name="id" value="<?php echo $row[0];?>">
                    <input class="blue" style="width:100%; margin-top:15px;" name="save-user" type="submit" value="Update "/>
                  </div>


                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


      <script type="text/javascript">
      function triggerClick(e) {
        document.getElementById('profileImage').click();
      }
      function displayImage(e) {
        if (e.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e){
            document.getElementById('profileDisplay').setAttribute('src', e.target.result);
          }
          reader.readAsDataURL(e.files[0]);
        }
      }
      </script>

    </body>
  </html>
