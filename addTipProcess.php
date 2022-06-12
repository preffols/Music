<?php
$tipWriterId = 0;
$tip = " ";
if (isset($_POST['tipWriterId'])) {
	$tipWriterId = $_POST['tipWriterId'];
}

if (isset($_POST['tip'])) {
	$tip = $_POST['tip'];
}


require_once 'conn.php';
$tipDate = date("Y/m/d");

$sq2 = "INSERT INTO `tips`(`tipWritersId`, `tip`, `tipDate`) VALUES ($tipWriterId,'$tip',$tipDate)";

$sq25 = mysqli_query($conn, $sq2);

if ($sq25) {
	echo("successfully <br><br>");

}

else{
	echo "failled to".mysqli_error($conn);
}
echo "<a href='addTip.php'><button> Back</button></a>";
?>

