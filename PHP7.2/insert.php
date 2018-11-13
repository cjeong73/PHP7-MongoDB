<?php
   // connect to mongodb
    require 'vendor/autoload.php'; // include Composer's autoloader
    $m = new MongoDB\Client();

   echo "Connection to database successfully";
	
   // select a database
   $db = $m->mydb;
   echo "Database mydb selected";
   $collection = $db->mycol;
   echo "Collection selected succsessfully";
	
   $document = array( 
      "title" => "MongoDB", 
      "description" => "database", 
      "likes" => 100,
      "url" => "http://www.tutorialspoint.com/mongodb/",
      "by" => "tutorials point"
   );
	
//   $collection->insert($document);
   $collection->insertOne($document);

   echo "Document inserted successfully";
?>
