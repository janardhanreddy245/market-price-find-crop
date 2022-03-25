<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";
$sea=$_POST['season'];
$so=$_POST['soil'];
$tp=$_POST['time'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT crop FROM bye WHERE season='$sea' and soil='$so' and timeperiod='$tp' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
    echo "crop: " . $row["crop"].  "<br>";
  }
} else {
  echo "<i>No crop is available for your details.</i>";
}
$conn->close();
?>
</body>
</html>