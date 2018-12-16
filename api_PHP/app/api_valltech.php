<?php

echo 'Olaaaaa!!!';

$array = array("documentoVisitante" => "32165498701","nomeVisitante" => "Carlos Oliveira","empresaVisitante" => "NET","telefoneVisitante" => "12945621236","qualificadorVisitante" => "PRESTADOR","placaVeiculoVisitante" => "ERT1623","datInicioLiberacao" => "2018-12-12T00:00:00","datFimLiberacao" => "2018-12-20T00:00:00","tipoLiberacao" => 3,"observacao" => "","operador" => "","nomeVisitado" => "Elias Silveira","documentoVisitado" => "38262801501","quadraUnidade" => "D","loteUnidade" => "22","lstFotos" => []);

//Depois terá que usar a função json_encode para gerar o JSON:

$json = json_encode($array);

//A chamada da função CURL deve ficar assim:

$ch = curl_init('http://valltechvpn.dyndns.org:1719/api/ControleAcesso/POST/GravarLiberacao');

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(

    'Content-Type: application/json',

    'Content-Length: ' . strlen($json))
);

$jsonRet = json_decode(curl_exec($ch));