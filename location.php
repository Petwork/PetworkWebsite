<?
session_start();
$username = "root"; 
$password = "root"; 
$database = "tindog"; 


$location = mysql_real_escape_string($_POST["location"]);
$userid = $_SESSION['userid'];
 
 /*
move_upload_file($_FILES['user_image']['tmp_name'],$uploads_dir);
move_upload_file($_FILES['pet_image']['tmp_name'],$uploads_dir);*/


$con = mysql_connect(localhost,$username,$password); 
if(!$con)
{
	die("Could not connect :".mysql_error());
}

mysql_select_db($database); 


#$query = "CREATE TABLE contacts (id int(6) NOT NULL auto_increment,first varchar(15) NOT NULL,last varchar(15) NOT NULL,phone varchar(20) NOT NULL,mobile varchar(20) NOT NULL,fax varchar(20) NOT NULL,email varchar(30) NOT NULL,web varchar(30) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";

$query = "UPDATE user SET location='$location' WHERE user_id='$userid'"; 
$success = mysql_query($query);

if(!$success){
	die("Error inserting data!"); 
}
 
mysql_close(); 

echo $userid; 
?>