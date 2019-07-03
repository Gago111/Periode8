<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://unpkg.com/scrollreveal"></script>

  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/908d34b458.js"></script>

  <!-- Custom font -->
  <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Libre+Franklin&display=swap" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/scss/style.min.css"/>

  <title>Detona</title>
</head>

<body>

  <style>
    .loader {
      position:fixed;
      z-index:99;
      top:0;
      left:0;
      width:100%;
      height:100%;
      background:#ffffffff;
      display:flex;
      justify-content: center;
      align-items:center;
    }

    .loader > img {
      width:100px;
    }

    .loader.hidden {
      animation: fadeOut 1s;
      animation-fill-mode: forwards;
    }

    @keyframes fadeOut {
      100% {
        opacity:0;
        visibility: hidden;
      }
    }
  </style>

  <div class="loader">
    <img src="assets/img/preloader.gif" alt="Loading..."/>
  </div>

  <script>
    window.addEventListener("load",function() {
      const loader = document.querySelector(".loader");
      loader.className += " hidden";
    });
  </script>

  <div class="navigation">
    <div class="test">
      <div id="#fixed" style="background-color: rgba(39,50,61, .70);
      position:fixed;
      z-index: 1;"
      class="container-fluid">
        <div class="scroll row">
          <div class="col-md-12">
            <nav id="#navbar" class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#"><img class="navbrandx" src="assets/img/detona2.png"></a>

                <div class="social-media">
                  <a class="" href="#"><i class="fab fa-facebook-f"></i></a>
                  <a class="" href="#"><i class="fab fa-twitter"></i></a>
                  <a class="" href="#"><i class="fab fa-linkedin-in"></i></a>
                  <a class="" href="#"><i class="fab fa-instagram"></i></a>
                </div>

              <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
              </button>


              <div class="collapse navbar-collapse navbar-right" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="detonamissie.php">Detona missie</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="inkoop.php">Inkoop</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="verkoop.php">Verkoop</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="datavernietiging.php">Datavernietiging</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="overons.php">Over ons</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div> <!-- END fluid -->
    </div>

    <div class="banner img-fluid" style="background-image: url(assets/img/headers/laptop.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      width: 100%;
      height: 300px;
      opacity: 1;
      visibility: inherit;
      z-index: 20;">
      <div class="container">
        <div class="text-center">
          <h1 style="font-size:40px;" class="text-center text-white">Inkoop</h1>
        </div>
      </div>
    </div> <!-- END bg-dark -->
  </div>

  <div class="container">
    <div class="title-section pt-5 pb-5">
      <h2 class="text-center pb-2 blue">Wilt u uw bedrijf smartphones & ICT apparatuur verkopen?</h2>
      <div class="row">
        <div class="col-md-12 text-center">
          Heeft uw bedrijf een partij overtollige smartphones en/of ICT apparatuur staan of is uw apparatuur toe aan vervanging ? Detona kan snel en eenvoudig een aantrekkelijk aanbod verzorgen voor met name uw smartphones, tablets en laptops.
        </div>
      </div>
    </div>
  </div>

  <section class="process">
      <h3 class="text-white text-center pt-2">Hoe werkt het</h3>
    <div class="container">
      <div class="row">
        <div class="col-md-3 text-center step">
          <span class="">1</span><img class="mb-2" src="assets/progress_img/chat.png" alt="">
          <p class="text-center">Vul het onderstaande contactformulier, mail of bel ons</p>
        </div>
        <div class="col-md-2 text-center step">
          <span class="">2</span><img class="mb-2" src="assets/progress_img/discount.png" alt="">
          <p>Wij nemen contact met u op en u ontvang van ons een aanbod</p>
        </div>
        <div class="col-md-3 text-center step">
          <span class="">3</span><img class="mb-2" src="assets/progress_img/box.png" alt="">
          <p>We sturen u verpakkingsmateriaal of halen de apparatuur bij u op</p>
        </div>
        <div class="col-md-2 text-center step">
          <span class="">4</span><img class="mb-2" src="assets/progress_img/error.png" alt="">
          <p>Wij vernietigen de data op de datadragers (optioneel)</p>
        </div>
        <div class="col-md-2 text-center step">
          <span class="">5</span><img class="mb-2" src="assets/progress_img/card.png" alt="">
          <p>U kriigt betaald</p>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="pb-4 pt-4">
      <div class="row">
        <div class="col-md-12">
          <h3 class="blue pt-3">Snel marktconform waardebod</h3>
          <p>Met uw aangeleverde lijst van apparatuur en specificaties kan Detona u binnen 48 uur een offerte met een waardebod doen toekomen. Aanvullend worden er afspraken gemaakt over verzending en eventuele datavernietiging.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h3 class="blue pt-3">Kosteloze afvoer</h3>
          <p>Afhankelijk van het volume en de verkoopwaarde kunnen wij het transport kosteloos verzorgen of kunnen wij verpakkingsmaterialen opsturen voor kosteloze verzending.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h3 class="blue pt-3">Snelle uitbetaling</h3>
          <p>Na controle en testen van de apparatuur wordt het bedrag uiterlijk 10 werkdagen na ontvangst uitbetaald.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h3 class="blue pt-3">Veilige en betrouwbare datavernietiging</h3>
          <p>Het verwijderen van uw vertrouwelijke gegevens, is een belangrijke taak en op verzoek kan Detona veilige en betrouwbare datavernietiging voor u verzorgen.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h3 class="blue pt-3">Maatschappelijk Verantwoord Ondernemen</h3>
          <p>Door een milieuvriendelijke afvoer en hergebruik van uw apparatuur draagt u zorg voor het milieu en een circulaire economie. Een vermelding waard in de MVO paragraaf van uw jaarverslag.</p>
        </div>
      </div>
    </div>

    <style media="screen">
      #exampleInputEmail1 {
        width:50%;
      }
    </style>

    <h2 class="blue pb-3 pt-3">Contactformulier</h2>
    <form class="pb-5" method="" enctype="multipart/form-data">
      <div class="contact-form">
        <div class="form-group">
          <input type="name" class="form-control" name="bedijfsnaam" id="exampleInputEmail1" placeholder="Bedrijfsnaam" >
        </div>

        <div class="form-group">
          <input type="name" class="form-control" name="Woonplaats" id="exampleInputEmail1" placeholder="Woonplaats" >
        </div>

        <div class="form-row name">
          <div class="form-group col-lg-3 col-md-6 col-xs-3">
            <input type="text" name="Voornaam" class="form-control" placeholder="Voornaam" id="" >
          </div>
          <div class="form-group col-lg-3 col-md-6 col-xs-3">
            <input type="text" name="Achternaam" class="form-control" placeholder="Achternaam" id="" >
          </div>
        </div>

        <div class="form-group">
          <input type="number" class="form-control" name="telefoon" id="exampleInputEmail1" placeholder="Telefoon nummer" >
        </div>

        <div class="form-group">
          <input type="number" class="form-control" name="Mobiel" id="exampleInputEmail1" placeholder="Mobiel" >
        </div>

        <div class="form-group">
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="E-mail" >
        </div>

          <div class="form-group textarea">
            <label for="exampleFormControlTextarea1"></label>
            <textarea class="form-control" placeholder="Opmerking" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <a style="padding:4px 36px;  font-size:15px;" class="btn btn-outline-danger">Verzend</a>
        </form>
      </div>
    </div>

    <div class="bg-blue p-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- <span>hoi</span> -->
          </div>
        </div>
      </div>
    </div>

    <div id="contact" class="footer">
     <div class="container">
       <div style="" class="row">
         <div class="col-lg-3 col-md-6 col-sm-6 my-4">
           <img class="detona" src="assets/img/detona.png">
           <div class="pt-3">
             <p style="line-height:24px;">Opkoop en verkoop van zakelijke smartphones, computers en laptops.</p>
           </div>
           <i class="fab fa-facebook-f"></i>
           <i class="fab fa-twitter"></i>
           <i class="fab fa-linkedin-in"></i>
           <i class="fab fa-instagram"></i>
           <div class="vlaggen">
             <a class="" href="#"><img src="assets/img/netherlands.png" alt=""></a><a class="" href="#"><img src="assets/img/united-kingdom.png"></a><a class="" href="#"><img src="assets/img/germany.png" alt=""></a>
           </div>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 my-4">
         <h5 class="">Contact gegevens</h5>
         <ul class="firstUL">
           <li><p class="map"><i class="fas fa-map-marker-alt"></i>Rijksweg 155, Jirsum</p></li>
           <li><p class="number"><i class="fas fa-phone-alt"></i><a href="tel:0853035925">085-3035925</a></p>
           <li><p class="mail"><i class="far fa-envelope"></i><a href="mailto:info@detona.nl">info@detona.nl</a></p></li>
         </ul>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 my-4">
          <h5 class="">Informatie</h5>
          <ul class="secondUL">
            <li><p class=""><a href="inkoop.php">Verzending en Levering</a></p></li>
            <li><p class=""><a href="#">Algemene Voorwaarden</a></p></li>
            <li><p class=""><a href="#">Privacy Statement</a></p></li>
            <li><p class=""><a href="contact.php">Werken bij Detona</a></p></li>
            <li><p class=""><a href="datavernietiging">Duurzaamheid</a></p></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 my-4">
          <h5 class="">Snel naar</h5>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <ul class="secondUL menu">
                <li><p><a href="index.php">Home<a href="#"></p></li>
                <li><p><a href="inkoop.php">Inkoop</a></p></li>
                <li><p><a href="verkoop.php">Verkoop</a></p></li>
                <li><p><a href="datavernietiging.php">Datavernieting</a></p></li>
                <li><p><a href="overons.php">Over ons</a></p></li>
                <li><p><a href="contact.php">Contact</a></p></li>
              </ul>
            </div>
          </div>
        </div>
      </div> <!-- END row -->
        <p class="text-center">&copy; <?php echo date("Y");?> <span class="blue">Detona</span></p>
     </div> <!-- END main-container -->
    </div> <!-- END footer -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type="text/javascript">
    function add_fields() {
      var d = document.getElementById("content");

      d.innerHTML +=
      "<br /><span>Width: <input type='text'style='width:48px;'value='' /><small>(ft)</small></span> X <span>Length: <input type='text' style='width:48px'  value='' /><small>(ft)</small</span>";
    }

    </script>

   </body>
  </html>
