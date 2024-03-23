<?php include('db_conn.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
<div class="stylee">
<form method="POST" action="">
<h1>Registration</h1>
    <div class="mb-3">
      
      <input type="text" class="form-control" name="name" placeholder="Enter name">
</div>
<div class="mb-3">
      
      <input type="text" class="form-control" name="username" placeholder="Enter username">
    </div>
    <div class="mb-3">
      
      <input type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
    
    <input type="submit" class="btn btn-primary"  name="REGISTER" value="REGISTER"><br>
    <a href="index.php">Go back</a>
  </form>
  
  </div>
    <!-- <h1>Registration</h1>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="Enter name"><br>
        <input type="text" name="username" placeholder="Enter username"><br>
        <input type="password" name="password" placeholder="Enter password"><br>
        <input type="submit" name="REGISTER">
</form>
<a href="index.php">Go back</a> -->
<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $ins = $conn->query("insert into tbl_profile(name,username,password) values('$name','$username','$password')");

    }
    ?>
</body>
</html>