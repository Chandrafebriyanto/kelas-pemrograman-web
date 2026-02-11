<?php
    abstract class Kendaraan {
        abstract public function bergerak();
    }

    class Motor extends Kendaraan {
        public function bergerak(){
            return "Motor berjalan di jalan raya";
        }
    }

    $motor = new Motor();
    echo $motor->bergerak();
?>