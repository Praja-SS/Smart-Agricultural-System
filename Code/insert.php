<?php

$title = $_POST['title'];
$description = $_POST['description'];
$img1 = $_POST['img1'];
$img2 = $_POST['img2'];
$img3 = $_POST['img3'];
$img4 = $_POST['img4'];
if (!empty($publishdate) || !empty($title) || !empty($description) || !empty($img1)) {
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "ares";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT title From article Where title = ? Limit 1";
     $INSERT = "INSERT Into article (title,description,img1,img2,img3,img4) values(?,?,?,?,?,?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $title);
     $stmt->execute();
     $stmt->bind_result($title);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssss",$title,$description,$img1,$img2,$img3,$img4);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Title Used";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>
    