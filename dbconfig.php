<?php $mysqli = new mysqli("localhost","root","","user");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if(!mysqli_select_db($mysqli,'user'))
{
  echo 'Not Selected the Database';
}
?>