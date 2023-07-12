<?php

class Favorite {

    public $title;
    public $category;
    public $description;
    public $url;

    public function __construct($list = []) {

        $this->title = $list["title"] ?? "";
        $this->category = $list["category"] ?? ""; 
        $this->description = $list["description"] ?? ""; 
        $this->url = $list["url"] ?? "";

    }

}