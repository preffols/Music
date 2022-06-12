<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Home</title>
	<script type="text/javascript" src="myScript,js"></script>

	<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</head>
<body>




<div class="header">
	<nav id="navbar">
		<img src="images/brave.jpg" class="logo">
		<ul id="menu">
			<li class="se"><input type="text" name="search..." placeholder="Search..." style="width: 150px;"></li>
			<li><a href="home.php">Home</a></li>
			<li><a href="tt.html">Our services</a>
				<ul>
					<li><a href="#">Graphic designing</a></li>
					<li><a href="#">Modelling</a></li>
				</ul>
			</li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="about.php"><button class="bout">About us</button></a></li>

		</ul>
	</nav>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Artist</a>
  <a href="#">Genres</a>
  <a href="#">Albums</a>
  <a href="#">Top 10</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>


</div>

<hr>
<div class="Tracks">
<h5>Top 10 Urban Trend</h5>

</script>




<div class="sound">
 <?php 

require_once 'conn.php';
require_once 'myFunctions.php';


$sq1 = "SELECT * FROM song Limit 5";

$result = mysqli_query($conn, $sq1);


if ($result->num_rows > 0) {
  // output data of each row

	
  	
  	$count =1;
  while($row = $result->fetch_assoc()) {

  	echo "<table cellpadding='10' cellspacing='10' border='0'>";
$songName = $row['songName'];
$songMp3 = $row['songMp3'];
$artistId = $row['artistId'];
$songPhoto = $row['songPhoto'];
$songId = $row['songId'];
$sq10 = "SELECT artistName FROM artist WHERE artistId = $artistId";
$sq100 = mysqli_query($conn, $sq10);

 	
  while($row1 = $sq100->fetch_assoc()) {
  	$artistName = $row1['artistName'];
  }


echo "<tr> <td> "."<h6 style='color:red;'>  $count </h6> <h6 style='color:blue;'> $songName </h6>"."<h6 style='color:blue;'> by  $artistName </h6></td> <td>"."<img src='uploads/$songPhoto' width='5' height='7' alt='artwork'>"."</td>"."<td>"."<audio controls autoplay><source src='uploads/$songMp3' type='audio/mpeg'> </audio> </td>"." <td><button type='button'><a href='uploads/$songMp3' download> Download </a></button></td> </tr> <br><hr class='new'>";

$count++;
  	  
  
  }

echo "</table>";

} else {
  echo "0 results";
}



?>





 
</div>





 <p class="text">
 	This platform stands out from the rest of the websites around the globe due to its interactivity and responsiveness which is a great deal in as much as user experience is concerned. it has been duly noted that people are frequently using this site to upload their songs and also download alot of trending songs. End users are also bennefiting from the same project due to the services provided such as graphic designing, modelling among others. This platform is a self sponsored and everything that is uploaded here is fully censored by individuals who are assigned on such course therefore if anything if found questionable you are advised to notify the management and that everything should work smoothly due to the mutual support pumped in so as to achieve greatness. This project is basically designed to run for a couple months before fully activating it. This is as the case due to the reasons of inquering if the project is offering maximum user satisafaction and also indeed if individuals are able to use the platform easily. Indeed theres much to be done as this is just the preamble, so feel free to bring up your views so that all together we get this thing running quicly and smoothly.
 	lastly i thank you for taking much of your time reading this acknowledgment. may you stay blessed and am wishing greatnes upon ypur way. until we meet again
 	Good Bye!
 </p>

<p class="text">
 	This platform stands out from the rest of the websites around the globe due to its interactivity and responsiveness which is a great deal in as much as user experience is concerned. it has been duly noted that people are frequently using this site to upload their songs and also download alot of trending songs. End users are also bennefiting from the same project due to the services provided such as graphic designing, modelling among others. This platform is a self sponsored and everything that is uploaded here is fully censored by individuals who are assigned on such course therefore if anything if found questionable you are advised to notify the management and that everything should work smoothly due to the mutual support pumped in so as to achieve greatness. This project is basically designed to run for a couple months before fully activating it. This is as the case due to the reasons of inquering if the project is offering maximum user satisafaction and also indeed if individuals are able to use the platform easily. Indeed theres much to be done as this is just the preamble, so feel free to bring up your views so that all together we get this thing running quicly and smoothly.
 	lastly i thank you for taking much of your time reading this acknowledgment. may you stay blessed and am wishing greatnes upon ypur way. until we meet again
 	Good Bye!
 </p>

