<?php

include "db.conf";
include "db.php";
// Create connection
$conn = mysqli_connect($hostname, $username, $password,$database);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$service=array{"nova","glance","heat","keystone","cinder","neutron"};

 if(!empty($_GET["$service"])){
 
	switch ($service) {
    case "nova":
	header("Location:./nova.php");
        //echo "Your service is nova";
        break;

    case "glance":
	header("Location:./glance.php");
        //echo "Your service is glance";
        break;

    case "cinder":
	header("Location:./cinder.php");
        //echo "Your service is cinder";
        break;

    case "keystone":
	header("Location:./keystone.php");
        //echo "Your service is keystone";
        break;

    case "neutron":
	header("Location:./neutron.php");
        //echo "Your service is neutron";
        break;

    case "heat":
	header("Location:./heat.php");
        //echo "Your service is heat";

    default:
        echo "Service doesn't exist";
}
?>
  
