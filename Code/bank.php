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
    <title>BANKING</title>
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
        background-image: url("agmoney.jpeg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }

      .h_align li
      {
        margin-left: 4%;
        margin-top:-2.5%;
        margin-bottom:2%;
        display:inline-block;
      }

      marquee
      {
        margin-left: 30%;
      }
      </head>
  </style>

  <body>
    <header>
      <div class="nav-extended">
        <nav style="min-height: 100px ">
          <nav class="nav-wrapper black ">
            <a href="#" class="brand-logo green-text"><h5 ><span>SMART AGRICULTURE SYSTEM</span></h5></a>
            <a href="#" class="sidenav-trigger" data-target="mobile-links">   <i class="material-icons">menu</i>   </a>
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
     </header>       
     <div id="page-container">
        <div id="content-wrap">    
    <ul class="sidenav" id="mobile-links">
      <li><a href="main.php">Home</a></li>
      <li><a href="login.php">Farmer account</a></li>
      <li><a href="faq.php">FAQ</a></li>
      <li><a href="news.php">News</a></li>
      <li><a href="soc_eco2.php">Socio-economy</a></li>
    </ul>    
    <ul class = "h_align">
      <marquee scrollamount="15"
      direction="right"
      behavior="scroll">
      <h1>&nbsp;&emsp;&emsp; e-BANKING</h1>
      <h2>For Safer,Secure,Convenient Transactions</h2>
      </marquee>
      <div class = "h_align">
      <li><form action="http://www.axisbank.com/">                                 
        <input type="image" src="axis.jpg" width="70" height="70" border="5px solid #555";>
      </form></li>
      <li><form action="https://www.bankofindia.co.in/"> 
      <input type="image" src="boi.jpg" width="70" height="70" border="5px solid #555";>
      </form></li>
    </ul>   
    <ul class = "h_align">
      <li><form action="https://www.dhanbank.com/">
            <input type="image" src="dhan.jpg"  width="70" height="70" border="5px solid #555";>
      </form></li>
      <li><form action="https://www.hdfcbank.com/">
            <input type="image" src="hdfc.png"  width="70" height="70" border="5px solid #555";>
      </form></li>
    </ul>
    <ul class = "h_align">
      <li><form action="http://www.icicibank.com/">
            <input type="image" src="icici.jpg"  width="70" height="70" border="5px solid #555";>
      </form></li>
      <li><form action="http://www.indianbank.net.in/">
            <input type="image" src="ib.jpg"  width="70" height="70" border="5px solid #555";>
      </form></li>
    </ul>
    <ul class = "h_align">
      <li><form action="http://www.kvb.co.in/">
            <input type="image" src="kvb.jpg"  width="70" height="70" border="5px solid #555";>
      </form></li>
      <li><form action="http://www.kotak.com/en.html/">
            <input type="image" src="kotak.jpg"  width="70" height="70" border="5px solid #555";>
      </form></li>
    </ul>
    <ul class = "h_align">
      <li><form action="http://www.onlinesbi.com/">
            <input type="image" src="sbi.png"  width="70" height="70" border="5px solid #555";>
      </form></li>
      <li><form action="http://www.yesbank.in/">
            <input type="image" src="yes.png"  width="70" height="70" border="5px solid #555";>
      </form></li>
    </ul>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
    </script>
    
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
    </div>
  </body>
</html>	

   

    


					