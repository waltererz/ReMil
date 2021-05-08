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
                <?php 
                    foreach ($categories as $category) {
                ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->category; ?></option>
                <?php
                    }
                ?>
            </select>
        </div>
        <div class="col-lg-6">
            <label for="inputUnit" class="form-label">부대명</label>
            <select id="inputUnit" name="unit" class="form-select">
                <option value="0" selected>자신의 부대를 선택해주세요. (해당되는 부대가 없다면 상급부대 선택)</option>
                <?php 
                    foreach ($units as $unit) {
                ?>
                    <option value="<?php echo $unit->id; ?>"><?php echo $unit->unit; ?></option>
                <?php
                    }
                ?>
            </select>
        </div>
        <div class="col-lg-12">
            <label for="inputSubject" class="form-label">제목</label>
                <input type="text" name="subject" class="form-control" id="inputSubject">
            </div>
        <div class="col-lg-12">
            <textarea name="comment" id="editor"></textarea>
        </div>
        <div class="col-lg-12">
            <button type="button" id="form-button" class="btn btn-primary">등록하기</button>
        </div>
    </form>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<script type="text/javascript">
let editor;
ClassicEditor.create(document.querySelector('#editor'), {
    removePlugins: ['imageInsert'],
}).then( newEditor => {
    editor = newEditor;
});
const submit = document.getElementById('form-button');
submit.addEventListener('click', function (t) {
    const inputEmail = document.getElementById('inputEmail').value;
    const inputPassword = document.getElementById('inputPassword').value;
    const inputCategory = document.getElementById('inputCategory').value;
    const inputUnit = document.getElementById('inputUnit').value;
    const inputComment = editor.getData();

    if (!inputEmail || !inputPassword ||  inputCategory == 0 || inputUnit == 0 || inputComment.length < 20) {
        alert('모든 필수사항을 입력하세요.');
    } else {
        const form = document.getElementById('insertForm');
        form.action = '/sinmungo/post';
        form.submit();
    }
});
</script>