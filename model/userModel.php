<?php
    class User {
        private $fullName;
        private $email;
        private $password;

        function __construct($fullName, $email, $password){
            $this->fullName = $fullName;
            $this->email = $email;
            $this->password = $password;
        }

        public function getFullName(){
            return $this->fullName;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getPassword(){
            return $this->password;
        }

        public function __toString()
        {
        return "{$this->fullname}, {$this->email}";
        }
    }

?>