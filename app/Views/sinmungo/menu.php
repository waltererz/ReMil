<ul class="nav nav-pills">
<li class="nav-item">
        <a class="nav-link<?php if ($_SERVER['REDIRECT_URL'] == '/sinmungo') { ?> active<?php } ?>" href="/sinmungo">첫 페이지</a>
    </li>
    <li class="nav-item">
        <a class="nav-link<?php if ($_SERVER['REDIRECT_URL'] == '/sinmungo/list') { ?> active<?php } ?>" href="/sinmungo/list">전체 글 목록</a>
    </li>
    <li class="nav-item">
        <a class="nav-link<?php if ($_SERVER['REDIRECT_URL'] == '/sinmungo/form') { ?> active<?php } ?>" href="/sinmungo/form">글쓰기</a>
    </li>
    <li class="nav-item">
        <a class="nav-link<?php if ($_SERVER['REDIRECT_URL'] == '/sinmungo/search') { ?> active<?php } ?>" href="/sinmungo/search">검색하기</a>
    </li>
</ul>