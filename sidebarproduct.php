<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous">
  
</script>

<script src="js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="./style.css">

 <link rel="stylesheet" type="text/css" href="css\product.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1000px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: black;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body style="background-image: url(images/background.jpg); color:white;">
<div class="container-fluid">
  <h1 class="text-center">FITNESS MANAGEMENT SYSTEM</h1>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>John's Blog</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="">IMPORTANCE OF HEALTH</a></li>
        <li><a href="#section2">PRODUCTS</a></li>
        <li><a href="#section3"></a></li>
        <li><a href="#section3"></a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="main">


<div class="container">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 35rem;">
  <img class="card-img-top" src="images/barbell.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Barbell</h4>
    <p class="card-text">Price: Rs.</p>
    <a href="#" data-name="O" data-price="0.5" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 35rem;">
  <img class="card-img-top" src="images/e2.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title"></h4>
    <p class="card-text">Price: Rs.</p>
    <a href="#" data-name="B" data-price="1.22" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 35rem;">
  <img class="card-img-top" src="images/Pushups stands.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Pushup Stands</h4>
    <p class="card-text">Price: Rs.</p>
    <a href="#" data-name="L" data-price="5" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
    </div>
</div>

        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
