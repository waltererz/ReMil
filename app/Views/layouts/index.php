<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="/src/css/layout.css?<?php echo rand(); ?>" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<title>군인들의 커뮤니티 레밀(ReMil)</title>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">레밀 ReMil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link<?php preg_match('/^\/sinmungo(\/*)/', $_SERVER['REDIRECT_URL'], $match); if (isset($match[0]) && $match[0]) { ?> active<?php } ?>" aria-current="page" href="/sinmungo">신문고</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php preg_match('/^\/praise(\/*)/', $_SERVER['REDIRECT_URL'], $match); if (isset($match[0]) && $match[0]) { ?> active<?php } ?>" aria-current="page" href="#">칭찬합시다</a>
                </li>
            </ui>
        </div>
    </div>
</nav>
<div class="main container-fluid">
    <?php echo $contents; ?>
</div>
</body>
</html>