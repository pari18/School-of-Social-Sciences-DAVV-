<!DOCTYPE html>
<html>
<head>
  <title>Syllabus</title>
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
  background-image: url("eventsimg.jpg");

  /* Set a specific height */
  height: 200px;

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


<div class="container">
  <div class="row">
    <div class="col-sm-10">
      <u><h1 align="center">Dipoma And Certificate Courses</h1></u>
<br>
<h2>
              <a href="Notice/c_PG_Diploma-_Human_Rights.pdf" style="color:black">1.PG Diploma- Human Rights</a><br>
            <a href="Notice/Diploma-_Consumer_Psychology_&_Advertising.pdf" style="color:black">2.Diploma- Consumer Psychology & Advertising</a><br>
              <a href="Notice/Diploma_in_labour_law_&_Personnel_Mgt.pdf" style="color:black">3.Diploma in labour law & Personnel Management</a><br>
          <a href="Notice/certificate_course-_Labour_Law_&_Personnel_Mgt.pdf" style="color:black">4.Certificate course- Labour Law & Personnel Management</a><br>
           <a href="Notice/certificate_course-_human_rights.pdf" style="color:black">5.Certificate course- human rights</a><br>
          <a href="Notice/certificate_course-_guidance_&_counselling.pdf" style="color:black">6.Certificate course- guidance & counselling</a><br>
          <a href="Notice/certificate_course-_Consumer_Psychology_&_Advertising.pdf" style="color:black">7.Certificate course- Consumer Psychology & Advertising</a><br>
          </h2>
</div>
 <div class="col-sm-2" style="align-items:center;">
   <img src="images/syllabus.gif"  class="img-responsive">
</div>
</div>
</div>

<?php include 'Include/footer.php';?>
</body>
</html>
