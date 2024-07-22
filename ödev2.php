<?php
function temizle_rastgeledizi($dizi,$adet){
    $temizDizi = array_filter($dizi,function($deger){
        return !empty ($deger);
    });

    $rastgeleAnahtar = array_rand($temizDizi,$adet);

    $rastgeleDizi = array_map(function($anahtar) use ($temizDizi){
        return $temizDizi[$anahtar];
    },(array) $rastgeleAnahtar);
    return $rastgeleDizi;
}

$dizi = ["elma","", "armut", "muz", "","çilek","kavun"];
$adet=3;
$yeniDizi =
temizle_rastgeledizi($dizi,$adet);

print_r($yeniDizi);

?>