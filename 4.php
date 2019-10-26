<?php
function hitungVoucher($voucher, $jumlah_uang){    
    
    if ($voucher == "DumbWaysAsik"){

        if ($jumlah_uang >= 20000) 
        {
            $diskon = $jumlah_uang * (50/100);
            if ($diskon > 20000) {
            $diskon = 20000;
            $jumlah_bayar = $jumlah_uang - $diskon;
            $kembalian = $jumlah_uang - $jumlah_bayar;
            echo "jumlah diskon : ".$diskon."<br>";
            echo "jumlah bayar : ".$jumlah_bayar."<br>";
            echo "jumlah kembalian : ".$kembalian."<br>";    
                }
            else{
            $jumlah_bayar = $jumlah_uang - $diskon;
            $kembalian = $jumlah_uang - $jumlah_bayar;
            echo "jumlah diskon : ".$diskon."<br>";
            echo "jumlah bayar : ".$jumlah_bayar."<br>";
            echo "jumlah kembalian : ".$kembalian."<br>";    
            }            
                
        }
        else{
            echo "voucher tidak dapat digunakan";
        }     	
    	    
    }

    if ($voucher == "DumbWaysMantap"){

        if ($jumlah_uang >= 50000) 
        {
            $diskon = $jumlah_uang * (30/100);
            if ($diskon > 40000) {
            $diskon = 40000;
            $jumlah_bayar = $jumlah_uang - $diskon;
            $kembalian = $jumlah_uang - $jumlah_bayar;
            echo "jumlah diskon : ".$diskon."<br>";
            echo "jumlah bayar : ".$jumlah_bayar."<br>";
            echo "jumlah kembalian : ".$kembalian."<br>";    
                }
            else{
            $jumlah_bayar = $jumlah_uang - $diskon;
            $kembalian = $jumlah_uang - $jumlah_bayar;
            echo "jumlah diskon : ".$diskon."<br>";
            echo "jumlah bayar : ".$jumlah_bayar."<br>";
            echo "jumlah kembalian : ".$kembalian."<br>";    
            }            
                
        }
        else{
            echo "voucher tidak dapat digunakan";
        }       
            
    }    
    
}

hitungVoucher("DumbWaysAsik", 30000);

?>