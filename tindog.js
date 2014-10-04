
$(document).ready(function(){

$.ajaxSetup({async:false});

var records, n_fields;
var current_ids = [];

var img_array = new Array();  
var name_array = new Array(); 
var age_array = new Array(); 
var current_array=[0,1,2];

 


/*----------------------------FETCHING USERS ON NETWORK ------------------------------------------*/

function fetch(){
		
		$.get("fetchpets.php",function(data,status){
			 records = JSON.parse(data); 
			 n_records = records.length;		//Number of Pets
		});

	}

	fetch(); 

	/*console.log(records); 
	console.log("image 1:"+records[0].pet_image); 
	console.log("image 2:"+records[1].pet_image); */

	for(var j = 0; j < records.length; j++){
		img_array.push("url(images/"+records[j].pet_image+")"); 
		name_array.push(records[j].pet_name); 
		age_array.push(records[j].pet_age); 
	}

	/*for(var j = 0; j < records.length; j++){
		console.log("Image"+j+":"+img_array[j]); 
	}*/
	console.log(img_array);



	

/*------------------------------------------------------------------------------------------------*/

/*----------------------------IMAGE AND NAME GENERATION-------------------------------------------*/	
	function initial_image(){
		
			var count = 1; 
			while(count<=3){
				document.getElementById('f'+ count).style.backgroundImage = img_array[current_array[count-1]];
				document.getElementById('name'+ count).innerHTML = name_array[current_array[count-1]] + ', ' + age_array[current_array[count-1]];
			
				count++;
				 
			}
		 
	}

	function next_image(){
		
			var count = 1; 
			while(count<=3){
				document.getElementById('f'+ count).style.backgroundImage = img_array[current_array[count-1]+1];
				document.getElementById('name'+ count).innerHTML = name_array[current_array[count-1]+1] + ', ' + age_array[current_array[count-1]+1];
				
				current_array[count-1]+=1; 
				count++;
				 
			}
		 
	}


	function prev_image(){
		var count = 1; 
			while(count<=3){
				document.getElementById('f'+ count).style.backgroundImage = img_array[current_array[count-1]-1];
				document.getElementById('name'+ count).innerHTML = name_array[current_array[count-1]-1] + ', ' + age_array[current_array[count-1]-1];
			
				current_array[count-1]-=1; 
				count++;
				 
			}
		
	}

	
	initial_image();
/*----------------------------------------------------------------------------------------*/


/*-----------------------------REVERSE GEOLOCATION-----------------------------------------*/
		function getLocation(){ 
		if(!navigator.geolocation) return;
		navigator.geolocation.getCurrentPosition(function(pos) {
			geocoder = new google.maps.Geocoder();
			var latlng = new google.maps.LatLng(pos.coords.latitude,pos.coords.longitude);
			geocoder.geocode({'latLng': latlng}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {

				var result = results[0];
				
					var address =""; 
					for(var i = 0, len=result.address_components.length; i<len; i++){
						if(i === len-1){
							address+=(result.address_components[i]['short_name']); 
						}
						else{
							address+=(result.address_components[i]['short_name'] + ', '); 
							//console.log(address);
						}

					}
					$("#location").text(""); 
					$("#location").append("Current location: <span style='text-decoration:underline;'> "+address+"</span>");
			}
			});				
			
		});
	}

/*--------------------------------------------------------------------------------------------*/

	var flag=2;
	$("#menu-drop-but").click(function(){
		if(flag%2==0)
		{
			$("#menu-drop").css("display","block");
			flag++;
		}
		else
		{
			$("#menu-drop").css("display","none");
			flag++;
		}

	});


	
	 getLocation(); 


	$('#next').click(function() {
		next_image(); 
	 	$("#prev").css("visibility","visible"); 

	 	if(current_array[2]=== 5){
	 		$("#next").css("visibility","hidden");
	 	}
	 	$("#f2").css("display","block"); 
			$("#info").css("display","none"); 
	 	
	});

	$('#prev').click(function() {
		prev_image();
		if(current_array[0] === 0){
	 		$("#prev").css("visibility","hidden"); 
	 	}
		else
	 	{
	 		$("#prev").css("visibility","visible"); 
	 	} 
	 	$("#next").css("visibility","visible");
	 	$("#f2").css("display","block"); 
			$("#info").css("display","none"); 
	});

	var info_flag = 2; 

	$("#info-button").click(function(){
		if(info_flag%2==0){
			$("#f2").css("display","none"); 
			$("#info").css("display","block"); 
			info_flag++;
		}

		else{
			$("#f2").css("display","block"); 
			$("#info").css("display","none"); 
			info_flag++;
		}
	});

				
});
	