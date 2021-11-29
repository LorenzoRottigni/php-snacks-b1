<?php   

    $randomArray=[];
    for ($i=0; $i < 15; $i++) { 
        $newRandomInt = random_int(1,100);
        if(!in_array($newRandomInt, $randomArray))
            $randomArray[$i] = $newRandomInt;
        else
            echo "<h6>element already exists!</h6>";
    }
    print_r($randomArray)
?>