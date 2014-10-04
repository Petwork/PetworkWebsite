<?
$username = "root"; 
$password = "root"; 
$database = "tindog"; 


$pet_age = $_POST["pet_age"];
$pet_name = $_POST["pet_name"];
$pet_type = $_POST["pet_type"];
$pet_breed = $_POST["pet_breed"];
$comments = $_POST["comments"];
$contact = $_POST["contact"];

$owner_image = ($_FILES['user_image']['name']); 
$pet_image = ($_FILES['pet_image']['name']); 


$target = 'images/';
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

$query = "INSERT INTO user VALUES('','$pet_name','$pet_age', '','','','$pet_breed','$pet_type', '$comments', '$contact', '$pet_image', '$owner_image')";

$success = mysql_query($query);

if(!$success){
	die("Error inserting data!"); 
}

move_uploaded_file($_FILES['user_image']['tmp_name'], $target.$_FILES['user_image']['name']);
move_uploaded_file($_FILES['pet_image']['tmp_name'], $target.$_FILES['pet_image']['name']);
 
mysql_close(); 
header("Location:/home.html");
?>
