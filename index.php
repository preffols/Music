 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Home</title>
  <style type="text/css">
    
    .text{
         padding: 20px 8%;
    font-size: 20px;
    }
  </style>

 
</head>
<body>
<div class="hero">
 <nav>
 	<h2 class="logo">WeB <span>DEZ</span></h2>
 	<ul>
 		<li><a href="#">Home</li>
 		<li><a href="serv.php">Services</li>
 		<li><a href="conta.php">Contacts</li>
 		<li><a href="top.php">Top 10</li>
 	</ul>
 	<a href="abou.html"><button type="button">About Us</button></a>
 </nav>

 <div id="main">
  <span class="sd" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>
<hr class="line">
	
</div>
<hr>
<div class="yosecha">
<div class="search-box">
	<form action="" method="post">
	<input class="search-txt" type="text" name="search-txt" placeholder="Type to search">

	<a  class="search-btn"  href="#">
		<button type="submit" name="submit" value="submit" style="background-color: white"><img src="images/search.png" class="se"></button>
	</a>
	
</div>
</div>



<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="artists.php">Artists</a>
  <a href="#">albums</a>
  <a href="#">New Entries</a>
  <a href="#">Genres</a>
</div>



<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "320px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>


<div class="sound">
 <?php 

require_once 'conn.php';
require_once 'myFunctions.php';


$sq1 = "SELECT * FROM songs Limit 5";

$result = mysqli_query($conn, $sq1);


if ($result->num_rows > 0) {
  // output data of each row

  
    
    $count =1;
  while($row = $result->fetch_assoc()) {

    echo "<table cellpadding='10' cellspacing='10' border='0'>";
$songName = $row['songName'];
$songMp3 = $row['songMp3'];
$artistId = $row['artistInfoId'];
$songPhoto = $row['songPhoto'];
$songId = $row['songId'];
$sq10 = "SELECT nickName FROM artistInfo WHERE artistInfoId = $artistId";
$sq100 = mysqli_query($conn, $sq10);

  
  while($row1 = $sq100->fetch_assoc()) {
    $artistName = $row1['nickName'];
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



<div>




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

</div>

 
</body>
</html>