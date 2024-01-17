<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Artist;
use Framework\Controller;
use Framework\Response;
use Framework\Exceptions\PageNotFoundException;

class Artists extends Controller
{
	public function __construct(private Artist $model)
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
		$artists = $this->model->findAll();
		// $this->console_log($artists);
		return $this->view("Artists/artists.mvc.php", [
			"artists" => $artists,
			"total" => $this->model->getTotal()
		]);
	}

	public function show(string $id): Response
	{
		$artist = $this->getArtist($id);

		return $this->view("Artists/show.mvc.php", [
			"artist" => $artist
		]);
	}

	public function edit(string $id): Response
	{
		$artist = $this->getArtist($id);

		return $this->view("Artists/edit.mvc.php", [
			"artist" => $artist
		]);
	}

	public function new(): Response
	{
		return $this->view("Artists/new.mvc.php");
	}

	public function create(): Response
	{
		$data = [
			"Nickname" => $this->request->post["Nickname"],

		];

		if ($this->model->insert($data)) {

			return $this->redirect("/artists/{$this->model->getInsertID()}/show");
		} else {

			return $this->view("Artists/new.mvc.php", [
				"errors" => $this->model->getErrors(),
				"artist" => $data
			]);
		}
	}

	public function update(string $id): Response
	{
		$artist = $this->getArtist($id);

		$artist["Nickname"] = $this->request->post["Nickname"];

		if ($this->model->update($id, $artist)) {

			return $this->redirect("/artists/{$id}/show");
		} else {

			return $this->view("Artists/edit.mvc.php", [
				"errors" => $this->model->getErrors(),
				"artist" => $artist
			]);
		}
	}

	public function delete(string $id): Response
	{
		$artist = $this->getArtist($id);

		return $this->view("Artists/delete.mvc.php", [
			"artist" => $artist
		]);
	}

	public function destroy(string $id): Response
	{
		$artist = $this->getArtist($id);

		$this->model->delete($id);

		return $this->redirect("/artists");
	}

	private function getArtist(string $id): array
	{
		$artist = $this->model->find($id);

		if ($artist === false) {

			throw new PageNotFoundException("Artist not found");
		}

		return $artist;
	}
}
