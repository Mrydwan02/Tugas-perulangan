<?php
    echo"<h2>Perulangan While Ke-1</h2>";

    $i =1;
    while ( $i<= 10) {
    echo "Angka ke-$i"."</br>";
    $i++;
    }
    echo "<br>";
    echo"<h2>Perulangan While Ke-2</h2>";
    $i =10;
    while ($i>=1) {
    echo "$i"."</br>";
    $i--;
    }
    echo "<br>";
    echo"<h2>Perulangan While Ke-3</h2>";

    $j =1;
    while($j <= 10){
        echo "<br>";
        $k = $j;
        while($k <=10){
            echo"$k ";
            $k++;
        }
        $j++;
    }


    echo"<hr>";
    echo"<h2>Perulangan Do While Ke-1</h2>";

    $a = 1;
    do{
        echo "Bilangan Ke -$a <br>";
        $a++;
    }while ($a <=10);

    echo "<br>";

    echo"<h2>Perulangan Do While Ke-2 </h2>";

    $b = 10;
    do{
        echo "Bilangan Ke -$b <br>";
        $b--;
    }while ($b >=1);


    echo "<br>";

    echo"<h2>Perulangan Do While Ke-3</h2>";

    $c=1;
    do{
        $d=$c;
        do{
            echo"* ";
            $d++;
        }while($d <= 10);
        echo "<br>";
        $c++;
    }while ($c<=10);

echo "<hr>";
    ?> 