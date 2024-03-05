<style>
body{
    border: 2px solid black;
    padding: 25px;
    background-repeat:no-repeat;
    background-size: cover;
   
}

input{
	background-color: transparent;
	border: none;
	border-bottom: 1px solid black;
	border-radius: 5px;
}
select{
	background-color: transparent;
	border: none;
	border-bottom: 1px ;
}
input::placeholder{
	color: #000000;
}
.button {
    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button1{
	background-color: #4CAF50;
	border-radius: 4px;
}
.button1:hover {
    background-color: transparent;
    color: white;
    border: 2px solid #4CAF50;
}
.saga{
float:right;
padding:0 50px 0px;
color: #ffcc00;
font-style: bold;
font-size: 20px;
}
nav{
  float: left;
}
</style>

<html>
<head>
<title>HOTEL ELİZA</title>
<link rel="shortcut icon" href="el.png">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="w3-top">
  <nav class="w3-bar w3-black">
    <a href="index.php" class="w3-button w3-bar-item"><img src="el.png" width="25" height="25"> HOTEL ELİZA</a>
    <a href="aboutc.php" class="w3-button w3-bar-item">HAKKIMIZDA</a>
    <a href="admin/login.php" class="w3-button w3-bar-item">GİRİŞ</a>
    <a href="odalar.php" class="w3-button w3-bar-item">ODALAR</a>
    <a href="foto.php" class="w3-button w3-bar-item">FOTOĞRAFLAR</a>
    <a href="bizeulas.php" class="w3-button w3-bar-item">BİZE ULAŞIN</a>
      <a href="form.php"  class="saga">REZERVASYON</a>
  </nav>
</div>
<br><br><br>
<body background="main.jpg" align="center">

  <form method="post" action="dosignup.php" >
<!-- Navigation -->

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev {
  left: 0;
  border-radius: 3px 0 0 3px;
}
/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="4.jpg" style="width:100%">
  <div class="text">Pool site view</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">2/ 6</div>
  <img src="3.jpg" style="width:100%">
  <div class="text">Pool</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="5.jpg" style="width:100%">
  <div class="text">suite</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="6.jpg" style="width:100%">
  <div class="text">pool </div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5/ 6</div>
  <img src="7.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="8.jpg" style="width:100%">
  <div class="text"></div>
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span> 
 

</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
