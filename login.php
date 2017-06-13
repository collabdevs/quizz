<?php

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

echo '{"logado":'.$logado.' , "id" : '.$id.' , "mensagem":"nao autorizado"}';