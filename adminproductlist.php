<!DOCTYPE html>
<html>
<head>
  <title></title>

<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />

  <title>Fitness Club</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <style>
#customers {
    border-collapse: collapse;
  width:1200px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 7px;
}

#customers th {
 
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>

</head>


  <body style="background-image: url(images/bg2.jpg); color: white;">

<h1 class="text-center">FITNESS MANAGEMENT SYSTEM</h1>
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
          <a class="nav-link active" href="">
            
            <label style="font-size: 30px; color: yellow;">Admin Panel &nbsp</label>
          </a>


        </li>
        <li class="nav-item">
          <a class="nav-link active" href="adminproductlist.php">PRODUCTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminorders.php">ORDERS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admincart.php">CART</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="login.php">LOG OUT</a>
        </li>
      </ul>
    </div>
  </nav>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

<h3 align="center">Available Products</h3>
<br>
<table id="customers" style="color: black; background-color: white;">



<tr>

<th>ID</th>

<th>Product Name</th>

<th>Product Price</th>

<th>Product Quantity</th>

<th></th>

</tr>

<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "cart_system";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = 'SELECT * from product';

if (mysqli_query($conn, $sql)) {

echo "";

} else {

echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}

$count=1;

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

// output data of each row

while($row = mysqli_fetch_assoc($result)) { ?>


<tr>

<td>

<?php echo $row['id']; ?>

</td>

<td>

<?php echo $row['product_name']; ?>

</td>

<td>

<?php echo $row['product_price']; ?>

</td>

<td>

<?php echo $row['product_qty']; ?>

</td>


<td>
                  <a href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure ?');"><i class="fa fa-close" style="font-size:24px"></i></a>
                </td>

</tr>

<?php

$count++;

}

} else {

echo '0 results';

}

?>

</table>

</body>
</html>