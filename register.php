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

<link rel="stylesheet" type="text/css" href="css\register.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body style="background-image: url(images/bg2.jpg);">

<h1 class="text-center" style="color: white;">FITNESS MANAGEMENT SYSTEM</h1>
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
  <h2>Register Here</h2>
  <form  method="POST">
     <input type="text" title="username" placeholder="Name" name="name" required="" />
    <input type="text" title="username" placeholder="Email"  name="email" required="" />
    <input type="password" title="username" placeholder="password"  name="password" required="" />
    <input type="password" title="username" placeholder="confirm password"  name="confirm password" required="" />
    <button type="submit" class="btn" name="submit" value="insert">Register</button>
    <button type="submit" class="btn" name="submit">cancel</button>
    <!--<a class="forgot" href="login.html">Login</a>-->
  </form>
</div><!--end log form -->

<?php  
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'fitness';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo '';  
if(isset($_POST['submit']))
{

$sql = "insert into register(name,email,password) values('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."')";  




if(mysqli_query($conn, $sql)){  
 echo "<script> alert('Register successfully');</script>";  
}
else
{  
echo "<script>  alert('Register Failed! Please try again later'); </script> ". mysqli_error($conn);  
}  
}

mysqli_close($conn);  
?>
<!--<footer class="container-fluid text-center" style="padding: 10px;background-color:;">
  <h4>YOUR HEALTH IS OUR PRIORITY</h4>
  <P>nikhilrb13@gmail.com</P>
  <p>7620033889</p>
</footer>  -->


</body>
 
</html>
<!--
   Warning: Undefined array key "confirm password" in C:\xampp\htdocs\Fitnessclub\register.php on line 84
You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'password) values('jay','jay@gmail.com','456','')' at line 1 Warning: Undefined array key "confirm password" in C:\xampp\htdocs\Fitnessclub\register.php on line 84 
-->