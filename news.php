<?php


include 'islogedin.php';
include 'config.php';


$subject = $_POST['txtsubject'];
$describtion = $_POST['txtdesc'];
$news = $_POST['txtnews'];


$sql = "INSERT INTO `Neww` VALUES (NULL, '".$subject."', '".$describtion."', '".$news."', '".$username."')";

$done = mysqli_query($conn,$sql);



if ($done == true ) {

	header("Location:newsphp.html");	


}else {
	header("Location:newserror.html");
}

?>



