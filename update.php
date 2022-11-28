<?php
  include 'connect.php';
  $id=$_GET['updateid'];
  $sql="Select *from `users` where id=$id";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  $name=$row['name'];
  $email=$row['email'];
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    

    $sql = "update  `users` set id='$id', name='$name', email='$email' where id=$id" ;
    $result = mysqli_query($con,$sql);
    if($result){
        
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
    <input type="text" name="name" class="form-control" value=<?php echo "$name" ;?> autocomplete="off">
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="email" name="email" class="form-control" value=<?php echo "$email" ;?> autocomplete="off">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Update</button>

</form>
 </div>
 
</body>
</html>








