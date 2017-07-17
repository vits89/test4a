<?php
try {
	$pdo = new PDO('mysql:host=localhost;dbname=testDb', 'root', '');

	$query = 'INSERT INTO `users` (`full_name`, `email`, `phone_number`) VALUES ("' . $_POST['fullName'] . '", "' . $_POST['email'] . '", "' . $_POST['phoneNumber'] . '");';

	$pdo->query($query);

	echo 'Данные были успешно добавлены в базу данных!';
} catch (PDOException $e) {
	echo 'К сожалению, что-то пошло не так и данные не были добавлены в базу данных.';
}
