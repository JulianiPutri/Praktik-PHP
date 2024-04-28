<?php
    // =======================================
    // KONDISI IF ELSE
    // =======================================
    $stock = 8;

    if ($stock > 10){
        echo "stock is ready";
        echo "<br>";
    }else if($stock <= 10 && $stock >= 5){
        echo "stock in warning";
        echo "<br>";
    }else{
        echo "stock not ready";
        echo "<br>";
    }

    // =======================================
    // KONDISI SWITCH
    // =======================================

    $voucher = "HAPPYNEWYEAR";

    switch($voucher){
        case "FLASHSALE" :
            echo "Promo flash sale diterapkan";
            echo "<br>";
            break;
        
        case "HAPPYNEWYEAR" :
            echo "Promo tahun baru diterapkan";
            echo "<br>";
            break;
            
        case "RAMADHAN" :
            echo "Promo ramadhan diterapkan";
            echo "<br>";
            break;

        default :
            echo "Promo tidak ditemukan";
            echo "<br>";
            break;
    }

    // =======================================
    // KONDISI TERNARY
    // =======================================

    echo $stock>10 ? 'stock is ready' : 'stock is not ready';
    echo '<br>';
    echo ($stock >10) ? 'stock is ready' : (($stock <=10 && $stock >= 5) ? 'stock in warning' : 'stock is not ready');


?>