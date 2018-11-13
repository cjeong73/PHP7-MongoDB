<?php
   // connect to mongodb
   //$m = new MongoClient();   PHP5 
    require '../vendor/autoload.php'; // include Composer's autoloader
    $m = new MongoDB\Client();

   echo "Connection to database successfully\n" ;
	
   // select a database
   $db = $m->mydb;
   echo "Database mydb selected\n";
   $collection = $db->mycol;
   echo "Collection selected succsessfully\n";

   // now update the document
   $collection->updateOne(array("title"=>"MongoDB"), 
      array('$set'=>array("title"=>"MongoDB test")));
   echo "Document updated successfully\n";
	
   // now display the updated document
   $cursor = $collection->find();   // both php5 and php7
	
   // iterate cursor to display title of documents
   echo "Updated document\n";
/* This is PHP5 Method
 Find a way to implement it    	
   foreach ($cursor as $document) {
      echo $document["title"] . "\n";
   }
*/

   foreach ( $cursor as $id => $value ) {
       echo "$id:";
       var_dump( $value );
   }
?>

