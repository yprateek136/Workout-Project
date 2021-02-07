<?php
$conn = new mysqli("localhost","root","","admindb");
// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
	 $category = $_POST['minmax2'];

	 $sql = "INSERT INTO categoriestable (category)
	 VALUES ('$category')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 }
	 else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
?>

