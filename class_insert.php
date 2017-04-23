<?php
  //session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mark42";


  $cl_name = $_POST['cl_name'];
  $dept = $_POST['dept'];
  $sem = $_POST['sem'];
  $srn = $_POST['srn'];
  $ern = $_POST['ern'];
  $batch = $_POST['nbatch'];

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql  = "INSERT INTO class_details ( `class_name`, `department`, `semester`, `start_roll_no`, `end_roll_no`, `no_of_batches`) VALUES ('$cl_name', '$dept', '$sem', '$srn', '$ern', '$batch')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
header('Location: http://localhost/attendence/class.php');
