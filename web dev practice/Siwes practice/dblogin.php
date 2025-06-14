<?php
require 'db_connect.php';
if(isset($_POST['register']) AND $_POST['register'] =="REGISTER"){
$username =$_POST['Username'];
$password =$_POST['Password'];
$sql = 'INSERT INTO User_login_details(username, email, password) VALUES (?, ?)';
$stmt = $pdo->prepare($sql);
$stmt->execute([$username, $password]);

echo 'User added successfully!';
}#
?>        

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page title</title>
</head>
<body>
      <form action="dblogin.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" value=""><br>
        <label for="password">Password</label>
        <input type="text" name="password" value=""><br>
        <input type="submit" name="register" value="REGISTER">
    </form>
  
</body>
</html>
