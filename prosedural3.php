<?php
    class User {
        public $nama = "Candra";

        public function getNama(){
            return $this->nama;
        }
    }

    class Cetak{
        public function tampilkan(User $user){
            echo $user->nama . "<br>";

            echo $user->getNama();
        }
    }

    $user = new User();
    $cetak = new Cetak();
    $cetak->tampilkan($user);
?>