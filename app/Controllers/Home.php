<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		header('Location: https://remil.kr/sinmungo');
		exit();
	}
}
