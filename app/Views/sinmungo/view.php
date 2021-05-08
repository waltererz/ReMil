<?php echo $menu; ?>
<div class="view col-lg-12">
    <div class="card">
        <div class="card-header">글 보기</div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $comment->subject; ?></h5>
            <p class="card-text">분류: <?php echo $comment->category; ?><br />부대명: <?php echo $comment->unit; ?></p>
            <p class="card-text"><?php echo $comment->comment; ?></p>
        </div>
    </div>
</div>