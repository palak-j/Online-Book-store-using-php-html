<html>

<body>

<?php

include 'dbconnection.php';


$email = $_POST['email'];
$password = $_POST['password'];

$sql1 = "SELECT password FROM users where email='$email'";
$result = mysqli_query ($conn, $sql1);




if (mysqli_num_rows($result) ==1){
 
$r1 = mysqli_fetch_assoc($result);
$pwd = $r1['password'];

if ($password==$pwd){
   header('Location: index.html');
   }
else{
header('Location: login_error.html');

}

}
else{
 header('Location: login_error.html');
}



mysqli_close($conn);

?>

</body>
</html>