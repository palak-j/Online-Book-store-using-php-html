<html>
<head>
<link rel="stylesheet" href="style.css" media="screen">
</head>
<body>

<?php
include 'dbconnection.php';

$html = "<html><table style='width:60%' border='1px solid black'>
    <caption style='font-weight:bold'>Available Books</caption>
    <tr>
    <th>Book Id</th>
    <th>Author</th>
    <th>Book Condition</th>
    <th>Book name</th>
    <th>Category</th>
  </tr>";

// get id
$sql1 = "SELECT book_id, author, book_condition, book_name, category FROM book";
$result = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	$html = $html."<tr><td>".$row['book_id']."</td><td>".$row['author']."</td><td>".$row['book_condition']."</td><td>".$row['book_name']."</td><td>".$row['category']."</td></tr>";
	    }
	} else {
	    echo "No results";
	}
	
	$html=$html."</table></html>";
	echo $html;

mysqli_close($conn);

?>

<h1></h1>
<button><a href="edit.html">Edit entries</a></button>
<br>
<br>
<button><a href="index.html">Back to Homepage</a></button>
<br>
<br>
<br>
<button><a href="reg.html">Logout</a></button>
</body>
</html>