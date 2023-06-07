<?php 

//jumlah kalori yang dikonsumsi fu sekali makan 
$kalori = 2500;

//jumlah kalori setiap harinya 
$senin = $kalori * 3;
$selasa = $kalori * 2;
$rabu = $kalori * 2;
$kamis = $kalori * 3;
$jumat = $kalori * 3;
$sabtu = $kalori * 2;
$minggu = $kalori * 1;

echo "Kalori hari senin berjumlah : " , $senin , " kalori." , "<br>";
echo "Kalori hari selasa berjumlah : " , $selasa , " kalori." , "<br>";
echo "Kalori hari rabu berjumlah : " , $rabu , " kalori." , "<br>";
echo "Kalori hari kamis berjumlah : " , $kamis , " kalori." , "<br>";
echo "Kalori hari jum'at berjumlah : " , $jumat , " kalori." , "<br>";
echo "Kalori hari sabtu berjumlah : " , $sabtu , " kalori." , "<br>";
echo "Kalori hari minggu berjumlah : " , $minggu , " kalori." , "<br>";

//jumlah kalori perminggu
$seminggu = $senin + $selasa + $rabu + $kamis + $jumat + $sabtu + $minggu;
echo "Setelah seminggu fu sakit, fu telah mengkonsumsi kalori sebanyak ", $seminggu, "<br><br><br>";


//waktu istirahat setiap harinya
$istirahatsenin = 5;
$istirahatselasa = 6;
$istirahatrabu = 8;
$istirahatkamis = 8;
$istirahatjumat = 5;
$istirahatsabtu = 6;
$istirahatminggu = 4;

echo "Waktu tidur fu hari Senin : ", $istirahatsenin, "<br>";
echo "Waktu tidur fu hari Selasa : ", $istirahatselasa, "<br>";
echo "Waktu tidur fu hari Rabu : ", $istirahatrabu, "<br>";
echo "Waktu tidur fu hari Kamis : ", $istirahatkamis, "<br>";
echo "Waktu tidur fu hari Jum'at : ", $istirahatjumat, "<br>";
echo "Waktu tidur fu hari Sabtu : ", $istirahatsabtu, "<br>";
echo "Waktu tidur fu hari Minggu : ", $istirahatminggu, "<br>";

//jumlah waktu istirahat setiap harinya
$jumlahistirahatseminggu = $istirahatsenin + $istirahatselasa + $istirahatrabu + $istirahatkamis + $istirahatjumat + $istirahatsabtu + $istirahatminggu;

echo "Jumlah waktu istirahat fu selama seminggu ini adalah: " . $jumlahistirahatseminggu . " jam",  "<br><br><br>";


//kebutuhan manusia
//jika satu kali makan manusia mengkonsumsi 2500 kalori, maka jika satu hari manusia noermalnya makan 3 kali dan hal tersebut berlangsung dalam seminggu

echo "manusia normal membutuhkan ", $kalori * 21, " kalori/minggu", "<br>";

//jika manusia normal membutuhkan 8 jam tidur selama satu minggu
echo "manusia normal membutuhkan ", 8 * 7, " jam/minggu", "<br><br><br>";


$kebutuhankalori = $seminggu * 3 * 7;
$kebutuhanjam = $jumlahistirahatseminggu * 7;
    if ($seminggu >= $kebutuhankalori && $jumlahistirahatseminggu >= $kebutuhanjam){
        echo "Fu sudah sehat";
    }
    else {
        echo "Fu masih sakit";
    }



