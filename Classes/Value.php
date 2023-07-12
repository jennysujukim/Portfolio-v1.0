<?php

class Value {

    public $title;
    public $description;

    public function __construct($args = []) {

        $this->title = $args["title"] ?? "";
        $this->description = $args["description"] ?? ""; 

    }

}