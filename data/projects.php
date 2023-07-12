<?php
 
require( __DIR__ . "/../Classes/Project.php");

$project_ReadMe = new Project ([

    "title" => "Read Me",
    "description" => "A fictional app that users can browse, save and listen audio book.",
    "image_url" => get_url("images/project-readMe/readMe-thumbnail.jpg"),
    "discipline" => "Design",
    "link" => "Read-Me.php",
    "chip" => ["UI/UX Design"]
    
]);

$project_CafeLayered = new Project ([

    "title" => "Cafe Layered",
    "description" => "Responsive website developed with html, css, javaScript for a fictional cafe.",
    "image_url" => get_url("images/project-cafeLayered/cafeLayered-thumbnail.jpg"),
    "discipline" => "Develop",
    "link" => "Cafe-Layered.php",
    "chip" => ["Web Design/Development"]
    
]);

$project_Esnes = new Project ([

    "title" => "Esnes",
    "description" => "Create the brand value and identity for the fictional perfume brand, Esnes.",
    "image_url" => get_url("images/project-esnes/esnes-thumbnail.jpg"),
    "discipline" => "Design",
    "link" => "Esnes.php",
    "chip" => ["Branding", "Graphic Design"]
    
]);

$project_FoodTracker = new Project ([

    "title" => "Food Tracker",
    "description" => "The food tracker allows users to search and add foods displaying basic nutrition information integrating API.",
    "image_url" => get_url("images/project-foodTracker/foodTracker-thumbnail.jpg"),
    "discipline" => "Develop",
    "link" => "Food-Tracker.php",
    "chip" => ["Vanilla JS", "API"]
    
]);

$projects = [

    $project_ReadMe,
    $project_CafeLayered,
    $project_Esnes,
    $project_FoodTracker

];

$designs = [

    $project_ReadMe,
    $project_Esnes

];

$develops = [

    $project_CafeLayered,
    $project_FoodTracker

];