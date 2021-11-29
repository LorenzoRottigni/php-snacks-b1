<?php

    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];
    $nameLength = strlen($name);
    $hasMailDot = str_contains($mail, ".");
    $hasMailAt = str_contains($mail, "@");
    $isNaN = (intval($age) != 0); #if it is a string his value is 0


    echo $isNaN;
    if(($nameLength>3)&&($hasMailDot)&&($hasMailAt)&&($isNaN)){
        echo "Access granted for $name";
    }else{
        echo "Access denied for $name";
    }

?>