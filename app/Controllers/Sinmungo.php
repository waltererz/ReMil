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
        if (!isset($_GET['page'])) {
            $_GET['page'] = 1;
        }

        $commentModel = model('App\Models\CommentModel');

        // 이전 버튼 활성화
        $prevButton = false;
        
        // 다음 버튼 활성화
        $nextButton = false;

        // 페이지당 글 수
        $listPerPage = 9;

        // 페이지당 페이지 링크 수
        $linkPerPage = 5;

        // 전체 목록 수
        $totalComments = $commentModel->countAll();

        // 전체 페이지 수
        $totalPage = ceil($totalComments / $listPerPage);

        // 전체 블록 수
        $totalBlock = ceil($totalPage / $linkPerPage);

        // 전체 페이지 링크 중 어느 숫자부터 시작할 것인지 계산
        if ($_GET['page'] <= ($linkPerPage / 2)) {
        	$startPage = 1;
        } else {
        	$startPage = ceil($_GET['page'] - (($linkPerPage / 2) - 1));
        	$prevButton = $startPage - 1;
        }

        // 링크그룹 생성
        $links = array();
        for ($i=0; $i <$linkPerPage; $i++) {
        	$link = new \stdClass();
        	$link->number = $i + $startPage;
        	if ($link->number > $totalPage && ($link->number !== 1)) {
        		break;
        	}
        	if ($link->number == $_GET['page']) {
        		$link->selected = true;
        	} else {
        		$link->selected = false;
        	}
        	$links[] = $link;
        }

        // 다음 블록이 더 있는가?
        if ($link->number < $totalPage) {
        	$nextButton = $link->number + 1;
        }

        $paging = array($links, $prevButton, $nextButton);

        // 데이터 리스트를 불러옴
        $result = $commentModel->withDeleted()->orderBy('id', 'desc')->findAll($listPerPage, ($_GET['page'] - 1) * $listPerPage);
        $list = [];

        for ($i=0; $i<count($result); $i++) {
            $list[$i] = new \stdClass();
            $list[$i]->id = $result[$i]->id;
            $list[$i]->order = $totalComments - ((($_GET['page'] - 1) * $listPerPage) + $i);
            $list[$i]->category = $result[$i]->category;
            $list[$i]->unit = $result[$i]->unit;
            $list[$i]->subject = $result[$i]->subject;
            $list[$i]->short = mb_substr(str_replace('<br />', ' ', $result[$i]->comment), 0, 100, 'utf-8');
            $list[$i]->timestamp = $result[$i]->timestamp;
        }

        $data = [
            'contents' => view('sinmungo/list', ['menu' => view('sinmungo/menu'), 'list' => $list, 'paging' => $paging]),
        ];

		return view('layouts/index', $data);
    }

    public function view()
    {
        $commentModel = model('App\Models\CommentModel');
        $result = $commentModel->withDeleted()->where('id', $_GET['id'])->first();
        
        $comment = new \stdClass();
        $comment->subject = $result->subject;
        $comment->category = $result->category;
        $comment->unit = $result->unit;
        $comment->comment = $result->comment;
        $comment->timestamp = $result->timestamp;

        $data = [
            'contents' => view('sinmungo/view', ['menu' => view('sinmungo/menu'), 'comment' => $comment]),
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
            'subject' => $_POST['subject'],
            'comment' => str_replace("\n", '<br />', $_POST['comment']),
            'timestamp' => time(),
        ];

        $commentModel->insert($data);
        
        header("Location: https://remil.kr/sinmungo/list");
        exit();
    }
}
