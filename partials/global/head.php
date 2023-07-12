<?php
    $title_tag = $title_tag ?? "";
    $partial_css = $partial_css ?? ""; 

    if (isset($partial_artifact_css)) {
        $css_url = get_url('css/partials/' . $partial_artifact_css . '.css');
    } else {
        $css_url = '';
    }

    $partial_artifact_css = $partial_artifact_css ?? "";
?>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="all">
    <meta name="description" content="I am an aspiring UI/UX Designer and Front-end Developer who has a passion for crafting digital products and experiences.">
    <meta name="keywords" content="Front-end Developer, Developer, UIUX Designer, Designer, Vancouver, Canada">
    <!-- Facebook Tag -->
    <meta property="og:title" content="Jenny Seojeong Kim - UI/UX Designer, Front-end Developer">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://seojeongkim.com/">
    <meta property="og:image" content="<?php echo get_url('images/og-img.jpg');?>">
    <meta property="og:description" content="I am an aspiring UI/UX Designer and Front-end Developer who has a passion for crafting digital products and experiences.">
    <meta property="og:locale" content="en"/>
    <!-- Twitter Tag -->
    <meta name="twitter:card" content="website">
    <meta name="twitter:title" content="Jenny Seojeong Kim - UI/UX Designer, Front-end Developer">
    <meta name="twitter:description" content="I am an aspiring UI/UX Designer and Front-end Developer who has a passion for crafting digital products and experiences.">
    <meta name="twitter:image" content="<?php echo get_url('images/og-img.jpg');?>">
    <title><?php echo $title_tag; ?></title>
    <link rel="canonical" href="https://seojeongkim.com/">
    <link rel="icon" type="images/svg" href="<?php echo get_url('images/logo-header.svg');?>">
    <link rel="stylesheet" href="<?php echo get_url('css/reset.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism-themes/1.9.0/prism-vsc-dark-plus.min.css" integrity="sha512-ML8rkwYTFNcblPFx+VLgFIT2boa6f8DDP6p6go4+FT0/mJ8DCbCgi6S0UdjtzB3hKCr1zhU+YVB0AHhIloZP8Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo get_url('css/main.css');?>">
    <link rel="stylesheet" href="<?php echo get_url('css/partials/' . $partial_css . '.css'); ?>">
    <?php echo '<link rel="stylesheet" href="' . $css_url . '">'; ?>
</head>
