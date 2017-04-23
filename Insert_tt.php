<?php
  //session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mark42";


  $te_name = $_POST['te_name'];
  $sub = $_POST['sub'];
  $cl_id = $_POST['cl_id'];
  $st_time = $_POST['st_time'];
  $ed_time = $_POST['ed_time'];
  $type = $_POST['type'];
  $day=$_POST['day'];

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql  = "INSERT INTO teacher_tt ( `classid`, `subject`, `techer_name`, `type`, `start_time`, `end_time`, `day`) VALUES ('$cl_id', '$sub', '$te_name', '$type', '$st_time', '$ed_time', '$day')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
header('Location: http://localhost/attendence/timetable_form.html');
