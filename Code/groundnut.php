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
  <title>groundnut</title>
  <style>

p {
   /* margin: 0 auto; */
    text-align: left;
    text-indent: 15em;
    /* right: 20px; */
    margin-left: 35px;
    margin-right: 0px;
}
@media screen and (max-width: 580px) {
#page-container {
  position: relative ;
  min-height: 580vh  ;
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
          <h3 class="center">GROUND NUT</h3><br>
		  <img class="responsive-img"src="groundnut.jpg" style="width:400px;height:200px;">
		 </div>
         <!-- insert content -->
        <p>
          <br>
          <b>Introduction:</b>Groundnut (Arachis hypogaea L.) is important oilseed crop and oil content of the seed varies from 44-50%, depending on the varieties and agronomic conditions. It is also used in soap making, and in manufacturing cosmetics and lubricants, olein, stearin and their salts. Kernels are also eaten raw, roasted or sweetened. They are rich in protein and vitamins A, B and members of the B2 group. The cake can be used for manufacturing artificial fibre. The haulms are fed (green, dried or silaged) to livestock. Groundnut shell is used as fuel for manufacturing coarse boards, cork substitutes etc. Groundnut is also of value as a rotation crop. The production are concentrated in the four states of Gujarat, Andhra Pradesh, Tamil Nadu and Karnataka. Andhra Pradesh, Tamil Nadu, Karnataka and Orissa have irrigated areas.
          <br> <b>Climate:</b> The crop can be grown successfully in places receiving a minimum rainfall of 500mm and a maximum rainfall of 1,250mm. The rainfall should be distributed well during the flowering and pegging of the crop. The groundnut cannot stand frost, long and severe drought or water stagnation.
          <br> <b> Soil:</b>The crop does best on sandy loam and loamy soils and in black soils with good drainage. Heavy and stiff clays are unsuitable for groundnut cultivation as the pod development is hampered in these soils.
            <br>Cultivation <b></b>For a kharif crop, with the onset of rains in May-June, the field is given two ploughing and the soil is pulverized well to obtain a good tilth. Harrows or tiller can be used for cultivation. If a field is infested with white grubs, chemicals, such as Heptachlor or Chlordane, are drilled at the rate of 25kg per ha. before final harrowing. For the irrigated crop, beds of convenient size may be made, depending upon the topography of the land, the nature of the irrigation source and the mode of lifting water.
            <br> <b>Sowing:</b>Groundnut is raised mostly as a rainfed kharif crop, being sown from May to June, depending on the monsoon rains. It is sown as late as August or early September. As an irrigated crop it is grown to limited extent between January and March and between in May and July. Well-filled kernels should be selected and treated with 5g of Thiram or 3g of Captan per kg of kernels. The quantity of well-developed seeds required per hectare about 110 kg for semi spreading and spreading varieties and 120kg for the bunch varieties. The kharif crop is sown with a seed drill or with a suitable planter at a depth of 8-10 cm. for semi spreading and spreading varieties, the spacing between at he adjacent rows varies for m30-60cm and within the row from 10-15cm. For the rainfed bunch groundnut the inter-row spacing vary between 20 and 30cm and the intra-row spacing between 10 and 20cm.
            <br> <b>Fertilizer:</b>Fertilizer recommended for rainfed crop is 6.25 tonnes farmyard manure and 10-25kg nitrogen (N), 20-40kg phosphorus (P2O5) and 20-40kg potash (K2O) per hectare. For irrigated crop 12.5 tonnes farmyard manure and 20-40kg nitrogen (N), 40-90kg phosphorus (P2O5) and 20-40kg potash (K2O) per hectare. The application of nitrogen (N) in two equal splits doses, one before sowing and the other 30 days after sowing. The application of a culture of Rhizobium as seed treatment is beneficial in increasing nodulation and nitrogen fixation. The application of gypsum at 500kg per ha at the pegging stage will enhance pod formation.
        <br> <b>Irrigation:</b>The kharif crop is caught in a long spell of drought, especially at the pod-formation stage, supplemental irrigation is given. For the irrigated groundnut, the frequency of irrigation depends on the soil texture, and the interval between irrigation ranges from 8-12 days. The peg-formation stage is critical.
        <br> <b> Intercultural operations</b>For controlling weeds, and also to keep the soil in a friable condition, the crop should generally receive a hand-weeding and one or two hoeings, with bullock-drawn implements, the first about three weeks after sowing and the second and the third about a fortnight and a month later. No interculture would be done after the pegs have commenced going underground. Earthing up can be done in the case of bunch and semi-spreading types for facilitate the maximum penetration of the pegs into the soil. Weeds can also be controlled effectively with Lasso or Tok-E-25 weedicide at the rate of 5 litres in 500 litres of water per hectare as a pre-emergence soil spray within two days of sowing groundnut.
            <br> <b>Harvesting:</b>The prominent symptoms of maturity are the yellowing of leaves, the shedding of the older leaves, the development of the proper colour of the testa and a dark tint inside the shell. The bunch and semi-spreading varieties are usually harvested by hand pulling when there is adequate moisture in the soil. The spreading types, on the other hand, are harvested by digging or by ploughing or working a blade harrow. The pulled out plants are stacked for a few days for drying and are stripped afterwards.
       
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