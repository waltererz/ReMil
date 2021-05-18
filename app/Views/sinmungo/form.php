<?php echo $menu; ?>
<div class="alert alert-primary" role="alert" style="font-size:1.2em; line-height: 1.7em;">
    이메일주소와 패스워드는 형식상 입력하는 것이며 일치여부 확인을 하지 않습니다.<br />
    <strong><i>개인정보 유출이 우려된다면 익명 이메일 주소를 사용해도 됩니다.</i></strong><br />
    이 사이트는 개인정보를 저장하지 않기 때문에 내부고발에 대한 피해를 줄일 수 있을 것으로 기대합니다.<br /><br />
    문의: remilkr.official@gmail.com
</div>
<div class="alert alert-warning" role="alert" style="font-size:1.2em; line-height: 1.7em;">
    해당 페이지에 글을 작성하는 경우 해당 내용이 <strong>페이스북 군 관련 페이지, 군인권센터 등 외부기관</strong>에 간접적으로 전달될 수 있으니 참고바랍니다.<br />
    당연하겠지만 이 사이트는 개인정보 수집이 안 되기 때문에 <strong><u>① 개인정보를 제외한 신고 내용</u></strong>과 <strong><u>② 대상 부대</u></strong>만 외부기관에 전달될 수 있습니다.<br />
    2021. 5. 16. 21:15
</div>
<div class="alert alert-danger" role="alert" style="font-size:1.2em; line-height: 1.7em;">
    아쉽게도 현재 이미지 업로드 기능은 지원하지 않고 있습니다. 추후 업데이트를 통해 지원할 수 있도록 하겠습니다.<br />
    반드시 이미지가 필요한 내용이라면 외부에 이미지를 업로드한 후 해당 이미지의 URL을 입력해주시면 감사하겠습니다.
</div>
<div class="insert col-lg-12">
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
            <div class="col-lg-12" style="margin: 20px 0px 40px 0px">
                <button type="button" id="form-button" class="btn btn-primary">등록하기</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script type="text/javascript">
        let editor;
        ClassicEditor.create(document.querySelector('#editor'), {
            removePlugins: ['imageInsert'],
        }).then(newEditor => {
            editor = newEditor;
        });
        const submit = document.getElementById('form-button');
        submit.addEventListener('click', function(t) {
            const inputEmail = document.getElementById('inputEmail').value;
            const inputPassword = document.getElementById('inputPassword').value;
            const inputCategory = document.getElementById('inputCategory').value;
            const inputUnit = document.getElementById('inputUnit').value;
            const inputComment = editor.getData();

            if (!inputEmail || !inputPassword || inputCategory == 0 || inputUnit == 0 || inputComment.length < 20) {
                alert('모든 필수사항을 입력하세요.');
            } else {
                const form = document.getElementById('insertForm');
                form.action = '/sinmungo/post';
                form.submit();
            }
        });
    </script>