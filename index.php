<?php include('db_conn.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
    <link rel="stylesheet" href="style4.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
   
<div class="stylee">
<form method="POST" action="">
<h1>LOGIN</h1>
<div class="mb-3">
      
      <input type="text" class="form-control" name="username" placeholder="Enter username">
    </div>
    <div class="mb-3">
      
      <input type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
        
    <input type="submit" class="btn btn-primary"  name="LOGIN" value="LOGIN"><br>
    <div class="mb-3">
    <i>Doesn't have an account....</i>
<a href="register1.php">Register</a>
</div>
</form>

</div>

<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
            $username=$_POST['username'];
            $password=$_POST['password'];

            $chk = $conn->query("select * from tbl_profile where username= '$username' and password= '$password'");
            if($chk->num_rows > 0){
                session_start();
                $_SESSION['username'] = $username;
                header('location:profile.php');
            }
            else{
                echo '<script> alert("Invalid username/password");</script>';
            }
    }
    ?>

</body>
</html>