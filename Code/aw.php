<?php
$weed = $_POST['weedicide'];
$crop = $_POST['crop'];
$img1 = $_POST['img1'];
$link = $_POST['link'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ares";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO ares.weedicide (crop,weedicide,link,weedicide_pic)
VALUES ('$crop', '$weed', '$link','$img1')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  echo '<script>location.href="dashboard.php"</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>