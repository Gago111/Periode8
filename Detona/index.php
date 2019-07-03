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
      <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
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

        <div class="banner img-fluid" style="background-image: url(assets/img/headers/apple.jpg);
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
              <h1 class="text-center text-white">Een nieuw leven en een aantrekkelijke prijs voor uw smartphones en laptops !</h1>
              <a class="btn btn-outline-secondary" href="inkoop.php">Inkoop</a>
              <a class="btn btn-outline-primary" href="verkoop.php">Verkoop</a>
            </div>
          </div>
        </div> <!-- END bg-dark -->
      </div>

      <div class="container">
        <div class="blok3">
          <div class="row">
            <div class="col-md-4">
              <div class="service">
                <div class="text-center">
                  <img class="img-fluid text-center" src="assets/img/delivery.png" alt="">
                  <a href="contact.php"> <h4 class="text-center">Leverancier worden</h4></a>
                  <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                  <a href="contact.php" class="btn btn-outline-primary">Lees meer</a>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="service">
                <div class="text-center">
                  <img class="img-fluid text-center" src="assets/img/piggy.png" alt="">
                  <a class="" href="verkoop.php"><h4 class="text-center">Verkoop</h4></a>
                  <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                  <a href="verkoop.php" class="btn btn-outline-primary">Lees meer</a>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="service">
                <div class="text-center">
                  <img class="img-fluid text-center" src="assets/img/data2.png" alt="">
                  <a class="" href="datavernietiging.php"><h4 class="text-center">Datavernietiging</h4></a>
                  <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                  <a href="datavernietiging.php" class="btn btn-outline-primary">Lees meer</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-gray ">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="blok4 text-center p-4">
                <h2 class="text-center">Over<span class="ml-2 blue">Detona</span></h2>
                <p class="text-center">
                  Wij zijn voornemens om een nieuwe (internationale) onderneming op te zetten voor de in- en verkoop van “off market” smartphones en computer producten van bedrijven in bulk. Off market betekent gebruikte doch courante producten die interessant genoeg zijn voor de markt. Momenteel doen wij dit via marktplaats en bol.com, maar wij willen een eigen B2B inkoop- en verkoopplatform ontwikkelen, vanwaar uit wij deze producten kunnen in- en verkopen. Vandaar de wens om een eigen website onder de naam detona.nl op te zetten.
                </p>
                <a class="mb-5" href="overons.php">Lees meer</a>
              </div>
            </div>
          <div class="col-md-6">
            <!-- <img class="" src="assets/img/about-us.png" width="800" alt=""> -->
          </div>
        </div>
      </div>
    </div>

    <div style="margin-top:20px;;">
      <div class="container">
        <div class="blok2">
          <!-- <div class="m-3 pt-3"> -->
            <div class="row text-center">
              <div class="col-md-9">
                <div class="row b4">

                  <div class="col-md-6">
                    <div class="box">
                      <div class="row">
                        <div class="col-md-4 col-4">
                          <img class="" src="assets/img/waarden/resume.png" alt="">
                        </div>
                        <div class="col-md-8 col-8">
                          <h4>Professioneel</h4>
                          <p>Wij zijn in bezit van de noodzakelijke vergunningen en werken volgens wettelijke richtlijnen</p>
                          <p>Onze kennis van smartphones & ICT is onze kracht</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="box mb-4">
                      <div class="row">
                        <div class="col-md-4 col-4">
                          <img class="" src="assets/img/waarden/shield.png" alt="">
                        </div>
                        <div class="col-md-8 col-8">
                          <h4>Betrouwbaarheid</h4>
                          <p>Verwerking volgens wettelijke richtlijnen</p>
                          <p>Betrouwbare dataverwijdering incl rapportage</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="box mb-4">
                      <div class="row">
                        <div class="col-md-4 col-4">
                          <img class="" src="assets/img/waarden/dove.png" alt="">
                        </div>
                        <div class="col-md-8 col-8">
                          <h4>Ontzorging</h4>
                          <p>Wij nemen alles uit handen van afvoer, verwerking en uitbetaling</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="box mb-4">
                      <div class="row">
                        <div class="col-md-4 col-4">
                          <img class="" src="assets/img/waarden/hand-shake.png" alt="">
                        </div>
                        <div class="col-md-8 col-8">
                          <h4>Betrokkenheid</h4>
                          <p>Door recycling en hergebruik dragen wij zorg voor het milieu en de circulaire economie.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="box mb-4">
                      <div class="row">
                        <div class="col-md-4 col-4">
                          <img class="" src="assets/img/waarden/mind.png" alt="">
                        </div>
                        <div class="col-md-8 col-8">
                          <h4>Kennis</h4>
                          <p>Wij zijn in bezit van de noodzakelijke vergunningen en werken volgens wettelijke richtlijnen</p>
                          <p>Onze kennis van smartphones & ICT is onze kracht</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="box mb-4">
                      <div class="row">
                        <div class="col-md-4 col-4">
                          <img class="" src="assets/img/waarden/transparency.png" alt="">
                        </div>
                        <div class="col-md-8 col-8">
                          <h4>Transparantie</h4>
                          <p>U ontvangt een eerlijke marktconform bod</p>
                          <p>Wij zijn niet verbonden aan een ICT leverancier of verwerkingsbedrijf en daardoor onafhankelijk en belangeloos</p>
                          <p>Vooraf eerlijk in wat wij niet kunnen of activiteiten waar wij kosten voor in rekening moeten brengen</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 font-weight-bold vinkjes">
                <div style="border:1px solid #548DD4" class="blok5  p-4">
                  <img src="assets/img/waarden/correct.png" alt="">
                  <p>Opkoper/trader van zakelijke smartphones, tablets & laptops.</p>
                  <img src="assets/img/waarden/correct.png" alt="">
                  <p>100% veilige dataverwijdering</p>
                  <img src="assets/img/waarden/correct.png" alt="">
                  <p>Snel marktconform waardebod</p>
                  <img src="assets/img/waarden/correct.png" alt="">
                  <p>Ontzorging in het transport</p>
                  <img src="assets/img/waarden/correct.png" alt="">
                  <p>Duurzame en gecertificeerde verwerking</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="bg-gray">
      <div class="container">
        <div class="blok5 p-5">
          <div class="row justify-content-center">
            <div class="col-md-3 text-center font-weight-bold">
              <img src="assets/img/success.png" alt="">
              <p class="">
                de opkoop van gebruikte smartphones en ICT apparatuur van bedrijven
              </p>
            </div>
            <div class="col-md-3 text-center font-weight-bold">
              <img src="assets/img/success.png" alt="">
              <p class="">
                de restwaarde van deze apparatuur vormt opbrengst voor het bedrijf
              </p>
            </div>
            <div class="col-md-3 text-center font-weight-bold">
              <img src="assets/img/success.png" alt="">
              <p class="">
                De betrouwbare vernietiging van data-dragers
              </p>
            </div>
            <div class="col-md-3 text-center font-weight-bold">
              <img src="assets/img/success.png" alt="">
              <p class="">
                de milieuvriendelijke verwerking van onbruikbare (End of Life) apparatuur en het hergebruik (circulaire economie).
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <a class="btn btn-outline-secondary" href="inkoop.php">Meer informatie</a>
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


    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <script type="text/javascript">
      $('.nav-item').button().bind('click', function(){
          $(this).addClass('active');
      });
    </script>



     </body>
    </html>
