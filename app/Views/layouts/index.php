<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yeon+Sung&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<style type="text/css">
body {
    font-family: 'Yeon Sung', cursive;
}
.navbar {
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}
.navbar .navbar-brand {
    font-family: 'Gugi', cursive;
}
.main {
    margin-top: 70px;
}
.list {
    margin-top: 10px;
}
.list .card {
    margin-top: 20px;
    border: 0px;
    box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;
}
.insert, .highlight, .view, .search {
    margin-top: 30px;
}
</style>
<title>군인들의 커뮤니티 레밀(ReMil)</title>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/index.php">레밀 ReMil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">신문고</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">칭찬합시다</a>
                </li>
            </ui>
        </div>
    </div>
</nav>
<div class="main container-fluid">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">전체목록</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">글쓰기</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">검색하기</a>
        </li>
    </ul>
    <div class="highlight col-lg-12">
        <div class="card text-center">
            <div class="card-header">최고의 추천</div>
            <div class="card-body">
                <h5 class="card-title">최고의 추천 글 제목</h5>
                <p class="card-text">조금 더 긴 요약본</p>
                <a href="#" class="btn btn-primary">자세히 보기</a>
            </div>
        </div>
    </div>
    <div class="list row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">번호. 글 제목</h5>
                    <p class="card-text">분류 / 부대명</p>
                    <p class="card-text">요약본</p>
                    <a href="#" class="btn btn-primary">전체내용 보기</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">번호. 글 제목</h5>
                    <p class="card-text">분류 / 부대명</p>
                    <p class="card-text">요약본</p>
                    <a href="#" class="btn btn-primary">전체내용 보기</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">번호. 글 제목</h5>
                    <p class="card-text">분류 / 부대명</p>
                    <p class="card-text">요약본</p>
                    <a href="#" class="btn btn-primary">전체내용 보기</a>
                </div>
            </div>
        </div>
    </div>
    <div class="insert col-lg-12">
        <form class="row g-3">
            <div class="col-lg-6">
                <label for="inputEmail4" class="form-label">이메일주소</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-lg-6">
                <label for="inputPassword4" class="form-label">패스워드</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-lg-6">
                <label for="inputCategory" class="form-label">분류</label>
                <select id="inputCategory" class="form-select">
                    <option selected>어떤 내용을 신고하려고 합니까?</option>
                    <option value="1">부당한지시</option>
                    <option value="2">인권침해</option>
                    <option value="3">불군기행위</option>
                </select>
            </div>
            <div class="col-lg-6">
                <label for="inputUnit" class="form-label">부대명</label>
                <select id="inputUnit" class="form-select">
                    <option selected>자신의 부대를 선택해주세요. (최대 사단/여단/함대/비행단급)</option>
                    <option value="1">군단</option>
                    <option value="2">사단</option>
                    <option value="3">비행단</option>
                </select>
            </div>
            <div class="col-lg-12">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="이곳에 내용을 입력하세요." id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">내용</label>
                </div>
            </div>
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">등록하기</button>
            </div>
        </form>
    </div>
    <div class="view col-lg-12">
        <div class="card">
            <div class="card-header">글 보기</div>
            <div class="card-body">
                <h5 class="card-title">글번호. 글제목</h5>
                <p class="card-text">분류: <br />부대명: </p>
                <p class="card-text">전체내용</p>
            </div>
        </div>
    </div>
    <div class="search col-lg-12">
        <div class="card">
            <div class="card-header">검색하기</div>
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-lg-6">
                        <label for="inputUnit" class="form-label">부대명</label>
                        <select id="inputUnit" class="form-select">
                            <option selected>전체</option>
                            <option value="1">군단</option>
                            <option value="2">사단</option>
                            <option value="3">비행단</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="inputCategory" class="form-label">분류</label>
                        <select id="inputCategory" class="form-select">
                        <option selected>전체</option>
                            <option value="1">부당한지시</option>
                            <option value="2">인권침해</option>
                            <option value="3">불군기행위</option>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary">검색하기</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>