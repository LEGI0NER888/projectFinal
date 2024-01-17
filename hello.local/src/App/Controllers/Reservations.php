<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Reservation;
use Framework\Controller;
use Framework\Response;
use Framework\Exceptions\PageNotFoundException;

class Reservations extends Controller
{
	public function __construct(private Reservation $model)
	{
	}

	public function console_log($data)
	{ // сама функция
		if (is_array($data) || is_object($data)) {
			echo ("<script>console.log('php_array: " . json_encode($data) . "');</script>");
		} else {
			echo ("<script>console.log('php_string: " . $data . "');</script>");
		}
	}

	public function index(): Response
	{
		$reservations = $this->model->findAll();
		// $this->console_log($artists);
		return $this->view("Reservations/reservations.mvc.php", [
			"reservations" => $reservations,
			"total" => $this->model->getTotal()
		]);
	}

	public function show(string $id): Response
	{
		$reservation = $this->getReservation($id);

		return $this->view("Reservations/show.mvc.php", [
			"reservation" => $reservation
		]);
	}

	public function edit(string $id): Response
	{
		$reservation = $this->getReservation($id);

		return $this->view("Reservations/edit.mvc.php", [
			"reservation" => $reservation
		]);
	}

	public function new(): Response
	{
		return $this->view("Reservations/new.mvc.php");
	}

	public function create(): Response
	{
		$data = [
			"Price" => $this->request->post["Price"],
			"Users_ID" => empty($this->request->post["Users_ID"]) ? null : $this->request->post["Users_ID"],
			"Concerts_ID" => empty($this->request->post["Concerts_ID"]) ? null : $this->request->post["Concerts_ID"],


		];

		if ($this->model->insert($data)) {

			return $this->redirect("/Reservations/{$this->model->getInsertID()}/show");
		} else {

			return $this->view("Reservations/new.mvc.php", [
				"errors" => $this->model->getErrors(),
				"reservation" => $data
			]);
		}
	}

	public function update(string $id): Response
	{
		$reservation = $this->getReservation($id);

		$reservation["Price"] = $this->request->post["Price"];
		$reservation["Users_ID"] = empty($this->request->post["Users_ID"]) ? null : $this->request->post["Users_ID"];
		$reservation["Concerts_ID"] = empty($this->request->post["Concerts_ID"]) ? null : $this->request->post["Concerts_ID"];

		if ($this->model->update($id, $reservation)) {

			return $this->redirect("/reservations/{$id}/show");
		} else {

			return $this->view("Reservations/edit.mvc.php", [
				"errors" => $this->model->getErrors(),
				"reservation" => $reservation
			]);
		}
	}

	public function delete(string $id): Response
	{
		$reservation = $this->getReservation($id);

		return $this->view("Reservations/delete.mvc.php", [
			"reservation" => $reservation
		]);
	}

	public function destroy(string $id): Response
	{
		$reservation = $this->getReservation($id);

		$this->model->delete($id);

		return $this->redirect("/reservations");
	}

	private function getReservation(string $id): array
	{
		$reservation = $this->model->find($id);

		if ($reservation === false) {

			throw new PageNotFoundException("Reservation not found");
		}

		return $reservation;
	}
}
