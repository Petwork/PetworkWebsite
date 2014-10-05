<!DOCTYPE html>
<html>
<head>
  <title>FormForPetWorld</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="tindog.css" rel = "stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
     <script src="js/bootstrap.js"></script>
</head> 
<body >
  


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
          <a id ="siteName" class="navbar-brand" href="home.html">Petwork</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse nav-right" id="MainNavbar">
          <ul class="nav navbar-nav navbar-right">
      		<li class = "dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="navGlyph"><span class="glyphicon glyphicon-comment"></span></a>
				<ul class="dropdown-menu" role="menu" id="notifications">
              	</ul>
      		</li>
      		<li><a href="settings.html"><span class="glyphicon glyphicon-cog" id="navGlyph"></span></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </div>
    <!--End NAVBAR-->
<section style="height:100%;width:100%;background:url(FormBackground.jpg);background-size:100% 100%;">
<section class="overlay-body" style="padding-bottom:50px;height:100%;width:100%;background-color:rgba(0,0,0,0.6); margin-top:50px; ">
<div class="noNavBody" >
	<h1 class="text-center" style ="color:#C8F7C5;font-family:'Montserrat'; font-weight:bold;  font-size:20;  text-decoration:underline; ">Getting Started</h1>

<!-- --> 



<form action="putdata.php" method="post" style="width:100%;" enctype="multipart/form-data">

   <div class="form-group" style="padding-bottom:50px;">
   
         	<label for="AgePet" style=" font-size:18px; color:#A2DED0">Pet Age</label>
      <input type="text" class="form-control" name="pet_age" id="PetAge"
         placeholder="Enter Pet's Age">
         	<br>
         <label for="PetName" style=" font-size:18px; color:#A2DED0">Pet Name</label>
      <input type="text" class="form-control" name="pet_name" id="PetName"
         placeholder="Enter Pet's Name">
   			<br>
   			<label for="PetType" style=" font-size:18px; color:#A2DED0">What animal is your pet?</label>
      <input type="text" class="form-control" name="pet_type" id="PetType"
         placeholder="Enter what animal your pet is">
			<br>
<label for="breed" style=" font-size:18px; color:#A2DED0">Breed</label>
      <input type="text" class="form-control" name="pet_breed" id="Breed"
         placeholder="Enter Breed of Pet">
			<br>

      <label for="comments" style=" font-size:18px; color:#A2DED0">Additional Information</label>
      <input type="text" class="form-control" name="comments" id="comments"
         placeholder="Enter additional information about your pet">
      <br>

         <label for="Contact" style=" font-size:18px; color:#A2DED0">Contact Information</label>
      <input type="text" class="form-control" name="contact" id="ContactInfo"
         placeholder="Enter Contact Info(Phone Number/Email-ID)">
         <br>
   
  
      <label for="inputfile" style=" font-size:18px; color:#A2DED0">Upload Image of User</label>
      <input style="color:white;" name="user_image" type="file" id="inputfile1">
      <br>
      <label for="inputfile" style=" font-size:18px; color:#A2DED0">Upload Image of Pet</label>
      <input style="color:white;" name="pet_image" type="file" id="inputfile2">
      
   </div>
   <button type="submit" class="btn btn-primary btn-lg">Submit</button>
</form>
</div>
</section>
</section>
</body>
</html>