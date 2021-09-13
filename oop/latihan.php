<?php
{
    class komputer
    {
        public $pemilik;
        public $layar;
        public $merk;

        public function dinyalakan()
        {
            return "komputer di nyalakan";
        }

        public function dimatikan()
        {
            return "komputer di matikan";
        }
    }

    $user1 = new Komputer();
    echo $user1->pemilik;
    echo $user1->dinyalakan();
    

}

