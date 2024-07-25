<?php
class Sekil {
    public function alan() {
        return 0;
    }

    public function cevre() {
        return 0;
    }
}

class Dikdortgen extends Sekil {
    private $genislik;
    private $yukseklik;

    public function __construct($genislik,$yukseklik){
        $this->genislik = $genislik;
        $this->yukseklik = $yukseklik;
    }

    public function alan (){
        return $this->genislik * $this-> yukseklik;
    }

    public function cevre() {
        return 2 * ($this->genislik + $this->yukseklik);
    }

}

class Kare extends Dikdörtgen {
    public function __construct($kenar) {
        parent::__construct($kenar, $kenar);
    }
}

class Ucgen extends Sekil {
    private $taban;
    private $yukseklik;

    public function __construct($taban, $yukseklik) {
        $this->taban = $taban;
        $this->yukseklik = $yukseklik;
    }

    public function alan() {
        return ($this->taban* $this->yukselik) /2;
    }

    public function cevre() {
        return $this ->taban + 2 * $this->yukseklik;
    }
}

$dikdortgen = new Dikdortgen(4,5);
echo "Dikdörtgen Alanı: " . $dikdortgen->alan() . "\n";
echo "Dikdörgen Çevresi:" . $dikdortgen->cevre() . "\n";

$kare = new Kare(4);
echo "Kare Alanı: " . $kare->alan() . "\n";
echo "Kare Çevresi:" . $kare->cevre() . "\n";

$ucgen = new Ucgen(4,5);
echo "Üçgen Alanı: " . $ucgen->alan() . "\n";
echo "Üçgen Çevresi:" . $ucgen->cevre() . "\n";

?>