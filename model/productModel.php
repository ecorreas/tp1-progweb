<?php
    class Product{
        private $id;
        private $name;
        private $description;
        private $qtd;
        private $price;
        private $img;

        function __construct($name, $description, $qtd, $price, $img){
            $this->name = $name;
            $this->description = $description;
            $this->qtd = $qtd;
            $this->price = $price;
        }

        public function getId() {
            return $this.id;
        }

        public function getName() {
            return $this.name;
        }

        public function geDescription() {
            return $this.description;
        }

        public function getQtd() {
            return $this.qtd;
        }

        public function getPrice() {
            return $this.price;
        }

    }