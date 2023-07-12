<?php
 
require( __DIR__ . "/../Classes/Favorite.php");


$arch_Aus = new Favorite ([
 
    "title" => "Melbourne, Australia",
    "category" => "Love",
    "description" => "I lived in Melbourne for four years, and it feels like my second home. The city is vibrant and creative!",
    "url" => get_url('/images/about/about-melbourne.jpg')
    
]);

$arch_Furrs = new Favorite ([

    "id" => 3,
    "title" => "Furry Friends",
    "category" => "Love",
    "description" => "Meet my furry friends, Gummy and Lotto! Though they are in Korea, I miss them dearly.",
    "url" => get_url('/images/about/fam-2.jpg')
    
]);

$arch_Taco = new Favorite ([

    "title" => "The Best Taco Place",
    "category" => "Food",
    "description" => "Los Hermanos | The taste of fish taco is unforgettable... This place is a must-visit when you're in Melbourne.",
    "url" => get_url('/images/about/food-2.jpg')
    
]);

$arch_Starbucks = new Favorite ([

    "title" => "Fav drink at Starbucks",
    "category" => "Food",
    "description" => "Matcha Latte + Chocolate Cream Cold Foam = the best indulgence ",
    "url" => get_url('/images/about/about-starbucks.jpg')
    
]);

// $arch_StarryNight = new Favorite ([

//     "title" => "Starry Night by Peggy Gou",
//     "category" => "Music",
//     "description" => "Upbeat house music for a late coding night. Love her music, style, fashion... everything!",
//     "url" => get_url('/images/about/about-starbucks.jpg')
    
// ]);


$favs = [

    $arch_Aus,
    $arch_Furrs,
    $arch_Taco,
    $arch_Starbucks
    

];