<?php
    $title_tag = "About | Jenny Seojeong Kim | Front-end Developer";
    $partial_css = "about";
    $partial_js = "about";
    require('init.php');
    require(__DIR__ . '/data/values.php');
    require(__DIR__ . '/data/favorites.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include(get_project_path('partials/global/head.php'));?>

<body class="about-bg">
    <?php include('partials/global/header.php');?>
    <main>
        <section class="container about-profile">
            <div class="about-profile-top">
                <div class="about-profile-img reveal-up" id="profile-container">
                    <img id="profile-img" src="<?php echo get_url('images/about/jenny-profile.jpg');?>" alt="Image of Jenny Kim">
                </div>
                <div class="about-profile-subtitle">
                    <h1> 
                        <span class="highlight">
                            A creative
                            <svg class="highlight-underline" width="176" height="37" viewBox="0 0 176 37">
                                <path class="highlight-underline-path" d="M12 25.7312C46 14.2312 119 6.23122 164 14.2312"/>
                            </svg>
                        </span> 
                        designer and developer who has a passion for crafting 
                        <span class="highlight">
                            digital
                            <svg class="highlight-circle" width="166" height="85" viewBox="0 0 166 85">
                                <path class="highlight-circle-path" d="M159.472 28.7451C178.993 93.7511 5.00006 92.919 5 48.7144C4.99994 8.21321 117.459 -12.4679 147.165 23.6468"/>
                            </svg>
                        </span>
                        products and experiences.
                    </h1>
                </div>
            </div>
            <div class="about-profile-text">
                <p>I design and develop with a comprehensive understanding of design principles to create user-friendly products that people can comfortably use for a long time.</p>
                <p>I believe products should be visually appealing but also practical and relatable, solving the real-world problems for users.</p>
                <p> I approach with diverse perspectives and aim to empathize with users to develop long-lasting, impactful products that make a positive difference. </p>
            </div>
        </section>
        <section class="container about-points">
            <h2>Me In Bulletpoints</h2>
            <div class="about-points-container">
                <div class="about-points-list">
                    From South Korea, currently based in 
                    <span class="highlight">
                        Vancouver
                        <svg class="highlight-underline" width="176" height="37" viewBox="0 0 176 37">
                            <path class="highlight-underline-path" d="M12 25.7312C46 14.2312 119 6.23122 164 14.2312"/>
                        </svg>
                    <span>
                </div>
                <div class="about-points-list">
                    Have initiative to tackle the 
                    <span class="highlight">
                        challenge
                        <svg class="highlight-check" width="90" height="108" viewBox="0 0 90 108">
                            <path class="highlight-check-path"  d="M11 47.5C30 62 25 138.5 56.5 12"/>
                            <path class="highlight-check-path" d="M44 70.5C59.2558 78.0716 52.1202 139.693 78.5 40"/>
                        </svg>
                    <span>
                </div>
                <div class="about-points-list">
                    <span class="highlight">
                        Resilient
                        <svg class="highlight-circle" width="166" height="85" viewBox="0 0 166 85">
                            <path class="highlight-circle-path" d="M159.472 28.7451C178.993 93.7511 5.00006 92.919 5 48.7144C4.99994 8.21321 117.459 -12.4679 147.165 23.6468"/>
                        </svg>
                    </span>
                     to thrive in changing environments
                </div>
                <div class="about-points-list">
                    <span class="highlight">
                        Driven to learn
                        <svg class="highlight-underline" width="176" height="37" viewBox="0 0 176 37">
                            <path class="highlight-underline-path" d="M12 25.7312C46 14.2312 119 6.23122 164 14.2312"/>
                        </svg>
                    </span> 
                     new technologies and design trends
                </div>
                <div class="about-points-list">
                    Workout to survive in my free time 🏋️‍♀️
                </div>
                <div class="about-points-list">
                    Eating good food is one of my life goals 🍱
                </div>
            </div>
        </section>
        <section class="about-archive">
            <h2>My Archives</h2>
            <div class="about-archive-wrapper">
                <div class="about-archive-container is-flex">
                    <?php foreach($favs as $fav){include(get_project_path('partials/about/archives.php'));}; ?>
                </div>
            </div>
        </section>
    </main>
    <?php include('partials/global/footer.php');?>
</body>
</html>