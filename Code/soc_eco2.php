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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <title>Socio-Economy</title>
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
        .section{
          padding-top: 4vw;
          padding-bottom: 4vw;
        }
        .tabs .indicator{
          background-color: #1a237e;
        }
        .tabs .tab a:focus, .tabs .tab a:focus.active{
          background: transparent;
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
        <!-- parallax -->
    <div class="parallax-container">
      <div class="parallax">
        <img src="e.png"alt="" class="responsive-img">
      </div>
    </div> 
     <!-- photo / grid -->
      <section class="container section" id="photos">
        <div class="row">
          <div class="col s12 l4">
              <img src="ebank.jpg" alt="" class="responsive-img materialboxed">
          </div>
          <div class="col s12 l6 offset-l1">
            <h2 class="indigo-text text-darken-4">Banks</h2>
            <p>Explore and know more about Indian banks...</p>
            <a href="bank.php">Click here</a> 
          </div>
        </div>
            <div class="row">
          <div class="col s12 l4 offset-l1 push-l7">
              <img src="subsidy.jpg" alt="" class="responsive-img materialboxed">
          </div>
          <div class="col s12 l6 offset-l1 pull-l5 right-align">
            <h2 class="indigo-text text-darken-4">Subsidies and Schemes</h2>
            <p>Know your benefits...</p>
            <a href="schemes.php">Click here</a> 
          </div>
        </div>
        <div class="row">
          <div class="col s12 l4">
              <img src="cop_soc.jpg" alt="" class="responsive-img materialboxed">
          </div>
          <div class="col s12 l6 offset-l1">
            <h2 class="indigo-text text-darken-4">Cooperatiive societies</h2>
            <p>Cooperative societies and support dedicated to farmers...</p>
            <a href="coperative.php">Click here</a> 
          </div>
        </div>
      </section>
      <!-- footer -->
      <footer class="page-footer black ">
        <div class="container">
          <div class="row">
            <div class="col  l6 s12 ">
              <ul>
                <li><a class="green-text text-lighten-3 " href="aboutus.php">About US</a></li>
                <li><a class="green-text text-lighten-3 " href="contactus.php">Contact us</a></li>
               </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright green darken-4">
            <div class="container center-align">Copyright &copy; 2020 Developed By ARES</div>
        </div>
      </footer> 

      <!-- Compiled and minified JavaScript -->
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
      <script>
        $(document).ready(function(){

          $('.sidenav').sidenav();
          $('.materialboxed').materialbox();
          $('.parallax').parallax();
          $('.tabs').tabs();
        

        });
      </script>
  </body>
</html>