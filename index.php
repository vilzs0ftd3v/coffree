<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela Round">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    * { /* to fix the width in case of padding and other style involve */
    box-sizing: border-box;
}
body {font-family: "Varela Round", sans-serif;margin:0;}

/* for div with class row.*/
.row::after {
    content: "";
    clear: both;
    display: table;
}

/* for colto be floated.*/

[class*="col-"] {
    float: left;
    padding: 15px;
}

@media only screen and (max-width: 599px) {       
    [class*="col-"] {
        width: 100%;
    }

}

/* For tablets: */
@media only screen and (min-width: 600px) {
    a.icon{
        display: none;
    }
        
    .col-s-1 {
        width: 8.33%;
    }

    .col-s-2 {
        width: 16.66%;
    }

    .col-s-3 {
        width: 25%;
    }

    .col-s-4 {
        width: 33.33%;
    }

    .col-s-5 {
        width: 41.66%;
    }

    .col-s-6 {
        width: 50%;
    }

    .col-s-7 {
        width: 58.33%;
    }

    .col-s-8 {
        width: 66.66%;
    }

    .col-s-9 {
        width: 75%;
    }

    .col-s-10 {
        width: 83.33%;
    }

    .col-s-11 {
        width: 91.66%;
    }

    .col-s-12 {
        width: 100%;
    }
    
}

/* For desktop: */
@media only screen and (min-width: 768px) {
    a.icon{
        display: none;
    }
        
    .col-md-1 {
        width: 8.33%;
    }

    .col-md-2 {
        width: 16.66%;
    }

    .col-md-3 {
        width: 25%;
    }

    .col-md-4 {
        width: 33.33%;
    }

    .col-md-5 {
        width: 41.66%;
    }

    .col-md-6 {
        width: 50%;
    }

    .col-md-7 {
        width: 58.33%;
    }

    .col-md-8 {
        width: 66.66%;
    }

    .col-md-9 {
        width: 75%;
    }

    .col-md-10 {
        width: 83.33%;
    }

    .col-md-11 {
        width: 91.66%;
    }

    .col-md-12 {
        width: 100%;
    }
}

.topnav {
  overflow: hidden;


  
}

.topnav a {
  float: right;
  display: block;
  color: #61423B;
  text-align: center;
  padding: 30px 16px;
  text-decoration: none;
  font-size: 15px;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 15px;    
  border: none;
  outline: none;
  color: #61423B;
  padding: 30px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
 
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  /* background-color: #555; */
  background-color:#00b300;
  color: white;
}

.dropdown-content a:hover {
  /* background-color: #ddd; */
  background-color: #00b300;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top:0;
    padding: 30px 16px;
    font-size: 12px;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
    font-size: 12px;
    padding: 14px 16px;
  }
  .topnav.responsive a#new_id {
      margin-top:100px;
  }
  .topnav.responsive .dropdown {float: none; font-size: 15px;}
  .topnav.responsive .dropdown-content {position: relative; font-size: 15px; }
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
    font-size: 12px;
    padding: 14px 16px;
  }
}
img#logo_id{
  
   float:left;
   padding-left:10px;
   padding-top:5px;

}
img.profileImage{
  width: 100%;
  height: auto;
  
}
/* ffffffffffffffffffffffffffffffffffff */

.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
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
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
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
  .text {font-size: 11px}
}

.parallax{
    /* The image used */
    background-image: url("public/image/front3.png");

/* Full height */
height:600px; 

/* Create the parallax scrolling effect */
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
p{
text-align: justify;
padding: 15px;
color: #61423B;
}
h3{
  text-align: center;
  display: block;
  background-color: #00b300;
  color: whitesmoke;
}
</style>
</head>
<body>
    
<div class="topnav" id="myTopnav">
    
   <img src = "public/image/logo6.png" id="logo_id">    
   <a href="#about" id = "new_id">About</a>
  <div class="dropdown">
    <button class="dropbtn">Menu 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Cappuccino</a>
      <a href="#">Frappe</a>
      <a href="#">Irish</a>
    </div>
  </div> 
  

  <a href="#contact">Contact</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<!-- <div class="row">
  <div class="col-md-12 col-s-12" id="profile">
    <img src="public/image/front3.png" class = "profileImage">
  </div>
</div> -->

<div class="row">
  <div class="col-md-12 col-s-12" id="profile">
    
    <div class="parallax"></div>
  </div>
</div>

<div class="row">

<div class="col-md-4 col-s-12">
  <h3 style="background-color: #61423B;">About</h3>
  <p>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
    Rem numquam a reprehenderit quam ab tenetur perspiciatis 
    aliquam earum? Qui quisquam mollitia in laudantium maxime 
    quaerat dolores labore laborum, omnis error.
  </p>

  <p>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
    Rem numquam a reprehenderit quam ab tenetur perspiciatis 
    aliquam earum? Qui quisquam mollitia in laudantium maxime 
    quaerat dolores labore laborum, omnis error.
  </p>

  <p>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
    Rem numquam a reprehenderit quam ab tenetur perspiciatis 
    aliquam earum? 
  </p>

</div>
  
<div class="col-md-8 col-s-12">
 
 <!-- ffffffffffffffffffffffffffffffffffffff -->
 <div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="public/image/cappucino2.png" style="width:100%">
    <div class="text">Caption Text</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="public/image/frappe2.png" style="width:100%">
    <div class="text">Caption Two</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="public/image/irish2.png" style="width:100%">
    <div class="text">Caption Three</div>
  </div>
  
  </div>
  <br>
  
  <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
  </div>

 <!-- fffffffffffffffffffffffffffff -->
</div>


        
</div>
<br><br><br>
<div class="row">
  <div class="col-md-4 col-s-12">
    <div style="height:250px;border:0.5px solid gray;margin-left:15px; margin-right: 15px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">
      <h3>Store Location</h3>
      <p>
          #999 Blue bird Street, Apt. 2A Vilz subdv. Purok 1, Poblacion 1, Libungan North Cotabato
      </p>
    </div>
  </div>
  <div class="col-md-4 col-s-12">
    <div style="height:250px;border:0.5px solid gray;margin-left:15px; margin-right: 15px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">
      <h3 style="text-align: center;">Email</h3>
      <p style="text-align: center;">
        cofree@gmail.com
      </p>
    </div>
    
  </div>
  <div class="col-md-4 col-s-12">
    <div style="height:250px;border:0.5px solid gray;margin-left:15px; margin-right: 15px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">
      <h3 style="text-align: center;">Contact</h3>
      <p style="text-align: center;">
        +63 02 5235557
      </p>
      <p style="text-align: center;">
        +63 991 9911 2112 - Globe |
        +63 901 9911 2131 - Smart |
        +63 971 9911 2122 - Sun
      </p>  
    </div>
  </div>
</div>
<br><br><br>
<footer style="text-align: center;">&copy; 2020 Cofree</footer>

<script>
//ffffffff
var slideIndex = 0;
showSlides();
//fff
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}


//ffffffffffff
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
//fffffff

</script>

</body>
</html>
