This is a list of depricated classes in Mongo (PHP5.6) used in genapp codes (as of Nov. 2018) that should be modified 
to latest MongoDB extension + PHP7.
`require vendor/autoload.php` is required to implement MongoDB extension in PHP7.

This table  is based on the PHP library manual(https://docs.mongodb.com/php-library/master/reference/class/MongoDBDatabase/).


| Items | Mongo 3.6 + PHP5.6 | MongoDB 4.0 + PHP7.2 |
---|---|---
|  1    | $m = new MongoClient(); | $m = new MongoDB\Client(); |
|  2    | $now = new MongoDate(); | $now = new MongoDB\BSON\UTCDateTime(); |
|  3    | findOne()               | findOne() |
|  4    | update()                | updateOne() or updateMany()|
