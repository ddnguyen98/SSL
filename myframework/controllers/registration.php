<?php

    class Registration extends AppController{

        public function __construct($parent){
            $this->parent=$parent;
            //var_dump($this->parent);
            
        }

        public function index(){
            if(@$_SESSION["isloggedin"] && $_SESSION["isloggedin"] == "1"){
                header("location:/profile");

            }
            else{
                $random = substr( md5(rand()), 0, 7);
                $_SESSION["captcha"] = $random;
                $this->parent->getView("navigation", $this->parent);
                $this->parent->getView("form");
                $this->parent->getView("captcha", array("cap" => $random));
                $this->parent->getView("footer");
            }
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

        public function captchaLogin(){
            if($_POST["email"] != "" && $_POST["password"] != ""){
                if($_POST["email"] == "test@test.com" && $_POST["password"] == '1234' && $_POST["captcha"] == $_SESSION["captcha"]){
                    $_SESSION["isloggedin"] = "1";
                    $_SESSION["email"] = $_POST["email"];

                    header("location:/profile");
                }
                else{

                    header("location:/registration?msg=Bad login");
                }
            }
        }

        public function formlogin(){

            if($_POST["email"] != "" && $_POST["password"] != ""){
                if($_POST["email"] == "test@test.com" && $_POST["password"] == "1234"){
                    $_SESSION["isloggedin"] = "1";  
                    $_SESSION["email"] = $_POST["email"];

                    header("location:/profile");
                }
                else{
                    $_SESSION["isloggedin"] = "0";
                    $_SESSION["email"] = "";

                    header("location:/registration");
                }
            }
            else{

            }
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

