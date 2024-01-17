<?php

declare(strict_types=1);

namespace App\Models;

use Framework\Model;
use PDO;

class Artist extends Model
{
	protected $table = "Artists";

	public function getTotal(): int
	{
		$sql = "SELECT COUNT(*) as total FROM Artists";

		$conn = $this->database->getConnection();

		$stmt = $conn->query($sql);

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		return (int) $row["total"];
	}
}
