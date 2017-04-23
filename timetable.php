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
            <mytitle>Today Timetable</mytitle>
            <br>&nbsp
            <br>&nbsp
        </div>
    </div>
    <div class="container my-container">
        <div class="card z-depth-2 ">
            <div class="card-content">
                <h4 class="header pink-text">&nbsp&nbsp&nbsp&nbspSelect Data</h4>
                <div class="container my-container">
                    <form id="form-id" action="Display_tt.php" method="post">
                        <div class="row">
                            <div class="section">
                                <div class=" input-field col l12 m12 s12">
                                  <select name="day">
                                      <option value="" disabled selected>Select Day</option>
                                      <option value="Monday">Monday</option>
                                      <option value="Tuesday">Tuesday</option>
                                      <option value="Wednesday">Wednesday</option>
                                      <option value="Thrusday">Thrusday</option>
                                      <option value="Friday">Friday</option>
                                      <option value="Saturday">Saturday</option>
                                  </select>
                                </div>
                                <div class=" input-field col l12 m12 s12">
                                  <select name="id">
                                    <?php
                                    include 'dbh.php';
                                    $get = "Select id from class_details ";
                                    $result = $conn->query($get);
                                    while ($row = $result->fetch_assoc()) {
                                      echo "<option value=".$row['id']."> ";
                                      echo $row['id'];
                                      echo "</option>";
                                    }
                                     ?>
                                  </select>
                                  </div>

                            <div class="col l3 m3 s3 offset-l6 offset-m6">
                                <button type="submit" id="create-timetable"  class="waves-effect white-text pink waves-light btn-flat z-index-0 " >Show</button>
                            </div>
                        </div>
                         </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div id="timetable"></div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <script type="text/javascript" src="js/timetable.js"></script>
</body>
</html>
