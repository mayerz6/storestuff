<?php

class Stats {

    private static $total = 100;
    private $mean = 80;
    private $mode = 7;
    private $median = 4;

    public function getMean(){ return $this->mean; }

    public function setMean($input){ $this->mean = $input; }

    public static function getTotal() {
        return self::$total;
    }

}