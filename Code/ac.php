<?php
$city = $_POST['city'];
$crop = $_POST['crop'];
$hd = $_POST['hd'];
$rate = $_POST['rate'];
$yield = $_POST['yield'];
$lp = $_POST['lp'];
$v = $_POST['v'];
$s = $_POST['s'];
$i = $_POST['i'];
$h = $_POST['h'];
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

$sql = "INSERT INTO ares.crop_details (crop,land_prep,varieties,sowing,irrigate,harvest)
VALUES ('$crop', '$lp', '$v','$s','$i','$h')";
$s1 = "INSERT INTO ares.crop_area (city,crop) values ('$city','$crop')";
$s2 = "INSERT INTO ares.crop_cal (crop,day,rate,yield1) values ('$crop',$hd,$rate,$yield)";
if (mysqli_query($conn, $sql)) {
mysqli_query($conn, $s1);
mysqli_query($conn, $s2);
  echo "New record created successfully";
  echo '<script>location.href="dashboard.php"</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>