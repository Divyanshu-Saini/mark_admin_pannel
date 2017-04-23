<?php
  //session_start();
  include 'dbh.php';

  $c_name = $_POST['c_name'];
  $c_duration = $_POST['c_duration'];
  $sem = $_POST['sem'];

  $sql = "Insert Into course( course_name, cource_duration, semester) values(' $c_name', '$c_duration', '$sem')";
	$result = $conn->query($sql);
  header('Location: http://localhost/attendence/Courses.php');
