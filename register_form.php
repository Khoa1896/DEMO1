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
             <label for="email">Họ Tên:</label>
             <input type="text" name="hoten" class="form-control">
         </div>
         <div class="form-group">
             <label  for="email">User Name:</label>
             <input type="text" name="username" class="form-control">
         </div>
         <div class="form-group">
             <label  for="pwd">Password:</label>
             <input type="password" name="password" class="form-control">
         </div>
         <div class="form-group">
             <label  for="email">Email Address:</label>
             <input type="email" name="email" class="form-control">
         </div>
         <div class="form-group">
             <label  for="email">Phone Number:</label>
             <input type="tel" name="phone_number" class="form-control">
         </div>
         <button type="submit" class="btn btn-success">Register</button>
     </form>
</div>

<!---->
<!--// prepare and bind-->
<!--$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");-->
<!--$stmt->bind_param("sss", $firstname, $lastname, $email);-->
<!---->
<!--// set parameters and execute-->
<!--$firstname = "John";-->
<!--$lastname = "Doe";-->
<!--$email = "john@example.com";-->
<!--$stmt->execute();-->
<!---->
<!--$firstname = "Mary";-->
<!--$lastname = "Moe";-->
<!--$email = "mary@example.com";-->
<!--$stmt->execute();-->
<!---->
<!--$firstname = "Julie";-->
<!--$lastname = "Dooley";-->
<!--$email = "julie@example.com";-->
<!--$stmt->execute();-->
<!---->
<!--echo "New records created successfully";-->
<!--$sql = "SELECT id, firstname, lastname FROM MyGuests";-->
<!--$result = $conn->query($sql);-->
<!---->
<!--if ($result->num_rows > 0) {-->
<!--// output data of each row-->
<!--while($row = $result->fetch_assoc()) {-->
<!--echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";-->
<!--}-->
<!--} else {-->
<!--echo "0 results";-->
<!--}-->
<!--$conn->close();-->
<!--$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";-->
<!--$result = mysqli_query($conn, $sql);-->
<!---->
<!--if (mysqli_num_rows($result) > 0) {-->
<!--// output data of each row-->
<!--while($row = mysqli_fetch_assoc($result)) {-->
<!--echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";-->
<!--}-->
<!--} else {-->
<!--echo "0 results";-->
<!--}-->
<!---->
<!--mysqli_close($conn);-->
</body>
</html>