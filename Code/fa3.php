<?php 
if(!isset($_SESSION)) { session_start(); }


include("dbconnection.php");
if($_SESSION[randnumber]  == $_POST[randnumber])
{
if(isset($_POST[submit]))
{		$day1 = strtotime($_POST["date1"]);
		$day1 = date('Y-m-d H:i:s', $day1);
		;
				$sql ="UPDATE ares.register SET date_sow='$day1' WHERE id='$_SESSION[id]'";
		if(!mysqli_query($con,$sql))
		{
			echo "Error in mysqli query";
		}
		else
		{
			echo '<script>window.alert("Farmer account updated successfully !");</script>';
			echo '<script>location.href="cropselection.php"</script>';
		}
}
}

?>