<?php

$str = '<?xml version="1.0" encoding="UTF-8"?><programs></programs>';
$xml = simplexml_load_string($str);


$login = $_POST['login'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$email = $_POST['email'];
$name = $_POST['name'];



$login = htmlentities($login, ENT_COMPAT, 'UTF-8', false);
$password = htmlentities($password, ENT_COMPAT, 'UTF-8', false);
$confirm_password = htmlentities($confirm_password, ENT_COMPAT, 'UTF-8', false);
$email = htmlentities($email, ENT_COMPAT, 'UTF-8', false);
$name = htmlentities($name, ENT_COMPAT, 'UTF-8', false);
$pass_cipher = md5($_POST['password']."qwerty");


$xml->reports = "";
$xml->reports->addChild('logins', $login);
$xml->reports->addChild('passwords', $pass_cipher);
$xml->reports->addChild('emails', $email);
$xml->reports->addChild('name', $name);

if ($password == $confirm_password) {
	if ($password == $confirm_password){
		$doc = new DOMDocument('1.0');
		$doc->formatOutput = true;
		$doc->preserveWhiteSpace = true;
		$doc->loadXML($xml->asXML(), LIBXML_NOBLANKS);
		$doc->save('info.xml');
		echo "Hello " . $_POST['name'] . '<br>' ;
	}
}	else{
	require_once "form_registr.php";	
	echo "<script> alert(\"Пароли не совпадают\"); </script>";

}


//Проверка на уникальные поля(работает не так как надо)
/*$load = simplexml_load_file('info.xml');
$loginf = $load->reports->logins;
$email_check = $load->reports->emails;
$name = $xml->reports->name;

if ($loginf == $login || $email_check == $email){
	echo "<script>alert(\"Логин и(или) email не уникальные\");</script>";
	require_once "form_registr.php";
} else {
	echo "Hello " . $name . '<br>';	
}
*/


?>


