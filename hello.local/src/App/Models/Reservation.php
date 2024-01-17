<?php

declare(strict_types=1);

namespace App\Models;

use Framework\Model;
use PDO;

class Reservation extends Model
{
	protected $table = "Reservations";



	public function getTotal(): int
	{
		$sql = "SELECT COUNT(*) as total FROM Reservations";

		$conn = $this->database->getConnection();

		$stmt = $conn->query($sql);

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		return (int) $row["total"];
	}
}
