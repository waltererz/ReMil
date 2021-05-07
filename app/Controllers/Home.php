<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'contents' => view('home/index'),
		];

		return view('layouts/index', $data);
	}
}
