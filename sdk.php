<?php
include 'vendor/autoload.php';

const DEFAULT_URL = 'https://falamebolsa.firebaseio.com';
const DEFAULT_TOKEN = 'q2zdhijR4fM48PH7KwzIPDTJINn2BaFPf7sGqKdf';
const DEFAULT_PATH = '/quizz';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

echo 'aqui';
try {



$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/falamebolsa-firebase-adminsdk-w7t5v-7b79151d08.json');
$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();
} catch (Exception $e) {
	var_dump($e);
}




$database = $firebase->getDatabase();

$reference = $database->getReference(DEFAULT_PATH.'/questionarios/w1');

//print_r($reference);

/*
$database->getReference(DEFAULT_PATH.'/usuarios/danielmmf')
   ->set([
       'name' => 'usuario',
       'emails' => [
           'support' => 'support@domain.tld',
           'sales' => 'sales@domain.tld',
       ],
       'role' => [
           'grupo' => 'admin',
           'acesso' => '1',
       ]
      ]);


   $database->getReference(DEFAULT_PATH.'/usuarios/zezinho')
   ->set([
       'name' => 'zezinho',
       'emails' => [
           'support' => 'support@domain.tld',
           'sales' => 'sales@domain.tld',
       ],
       'role' => [
           'grupo' => 'admin',
           'acesso' => '1',
       ]
      ]);*/

//$database->getReference(DEFAULT_PATH.'/usuarios/zezinho/name')->set('zelaozinho');

/*


$reference = $database->getReference(DEFAULT_PATH.'/usuarios');

$snapshot = $reference->getSnapshot();

$value = $snapshot->getValue();

print_r($value);


*/
$reference = $database->getReference(DEFAULT_PATH.'/usuarios/danielmmf');

    $snapshot = $reference->getSnapshot();

    

$result = $database->getReference("/usuarios/")->orderByKey()->limitToLast(1);

foreach ($snapshot as $key => $value) {
	# code...
	print_r($value);
	print_r($key);
}




print_r($snapshot->getValue());
echo 'final';