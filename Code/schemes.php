
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
          <link rel="stylesheet" href="ani.css">

          <title>SCHEMES</title>
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
      background-image: url("sky.jpg");
      background-repeat:no-repeat;
      
      background-attachment: fixed;
      background-size: cover;
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
        <!-- all other page content -->
          <table>
            <tr>
              <td><a href="https://www.enam.gov.in/web/" class="btn yellow black-text waves-effect waves-light" >eNam</a></td>
              <td> For Uniformity in agriculture marketing</td>
            </tr>
            <tr>
              <td><a href="https://nmsa.dac.gov.in/"class="btn yellow black-text waves-effect waves-light" >NMSA</a></td>
              <td>To Enhance agriculture productivity</td>
            </tr>
            <tr>
              <td><a href="https://pmksy.gov.in/"class="btn yellow black-text waves-effect waves-light" >PMKSY</a></td>
              <td>For Improving water conservation and optimised resource utilization</td>
            </tr>
            <tr>
              <td><a href="https://pmfby.gov.in/"class="btn yellow black-text waves-effect waves-light" >PMFBY</a></td>
              <td>For Crop insurance</td>
            </tr>
            <tr>
              <td><a href="https://pgsindia-ncof.gov.in/pkvy/index.aspx"class="btn yellow black-text waves-effect waves-light" >PKVY</a></td>
              <td> To Promote organic farming</td>
            </tr>
            <tr>
              <td><a href="https://pib.gov.in/newsite/mberel.aspx?relid=96201"class="btn yellow black-text waves-effect waves-light" >GBY</a></td>
              <td>For Scientefic storage facility</td>  
            </tr>
            <tr>
              <td><a href="http://dadf.gov.in/related-links/livestock-insurance"class="btn yellow black-text waves-effect waves-light" >LI</a></td>
              <td>Insurance for protection of farmers and cattle rearers</td>  
            </tr>
            <tr>
              <td><a href="https://pib.gov.in/Pressreleaseshare.aspx?PRID=1532269"class="btn yellow black-text waves-effect waves-light" >MIF</a></td>
              <td>Funds for micro land irrigation</td>  
            </tr>
            <tr>
              <td><a href="http://agricoop.nic.in/sites/default/files/RADP5913.pdf"class="btn yellow black-text waves-effect waves-light" >RAD</a></td>
              <td>Integrated farming system</td>  
            </tr>
            <tr>
              <td><a href="http://agritech.tnau.ac.in/agricultural_engineering/agriengg_govt_schemes.html"class="btn yellow black-text waves-effect waves-light" >TNAU</a></td>
              <td>Tamil Nadu Government Agri Portal</td>  
            </tr>
  </table>
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
    </script>
  </body>
</html>


   

      


   