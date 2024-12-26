<?php

    require_once "Baza.php";

    class User extends Baza
    {
        private $email;
        private $password;
    
        public function setEmail($email)
        {
            $this -> email = $email;
        }

        public function setPassword($password)
        {
            $this -> password = $password;
        }

        public function saveUser()
        {
            $email = $this -> sql -> real_escape_string($this->email);
            $password = password_hash($this->password, PASSWORD_BCRYPT);
            $password = $this -> sql -> real_escape_string($password);

            $this -> sql -> query(" INSERT INTO users (email, password) VALUES ('$email', '$password') ");
        }

        public function userExists($email)
        {
            $email = $this -> sql -> real_escape_string($email);

            $result = $this -> sql -> query(" SELECT * FROM users WHERE email = '$email' ");
            if($result -> num_rows >0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function getUserByEmail($email)
        {
            $email = $this -> sql -> real_escape_string($email);

            $result = $this -> sql -> query(" SELECT * FROM users WHERE email = '$email' ");
            $user = $result -> fetch_assoc();

            return $user;
        }

        public function getUserById($id)
        {
            $id = $this -> sql -> real_escape_string($id);

            $result = $this -> sql -> query(" SELECT * FROM users WHERE user_id = '$id' ");
            $user = $result -> fetch_assoc();

            return $user;
        }

        public function dataValidation($email, $password)
        {
            $email = $this -> sql -> real_escape_string($email);

            $result = $this -> sql -> query(" SELECT * FROM users WHERE email = '$email' ");
            $user = $result -> fetch_assoc();
            $dbPassword = $user["password"];

            if(password_verify($password, $dbPassword))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

    }
    