<?php
     // =========================================================
    // OPERATOR
    // =========================================================
    // 1. OPERATOR ARITMATIKA
    // =========================================================
        // A. Penjumlahan
        $price = 10000;
        $fee = 1000;
        $discount = 2000;
        
        $total = $price + $fee;
        echo "<br>";

        echo "
            harga : Rp $price 
            <br>
            fee : Rp $fee
            <br>
            diskon : Rp $discount
            <br>
            <br>
            total : Rp $total
            <br>
        ";
    // =========================================================
        // B. Pengurangan
            $aftdisc = $total - $discount;
            
            echo "ini total setelah diskon : Rp $aftdisc";
            
            echo "<br>";
    // =========================================================
        // C. Perkalian 
            // kasus membeli 2 produk
            $total2 = $price * 2;

            echo "ini total 2 produk : Rp $total2";
            
            echo "<br>";
            
    // =========================================================
        // D. Pembagian
            // kasus membeli 5 barang + fee dan diskon
            $total5 = (($price * 5)+$fee) - $discount;

            echo "ini total 5 produk + fee dan diskon: Rp $total5";
            
            echo "<br>";

            $splitbill = $total5 / 2;

            echo "ini total 5 produk tapi split bill: Rp $splitbill";
            
            echo "<br>";
            echo "<br>";
    // =========================================================
   
   
    
    




?>