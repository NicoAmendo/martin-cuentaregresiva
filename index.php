<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MG</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/logo-dorado.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.7.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
  @import url("https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:900");
  html {
    display: grid;
    min-height: 100%;
  }
  
  /* body { */
    /* display: grid; */
    /* background: #183059; */
  /* } */ 
  
  .container-01 {
    position: relative;
    margin: auto;
    overflow: hidden;
    /* width: 650px;
    height: 480px; */
    /* background: #183059; */
    background-color: #1d1a17;
  }
  
  h1 {
    font-family: "Lato", sans-serif;
    text-align: center;
    margin-top: 2em;
    font-size: 1em;
    text-transform: uppercase;
    letter-spacing: 5px;
    color: #F6F4F3;
    margin-bottom: 100px;
  }
  
  #timer {
    color: #F6F4F3;
    text-align: center;
    text-transform: uppercase;
    font-family: "Lato", sans-serif;
    font-size: 0.7em;
    letter-spacing: 5px;
    margin-top: 25%;
    display:flex;
    justify-content: space-between;
  }
  
  .days, .hours, .minutes, .seconds {
    display: inline-block;
    padding: 20px;
    width: 100px;
    border-radius: 5px;
  }
  
  .days {
    background: #EF2F3C;
  }
  
  .hours {
    background: #F6F4F3;
    color: #183059;
  }
  
  .minutes {
    background: #276FBF;
  }
  
  .seconds {
    background: #F0A202;
  }
  .numbers {
    font-family: "Montserrat", sans-serif;
    color: #183059;
    font-size: 4em;
  }
  
  .white {
    position: absolute;
    background: #F6F4F3;
    height: 85px;
    width: 75px;
    left: 30%;
    top: 2%;
  }
  .white .triangle {
    border-bottom: 14px solid #F6F4F3;
  }
  .white .string {
    background: #F6F4F3;
    border: 1px solid #F6F4F3;
  }
  
  .red {
    position: absolute;
    background: #EF2F3C;
    left: 18%;
    top: 9%;
    height: 65px;
    width: 70px;
  }
  .red .triangle {
    border-bottom: 14px solid #EF2F3C;
  }
  .red .string {
    background: #EF2F3C;
    border: 1px solid #EF2F3C;
  }
  
  .blue {
    position: absolute;
    background: #276FBF;
    height: 80px;
    width: 80px;
    left: 60%;
    top: 5%;
  }
  .blue .triangle {
    border-bottom: 14px solid #276FBF;
  }
  .blue .string {
    background: #276FBF;
    border: 1px solid #276FBF;
  }
  
  .balloon {
    border: 1px solid #000;
    border-radius: 50% 50% 50% 50%/40% 40% 60% 60%;
    z-index: 2;
  }
  
  .eye {
    position: absolute;
    width: 7px;
    height: 7px;
    top: 40%;
    left: 22%;
    background: #000;
    border-radius: 50%;
  }
  .eye:after {
    content: "";
    left: 35px;
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #000;
    position: absolute;
  }
  
  .mouth {
    position: absolute;
    top: 45%;
    left: 43%;
    width: 7px;
    height: 7px;
    border-radius: 50%;
  }
  
  .happy {
    border: 2px solid;
    border-color: transparent #000 #000 transparent;
    transform: rotate(45deg);
  }
  
  .triangle {
    position: absolute;
    left: 40%;
    bottom: -10%;
    width: 0;
    height: 0;
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;
  }
  
  .string {
    position: absolute;
    height: 70px;
    width: 1px;
    left: 48%;
    top: 100%;
    z-index: -1;
  }
  
  .star {
    width: 20px;
    height: 20px;
    background: #F6F4F3;
    -webkit-clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
    clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
  }
  
  .star-red {
    width: 30px;
    height: 30px;
    margin-left: 51px;
    margin-top: -5px;
    background: #EF2F3C;
    -webkit-clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
    clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
  }
  
  footer {
    position: fixed;
    bottom: 0;
    right: 0;
    text-transform: uppercase;
    padding: 10px;
    font-family: "Lato", sans-serif;
    font-size: 0.7em;
  }
  footer p {
    letter-spacing: 3px;
    color: #EF2F3C;
  }
  footer a {
    color: #F6F4F3;
    text-decoration: none;
  }
  footer a:hover {
    color: #276FBF;
  }
  
    </style>
  
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center" syle="background:#1d1a17;">
      <div class="logo">
        <h1 class="text-light"style="font-size:26px;">Martín Gallo</br><span><small style="font-size:12px;"> Ordenación Sacerdotal </small></span></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>


    </div>
  </header><!-- End Header -->

  <main id="main">
    <section class="about" data-aos="fade-down" style="padding-top: 0px;padding-bottom: 0px;">   

    <div class="container-01">
      <div class="row">
        <div class="col-lg-12">        
          <p class="fst-italic" style="color: white;text-align: center;padding-top: 57px;padding-bottom: 0px;font-size: 28px;font-family: iknu;">
    No te dejaré ni te abandonaré.</br><small style="font-size:19px">Hb 13,5</small></p>
          </div>
        </div>
      <div class="row">
        <div class="col-lg-12">
      <div id="timer"></div>
      <h1>14 de Mayo del 2022</h1>
    </div>
  </div>
