<?php echo $menu; ?>
<div class="insert col-lg-12">
    <form id="insertForm" method="post" class="row g-3">
        <div class="col-lg-6">
            <label for="inputEmail" class="form-label">이메일주소</label>
            <input type="email" name="email" class="form-control" id="inputEmail">
        </div>
        <div class="col-lg-6">
            <label for="inputPassword" class="form-label">패스워드</label>
            <input type="password" name="password" class="form-control" id="inputPassword">
        </div>
        <div class="col-lg-6">
            <label for="inputCategory" class="form-label">분류</label>
            <select id="inputCategory" name="category" class="form-select">
                <option value="0" selected>어떤 내용을 신고하려고 합니까?</option>
                <option value="1">부당한지시</option>
                <option value="2">인권침해</option>
                <option value="3">불군기행위</option>
            </select>
        </div>
        <div class="col-lg-6">
            <label for="inputUnit" class="form-label">부대명</label>
            <select id="inputUnit" name="unit" class="form-select">
                <option value="0" selected>자신의 부대를 선택해주세요. (최대 사단/여단/함대/비행단급)</option>
                <option value="1">군단</option>
                <option value="2">사단</option>
                <option value="3">비행단</option>
            </select>
        </div>
        <div class="col-lg-12">
            <div class="form-floating">
                <textarea class="form-control" name="comment" placeholder="이곳에 내용을 입력하세요." id="inputComment" style="height: 100px"></textarea>
                <label for="inputComment">내용</label>
            </div>
        </div>
        <div class="col-lg-12">
            <button type="button" id="form-button" class="btn btn-primary">등록하기</button>
        </div>
    </form>
</div>
<script type="text/javascript">
const submit = document.getElementById('form-button');
submit.addEventListener('click', function (t) {
    const inputEmail = document.getElementById('inputEmail').value;
    const inputPassword = document.getElementById('inputPassword').value;
    const inputCategory = document.getElementById('inputCategory').value;
    const inputUnit = document.getElementById('inputUnit').value;
    const inputComment = document.getElementById('inputComment').value;

    if (!inputEmail || !inputPassword ||  inputCategory == 0 || inputUnit == 0 || !inputComment) {
        alert('모든 필수사항을 입력하세요.');
    } else {
        const form = document.getElementById('insertForm');
        form.action = '/sinmungo/post';
        form.submit();
    }
});
</script>