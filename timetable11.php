<!DOCTYPE html>
<html>
<head>
  <title>Time table</title>
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
  height: 100%;
  background-color:#212b31;
font-size:25px;
  color: white;
 font-family: 'Asset', cursive;
 text-align: center;
text-shadow: 5px 5px black;
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
       background-color:#480607;
  }

  .affix ~ .container-fluid {
     position: relative;
     top: 50px;
  }

  div.gallery {
   
    margin: 11px;
    margin-left:10px;
    border: 15px solid #3F2F2B;
    float: left;
    width: 400px;
    height:290px;
    
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
    color:white;
text-shadow:5px 5px black;
}
 div.pics{
 height:300px;
 width:1200;
 
}
.map-con{
width:100%;
}
.img1{
/* For device width smaller than 400px: */
 background-repeat: no-repeat;
    background-image: url('logo.png'); 

}
@media only screen and (min-device-width: 380px)
.img1{
 background-image: url('sosshead.png');
}

* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
}

/* The grid: Four equal columns that floats next to each other */
.column {
    float: left;
    width: 33%;
    padding: 10px;
    
}

/* Style the images inside the grid */
.column img {
    /*opacity: 0.8;*/ 
    cursor: pointer;
    height:300px; 
    border:15px solid #3F2F2B;
}

.column img:hover {
    opacity: 1;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* The expanding image container */

/* Expanding image text */
#imgtext {
    position: absolute;
    bottom: 15px;
    left: 15px;
    color: white;
    font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
    position: absolute;
    top: 10px;
    right: 15px;
    color: white;
    font-size: 35px;
    cursor: pointer;
}

 
.footer {
    padding: 20px; /* Some padding */
    text-align: center; /* Center text*/
    /* Grey background */
}
item{
width:1300px;
}
body, html {
  height: 100%;
  margin: 0;
  
}

* {
  box-sizing: border-box;
}

.container{
font-family: '', cursive;font-size: 35px;"
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
h3{
text-align: justify;
}

  </style>
</head>

<body bgcolor=white>
<div class="container-fluid">

<div class="hdimg" align="center"><img  name="logo" src="images/head2.png" class="img-responsive"  style="width:60%; height:40%; ">
</div>
</div>
<?php include 'Include/navbar.php'; ?>



<div class="container">
  <div class="row">
    <div class="col-sm-8" align="justify">
      <h1>  Time-Table</h1>
<h3>
<a href="Notice/time_table_MBA_RD.pdf" style="color:black ;" ><b>1.</b>MBA Rural Development [Semester 2]</a> </h3>
<h3>
<a href="Notice/TIME_TABLE_SEM_II_FINAL.pdf" style="color:black;"><b>2.</b>MBA Public Administrative And Policy[Semester 2],MA Political Science[Semester 2]</a></h3>
  <h3>
<a href="Notice/TIME_TABLE_MSW,_BSW,_MA_SOCIOLOGY.pdf" style="color:black;"><b>3.</b>M.S.W [Semester 4] , M.S.W [Semester 2] , M.A Sociology, B.S.W [Semester 2]</a></h3>
  <h3>
<a href="Notice/timetable.pdf" style="color:black;"><b>4.</b>MA Clinical Psycology</a></h3>
  
    </div>
  <div class="col-sm-4" style="align-items: center;" >
  <br>
   <img src="images/syllabus.gif" height:350px; class="img-responsive">
</div>
</div>
</div>
<br>

<?php include 'Include/footer.php';?>
</body>
</html>
