<?php

require '../lib/WS.php';

$_ws = new WS();

$data = [
	'act' => 'GetToken',
	'username' => $_ws->username,
	'password' => $_ws->password
];

$_result = json_decode($_ws->execute($data));

$_token = $_result->data->token;

$fungsi = $_GET['fungsi'];

$dict = [
    'act' => 'GetDictionary',
    'token' => $_token,
    //'token' => 'efce4b091de6abcb8126740a212b7cb9',
    'fungsi' => $fungsi
];

$_dict = json_decode($_ws->execute($dict));
echo "<pre>";
print_r($_dict);
echo "</pre>";

?>