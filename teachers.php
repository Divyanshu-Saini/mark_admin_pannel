<?php
include 'dbh.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Teachers</title>
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
    var i = 2;
    var semValues = {
        "1": "Semester 1",
        "2": "Semester 2",
        "3": "Semester 3"
    };
    var subValues = {
        "1": "Subject 1",
        "2": "Subject 2",
        "3": "Subject 3"
    };

    function appendText() {

        $("#gen").before('<div class="row" id="sel' + i + '"></div>');


        $('#sel' + i).append($('<select> </select></div>').attr('id', 'sem-' + i));

        $('#sem-' + i).append($('<option disabled selected></option>').attr('value', '').text('Select Semester'));

        $.each(semValues, function(key, value) {
            $('#sem-' + i).append($('<option></option>').attr('value', key).text(value));
        });

        $('select#sem-' + i).wrap('<div class="col l4"></div>').material_select();


        $('#sel' + i).append($('<select> </select>').attr('id', 'sub-' + i));

        $('#sub-' + i).append($('<option disabled selected></option>').attr('value', '').text('Select Subject *'));

        $.each(subValues, function(key, value) {
            $('#sub-' + i).append($('<option></option>').attr('value', key).text(value));
        });

        $('select#sub-' + i).wrap('<div class="col l4"></div>').material_select();


        $('#sel' + i).append('</div> <div class="input-field col l2 m2 s6"> <input name="lec' + i + '" type="checkbox" id="lec' + i + '" > <label for="lec' + i + '">Lec</label> </div> <div class="input-field col l2 m2 s6"> <input name="lec' + i + '" type="checkbox" id="pt' + i + '" > <label for="pt' + i + '">Prac</label> </div> </div> ');
        i++;
    }

    function appendText2() {

        $("#gen").before('<div class="row"> <div class="col l4 m12 "> <select> <option value="" disabled selected>Select Department</option> <option>Course 1</option> <option>Course 2</option> </select> </div> <div class="col l4 m4 s12 "> <select> <option value="" disabled selected>Select Semester</option> <option value="1">Semester 1</option> <option value="2">Semester 2</option> </select></div><div class="col l4 m4 s12"><select> <option value="" disabled selected>Select Subject *</option><option>Subject 1</option><option>Subject 2</option></select></div> <div class="input-field col l2 m2 s6"> <input name="lec' + i + '" type="checkbox" id="lec' + i + '" > <label for="lec' + i + '">Lec</label> </div> <div class="input-field col l2 m2 s6"> <input name="lec' + i + '" type="checkbox" id="pt' + i + '" > <label for="pt' + i + '">Prac</label> </div> </div> ');
        i++;
        $('select').material_select();
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
                    <li class="hide-on-small-and-down"><a href="teachers.php" class="active">Teachers</a></li>
                    <li class="hide-on-small-and-down"><a href="class.php">Classes</a></li>
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
        <a class="btn-floating btn-flat btn-large waves-effect waves-light pink actbtnc modal-trigger" href="#modal1"><i class="mdi-content-add "></i></a>
        <div class="col l12 logo purple" style="padding-top: 10px;">
            <img src="Tick.png" class="image" width=71px height=50px>
            <mytitle>Teachers</mytitle>
            <br>&nbsp
        </div>
    </div>
    <br>
    <div class="row">
      <?php
      $get = "Select * from teacher_detail";
      $result = $conn->query($get);
      while ($row = $result->fetch_assoc()) {
        echo "<div class=\"col s12 m4 l3 offset-m1\">";
        echo "<div class=\"card teach\">";
        echo "<div class=\"card-image \">";
        echo "<img src=\"profile.png\" height=\"312px\">";
        echo "<span class=\"on-hover bio\">View Details";
        echo"</span>";
        echo "</div>";
        echo "<div class=\"card-content center\">";
        echo "<span class=\"card-title\">";
        echo $row['name'];
        echo "</span>";
        echo "<br>";
        echo "<span class=\"\">";
        echo $row['designation'];
        echo "</span>";
        echo "<br>";
        echo "<span class=\"on-hover\">";
        echo $row['department'];
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
                    <span class="on-hover bio">View Details</span>
                </div>
                <div class="card-content center">
                    <span class="card-title">Teacher Name</span>
                    <br>
                    <span class="">Designation</span>
                    <br>
                    <span class="on-hover">Information Technology</span>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l3 offset-m1">
            <div class="card teach">
                <div class="card-image ">
                    <img src="profile.png" height="312px">
                    <span class="on-hover bio">View Details</span>
                </div>
                <div class="card-content center">
                    <span class="card-title">Teacher Name</span>
                    <br>
                    <span class="">Designation</span>
                    <br>
                    <span class="on-hover">Information Technology</span>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l3 offset-m1">
            <div class="card teach">
                <div class="card-image ">
                    <img src="profile.png" height="312px">
                    <span class="on-hover bio">View Details</span>
                </div>
                <div class="card-content center">
                    <span class="card-title">Teacher Name</span>
                    <br>
                    <span class="">Designation</span>
                    <br>
                    <span class="on-hover">Information Technology</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m4 l3 offset-l1-5 offset-m1">
            <div class="card teach">
                <div class="card-image ">
                    <img src="profile.png" height="312px">
                    <span class="on-hover bio">View Details</span>
                </div>
                <div class="card-content center">
                    <span class="card-title">Teacher Name</span>
                    <br>
                    <span class="">Designation</span>
                    <br>
                    <span class="on-hover">Information Technology</span>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l3 offset-m1">
            <div class="card teach">
                <div class="card-image ">
                    <img src="profile.png" height="312px">
                    <span class="on-hover bio">View Details</span>
                </div>
                <div class="card-content center">
                    <span class="card-title">Teacher Name</span>
                    <br>
                    <span class="">Designation</span>
                    <br>
                    <span class="on-hover">Information Technology</span>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l3 offset-m1">
            <div class="card teach">
                <div class="card-image ">
                    <img src="profile.png" height="312px">
                    <span class="on-hover bio">View Details</span>
                </div>
                <div class="card-content center">
                    <span class="card-title">Teacher Name</span>
                    <br>
                    <span class="">Designation</span>
                    <br>
                    <span class="on-hover">Information Technology</span>
                </div>
            </div>
        </div> -->
    </div>
    <!-- Modal Structure -->
    <div id="modal1" class="modal purple">
      <form  action="techer_insert.php" method="post">
        <div class="modal-content">
            <h4 style="font-weight:300" class=" white-text">New Teacher</h4>
            <div class="row">
                <div class="col l10" style="padding:0 0px;">
                    <div class="input-field col l6 m6">
                        <input id="teach_name" name="t_name" type="text" class="validate" required>
                        <label for="teach_name">Teacher Name *</label>
                    </div>
                    <div class="input-field col l6 m6">
                        <input id="teach_des" name="des" type="text" class="validate">
                        <label for="teach_des">Designation</label>
                    </div>
                    <div class="col l12 m12">
                      <select name="dept">
                          <option value="" disabled selected>Select Department</option>
                          <option value="Information Technology">Information Technology</option>
                          <option value="Computer Technology">Computer Technology</option>
                          <option value="Bio Technology">Bio Technology</option>
                          <option value="Electronic Engineering">Electronic Engineering</option>
                      </select>
                    </div>
                </div>
                <div class="col l2 m2">
                    <div class="card profile">
                        <div class="card-image ">
                            <div class="file-field input-field"><img src="profile.png">
                                <input class="file-path validate" type="text" />
                                <div class="btn pink waves-effect on-hover file-btn">
                                    <span>File</span>
                                    <input type="file" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <!--<div class="row">
                <div class="col l4 m12 ">
                    <select>
                        <option value="" disabled selected>Select Department</option>
                        <option>Course 1</option>
                        <option>Course 2</option>
                    </select>
                </div>
                <div class="col l4 m4 s12 ">
                    <select>
                        <option value="" disabled selected>Select Semester</option>
                        <option value="1">Semester 1</option>
                        <option value="2">Semester 2</option>
                    </select>
                </div>
                <div class="col l4 m4 s12">
                    <select>
                        <option value="" disabled selected>Select Subject *</option>
                        <option>Subject 1</option>
                        <option>Subject 2</option>
                    </select>
                </div>
                <div class="input-field col l2 m2 s6">
                    <input name="lec" type="checkbox" id="lec1" />
                    <label for="lec1">Lec</label>
                </div>
                <div class="input-field col l2 m2 s6">
                    <input name="lec" type="checkbox" id="pt1" />
                    <label for="pt1">Prac</label>
                </div>
            </div>
            <button onclick="appendText2()" class="waves-effect white-text pink waves-pink btn-flat z-index-0 left" id="gen" style="left: 11.250;bottom: 0px;top: 12px;">+ Subject</button>
        </div>-->
        <div class="modal-footer purple ">
            <input type="submit" class="waves-effect white-text waves-pink btn-flat modal-action modal-close">
        </div>
      </form>
    </div>
</body>

</html>
