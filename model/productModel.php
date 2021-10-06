<?php
    class Product{
        private $name;
        private $description;
        private $price;
        private $img;

        function __construct($name, $description, $price, $img){
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
        }

        public function getName() {
            return $this.name;
        }

        public function geDescription() {
            return $this.description;
        }

        public function getPrice() {
            return $this.price;
        }

    }