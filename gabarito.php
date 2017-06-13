<?php


$params = json_decode(file_get_contents('php://input'),true);


include 'vendor/autoload.php';
const DEFAULT_URL = 'https://falamebolsa.firebaseio.com';
const DEFAULT_TOKEN = 'q2zdhijR4fM48PH7KwzIPDTJINn2BaFPf7sGqKdf';
const DEFAULT_PATH = '/quizz';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

//print_r($firebase);

$params['hora'] = new DateTime('NOW');
// --- reading the stored string ---
$name = $firebase->get(DEFAULT_PATH . '/questionarios/w1/0/'.$params['Q']);
$questao = json_decode($name, true);
if ($params['R'] == $questao['correta'])
	echo '{"resposta":"1"}';
else
	echo '{"resposta":"0"}';

$firebase->set(DEFAULT_PATH . '/respostas/w1/0/'.$params['id_logado'].'/'.$params['Q'], $params);
