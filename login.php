
<?php

    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "login";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }



if(isset($_POST['submit']))
{    
        $name = $_POST['name'];
        $panther = $_POST['panther'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $checkbox = $_POST['checkbox'];
     $sql = "INSERT INTO register (name,panther,email,username,password,checkbox)
     VALUES ('$name','$panther','$email','$username','$password','$checkbox')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>