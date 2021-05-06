<?php

namespace App\Controllers;

class Sinmungo extends BaseController
{
	public function index()
	{
        // 신문고 view에서 사용되는 각종 변수 저장
        $data = [
            // 레이아웃에 사용될 신문고 view 파일 내용 (레이아웃 view에서 변수 contents를 활용해 사용)
            'contents' => view('sinmungo/index'),
        ];

		return view('layouts/index', $data);
	}

    public function form()
    {
        $data = [
            'contents' => view('sinmungo/form'),
        ];

        return view('layouts/index', $data);
    }

    public function post()
    {
        // comments 테이블에 데이터를 입력하기 위해 모델을 불러옴
        $commentModel = model('App/Models/CommentModel');
    }
}
