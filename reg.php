<?php
include 'dbconnection.php';

// getting inputs for new entry to users table
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$cnf_password = $_POST['cnf_password'];

$sql = "SELECT password FROM users where email='$email'";
$result = mysqli_query ($conn, $sql);

if (mysqli_num_rows($result) ==1){

echo "Email already exist. Try to log in.";
echo "<br><a href='login.html'>Log in</a>";

}
else
{

if($password == $cnf_password){

// generate id for users
$sql1 = "SELECT MAX(user_id) AS id FROM users";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);
$newid1 = $row1['id'] + 1;


$sql2 = "INSERT INTO users(user_id, name, email, phone, password)
VALUES ('".$newid1."', '".$name."', '".$email."', '".$phone."', '".$password."' )";

if (mysqli_query($conn, $sql2)) {
    echo "Executed";
} else {
    echo "Error inserting records: " . $sql2 . "<br>" . mysqli_error($conn);
}

}

else{
header('Location: reg_error.html');

}
}
mysqli_close($conn);

?>
<body>
</body>
