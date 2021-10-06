<?php
    class Message {
        private $name;
        private $email;
        private $phone;
        private $subject;
        private $message;

        function __construct($name, $email, $phone, $subject, $message){
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
            $this->subject = $subject;
            $this->message = $message;
        }

        public function getName(){
            return $this->name;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getPhone(){
            return $this->phone;
        }
        
        public function getSubject(){
            return $this->subject;
        }

        public function getMessage(){
            return $this->message;
        }

        public function __toString()
        {
        return "{$this->name}, {$this->email}, {$this->phone}, {$this->subject}, {$this->message}";
        }
    }

?>