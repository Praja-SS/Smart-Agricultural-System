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
 
  <style>
 

p {
   /* margin: 0 auto; */
    text-align: left;
    text-indent: 15em;
    /* right: 20px; */
    margin-left: 35px;
    margin-right: 0px;
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
          <h3 class="center">SUGARCANE</h3><br>
		  <img class="responsive-img" src="sugarcane.jpg" style="width:300px;height:200px;">
		 </div>
         <!-- insert content -->
        <p>
          <br> <b>Introduction:</b> <br>
		  Sugarcane belongs to bamboo family of plants and is indigenous to India. It is the main source of sugar, gur and khandsari. About two-thirds of the total sugarcane produced in India is consumed for making gur and khandsari and only one third of it goes to sugar factories. It also provides raw material for manufacturing alcohol.
<br> <b> Conditions of growth:</b>It is a long duration crop and requires 10 to 15 and even 18 months to mature, depending upon the geographical conditions. It requires hot and humid climate with average temperature of 21°-27°C and 75-150 cm rainfall.
In the latter half, temperature above 20°C combined with open sky helps in acquiring juice and its thickening. Too heavy rainfall results in low sugar content and deficiency in rainfall produces fibrous crop. Irrigation is required in areas receiving lesser rainfall than the prescribed limit. Short cool dry winter season during ripening and harvesting is ideal.

Frost is detrimental to sugarcane. Therefore, it must be harvested before frost season, if it is grown in northern parts of the country where winters are very cold and frost is a common phenomenon. On the other hand, hot dry winds are also inimical to sugarcane.

It can grow on a variety of soils including loams, clayey loams, black cotton soils, brown or reddish loams and even laterites. In fact, sugarcane can tolerate any kind of soil that can retain moisture. But deep rich loamy soils are ideal for its growth.

The soil should be rich in nitrogen, calcium and phosphorus but it should not be either too acidic or too alkaline. Sugarcane exhausts the fertility of the soil quickly and extensively and its cultivation requires heavy dose of manures and fertilizers.-Flat plain or level plateau is an advantage for sugarcane cultivation because it facilitates irrigation and transportation of cane to the sugar mills.
<br> <b>seed treatment:</b> The availability of good quality cane seed materials (setts) from a nursery crop of 10-11 months are essential for better germination and good growth. The treatments included were namely control, 0.05% Bavistin, 2.5% Urea, 2.5% KCI, 2.5% KCI+Urea, 1% Hadron. Two budded setts were used for planting after treating with above chemicals. Also hot water treatment is given to prevent seed borne diseases.
<br> <b>sowing:</b> Planting of sugarcane is done in three seasons that is suru- January-February, adsali - July-August and pre seasonal- October-November for planting generally ridges and furrows are prepared on 100-120cm spacing. For planting one hectare area 25-30 thousand three eye buded cane setts are required.
<br> <b> Fertilizer:</b> Adequate manuring is essential for sustained high yields. The general recommendation in most places is to apply half to two-thirds of the nitrogen in the form of bulky organic manures, such as farmyard manure, compost, green manure or tree leaves, and the remainder in the form of ammonium sulphate or oil-cakes or a combination of the two. For sugarcane fertilizer is recommended according to planting season and it is varied from growing tract to tract. In general for suru sugarcane 250:115:115 for Adsali 400:170:170 and for pre seasonal 340:170:170 kg nitrogen, phosphorus and potash per hectare is recommended respectively. For ratooning 250:115:115kg nitrogen, phosphorus and potash per hectare is recommended.
<br> <b>Irrigation:</b> Water requirement of sugarcane varies from 2000 to 2500 mm depending upon its duration, soil type and climatological factors. For sugarcane germination, tillering, grand growth and maturity are the critical stages for irrigation. During germination phase (1-35 days) there should be enough moisture in the soil for better germination but waterlogging is undesirable as it leads to rotting of setts. During this period irrigation can be scheduled at weekly intervals. But irrigation at 10 days interval during tillering stage (36-100 days) is sufficient. The formative and grand growth stages (101-270 days) are the critical stages for water demand. During this period irrigation can be practised at weekly intervals. At the maturity phase (271 days to harvest) fortnightly irrigation is enough. Irrigation will have to be stopped at 15 days prior to harvest.
<br> <b>Harvesting and yield:</b>
<b> Assessing the maturity of the cane crop:</b> <br>
The maturity of sugarcane is generally recognized by the lower leaves gradually withering up and leaving progressively fewer green leaves at the top. A ripe cane, out across with a sharp knife, shows against sunlight a slight sparkling in its flesh in contrast to the more watery cut surface of an unripe cane. If the grower can keep and use a hand sugar refractometer, the testing of maturity would be easier. The hand refractometer reading of 20, the cane crop may be considered to have reached the stage of maturity. Small Mill Test (SMT) will be a real solution for this perennial problem. For conducting SMT, few canes (say about 10 canes) have to be cut from the field and the samples are analyzed after crushing the cane in a small mill for poll, brix, purity and ccs% in the laboratory which clearly gives the maturity status of the cane.
<br> <b>Harvesting system and harvesting unit:</b>The Cooperative generally begins the sugarcane harvest about the first of November and continues for an average of 150 days. The sugarcane harvest is timed and coordinated undertaking to allow for maximum utilization of the mill's grinding capacity. At present the harvesting and supply of sugarcane is done by the farmers after receiving the cutting orders from the factory authorities. The cutting orders are issued depending upon the date of planting as found in the records and agreement between the farmers and factory. This system will not hold good, as uniform maturity of the cane crop can’t be controlled even by planting early maturing varieties in the early season. In a typical harvesting unit, three or four harvesters operate in tandem with six to eight tractors and strings of wagons. The huge machines contain rotating knives, which cut the sugarcane at the base of the stalk. The cane tops are also cut off by rotating knives and the excess foliage is removed by giant extraction fans. As the sugarcane passes through the harvester, it is cut into 12-inch lengths called billets and then put into in-field wagons. The sugarcane is then hauled to near-by transfer stations and loaded into semi-trailers for delivery.
<br> <b> yield:</b>The average yield of a 11 to 12 month-old plant crop under commercial cultivation is 100 tonnes per hectare in case of suru, 170 tonnes per hectare for Adsali and 120 tonnes per hectare in case of pre seasonal sugarcane.
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