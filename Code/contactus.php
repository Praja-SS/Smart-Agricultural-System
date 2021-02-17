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
      <link rel="stylesheet" href="form.css" >
      <script src="form.js"></script>
      <title>Contact Us</title>
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
          padding-bottom: 1rem;    /* Footer height */
        }

        #footer {
          position: absolute;
          bottom: 0;
          width: 100%;
          height: 1rem;            /* Footer height */
        }
      </style>
    </head>

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
         <h3 class="center">CONTACT US</h3> 
            <div class="form-container z-depth-5">
              
              <div class="row">
                <form class="col s12" id="reused_form" action="insertcu.php" method="post">
                   <div class="row">
                      <div class="input-field col s12">
                        <input id="name" type="text" name="name" required class="validate">
                        <label for="name">Name</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="email" type="email" name="email" required class="validate">
                        <label for="email">Email</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <textarea id="message" name="message" class="materialize-textarea" maxlength="1000" required class="validate" ></textarea>
                        <label for="message">Message</label>
                      </div>
                    </div>
                    <div>
                      <button class="waves-effect waves-light btn submitbtn" type="submit">Submit</button>
                    </div>
                  </form>
                  <div id="error_message" style="width:100%; height:100%; display:none; ">
                    <h4>
                       Error
                    </h4>
                    Sorry there was an error sending your form. 
                  </div>
                  <div id="success_message" style="width:100%; height:100%; display:none; ">
                    <h4>
                      Success! Your Message was Sent Successfully.
                    </h4>
                  </div>
              </div>
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
					