<?php
    class house {
        private $house;

        public function __construct(array $details) {
            $this->house = $details;
        }

        public function getHousePart($part) {
            return $this->house[$part];
        }
    };

    //$details = ['1', 34, "isjfsl", "aid", "jjkj", "kkkk"];
    //$house = new house($details);

    //print_r($house);

?>