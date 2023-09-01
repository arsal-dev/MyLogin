<?php 

// $host;
// $user_name;
// $PAss;
// $db;

define("HOST","localhost");
define("user_name","root");
define("password","");
define("DB","login2");

$conn = new mysqli(HOST,user_name,password,DB);

if ($conn->connect_error) {
    echo "ERROR: In COnnection";
}

?>