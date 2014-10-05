<html>
	<head>
		<title>Petwork</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="tindog.css">
	</head>

	<body>
		<section id="section1">
				<div class="container" style="width:100%; height:50px;background-color:#d35400; box-shadow:1px 1px 8px black;">

						<a id="back" href="/home.php" style="margin-left:20px;"> Back </a> 
						<h1 style="display:inline-block;color:white; font-weight:bold;text-align:center;margin-bottom:80px; margin-left:45%;"> Petwork <span style="font-size:14px; color:lightgray; font-weight:normal;"> Find Care </span> </h1> 
						
						<span style="float:right;">
							<p class="navbar-text" style="color:white;">Signed in as <a href="#" id="person" class="navbar-link" style="text-decoration:none; color:white;">PlaceHolder</a></p>
							<button type="button" id="menu-drop-but" class="btn btn-default btn-lg menu">
							  <span  class="glyphicon glyphicon-comment"></span> 
							  <div id="menu-drop" style="overflow:scroll;">
							  	<ul>
							  		<li><span class="msg-from">Girl Doge 1</span>: Woof! Hi there..</li>
							  		<li><span class="msg-from">Girl Doge 2</span>: Woof! Hi there..</li>
							  		<li><span class="msg-from">Girl Doge 3</span>: Woof! Hi there..</li>	
							  		<li><span class="msg-from">Girl Doge 4</span>: Woof! Hi there..</li>
							  		<li><span class="msg-from">Girl Doge 5</span>: Woof! Hi there..</li>
							  		<li><span class="msg-from">Girl Doge 6</span>: Woof! Hi there..</li>
							  		<li><span class="msg-from">Girl Doge 7</span>: Woof! Hi there..</li>
							  		<li><span class="msg-from">Girl Doge 8</span>: Woof! Hi there..</li>
							  		<li><span class="msg-from">Girl Doge 9</span>: Woof! Hi there..</li>
							  		<li><span class="msg-from">Girl Doge 10</span>: Woof! Hi there..</li>
							  	</ul>
							  </div>
							</button>

							<button type="button" class="btn btn-default btn-lg menu">
							  <span class="glyphicon glyphicon-cog"></span> 

							  
							</button>
							<span style="color:white;"> &nbsp | &nbsp </span> 
							<a id="login" href="/" ><h5 style="display:inline-block;margin-left:0px;margin-right:25px;margin-top:15px;">  &nbsp Logout</h5></a>
						</span>
						

						 
						
				</div>

				<div id="location" style="text-align:center;width:auto;height:auto; margin-top:20px;font-size:14px; color:black;"> Calculating current location . . .  </div>
			
				<div class="container" style="width:1060px;padding-top:40px;">
					<ul>
						<li>
						<button type="button" id="prev" class="btn btn-default btn-lg control" style="margin-right:50px;">
						  	<span class="glyphicon glyphicon-chevron-left"></span> 
						</button>
					</li>

						<li>
						<div class="face-cont" id="f1">

						
						</div>
						<h5 id="name1"> </h5>
						
						
						</li>

						<li>
						<div class="face-cont" id="f2"></div>
							<div class="face-cont text-center" id="info" > 
								<ul style="line-height:2em;">
									<li id="owner_name"> Name: </li>
									<br>
									<li id="owner_location"> Location: </li>
									<br>
									<li id="preferences"> Pet Preferences: </li>
									<br>
									<li id="experience"> Experience: </li>
									<br>
									<li id ="owner_contact"> Contact: </li>
									<br>
								</ul>
							</div>
						<h4 id="name2">  </h4>
						<button type="button" id="info-button" class="btn btn-default btn-lg control center-block" style="clear:both;margin-top:0px;height:40px;width:40px;background-color:rgba(0,0,0,0);">
						  	<span class="glyphicon glyphicon-info-sign" style="font-size:30px;"></span> 
						</button>
						
	
						</li>

						<li>
						<div class="face-cont" id="f3"></div>
						<h5 id="name3">  </h5>
						
					</li>

					<li>
						<button type="button" id="next" class="btn btn-default btn-lg control" style="margin-left:50px;">
							  <span class="glyphicon glyphicon-chevron-right"></span> 
						</button>
					</li>

					</ul>

					
				</div>

				<div class="container" style="text-align:center;height:auto;">
					
						<button type="button" id="yes" class="btn btn-default btn-lg control choice" style="margin:0; text-align:center; " >
							  <span class="glyphicon glyphicon-ok"></span> 
						</button>
					<button type="button" id="no" class="btn btn-default btn-lg control choice" style="margin:0;margin-left:60px; text-align:center;" >
							  <span class="glyphicon glyphicon-remove"></span> 
						</button>
				

					
				</div>
				
			

		</section> 

		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

		<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'>
		</script>

		<script src="discover-people.js"></script>

		

	</body>
</html>
