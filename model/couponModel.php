<?php
    class Coupon{
        private $code;
        private $expire_date;

        function __construct($code, $expire_date){
            $this->code = $code;
            $this->expire_date = $expire_date;
        }

        public function getCode() {
            return $this.code;
        }

        public function getExpire_Date() {
            return $this.description;
        }

    }