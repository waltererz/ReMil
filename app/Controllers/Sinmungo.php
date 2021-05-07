<?php

namespace App\Controllers;

class Sinmungo extends BaseController
{
	public function index()
	{
        $data = [
            'contents' => view('sinmungo/index', ['menu' => view('sinmungo/menu')]),
        ];

		return view('layouts/index', $data);
	}

    public function list()
    {
        $data = [
            'contents' => view('sinmungo/list', ['menu' => view('sinmungo/menu')]),
        ];

		return view('layouts/index', $data);
    }

    public function view()
    {
        $data = [
            'contents' => view('sinmungo/view', ['menu' => view('sinmungo/menu')]),
        ];

		return view('layouts/index', $data);
    }

    public function form()
    {
        $data = [
            'contents' => view('sinmungo/form', ['menu' => view('sinmungo/menu')]),
        ];

        return view('layouts/index', $data);
    }

    public function search()
    {
        $data = [
            'contents' => view('sinmungo/search', ['menu' => view('sinmungo/menu')]),
        ];

        return view('layouts/index', $data);
    }

    public function post()
    {
        // comments 테이블에 데이터를 입력하기 위해 모델을 불러옴
        $commentModel = model('App\Models\CommentModel');
        
        $data = [
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'category' => $_POST['category'],
            'unit' => $_POST['unit'],
            'comment' => $_POST['comment'],
            'timestamp' => time(),
        ];

        $commentModel->insert($data);
        
        header("Location: https://remil.kr/sinmungo/list");
        exit();
    }
}
