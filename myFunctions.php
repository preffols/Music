</<?php 

// function to get all artist from database

function getArtist($value='')
{

global $conn;
$sq7 = "SELECT * FROM artist";
$result = mysqli_query($conn, $sq7);
 
 $artists = array();

 while($row=mysqli_fetch_assoc($result)) {
 	array_push($artists, $artist);
 }
return $artists;
}



// function to return artist id
 function getArtistById($id)
 {
 	global $conn;

 	$sql4 = "SELECT * FROM artist WHERE artistId = {$id}";
 	$result = mysqli_query($conn, $sql4);

 	
 	 $artist = $result->fetch_assoc();
 	 return artist;

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

 ?>