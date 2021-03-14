 <?php 
 if(!isset($_SESSION)) { session_start(); }


include("dbconnection.php");

$_SESSION[randnumber] = $randnumber;
if(isset($_SESSION[id]))
{
	$sql = "SELECT * FROM ares.register  WHERE id='$_SESSION[id]'";
	$qsql = mysqli_query($con,$sql);
	$rsedit = mysqli_fetch_array($qsql);
	$sql1 = "SELECT * FROM ares.crop_cal WHERE crop_cal.crop='rsedit[crop]'";
	$qsql1 = mysqli_query($con,$sql1);
	$rsedit1 = mysqli_fetch_array($qsql1);
}


extract($_POST);
if(isset($save))
{
$res = round((($pl*4046.856)/($rs*$ps)));
	
}


							if(!isset($_SESSION)) { session_start(); }
								include("dbconnection.php");

								$_SESSION[randnumber] = $randnumber;
								if(isset($_SESSION[id]))
								{
								$sql11 = "SELECT * FROM ares.crop_cal where crop='$rsedit[crop]'  ";
							  $qsql11 = mysqli_query($con,$sql11);
							  
							 $rs1 = mysqli_fetch_array($qsql11);
							  
								
							  }
								
							

$date=date_create($rsedit[date_sow]);
date_add($date,date_interval_create_from_date_string("$rs1[day] days"));
$date1= date_format($date,"Y-m-d");
$turnover = ($rs1[rate]* $rs1[yield1]);
?>
<!DOCTYP html>
<html>
	<head><meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="sidenave.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	<title>Crop Calculator</title>		
	</head>
	<style>
	p {
   /* margin: 0 auto; */
    text-align: center;
    text-indent: 15em;
    /* right: 20px; */
    margin-left: 50px;
    margin-right: 0px;
	}
	table{
		width:60%;
	}
	section1 {
  text-align: justify;
  text-justify: inter-word;
}
	}
	</style>
	<body>
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
		  
	<section class="center" >
	<h5  ><span class="green-text">Area :</span> <?php echo $rsedit[city]; ?></h5>
	<?php
	if ($rsedit[crop]=="")
	{
	echo "<h5>";echo "Crop : Crop Not Selected"; 
	echo "</h5>";
	}
	else
	{
	echo "<h5>";echo "<span class='green-text'>Crop :    </span>"; echo $rsedit[crop]; echo"</h5>";
	if($rsedit[date_sow]=="")
	{
		echo "<h5>"; echo "<span class='blue-text'>Harvest Date(approx)</span> :<span class='red-text'> Date of Sowing Not inputed <span>";  echo"</h5>";
	}
	else
	{
		echo "<h5>"; echo "<span class='blue-text'>Harvest Date(approx)</span> :  "; echo $date1; echo"</h5>";
	}
	echo "<h5 >"; echo "<span class='blue-text'>Market rate(Rs per Kg)</span> :  "; echo $rs1[rate]; echo "</h5>";
	echo "<h5>"; echo "<span class='blue-text'>Turnover per acre(Rs)</span> :   "; echo $turnover; echo "</h5>";
	}
	
?>
</section>
<br><br>
		<form method="post">
		<h4 class="center"><b>CROP POPULATION CALCULATOR</b></h3>
		<table  border="1" align="center">
			
			
			<tr>
				<th class="green-text"><h5>Enter Plant area (in acre) : </h5></th>
				<th><input type="number" step="0.01" min="0" name="pl" value="<?php  echo @$pl;?>"/></th>
			</tr> 
			<tr>
				<th class="green-text"><h5>Enter Row spacing (in m) : </h5> </th>
				<th><input type="number" step="0.01" min="0" name="rs" value="<?php  echo @$rs;?>"/></th>
			</tr>
			<tr>
				<th class="green-text"><h5>Enter Plant spacing (in m) : </h5></th>
				<th><input type="number" step="0.01" min="0" name="ps" value="<?php  echo @$ps;?>"/></th>
			</tr>
			<tr>
			</table>	<br>
			<br>
			<section>
				<center>
				<button class=" black green-text waves-effect waves-light btn submitbtn" 
				type="submit"  name="save" value="Calculate">Calculate</button>
				</center>
			</section> <br> <br>
			<section >
				<h5 class="indigo-text center"><b>PLANT POPULATION :  </b><?php  echo @$res;?> (crops/acre) </h5> 
			</section> 
		
		</form>
		</div>
		</div>
		  
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