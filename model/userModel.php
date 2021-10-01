<?php
    class User {
        private $fullName;
        private $email;
        private $cpf;
        private Address $address;
        private $password;

        function __construct($fullName, $email, $cpf, $password){
            $this->fullName = $fullName;
            $this->email = $email;
            $this->cpf = $cpf;
            $this->password = $password;
        }

        public function getFullName(){
            return $this->fullName;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function getAddress(){
            return $this->address;
        }

        public function getPassword(){
            return $this->password;
        }
    }

?>