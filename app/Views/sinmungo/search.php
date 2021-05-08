<?php echo $menu; ?>
<div class="search col-lg-12">
    <form id="insertForm" action="/sinmungo/list" method="get" class="row g-3">
        <div class="card">
            <div class="card-header">검색하기</div>
            <div class="card-body">
                <div class="col-lg-6">
                    <label for="inputUnit" class="form-label">검색하려는 부대를 선택하세요. (해당되는 부대가 없다면 상급부대 선택)</label>
                    <select name="unit" id="inputUnit" class="form-select">
                        <option value="" selected>전체</option>
                        <?php 
                            foreach ($units as $unit) {
                        ?>
                            <option value="<?php echo $unit->id; ?>"><?php echo $unit->unit; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="col-lg-6">
                    <label for="inputCategory" class="form-label">검색하려는 분류를 선택하세요.</label>
                    <select name="category" id="inputCategory" class="form-select">
                        <option value="" selected>전체</option>
                        <?php 
                            foreach ($categories as $category) {
                        ?>
                            <option value="<?php echo $category->id; ?>"><?php echo $category->category; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="col-lg-12" style="margin-top:30px;">
                    <button type="submit" class="btn btn-primary">검색하기</button>
                </div>
            </div>
        </div>
    </form>
</div>