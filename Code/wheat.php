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
  <title>Wheat</title>
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
          <h3 class="center">WHEAT</h3><br>
		  <img class="responsive-img" src="wheat.jpg" style="width:300px;height:200px;">
		 </div>
         <!-- insert content -->
        <p>
          <br>
		 
           
          <b>Introduction:</b> Wheat (Triticum spp.) occupies the prime position among the food crops in the world. In India, it is the second important food crop being next to rice and contributes to the total foodgrain production of the country to the extent of about 25%. Wheat has played a very vital role in stabilizing the foodgrain production in the country over the past few years.

The origin of the durum wheats was probably in the region of Abyssinia, whereas the whole group of soft wheat, which includes the bread wheats, probably originated in the region of Pakistan, SouthWestern and the Southern parts of mountainous Bokhara.
          <br>  <b>Classification of Indian Wheats:</b> <br>
          <b>1. Emmer Wheat (Triticum dicoccum schub L.) :</b> <br>
This type was reported to be grown in south i.e. Maharashtra, Tamil Nadu and Karnataka. This type is believed to be developed from T. diccoides koru., a wild form. It is also grown in Spain, Italy, Germany and Russia.

<br> <b> 2. Macroni Wheat ( T.durum Desf.) :</b> <br> The durum or macroni wheat, cultivation in India, is considered to be very old. It is a best wheat for drought conditions or under restricted irrigated conditions of Punjab, M.P., Karnataka, Tamil Nadu, Gujarat, West Bengal and H.P. It is used for semolina (suji) preparation.

<br> <b>3. Common Bread Wheat ( T. vulgare Host) :</b> <br>
It is a typical wheat of alluvial soils of Indo-Gangetic plains i.e.Punjab, Uttar Pradesh, Bihar and parts of Rajasthan. The bulk of the Indian crop, therefore, consists of this type.

<br> <b>4. Indian Dwarf Wheat (T.spherococcum Mihi.) :</b> <br>
This belongs to the club wheat of western countries. This is found in limited areas of M.P., U.P., of India and in Pakistan. These are characterised by very short and compact heads having a shorter grains.

<br><b> 5. Triticum aestivum :</b> <br>
This is the type presently grown in India in almost all the wheat growing zones. It is used mainly for bread purpose.
           <br> <b>Land preparation:</b>The wheat crop requires a well-pulverized but compact seed bed for good and uniform germination. Three or four ploughings in the summer, repeated harrowing in the rainy season, followed by three or four cultivations and planking immediately before sowing produce a good, firm seed bed for the dry crop on alluvial soils. For the irrigated crop, the land is given a pre-sowing irrigation (palewa or raund) and the number of ploughings is reduced. Where white ants or other pests are a problem, Aldrin 5% or BHC 10% dust at the rate of 25 kg/ha should be applied to the soil after the last ploughing or before planking.
           <br> <b>Sowing:</b>
          <br> <b>a) Sowing time:</b> <br>
Based on above temperature requirement it has been found that for indigenous wheat last week of October, for long duration dwarf varieties like Kalyansona, Arjun, etc. first fortnight of November and for short duration dwarf wheats like Sonalika, Raj 821 etc. second fortnight is the best sowing time. Under exceptionally late sown condition it may be delayed to latest by 1st week of December beyond which if area is very small transplanting may be practiced.

<br> <b>b) Seed rate:</b> <br>
Generally, a seed rate of 100 kg/ha has been found to be sufficient for most of the varieties like Kalyan Sona, Arjun, Janak, etc.which have moderate tillering and medium sized grains. But a higher seed rate of 125 kg/ha is desirable for late sown wheat and normal sown for varieties like Sonalika, Raj 821 etc. which have bold grains and shy tillering habits.

<br> <b>c) Spacing: </b> <br>
For irrigated, timely sown wheat, a row spacing of 15 to 22.5 cm is followed, but 22.5 cm between the rows is considered to be the optimum spacing. Under irrigated late-sown conditions, a row spacing of 15-18 cm is the optimum. For dwarf wheats, the planting depth should be between 5 and 6 cm. Planting beyond this depth results in a poor stand. In the case of conventional tall varieties, the depth of sowing may be 8 or 9 cm.

<br> <b>d) Seed treatment:</b> <br>
The seed of loose smut-susceptible varieties should be given solar or hot-water treatment. If the wheat seed is used only for sowing, and not for human consumption or for feeding cattle, it can be treated with Vitavax.
          <br>  <b> Application of Mannures and Fertilizer:</b>
          It is desirable that 2 to 3 tonnes of farmyard manure per hectare or some other organic matter is applied 5 or 6 weeks before sowing. The fertilizer requirement of the irrigated wheat crop are as follows:
<br> <b> With assured fertilizer supply:</b> <br>
Nitrogen (N) @8- - 120 kg/ha <br>
Phosphorus (P2O5) @ 40- 60 kg/ha <br>
Potash (K2O) @ 40 kg/ha. <br>

 <b>Under fertilizer constraints:</b> <br>
N @ 60-80 kg/ha <br>
P2O5 @ 30-40 kg/ha <br>
K2O @ 20-25 kg/ha. <br>


Total quantity of Phosphorus and potash and half the quantity of nitrogen should be applied at the time of sowing. Remaining quantity of Nitrogen should be applied at the time of crown root initiation.For the late sown irrigated wheat crop, the NPK fertilizer dose recommended is:
<br> N – 60-80 kg/ha <br>
P2O5 – 30-40 kg/ha <br>
K2O – 20-25 kg/ha. <br>
<b>Irrigation:</b>
The high yielding wheat varieties should be given five to six irrigations at their critical growth stages viz. Crown root initiation, tillering, jointing, flowering, milk and dough which come at 21-25 days after sowing (DAS), 45-60 DAS, 60-70 DAS, 90-95 DAS, 100-105 DAS and 120-125 DAS respectively. Off these irrigation at CRI stage is most important.
<br> <b>Harvest and yield:</b>
        <br>
       <b>a) Harvesting:</b>  <br>
The rain-fed crop reaches the harvest stage much earlier than the irrigated crop. The crop is harvested when the grains become hard and the straw becomes dry and brittle.The harvesting is mostly done by sickle. The crop is threshed by treading with cattle on the threshing-flour or by power driven thresher.

<br> <b> b) Yield:</b> <br>
The national average yield of wheat grain is about 12 to 13.8 quintals per hectare. <br>

<b>c) Storage:</b> <br>
The grains should be thoroughly dried before storage. The storage life of the grain is closely related to its moisture content. Grains with less than 10 percent moisture store well. The storage pits, bins or godowns should be moisture-proof and should be fumigated to keep down the stored – grain pests including rats. Zinc phosphide is very effective against rats.


        
			
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