<?php
   // connect to mongodb
   //$m = new MongoClient();

    //require 'vendor/autoload.php'; // include Composer's autoloader
    //$m = new MongoDB\Client();	

    $m = new MongoDB\Driver\Manager('mongodb://127.0.0.1:27017');
   echo "Connection to database successfully";
   // select a database
   $db = $m->mydb;
	
   echo "Database mydb selected";
?>

