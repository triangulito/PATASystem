<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surgery extends CI_Controller {

	public function index() {
		$this->load->model('AnimalModel');
		$data['title'] = 'Lista de animales para pesas';
		$data['animals'] = $this->AnimalModel->select();
		foreach ($data['animals'] as $a) {
			$person = $this->AnimalModel->getPersonByAnimalID($a->id);
			$data['animals']->phone = $person->phone;
			$data['animals']->personName = $person->personName;
		}

		LoadViews('Surgery/List', $data);
	}
}