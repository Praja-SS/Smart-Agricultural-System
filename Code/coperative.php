<!DOCTYPE html>
<html>
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
      <title>Cooperative Societies</title>
    </head>
  <style>
    header{

          min-height: 100px;
        }
        @media screen and (max-width: 500px){
          header{
            min-height: 50px;
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
    h5{
      text-indent: 2.5em;
    }
    body
    {
      background-image: url("field.jpg");
      background-position: center;
      background-attachment: fixed;
      background-size: cover;
    }

    p
    {
      margin-left: 15%;
      font-size:120%;
      font-weight:700;
    }
    h3
    {
      font-size: 1.92rem;
      margin-left: 30%;
      margin-top:3%;
      color:white;
      font-weight:600;
    }


    a1:link, a1:visited 
    {
      margin-top:1.5%;
      background-color: #32CD32;
      color: white;
      padding: 20px 70px;
      text-align:center;
      display: inline-block;
      width:145px;
      height:10px;
      border-style: solid;
      border-color: yellow;
      border-radius: 20px;
    }
    a1:hover, a1:active 
    {
      background-color:blue;
    }
  </style>

  <header>
    <div class="nav-extended">
      <nav style="min-height: 100px ">
        <div class="nav-wrapper black" >
          <a href="#" class="brand-logo  green-text"><h5 ><span>SMART AGRICULTURE SYSTEM</span></h5></a> 
          <a href="#" class="sidenav-trigger" data-target="mobile-links"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="main.php"><i class="material-icons green-text right">home</i><span>Home</span> </a></li>
            <li><a href="login.php"><i class="material-icons green-text right">nature_people</i><span>Farmer account </span> </a></li>
            <li><a href="faq.php"><i class="material-icons green-text right">forum</i><span>FAQ</span></a></li>
            <li><a href="news.php"><i class="material-icons green-text right">notes</i><span>News</span></a></li>
            <li><a href="soc_eco2.php"><i class="material-icons green-text right">account_balance</i><span>Socio-economy</span></a></li>
          </ul>
        </div>
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
        
   
  
  <body>
      <div id="page-container">
        <div id="content-wrap">
          <!-- all other page content -->
          <h3>WHY  BE  A  PART  OF  COOPERATIVE  SOCIETY?</h3>

          <p>&#127805; Access to various training on crop farming
          <p>&#127805; Work together with other members of cooperative society and share knowledge
          <p>&#127805; Information about local and international markets
          <p>&#127805; Find out cheap land and farm workers
          <p>&#127805; Claim micro credit loans via cooperative banks
          <p>&#127805; Maintain cooperative bank account and earn interest
          <h3>WISH  TO  BE  A  MEMBER  OR  START  ONE??</h3>

          <div class="container center">
            <a href="http://www.tnreginet.net/english/worddoc/TN_EoDB_Procedure%20for%20Registration%20of%20Societies.pdf"
            class="btn black green-text waves-effect waves-light" >Click to Register</a>
          </div>
        </div>
      <footer id="footer">
          <footer class="page-footer black ">
            <div class="container ">
              <div class="row">
                <div class="col  l6 s12 ">
                  <ul>
                    <li><a class="green-text text-lighten-3 " href="aboutus.php">About us</a></li>
                    <li><a class="green-text text-lighten-3 " href="contactus.php">Contact us</a></li>
                  </ul>
                </div>
              </div>
            </div>
           <div class="footer-copyright green darken-4">
                <div class="container center-align">Copyright &copy; 2020 Developed By ARES</div>
              </div>
            </div>
          </footer> 
        </footer>        
    </div>      
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
    </script>       
  </body>
</html>
  
   
      
 