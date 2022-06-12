<!DOCTYPE html>
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
<table align="center" cellpadding="10" cellspacing="10">
	<form action="addArtistProcess.php" method="POST" accept-charset="utf-8" >
		<tr>
			<td>
				<h2>Add Artist</h2>
			</td>
		</tr>
		<tr>
		<td>First Name</td>
		<td><input type="text" name="firstName"></td>	
		</tr>
		<tr>
		<td>Sur Name</td>
		<td><input type="text" name="surName"></td>	
		</tr>
		<tr>
		<td>nick Name</td>
		<td><input type="text" name="nickName"></td>	
		</tr>
		<tr>
		<td>Date of Birth</td>
		<td><input type="Date" name="DoB"></td>	
		</tr>
		<tr>
		<td>Phone Number</td>
		<td><input type="text" name="phoneNumber"></td>	
		</tr>
		<td>District</td>
		<td><input type="text" name="district"></td>	
		</tr>
		<tr>
			<td>Artist Bio</td>
			<td><input type="text" name="artistBio"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Register"><input type="reset" name="reset"></td>
		</tr>
	</form>
</table>
</p>
</body>
</html>