<?
session_start(); 
$userid = $_SESSION['userid']; 


$username = "root";
$password = "root";
$database = "tindog";
$con = mysql_connect(localhost,$username,$password);
if(!$con)
{
    die("Could not connect :".mysql_error());
}

mysql_select_db($database);


$fetch = "SELECT * FROM user";
$result = mysql_query($fetch);
$n_rows = mysql_num_rows($result);

$return_arr = array();


for($i=0; $i < $n_rows; $i++)
{
    $row['pet_name'] = mysql_result($result, $i, "dog_name");
    $row['pet_age'] = mysql_result($result, $i, "dog_age");
    $row['pet_image']= mysql_result($result, $i, "dog_image");
    $row['pet_breed']= mysql_result($result, $i, "dog_breed");
    $row['pet_type'] = mysql_result($result, $i, "dog_type");
    $row['comments'] = mysql_result($result, $i, "comments");
    $row['contact'] = mysql_result($result, $i, "contact"); 
    $row['owner_image']= mysql_result($result, $i, "owner_image"); 
    $row['location'] = mysql_result($result,$i, "location"); 
    $row['userid'] = mysql_result($result,$i, "user_id"); 

    if($userid == $row['userid']){
        continue; 
    }
    array_push($return_arr,$row);
}

mysql_close();
echo json_encode($return_arr,JSON_UNESCAPED_SLASHES);


?> 