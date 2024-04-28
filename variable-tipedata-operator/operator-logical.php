<?php
    // =========================================================
    // 4. OPERATOR LOGICAL
    // =========================================================
        // A. AND
        $total    = 5000;
        $discount = 2000;
        $stock    = 1;

        # contoh kasus jika $stock lebih besar sama dengan 1 dan $total > $discount;
        $getDiscount = $stock >= 1 && $total > $discount;

        var_dump($getDiscount); // bool(true)
        echo "<br>";
        # $getDiscount bernilai true dikarenakan 2 operan bernilai true 
        # $stock >= 1 jumat stock lebih besar sama dengan 1 = true
        # $total > discount total lebih besar dari diskon. = true
    // =========================================================
        // B. OR
        $stockOR   = 0; // tidak ada stock

        # contoh kasus jika $stock lebih besar sama dengan 1 dan $total > $discount;
        $getDiscountOR = $stockOR >= 1 || $total > $discount;

        var_dump($getDiscountOR); // bool(true)
        echo "<br>";
        # $getDiscount bernilai true dikarenakan salah satu operan bernilai true 
        # $stock >= 1 jumat stock lebih besar sama dengan 1 = false
        # $total > discount total lebih besar dari diskon. = true
    // =========================================================
        // C. NOT
        $stockNOT = 0; // tidak ada stock
        $isStockReadyNOT = $stockNOT >= 1;

        var_dump($isStockReadyNOT); // bool(false)
        echo "<br>";

        # menerapkan negasi
        var_dump(!$isStockReadyNOT); // bool(true)

?>