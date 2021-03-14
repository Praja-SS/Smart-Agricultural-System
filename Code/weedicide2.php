<?php 

if(!isset($_SESSION)) { session_start(); }


include("dbconnection.php");

include("fa11.php");

if ($rsedit[crop]=='')
{
echo '<script>location.href="cns.php"</script>';
}
else
{
	$sql1 = "SELECT * FROM ares.weedicide where crop='$rsedit[crop]'  ";
							  $qsql1 = mysqli_query($con,$sql1);
							  
							$rs = (mysqli_fetch_array($qsql1));
		
}
?>