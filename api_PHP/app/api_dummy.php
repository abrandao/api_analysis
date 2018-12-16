<?php

$array = array("name" => "Roger", "salary" => "444", "age" => 76, "id" => 4124);

//Depois terá que usar a função json_encode para gerar o JSON:

$json = json_encode($array);

//A chamada da função CURL deve ficar assim:

$ch = curl_init('http://dummy.restapiexample.com/api/v1/create');

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(

    'Content-Type: application/json',

    'Content-Length: ' . strlen($json))

);

//O tratamento do retorno da chamada deve acontecer na variável que está recebendo o resultado do curl_exec, caso o retorno seja um JSON também, você deve usar a função json_decode.

$jsonRet = json_decode(curl_exec($ch));
