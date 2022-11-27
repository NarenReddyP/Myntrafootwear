<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="JS/script.js" defer></script>
  <script src="JS/script1.js" defer></script>


<div class="topnav">
  <a class="navbar-brand" href="#">
      <img src="Img/img_avatar1.png" alt="Logo" style="width:40px;float:left;" class="rounded-pill">
  </a>
  <a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
  <a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> ContactUs</a>
  <a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> AboutUs</a>
	<a href="blog.php">Blog</a>
	<a href="#">Servicess</a>

  <div class="dropdown">
    <button class="dropbtn">PRODUCTS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="messaging.php">Messaging</a>
      <a href="voice.php">Voice</a>
      <a href="#">Product3</a>
      <a href="#">Product4</a>
      <a href="#">Product5</a>
      <a href="#">Product6</a>
    </div>
  </div>

  <a href="logout.php" style="float:right">Logout</a>
  <form class="Serch-and-button">
  <input class="form-control" type="text" placeholder="Search...">
  <button class="button button2" type="button" >Search</button>
 </form>
</div>

</head>
<body class="body-decora-profile">

	<style>
	a{color:red;}

    h2{
       color: #fff;
       text-align: center;
       padding: 15px;
       display: block;
       font-family: sans-serif ;
       font-size: 2rem;
       text-transform: uppercase;
       letter-spacing: 2px;
       transition: 0.6s;
    }
    .user-file-uploads{
      text-align: center;
      display: block;

    }

    input[type=file]{
      width: 20%;
      padding: 6px 12px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 3px solid #ccc;
      -webkit-transition: 0.5s;
      transition: 0.5s;
      outline: none;
      border-radius: 15px;
  }
  input[type=file]:focus {
    border: 3px solid #555;
  }
  button[type=submit]{
    width: 10%;
    padding: 6px 12px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
    border-radius: 15px;
  }
  button[type=submit]:focus {
    border: 3px solid #555;
  }

  #uploadbutton_id:hover{background-color:#008CBA;
                         color:#fff;
                         text-decoration:underline;}

     .container{
                              font-family: Arial, Helvetica, san-serif;
                              color: #fff;
                              font-weight: bold;
                              position: absolute;
                              top: 50%;
                              left: 50%;
                              transform: translate(-50%, -50%);
                              font-size: 70px;

        }



	</style>

	<?php
	include 'core.php';
	include 'dbconnect.php';
  include 'CSS/style.css';

	$logout_txt = '<a href="logout.php"> Logout</a>';

	if(loggedin()){

		$firstname= getuserfield('firstname');
		$surname= getuserfield('surname');
		echo '<strong id="welcomemsg"><h2>WELCOME!...'.' '.$firstname.' '.$surname.' '. $logout_txt.'</h2></strong>';

	}else {
		include 'loginfrom.php';
	}
	?>

<div class="user-file-uploads">
<form action="upload.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file">
<button id="uploadbutton_id" type="submit" name="submit">UPLOAD</button>
</form>

<form>
    <label for="myColor" class="form-label">Color picker</label>
    <input type="color" class="form-control form-control-color" id="myColor" value="#CCCCCC" title="Choose a color">
  </form>

  <div class="displayfortbl" id="displaytbl">
  <a href="displaytbls.php">Display Tables Data</a>
  </div>

  <div class="displayfortbl1" id="displaytbl1">
  <a href="Alphabetic.php">Alphabetic Tables Data</a>
  </div>

  <div class="Audioplayer" id="Audioplay">
  <a href="Audioplay.html">Music Track</a>
  </div>

  <div class="Audioplayer" id="Audioplay">
  <a href="facetext.php">Face Text</a>
  </div>

  <div class="Pagination" id="Pagination">
  <a href="pagination.php">Pagination</a>
</div>

   </div>

<a href="details.php">Details</a>


<div class="audio-divice">
<audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="Audio/Songs_info01_RadheShyamFirstGlimpse.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
</div>


<div class="video-divice">
<video width="320" height="240" controls>
  <source src="Video/Robin_223.mp4" type="video/mp4">
  <source src="forrest_gump.ogg" type="video/ogg">
  <track src="fgsubtitles_en.vtt" kind="subtitles" srclang="en" label="English">
  <track src="fgsubtitles_no.vtt" kind="subtitles" srclang="no" label="Norwegian">
</video>
</div>

<div class="container">

<span id="hours">00</span>
<span>:</span>
<span id="minutes">00</span>
<span>:</span>
<span id="seconds">00</span>

<span id="session">AM</span>

</div>


<h1>ggkgglgggg</h1>
<h1>ggkgglgggg</h1>
<h1>ggkgglgggg</h1>
<h1>ggkgglgggg</h1>
<h1>ggkgglgggg</h1>
<h1>ggkgglgggg</h1>
<h1>ggkgglgggg</h1>
<h1>ggkgglgggg</h1>
<h1>ggkgglgggg</h1>
<h1>ggkgglgggg</h1>
<h1>ggkgglgggg</h1>
<h1>ggkgglgggg</h1>
<h1>ggkgglgggg</h1>
<h1>ggkgglgggg</h1>
<h1>ggkgglgggg</h1>

<button id="mybtn">&#8593;</button>

</body>

<script type="Java">
var greet= true;
if(greet){
  console.log("Hello world!");
}
</script>


<footer>


  <p>&copy; Narendra Reddy:<br>
  <a href="mailto:narendrar321@gmail.com">narendrar321@gmail.com</a></p>

</div>
</footer>

</html>
