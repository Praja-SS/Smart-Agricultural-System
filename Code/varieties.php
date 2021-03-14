<?php 
include("fa11.php");

if ($rsedit[crop]=='')
{
echo '<script>location.href="cns.php"</script>';
}
else
{
	$sql1 = "SELECT varieties FROM ares.crop_details where crop='$rsedit[crop]'  ";
							  $qsql1 = mysqli_query($con,$sql1);
							  
							$rs = (mysqli_fetch_array($qsql1));
							
							
							  echo "<script>location.href='$rs[varieties]'</script>";
		
}
?>