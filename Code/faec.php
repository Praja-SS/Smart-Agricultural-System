<?php 
if(!isset($_SESSION)) { session_start(); }


include("dbconnection.php");
if($_SESSION[randnumber]  == $_POST[randnumber])
{
if(isset($_POST[submit]))
{
		$sql ="UPDATE ares.crop_cal SET rate=$_POST[rate], yield1=$_POST[yield] WHERE crop='$_POST[crop]'";
		if(!mysqli_query($con,$sql))
		{
			echo "Error in mysqli query";
		}
		else
		{
			echo '<script>window.alert("Crop Rate updated successfully !");</script>';
			echo '<script>location.href="dashboard.php"</script>';
		}
}
}

?>