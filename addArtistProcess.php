<?php

//decleration of valiables
$firstName = "";
$surName = " ";
$nickName = " ";
$district = " ";
$artistBio = " ";
$phoneNumber= " ";
$DoB;




//check if field are not null
if (isset($_POST['firstName'])) {
	$firstName = $_POST['firstName'];

	}


if (isset($_POST['surName'])) {
	$surName = $_POST['surName'];

	}

if (isset($_POST['nickName'])) {
	$nickName = $_POST['nickName'];

	}

if (isset($_POST['district'])) {
	$district = $_POST['district'];

	}

if (isset($_POST['artistBio'])) {
	$artistBio = $_POST['artistBio'];

	}

if (isset($_POST['phoneNumber'])) {
	$phoneNumber = $_POST['phoneNumber'];

	}

if (isset($_POST['DoB'])) {
	$DoB = $_POST['DoB'];

	}



//getting connection to database
require_once 'conn.php';


//inserting into table of artist

$sq1 = "INSERT INTO `artistInfo`(`nickName`, `firstName`, `surName`, `district`, `artistInfoGen`, `DoB`, `phoneNumber`) VALUES(
'$nickName',
'$firstName',
'$surName',
'$district',
'$artistBio',
'$DoB',
'$phoneNumber')";

$sql2 = mysqli_query($conn,$sq1); 



if (!$sql2) {
	echo "failled to add artist".mysqli_error($conn);
}
else {

	echo "successfully added <br> <a href='addArtist.php'>ADD another</a>";
}
?>
