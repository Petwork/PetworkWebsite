
$(document).ready(function(){


var img_array = [ 'url(dog1.jpg)', 'url(dog2.jpg)', 'url(dog3.jpg)', 'url(dog4.jpg)',  'url(dog5.jpg)', 'url(dog6.jpg)']; 
var name_array = ['Coco', 'Leo', 'Simba', 'Boxer', 'Ruby', 'Doge'];
var age_array = [2 , 3, 1, 5, 7, 2]; 
var current_array=[0,1,2];
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
							console.log(address);
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
	});


				
});
	