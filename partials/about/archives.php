<div class="about-archive-list is-flex">
    <div class="list-container">
        <div class="list-content">
            <div class="list-ctgry">
                <?php echo h($fav->category);?>
            </div>
            <div class="list-img-container is-flex">
                <img class="list-img" src="<?php echo h($fav->url)?>">
            </div>
        </div>
        <div class="list-text">
            <div class="list-title">
                <?php echo h($fav->title);?>
            </div>
            <div class="list-description">
                <?php echo h($fav->description);?>
            </div>
        </div>
    </div>
</div>

