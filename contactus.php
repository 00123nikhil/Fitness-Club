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
  
 
 <link rel="stylesheet" type="text/css" href="css\contactus.css">

</head>

<body style="background-image: url(images/bg2.jpg);">
<div class="container-fluid" ><!--here is -->
  <h1 class="text-center" style="color: white;">FITNESS MANAGEMENT SYSTEM</h1>
          
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


<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>

  </div>
  <div class="row">
    <div class="column">
      <img src="images\f5.jpg" style="width:100%">
    </div>
    <div class="column">
      <form  method="POST">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" >
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">India</option>
          <option value="canada">Canda</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Comment/Suggestions</label>
        <textarea id="subject" name="comment"  style="height:170px"></textarea>
        <input type="submit" value="Submit" name="submit">
      </form>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <h4>YOUR HEALTH IS OUR PRIORITY</h4>
  <P>nikhilrb13@gmail.com</P>
  <p>7620033889</p>
</footer>

</body>
</html>

<?php  
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'fitness';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo '<br/>';  
if(isset($_POST['submit']))
{

$sql = "insert into contactus(firstname,lastname,country,comment) values('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['country']."','".$_POST['comment']."')";  




if(mysqli_query($conn, $sql)){  
 echo "<script> alert('Thanks for your Suggestions');</script>";  
}else{  
echo "<script>  alert('Login Failed! Please try again later'); </script> ". mysqli_error($conn);  
}  
}

mysqli_close($conn);  
?>  