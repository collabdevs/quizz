<?php

include 'vendor/autoload.php';

const DEFAULT_URL = 'https://falamebolsa.firebaseio.com';
const DEFAULT_TOKEN = 'q2zdhijR4fM48PH7KwzIPDTJINn2BaFPf7sGqKdf';
const DEFAULT_PATH = '/quizz';


use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$params = json_decode(file_get_contents('php://input'),true);

try {

	$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/falamebolsa-firebase-adminsdk-w7t5v-7b79151d08.json');
	$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();
} catch (Exception $e) {
	var_dump($e);
}



$database = $firebase->getDatabase();

$reference = $database->getReference(DEFAULT_PATH.'/usuarios/'.$params['email']);

$snapshot = $reference->getSnapshot();

$id = 0;
$acesso = 0;
$dados = $snapshot->getValue();

if($dados['name'] != ''){
	$nome = $dados['name'];
	$acesso = $dados['role']['acesso'];
	$grupo = $dados['role']['grupo'];
	$logado  = 'true';
}else{
	$logado = 'false';
}

echo '{"logado":'.$logado.',"nome":"'.$nome.'" ,"acesso":'.$acesso.' ,"grupo":"'.$grupo.'" , "id" : '.$id.' , "mensagem":"nao autorizado"}';

























/*
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