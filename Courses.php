<?php
include 'dbh.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Course</title>
		<!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize - Copy.php"  media="screen,projection"/>
      	<link type="text/css" rel="stylesheet" href="css/Page2.php"  media="screen,projection"/>
      	<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <link rel="shortcut icon" type="image/x-icon" href="tick-16x16.png">


    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        $(document).ready(function(){
            $('.modal-trigger').leanModal();
            $('select').material_select();
        });
      </script>
</head>
<body >

<div class="row " style="margin-bottom:105px;">
  <nav>
    <div class="row1">
      <ul>
       <li><a href="home.html" >Home</a></li>
        <!--<li class="hide-on-small-and-down" ><a href="dashboard.html">Dashboard</a></li>-->
        <li class="hide-on-small-and-down"><a href="teachers.php" >Teachers</a></li>
        <li class="hide-on-small-and-down"><a href="class.php">Classes</a></li>
      </ul>
      <ul class = "right">
        <li class="hi-icon-wrap hi-icon-effect-6">
          <i class="hi-icon hi-icon-cog" ></i>
        </li>
        <li class="logout" onclick="location.href='sign_in.html'">Log Out</li>
        </ul>
      </div>
    </nav>
<!-- Modal Trigger -->
<a class="btn-floating btn-flat btn-large waves-effect waves-light pink actbtnc modal-trigger" href="#modal1"><i class="mdi-content-add "></i></a>

<div class="col l12 logo purple" style="padding-top: 10px;">
  <img src="Tick.png" class = "image" width=71px height=50px><mytitle>Select a Course</mytitle><br>&nbsp
  </div>
</div>
<div class="container">
  <div class="row">
