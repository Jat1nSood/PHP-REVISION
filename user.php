<?php

require('dbConnection.php');

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];



  $sql = "Insert into `admin`.`admindata`(name, email, phone)
  values('$name', '$email', '$phone')";

  $result = mysqli_query($conn, $sql);


  if($result){
    echo("Data Inserted");
  }

  else{
    die(mysqli_error($result));

  }
}

$conn -> close();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <form method = 'POST' class = "m-5" >
    <div class="form-group my-5 mx-5 fs-5">
    <label for="name">Name</label>
    <input type="text" class="form-control fs-5" id="name" aria-describedby="emailHelp" placeholder="Enter Name" name = "name">
  </div>
  <div class="form-group my-5 mx-5 fs-5">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control fs-5" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name = "email">
  </div>
  <div class="form-group my-5 mx-5 fs-5">
    <label for="phone">Phone</label>
    <input type="mobile" class="form-control fs-5" id="phone" placeholder="Mobile No" name = "phone">
  </div>
 
  <button type="submit" name ='submit' class="btn btn-primary my-5 mx-5 fs-5">Submit</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>