</div>
</section>


<!-- agrego tabs -->
<style>
  .tabs {
  display: flex;
  flex-wrap: wrap;
  height: auto;
  width: auto;
}
 
.tabs label {
  order: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 1rem 0rem;
    margin-right: auto;
    cursor: pointer;
    background-color: #1d1a17;
    font-weight: bold;
    transition: background ease 0.3s;
    margin-left: auto;
}
 
.tabs .tab {
  order: 9;
  flex-grow: 1;
  width: 100%;
  height: 100%;
  display: none;
  padding: 1rem;
  background: #fff;
  padding: 20px;
  box-shadow: -10px 10px 0px 0px black;
}
 
.tabs input[type="radio"] {
  display: none;
}
 
.tabs input[type="radio"]:checked + label {
  background: #fff;
  color: #1d1a17;
  border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    padding-left: 5px;
    padding-right: 5px;
}
 
.tabs input[type="radio"]:checked + label + .tab {
  display: block;
}
/*  
@media (max-width: 465px) {
  .tabs .tab,
  .tabs label {
   order: initial;
  }
 
  .tabs label {
    width: 100%;
    margin-left: 50px;
  }
} */
 
.container-02 {
  background: #1d1a17;
  /* min-height: 100vh; */
  box-sizing: border-box;
  /* padding-top: 10vh; */
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
  font-weight: 300;
  line-height: 1.5;
  /* max-width: 60rem; */
  margin: 0 auto;
  font-size: 110%;
  display: flex;
  justify-content: center;
  align-items: center;
  color:white;
}
</style>
<section class="about" data-aos="fade-up" style="padding-top: 0px;">
  <div class="container-02">
    <div class="row">
      <div class="col-lg-12">
        <div class="tabs">
          <input type="radio" name="tabs" id="tabone" checked="checked">
          <label for="tabone">Inicio</label>
          <div class="tab">
            <!-- <h1>First Tab Content</h1> -->
            <img class="d-block w-100" src="assets/img/alejo/palabras.jpeg" alt="Second slide" style="border-radius: 10px;">
            <p style="color: #62676b;font-family: 'Lato';"><br>             
              Ahora sé, Señor, por qué no te pronuncias. Tú mismo eres la respuesta. Ante tu rostro los interrogantes se desvanecen. ¿Qué otra respuesta nos iba a colmar? Tan solo palabras, palabras; palabras que luchan con otras palabras.</br>
             <br><b> C.S. Lewis, Mientras no tengamos rostro</b></br></p>
          </div>
      
          <input type="radio" name="tabs" id="tabtwo">
          <label for="tabtwo">Invitación</label>
          <div class="tab">
            <!-- <h1>Second Tab Content</h1> -->
            <img class="d-block w-100" src="assets/img/alejo/invitacion.jpeg" alt="Second slide" style="border-radius: 10px;">
            <p style="color: #62676b; font-family: 'Lato';"><br>Te hago participe de esta alegria, por eso te espero<b>14 de mayo</b> a las 11:00 hs, en la Parroquia <b>Inmaculada Concepción</b>, Maquinista Savio.<br> Compartiremos la misa donde el obispo me hará sacerdote por la imposición de manos y oración consecratoria. </br>Luego de la ceremonia haremos un agape en el gimnasio del colegio.</br></br>¡Nos vemos ese día!</p>
          </div>
          
          <input type="radio" name="tabs" id="tabthree">
          <label for="tabthree">Regalo</label>
          <div class="tab">
            <!-- <h1>Third tab content</h1> -->
            <img class="d-block w-100" src="assets/img/alejo/aslan.png" alt="Second slide" style="border-radius: 10px;">
            <p style="color: #62676b; font-family: 'Lato';"><br>¿Qué te puedo regalar?<br>
            Muchos me han hecho esta pregunta, y la verdad quisiera que me acompañes ese día.<br>           
            <br> — Volveremos a vernos pronto.<br>
              — Por favor, Aslan — dijo ella — , ¿a qué llamas «pronto»?<br>
              — A todo le llamo pronto — respondió él<br><br>
              Aunque fue largo el camino que he recorrido, para Jesús siempre es pronto.<br>Ustedes fueron testigos de ese camino, por eso, quisiera que lo compartan conmigo acompañandome ese dia como familia y rezando por mi.<br>      
              Es la Iglesia la que como madre me acompaña y me dice:<b> No te dejaré ni te abandonaré</b>.
            </p>
          

          </div>
        </div>


        </div>
      </div>
    </div>
    </section>
    <!-- ======= About Section ======= -->
   


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script>

