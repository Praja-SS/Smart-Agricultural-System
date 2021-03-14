<?php include("header.php");
include("dbconnection.php");
?>


	

		<div id="featured">
			<div class="container">
				<div class="row">
				
					
							<div class='9u'  >
                              <?php
							  $sql = "SELECT * FROM ares.article where a_id='$_GET[articleid]'";
							  $qsql = mysqli_query($con,$sql);
							  while($rs = mysqli_fetch_array($qsql))
							  {
								echo "<section><header ><h2><u>$rs[title]</u></h2>";
if($rs[img1] != "" && file_exists($rs[img1]))
{
echo "<img src='$rs[img1]' align='left' style='padding-right: 10px;width: 100%;'>";
}
								echo "<p>" . $rs[description] . "</p>";
if($rs[article_img2] != "" && file_exists($rs[img2]))
{
echo "<img src='$rs[img2]' align='left' style='padding-right: 10px;width: 100%;'>";
}
if($rs[img3] != "" && file_exists($rs[img3]))
{
echo "<img src='$rs[img3]' align='left' style='padding-right: 10px;width: 100%;'>";
}
if($rs[img4] != "" && file_exists($rs[img4]))
{
echo "<img src='$rs[img4]' align='left' style='padding-right: 10px;width: 100%;'>";
}

								echo "
								
								</header></section>";
							  }
							  ?>
								
						</div>
						
					
				</div>
			</div>
		</div>
		<footer class="page-footer black ">
  <div class="container">
    <div class="row">
      <div class="col  l6 s12 ">
        <ul>
          <li><a class="green-text text-lighten-3 " href="aboutus.php">About us</a></li>
          <li><a class="green-text text-lighten-3 " href="contactus.php">Contact us</a></li>
          
        </ul>
      </div>
    </div>
  </div>
 <div class="footer-copyright green darken-4 ">
      <div class="container center-align">Copyright &copy; 2020 Developed By ARES</div>
    </div>
  </div>
</footer>