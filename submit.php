<?php
include 'dbconnection.php';

// getting inputs for new entry to book table
$author = $_POST['author'];
$book_name = $_POST['book_name'];
$category = $_POST['category'];
$book_condition = $_POST['book_condition'];
$email = $_POST['email'];


$sql = "SELECT password FROM users where email='$email'";
$result = mysqli_query ($conn, $sql);

if (mysqli_num_rows($result) ==1){


// getting inputs for new entry to status table
$trade_status = $_POST['trade_status'];
$availability = 'Y';

// generate id for book
$sql1 = "SELECT MAX(book_id) AS id FROM book";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);
$newid1 = $row1['id'] + 1;



$sql3 = "INSERT INTO book(book_id, author, book_name, category, book_condition)
VALUES ('".$newid1."', '".$author."', '".$book_name."', '".$category."', '".$book_condition."')";

if (mysqli_query($conn, $sql3)) {
    echo "";
} else {
    echo "Error inserting records: " . $sql3 . "<br>" . mysqli_error($conn);
}


$sql5 = "INSERT INTO status(user_id, book_id, trade_status, availability)
VALUES ('".$newid2."', '".$newid1."', '".$trade_status."', '".$availability."')";

if (mysqli_query($conn, $sql5)) {
    echo "New record created successfully";
} else {
    echo "Error inserting records: " . $sql5 . "<br>" . mysqli_error($conn);
}

}

else{
echo "Email not registered. Complete registration before inserting data for new book.";

}
mysqli_close($conn);

?>
<body>
<h1></h1>
<button><a href="reg.html">Register here</a></button>
</body>
