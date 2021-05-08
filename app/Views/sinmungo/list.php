<?php echo $menu; ?>
<div class="list row">
    <?php
        foreach ($list as $row) {
    ?>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row->order; ?>. <?php echo $row->subject; ?></h5>
                <p class="card-text">분류 / 부대명</p>
                <p class="card-text"><?php echo $row->short; ?></p>
                <a href="/sinmungo/view?id=<?php echo $row->id; ?>" class="btn btn-primary">전체내용 보기</a>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <div class="paging">
        <div class="link<?php if (!$paging[1]) echo ' unabled'; ?>"><?php if ($paging[1]) { ?><a href="?page=<?php echo $paging[1]; ?>"><?php } ?>이전 페이지<?php if ($paging[1]) {?></a><?php } ?></div>
        <?php foreach ($paging[0] as $link) { ?>
        <div class="link<?php if ($link->selected) echo ' active'; ?>"><?php if (!$link->selected) {?><a href="?page=<?php echo $link->number; ?>"><?php } ?><?php echo $link->number; ?><?php if (!$link->selected) {?></a><?php } ?></div>
        <?php } ?>
    <div class="link<?php if (!$paging[2]) echo ' unabled'; ?>"><?php if ($paging[2]) {?><a href="?page=<?php echo $paging[2]; ?>"><?php } ?>다음 페이지<?php if ($paging[2]) {?></a><?php } ?></div>
</div>
</div>