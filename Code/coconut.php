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
  <title>Coconut</title>
  <style>

p {
   /* margin: 0 auto; */
    text-align: left;
    text-indent: 15em;
    /* right: 20px; */
    margin-left: 35px;
    margin-right: 0px;
}
@media screen and (max-width: 380px) {
#page-container {
  position: relative ;
  min-height: 680vh  ;
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
          <h3 class="center">COCONUT</h3><br>
		  <img class="responsive-img" src="coconut.jpg" style="width:400px;height:200px;">
		 </div>
         <!-- insert content -->
        <p>
          <br>
		
<b>Introduction:</b>  <br> The coconut (cocos nucifera L.) is a Tropical fruit plant grown on a large scale in a number of countries in tropical and sub-tropical areas. The place of origin though contradictory, is believed to be somewhere in South Asia –Malaysia. In India, coconut palms are grown on the entire coastal belt. Major share goes to Kerala, Karnataka and Tamil Nadu followed by Goa, Maharashtra, Andhra Pradesh, and Orissa.

<b>Importance:</b>  <br> Every part of the coconut palm is useful to mankind. It supplies food, fuel, drink, oil and shelter to us. The wet kernel, desicated copra, coconut water, cream flour, oil, cake, toddy, husk, fibre, shell, coir, wood and leaves are used for one purpose or the other.

<br> <b>Climate:</b>  The coconut palm grows well in a equatorial climate. The long spells of hot and dry weather, severe winters and extremes of temperatures are not favourable for coconut growing. However, it thrives well upto 1000 m above the sea level. The well distributed rainfall ranging from 100 to 300 cm is favourable.

<br> <b>Soil:</b> The coconut palm can grow in a wide range of soil conditions ranging from laterite, alluvial, red, sandy loam having pH range from 5.5 to 8.0. Soil should be fertile and good drainage without any hard substratum within one of the surface.

<br> <b>Varieties :</b> There are number of varieties grown in different parts, which are classified as under:-

 <br> <b>Tall varieties :-</b> <br>

West Coast Tall <br>

Lakshadweep <br>

Andaman <br>

Kappadam <br>

Laguna <br>

San Raman <br>

<b>Dwarf varieties:</b> <br>

Chowghat – Dwarf green, <br>

Dwarf orange <br>

Malayon Dwarf <br>

Mangipod <br>

Hybrid varieties <br>

T X D <br>

D X T <br>

Selections- Pratap, Banoli, etc. <br>

<b>Propagation:</b> The coconut palm is commonly propagated by seeds. Since the productivity of the palm depends on the quality of the seedlings, utmost importance should be given to select the best nuts. The mother palms should be regular bearers giving annual yield of more than 100 nuts with the copra content of 150 g per nut. The mother palm should be within the age group of 20 to 40 years. These palms producing barren nuts and shedding immature nuts in large number should be discarded for the nursery purpose.

<br> <b>Planting</b> The planting distance depends on the type of plant or variety, soil type and weather monoculture or associated culture or mixed culture is adopted, distance should be in such a way that the fronds (leaves) of planting adjacent palms to do not overlap when fully grown. The spacing maybe 7 to 8 m both ways for tall varieties. Well developed and well grown seedlings about 1 to 2 years old should be selected for planting. The planting should be done on onset of monsoon for which the pits of 0.75 x 0.75 x 0.75 m should be opened and filled with a mixture of compost, bone meal, super phosphate, well before the monsoon.

<br> <b>Interculturing:</b> Weeding and stirring the soil around the plant should be done frequently. The interspace may be kept clean or utilised for taking other crops, seasonals or perennials.

<br> <b>Care of young plants:</b> The young palms need proper care during the early stages of growth from transplanting upto 5th year. The seedlings should be protected from stray cattle. During summer months, shade and frequent watering must be provided to the young palms to avoid casualties. The care should be taken to see that the collar and leaf axils of the seedlings are not covered by mud, water or soil.

<br> <b>Special horticulture practices:</b> The dwarf varieties are considered on self-pollinating while tall varieties are considered cross pollinating inter planting of mix planting be done to increase the fruit set. Honey bees are considered to be very useful for pollination and be rared in the viscinity of palm cultures.

<br> <b>Irrigation:</b> The coconut palm requires large quantities of water for its normal growth and timely production. In normal conditions and in absence of rains every palm needs about 16-18 litre water daily. Regular irrigation helps to increase the fruit set, improve size and copra content. However, stagnation of water and ill drained conditions should be strictly avoided.

<br> <b>Nutrition:</b> To get a good yield, palms should be fertilized regularly and with a quick frequency, Bimonthly applications are more beneficial. Every well grown palm should be applied with 25 kg. Of FYM 1 kg of 5:10:5. Micronutrients/Ormichem @ 2 kg/palm once in a year should be applied to avoid any micro-nutrient disorders.

<br> <b>Plant protection:</b> Important pests, Rhinocerous beetle, Red palm weevil, leaf eating caterpillar and cockchafer beetle are the major insect pests. Occassionally mealy bug, rat and slug also become trouble some. Bud rot and leaf rot and root wilt can cause severe damage to palms. One should be very alert to notice the symptoms of any post and take the suitable control measures. Close planting should be avoided plantation should be kept weed free and clean. The palms should be cleared off at least once in a year. Providing a good drainage and feeding the palms with balanced nutrition is useful to keep palms healthy.

<br> <b>Harvesting and yield:</b> The well developed nuts should be harvested one month earlier to full maturity. Harvesting of nuts is a skilled and risky job. 2 to 6 harvestings can be done yearly. Average 80 to 100 nuts are harvested per tree/year.

<br> <b>Post harvest handling and sale:</b> The nuts are hardy and can be kept for a long time. Nuts harvested at less than 9 months age will be dried spoiled or without or very thin layer of copra. Copra is removed and then processed for different purposes or dried and stored and sold as dry copra.
 
			
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