<?php
    class Kendaraan {
        protected $merk;

        public function setMerek($merek){
            $this->merk = $merek;
        }
    }

    class Mobil extends Kendaraan {
        public function getMerek(){
            return "Merek mobil: " . $this->merk;
        }
    }

    $mobil = new Mobil();
    $mobil->setMerek("Toyota");
    echo $mobil->getMerek();
?>