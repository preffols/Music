<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="top.css">
	<title>Top 10</title>
</head>
<body>
	<div class="main">
		<nav>
 	<h2 class="logo">WeB <span>DEZ</span></h2>
 	<ul>
 		<li><a href="#">Home</li>
 		<li><a href="serv.html">Services</li>
 		<li><a href="#">Contacts</li>
 		<li><a href="top.html">Top 10</li>
 	</ul>
 	<a href="abou.html"><button type="button">About Us</button></a>
 </nav>
 <hr>
		
	</div>

	<div>
		 <?php 

require_once 'conn.php';
require_once 'myFunctions.php';


$sq1 = "SELECT * FROM songs Limit 10";

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
  


echo "<tr> <td> "."<h6 style='color:red;'>  $count </h6> <h6 style='color:blue;'> $songName </h6>"."<h6 style='color:blue;'> by  $artistName </h6></td> <td>"."<img src='uploads/$songPhoto' width='5' height='7' alt='artwork'>"."</td>"."<td>"."<audio controls autoplay><source src='uploads/$songMp3' type='audio/mpeg'> </audio> </td>"." <td><button type='button'><a href='uploads/$songMp3' download> Download </a></button></td> </tr> <br><hr class='new'>";
  }
$count++;
  	  
  
  }

echo "</table>";

} else {
  echo "0 results";
}



?>

	</div>

</body>
</html>