
<?php
require_once 'conn.php';
require_once 'myFunctions.php';
$artists = getArtist();


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>add artist</title>
</head>
<body>
<br><br>
<p>
	<h2>
		
	</h2>
</p>
<p>
<table align="center" cellpadding="1" cellspacing="5">
	<form action="addSongProcess.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data" >
		<tr>
			<td>
				<h2>Add Song</h2>
			</td>
		</tr>
		<tr>
		<td>Song Name</td>
		<td><input type="text" name="songName"></td>	
		</tr>
		<tr>
			<td>Song Details</td>
			<td><input type="text" name="songDetals"></td>

		</tr>		
		
		<tr>
		<td>
			Artwork
		</td>
		<td>
			<input type="file" name="songPhoto">
		</td>
		<tr>
			<td>
				Song File
			</td>
			<td>
			 <input type="file" name="songMp3">
		</td>
		</tr>

		

		<tr>
			<td>
				Main Artist
			</td>
			<td><select name="artistId" id="artistId">
				

				<?php  foreach ($artists as $key => $artist): ?>

					<option value="<?= $artist['artistId'] ?> "> <?= $artist['artistName'] ?></option>

			
			<?php endforeach ?>

			</select></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="ADD"><input type="reset" name="reset"></td>
		</tr>
	</form>
</table>
</p>
</body>
</html>