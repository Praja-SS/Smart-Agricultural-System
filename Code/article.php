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
  <link rel="stylesheet" href="sidenav1.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <title>Logged in</title>
  <style>
p {
	
   /* margin: 0 auto; */
    text-align: left;
    text-indent: 15em;
    /* right: 20px; */
    margin-left: 65px;
    margin-right: 75px;
}
div.container1 {
    width:98%; 
    margin:1%;
  }
 table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 75%;
  margin-left:15%; 
   margin-right:15%;
}


}   
  </style>
</head>
<body>

    <header>
    <div class="nav-extended">
      <nav style="min-height: 100px ">
        <nav class="nav-wrapper black ">       
          <a href="#" class="brand-logo green-text"><h5 ><span>SMART AGRICULTURE SYSTEM</span></h5></a> 
          <a href="#" class="sidenav-trigger" data-target="mobile-links"><i class="material-icons">menu</i></a>
          <a href="#" data-target="sidenav-1" class="left sidenav-trigger hide-on-medium-and-up">
          <ul class="right hide-on-med-and-down">
            <li><a href="main.php"><i class="material-icons green-text right">home</i><span>Home</span> </a></li>
            <li><a href="faq.php"><i class="material-icons green-text right">forum</i><span>FAQ</span></a></li>
            <li><a href="news.php"><i class="material-icons green-text right">notes</i><span>News</span></a></li>
            <li><a href="soc_eco2.php"><i class="material-icons green-text right">account_balance</i><span>Socio-economy</span></a></li>
          </ul>       
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
        <li class="divider"></li>       
        <li><a href="logout.php">Logout</a></li>     
        <li class="divider"></li>
		<li class="white"><a href="admin.php" class="waves-effect waves-blue">Home</a></li> 
		<li class="white"><a href="article.php" class="waves-effect waves-blue">Add Blogs</a></li>   
		<li class="white"><a href="dashboard.php" class="waves-effect waves-blue">Dashboard</a></li>
		<li class="white"><a href="feeds.php" class="waves-effect waves-blue">Feedback</a></li>
    
        
  </ul>
 <!-- side navbar -->
  <ul id="sidenav-1 grey darken" class="sidenav sidenav-fixed">
    <li class="sidenav-header green">
      <div class="row">
          <div class="col s8">
            <a href="#" class="dropdown-trigger btn-flat waves-effect waves-light white-text" data-target="dropdown" data-activates="dropdown">
             <?php echo "Admin"; ?> <i class="material-icons">arrow_drop_down</i></a>
            <ul id="dropdown" class="dropdown-content">
              <li><a href="logout.php"><i class="material-icons">power_settings_new</i>Logout</a></li>
          </ul>
        </div>
      </div>
    </li>
<li class="white"><a href="admin.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">home</i> Home</a></li>
<li class="white"><a href="article.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Add Article</a></li>
<li class="white"><a href="dashboard.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Dashboard</a></li>
<li class="white"><a href="feeds.php" class="waves-effect waves-blue"><i class="material-icons  right style="margin-right:0;">keyboard_arrow_right</i> Feedbacks</a></li>

  </ul>
<div class="container">
	<div class="row">
		<div class="9u">
			<section>
				<header>
					<h3>Add An Article</h3>
				</header>
                <form method="post" action="insert.php">
                	<table border="2">
						<tbody>
							 <tr>
							    <th height="32" scope="row" align="right">Title      <font color="#FF0000">*</font>    </th>
							    <td><input type="text" name="title" required></td>
						    </tr>
							<tr>
							    <th  scope="row" style="vertical-align:top;" align="right">Description  </th>
							    <td><textarea name="description" rows="15" cols="48" required></textarea></td>
						    </tr>
							<tr>
							    <th height="36"  scope="row" align="right">Image1 (Primary image)  <font color="#FF0000">* </font></th>
							    <td><input type="file" name="img1" required></td>
							</tr>
							<tr>
							    <th height="31"  scope="row" align="right">Image2 </th>
							    <td><input type="file" name="img2"></td>
						    </tr>
							<tr>
							    <th height="33"  scope="row" align="right">Image3 </th>
							    <td><input type="file" name="img3" ></td>
						    </tr>
							<tr>
							    <th height="36"  scope="row" align="right">Image4 </th>
							    <td><input type="file" name="img4"></td>
						    </tr>
						   	<tr>
							    <th height="56"  scope="row" align="right"><p>&nbsp;</p></th>
						        <td><input name="submit" type="submit" id="submit" value="Submit Article"></td>
						    </tr>
						</tbody>                                     
					</table>
                </form>
			</section>
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
</footer>
					  
        