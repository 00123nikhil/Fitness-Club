<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Fitness Club</title>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

    footer {
      background-color: grey;
      padding: 25px;
      text-align: center;

    }
    
  .carousel-inner img {
      width: 100%;
      margin: auto;
      height: 100px;
  }

  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }

  </style>
</head>

  <body style="background-image: url(images/bg2.jpg);">

<h1 class="text-center" style="color: white;">FITNESS MANAGEMENT SYSTEM</h1>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php"></a>
    
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="login.php">LOGIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">REGISTER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">CONTACT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"></a>
        </li>
      </ul>
    </div>
  </nav>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

          
</div>
<!--<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>-->
     <!-- <a class="navbar-brand" href="images\f7.jpg"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="register.php">Register</a></li>
      
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>-->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images\f1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="images\f2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="images\e4.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p></p>
    </div>
    <div class="col-sm-4"> 
      <img src="images\8.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p></p>    
    </div>


    <div class="col-sm-4" style="background:orange;">
      <div class="well">
        <h3>OPEN 24/7</h3>
       <p>Anytime Fitness is always open 24/7, close to work and home and provides an exceptional workout at an exceptional price! </p>
      </div>

      <div class="well">
        <H3>PERSONAL TRAINERS</H3>
       <p>Our Personal Trainers ensure you perform exercises safely while giving you the best results. No matter what your fitness needs one of our friendly Personal Trainers will keep you challenged and motivated..</p>
      </div>

      <div class="well">
        <H3>PRIVATE RESTROOMS</H3>
       <p>Anytime fitness is here with a solution, we make sure that all our members get the best restrooms and shower facilities! ​</p>
      </div>
       
       
    </div>
  </div>
</div>
<br>

<footer class="container-fluid text-center">
  <h4>YOUR HEALTH IS OUR PRIORITY</h4>
  <P>nikhilrb13@gmail.com</P>
  <p>7620033889</p>
</footer>

</body>
</html>
