<?php 
if(!isset($_SESSION)) { session_start(); }


include("dbconnection.php");
if($_SESSION[randnumber]  == $_POST[randnumber])
{
if(isset($_POST[submit]))
{
		$sql ="UPDATE ares.weather SET Humidity = $_POST[humid], Annual_rainfall = $_POST[ar], Temperature=$_POST[temp] WHERE city='$_POST[city]'";
		if(!mysqli_query($con,$sql))
		{
			echo "Error in mysqli query";
		}
		else
		{
			echo '<script>window.alert("Weather updated successfully!!");</script>';
			echo '<script>location.href="dashboard.php"</script>';
		}
}
}

?>