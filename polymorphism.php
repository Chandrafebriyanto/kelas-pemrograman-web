<?php
    class Hewan {
        public function suara(){
            return "Hewan bersuara";
        }
    }

    class Kucing extends Hewan {
        public function suara(){
            return "Meong";
        }
    }

    class Anjing extends Hewan {
        public function suara(){
            return "Guk guk";
        }
    }

    $daftarHewan = [new Kucing(), new Anjing()];

    foreach ($daftarHewan as $hewan) {
        echo $hewan->suara() . "    ";
    }
?>