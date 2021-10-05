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
                $this->uNameErr = "A username mező nem lehet üres!";
            }
            else if(!preg_match("/^[a-zA-Z0-9]*$/", $name)){
                $this-> uNameErr = "Nem megfelelő formátum!";
            }
            else $this-> uNameErr = ""; $this->uName = $name;


            if(empty($password)){
                $this->uPassErr = "A password mező nem lehet üres!";
            }
            else if(!preg_match("/^[a-zA-Z0-9]*$/", $password)){
                $this-> uPassErr = "Nem megfelelő formátum!";
            }
            else if(strlen($password) < 8){
                $len = strlen($password);
                $this->uPassErr = "A jelszó nem lehet rövidebb mint 8 karakter, az ön jelszava csak $len karakter hosszú!";
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
        function __construct($name, $password, $passagain, $fullname, $email){

            if(empty($name)){
                $this->uNameErr = "A username mező nem lehet üres!";
            }
            else if(!preg_match("/^[a-zA-Z0-9]*$/", $name) || strlen($name) < 5){
                $this-> uNameErr = "Nem megfelelő formátum!";
            }
            else $this-> uNameErr = ""; $this->uName = $name;


            if(empty($password)){
                $this->uPassErr = "A password mező nem lehet üres!";
            }
            else if(!preg_match("/^[a-zA-Z0-9]*$/", $password)){
                $this-> uPassErr = "Nem megfelelő formátum!";
            }
            else if(strlen($password) < 8){
                $len = strlen($password);
                $this->uPassErr = "A jelszó nem lehet rövidebb mint 8 karakter, az ön jelszava csak $len karakter hosszú!";
            }
            else $this-> uPassErr = ""; $this->uPass = $password;


            if(empty($passagain)){
                $this->uPassAgErr = "A password again mező nem lehet üres!";
            }
            else if($password != $passagain){
                $this->uPassAgErr = "A jelszavak nem egyeznek!";
            }
            else $this->uPassAgErr = ""; $this->uPassAgain = $passagain;


            if(empty($fullname)){
                $this->uFullErr = "A Full name mező nem lehet üres!";
            }
            else $this->uFullErr = ""; $this->uFullname = $fullname;


            if(empty($email)){
                $this->uEmailErr = "Az Email mező nem lehet üres!";
            }
            else $this->uEmailErr = ""; $this->uEmail = $email;
        }

        function get_name(){
            return $this->uName;
        }
        function get_pass(){
            return $this->uPass;
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