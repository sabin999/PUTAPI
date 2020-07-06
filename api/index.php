<?php
require '../dbconfig.php';

// http://localhost/putapi/api/index.php
// [{
//    "name":"sabin"
//},
//{    "name":"sachin"
//},
//{   "name":"Sasas"
//}]


$post = file_get_contents('php://input');
$input = (array)json_decode($post,true);



$sql ="INSERT INTO new (`name`) VALUES ('".$input[0]['name']."')";
$result = $mysqli->query($sql);

$a = end($input);

print_r($a['name']);

?>





