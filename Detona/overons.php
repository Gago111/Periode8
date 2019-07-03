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
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">

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

    <div class="banner img-fluid" style="background-image: url(assets/img/aboutus.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center bottom;
      width: 100%;
      height: 300px;
      opacity: 1;
      visibility: inherit;
      z-index: 20;">
      <div class="container">
        <div class="text-center">
          <h1 class="text-center text-white">Over ons</h1>
        </div>
      </div>
    </div> <!-- END bg-dark -->
  </div>

  <div class="container">
    <div class="pt-5 pb-5 about">
      <div class="row">
        <div class="col-12 col-md-6">
          <h3 class="blue mb-3">Inleiding</h3>
          <p>  Detona is een organisatie die op zakelijke en professionele wijze de mogelijkheid aan bedrijven biedt, om afgeschreven
            maar nog courante smartphones en ICT apparatuur op te kopen tegen aantrekkelijke marktconforme prijzen De verkoop
            geschiedt via een breed netwerk aan business-partners. Door middel van <i>recycling</i> en <i>recovery</i> dragen wij bij aan de zorg
            voor natuur en milieu en de circulaire economie. Ons werkgebied is heel Nederland.</p>
          <h3 class="blue mb-3 pt-3">Korte bedrijfsbeschrijving</h3>
          <p>Detona draagt bij aan de circulaire economie en de bescherming van ons milieu door gebruikte off-market smartphones & ICT apparatuur een 2e leven te geven. Gebruikte, verouderde of overtollige smartphones en ICT apparatuur van bedrijven, worden door middel van onze opkoop en recovery services verkocht aan onze business partners. Door de verkoop ontstaat een opbrengst die ten goede komt aan de opkopende onderneming. Als opkoper van ICT apparatuur in partij en bulk, doen wij een aantrekkelijk waardebod en bieden u de maximale restwaarde voor uw apparatuur. Dit doen wij voor met name smartphones, tablets en laptops. Alle datadragers worden op verzoek gewist en apparaten worden gereedgemaakt voor verkoop en hergebruik.</p>
        </div>
        <div class="col-12 col-md-6">
          <div class="p-center">
            <h3 class="blue mb-3">Propositie</h3>
            <ul>
              <li><i class="fas fa-caret-right mr-2"></i>de opkoop van gebruikte smartphones en ICT apparatuur van bedrijven</li>
              <li><i class="fas fa-caret-right mr-2"></i>de restwaarde van deze apparatuur vormt opbrengst voor het bedrijf</li>
              <li><i class="fas fa-caret-right mr-2"></i>De betrouwbare vernietiging van data-dragers;</li>
              <li><i class="fas fa-caret-right mr-2"></i>de milieuvriendelijke verwerking van onbruikbare (End of Life) apparatuur en het hergebruik (circulaire economie).</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="quote blue">
      <div class="container">
        <div class="col-md-12">
          <p>Opkoop en verkoop van zakelijke smartphones, computers en laptops.</p>
        </div>
    </div>
  </section>

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
