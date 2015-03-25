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
        "likes" => rand(0,100),
        "url" => "http://www.tutorialspoint.com/mongodb/",
        "by", "tutorials point"
);
$collection->insert($document);
echo "Document inserted successfully<br>";

echo "<p>";

$cursor = $collection->find();
// iterate cursor to display title of documents
foreach ($cursor as $document) {
      echo $document["title"] . "<br>";
      echo $document["description"] . "<br>";
      echo $document["likes"] . "<br>";
      echo $document["url"] . "<br>";
      echo "<p>";
}

?>
