      <?php
      require_once "config.php";
      require_once "insert.php";

      $yourURL = get_the_permalink(162);
      if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
          echo ("<script>location.href='$yourURL'</script>");
      }

      $sql = "SELECT * FROM user_data WHERE userID=" .  $_SESSION['id'];
      $result = $link->query($sql);


      if($result->num_rows == 0) {
           $DisplayForm = True;
      } else {
         $DisplayForm = false;
      }
      ?>

      <!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title></title>
        </head>
        <body>

          <style media="screen">
            h1.entry-title {
              display:none;
            }
          </style>

          <!DOCTYPE html>
          <html lang="en">
          <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
              <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
              <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
              <style>
                  body{ font: 15px sans-serif; text-align: ; }
                  strong {margin-right:10px;}
              </style>
          </head>
          <body>
            <style media="screen">

            #text-2 p ,li,h2 {
              color:gray;
            }

              button {
                background-color: transparent;
                color: #fff;
              }

              button:hover {
                background-color: transparent;
              }

              button:focus {
                color: #fff;;
                background-color:transparent;
                outline:0;
              }

              @font-face {
              font-family: "FontAwesome";
              font-weight: normal;
              font-style : normal;
                     src : url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.eot?v=4.3.0");
                     src : url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.eot?#iefix&v=4.3.0") format("embedded-opentype"),
                           url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.woff2?v=4.3.0") format("woff2"),
                           url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.woff?v=4.3.0") format("woff"),
                           url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.ttf?v=4.3.0") format("truetype"),
                           url("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/fonts/fontawesome-webfont.svg?v=4.3.0#fontawesomeregular") format("svg");
              }

              .rotate {
                transform: rotate(180deg);
              }

              .drop-d::after {
                content: "\f0d7";
                font-size: 18px;
                font-family: "FontAwesome";
                position: relative;
              }

              .caret-down::after {
                content: "\f0d8";
                font-size: 18px;
                font-family: "FontAwesome";
                position: relative;
              }

              img.profile {
                width:134px;
              }

            </style>

            <div class="container">
              <div class="text-right">
                <div class="dropdown keep-open">
                  <button
                  id="dLabel" role="button" href="#"
                     data-toggle="dropdown" data-target="#"
                     class="drop-d">
                      Welkom <span class="caret"></span>
                        <span><b class="dropd"><?php echo htmlspecialchars($_SESSION["username"]); ?></b></span>
                  </button>
                    <ul style="border-radius:1px; padding: 10px;" class="dropdown-menu" role="menu"
                        aria-labelledby="dLabel">
                        <li style="margin-bottom:4px;"><a href="<?php echo get_the_permalink(178); ?>">Uitloggen</a></li>
                        <!-- <li><a href="reset-password.php">Password resetten</a></li> -->
                    </ul>
                    <a class="btn btn-primary" href="<?php echo get_the_permalink(202); ?>">Ledenlijst</a>
                </div>
              </div>
            </div>

            <?php if ($DisplayForm) { ?>
                <div class="container">
                  <div class="row">
                    <div style="margin-top:5%; margin-bottom:10%;" class="col-md-8 col-lg-10 mx-auto">
                      <div class="card">
                        <div class="card-body">
                            <form action="<?php echo get_the_permalink(186); ?>" method="post" enctype="multipart/form-data">
                              <?php if(!empty($msg)) : ?>
                                <div class="alert <?php echo $css_class;?>">
                                  <?php echo $msg; ?>
                                </div>
                              <?php endif; ?>

                              <div class="form-group text-center" required>
                                <img class="profile" src="<?php echo plugins_url('images/placeholder.png', __FILE__) ?>" onclick="triggerClick()" id="profileDisplay" alt=""><br>
                                <label for="profileImage">Selecteer een profielfoto</label>
                                <input type="file" id="profileImage" name="profileImage" onchange="displayImage(this)" value="profileImage" style="display:none;">
                              </div>

                              <div class="form-row">
                                <div class="form-group col-md-4">
                                  <input type="text" name="voornaam" class="form-control" placeholder="Voornaam" id="inputCity" >
                                </div>
                                <div class="form-group col-md-4">
                                  <input type="text" name="tussenvoegsel" class="form-control" placeholder="Tussenvoegsel" id="inputCity" >
                                </div>
                                <div class="form-group col-md-4">
                                  <input type="text" name="achternaam" class="form-control" placeholder="Achternaam" id="inputZip" >
                                </div>
                              </div>
                              <div class="form-group">
                               <select  class="form-control" name="stemsoort" id="exampleFormControlSelect1">
                                 <option  selected disabled>Stemsoort</option>
                                 <option>Sopraan</option>
                                 <option>Alt</option>
                                 <option>Tenor</option>
                                 <option>bas</option>
                               </select>
                              </div>

                              <div class="form-row">
                                <div class="form-group col-md-4">
                                  <input type="text" name="adres" class="form-control" placeholder="Adres" id="inputCity" >
                                </div>
                                <div class="form-group col-md-4">
                                  <input type="text" name="plaats" class="form-control" placeholder="Plaats" id="inputCity" >
                                </div>
                                <div class="form-group col-md-4">
                                  <input type="text" name="postcode" class="form-control" placeholder="Postcode" id="inputZip" >
                                </div>
                              </div>

                              <div class="form-group">
                                <input type="name" class="form-control" name="telefoon" id="exampleInputEmail1" placeholder="Telefoon nummer" >
                              </div>
                              <div class="form-group">
                                <input type="name" class="form-control" name="mobiel" id="exampleInputEmail1" placeholder="Mobiel nummer" >
                              </div>
                              <div class="form-group">
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="E-mail" >
                              </div>
                              <div class="form-group">
                               <select class="form-control" name="status" id="exampleFormControlSelect1" >
                                 <option selected disabled>Status</option>
                                 <option>oud-lid</option>
                                 <option>lid</option>
                                 <option>projectlid</option>
                                 <option>oud-projectlid</option>
                               </select>
                              </div>

                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="">Lid sinds</label>
                                  <input type="date" name="lid_sinds" max="3000-12-31" placeholder="Lid sinds" min="1000-01-01" class="form-control" >
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="">Lid tot</label>
                                  <input type="date" name="lid_tot" max="3000-12-31" placeholder="Lid tot" min="1000-01-01" class="form-control" >
                                </div>
                              </div>
                               <div class="form-group">
                                 <button type="submit" name="save-user" class="btn btn-primary btn-block">Profiel opslaan</button>
                               </div>
                             </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                   <?php } else { ?>

                   <?php
                     if($result->num_rows > 0) {
                       while($row = $result->fetch_assoc()){
                     ?>

                      <div class="container">
                       <div class="row">
                         <div style="margin-top:8%; margin-bottom:10%;" class="col-md-8 col-lg-6 col-xl-5 mx-auto">
                           <div class="card p-4">
                             <div style="display:flex;" class="justify-content-center">
                               <div class="">
                                 <h1 class="">Uw gegevens</h1>
                                  <ul style="list-style-type:none;">
                                    <li><strong>Naam</strong><?php echo $row['voornaam'];?> <?php echo $row['tussenvoegsel']; ?> <?php echo $row['achternaam']; ?></li>
                                    <li><strong>stemsoort</strong><span class=""><?php echo $row['stemsoort']; ?><br></span></li>
                                    <li><strong>adres</strong><span class=""><?php echo $row['adres']; ?><br></span></li>
                                    <li><strong>postcode</strong><span class=""><?php echo $row['postcode']; ?><br></span></li>
                                    <li class=""><strong>plaats</strong><span class=""><?php echo $row['plaats']; ?><br></span></li>
                                    <li><strong>telefoon</strong><span class=""><?php echo $row['telefoon']; ?><br></span> </li>
                                    <li><strong>mobiel</strong><span class=""><?php echo $row['mobiel']; ?><br></span></li>
                                    <li> <strong>email</strong><span class=""><?php echo $row['email']; ?><br></span></li>
                                    <li><strong>status</strong><span class=""><?php echo $row['status']; ?><br></span></li>
                                    <li><strong>lid sinds</strong><span class=""><?php echo $row['lid_sinds']; ?><br /></span></li>
                                    <li><strong>lid_tot</strong><span class=""><?php echo $row['lid_tot'];?></span></li></br>

                                    <?php $delete = get_the_permalink(198); ?>
                                    <?php $edit = get_the_permalink(200); ?>
                                    <div class="">
                                      <div class="row">
                                        <div style="padding:0;" class="col-md-6">
                                          <?= "<a style='width:90%; margin-bottom:4px;' class='btn btn-primary' href='$edit?edit=$row[id]'>Wijzig</a><br />";?>
                                        </div>
                                        <div style="padding:0;" class="col-md-6 ">
                                          <?= "<a style='width:90%;'  class='btn btn-danger' href='$delete?delete=$row[id]' onClick=\"return confirm('Profiel verwijderen?');\">Verwijder</a><br />";?>
                                        </div>
                                      </div>
                                    </div>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php
                      }
                    }
                else {
                  echo "No data found";
                 }
               }
             ?>

          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

          <script>

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

          $(".drop-d").click(function(){
           $(this).toggleClass("caret-down");
          })

          </script>








      </body>
    </html>
