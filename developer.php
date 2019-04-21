<!DOCTYPE html>
<html>
<head>
  <title>developers</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <!-- Links to be used online -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
<link href="https://fonts.googleapis.com/css?family=Allura|Almendra+Display|Asset" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merienda:700" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script|Lobster|Merienda|Permanent+Marker" rel="stylesheet">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

  <style>
html {
  scroll-behavior: smooth;
}

#section1 {
  height: 60px;
  background-color:#480607;
font-size:25px;
  color: white;
 font-family: 'Asset', cursive;
 text-align: center;
text-shadow: 5px 5px black;
}

.parallaxs1 {
/* The image used */
  background-image: url("brochure1.jpg");
/* Set a specific height */
  height: 200px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallaxfac{
/* The image used */
  background-image: url("images/devback.jpg");
/* Set a specific height */
  height: 200px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


.parallaxs2 {
  /* The image used */
  background-image: url("globe.gif");

  /* Set a specific height */
  height: 300px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallaxs3 {
  /* The image used */
  background-image: url("15885_DAVV_APP.jpg");

  /* Set a specific height */
  height: 400px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallaxn {
  /* The image used */
  background-image: url("news.jpeg");

  /* Set a specific height */
  height: 600px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

  body {
      position: relative; 
  }
  .affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
  .navbar {
      margin-bottom: 0px;
  }

  .affix ~ .container-fluid {
     position: relative;
     top: 50px;
  }

 
.map-con{
width:100%;
}
.img1{
/* For device width smaller than 400px: */
 background-repeat: no-repeat;
    background-image: url('logo.png'); 

}



* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;

}

.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    
}

/* Content */
.content {
    background-color: black;
    padding: 1px;
    
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
    }
}
.footer {
    padding: 20px; /* Some padding */
    text-align: center; /* Center text*/
    /* Grey background */
}
item{
width:1300px;
}
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.columnc1 {
  float: left;
  width: 35%;
  padding: 10px;
  height: 370px; /* Should be removed. Only for demonstration */

}
.columnc2 {
  float: left;
  width: 65%;
  padding: 10px;
  height: 370px; /* Should be removed. Only for demonstration */
  
}

/* Clear floats after the columns */
.rowc:after {
  content: "";
  display: table;
  clear: both;
}
.news{
	color: black;
	background-color: #fffdd0;

}
/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .head a {
    float: none;
    display: block;
    text-align: left;
  }
  .head-right {
    float: none;
  }
}
.ltx {
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #3c1414, 0 0 20px #fff, 0 0 30px #65000b, 0 0 40px #65000b, 0 0 50px #f78fa7, 0 0 60px #800000, 0 0 70px #cc3333;
  }
  
  to {
    text-shadow: 0 0 20px #560319,0 0 30px #800000, 0 0 40px #ff004f #560319;
  }
}
.fa {
  padding: 1px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 1px 1px;
  margin-right:100px;
}

.fa:hover {
    opacity: 0.9;
}

.fa-facebook {
color: white;
}
.fa-instagram {
  color: white;
}
* {
  box-sizing: border-box;
}

.rowc{
	height:400px;
}

.rowm {
  margin: 4px -8px;
  height:400px;
  
}

/* Add padding BETWEEN each column */
.rowm,
.rowm > .colm {
  padding: 4px;
}

/* Create four equal columns that floats next to each other */
.colm1 {
  float: left;
  width: 40%;
  background-image:url("vbg.jpeg");
}
.colm2 {
  float: left;
  width: 60%;
  background-image:url("vbg.jpeg");
}

