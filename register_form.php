<?php
require_once ("register.php");
register();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registation Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
     <form action="" method="post">
         <div class="form-group">
             <label for="email">Ho Ten:</label>
             <input type="text" name="hoten" class="form-control">
         </div>
         <div class="form-group">
             <label  for="email">User Name:</label>
             <input type="text" name="username" class="form-control">
         </div>
         <div class="form-group">
             <label  for="pwd">Password</label>
             <input type="password" name="password" class="form-control">
         </div>
         <div class="form-group">
             <label  for="email">Email Address</label>
             <input type="email" name="email" class="form-control">
         </div>
         <div class="form-group">
             <label  for="email">Phone Number</label>
             <input type="tel" name="phone_number" class="form-control">
         </div>
         <button type="submit" class="btn btn-success">Register</button>
     </form>
</div>
</body>
</html>