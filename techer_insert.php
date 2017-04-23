<?php
  //session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mark42";

$t_name = $_POST['t_name'];
$des = $_POST['des'];
$dept = $_POST['dept'];

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "Insert Into teacher_detail( name, designation, 	department) values(' $t_name', '$des', '$dept')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
header('Location: http://localhost/attendence/teachers.php');
