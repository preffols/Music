

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>fetctmusic</title>


<style>

table, th, td {
  
  border-collapse: collapse;
}
th, td {
  padding: 1px;
}

a {

background: #464646;
width: 70px;
height:28px;
border-radius: 5px;
text-align:center;
color:#fff;
font-family:arial;
font-size:13px;
padding-top: 12px; 
padding-bottom:12px;
padding-left:37px;
padding-right:37px;
text-decoration:none;

}
</style>
</head>
<body>

 <?php 

require_once 'conn.php';
require_once 'myFunctions.php';


$sq1 = "SELECT * FROM song";

$result = mysqli_query($conn, $sq1);


if ($result->num_rows > 0) {
  // output data of each row

	
  	
  	
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


echo "<tr> <td> "."$songName"." by  $artistName </td> <td>"."<img src='uploads/$songPhoto' width='50' height='60' alt='artwork'>"."</td>"."<td>"."<audio controls autoplay><source src='uploads/$songMp3' type='audio/mpeg'> </audio> </td>"." <td><button type='button'><a href='uploads/$songMp3' download> Download </a></button></td> </tr> <br>";


  	  
  
  }

echo "</table>";

} else {
  echo "0 results";
}



?>

 
<table cellpadding='10' cellspacing='10' border='0'>
	
</table>

</body>
</html>