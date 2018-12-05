This is a list of depricated classes in Mongo (PHP5.6) used in genapp codes (as of Nov. 2018) that should be modified 
to latest MongoDB extension + PHP7.
`require vendor/autoload.php` is required to implement MongoDB extension in PHP7.

This table  is based on the PHP library manual(https://docs.mongodb.com/php-library/master/reference/class/MongoDBDatabase/).


| | Mongo 2.6 + PHP5.6    | MongoDB 4.0 + PHP7.2(composer) | Ref | Test file |
---|---|---|---|---
|  1  | $m = new MongoClient(); | $m = new MongoDB\Client(); | [1](https://docs.mongodb.com/php-library/master/reference/class/MongoDBClient/index.html#phpclass.MongoDB\Client) | |
|  2  | $now = new MongoDate(); | $now = new MongoDB\BSON\UTCDateTime(); |[1](http://php.net/class.mongodb-bson-utcdatetime), [2](https://docs.mongodb.com/php-library/master/tutorial/custom-types/index.html) | |
|  3  | selectDB() | selectDatabase() |[1](http://php.net/manual/en/mongoclient.selectdb.php), [2](https://docs.mongodb.com/php-library/master/reference/method/MongoDBClient-selectDatabase/) | <sub>/util/jobs_history_web.php</sub>|
|  4  | findOne()               | findOne() |[1](https://docs.mongodb.com/php-library/master/tutorial/crud/#query-documents) | |
|  5  | find()               | find() | [1](https://docs.mongodb.com/php-library/master/tutorial/crud/#query-documents), [2](https://docs.mongodb.com/manual/tutorial/project-fields-from-query-results/)| |
|  6  | <sub>find()->sort( [ "name" => 1 ] )  </sub>             | find([],['sort' => [ "name" => 1 ], ] | [1](https://docs.mongodb.com/php-library/master/tutorial/crud/#query-documents)| <sub>/sys/sys_manageusers.php</sub>|
|  7  | insert()               | insertOne() or insertMany()| [1](https://docs.mongodb.com/php-library/master/tutorial/crud/#insert-documents) | |
|  8  | update()                | updateOne() or updateMany()| [1](https://docs.mongodb.com/php-library/master/tutorial/crud/#update-documents)| |
|  9  | distinct()                | distinct()| [1](http://php.net/manual/en/mongocollection.distinct.php), [2](https://docs.mongodb.com/php-library/master/reference/method/MongoDBCollection-distinct/)| <sub>/sys/sys_pull.php</sub>|
|  10  | remove()                | deleleOne() or deleteMany()| [1](https://docs.mongodb.com/php-library/master/reference/class/MongoDBCollection/)| <sub>There is no remove() method in vendor. see sys_jobintegritycheck.php</sub>|
|  11  | '\_id' => MongoId( $r )     | '\_id' => new MongoDB\BSON\ObjectId( $r ) | [1](https://github.com/mongodb/mongo-php-library/issues/217), [2](http://php.net/manual/en/class.mongodb-bson-objectid.php#class.mongodb-bson-objectid) |  | 
|  12 | MongoCursorException | \Exception or MongoDB\Exception | [1](https://docs.mongodb.com/php-library/master/reference/exception-classes/index.html#phpclass.MongoDB\Exception\Exception) | |
|  13 | $cursor => any Methods     | Use tailable Cursor Iteration for future application| [1](https://docs.mongodb.com/php-library/master/tutorial/tailable-cursor/index.html#wrapping-a-normal-cursor)  | |
