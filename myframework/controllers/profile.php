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
            $data = $this->parent->getModel("fruits")->select("select * from fruit_table");
            $this->parent->getView("navigation", $this->parent);
            $this->parent->getView("userprofile", $data);
            $this->parent->getView("footer");
        }

        public function addForm(){
            $data = $this->parent->getModel("fruits")->select("select * from fruit_table");
            $this->parent->getView("navigation", $this->parent);
            $this->parent->getView("addForm", $data);
            $this->parent->getView("footer");
        }

        public function edit(){

            $data = $this->parent->getModel("fruits")->update(
                "update fruit_table set name= :name where id= :id", array(":name" => $_POST["name"], ":id" => $_REQUEST["id"]));

            header("Location:/profile");
        }

        public function editFruit(){
            $this->parent->getView("navigation", $this->parent);
            $this->parent->getView("editFruit");
            $this->parent->getView("footer");
        }

        public function deleteFruit(){
            $data = $this->parent->getModel("fruits")->delete(
                "delete from fruit_table where id= :id", array(":id" => $_REQUEST["id"]));


            header("Location:/profile");
        }

        public function addItem(){
            $data = $this->parent->getModel("fruits")->add(
                "insert into fruit_table (name) values(:name)", array(":name" => $_POST["name"]));

            header("Location:/profile");

        }

        public function logout(){
            $_SESSION["isloggedin"] = "0";
            $_SESSION["email"] = "";
            $_SESSION["bio"] = '';

            header("location:/registration");
        }
    }
?>