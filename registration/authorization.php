<?php

$xml = simplexml_load_file('info.xml');
$login = $xml->reports->logins;
$pass_cipher = $xml->reports->passwords;
$name = $xml->reports->name;



if ($login == $_POST['login'] && $pass_cipher == (md5($_POST['password']."qwerty"))) {
	echo "Hello " . $name . '<br>';
}else{
	echo "Введенный данные не верные";
}

?>