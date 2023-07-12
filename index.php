<?php

    $title_tag = "Jenny Seojeong Kim | Front-end Developer";
    $partial_css = "homepage";
    $partial_js = "homepage";
    require(__DIR__ . '/init.php');
    require(__DIR__ . '/data/projects.php');

?>
<!DOCTYPE html>
<html lang="en">
<?php include(get_project_path('partials/global/head.php'));?>
    
<body class="hp-bg">
    <?php include(get_project_path('partials/global/header.php'));?>
    <main>
        <div class="hp-banner">
            <div class="hp-banner-canvas">
                <div class="hp-banner-scene is-flex">
                    <div class="hp-banner-graphic"></div>
                </div>
            </div>
            <div class="hp-banner-text">
                <div class="text-hello">
                    <p>Hello! I'm</p>
                </div>
                <div class="text-h1">
                    <h1>Jenny Kim</h1>
                </div>
                <div class="text-career">
                    <p>Designer & Developer</p>
                </div>
            </div>
        </div>
        <div class="hp-scroll-container is-flex">
            <img class="hp-scroll" src="<?php echo get_url('images/scroll-to-see-more.svg');?>">
        </div>
        <div class="container hp-mission">
            <div class="hp-mission-title">
                <p>I design and<p>
                <p>develop</p>
                <p>meaningful</p>
                <p>products that</p>
                <p>bring people</p>
                <p>together.</p>
                <div class="hp-mission-title-btn">
                    <a href="<?php echo get_url('about.php')?>">Here's More About Me!</a>
                </div>
            </div>
            <div class="hp-mission-graphic is-flex">
                <div class="hp-mission-graphic-container">
                    <img class="planet" src="<?php echo get_url('images/planet.svg');?>">
                    <img class="planet-bg" src="<?php echo get_url('images/planet-bg.svg');?>">
                </div>
            </div>
        </div>
        <section class="hp-works">
            <h2>My Recent Works</h2>
            <ul class="hp-works-list-container">
                <?php foreach($projects as $project){include(get_project_path('partials/home/list.php'));}; ?>
            </ul>
        </section>
    </main>
    <?php include(get_project_path('partials/global/footer.php'));?>
</body>
</html>