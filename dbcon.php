<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('ridesmnl-48ff4-firebase-adminsdk-imvs7-8aad582dbc.json')
    ->withDatabaseUri('https://ridesmnl-48ff4-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();

?>