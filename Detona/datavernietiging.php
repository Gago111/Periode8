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

    <div class="banner img-fluid" style="background-image: url(assets/img/headers/data-disk.jpg);
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
          <h1 class="text-center text-white">100% veilig uw gegevensdragers vernietigen</h1>
        </div>
      </div>
    </div> <!-- END bg-dark -->
  </div>


  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="before">
          <div class="pb-5 pt-5">
          <h2 class="blue">Wat bieden wij :</h2>
            <div class="row">
              <div class="col-md-12">
                <h3 class="blue pt-3">Datavernietiging AVG/GDPR Proof</h3>
                <p>Het vernietigen van persoonsgegevens moet ten allen tijde op een vertrouwelijke manier conform de AVG worden uitgevoerd. Er zijn bewaartermijnen van documenten of papieren dossiers bepaald en volgens de AVG moeten persoonsgegevens worden vernietigd binnen de gestelde bewaartermijnen. Het recht op vergetelheid vereist van een organisatie dat persoonsgegevens tijdig en onherstelbaar moeten worden vernietigd. Wij kunnen digitale datadragers gecertificeerd vernietigen, inclusief de registratie van de serienummers met rapportage en certificaat.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <h3 class="blue pt-3">Advies en passende oplossing</h3>
                <p>Het boordelen van uw gegevens en digitale datadragers op “vertrouwelijkheid” en het kiezen van de bijbehorende vernietigingsmethode is maatwerk. Wij gaan daarom graag vooraf met U in gesprek om gezamenlijk tot een passende oplossing te komen.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <h3 class="blue pt-3">Softwarematige datavernietiging</h3>
                <p>Wij kunnen gecertificeerde datavernietiging softwarematig uitvoeren voor digitale datadragers zoals harde schijven en SSD’s. Softwarematige dataverwijdering wordt in onze vernietigingstraat uitgevoerd met gecertificeerde software.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <h3 class="blue pt-3">Fysieke datavernietiging</h3>
                <p>Het fysiek vernietigen van digitale datadragers zoals harde schijven, SSD’s, USB’s, magneetbanden, tapes en diskettes wordt discreet uitgevoerd in ons beveiligd verwerkingsdepot. Voor de fysieke vernietiging van datadragers wordt een DIN 66399 gecertificeerde mechanische schredder ingezet. Onze specialisten zorgen voor 100% volledige destructie</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <h3 class="blue pt-3">"Frequente afvoer en datavernietiging</h3>
                <p>Heeft u regelmatig gegevensdragers die moeten worden vernietigd, dan bieden wij de mogelijkheid om o.b.v. een afvoerschema het transport de vernietiging van uw datadragers te verzorgen.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <h3 class="blue pt-3">"Beveiligd transport</h3>
                <p>Uit veiligheidsoverwegingen vernietigen wij niet bij U op locatie. In overleg kunnen wij de datadragers, eventueel met bijbehorende smartphones, computers, laptops of tablets, ophalen. De datadragers worden verpakt in afgesloten kisten of aluminium security containers. Bij kleinere hoeveelheden adviseren wij gebruik te maken van een beveiligde pakketdienst. Voor het vernietigingsproces maakt dit geen verschil, uw pakket wordt na ontvangst geregistreerd, beveiligd opgeslagen en vernietigd.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <h3 class="blue pt-3">"Veilige verwerking</h3>
                <p>Na het beveiligd transport worden uw datadragers in ons verwerkingslocatie ontvangen. Onze verwerkingslocatie is beveiligd met toegangsloten en alarmbeveiliging met opvolging via een meldkamer. Al onze medewerkers hebben een geheimhoudingsverklaring getekend. Slechts enkele geautoriseerde medewerkers hebben toegang tot de ruimte waar datadragers worden opgeslagen en vernietigd.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <h3 class="blue pt-3">Vernietigingsverklaring</h3>
                <p>Als bewijs van succesvolle vernietiging verstrekken wij een vernietigingscertfificaat. Hiermee heeft u de garantie dat de datavernietiging volgens de Europese richtlijnen is uitgevoerd. Alle datadragers worden geregistreerd en met het serienummer vermeld op het certificaat of rapport. Het certificaat is uw garantiebewijs bij een audit of controle.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <h3 class="blue pt-3">"Opkoop bijbehorende hardware</h3>
                <p>Als de smartphones of laptops niet meer worden gebruikt en u wilt de ICT apparatuur in zijn geheel afvoeren. Bij al uw geleverde hardware vernietigen wij de data op datadragers. Uw ICT apparatuur vertegenwoordigd vaak een restwaarde die uw organisatie kan ontvangen of verrekend kan worden met eventuele kosten voor de datavernietiging. Door middel van revisie zorgen wij ervoor dat de apparatuur weer kan worden hergebruikt, restmaterialen worden milieuvriendelijk gerecycled.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <img class="img-fluid" src="assets/img/flowchart/flowchart34.png" alt="">
      </div>
    </div>



    <div class="pb-5">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-7 centa">
          <img class="img-fluid" src="assets/img/flowchart/flowchart34.png" alt="">

          <h3 class="blue">Vragen?</h3>
          <p>Zoekt u een betrouwbare partner voor uw datavernietiging ? Maar heeft u nog vragen ?</p>
          <p>U kunt vrijblijvend contact met ons opnemen op <a style="font-family:sans-serif;" class="blue" href="tel:">085-3035925</a> , maar u kunt ook een mail sturen naar <a style="font-size:17px; font-family:sans-serif;" class="blue" href="mailto:">info@01-datavernietiging.nl.</a></p>
        </div>

        <div style="padding-top:55px;" class="col-12 col-sm-12 col-lg-5">
          <div id="accordion">

            <div class="card">
              <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Contact
                  </button>
                </h5>
              </div>

              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <img src="assets/img/icons/speech-bubble.png" alt="">Lorem ipsum dolor sit amet
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Advies & gezamenlijke oplossing
                  </button>
                </h5>
              </div>

              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <img src="assets/img/icons/meeting.png" alt="">Lorem ipsum dolor sit amet
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Offerte
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <img src="assets/img/icons/approval.png" alt="">Lorem ipsum dolor sit amet
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Opdrachtbevestiging
                  </button>
                </h5>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <img src="assets/img/icons/verified.png" alt="">Lorem ipsum dolor sit amet
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Planning transport/verzending
                  </button>
                </h5>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  <img src="assets/img/icons/shipped.png" alt="">Lorem ipsum dolor sit amet
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingSix" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Ontvangst, telling & registratie
                  </button>
                </h5>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  <img src="assets/img/icons/list.png" alt="">Lorem ipsum dolor sit amet
                </div>
              </div>
            </div>


            <div class="card">
              <div class="card-header" id="headingSeven" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Vernietiging
                  </button>
                </h5>
              </div>
              <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                <div class="card-body" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  <img src="assets/img/icons/error.png" alt="">Lorem ipsum dolor sit amet
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingEight" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    Rapportage & Certificaat
                  </button>
                </h5>
              </div>
              <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                <div class="card-body" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  <img src="assets/img/icons/policy.png" alt="">Lorem ipsum dolor sit amet
                </div>
              </div>
            </div>

          </div>
        </div>
      </div> <!-- Row -->

    </div>

  </div> <!-- Container -->


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


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



   </body>
  </html>
