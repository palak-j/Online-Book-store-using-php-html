<html>

<body>

<?php

include 'dbconnection.php';


$email = $_POST['email'];
$password = $_POST['password'];
$author = $_POST['author'];
$bookname = $_POST['book_name'];
$trade_status = $_POST['trade_status'];
$availability = $_POST['availability'];


$sql1 = "SELECT password FROM users where email='$email'";
$result = mysqli_query ($conn, $sql1);


if (mysqli_num_rows($result) ==1){
 
$r1 = mysqli_fetch_assoc($result);
$pwd = $r1['password'];

if ($password==$pwd){
   $sql2 = "SELECT S.book_id FROM status S join users U on S.user_id= U.user_id join book B on B.book_id= S.book_id where U.email = '$email' and B.book_name='$bookname'";
   $result2 = mysqli_query ($conn, $sql2);
   if (mysqli_num_rows($result2) ==1){
       while($row = mysqli_fetch_assoc($result2)) {
        $r = $row['book_id'];
        $sqln = "UPDATE status SET trade_status = '$trade_status', availability= '$availability' where book_id= '$r' ";
        mysqli_query ($conn, $sqln);
        

       echo "Status of book changed.";
       

}       
	  
}




   
   }
else{
header('Location: edit_error.html');

}

}
else{
 header('Location: edit_error.html');
}




mysqli_close($conn);

?>

<h1></h1>
<button><a href="index.html">Back to Homepage</a></button>
<br>
<br>
<br>
<button><a href="reg.html">Logout</a></button>


</body>
</html>