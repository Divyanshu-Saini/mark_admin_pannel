<?php
include 'dbh.php';
$month = date('F');
$date = date('d');
$day = date('l');
 ?>
<!DOCTYPE html>
<html>

<head>
    <title>Timetable</title>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize - Copy.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/Page2.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" type="image/x-icon" href="tick-16x16.png">
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
    $(document).ready(function() {
        $('select').material_select();
        append_before();
        ptype();
        create_objects();create_timetable();
    });
    </script>
</head>

<body>
    <div class="row purple" style="margin-bottom:105px;">
        <nav>
            <div class="row1">
                <ul>
                    <li><a href="home.html">Home</a></li>
                  <!--  <li class="hide-on-small-and-down"><a href="dashboard.html">Dashboard</a></li>-->
                    <li class="hide-on-small-and-down"><a href="teachers.html">Teachers</a></li>
                    <li class="hide-on-small-and-down"><a href="class.html">Classes</a></li>
                </ul>
                <ul class="right">
                    <li class="hi-icon-wrap hi-icon-effect-6">
                        <batch class="hi-icon hi-icon-cog"></batch>
                    </li>
                    <li class="logout" onclick="location.href='sign_in.html'">Log Out</li>
                </ul>
            </div>
        </nav>
        <div class="col l12 logo purple" style="padding-top: 10px;">
            <img src="Tick.png" class="image" width="71px">
            <mytitle>Timetable</mytitle>
            <br>&nbsp
            <br>&nbsp
        </div>
    </div>

    <div class="container">
      <div class="row">
    <?php
      $day=$_POST['day'];
      $id=$_POST['id'];
      $get = "Select * from teacher_tt where classid='$id' and day='$day'";
      $result = $conn->query($get);
      while ($row = $result->fetch_assoc()) {
          echo "<div class=\"col l10 offset-l1 s12 m10 offset-m1\" >";
          echo "<div class=\"card\">";
          echo "<div class=\"card-content\">";
          echo "<span class=\"card-title col l12 m12 s12\">";
          echo $row['subject'];
          echo "</span>";
          echo "<span class=\"col l12 m12 s12\">";
          echo"<lec>Start Time:";
          echo $row['start_time'];
          echo "</lec>";
          echo "</span>";
          echo "<span class=\"col l12 m12 s12\">";
          echo"<lec>End Time:";
          echo $row['end_time'];
          echo "</lec>";
          echo "</span>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          }
          ?>
        </div>
      </div>
    <script type="text/javascript" src="js/timetable.js"></script>
</body>
</html>
