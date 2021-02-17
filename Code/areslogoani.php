<!DOCTYPE html>
<html>
  <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <!--Import Google Icon Font-->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <!-- Compiled and minified CSS -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
          <link rel="stylesheet" href="logoani.css">

          
  </head>
  <style>
    header{
    
          min-height: 50px;
        }
        @media screen and (max-width: 670px){
          header{
            min-height: 500px;
          }
        }
    #page-container {
      position: relative;
      min-height: 100vh;
    }

    #content-wrap {
      padding-bottom: 2.5rem;    /* Footer height */
    }

    #footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 2.5rem;            /* Footer height */
    }
    body
    {
      
      background-position: center;
      background-attachment: fixed;
      background-size: contain;
    }
    h5{
      text-indent:2.5em;
    }

    #a1
    {
      margin-left: 20%;
    }

    table 
    {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 60%;
    }
    td 
    {
      text-align: left;
      padding: 8px;
      color: black;
      font-family:verdana;
      font-size: 90%;

    }
    marquee
    {
      margin-left: 10%;
      margin-top: 45%;
    }
    #div1 {
      margin-left: 55%;
      margin-top:-40%;
      width: 10px;
      height: 10px;
      position: relative;
      animation-name: example;
      animation-duration: 4s;
      animation-timing-function: linear;
      animation-delay: 1s;
      animation-iteration-count: infinite;
    }

    @keyframes example {
      0%   {left: 0px; top: 0px;}
      25%  {left: 200px; top: 0px;}
      50%  {left: 200px; top: 200px;}
      75%  {left: 0px; top: 200px;}
      100% {left: 0px; top: 0px;}
    }
  </style>

  <body>
    <header>
      <div class="nav-extended">
        <nav style="min-height: 100px ">
          <nav class="nav-wrapper black ">
              <a href="#" class="brand-logo green-text"><h5 ><span>SMART AGRICULTURE SYSTEM</span></h5>
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
          </nav> 
        </nav>
      </div>

      <ul class="sidenav" id="mobile-links">
          <li><a href="main.php">Home</a></li>
          <li><a href="login.php">Farmer account</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="news.php">News</a></li>
          <li><a href="soc_eco2.php">Socio-economy</a></li>
      </ul>
  </header>
    
    <div id="page-container">
      <div id="content-wrap">

<div class="stage">
    <div class="wrapper">
        <div class="slash"></div>
        <div class="sides">
            <div class="side"></div>
            <div class="side"></div>
            <div class="side"></div>
            <div class="side"></div>
        </div>
        <div class="text">
            <div class="text--backing">ARES</div>
            <div class="text--left">
                <div class="inner">ARES</div>
            </div>
            <div class="text--right">
                <div class="inner">ARES</div>
            </div>
        </div>
    </div>
</div>
</div>
<footer id="footer">
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
          
        </footer> 
      </footer>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
    </script>
  </body>
</html>