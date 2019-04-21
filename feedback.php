<!DOCTYPE html>
<html>
<head>
  <title>FEEDBACK</title>
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

  
.footer {
    padding: 20px; /* Some padding */
    text-align: center; /* Center text*/
    /* Grey background */
}
item{
width:1300px;
}

.container{
font-family:font-size: 35px;"
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
    <div class="col-sm-8">
      <h1>  FEEDBACK ANALYSIS</h1>
<br>
<h3>
<a href="Notice/feed_parent.pdf" style="color:black ;" >1.Parent's Feedback</a> </h3>
<h3>
<a href="Notice/feed_student.pdf" style="color:black;">2.Student's Feedback</a></h3>
  
 <h3>
<a href="Notice/feed_teacher.pdf" style="color:black;">3.Teachers's Feedback</a></h3>

<h3> 
<a href="Notice/feed_alumini.pdf" style="color:black;">4.Alumini's Feedback</a></h3><br><BR>

    </div>
  <div class="col-sm-4" >
   <img src="images/feedbk.gif" height:350px; class="img-responsive">
</div>
</div>
</div>


<?php include 'Include/footer.php'; ?>
</body>
</html>
