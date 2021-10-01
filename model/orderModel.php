<?php

require "../models/productModel.php";

    class Order{
        private $orderNumber;
        private $status;
        private $dayOfBuy;
        private $products = [];
        private $totalOfOrder;

        function __construct($orderNumber, $status, $dayOfBuy, $product, $totalOfOrder){
            $this->orderNumber = orderNumber;
            $this->status = status;
            $this->dayOfBuy = dayOfBuy;
            $this->product = product;
            $this->totalOfOrder = totalOfOrder;
        }

        public function getOrderNumber(){
            return $this->orderNumber;
        }

        public function getStatus(){
            return $this->status;
        }

        public function getDayOfBuy(){
            return $this->dayOfBuy;
        }

        public function addProduct(Product $product){
            $this->products[] = $product;
        }

        public function getProducts(){
            return $this->products;
        }

        public function getTotalOfOrder(){
            return $this->totalOfOrder;
        }
    }