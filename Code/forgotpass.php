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
      <link rel="stylesheet" href="form1.css" >
      <script src="form.js"></script>
      <title>Forgot password</title>
    </head>
  <style>
    html,body{
      height:100%;
      margin: 0px;

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
  </style>


 
  <header>
    <div class="nav-extended">
      <nav style="min-height: 100px ">
        <nav class="nav-wrapper black ">
          <a href="#" class="brand-logo  green-text"><h5 ><span>SMART AGRICULTURE SYSTEM</span></h5></a> 
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
  <body>
    <div id="page-container">
      <div id="content-wrap">
        <!-- all other page content -->
        <div class="imagebg"></div>
        <div class="form-container z-depth-5">
          <h3 class="center">RESET PASSWORD</h3> 
           <div class="row">
              <form class="col s12" id="reused_form" action="reset_pass.php" method="post">
                <div class="row">
                  <div class="input-field col s12">
                    <input id="email" type="email" name="email_id" required class="validate">
                    <label for="email">Email</label>                    
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="password" type="password" name="new_pass" required class="validate">
                    <label for="new_pass">New password</label>
                   </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                     <input id="password" type="password"  name="new_pass_c" required class="validate">
                      <label for="new_pass_c">Confirm new password</label>
                      </div>
                   <div>
                  <button class="waves-effect waves-light btn submitbtn" type="submit">Change PASSWORD</button>
                </div>
              </form>            
            </div> 
          </div>
        </div>
      </div>
    
    <footer id="footer" >
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
          $('.sidenav').sidenav();
        });
    </script>
  </body>
</html>	
					