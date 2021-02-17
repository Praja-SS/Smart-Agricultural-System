<?php 
include("fa11.php");
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="sidenav1.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <title>Crop selection</title>
  <style>
p {
	
   /* margin: 0 auto; */
    text-align: left;
    
    /* right: 20px; */
    margin-left: 325px ;
   
}
}
@media screen and (max-width: 995px) {
  p{
    margin-left:30px ;
   
  }

}
@media screen and (max-width: 650px) {
  p{
    margin-left:50px ;
   
  }

}


 table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 75%;
  margin-left:15%; 
   margin-right:15%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #90ee90;
}
 
  </style>
</head>
<body>

    <!-- navbar -->
  <header>
    <div class="nav-extended">
      <nav style="min-height: 100px ">
        <nav class="nav-wrapper black ">       
          <a href="#" class="brand-logo green-text"><h5 ><span>SMART AGRICULTURE SYSTEM</span></h5></a> 
          <a href="#" class="sidenav-trigger" data-target="mobile-links"><i class="material-icons">menu</i></a>
          <a href="#" data-target="sidenav-1" class="left sidenav-trigger hide-on-medium-and-up">
          <ul class="right hide-on-med-and-down">
            <li><a href="main.php"><i class="material-icons green-text right">home</i><span>Home</span> </a></li>
            <li><a href="faq.php"><i class="material-icons green-text right">forum</i><span>FAQ</span></a></li>
            <li><a href="news.php"><i class="material-icons green-text right">notes</i><span>News</span></a></li>
            <li><a href="soc_eco2.php"><i class="material-icons green-text right">account_balance</i><span>Socio-economy</span></a></li>
          </ul>       
        </nav>
      </nav>
    </div>
  </header>

  <ul class="sidenav" id="mobile-links">
        <li><a href="main.php">Home</a></li>
        <li><a href="login.php">Farmer account</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="soc_eco2.php">Socio-economy</a></li>
        <li class="divider"></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="update1.php">Update profile</a></li>
        <li><a href="changepass.php">Change password</a></li>         
        <li><a href="logout.php">Logout</a></li>     
        <li class="divider"></li>
		<li class="white"><a href="cropselection.php" class="waves-effect waves-blue"> Crop Selection</a></li>
    <li class="white"><a href="calc1.php" class="waves-effect waves-blue"> Crop Calculator</a></li>
      <li class="white"><a href="index_chat.php" class="waves-effect waves-blue"> Chat Room</a></li>
		<li class="white"><a href="http://127.0.0.1:8000/" class="waves-effect waves-blue"> Plant disease detector </a></li>
<li class="white"><a href="landprep.php" class="waves-effect waves-blue"> Land Peparation</a></li>
		<li class="white"><a href="varieties.php" class="waves-effect waves-blue"> Varieties</a></li>
		<li class="white"><a href="sowing.php" class="waves-effect waves-blue"> Sowing</a></li>
		<li class="white"><a href="fertilizer.php" class="waves-effect waves-blue"> Manure and Fertilizers</a></li>
		<li class="white"><a href="weedicide.php" class="waves-effect waves-blue"> Weedicides</a></li>
		<li class="white"><a href="irrigate.php" class="waves-effect waves-blue"> Irrigation</a></li>
        <li class="white"><a href="harvest.php" class="waves-effect waves-blue"> Harvesting</a></li>
        <li class="white"><a href="exp.php" class="waves-effect waves-blue"> Explore</a></li>
  </ul>
 <!-- side navbar -->
  <ul id="sidenav-1 grey darken" class="sidenav sidenav-fixed">
    <li class="sidenav-header green">
      <div class="row">
          <div class="col s8">
            <a href="#" class="dropdown-trigger btn-flat waves-effect waves-light white-text" data-target="dropdown" data-activates="dropdown">
             <?php echo $rsedit[farmername]; ?> <i class="material-icons">arrow_drop_down</i></a>
            <ul id="dropdown" class="dropdown-content">
              <li><a href="profile.php"><i class="material-icons">person</i>Profile</a></li>
              <li><a href="update1.php"><i class="material-icons">create</i>Update profile</a></li>
              <li><a href="changepass.php"><i class="material-icons">help</i>Change password</a></li>
              <li class="divider"></li>
              <li><a href="logout.php"><i class="material-icons">power_settings_new</i>Logout</a></li>
          </ul>
        </div>
      </div>
    </li>
<li class="white"><a href="cropselection.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Crop Selection</a></li>
<li class="white"><a href="calc1.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Crop Calculator</a></li>
<li class="white"><a href="index_chat.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">chat</i> Chat Room</a></li>
	<li class="white"><a href="http://127.0.0.1:8000/" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">find_in_page</i>Plant disease detector</a></li>
<li class="white"><a href="landprep.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Land Peparation</a></li>	
    <li class="white"><a href="varieties.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Varieties</a></li>
	<li class="white"><a href="sowing.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Sowing</a></li>
	<li class="white"><a href="fertilizer.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Manure and Fertilizers</a></li>
	<li class="white"><a href="weedicide.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Weedicides</a></li>
	<li class="white"><a href="irrigate.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Irrigation</a></li>
	<li class="white"><a href="harvest.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Harvesting</a></li>
	<li class="white"><a href="exp.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">explore</i> Explore</a></li>
  </ul>

