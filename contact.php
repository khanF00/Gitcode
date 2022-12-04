<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "reviews";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }



if(isset($_POST['submit']))
{    
$username = $_POST['username'];
$restuarant = $_POST['restuarant'];
$rating = $_POST['rating'];
$title = $_POST['title'];
$pros = $_POST['pros'];
$cons = $_POST['cons'];
$review = $_POST['review'];
$recommend = $_POST['recommend'];
     $sql = "INSERT INTO register (username,restuarant,rating,title,pros,cons,review,recommend)
     VALUES ('$username','$restuarant','$rating','$title','$pros','$cons', '$review','$recommend')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
