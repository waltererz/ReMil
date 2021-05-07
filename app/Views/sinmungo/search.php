<?php echo $menu; ?>
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