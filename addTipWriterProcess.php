
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>addTipWriterProcess</title>
    <style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('images/forestbridge.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
</head>
<body class="bgimg">




<?php

 
// getting data from  add artist form , from the client

$tipWriterName  = $_POST['tipWriterName'];

$tipWriterBio   = $_POST['tipWriterBio'];

$tipWriterPhoto = $_FILES['tipWriterPhoto'];

$phoneNumber = $_POST['phoneNumber'];

//getting connection to database
require_once 'conn.php';



$tipWriterPhoto = uploadFile($_FILES['tipWriterPhoto'],$tipWriterName);


// $tipWriterName','$tipWriterBio','$tipWriterPhoto','$phoneNumber'
    
//inserting into table of tipWriter

$sq1 = "INSERT INTO `tipwriters`(`tipWriterName`, `tipWritersBio`, `tipWriterphoto`, `phoneNumber`) VALUES ('$tipWriterName','$tipWriterBio','$tipWriterPhoto','$phoneNumber')";
$sql2 = mysqli_query($conn,$sq1); 

if (!$sql2) {
    echo "failled to add tipWriter".mysqli_error($conn);
}
else {


    echo "successfully added <br> <a href='addTipWriter.php'>ADD another</a>";

}

// function to upload files 

function uploadFile($upload,$name)
{
    $fileName = " ";
$SongName = $name;
    
    if (isset($upload['error'])) {
        if ($upload['error'] == 0) {
            $folderName = "uploads/";

            $path = $upload['name'];
            $ext = pathinfo($path,PATHINFO_EXTENSION);

            $fileName = $SongName .rand(10000,10000000)."_".rand(100000,100000000)."_".time();
            $fileName =strtolower(str_replace(" ","_",$fileName));
            $fileName .=".".$ext;

            $destination = $folderName."/".$fileName;
            $source = $upload['tmp_name'];
            if (move_uploaded_file($source,$destination)) {
                return $fileName;
            }
            else{
                    return $fileName;
            }

        }
    
}
    return $fileName;

}
echo "<a href='addTipWriter.php'><button> Back</button></a>";

?>
</body>
</html>
