<?php
  include 'connect.php';
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    

    $sql = "insert into `users` (name,email) values('$name','$email')";
    $result = mysqli_query($con,$sql);
    if($result){
        //echo "Data inserted successfully";
        header("location:home.php");
    }else{
        die(mysqli_error($con));
    }
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Crud operation</title>
</head>
<body>
 <div class="container my-5">
 <form method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter your name" autocomplete="off">
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter your email" autocomplete="off">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

</form>
 </div>
 
</body>
</html>