<!DOCTYPE html>
<html lang="en" style="height:100%">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script src="js/bootstrap.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="height: 100%; padding-top:0px;">
    <!--Begin NAVBAR -->
    <div class="navbar navbar-default navbar-fixed-top"  role="navigation" >
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MainNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a id ="siteName" class="navbar-brand" href="home.html" >Petwork</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse nav-right" id="MainNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><p class="navbar-text navbar-right">Signed in as <a href="#" id="person" class="navbar-link" style="text-decoration:none;">PlaceHolder</a></p></li>
          <li class = "dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="navGlyph"><span class="glyphicon glyphicon-comment"></span></a>
        <ul class="dropdown-menu" role="menu" id="notifications">
                </ul>
          </li>
          <li><a href="calendar.html"><span class="glyphicon glyphicon-calendar" id="navGlyph"></span></a></li>
          <li><a href="settings.html"><span class="glyphicon glyphicon-cog" id="navGlyph"></span></a></li>
          <li><a id="logout" href="#" >Logout</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </div>
    <!--End NAVBAR-->

    <!--Begin Main Content-->
    <section class="body-overlay" style="width:100%;height:100%; background-color:rgba(0,0,0,0.5);">
    <section style="height:100%;width:100%;background-image:url(dog-playing.jpg);background-size:100% 100%;">
      <!--<section class="overlay-body" style="padding-bottom:50px;height:100%;width:100%;background-color:rgba(0,0,0,0.6); margin-top:50px; ">-->
        <div id ="mainContent" class="container-fluid" style="height:100%;background-color:rgba(0,0,0,0.4);">
         <div class="row" style="margin-top:10%;">

          <div class="col-lg-6 col-md-6 col-xs-6" style="display: inline-block; height 100%; vertical-align: middle;">
           <div>
              
              <a href="/discover-people.php" class ="pawButton">
              <img class = "pawButton" class ="pull-left" src="paw.gif" style="border-radius:50%; height:35%; width:35%;" style="display: inline-block; height 100%; vertical-align: middle;"/>
              </a>
              <a href="" class ="homeText">
                <h1 style="display: inline-block; vertical-align: middle; font-family: Corbert-Regular;">Find Care</h1>
              </a>
           </div>
          </div>
        <div class="col-lg-6 col-md-6 col-xs-6" style="display: inline-block; height 100%; vertical-align: middle;">
         <div>
        <a href="/discover-pets.php" class ="pawButton">
        <img class = "pawButton" class ="pull-left" src="paw.gif" style="border-radius:50%; height:35%; width:35%;" style="display: inline-block; height 100%; vertical-align: middle;"style="display: inline-block; height 100%; vertical-align: middle;"/>
        </a>
        <a href="" class ="homeText"><h1 style="display: inline-block; vertical-align: middle; font-family: Corbert-Regular;">Find Pet to Care For</h1></a>
      </div>
    </div>
    
    </div>
    </div>
    <!--End Main Content-->
</section>
</section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>