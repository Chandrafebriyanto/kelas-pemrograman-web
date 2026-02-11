<?php
    class Pesan {
        public $teks = "halo";

        public function tampilanPesan(){
            return $this->teks . " " . $this->tambahan();
        }

        public function tambahan(){
            return "selamat datang di pemrograman web";
        }
    }

    $p = new Pesan();
    echo $p->tampilanPesan();
?>