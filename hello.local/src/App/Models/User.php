<?php

declare(strict_types=1);

namespace App\Models;

use Framework\Model;
use PDO;

class User extends Model
{
	protected $table = "Users";
	protected $db;

	public function validate(array $data): void
	{
		if (empty($data["Nickname"])) {
			$this->addError("Nickname", "Имя должно быть введено");
		}

		if (empty($data["Email"])) {
			$this->addError("Email", "Электронная почта должна быть введена");
		}

		if (empty($data["Password"])) {
			$this->addError("Password", "Пароль должен быть введен");
		}

		if (empty($data["Status"])) {
			$this->addError("Status", "Введите корректный статус");
		}
	}


	// public function __construct(PDO $db)
	// {
	// 	$this->db = $db;
	// }


	// public function authenticate(string $login, string $password): bool
	// {
	// 	// Находим пользователя по логину
	// 	$user = $this->find('Email', $login);

	// 	// Проверяем, найден ли пользователь и совпадает ли хеш пароля
	// 	if ($user && password_verify($password, $user['Password'])) {


	// 		return true;
	// 	}

	// 	// Аутентификация не удалась
	// 	return false;
	// }
	// public function updateLastLoginTime(string $login): void
	// {
	// 	$currentTime = date("Y-m-d H:i:s");
	// 	$sql = "UPDATE {$this->table} SET LastLoginTime = ? WHERE Email = ?";
	// 	$stmt = $this->db->prepare($sql);
	// 	if ($stmt !== false) {
	// 		$result = $stmt->execute([$currentTime, $login]);

	// 		if ($result === false) {
	// 			// Обработка ошибки выполнения запроса
	// 		}

	// 		// Закрываем prepared statement
	// 		$stmt->closeCursor();
	// 	} else {
	// 		// Обработка ошибки подготовки запроса
	// 	}
	// }

	// public function checkUser()
	// {
	// 	$login = $_POST["Email"];
	// 	$password = $_POST["Password"];

	// 	$sql = "SELECT * from Users where Email = :login and Password = :password";
	// 	$stmt = $this->db->prepare($sql);
	// 	$stmt->bindValue(":login", $login, PDO::PARAM_STR);
	// 	$stmt->bindValue(":password", $password, PDO::PARAM_STR);
	// 	$stmt->execute();

	// 	$res = $stmt->fetch(PDO::FETCH_ASSOC);

	// 	if (!empty($res)) {
	// 		echo "ok";
	// 	} else {
	// 		return false;
	// 	}
	// }
}
