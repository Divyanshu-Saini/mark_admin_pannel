<?php
  session_start();
  include 'dbh.php';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];

  $sql = "Insert Into users(name, email, pwd) values('$name', '$email', '$pwd')";
	$result = $conn->query($sql);
	echo "Thank you for Creating your account";
  header('Location: http://localhost/attendence/sign_in.html');
