<?php

    class Forms{
        protected $uName;
        protected $uPass;
        protected $uFullname;
        protected $uEmail;
    }

    class LoginCheck extends Forms{ 
        function __construct($name, $password){
            $this->uName = $name;
            $this->uPass = $password; //md5($password);

            if($name != ""){
                $mysqli = new mysqli("localhost", "root", "", "gyak1");
                $check = $mysqli-> query("SELECT * FROM users WHERE uname = '".$name."' AND pass = '".$password."'", MYSQLI_STORE_RESULT);
                if($check){
                    if($check->num_rows > 0){
                        echo "User found! Welcome ",$this->uName,"!";
                    }
                    else echo "There is no such user in the database!";
                }
                else echo "Valami tönkre ment!";
            }
        }

        function get_logname(){
            return $this->uName;
        }
        function get_logpass(){
            return $this->uPass;
        }
    }

    class RegCheck extends Forms{
        function __construct($name, $password, $email, $fullname){
            $this->uName = $name;
            $this->uPass = $password; //md5($password);
            $this->uFullname = $fullname;
            $this->uEmail = $email;

            if($name != ""){
                $mysqli = new mysqli("localhost", "root", "", "gyak1");
                $check = $mysqli-> query("SELECT * FROM users WHERE uname = '".$name."'", MYSQLI_STORE_RESULT);
                if($check){
                    if($check->num_rows > 0){
                        echo "This username is taken!";
                    }
                    else{
                        $query = "INSERT INTO `users`(`uname`, `email`, `pass`, `name`, `active`, `rank`, `ban`, `regtime`, `logtime`) VALUES ('" . $this->get_name() . "','" . $this->get_email() . "','" . $this->get_pass() . "','" . $this->get_fullname() . "','0','0','0','" . date('Y-m-d-H-i') . "','0')";
                        $c = new Connection();
                        if(mysqli_query($c->getConn(), $query)){
                            echo "Új rekord feltöltése sikeres volt!";
                        } else{
                            echo "Error: " . $query . "<br>" . mysqli_error($c->getConn());
                        }
        
                        mysqli_close($c->getConn());
                    }
                }
                else{
                    echo "Valami tönkre ment!";
                }
            }
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
    }

    class Connection{
        private $servername;
        private $db;
        private $conn;
        
        public function getConn(){
            return $this->conn;
        }

        function __construct(){
            $this->servername = "localhost";
            $this->username = "root";
            $this->password = "";
            $this->db = "gyak1";    
            $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->db);

            if($this->conn->connect_error){
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
    }
?>
