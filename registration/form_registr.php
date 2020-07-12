<!DOCTYPE html>
<html>
<head>
		<title>Регистрация/автоизация</title>
		<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<center>	
	<form method="POST" action="reg.php">
		<input type="text" required  oninvalid="this.setCustomValidity('Данное поле обязательно!')" oninput="setCustomValidity('')" placeholder="Введите логин" name="login"> <br>
		<input type="password" minlength="6" required  oninvalid="this.setCustomValidity('Данное поле обязательно!')" oninput="setCustomValidity('')" placeholder="Введите пароль" name="password" id="Pasword" ><br>
		<input type="password" minlength="6" required  oninvalid="this.setCustomValidity('Данное поле обязательно!')" oninput="setCustomValidity('')" placeholder="Повторите пароль" name="confirm_password" id="Confirm_pasword" ><br>

		<input type="text" required  oninvalid="this.setCustomValidity('Данное поле обязательно!')" oninput="setCustomValidity('')" placeholder="Введите email" name="email"><br>
		<input type="text" required  oninvalid="this.setCustomValidity('Данное поле обязательно!')" oninput="setCustomValidity('')" placeholder="Введите имя" name="name"><br>
		<input type="submit" value="Регистрация">
		<a href="form_authorization.php">Авторизация</a>
	</form>
</center>
</body>
</html>