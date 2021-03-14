<?php 
if(!isset($_SESSION)) { session_start(); }


include("dbconnection.php");

$_SESSION[randnumber] = $randnumber;
if(isset($_SESSION[id]))
{
	$sql = "SELECT * FROM ares.register WHERE id='$_SESSION[id]'";
	$qsql = mysqli_query($con,$sql);
	$rsedit = mysqli_fetch_array($qsql);
}
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
  <title>Harvest</title>
  <style>

 

p {
	
   /* margin: 0 auto; */
    text-align: left;
    text-indent: 15em;
    /* right: 20px; */
    margin-left: 65px;
    margin-right: 75px;
}
@media screen and (max-width: 1030px) {
#page-container {
  position: relative ;
  min-height: 150vh  ;
}
}
  @media screen and (max-width: 995px) {
    p{text-align:left;}
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
		<li class="white"><a href="http://127.0.0.1:8000/" class="waves-effect waves-blue"> Plant disease detector </a></li>
<li class="white"><a href="landprep.php" class="waves-effect waves-blue"> Land Peparation</a></li>
		<li class="white"><a href="varieties.php" class="waves-effect waves-blue"> Varieties</a></li>
		<li class="white"><a href="sowing.php" class="waves-effect waves-blue"> Sowing</a></li>
		<li class="white"><a href="fertilizer.php" class="waves-effect waves-blue"> Manure and Fertilizers</a></li>
		<li class="white"><a href="weedicide.php" class="waves-effect waves-blue"> Weedicides</a></li>
		<li class="white"><a href="irrigate.php" class="waves-effect waves-blue"> Irrigation</a></li>
        <li class="white"><a href="harvest.php" class="waves-effect waves-blue"> Harvesting</a></li>
        <li class="white"><a href="explore/exp.php" class="waves-effect waves-blue"> Explore</a></li>
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
        
          <!-- all other page-content -->
        <div class="section center">
          <h3 class="center">HARVEST</h3><br>
		  <img class="responsive-img" src="harvest.jpg" style="width:300px;height:200px;">
		 </div>
         <!-- insert content -->
        <p >
          <br>
          <h4>When to harvest sugarcane</h4>
        Sugarcane harvest is around late fall, when the canes are tall and thick. If the plan is to make your own syrup, and I’m sure it is, harvest as close to your area’s first frost date as possible but not so late that they get hit by the first frost. If the frost hits them, sugar loss occurs rapidly. 
        <h4>How to harvest sugarcane </h4><br>
        <h5> Manual harvesting:</h5>
         Hand knives, cutting blade or hand axes are used for manual harvesting. It requires skilled labourers as improper harvest of cane leads to loss of cane and sugar yield, poor juice quality and problems in milling due to extraneous matter.   
        <br>
        <h5>Mechanical harvesting:</h5>
        Sugarcane is harvested by mechanical harvester which move along the rows of cane removing the leafy tops of the cane and cutting the stalk into short pieces or "billets". Billets are loaded into bins which are towed alongside the harvester. When full, the bins are taken by road or tramway to the sugar mill.The field capacity of mechanical cane harvesters varies with the size (2.5 to 4 ha per day of 8 hours.
        <br>
        <h4> Cleaning and Crushing:</h4>
        Stalks are thoroughly washed and cut when reaching the sugar mill. After the cleaning process, a machine led by a series of rotating knives, shreds the cane into pieces. This is known as "grinding." During grinding, hot water is sprayed on to the sugarcane to dissolve any remaining hard sugar. The smaller pieces of cane are then spread out on a conveyer belt.
        <br>
        <h4>Juicing:</h4>
        The shredded pieces of sugarcane travel on the conveyer belt through a series of heavy-duty rollers, which extract juice from the pulp. The pulp that remains or "bagasse" is dried and used as fuel. The raw juice moves on through the mill to be clarified.
        <br>
        <h4>Clarifying:</h4>
         Carbon dioxide and the milk of a lime are added to the liquid sugar mixture and it is heated to the boiling point, as the process of clarifying begins. As the carbon dioxide travels through the liquid it forms calcium carbonate, which attracts non-sugar debris (fats, gums, and wax) from the juice, and pulls them away from the sugar juice. The juice is then pushed through a series of filters to remove any remaining impurities.
        <br>
         <h4>Crystallization:</h4>
         The clear juice which results from the clarifying process is put under a vacuum, where the juice boils at a low temperature and begins to evaporate. It is heated until it forms into thick, brown syrup.By evaporating what little water is left in the sugar syrup, crystallization takes place. Inside a sterilized vacuum pan, pulverized sugar is fed into the pan as the liquid evaporates, causing the formation of crystals. The remaining mixture is a thick mass of large crystals, which is sent to a centrifuge to spin and dry the crystals. The dried product is raw sugar, still inedible.
        <br>
         <h4>Refinery:</h4>
         Raw sugar is transported to a Cane Sugar Refinery for the removal molasses, minerals and other non-sugars, which still contaminate the sugar. This is known as the purification process. Raw sugar is mixed with a solution of sugar and water to loosen the molasses from the outside of the raw sugar crystals, producing a thick matter known as "magma." Large machines then spin the magma, which separate the molasses from the crystals. Crystals are promptly washed, dissolved and filtered to remove impurities. The golden syrup which is produced is then sent through filters to remove the color and water. What's left is concentrated, clear syrup, which is again fed into a vacuum pan.Once the final evaporation and drying process is done, screens separate the different sized sugar crystals. Large and small crystals are packaged and shipped, labeled as white, refined sugar.
   </p>
		<br>
		<br>
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
			