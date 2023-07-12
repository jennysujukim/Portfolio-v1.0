<?php
 
class Project {

    public $title;
    public $chip;
    public $description;
    public $img_url;
    public $discipline;
    public $link;

    public function __construct($list = []) {

        $this->title = $list["title"] ?? "";
        $this->description = $list["description"] ?? ""; 
        $this->discipline = $list["discipline"] ?? "";
        $this->img_url = $list["image_url"] ?? "";
        $this->link = $list["link"] ?? "";
        $this->chip = $list["chip"] ?? "";

    }

};