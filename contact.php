<?php
$username = $_POST['data_2'];
$restuarant = $_POST['data_3'];
$rating = $_POST['data_4'];
$title = $_POST['data_5'];
$pros = $_POST['data_6'];
$cons = $_POST['data_7'];
$review = $_POST['data_8'];
$recommend = $_POST['data_9'];

$host= "localhost":
$dbUsername = "root";
$dbPassword = "";
$dbname = "";

//create connection
$conn= new sqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error()) {
	die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} else {
	$SELECT = "SELECT data_2 From register Where data_2 = ? Limit 1";
	//table = register 
	$INSERT ="INSERT Into register (username,restuarant, rating, title,pros,cons,review,recommend) values(?,?,?,?,?,?,?,?)";
	// prepare statement 
	$stmt= $conn-> prepare($SELECT);
	$stmt->bind_param("s", $username);
	$stmt->execute();
	$stmt->bind_result($username);
	$stmt->store_result();
	$rnum = $stmt->num_rows;

	if ($rnum==0) {
		$stmt = $conn->prepare($INSERT);
		$stmt->bind_param("ssssssss", $username,$restuarant, $rating, $title,$pros,$cons,$review,$recommend);
		$stmt-> execute();
		echo "New Record inserted sucessfully";
	}else {
		echo "Someone already register using this username ";
	}
	$stmt->close();
	$conn->close();

	}
} else {
	echo "All field are required";
	die();
}
?>