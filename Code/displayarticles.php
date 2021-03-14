<?php 
include("header.php");
include("dbconnection.php");
?>


	

		<div id="featured">
			<div class="container">
				<div class="row">
			
 				 <div class="col s12 l12 xl12">						
					<div class='9u'>
                  		<h2><?php echo $_GET[articletype]; ?></h2>
                              <?php
							  $sql = "SELECT * FROM article WHERE article_type='$_GET[articletype]' order by a_id desc  ";
							  $qsql = mysqli_query($con,$sql);
							  while($rs = mysqli_fetch_array($qsql))
							  {
								echo "<section><header style='height:150px;'><a href='displayarticlesdetailed.php?articleid=$rs[a_id]'><img src='$rs[img1]' align='left' width='250' height='150' style='padding-right: 10px;'></a>
								<h2><a href='displayarticlesdetailed.php?articleid=$rs[a_id]'>$rs[title]</a></h2><br>
								<p> ";
								echo substr($rs[description], 0, 200).".......";
								echo "<br></p></header></section><br><br>";
							  }
							  ?>
								
					</div>
				</div>
						
					
			</div>
		</div>
	
<br>
<br>
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