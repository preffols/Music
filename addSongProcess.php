<?php
 require 'myFunctions.php';
$songName = " ";
$songDetals =" ";
$artistId=0;


// validatind if is set

if (isset($_POST['artistId'])) {
	$artistId = $_POST['artistId'];
}


if (isset($_POST['songName'])) {
	$songName = $_POST['songName'];

	echo "$songName";
}


if (isset($_POST['songDetals'])) {
	
$songDetails= $_POST['songDetals'];
}


require_once 'conn.php';




if (isset($_FILES['songPhoto'])) {
$songPhoto = uploadFile($_FILES['songPhoto'],$songName);



	}


if (isset($_FILES['songMp3'])) {
$songMp3 = uploadFile($_FILES['songMp3'],$songName);


	}
	$updateDate = date("Y-m-d");

$sql1 = "INSERT INTO song(
		songName,
		songDetails,
		songPhoto,
		songMp3,
		updateDate,
		artistId 
		) VALUES(
		'{$songName}',
		'{$songDetails}',
		'{$songPhoto}',
		'{$songMp3}',
		'{$updateDate}',
		'{$artistId}'
		)";

$sql5 = mysqli_query($conn,$sql1);

?>