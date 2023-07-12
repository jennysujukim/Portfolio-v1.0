<li class="project-card">
    <a class="project-card-link" href="<?php echo get_url('projects/' . $project->link)?>">
        <div class="project-thumbnail">
            <img src="<?php echo($project->img_url);?>" alt="Thumbnail Image of <?php echo($project->title);?> Project">
        </div>
        <div class="project-info is-flex">
            <h3><?php echo($project->title);?></h3>
            <p class="project-info-description"><?php echo($project->description);?></p>
            <div class="project-info-chip is-flex">
                <?php 
                    foreach($project->chip as $chips) {echo "<p><span class='chip'>" . $chips . "</span></p>";}
                ?>
            </div>
        </div>
    </a>
</li>