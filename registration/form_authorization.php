<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Регистрация/автоизация</title>
</head>
<body>
<center>	
	<form method="POST" action="authorization.php">
		<input type="text" required  oninvalid="this.setCustomValidity('Данное поле обязательно!')" oninput="setCustomValidity('')" placeholder="Введите логин" name="login"> <br>
		<input type="password" required  oninvalid="this.setCustomValidity('Данное поле обязательно!')" oninput="setCustomValidity('')" placeholder="Введите пароль" name="password" id="Pasword"><br>
		<input type="submit" value="Авторизация">
		<a href="form_registr.php">Зарегистрироваться</a>
	</form>



</center>
</body>
</html>