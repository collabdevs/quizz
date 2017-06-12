<?php


include 'vendor/autoload.php';
const DEFAULT_URL = 'https://falamebolsa.firebaseio.com';
const DEFAULT_TOKEN = 'q2zdhijR4fM48PH7KwzIPDTJINn2BaFPf7sGqKdf';
const DEFAULT_PATH = '/quizz';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

//print_r($firebase);

$opcoes = range('A', 'Z');



// --- reading the stored string ---
$name = $firebase->get(DEFAULT_PATH . '/questionarios/w1/0');
$name = json_decode($name , true);
$perguntas = array();
foreach ($name as $n) {
$x= 0;
	$respostas = array();
	foreach ($n['respostas'] as $value) {
		//print_r($key);
		//print_r($value[$opcoes[$x]]);
		$respostas[] = array('opcao' => $opcoes[$x], 'texto' => $value[$opcoes[$x]]);
		$x++;
	}
	//die();
	$perguntas[] = array('pergunta' => $n['pergunta'] , 'respostas' => $respostas);

}
print_r(json_encode($perguntas));
