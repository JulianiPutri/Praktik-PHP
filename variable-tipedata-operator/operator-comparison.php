<?php
    // =========================================================
    // 3. OPERATOR COMPARISON
    // =========================================================
    
    $stock = 1;
    $isStockAvailable  = $stock > 1; // false
    $isStockAvailable2 = $stock >= 1; // true

    var_dump($isStockAvailable); // bool(false)
    echo "<br>";
    var_dump($isStockAvailable2); // bool(true)
    echo "<br>";

    $total    = 2000;
    $discount = 2000;

    $isCanGetDiscount  = $discount < $total; // false 
    $isCanGetDiscount2 = $discount <= $total; // true 

    var_dump($isCanGetDiscount); // bool(false)
    echo "<br>";
    var_dump($isCanGetDiscount2); // bool(true)

?>