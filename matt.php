<?php

echo "My php module works<br>";

$m = new MongoClient($server='10.184.53.206', $options = array('username'=>'scalr', 'password' =>'Z9unmumHOt') ); // connect

echo "Connection to database successfully<br>";

//$m->authenticate($username='scalr', $password='Z9unmumHOt');
$db = $m->matt;

echo "Database matt selected<br>";
$collection = $db->createCollection('mycol');
$collection = $db->mycol;

echo "Collection selected succsessfully<br>";

   $document = array( 
      "title" => "MongoDB", 
      "description" => "database", 
      "likes" => 100,
      "url" => "http://www.tutorialspoint.com/mongodb/",
      "by", "tutorials point"
   );
   $collection->insert($document);
   echo "Document inserted successfully<br>";


?>

