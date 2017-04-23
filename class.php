<?php
include 'dbh.php';
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

</body>
</html>
<html>

<head>
    <title>Classes</title>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize - Copy.php" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/Page2.php" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" type="image/x-icon" href="tick-16x16.png">
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.modal-trigger').leanModal();
        $('select').material_select();
    });
    </script>
    <script>
    function appendText() {
            var txt1 = 'te1'; // Create text with HTML
            var txt2 = $("<p></p>").text('tex2'); // Create text with jQuery
            $('#gen').before('<select> < option value = ""
                disabled selected > Select Semester < /option> < option value = "1" > Semester 1 < /option > < option value = "2" > Semester 2 < /option> < /select > ');     / / Append new elements
            }
    </script>
</head>

<body>
    <div class="row purple" style="margin-bottom:65px;">
        <nav>
            <div class="row1">
                <ul>
                    <li><a href="home.html">Home</a></li>
                  <!--  <li class="hide-on-small-and-down"><a href="dashboard.html">Dashboard</a></li>-->
                    <li class="hide-on-small-and-down"><a href="teachers.php">Teachers</a></li>
                    <li class="hide-on-small-and-down"><a href="class.php" class="active">Classes</a></li>
                </ul>
                <ul class="right">
                    <li class="hi-icon-wrap hi-icon-effect-6">
                        <i class="hi-icon hi-icon-cog"></i>
                    </li>
                    <li class="logout" onclick="location.href='sign_in.html'">Log Out</li>
                </ul>
            </div>
        </nav>
        <!-- Modal Trigger -->
        <a class="btn-floating btn-flat btn-large waves-effect waves-light pink actbtnc " href="add_class.html"><i class="mdi-content-add "></i></a>
        <div class="col l12 logo purple" style="padding-top: 10px;">
            <img src="Tick.png" class="image" width=71px height=50px>
            <mytitle>Classes</mytitle>
            <br>&nbsp
        </div>
    </div>
    <br>
    <div class="row">
    <?php
    $get = "Select * from class_details";
    $result = $conn->query($get);
    while ($row = $result->fetch_assoc()) {
    echo "<div class=\"col s12 m4 l3 offset-l1-5 offset-m1\">";
    echo "<div class=\"card teach\">";
    echo "<div class=\"card-image\">";
    echo "<img src=\"profile.png\" height=\"312px\">";
    echo "<a href=\"students.html\"><span class=\"on-hover bio\">View Students</span></a>";
    echo "</div>";
    echo " <div class=\"card-content center  grey-text\">";
    echo "<span class=\"card-title\">";
    echo $row['class_name'];
    echo "</span>";
    echo "<br>";
    echo "<span>";
    echo $row['department'];
    echo "</span>";
    echo "<br>";
    echo "<span class=\"left pad on-hover\">Location</span>";
    echo "<span class=\"right pad on-hover\">";
    echo "Semester ".$row['semester'];
    echo "</span>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
  }
     ?>
        <!--<div class="col s12 m4 l3 offset-l1-5 offset-m1">
            <div class="card teach">
                <div class="card-image ">
                    <img src="profile.png" height="312px">
                    <a href="students.html"><span class="on-hover bio">View Students</span></a>
                </div>
                <div class="card-content center  grey-text">
                    <span class="card-title">Class Name</span>
                    <br>
                    <span class="">Department</span>
                    <br>
                    <span class="left pad on-hover">Location</span>
                    <span class="right pad on-hover">Semester 1</span>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l3 offset-m1">
            <div class="card teach">
                <div class="card-image ">
                    <img src="profile.png" height="312px">
                    <a href="students.html"><span class="on-hover bio">View Students</span></a>
                </div>
                <div class="card-content center  grey-text">
                    <span class="card-title">Class Name</span>
                    <br>
                    <span class="">Department</span>
                    <br>
                    <span class="left pad on-hover">Location</span>
                    <span class="right pad on-hover">Semester 1</span>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l3 offset-m1">
            <div class="card teach">
                <div class="card-image ">
                    <img src="profile.png" height="312px">
                    <a href="students.html"><span class="on-hover bio">View Students</span></a>
                </div>
                <div class="card-content center  grey-text">
                    <span class="card-title">Class Name</span>
                    <br>
                    <span class="">Department</span>
                    <br>
                    <span class="left pad on-hover">Location</span>
                    <span class="right pad on-hover">Semester 1</span>
                </div>
            </div>
        </div>-->
    </div>
</body>
</html>