<div id="page-container">
  <div class="content">
      <div id="content-wrap">
          <!-- all other page-content -->
        <div class="section center">
		      <h2 class="center"><b>CROP SELECTION</b></h2><br><br>
          <h4 class="center"><span class="green-text">Area</span>  :  <?php echo $rsedit[city]; ?></h4><br><br>
		      <img class="responsive-img" src="sh.jpg" style="width:400px;height:200px;"><br><br>
		      <h5 class="center"><b>SOIL</b></h5>
		    </div>
         <!-- insert content -->
		 <form method="post" action="fa1.php" name="farmerprofile" >
                    <input type="hidden" name="randnumber" value="<?php echo $randnumber; ?>" >
					<div class="container">
							<?php
							if(!isset($_SESSION)) { session_start(); }
								include("dbconnection.php");

								$_SESSION[randnumber] = $randnumber;
								if(isset($_SESSION[id]))
								{
								$sql1 = "SELECT Stype,moist FROM ares.soil natural join ares.moisture where city='$rsedit[city]'  ";
							  $qsql1 = mysqli_query($con,$sql1);
							  echo "<table class='center'>
										<tr>
										<th>SOIL TYPE</th>
										<th>MOISTURE</th>
										</tr>";
							  while($rs = mysqli_fetch_array($qsql1))
							  {
								  echo "<tr>";
								  echo "<td>".$rs[Stype]."</td>";
								  echo "<td>".$rs[moist]."</td>";
								  echo "</tr>";
							  }
								echo "</table>";
							
								
							  }
								
							?>
              </div>
							<br><br>
              <div class="container">
							<h5 class="center"><b>CROPS</b></h5><br>
							<?php
							if(!isset($_SESSION)) { session_start(); }
								include("dbconnection.php");

								$_SESSION[randnumber] = $randnumber;
								if(isset($_SESSION[id]))
								{
								$sql11 = "SELECT crop FROM ares.crop_area where city='$rsedit[city]'  ";
							  $qsql11 = mysqli_query($con,$sql11);
							  echo "<table class='center'>
										<tr>
										<th>Sutiable Crops</th>
										
										</tr>";
							  while($rs1 = mysqli_fetch_array($qsql11))
							  {
								  echo "<tr>";
								  echo "<td>".$rs1[crop]."</td>";
								 
								  echo "</tr>";
							  }
								echo "</table>";
							
								
							  }
								
							?>
							<br><br>
		      </div>
						
                    </form>
                   
                    
					<form method="post" action="facs.php">
					<h5 class="center"><b>SELECT YOUR CROP</b></h5><br>
           <div class="container">
					<?php
							if(!isset($_SESSION)) { session_start(); }
								include("dbconnection.php");

								$_SESSION[randnumber] = $randnumber;
								if(isset($_SESSION[id]))
								{
                  $sql11 = "SELECT crop FROM ares.crop_area where city='$rsedit[city]'  ";
                  $qsql11 = mysqli_query($con,$sql11);
                  
                  while($rs1 = mysqli_fetch_array($qsql11))
                  {
                    echo "<p>";
                    echo "<label>";
                    echo "<input type='radio' name='crop' value='$rs1[crop]'>";
                    echo "<span>".$rs1[crop]."</span>";
                    echo "<label>";
                    echo "</p>";
                  
                  
                  }						
							  }
								
							?>
              </div>
							<br><br>
							<section>
                  <center>
              <button class=" black green-text waves-effect waves-light btn submitbtn" type="submit"  name="submit"  value="Choose">CHOOSE</button>
                  </center>
              </section>
						</form>
            	
             
						<div class="section center">
			<br><br>
          <h4 class="center"><span class="green-text">Crop Selected </span> :   <?php echo $rsedit[crop]; ?></h4><br><br>
		      
		    </div>
			
			 <form method="post" action="fa3.php" >
       <h5 class="center"><b>SET THE DATE OF SOWING</b></h5>
       <br><br>
                <table>
				<tbody>
					<tr>
					      
						<th>Date of Sowing:</th>
						<th><input type="date" name="date1" value= <?php echo $rsedit[date_sow];?> > </th>
 
					</tr>
					</tbody>
              </table>
              <br><br>
              <section>
                  <center>
                   
				   <button class=" black green-text waves-effect waves-light btn submitbtn" type="submit"  name="submit" id="submit" value="Submit">Set</button></center>
			  
			  </section>
			  
          </form>
              </div>
            </div>
<br><br><br><br><br><br><br>
  <footer id="footer" >
    <footer class="page-footer black ">
      <div class="container">
        <div class="row">
          <div class="col  l6 s12  ">
            <ul >
              <li><a class="green-text text-lighten-3 text-indent:"-5em";" href="aboutus.php">About us</a></li>
              <li><a class="green-text text-lighten-3" href="contactus.php">Contact us</a></li>
              
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright green darken-4 ">
          <div class="container center">Copyright &copy; 2020 Developed By ARES</div>
        </div>
      </footer> 
    </footer>
  </div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
  $(document).ready(function(){
    $('.modal').modal();
$('.dropdown-trigger').dropdown();
$('.sidenav').sidenav();
});
  </script>

  </body>
  </html>