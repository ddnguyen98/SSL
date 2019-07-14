<?php

    class Home extends AppController{

        public function __construct($parent){
            //Creating variables to hold for welcome page to reduce repeating.
            $this->parent=$parent;
            //var_dump($this->parent);

            $this->parent->getView("navigation", $this->parent);
            $this->parent->getView("body");
            $this->parent->getView("day3-v1");
            $this->parent->getView("footer");
        }
    }
?>