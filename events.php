<!DOCTYPE html>
<html>
<head>
  <title>EVENTS</title>
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


.parallaxevents {
  /* The image used */
  background-image: url("images/eventsimg.jpg");

  /* Set a specific height */
  height: 150px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
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



.footer {
    padding: 20px; /* Some padding */
    text-align: center; /* Center text*/
    /* Grey background */
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

/* Add padding BETWEEN each column */
.rowm,
.rowm > .colm {
  padding: 4px;
}



.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

.column img {
  border: 3px solid #ddd; /* Gray border */
  border-radius: 3px;  /* Rounded border */
  padding: 5px; /* Some padding */
  width: 150px; /* Set a small width */
}

/* Add a hover effect (blue shadow) */
/*.column:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5)
}*/

/*.head{
  margin-left: 150px;
}*/
  </style>
</head>
<body bgcolor=white>
<div class="container-fluid">

<div class="hdimg" align="center"><img  name="logo" src="images/head2.png" class="img-responsive"  style="width:60%; height:40%; ">
</div>
</div>

<?php include 'Include/navbar.php'; ?>


<div class="parallaxevents"></div>
<div class="row">
<h1 style="text-align:center;font-family: 'Abril Fatface', cursive;"> Cultural Events</h1>
<h2 style="text-align:center;"> Teacher's Day</h2>
  <div class="col-sm-4">
  <a target="_self" href="images/teachersday1.jpg" class="img-responsive">
    <img src="images/teachersday1.jpg" alt="Snow" style="width:400px;height:200px;" >
   </a>
  </div>
  <div class="col-sm-4">
   <a target="_self" href="images/teachersday2.jpg">
    <img src="images/teachersday3.jpg" alt="Forest" style="width:400px;height:200px;">
    </a>
  </div>
  <div class="col-sm-4">
  <a target="_self" href="images/teachers.jpg">
    <img src="images/teachers.jpg" alt="Mountains" style="width:400px;height:200px;">
    </a>
  </div>
</div>
<div class="parallaxevents"></div>

<div class="parallaxevents"></div>
<div class="row">
<h2 style="text-align:center;"> Alumini's Day</h2>
  <div class="col-sm-4">
  <a target="_self" href="images/alumni.jpg">
    <img src="images/alumni.jpg" alt="SOSS" style="width:400px;height:200px;">
   </a>
  </div>
  <div class="col-sm-4">
   <a target="_self" href="images/alumni1.jpg">
    <img src="images/alumni1.jpg" alt="SOSS" style="width:400px;height:200px;">
    </a>
  </div>
  <div class="col-sm-4">
  <a target="_self" href="images/alumni2.jpg">
    <img src="images/alumni2.jpg" alt="SOSS" style="width:400px;height:200px;">
    </a>
  </div>
</div>
<div class="parallaxevents"></div>

<div class="parallaxevents"></div>
<div class="row">
<h1 style="text-align:center;font-family: 'Abril Fatface', cursive;"> Academics Events</h1>

<div class="row">
<h2 style="text-align:center;"> Gender Equity</h2>
  <div class="col-sm-4">
  <a target="_self" href="images/gender.jpg">
    <img src="images/gender.jpg" alt="SOSS" style="width:400px;height:200px;">
   </a>
  </div>
  <div class="col-sm-4">
   <a target="_self" href="images/gender2.jpg">
    <img src="images/gender2.jpg" alt="SOSS" style="width:400px;height:200px;">
    </a>
  </div>
  <div class="col-sm-4">
  <a target="_self" href="images/gender1.jpg">
    <img src="images/gender1.jpg" alt="SOSS" style="width:400px;height:200px;">
    </a>
  </div>
</div>
<div class="parallaxevents"></div>

<div class="parallaxevents"></div>
<div class="row">
<h2 style="text-align:center;"> Sustainable Agriculture Development</h2>
  <div class="col-sm-4">
  <a target="_self" href="images/sustainable.jpg">
    <img src="images/sustainable.jpg" alt="SOSS" style="width:400px;height:200px;">
   </a>
  </div>
  <div class="col-sm-4">
   <a target="_self" href="images/sustainable1.jpg">
    <img src="images/sustainable1.jpg" alt="SOSS" style="width:400px;height:200px;">
    </a>
  </div>
  <div class="col-sm-4">
   <a target="_self" href="images/sustainable1.jpg">
    <img src="images/sustainable2.png" alt="SOSS" style="width:400px;height:200px;">
    </a>
  </div>
</div>
<div class="parallaxevents"></div>

<div class="parallaxevents"></div>
<div class="row">
<h2 style="text-align:center;"> Workshop on Research Methodology</h2>
  <div class="col-sm-4">
  <a target="_self" href="images/event_research.jpg">
    <img src="images/event_research.jpg" alt="SOSS" style="width:400px;height:200px;">
   </a>
  </div>
  <div class="col-sm-4">
   <a target="_self" href="images/event reserch methedolgy.jpg">
    <img src="images/event_research_methodology.jpg" alt="SOSS" style="width:400px;height:200px;">
    </a>
  </div>
  <div class="col-sm-4">
  <a target="_self" href="images/event reserchm.jpg">
    <img src="images/event reserchm.jpg" alt="SOSS" style="width:400px;height:200px;">
    </a>
  </div>
</div>
<div class="parallaxevents"></div>

<h1 style="text-align:center;font-family: 'Abril Fatface', cursive;"> Commuity Events</h1>

<div class="row">
<h2 style="text-align:center;"> Indore For Kerela</h2>
  <div class="col-sm-4">
  <a target="_self" href="images/kerela.jpg">
    <img src="images/kerela.jpg" alt="SOSS" style="width:400px;height:200px;">
   </a>
  </div>
  <div class="col-sm-4">
   <a target="_self" href="images/kerela1.jpg">
    <img src="images/kerela1.jpg" alt="SOSS" style="width:400px;height:200px;">
    </a>
  </div>
  <div class="col-sm-4">
  <a target="_self" href="images/kerela3.jpg">
    <img src="images/kerela3.jpg" alt="SOSS" style="width:400px;height:200px;">
    </a>
  </div>
</div>
<div class="parallaxevents"></div>

<?php include 'Include/footer.php'; ?>
</body>
</html>
