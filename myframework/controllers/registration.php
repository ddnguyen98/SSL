<?php

    class Registration extends AppController{

        public function __construct($parent){
            $this->parent=$parent;
            //var_dump($this->parent);
            
        }

        public function index(){
            $this->parent->getView("navigation", $this->parent);
            $this->parent->getView("form");
            $this->parent->getView("footer");
        }


        public function getinfo(){
            $this->parent->getView("navigation", $this->parent);

            function valid_email($str) {
                return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
            };
                
            if(!valid_email($_POST["email"])){
                echo "Invalid email address.";
            }
            else{
                echo "Valid email address.";
            };

            if(strlen($_POST["bio"]) === 0){
                echo "Invalid Bio Length";
            }
            else{
                echo "Valid Bio Length";

            };

            $this->parent->getView("footer");
        }

        public function ajaxPars(){
            //var_dump($_REQUEST);
            $this->parent->getView("navigation", $this->parent);
            if($_REQUEST["email"]=="test@test.com"){
                echo "good login";
            }
            else{
                echo "bad login";
            }
            $this->parent->getView("footer");
        }
    }
?>