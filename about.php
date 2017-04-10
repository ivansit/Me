<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Обо мне</title>
</head>
<body>
	<h1>Страница пользователя Иван</h1>
	<?php 
		define ('BR', '<br>');

		$name = 'Имя: '.'Иван';
		echo $name. BR.BR;

		$age = 'Возраст: '. 26;
		echo $age. BR.BR;

		$email = 'Адрес электронной почты: '.'ivansit357@mail.ru';
		echo $email. BR.BR;

		$town = 'Город: '.'Дальнереченск';
		echo $town. BR.BR;

		$myself = 'О себе: '.'Начинающий веб-разработчик';
		echo $myself;
	?>
</body>
</html>