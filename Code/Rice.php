<?php 
include("fa1.php");
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
  <link rel="stylesheet" href="sidenave.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <title>rice</title>
  <style>

p {
   /* margin: 0 auto; */
    text-align: left;
    text-indent: 15em;
    /* right: 20px; */
    margin-left: 35px;
    margin-right: 0px;
}
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
	<li class="white"><a href="calc1.php" class="waves-effect waves-blue"><i class="material-icons right style="margin-right:0;">keyboard_arrow_right</i>Crop Calculator</a></li>
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
          <h3 class="center">RICE</h3><br>
		  <img class="responsive-img" src="rice.jpg" style="width:300px;height:200px;">
		 </div>
         <!-- insert content -->
        <p>
          <br>
          <b>Introduction:</b><br>
                Rice is a main staple in more than 100 countries worldwide.In some households, rice is included with more than one meal a day. This starchy high-calorie grain is generally low cost, making it accessible to all and a vital base of many diets. <br><br>
	         <b>Climate and soil:</b><br>
                Rice is a crop of tropical climate. However, it is also grown successfully in humid to sub-humid regions under subtropical and temperate climate. Rice is cultivated in almost all types of soils with varying productivity. Under high temperature, high humidity with sufficient rainfall and irrigation facilities, rice can be grown in any type of soil. The major soil groups where rice is grown are riverine alluvium, red-yellow, red loamy, hill and sub-montane, Terai, laterite, costal alluvium, red sandy, mixed red and black and medium and shallow black soils.<br><br>
            <b>Yield:</b><br>
                  1.0-1.5 t/ha<br><br>
            <b>Plant Protection:</b><br>
                <i>Blast</i>: Above ground parts of the rice plant (leaves,  nodes and neck) are attacked by the fungus.   Initial symptoms are white to gray-green lesions or spots with brown borders. Small specks originate on leaves - subsequently enlarge into spindle shaped spots (0.5  to 1.5 cm length and 0.3 to 0.5 cm width) with ashy center. To prevent avoid dry nurseries. Avoid late planting. Burning of straw and stubbles after harvest.<br>
                <i>Brown Spot</i>:Brown Spot is called as sesame leaf spot or Helminthosporiosis, attacks seedling in nursery to milky stage in main field. The disease appears first as minute brown dots later becoming cylindrical or oval to circular (resemble sesame seed). Spots measures 0.5 to 2.0 mm in breadth - coalesce to form large patches leads to leaf dries up. Seed treatment with Pseudomonas fluorescens @ 10g/kg of seed followed by seedling dip (select 25 sq.m areas at one corner in the main field, stagnate water upto a depth of 2.5 cm and dissolve 2.5 kg of P. fluorescens. In this stagnated water, dip 20 cent nursery seedling for 30 minutes and transplant.<br><br>
            
		</p>
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