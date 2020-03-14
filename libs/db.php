<?php

$dsn = 'mysql:host=localhost;dbname=auetaa'; 
$login = 'root'; 
$passwd = '';  
// setting PDO to use buffered queries in mysql is 
// important if you plan on using multiple result cursors  in the template. 
$db = new PDO($dsn, $login, $passwd, array(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true)); 