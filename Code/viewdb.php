<?php
include("header.php")
?>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
              
      <title>View DataBase</title>
  </head>
  <body>
    <h4 style="text-align:center;"><strong>DataBase</strong></h4>
      <div class="container">
         
        <div class="row">
          <div class="col l4 s12"></div>
            <ul class="collapsible">
              <li>
                <div class="collapsible-header green-text text-darken-1">1.City-Weather</div>
                <div class="collapsible-body"><?php
								if(!isset($_SESSION)) { session_start(); }
								{include("dbconnection.php");

						
							$sql1 = "SELECT * FROM ares.weather";
							  $qsql1 = mysqli_query($con,$sql1);
							  echo "<table class='center'>
										<tr>
										<th>S.No</th>
										<th>City</th>
										<th>Humidity</th>
										<th>Annual Rainfall</th>
										<th>Temperature</th>
										
										</tr>";
								$cnt=1;
							  while($rs = mysqli_fetch_array($qsql1))
							  {
								  echo "<tr>";
								   echo "<td>".$cnt."</td>";
								  echo "<td>".$rs[city]."</td>";
								  echo "<td>".$rs[Humidity]."</td>";
								  echo "<td>".$rs[Annual_rainfall]."</td>";
								  echo "<td>".$rs[Temperature]."</td>";
								  echo"<td>";

							  

								  echo "</tr>";
								  $cnt=$cnt+1;
							  }
								echo "</table>";
							
								
							  }
								
								
							?>     
                  </div>
              </li>
			  <li>
                <div class="collapsible-header green-text text-darken-1">2.City - Soil Type</div>
                <div class="collapsible-body"><?php
								if(!isset($_SESSION)) { session_start(); }
								{include("dbconnection.php");

						
							$sql1 = "SELECT * FROM ares.soil";
							  $qsql1 = mysqli_query($con,$sql1);
							  echo "<table class='center'>
										<tr>
										<th>S.No</th>
										<th>City</th>
										<th>Soil Type</th>
										
										
										</tr>";
								$cnt=1;
							  while($rs = mysqli_fetch_array($qsql1))
							  {
								  echo "<tr>";
								   echo "<td>".$cnt."</td>";
								  echo "<td>".$rs[city]."</td>";
								  echo "<td>".$rs[Stype]."</td>";
								 
								  echo"<td>";

							  

								  echo "</tr>";
								  $cnt=$cnt+1;
							  }
								echo "</table>";
							
								
							  }
								
								
							?>     
                  </div>
              </li><li>
                <div class="collapsible-header green-text text-darken-1">3.Soil - Moisture</div>
                <div class="collapsible-body"><?php
								if(!isset($_SESSION)) { session_start(); }
								{include("dbconnection.php");

						
							$sql1 = "SELECT * FROM ares.moisture";
							  $qsql1 = mysqli_query($con,$sql1);
							  echo "<table class='center'>
										<tr>
										<th>S.No</th>
										<th>Soil Type</th>
										<th>Moisture</th>
										
										
										</tr>";
								$cnt=1;
							  while($rs = mysqli_fetch_array($qsql1))
							  {
								  echo "<tr>";
								   echo "<td>".$cnt."</td>";
								  echo "<td>".$rs[Stype]."</td>";
								  echo "<td>".$rs[moist]."</td>";
								  
								  echo"<td>";

							  

								  echo "</tr>";
								  $cnt=$cnt+1;
							  }
								echo "</table>";
							
								
							  }
								
								
							?>     
                  </div>
              </li><li>
                <div class="collapsible-header green-text text-darken-1">4.Crop - Rate</div>
                <div class="collapsible-body"><?php
								if(!isset($_SESSION)) { session_start(); }
								{include("dbconnection.php");

						
							$sql1 = "SELECT * FROM ares.crop_cal";
							  $qsql1 = mysqli_query($con,$sql1);
							  echo "<table class='center'>
										<tr>
										<th>S.No</th>
										<th>Crop</th>
										<th>Harvest days</th>
										<th>Rate</th>
										<th>Yield</th>
										
										</tr>";
								$cnt=1;
							  while($rs = mysqli_fetch_array($qsql1))
							  {
								  echo "<tr>";
								   echo "<td>".$cnt."</td>";
								  echo "<td>".$rs[crop]."</td>";
								  echo "<td>".$rs[day]."</td>";
								  echo "<td>".$rs[rate]."</td>";
								  echo "<td>".$rs[yield1]."</td>";
								  echo"<td>";

							  

								  echo "</tr>";
								  $cnt=$cnt+1;
							  }
								echo "</table>";
							
								
							  }
								
								
							?>     
                  </div>
              </li>
			  <li>
                <div class="collapsible-header green-text text-darken-1">5.Weedicide</div>
                <div class="collapsible-body"><?php
								if(!isset($_SESSION)) { session_start(); }
								{include("dbconnection.php");

						
							$sql1 = "SELECT * FROM ares.weedicide";
							  $qsql1 = mysqli_query($con,$sql1);
							  echo "<table class='center'>
										<tr>
										<th>S.No</th>
										<th>Crop</th>
										<th>Weedicide</th>
										<th>Product Link</th>
										
										
										</tr>";
								$cnt=1;
							  while($rs = mysqli_fetch_array($qsql1))
							  {
								  echo "<tr>";
								   echo "<td>".$cnt."</td>";
								  echo "<td>".$rs[crop]."</td>";
								  echo "<td>".$rs[weedicide]."</td>";
								  echo "<td>".$rs[link]."</td>";
								 
								  echo"<td>";

							  

								  echo "</tr>";
								  $cnt=$cnt+1;
							  }
								echo "</table>";
							
								
							  }
								
								
							?>     
                  </div>
              </li>
			  <li>
                <div class="collapsible-header green-text text-darken-1">6.Fertilizer</div>
                <div class="collapsible-body"><?php
								if(!isset($_SESSION)) { session_start(); }
								{include("dbconnection.php");

						
							$sql1 = "SELECT * FROM ares.fertilizer";
							  $qsql1 = mysqli_query($con,$sql1);
							  echo "<table class='center'>
										<tr>
										<th>S.No</th>
										<th>Crop</th>
										<th>Fertilizer</th>
										<th>N</th>
										<th>P</th>
										<th>K</th>
										<th>S</th>
										<th>FYM</th>
										
										</tr>";
								$cnt=1;
							  while($rs = mysqli_fetch_array($qsql1))
							  {
								  echo "<tr>";
								   echo "<td>".$cnt."</td>";
								  echo "<td>".$rs[Ctype]."</td>";
								  echo "<td>".$rs[Fname]."</td>";
								  echo "<td>".$rs[N]."</td>";
								  echo "<td>".$rs[P]."</td>";
								  echo "<td>".$rs[K]."</td>";
								  echo "<td>".$rs[S]."</td>";
								  echo "<td>".$rs[FYM]."</td>";
								  echo"<td>";

							  

								  echo "</tr>";
								  $cnt=$cnt+1;
							  }
								echo "</table>";
							
								
							  }
								
								
							?>     
                  </div>
              </li>
          
              
            </ul>
          </div>
        </div>  
      </div>    
      <footer id="footer" >
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
      </footer> 
    </footer>
  <script src="js/materialize.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function(){
        let faq_1 = document.querySelector(".collapsible");
        M.Collapsible.init(faq_1,{});
      });
    </script>
  </body>
</html>   
