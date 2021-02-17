<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
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
</header>

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
</body>
</html>