<?php
    $get = "Select * from course";
    $result = $conn->query($get);
    while ($row = $result->fetch_assoc()) {
      echo "<div class=\"col l10 offset-l1 s12 m10 offset-m1\" >";
      echo "<div class=\"card\">";
      echo "<div class=\"card-content\">";
      echo "<span class=\"card-title col l12 m12 s12\">";
      echo $row['course_name'];
      echo "</span>";
      echo "<span class=\"col l12 m12 s12\">";
      echo"<lec>Semesters:";
      echo $row['semester'];
      echo "</lec>";
      echo "</span>";
      echo "<span class=\"col l8 m8 s12\">";
      echo "<lec>University: Mumbai University";
      echo "</lec>";
      echo "</span>";
      echo "<span class=\"right activator hide-on-med-and-down\">";
      echo "<a class=\"activator\">Take this Course";
      echo "</a><br>&nbsp</span>";
      echo "<span class=\"col m12 s12 hide-on-large-only\">";
      echo "<a class=\"activator\">Take this Course";
      echo "</a><br>&nbsp</span>";
      echo "</div>";
      echo "<div class=\"card-reveal\" style=\"overflow-y: hidden;\">";
      echo "<span class=\"card-title grey-text text-darken-4\">Current Semester";
      echo "<i class=\"mdi-navigation-close right\"></i></span>";
      echo "<form action=\"home.html\">";
      echo "<p class=\"number-field\">";
      //echo "<input type=\"number\" class=\"col l5 m8 s8 m8 s8\ " min="\1"\ max="\8"\ style="\overflow:hidden\ placeholder=\"Semester (1-8)\" />";
      echo "<button type=\"submit \"class=\"btn col l2 m4 s4 right pink waves-effect waves-light\">Submit";
      echo "</button>";
      echo "</p>";
      echo "</form>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      }
      ?>

      <!--<div class="col l10 offset-l1 s12 m10 offset-m1">
        <div class="card">
          <div class="card-content">
            <span class="card-title col l12 m12 s12">Computer Science</span>
            <span class="col l12 m12 s12"><lec>Semesters: 8</lec></span>
            <span class="col l8 m8 s12"><lec>University: Mumbai University</lec></span>
            <span class="right activator hide-on-med-and-down">
              <a class="activator">Take this Course</a><br>&nbsp</span>
            <span class="col m12 s12 hide-on-large-only">
              <a class="activator">Take this Course</a><br>&nbsp</span>
          </div>
         <div class="card-reveal" style="overflow-y: hidden;">
          <span class="card-title grey-text text-darken-4">Current Semester
            <i class="mdi-navigation-close right"></i></span>
            <form action="home.html">
              <p class="number-field">
                <input type="number" class="col l5 m8 s8" min="1" max="8" style="overflow:hidden" placeholder="Semester (1-8)" />
                <button type="submit "class="btn col l2 m4 s4 right pink waves-effect waves-light">Submit</button>
              </p>
            </form>
          </div>
        </div>
        </div>
      <div class="col l10 offset-l1 s12 m10 offset-m1">
        <div class="card">
          <div class="card-content">
            <span class="card-title col l12 m12 s12">Electronics and Telecommunication</span>
            <span class="col l12 m12 s12"><lec>Semesters: 8</lec></span>
            <span class="col l8 m8 s12"><lec>University: Mumbai University</lec></span>
            <span class="right activator hide-on-med-and-down">
              <a class="activator">Take this Course</a><br>&nbsp</span>
            <span class="col m12 s12 hide-on-large-only">
              <a class="activator">Take this Course</a><br>&nbsp</span>
          </div>
          <div class="card-reveal" style="overflow-y: hidden;">
          <span class="card-title grey-text text-darken-4">Current Semester
            <i class="mdi-navigation-close right"></i></span>
            <form action="home.html">
              <p class="number-field">
                <input type="number" class="col l5 m8 s8" min="1" max="8" style="overflow:hidden" placeholder="Semester (1-8)" />
                <button type="submit "class="btn col l2 m4 s4 right pink waves-effect waves-light">Submit</button>
              </p>
            </form>
          </div>
        </div>
        </div>
        <div class="col l10 offset-l1 s12 m10 offset-m1">
        <div class="card">
          <div class="card-content">
            <span class="card-title col l12 m12 s12">Electrical</span>
            <span class="col l12 m12 s12"><lec>Semesters: 8</lec></span>
            <span class="col l8 m8 s12"><lec>University: Mumbai University</lec></span>
            <span class="right activator hide-on-med-and-down">
              <a class="activator">Take this Course</a><br>&nbsp</span>
            <span class="col m12 s12 hide-on-large-only">
              <a class="activator">Take this Course</a><br>&nbsp</span>
          </div>
          <div class="card-reveal" style="overflow-y: hidden;">
          <span class="card-title grey-text text-darken-4">Current Semester
            <i class="mdi-navigation-close right"></i></span>
            <form action="home.html">
              <p class="number-field">
                <input type="number" class="col l5 m8 s8" min="1" max="8" style="overflow:hidden" placeholder="Semester (1-8)" />
                <button type="submit "class="btn col l2 m4 s4 right pink waves-effect waves-light">Submit</button>
              </p>
            </form>
          </div>
        </div>
        </div>
        <div class="col l10 offset-l1 s12 m10 offset-m1">
        <div class="card">
          <div class="card-content">
            <span class="card-title col l12 m12 s12">Mechnical</span>
            <span class="col l12 m12 s12"><lec>Semesters: 8</lec></span>
            <span class="col l8 m8 s12"><lec>University: Mumbai University</lec></span>
            <span class="right activator hide-on-med-and-down">
              <a class="activator">Take this Course</a><br>&nbsp</span>
            <span class="col m12 s12 hide-on-large-only">
              <a class="activator">Take this Course</a><br>&nbsp</span>
          </div>
          <div class="card-reveal" style="overflow-y: hidden;">
          <span class="card-title grey-text text-darken-4">Current Semester
            <i class="mdi-navigation-close right"></i></span>
            <form action="home.html">
              <p class="number-field">
                <input type="number" class="col l5 m8 s8" min="1" max="8" style="overflow:hidden" placeholder="Semester (1-8)" />
                <button type="submit "class="btn col l2 m4 s4 right pink waves-effect waves-light">Submit</button>
              </p>
            </form>
          </div>
        </div>
        </div>
        <div class="col l10 offset-l1 s12 m10 offset-m1">
        <div class="card">
          <div class="card-content">
            <span class="card-title col l12 m12 s12">Chemical</span>
            <span class="col l12 m12 s12"><lec>Semesters: 8</lec></span>
            <span class="col l8 m8 s12"><lec>University: Mumbai University</lec></span>
            <span class="right activator hide-on-med-and-down">
              <a class="activator">Take this Course</a><br>&nbsp</span>
            <span class="col m12 s12 hide-on-large-only">
              <a class="activator">Take this Course</a><br>&nbsp</span>
          </div>
          <div class="card-reveal" style="overflow-y: hidden;">
          <span class="card-title grey-text text-darken-4">Current Semester
            <i class="mdi-navigation-close right"></i></span>
            <form action="home.html">
              <p class="number-field">
                <input type="number" class="col l5 m8 s8" min="1" max="8" style="overflow:hidden" placeholder="Semester (1-8)" />
                <button type="submit "class="btn col l2 m4 s4 right pink waves-effect waves-light">Submit</button>
              </p>
            </form>
          </div>
        </div>
        </div>
        <div class="col l10 offset-l1 s12 m10 offset-m1">
        <div class="card">
          <div class="card-content">
            <span class="card-title col l12 m12 s12">Biomedical</span>
            <span class="col l12 m12 s12"><lec>Semesters: 8</lec></span>
            <span class="col l8 m8 s12"><lec>University: Mumbai University</lec></span>
            <span class="right activator hide-on-med-and-down">
              <a class="activator">Take this Course</a><br>&nbsp</span>
            <span class="col m12 s12 hide-on-large-only">
              <a class="activator">Take this Course</a><br>&nbsp</span>
          </div>
          <div class="card-reveal" style="overflow-y: hidden;">
          <span class="card-title grey-text text-darken-4">Current Semester
            <i class="mdi-navigation-close right"></i></span>
            <form action="home.html">
              <p class="number-field">
                <input type="number" class="col l5 m8 s8" min="1" max="8" style="overflow:hidden" placeholder="Semester (1-8)" />
                <button type="submit "class="btn col l2 m4 s4 right pink waves-effect waves-light">Submit</button>
              </p>
            </form>
          </div>
        </div>
        </div>
        <div class="col l10 offset-l1 s12 m10 offset-m1">
        <div class="card">
          <div class="card-content">
            <span class="card-title col l12 m12 s12">Production</span>
            <span class="col l12 m12 s12"><lec>Semesters: 8</lec></span>
            <span class="col l8 m8 s12"><lec>University: Mumbai University</lec></span>
            <span class="right activator hide-on-med-and-down">
              <a class="activator">Take this Course</a><br>&nbsp</span>
            <span class="col m12 s12 hide-on-large-only">
              <a class="activator">Take this Course</a><br>&nbsp</span>
          </div>
          <div class="card-reveal" style="overflow-y: hidden;">
          <span class="card-title grey-text text-darken-4">Current Semester
            <i class="mdi-navigation-close right"></i></span>
            <form action="home.html">
              <p class="number-field">
                <input type="number" class="col l5 m8 s8" min="1" max="8" style="overflow:hidden" placeholder="Semester (1-8)" />
                <button type="submit "class="btn col l2 m4 s4 right pink waves-effect waves-light">Submit</button>
              </p>
            </form>
          </div>
        </div>
        </div>
        <div class="col l10 offset-l1 s12 m10 offset-m1">
        <div class="card">
          <div class="card-content">
            <span class="card-title col l12 m12 s12">Instrumentation</span>
            <span class="col l12 m12 s12"><lec>Semesters: 8</lec></span>
            <span class="col l8 m8 s12"><lec>University: Mumbai University</lec></span>
            <span class="right activator hide-on-med-and-down">
              <a class="activator">Take this Course</a><br>&nbsp</span>
            <span class="col m12 s12 hide-on-large-only">
              <a class="activator">Take this Course</a><br>&nbsp</span>
          </div>
          <div class="card-reveal" style="overflow-y: hidden;">
          <span class="card-title grey-text text-darken-4">Current Semester
            <i class="mdi-navigation-close right"></i></span>
            <button type="submit "class="btn col l2 m4 s4 right pink waves-effect waves-light">
              <p class="number-field">
                <input type="number" class="col l5 m8 s8" min="1" max="8" style="overflow:hidden" placeholder="Semester (1-8)" />
                <button type="submit "class="btn col l2 m4 s4 right pink waves-effect waves-light" >Submit</button>
              </p>
            </form>
          </div>
        </div>
        </div>

    </div>-->
 </div>


<!-- Modal Structure -->
  <div id="modal1" class="modal purple white-text">
    <form action="course_insert.php" method="post">
    <div class="modal-content">
      <h4 style="font-weight:300">Creating a New Course</h4>
      <div class="container">
        <div class="row">
        <div class="input-field col l11 m8 s12 ">
          <i class="mdi-av-my-library-books prefix"></i>
          <input name="c_name" id="sub1" type="text" class="validate " maxlength = 25 required autofocus>
          <label for="sub1">Course Name<sup>*</sup></label>
          </div>
        <div class="input-field col l11 m8 s12 ">
          <i class="mdi-social-person prefix"></i>
          <input name="sem" id="teach1" type="text" class="validate " maxlength = 25 required>
          <label for="teach1">Semesters<sup>*</sup></label>
          </div>
        <div class="input-field col l11 m8 s12 ">
          <i class="mdi-social-person prefix"></i>
          <input name="c_duration" id="teach2" type="text" class="validate " maxlength = 25 >
          <label for="teach2">Course Duration(Years)</label>
          </div>
        </div>
        </div>
      </div>
    <div class="modal-footer purple ">
        <input type="submit" class="waves-effect white-text waves-pink btn-flat modal-action modal-close">
      </div>
      </form>
    </div>


</body>
</html>
