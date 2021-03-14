<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
 
  <title>SMART AGRICULTURE SYSTEM</title>
</head>
<style>
 
    header{
    min-height: 50px;
  }
  @media screen and (max-width: 500px){
      header{
        min-height: 50px;
      }
    }
    h5{
      text-indent:2.5em;
    }
</style>
<body>


<header>
<div class="nav-extended">
  <nav style="min-height: 100px ">
  <nav class="nav-wrapper black ">
      <a href="#" class="brand-logo green-text"><h5 ><span>SMART AGRICULTURE SYSTEM</span></h5></a> 
      <a href="#" class="sidenav-trigger" data-target="mobile-links">
        <i class="material-icons">menu</i>
      </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="main.php"><i class="material-icons green-text right">home</i><span>Home</span> </a></li>
        <li><a href="login.php"><i class="material-icons green-text right">nature_people</i><span>Farmer account </span> </a></li>
        <li><a href="faq.php"><i class="material-icons green-text right">forum</i><span>FAQ</span></a></li>
        <li><a href="news.php"><i class="material-icons green-text right">notes</i><span>News</span></a></li>
        <li><a href="soc_eco2.php"><i class="material-icons green-text right">account_balance</i><span>Socio-economy</span></a></li>
      </ul>
      </div> 
  </nav>
  </nav>
  </div>
<header>
<ul class="sidenav" id="mobile-links">
  <li><a href="main.php">Home</a></li>
  <li><a href="login.php">Farmer account</a></li>
  <li><a href="faq.php">FAQ</a></li>
  <li><a href="news.php">News</a></li>
  <li><a href="soc_eco2.php">Socio-economy</a></li>
</ul>

<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>
<div class="container">
 <div class="row">
  <div class="col s12 l12 xl12">

    <div class="card hoverable">
      <div class="card-image">
        <img src="farm.jpg" alt="farm" >
      </div>
      <div class="card-content">
        <span class="card-title">Think Smart , Act Smart ! </span>
        <p> We are here to serve you . One stop solution for all farming problems.</p>
      </div>
      <div class="card-action">
        <a href="login.php">Log in to continue</a> 
      </div>
    </div>
  </div>
</div>
<div class="col s12 l12 xl12">
  <div class="card hoverable   ">
    <div class="card-image">
        <img src="blogs1.jpg" alt="idea" class="responsive-img" >
     </div>
    <div class="card-content">
       <span class="card-title"> Check out some blogs ! </span>
       <p> Farming the future </p>
    </div>
    <div class="card-action">
      <a href="#"><i class="material-icons green-text right">people</i><span><?php
						if(basename($_SERVER['PHP_SELF']) == "displayarticles.php")
						{
							if($_GET[articletype] == "Blog" )
                          	{
							echo ' class="active"';
							}
						}
						?><a href="displayarticles.php?articletype=Blog">click here</span></a> 
    </div>
    
  </div>
</div>
<div class="row">
  <div class="col s12 l12 xl12">
      <div class="card hoverable">
        <div class="card-image">
            <img src="think3.jpg" alt="idea" class="responsive-img" >
         </div>
        <div class="card-content">
           <span class="card-title"> Revolutionizing Indian-Agiriculture </span>
           <p> Just a few simple steps , fetches maximum produce.</p>
        </div>
        
      </div>
   </div>
 </div>
</div>
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
  </div>
</footer>

</body>
</html>