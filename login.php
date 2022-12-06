<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Fitness Club</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />



  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="css\login.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body style="background-image: url(images/bg2.jpg);">
<div class="container-fluid">
  <h1 class="text-center"  style="color: white;">FITNESS MANAGEMENT SYSTEM</h1>
          
</div>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
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

<br>

<div class="log-form">
  <h2>Login to your account</h2>
  <form method="POST">
    <input type="text" title="username" placeholder="username" id="username" name="username" required="" />
    <input type="password" title="username" placeholder="password" id="password" name="password" required="" />
    <button type="submit" class="btn">Login</button>
   <a class="" href="adminlogin.php">&nbsp&nbsp&nbsp Admin Login </a>
  </form>
</div><!--end log form -->


  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} // Select registration database.

            if(isset($_POST['username']) && !empty($_POST['username']) AND isset($_POST['password']) && !empty($_POST['password'])){
                //$UserID = mysqli_escape_string($_POST['Username']);
                //$PIN = mysqli_escape_string(md5($_POST['pswd']));
                  $UserID = $_POST['username'];
                $PIN = $_POST['password'];
                $search = mysqli_query($conn,"SELECT username, password FROM login WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'") or die(mysqli_error($conn)); 
                $match  = mysqli_num_rows($search);
                
                if($match > 0){
                   
                  echo "<script>
                    alert('Login successful');
                    location.replace('info.php');
                    </script>


                  ";


                  // header("location:onlineapp.html");
                    //$msg = 'Login Complete! Thanks';
                }else{ 
                  echo "
                  <script>
                    alert('Login Failed! Please try again later');
                    </script>
                    ";
                }
            }


        ?>

</body>
</html>
