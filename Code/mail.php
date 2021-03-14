


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

        <title>Login</title>
 </head>

  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
  
    }
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
    main {
      flex: 1 0 auto;
    }

    body {
      background:white;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
  
  </style>


  <body>
    <header>
      <div class="nav-extended">
        <nav style="min-height: 100px ">
          <nav class="nav-wrapper black ">
              <a href="#" class="brand-logo  green-text"><h5 ><span>SMART AGRICULTURE SYSTEM</span></h5></a> 
              <a href="#" class="sidenav-trigger" data-target="mobile-links">
                <i class="material-icons">menu</i>
              </a>
              <ul class="right hide-on-med-and-down">
                <li><a href="main.php"><i class="material-icons green-text right">home</i><span>Home </span> </a></li>
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

          <center>
            
            <div class="section ">
              <body1>
                <div1>SEND</div1> 
                <div1>  <span>MAIL</span></div1>
              </body1>
            </div>  
            
              
              
            <div class="section"></div>
              <div class="container">
                <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                  <form class="col s12" method="post" action="sendmail1.php">
                    <div class='row'>
                      <div class='input-field col s12'>
                        <input class='validate' type='email' name='email' id='email' />
                        <label for='email'>Enter your email</label>
                      </div>
                    </div>

                    <div class='row'>
                      <div class='input-field col s12'>
                        <input class='validate' type='text' name='message' id='message' />
                        <label for='message'>Message</label>
                      
                    <br>
                    <center>
                      <div class='row'>
                        <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect waves-light black green-text'>Send</button>
                      </div>
                    </center>
                  </form>
                </div>
              </div>
              
          </center>

          <div class="section"></div>
          <div class="section"></div>
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

