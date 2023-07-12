<?php

    $title_tag = "Develop Projects | Jenny Seojeong Kim | Front-end Developer";
    $partial_css = "discipline";
    $partial_js = "discipline";
    $button_anim = $button_anim ?? false;
    $button_anim = "active";
    require(__DIR__ . '/../init.php');
    require(__DIR__ . '/../data/projects.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<?php include(get_project_path('partials/global/head.php'));?>
<body class="discipline-bg">
    <?php include(get_project_path('partials/global/header.php'));?>
    <main>
        <div class="discipline-wrapper">
            <section class="container discipline-title is-flex">
                <h1>Projects</h1>
                <div class="discipline-title-filter">
                    <a href="<?php echo get_url('projects/index.php');?>" class="button <?php echo $button_anim === "active" ? "button-anim" : "current";?> is-flex">
                        All
                        <img class="button-arrow" src="<?php echo get_url('images/flower.png');?>">
                    </a>
                    <a href="<?php echo get_url('projects/design.php');?>" class="button <?php echo $button_anim === "active" ? "button-anim" : "current";?> is-flex">
                        Design
                        <img class="button-arrow" src="<?php echo get_url('images/flower.png');?>">
                    </a>
                    <a href="<?php echo get_url('projects/develop.php');?>" class="button <?php echo $button_anim === "none" ? "button-anim" : "current";?> is-flex">
                        Develop
                        <img class="button-arrow" src="<?php echo get_url('images/flower.png');?>">
                    </a>
                </div>
            </section>
            <section class="discipline-project is-flex">
                <ul class="project-list">
                    <?php foreach($develops as $project){include(get_project_path('partials/projects/projects-list.php'));}; ?>                    
                </ul>
            </section>
        <div>  
    </main>
    <?php include(get_project_path('partials/global/footer.php'));?>
</body>
</html>
 