$( document ).ready(function(){
    $('.carousel slide').carousel({
      autoplay: true,
      interval: 1000,
      autoplaySpeed: 1000,
    })
});
//  $('.carousel slide').carousel({
//   interval: 2000,
//   autoplay: true
// });
// var owl = $('.carousel slide');
// owl.owlCarousel({
//    loop:true,
//    nav:true,
//    margin:10,
//    autoplay: true,
//    // autoplayTimeout: 1000,
//    autoplaySpeed: 3000,
//    responsive:{
//      0:{
//            items:1,
//            nav:false,
//        },
//        600:{
//            items:1,
//            nav:false
//        },
//        768:{
//            items:1,
//            nav:false,
//        }
//    }
// });
</script>
<script>
        
  const year = new Date().getFullYear();
const fourthOfJuly = new Date(year, 4,14).getTime();
const fourthOfJulyNextYear = new Date(year + 1, 4, 14).getTime();
const month = new Date().getMonth();

// countdown
let timer = setInterval(function() {

// get today's date
const today = new Date().getTime();

// get the difference
let diff;
if(month > 4) {
diff = fourthOfJulyNextYear - today;
} else {
diff = fourthOfJuly - today;
}




// math
let days = Math.floor(diff / (1000 * 60 * 60 * 24));
let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
let seconds = Math.floor((diff % (1000 * 60)) / 1000);

// display
document.getElementById("timer").innerHTML =
"<div class=\"days\"> \
<div class=\"numbers\">" + days + "</div>días</div> \
<div class=\"hours\"> \
<div class=\"numbers\">" + hours + "</div>horas</div> \
<div class=\"minutes\"> \
<div class=\"numbers\">" + minutes + "</div>min</div> \
<div class=\"seconds\"> \
<div class=\"numbers\">" + seconds + "</div>seg</div> \
</div>";

}, 1000);
</script>
</body>

</html>