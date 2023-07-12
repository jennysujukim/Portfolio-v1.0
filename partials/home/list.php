<li class="hp-works-list">
    <div>
        <a href="<?php echo get_url('projects/' . $project->link);?>" class="is-flex space-between">
            <div>
                <p class="hp-works-list-project">PROJECT</p>
                <h4><?php echo($project->title);?></h4>
                <div class="is-flex">
                    <?php 
                    foreach($project->chip as $chips) {echo "<p><span class='chip'>" . $chips . "</span></p>";}?>
                </div>
            </div>
            <div class="hp-works-list-arrow is-flex">
                <svg class="arrow-svg" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="arrow-stroke" d="M19 1L38 20.5L19 40" stroke="#5735B8" stroke-width="1.5"/>
                    <path id="arrow-stroke" d="M0 21L38 21" stroke="#5735B8" stroke-width="1.5"/>
                </svg>
            </div>
        </a>
    </div>
</li>