<p class="text">
 	This platform stands out from the rest of the websites around the globe due to its interactivity and responsiveness which is a great deal in as much as user experience is concerned. it has been duly noted that people are frequently using this site to upload their songs and also download alot of trending songs. End users are also bennefiting from the same project due to the services provided such as graphic designing, modelling among others. This platform is a self sponsored and everything that is uploaded here is fully censored by individuals who are assigned on such course therefore if anything if found questionable you are advised to notify the management and that everything should work smoothly due to the mutual support pumped in so as to achieve greatness. This project is basically designed to run for a couple months before fully activating it. This is as the case due to the reasons of inquering if the project is offering maximum user satisafaction and also indeed if individuals are able to use the platform easily. Indeed theres much to be done as this is just the preamble, so feel free to bring up your views so that all together we get this thing running quicly and smoothly.
 	lastly i thank you for taking much of your time reading this acknowledgment. may you stay blessed and am wishing greatnes upon ypur way. until we meet again
 	Good Bye!
 </p>

 <p class="text">
 	This platform stands out from the rest of the websites around the globe due to its interactivity and responsiveness which is a great deal in as much as user experience is concerned. it has been duly noted that people are frequently using this site to upload their songs and also download alot of trending songs. End users are also bennefiting from the same project due to the services provided such as graphic designing, modelling among others. This platform is a self sponsored and everything that is uploaded here is fully censored by individuals who are assigned on such course therefore if anything if found questionable you are advised to notify the management and that everything should work smoothly due to the mutual support pumped in so as to achieve greatness. This project is basically designed to run for a couple months before fully activating it. This is as the case due to the reasons of inquering if the project is offering maximum user satisafaction and also indeed if individuals are able to use the platform easily. Indeed theres much to be done as this is just the preamble, so feel free to bring up your views so that all together we get this thing running quicly and smoothly.
 	lastly i thank you for taking much of your time reading this acknowledgment. may you stay blessed and am wishing greatnes upon ypur way. until we meet again
 	Good Bye!
 </p>

 <p class="text">
 	This platform stands out from the rest of the websites around the globe due to its interactivity and responsiveness which is a great deal in as much as user experience is concerned. it has been duly noted that people are frequently using this site to upload their songs and also download alot of trending songs. End users are also bennefiting from the same project due to the services provided such as graphic designing, modelling among others. This platform is a self sponsored and everything that is uploaded here is fully censored by individuals who are assigned on such course therefore if anything if found questionable you are advised to notify the management and that everything should work smoothly due to the mutual support pumped in so as to achieve greatness. This project is basically designed to run for a couple months before fully activating it. This is as the case due to the reasons of inquering if the project is offering maximum user satisafaction and also indeed if individuals are able to use the platform easily. Indeed theres much to be done as this is just the preamble, so feel free to bring up your views so that all together we get this thing running quicly and smoothly.
 	lastly i thank you for taking much of your time reading this acknowledgment. may you stay blessed and am wishing greatnes upon ypur way. until we meet again
 	Good Bye!
 </p>

 <p class="text">
 	This platform stands out from the rest of the websites around the globe due to its interactivity and responsiveness which is a great deal in as much as user experience is concerned. it has been duly noted that people are frequently using this site to upload their songs and also download alot of trending songs. End users are also bennefiting from the same project due to the services provided such as graphic designing, modelling among others. This platform is a self sponsored and everything that is uploaded here is fully censored by individuals who are assigned on such course therefore if anything if found questionable you are advised to notify the management and that everything should work smoothly due to the mutual support pumped in so as to achieve greatness. This project is basically designed to run for a couple months before fully activating it. This is as the case due to the reasons of inquering if the project is offering maximum user satisafaction and also indeed if individuals are able to use the platform easily. Indeed theres much to be done as this is just the preamble, so feel free to bring up your views so that all together we get this thing running quicly and smoothly.
 	lastly i thank you for taking much of your time reading this acknowledgment. may you stay blessed and am wishing greatnes upon ypur way. until we meet again
 	Good Bye!
 </p>

 <p class="text">
 	This platform stands out from the rest of the websites around the globe due to its interactivity and responsiveness which is a great deal in as much as user experience is concerned. it has been duly noted that people are frequently using this site to upload their songs and also download alot of trending songs. End users are also bennefiting from the same project due to the services provided such as graphic designing, modelling among others. This platform is a self sponsored and everything that is uploaded here is fully censored by individuals who are assigned on such course therefore if anything if found questionable you are advised to notify the management and that everything should work smoothly due to the mutual support pumped in so as to achieve greatness. This project is basically designed to run for a couple months before fully activating it. This is as the case due to the reasons of inquering if the project is offering maximum user satisafaction and also indeed if individuals are able to use the platform easily. Indeed theres much to be done as this is just the preamble, so feel free to bring up your views so that all together we get this thing running quicly and smoothly.
 	lastly i thank you for taking much of your time reading this acknowledgment. may you stay blessed and am wishing greatnes upon ypur way. until we meet again
 	Good Bye!
 </p>

 <p class="text">
 	This platform stands out from the rest of the websites around the globe due to its interactivity and responsiveness which is a great deal in as much as user experience is concerned. it has been duly noted that people are frequently using this site to upload their songs and also download alot of trending songs. End users are also bennefiting from the same project due to the services provided such as graphic designing, modelling among others. This platform is a self sponsored and everything that is uploaded here is fully censored by individuals who are assigned on such course therefore if anything if found questionable you are advised to notify the management and that everything should work smoothly due to the mutual support pumped in so as to achieve greatness. This project is basically designed to run for a couple months before fully activating it. This is as the case due to the reasons of inquering if the project is offering maximum user satisafaction and also indeed if individuals are able to use the platform easily. Indeed theres much to be done as this is just the preamble, so feel free to bring up your views so that all together we get this thing running quicly and smoothly.
 	lastly i thank you for taking much of your time reading this acknowledgment. may you stay blessed and am wishing greatnes upon ypur way. until we meet again
 	Good Bye!
 </p>

 <p class="text">
 	This platform stands out from the rest of the websites around the globe due to its interactivity and responsiveness which is a great deal in as much as user experience is concerned. it has been duly noted that people are frequently using this site to upload their songs and also download alot of trending songs. End users are also bennefiting from the same project due to the services provided such as graphic designing, modelling among others. This platform is a self sponsored and everything that is uploaded here is fully censored by individuals who are assigned on such course therefore if anything if found questionable you are advised to notify the management and that everything should work smoothly due to the mutual support pumped in so as to achieve greatness. This project is basically designed to run for a couple months before fully activating it. This is as the case due to the reasons of inquering if the project is offering maximum user satisafaction and also indeed if individuals are able to use the platform easily. Indeed theres much to be done as this is just the preamble, so feel free to bring up your views so that all together we get this thing running quicly and smoothly.
 	lastly i thank you for taking much of your time reading this acknowledgment. may you stay blessed and am wishing greatnes upon ypur way. until we meet again
 	Good Bye!
 </p>

 <p class="text">
 	This platform stands out from the rest of the websites around the globe due to its interactivity and responsiveness which is a great deal in as much as user experience is concerned. it has been duly noted that people are frequently using this site to upload their songs and also download alot of trending songs. End users are also bennefiting from the same project due to the services provided such as graphic designing, modelling among others. This platform is a self sponsored and everything that is uploaded here is fully censored by individuals who are assigned on such course therefore if anything if found questionable you are advised to notify the management and that everything should work smoothly due to the mutual support pumped in so as to achieve greatness. This project is basically designed to run for a couple months before fully activating it. This is as the case due to the reasons of inquering if the project is offering maximum user satisafaction and also indeed if individuals are able to use the platform easily. Indeed theres much to be done as this is just the preamble, so feel free to bring up your views so that all together we get this thing running quicly and smoothly.
 	lastly i thank you for taking much of your time reading this acknowledgment. may you stay blessed and am wishing greatnes upon ypur way. until we meet again
 	Good Bye!
 </p>

 <p class="text">
 	This platform stands out from the rest of the websites around the globe due to its interactivity and responsiveness which is a great deal in as much as user experience is concerned. it has been duly noted that people are frequently using this site to upload their songs and also download alot of trending songs. End users are also bennefiting from the same project due to the services provided such as graphic designing, modelling among others. This platform is a self sponsored and everything that is uploaded here is fully censored by individuals who are assigned on such course therefore if anything if found questionable you are advised to notify the management and that everything should work smoothly due to the mutual support pumped in so as to achieve greatness. This project is basically designed to run for a couple months before fully activating it. This is as the case due to the reasons of inquering if the project is offering maximum user satisafaction and also indeed if individuals are able to use the platform easily. Indeed theres much to be done as this is just the preamble, so feel free to bring up your views so that all together we get this thing running quicly and smoothly.
 	lastly i thank you for taking much of your time reading this acknowledgment. may you stay blessed and am wishing greatnes upon ypur way. until we meet again
 	Good Bye!
 </p>

 <p class="text">
 	This platform stands out from the rest of the websites around the globe due to its interactivity and responsiveness which is a great deal in as much as user experience is concerned. it has been duly noted that people are frequently using this site to upload their songs and also download alot of trending songs. End users are also bennefiting from the same project due to the services provided such as graphic designing, modelling among others. This platform is a self sponsored and everything that is uploaded here is fully censored by individuals who are assigned on such course therefore if anything if found questionable you are advised to notify the management and that everything should work smoothly due to the mutual support pumped in so as to achieve greatness. This project is basically designed to run for a couple months before fully activating it. This is as the case due to the reasons of inquering if the project is offering maximum user satisafaction and also indeed if individuals are able to use the platform easily. Indeed theres much to be done as this is just the preamble, so feel free to bring up your views so that all together we get this thing running quicly and smoothly.
 	lastly i thank you for taking much of your time reading this acknowledgment. may you stay blessed and am wishing greatnes upon ypur way. until we meet again
 	Good Bye!
 </p>

 <p class="text">
 	This platform stands out from the rest of the websites around the globe due to its interactivity and responsiveness which is a great deal in as much as user experience is concerned. it has been duly noted that people are frequently using this site to upload their songs and also download alot of trending songs. End users are also bennefiting from the same project due to the services provided such as graphic designing, modelling among others. This platform is a self sponsored and everything that is uploaded here is fully censored by individuals who are assigned on such course therefore if anything if found questionable you are advised to notify the management and that everything should work smoothly due to the mutual support pumped in so as to achieve greatness. This project is basically designed to run for a couple months before fully activating it. This is as the case due to the reasons of inquering if the project is offering maximum user satisafaction and also indeed if individuals are able to use the platform easily. Indeed theres much to be done as this is just the preamble, so feel free to bring up your views so that all together we get this thing running quicly and smoothly.
 	lastly i thank you for taking much of your time reading this acknowledgment. may you stay blessed and am wishing greatnes upon ypur way. until we meet again
 	Good Bye!
 </p>

 <p class="text">
 	This platform stands out from the rest of the websites around the globe due to its interactivity and responsiveness which is a great deal in as much as user experience is concerned. it has been duly noted that people are frequently using this site to upload their songs and also download alot of trending songs. End users are also bennefiting from the same project due to the services provided such as graphic designing, modelling among others. This platform is a self sponsored and everything that is uploaded here is fully censored by individuals who are assigned on such course therefore if anything if found questionable you are advised to notify the management and that everything should work smoothly due to the mutual support pumped in so as to achieve greatness. This project is basically designed to run for a couple months before fully activating it. This is as the case due to the reasons of inquering if the project is offering maximum user satisafaction and also indeed if individuals are able to use the platform easily. Indeed theres much to be done as this is just the preamble, so feel free to bring up your views so that all together we get this thing running quicly and smoothly.
 	lastly i thank you for taking much of your time reading this acknowledgment. may you stay blessed and am wishing greatnes upon ypur way. until we meet again
 	Good Bye!
 </p>

 <p class="text">
 	This platform stands out from the rest of the websites around the globe due to its interactivity and responsiveness which is a great deal in as much as user experience is concerned. it has been duly noted that people are frequently using this site to upload their songs and also download alot of trending songs. End users are also bennefiting from the same project due to the services provided such as graphic designing, modelling among others. This platform is a self sponsored and everything that is uploaded here is fully censored by individuals who are assigned on such course therefore if anything if found questionable you are advised to notify the management and that everything should work smoothly due to the mutual support pumped in so as to achieve greatness. This project is basically designed to run for a couple months before fully activating it. This is as the case due to the reasons of inquering if the project is offering maximum user satisafaction and also indeed if individuals are able to use the platform easily. Indeed theres much to be done as this is just the preamble, so feel free to bring up your views so that all together we get this thing running quicly and smoothly.
 	lastly i thank you for taking much of your time reading this acknowledgment. may you stay blessed and am wishing greatnes upon ypur way. until we meet again
 	Good Bye!
 </p>

 <p class="text">
 	This platform stands out from the rest of the websites around the globe due to its interactivity and responsiveness which is a great deal in as much as user experience is concerned. it has been duly noted that people are frequently using this site to upload their songs and also download alot of trending songs. End users are also bennefiting from the same project due to the services provided such as graphic designing, modelling among others. This platform is a self sponsored and everything that is uploaded here is fully censored by individuals who are assigned on such course therefore if anything if found questionable you are advised to notify the management and that everything should work smoothly due to the mutual support pumped in so as to achieve greatness. This project is basically designed to run for a couple months before fully activating it. This is as the case due to the reasons of inquering if the project is offering maximum user satisafaction and also indeed if individuals are able to use the platform easily. Indeed theres much to be done as this is just the preamble, so feel free to bring up your views so that all together we get this thing running quicly and smoothly.
 	lastly i thank you for taking much of your time reading this acknowledgment. may you stay blessed and am wishing greatnes upon ypur way. until we meet again
 	Good Bye!
 </p>

 <p class="text">
 	This platform stands out from the rest of the websites around the globe due to its interactivity and responsiveness which is a great deal in as much as user experience is concerned. it has been duly noted that people are frequently using this site to upload their songs and also download alot of trending songs. End users are also bennefiting from the same project due to the services provided such as graphic designing, modelling among others. This platform is a self sponsored and everything that is uploaded here is fully censored by individuals who are assigned on such course therefore if anything if found questionable you are advised to notify the management and that everything should work smoothly due to the mutual support pumped in so as to achieve greatness. This project is basically designed to run for a couple months before fully activating it. This is as the case due to the reasons of inquering if the project is offering maximum user satisafaction and also indeed if individuals are able to use the platform easily. Indeed theres much to be done as this is just the preamble, so feel free to bring up your views so that all together we get this thing running quicly and smoothly.
 	lastly i thank you for taking much of your time reading this acknowledgment. may you stay blessed and am wishing greatnes upon ypur way. until we meet again
 	Good Bye!
 </p>

 <p class="text">
 	This platform stands out from the rest of the websites around the globe due to its interactivity and responsiveness which is a great deal in as much as user experience is concerned. it has been duly noted that people are frequently using this site to upload their songs and also download alot of trending songs. End users are also bennefiting from the same project due to the services provided such as graphic designing, modelling among others. This platform is a self sponsored and everything that is uploaded here is fully censored by individuals who are assigned on such course therefore if anything if found questionable you are advised to notify the management and that everything should work smoothly due to the mutual support pumped in so as to achieve greatness. This project is basically designed to run for a couple months before fully activating it. This is as the case due to the reasons of inquering if the project is offering maximum user satisafaction and also indeed if individuals are able to use the platform easily. Indeed theres much to be done as this is just the preamble, so feel free to bring up your views so that all together we get this thing running quicly and smoothly.
 	lastly i thank you for taking much of your time reading this acknowledgment. may you stay blessed and am wishing greatnes upon ypur way. until we meet again
 	Good Bye!
 </p>

 <p class="text">
 	This platform stands out from the rest of the websites around the globe due to its interactivity and responsiveness which is a great deal in as much as user experience is concerned. it has been duly noted that people are frequently using this site to upload their songs and also download alot of trending songs. End users are also bennefiting from the same project due to the services provided such as graphic designing, modelling among others. This platform is a self sponsored and everything that is uploaded here is fully censored by individuals who are assigned on such course therefore if anything if found questionable you are advised to notify the management and that everything should work smoothly due to the mutual support pumped in so as to achieve greatness. This project is basically designed to run for a couple months before fully activating it. This is as the case due to the reasons of inquering if the project is offering maximum user satisafaction and also indeed if individuals are able to use the platform easily. Indeed theres much to be done as this is just the preamble, so feel free to bring up your views so that all together we get this thing running quicly and smoothly.
 	lastly i thank you for taking much of your time reading this acknowledgment. may you stay blessed and am wishing greatnes upon ypur way. until we meet again
 	Good Bye!
 </p>

 <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var menu = document.getElementById("menu");

function myFunction() {
  if (window.pageYOffset >= menu.offsetTop) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>