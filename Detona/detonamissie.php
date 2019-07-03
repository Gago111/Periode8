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
    <div class="bg-blue">
      <div class="container-fluid">
        <div class="m-0">
          <div class="row">
            <div class="col-4 text-left">
              <div class="">
                <div class="social mt-1"><a style="font-size:13.8px;  color:#fff;" class="font-weight-bold" href="mailto:info@detona.nl"><img src="assets/img/envelope.png"></i><span>info@detona.nl</span></a>
                  <a style="font-size:13.8px; color:#fff;" class=" font-weight-bold" href="tel:0853035925"><img class="" src="assets/img/phone-call.png" alt=""> <span>085 - 3035925 </span></a>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-4 text-center">
              <div class="social-media mt-2">
                <a class="" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="" href="#"><i class="fab fa-twitter"></i></a>
                <a class="" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="" href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>

            <div class="col-4 text-right">
              <div class="mt-2 mb-2">
              <span class="vlaggen"><a class="" href="#"><img src="assets/img/netherlands.png" alt=""></a><a class="" href="#"><img src="assets/img/united-kingdom.png"></a><a class="" href="#"><img src="assets/img/germany.png" alt=""></a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="test">
      <div id="#fixed" style="background-color: rgba(39,50,61, .70);
      position:absolute;
      z-index: 1;"
      class="container-fluid">
        <div class="scroll row">
          <div class="col-md-12">
            <nav id="#navbar" class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="#"><img class="navbrandx" src="assets/img/detona2.png"></a>

              <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
              </button>


              <div class="collapse navbar-collapse navbar-right" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item active">
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

    <div class="banner img-fluid" style="background-image: url(assets/img/headers/office.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      width: 100%;
      height: 400px;
      opacity: 1;
      visibility: inherit;
      z-index: 20;">
      <div class="container">
        <div class="text-center">
          <h1 style="font-size:40px;" class="text-center text-white">Detona missie</h1>
        </div>
      </div>
    </div> <!-- END bg-dark -->
  </div>

  <div class="container">
    <div class="title-section pt-4">
      <h2 class="text-center pb-2 blue">Missie</h2>
      <div class="row">
        <div class="col-md-12 text-center pb-4">
          Elke dag geven bedrijven Detona het vertrouwen om gebruikte ICT apparatuur een tweede leven te geven. Een verantwoordelijkheid die wij uiterst serieus nemen. Of het nu gaat om smartphones, gebruikte laptops, ipads of macbooks, Detona is trots op het vertrouwen en geeft haar klanten graag de mogelijkheid op :
        </div>
      </div>
    </div>

    <div class="row">
        <div style="display:inline-flex;" class="col-md-4 text-left">
          <i class="fas fa-caret-right mr-2"></i><p> Waarde voor overtollige apparatuur, courant en zelfs beschadigd. de opbrengst kunnen bedrijven weer gebruiken voor de aankoop van nieuwe(re) apparatuur.</p>
        </div>
        <div style="display:inline-flex;" class="col-md-4">
          <i class="fas fa-caret-right mr-2"></i><p>Besparing op smartphones, computers en laptops van diverse merken. bedrijven hebben een alternatief voor de duurdere aankoop van nieuwe technologie</p>
        </div>
        <div style="display:inline-flex;" class="col-md-4">
          <i class="fas fa-caret-right mr-2"></i><p>Bijdrage aan de bescherming van de natuur en het milieu en de circulaire economie. Door middel van recovery en recycling van apparatuur dragen bedrijven bij aan hergebruik van materialen en grondstoffen.</p>
        </div>
    </div>

    <h2 class="text-center pt-3 pb-1 blue">Inkoopvoordelen</h2>
    <div class="before">
      <div class="row">
        <div class="col-md-12 p-3">
          <h3 class="blue">Eerlijke waarde</h3>
          <p>Wij verhogen ons initiële bod, als bij ontvangst en acceptatie, de conditie van het apparaat in betere staat is dan door u gedacht. Als apparatuur niet voldoet aan de opgegeven condities of specificaties, kan het voor ons noodzakelijk zijn om ons bod te verlagen. In dat geval kunnen wij, indien u dit wenst, het apparaat retourneren.</p>
        </div>
      </div>

        <div class="row">
          <div class="col-md-12 p-3">
            <h3 class="blue">Eenvoudig en snel</h3>
            <p>Wij nemen alles uit handen van afvoer, verwerking en uitbetaling.</p>
            <p>Op basis van de specificaties en conditie van de apparatuur kunnen wij u snel een eerlijk aanbod geven</p>
            <p>Afhaal en transport kan in de meeste gevallen kosteloos worden verzorgd.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 p-3">
            <h3 class="blue">Veilig en betrouwbaar</h3>
            <p>Wij vernietigen alle gegevens en/of gegevensdragers zoals met U is overeengekomen.</p>
            <p>Wij nemen de verantwoordelijkheid voor betrouwbare datavernietiging van uw bedrijfsgegevens</p>
          </div>
        </div>

        <h2 class="text-center pt-3 blue">Verkoopvoordelen</h2>

        <div class="row">
          <div class="col-md-12 p-3">
            <h3 class="blue">Aantrekkelijke prijs</h3>
            <p>Nieuwe apparatuur is duur. Steeds vaker kiezen bedrijven voor gereviseerde apparatuur met garantie en besparen daardoor tot wel 40% op de aankoop van een nieuw apparaat.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 p-3">
            <h3 class="blue">Kwaliteit</h3>
            <p>Alle smartphones, tablets en laptops zijn uitgebreid getest op 30 inspectiepunten.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 p-3">
            <h3 class="blue">Betrouwbaarheid</h3>
            <p> Uw tevredenheid is onze hoogste prioriteit.. Als u niet tevreden bent over de conditie van uw aankoop dan bespreken we dit graag met u. Een retourzending kan worden overeengekomen met restitutie van het aankoopbedrag.</p>
          </div>
        </div>
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
      $("li a").click( function() {
  $(".active").removeClass("active");
  $(this).parent("li").addClass("active");
});
    </script>

     </body>
    </html>
