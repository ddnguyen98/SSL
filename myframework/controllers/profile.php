<?php

    class Profile extends AppController{

        public function __construct($parent){
            //Creating variables to hold for welcome page to reduce repeating.
            $this->parent=$parent;
            //var_dump($this->parent);
            if(@$_SESSION["isloggedin"] && $_SESSION["isloggedin"] == "1"){
                
            }
            else{
                header("location:/registration");
            }

        }

        public function index(){
            $this->parent->getView("navigation", $this->parent);
            $this->parent->getView("userprofile");
            $this->parent->getView("footer");
        }

        public function logout(){
            $_SESSION["isloggedin"] = "0";
            $_SESSION["email"] = "";
            $_SESSION["bio"] = '';

            header("location:/registration");
        }
    }
?>