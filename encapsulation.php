<?php
    class Rekening {
        private $saldo;

        public function __construct($saldoAwal) {
            $this->saldo = $saldoAwal;
        }

        public function getSaldo() {
            return "Rp" . number_format($this->saldo);
        }

        public function setor($jumlah) {
            if ($jumlah > 0) {
                $this->saldo += $jumlah;
            }
        }
    }

    $akun = new Rekening(100000);
    $akun->setor(50000);
    echo "Saldo Anda: " . $akun->getSaldo();
?>