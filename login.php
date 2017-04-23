<?php
  session_start();
  include 'dbh.php';

  $email = $_POST['email'];
  $pwd = $_POST['pwd'];

  $sql = "select * from users where email='$email' and pwd='$pwd' ";
	$result = $conn->query($sql);

  if (!$row = $result->fetch_assoc()) {
    echo "Incorrect userid or password";
  }
  else {
    $_SESSION['name'] = $row['name'];
  }
  header('Location: http://localhost/attendence/Home.html');
