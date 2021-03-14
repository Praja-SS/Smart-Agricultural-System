<?php
$farmername = $_POST['farmername'];
$password = $_POST['password'];
$email_id = $_POST['email_id'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$address = $_POST['address'];
if (!empty($farmername) || !empty($password) || !empty($email_id) || !empty($city) || !empty($phone)|| !empty($email_id)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "ares";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email_id From ares.register Where email_id = ? Limit 1";
     $INSERT = "INSERT Into ares.register (farmername,address,city,phone,email_id,password) values(?,?,?,?,?,?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email_id);
     $stmt->execute();
     $stmt->bind_result($email_id);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssiss",$farmername,$address,$city,$phone,$email_id,$password);
      $stmt->execute();
   	echo '<script>window.alert("Farmer account created succesfully!");</script>';
	echo '<script>location.href="main.php"</script>';
     } else {
      	echo '<script>window.alert("Someone has already registered with this email_id!");</script>';
		echo '<script>location.href="reg.php"</script>';
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}


?>