/* Clear floats after rows */ 
.rowm:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.contentm {
  background-color: white;
  padding: 10px;
  font-size:20px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .colm {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .colm {
    width: 100%;
  }
}
.rowh {
  margin: 4px -8px;
  height:400px;
}

/* Add padding BETWEEN each column */
.rowh,
.rowh > .colm {
  padding: 4px;
}

/* Create four equal columns that floats next to each other */
.colh1 {
  float: left;
  width: 40%;
}
.colh2{
  float: left;
  width: 60%;
}

/* Clear floats after rows */ 
.rowh:after {
  content: "";
  display: table;
  clear: both;
}

/* Contenth */
.contenth {
  background-color: white;
  padding: 10px;
  font-size:20px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .colh {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .colh {
    width: 100%;
  }
}

.body {
	margin: 0;
	overflow: hidden;
}

.canvas {
    background-color: black;
}

.instructions {
	position: absolute;
	color: #000;
	bottom: 0;
	padding-bottom: 6px;
	font-family: sans-serif;
    font-size: 20px;
	width: 100%;
	text-align: center;
	pointer-events: none;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:black;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
.glow {
  font-size: 80px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}

  </style>
</head>
<body bgcolor=white>
<div class="container-fluid">

<div class="hdimg" align="center"><img  name="logo" src="images/head2.png" class="img-responsive"  style="width:60%; height:40%; ">
</div>
</div>

<?php include 'Include/navbar.php'; ?>
<div class="row" style="background-image:url(images/code.gif)">
<!-- <div class="lapigif" style="float:right;"><img src="dev.gif" style="width:300px;"></div> -->
<h1 class="glow" style=" text-align: center; font-size:30px;color:black; font-family: 'Asset', cursive;"">OUR TEAM</h1>

<h3 style="color:white;text-align:center;font-family: 'Merienda', cursive;">It's Nice to Meet You!</h3>
<h5 style="color:white;text-align:center;font-family: 'Satisfy', cursive;font-size:20px;">This is our development team, who have contributed to the developement of the SOSS website and made this possible to deploy this website within the time.
</h5>
<div class="col-sm-6" style="text-align:center;color:white;font-family: 'Merienda', cursive;font-size:25px;">
 <img src="images/richa.jpg" class="img-circle" alt="richa bansal" width="230px" height="230px"> <br>  Richa Bansal[IIPS]<br><a href="https://www.linkedin.com/in/richa-bansal-904946143/" class="fa fa-linkedin"></a>
<a href="https://www.instagram.com/richa7630/" class="fa fa-instagram"></a>
<a  href="https://github.com/bansalricha101" class="fa fa-github" style="font-size:36px;color:green"></a>
</div>
<div class="col-sm-6" style="text-align:center;color:white;font-family: 'Merienda', cursive;font-size:25px;">
 <img src="images/pari.jpeg" class="img-circle" alt="parinita bhadra" width="230px" height="230px" ><br></a><p style="">Parinita Bhadra[IIPS]</p><a href="https://www.linkedin.com/in/parinita-bhadra-157979145/" class="fa fa-linkedin">
<a href="https://www.instagram.com/parinita_bhadra/" class="fa fa-instagram"></a>
<a  href=" https://github.com/pari18" class="fa fa-github" style="font-size:36px;color:green" ></a>
</div>
</div>
<div class="row" style="background-image:url(images/code.gif)">
<div class="col-sm-6" style="text-align:center;color:white;font-family: 'Merienda', cursive;font-size:25px;"> <img src="images/shweta1.jpg" class="img-circle" alt="Cinque Terre" width="230px" height="230px"><br>
Shweta Malviya[IIPS]<br><a href="https://www.linkedin.com/in/shweta-malviya-4b74aal46/" class="fa fa-linkedin"></a> 
<a href="https://www.instagram.com/je_suis_romantique/" class="fa fa-instagram"></a>

</div>
<div class="col-sm-6" style="text-align:center;color:white;font-family: 'Merienda', cursive;font-size:25px;">
<img src="images/ayushi.png" class="img-circle" alt="ayushi pandya" width="230px" height="230px"><br>
 Ayushi Pandya[SCLC]<br><a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-instagram"></a>

</div>

</div>
<div class="parallaxfac"></div>
<div class="mentors" style="background-image:url(images/news.jpeg);color:white;text-align:center;font-family: 'Abril Fatface', cursive;" ><h2 class="glow" style=" text-align: center; style="font-size:10px color:black; font-family: 'Asset', cursive;">GUIDED BY</h2>

    <br>
      <h2 style="text-align:center;color:white;text-align:center;font-family: 'Abril Fatface', cursive;">RESPECTED</h2><p style="text-align:center;color:white;font-family: 'Merienda', cursive;font-size:25px;"> Dr.Maya Ingle</p>
<p style="text-align:center;color:white;font-family: 'Merienda', cursive;font-size:25px;">Prof. Rekha Acharya (HOD)</p>
<br>
<p style="text-align:center;color:white;font-family: 'Merienda', cursive;font-size:25px;">Ceo. Sachin Mandwariya(workholics infocorp)</p>
    <p style="text-align:center;color:white;font-family: 'Merienda', cursive;font-size:25px;"> Miss Anishka jain (SCSIT)</p>
       </div>
<div class="parallaxfac"></div>
<?php include 'Include/footer.php'; ?>
</body>
</html>
