<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Форма для отправки сведений о пользователе в базу данных</title>
	</head>
	<body>
		<form id="form">
			<label for="full_name">Ф. И. О.</label><br>
			<input id="full_name" type="text" name="full_name" maxlength="32"><br>

			<label for="email">E-mail *</label><br>
			<input id="email" type="email" name="email" maxlength="32" required><br>

			<label for="phone_number">Номер телефона (без "+") *</label><br>
			<input id="phone_number" type="tel" name="phone_number" maxlength="12" pattern="^\d{12,}$" required><br>
			<br>
			<input type="submit" name="submit" value="Отправить"><br>
			<br>
			* – обязательные для заполнения поля
		</form>

		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
	</body>
</html>
