<?php

require 'conn.php';

$sq2 = "CREATE TABLE IF NOT EXISTS `mydb`.`songs` (
  `songsId` INT NOT NULL AUTO_INCREMENT,
  `songsName` VARCHAR(45) NULL,
  `artistId` INT NOT NULL,
  `ulbumID` INT NOT NULL,
  `songsDownloads` INT NOT NULL,
  `otherArtist` VARCHAR(45) NULL,
  PRIMARY KEY (`songsId`)
)";

    $sql3= mysqli_query($conn, $sq2);

    if ($sql3) {
    	echo "successfull";
    }

else
{
	echo "failled".mysqli_error($conn);
}
?>