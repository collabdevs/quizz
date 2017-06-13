<?php


$params = json_decode(file_get_contents('php://input'),true);
//print_r($params);

include 'vendor/autoload.php';
const DEFAULT_URL = 'https://falamebolsa.firebaseio.com';
const DEFAULT_TOKEN = 'q2zdhijR4fM48PH7KwzIPDTJINn2BaFPf7sGqKdf';
const DEFAULT_PATH = '/quizz';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

//print_r($firebase);


// --- reading the stored string ---
$name = $firebase->get(DEFAULT_PATH . '/questionarios/w1/0/'+$params['Q']);
print_r($params);


$firebase->set(DEFAULT_PATH . '/respostas/w1/0/'.$params['id_logado'].'/'.$params['Q'], $params);
