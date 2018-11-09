# php7
To work on MongoDB in PHP, MongoDB PHP driver should be installed. 
Before working on **MongoDB**, we should carefully use the name **Mongo**, as MongoDB teams call **mongo extension** is an older, legacy driver for PHP 5.x and **mongo extension** is no longer maintained. Instead, they recommend to use the **mongodb extension** with **PHP library** which implements a more full-featured API on top of the bare-bones **mongodb extension** according to the documentation. ([MongoDB Wepgage](https://docs.mongodb.com/ecosystem/drivers/php/))

Now, the **MongoDB PHP Driver** in MongoDB official documentation is actually the combination of **mongodb extension** and **PHP library** as seen in the image below. 
![MongoDB Compatiblity](../master/MongoDB_PHP_compatibility.png)

![MongoDB Compatiblity](../master/MongoDB_Language_compatibility.png)

1. Installation of **MongoDB PHP driver** (Linux, Unix, and Mac only) ([http://php.net/manual/en/set.mongodb.php](http://php.net/manual/en/set.mongodb.php)) 
 - **monogodb extension**: use `sudo pecl install mongodb` and add (optionally) add a line `extension=mongodb.so` in php.ini file. 
 - **PHP library**: use `composer require mongodb/mongodb` in the directory of project.
 - As of Nov. 2018, the latest versions are
   - PHP = 7.2.10-0ubuntu0.18.04.1 (cli) (`php --version`)
   - MongoDB = 4.0.4 (`mongod --version`)
   - **mongodb** extension = 1.5.3 (`php --ri mongodb | grep version`)
   - PHP library = 1.4.2 (see composer.json)
 
 - As of Nov. 2018, genapp is built in
   - PHP = 5.6.37-1+ubuntu16.04.1+deb.sury.org+1 (cli) 
   - Mongo = 2.6.10
   - **mongo** extension = 1.6.16
   - PHP library = None
   
 - **According to MongoBD compatibility table, the latest MongoDB PHP driver dosen't run with MongoBD 2.6 which is the current version used in genapp.**
 
 2. [MongoDB CRUD Operations](https://docs.mongodb.com/manual/crud/)
  - **CRUD** is **C**reate, **R**ead, **Update**, **Delete** Operations.
  - Here, I summarize the working CRUD operations in PHP7.2 and PHP5.6. 
