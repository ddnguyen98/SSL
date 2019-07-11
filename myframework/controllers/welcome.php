<?php

    class Welcome extends AppController{

        public function __construct($parent){
            //Creating variables to hold for welcome page to reduce repeating.
            $this->parent=$parent;
            //var_dump($this->parent);

            //Array to hold data
            $this->data = array();
            //Key of navigation that holds an array
            $this->data["navigation"] = array("home","about",);
        }


        public function home(){
            //Key of page name set to current method
            $this->data["pagename"] = "home";
            //Fill in content for page
            $this -> welcomeview();


        }
        public function about(){
            
            $this->data["pagename"] = "about";
            
            $this -> welcomeview();



        }

        public function welcomeview(){
            $this->parent->getView("navigation",$this->data);
            $this->parent->getView("body",$this->data);
            $this->parent->getView("footer");
        }
    }

?>