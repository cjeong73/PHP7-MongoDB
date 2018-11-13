<?php
   // connect to mongodb
    require 'vendor/autoload.php'; // include Composer's autoloader
    $m = new MongoDB\Client();

   echo "Connection to database successfully";
	
   // select a database
   $db = $m->mydb;
   echo "Database mydb selected";
   $collection = $db->createCollection("mycol");
   echo "Collection created succsessfully";
?>

