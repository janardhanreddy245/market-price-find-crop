<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";
$st=$_POST['state'];
$cp=$_POST['cropname'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT price FROM mprice WHERE state='$st' and crop='$cp' ";
$result = $conn->query($sql);

if ($result->num_rows > 0)  {
 
  while($row = $result->fetch_assoc()) {
    echo "Price: " . $row["price"].  "<br>";
  }
} 
$conn->close();
?>
</body>
</html>