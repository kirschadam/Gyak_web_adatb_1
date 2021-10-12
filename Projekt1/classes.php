<?php

    class Forms{
        protected $uName;
        protected $uPass;
        protected $uPassAgain;
        protected $uFullname;
        protected $uEmail;
        protected $uNameErr;
        protected $uPassErr;
        protected $uPassAgErr;
        protected $uFullErr;
        protected $uEmailErr;
    }

    class LoginCheck extends Forms{ 
        function __construct($name, $password){
            
            if(empty($name)){
                $this->uNameErr = "The Username field can't be left empty!";
            }
            else if(strlen($name) < 8){
                $len = strlen($name);
                $this->uNameErr = "Your password must not be shorter than 8 characters, your password is only $len characters long!";
            }
            else if(!preg_match("/^.*(?=.*[a-zA-Z]).*$/", $name)){
                $this-> uNameErr = "Wrong format!";
            }
            else $this-> uNameErr = ""; $this->uName = $name;


            if(empty($password)){
                $this->uPassErr = "The Password field can't be left empty!";
            }
            else if(!preg_match("/^.*(?=.*[a-z])(?=.*[A-Z])(?=.*\d).*$/", $password)){
                $this-> uPassErr = "Wrong format!";
            }
            else if(strlen($password) < 8){
                $len = strlen($password);
                $this->uPassErr = "Your password must not be shorter than 8 characters, your password is only $len characters long!";
            }
            else $this-> uPassErr = ""; $this->uPass = $password;
        }

        function get_logname(){
            return $this->uName;
        }
        function get_logpass(){
            return $this->uPass;
        }
        function get_lognameerr(){
            return $this->uNameErr;
        }
        function get_logpasserr(){
            return $this->uPassErr;
        }
    }

    class RegCheck extends Forms{
        function __construct($name, $password, $passagain, $email, $fullname){

            if(empty($name)){
                $this->uNameErr = "The Username field can't be left empty!";
            }
            else if(!preg_match("/^.*(?=.*[a-zA-Z]).*$/", $name) || strlen($name) < 5){
                $this-> uNameErr = "Wrong format!";
            }
            else $this-> uNameErr = ""; $this->uName = $name;


            if(empty($password)){
                $this->uPassErr = "The Password field can't be left empty!";
            }
            else if(!preg_match("/^.*(?=.*[a-z])(?=.*[A-Z])(?=.*\d).*$/", $password)){
                $this-> uPassErr = "Wrong format!";
            }
            else if(strlen($password) < 8){
                $len = strlen($password);
                $this->uPassErr = "Your password must not be shorter than 8 characters, your password is only $len characters long!";
            }
            else $this-> uPassErr = ""; $this->uPass = $password;


            if(empty($passagain)){
                $this->uPassAgErr = "The Password again field can't be left empty!";
            }
            else if($password != $passagain){
                $this->uPassAgErr = "The passwords do not match!";
            }
            else $this->uPassAgErr = ""; $this->uPassAgain = $passagain;


            if(empty($fullname)){
                $this->uFullErr = "The Full Name field can't be left empty!";
            }
            else $this->uFullErr = ""; $this->uFullname = $fullname;


            if(empty($email)){
                $this->uEmailErr = "The Email field can't be left empty!";
            }
            else $this->uEmailErr = ""; $this->uEmail = $email;
        }

        function get_name(){
            return $this->uName;
        }
        function get_pass(){
            return $this->uPass;
        }
        function get_passag(){
            return $this->uPassAgain;
        }
        function get_fullname(){
            return $this->uFullname;
        }
        function get_email(){
            return $this->uEmail;
        }
        function get_nameerr(){
            return $this->uNameErr;
        }
        function get_passerr(){
            return $this->uPassErr;
        }
        function get_passagerr(){
            return $this->uPassAgErr;
        }
        function get_fullerr(){
            return $this->uFullErr;
        }
        function get_emailerr(){
            return $this->uEmailErr;
        }
    }
?>