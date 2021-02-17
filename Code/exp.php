<?php
include("fa1.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EXPLORE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	<link rel="stylesheet" href="sidenave.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
      	img{
      	 	height: 100% !important;
         }
         @media screen and (max-width: 360px) {
#page-container {
  position: relative ;
  min-height: vh  ;
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
 <li class="white"><a href="cropselection.php" class="waves-effect waves-blue"><i class="material-icons right style="margin-right:0;">keyboard_arrow_right</i>Crop Selection</a></li> 
 <li class="white"><a href="calc1.php" class="waves-effect waves-blue"><i class="material-icons right style="margin-right:0;">keyboard_arrow_right</i>Crop Calculator</a></li> 
 <li class="white"><a href="index_chat.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">chat</i> Chat Room</a></li>
         <li class="white"><a href="http://127.0.0.1:8000/" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">find_in_page</i>Plant disease detector</a></li>
 <li class="white"><a href="landprep.php" class="waves-effect waves-blue"><i class="material-icons right style="margin-right:0;">keyboard_arrow_right</i>Land Prepartion</a></li>
          <li class="white"><a href="varieties.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Varieties</a></li>
          <li class="white"><a href="sowing.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Sowing</a></li>
          <li class="white"><a href="fertilizer.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Manure and Fertiliser</a></li>
          <li class="white"><a href="weedicide.php" class="waves-effect waves-blue"><i class="material-icons right style="margin-right:0;">keyboard_arrow_right</i>Weedicide</a></li>
		  <li class="white"><a href="irrigate.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Irrigation methods</a></li>
          <li class="white"><a href="harvest.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Harvesting</a></li>
          <li class="white"><a href="exp.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">explore</i> Explore</a></li>
  </ul>


  <div id="page-container">
    <div class="content">
        <div id="content-wrap">
	
	
 <div class="carousel carousel-slider" data-indicators="true">
	<a href="Bajra.php" class="carousel-item"><img src="bajra.jpg"></a>
	<a href="banana.php" class="carousel-item"><img src="banana.jpg"></a>
	<a href="bengalgram.php" class="carousel-item"><img src="bengalgram.jpg"></a>
	<a href="brinjal.php" class="carousel-item"><img src="brinjal.jpg"></a>
  <a href="carrot.php" class="carousel-item"><img src="carrot.jpg"></a>
  <a href="castor.php" class="carousel-item"><img src="castor.jpg"></a>
  <a href="chilli.php" class="carousel-item"><img src="chilli.jpg"></a>
  <a href="coconut.php" class="carousel-item"><img src="coconut.jpg"></a>
  <a href="coffee.php" class="carousel-item"><img src="coffee.jpg"></a>
  <a href="coriander.php" class="carousel-item"><img src="coriander.jpg"></a> 
  <a href="cotton.php" class="carousel-item"><img src="cotton.jpg"></a>
  <a href="gingely.php" class="carousel-item"><img src="gingely.jpg"></a>
  <a href="greengram.php" class="carousel-item"><img src="greengram.jpg"></a>
  <a href="greenonion.php" class="carousel-item"><img src="greenonion.jpg"></a>
  <a href="groundnut.php" class="carousel-item"><img src="groundnut.jpg"></a>
  <a href="Jowar.php" class="carousel-item"><img src="jowar.jpg"></a>
  <a href="ladies finger.php" class="carousel-item"><img src="ladies finger.jpg"></a>
  <a href="maize.php" class="carousel-item"><img src="maize.jpg"></a>
  <a href="potato.php" class="carousel-item"><img src="potato.jpg"></a>
  <a href="Ragi.php" class="carousel-item"><img src="ragi.jpg"></a> 
  <a href="redgram.php" class="carousel-item"><img src="redgram.jpg"></a>
  <a href="Rice.php" class="carousel-item"><img src="rice.jpg"></a>
  <a href="rubber.php" class="carousel-item"><img src="rubber.jpg"></a>
  <a href="sugarcane.php" class="carousel-item"><img src="sugarcane.jpg"></a> 
  <a href="tamarind.php" class="carousel-item"><img src="tamarind.jpg"></a>
  <a href="tapioca.php" class="carousel-item"><img src="tapioca.jpg"></a>
  <a href="tea.php" class="carousel-item"><img src="tea.jpg"></a>
  <a href="tomato.php" class="carousel-item"><img src="tomato.jpg"></a>
  <a href="turmeric.php" class="carousel-item"><img src="turmeric.jpg"></a> 
  <a href="wheat.php" class="carousel-item"><img src="wheat.jpg"></a> 
 
  
</div>

 <br>
<center>
 <div class="btn green prev waves-effect">Prev</div>
 <div class="btn green next waves-effect">Next</div>
</center>
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
         $('.carousel').carousel();
 
 
     // function for next slide
         $('.next').click(function(){
             $('.carousel').carousel('next');
         });
     
     // function for prev slide
         $('.prev').click(function(){
             $('.carousel').carousel('prev');
         });
     });
 </script>
 <script>
    $(document).ready(function(){
      $('.modal').modal();
  $('.dropdown-trigger').dropdown();
  $('.sidenav').sidenav();
  });
    </script>
	
</body>
</html>