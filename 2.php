<?php
function hitungKembalian($total_belanja, $jumlah_uang){    
    
    if ($total_belanja > 200000){

    	$cb = $total_belanja * (10/100);
    	echo "mendapatkan cashback sebesar $cb<br><br>";

    };

    $kembalian = ($jumlah_uang - $total_belanja)+$cb ;
    echo"kembalian anda adalah $kembalian<br>";
    $dataa = $kembalian % 50000;
    $a = ($kembalian - $dataa) / 50000;

    $datab = $dataa % 20000;
    $b = ($dataa - $datab) / 20000;

    $datac = $datab % 10000;
    $c = ($datab - $datac) / 10000;

    $datad = $datac % 5000;
    $d = ($datac - $datad) / 5000;


    if ($a >= 1) {
    	echo "Jumlah Rp.50.000 : ".$a."<br>";
    }
    
    if ($b >= 1) {
    	echo "Jumlah Rp.20.000 : ".$b."<br>";
    }

    if ($c >= 1) {
    	echo "Jumlah Rp.10.000 : ".$c."<br>";
    }

    if ($d >= 1) {
    	echo "Jumlah Rp.5.000 : ".$d."<br>";
    }
    if ($datad > 0) {
    	echo "di sumbangkan sebesar : ".$datad."<br>";
    }
    
}

hitungKembalian(220000, 250000);

?>
