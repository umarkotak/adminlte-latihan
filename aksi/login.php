<?php
$username = $_POST['username'];
$password = $_POST['password'];

$sql  = $conn->prepare('SELECT * FROM admin WHERE username = :username AND password = :password');
$data = array(':username' => $username,
              ':password' => $password);
$sql->execute($data);

$sql = $conn->prepare("INSERT INTO admin VALUES('umar', 'haha')");
$sql->execute();

$count = $sql->rowcount();

if ($count==0) {
  $_SESSION['notice'] = "Wrong username or password";

  header("location: ?page=login");
} else {
  $_SESSION['notice'] = "Login success";
  $_SESSION['username'] = $username;

  header("location: ?page=home");
}
?>