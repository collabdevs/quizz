<?php
include 'vendor/autoload.php';
const DEFAULT_URL = 'https://falamebolsa.firebaseio.com';
const DEFAULT_TOKEN = 'q2zdhijR4fM48PH7KwzIPDTJINn2BaFPf7sGqKdf';
const DEFAULT_PATH = '/quizz';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

//print_r($firebase);


// --- reading the stored string ---
$name = $firebase->get(DEFAULT_PATH . '/usuarios/w1/', array('email' => 'danielmmf@gmail.com'));
$questao = json_decode($name, true);
print_r($questao);


/*

$params = json_decode(file_get_contents('php://input'),true);


if($params['email'] == 'certo' OR $params['email'] == 'dani' OR $params['email'] == 'vogel')
	$logado = 'true';
else
	$logado = 'false';


$id=1;
if($params['email'] == 'certo')
	$id=10;
if($params['email'] == 'vogel')
	$id=11;

echo '{"logado":'.$logado.' , "id" : '.$id.' , "mensagem":"nao autorizado"}';*/