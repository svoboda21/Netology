<?php
    $x = rand(0,100);
    echo "Число ".$x."</br>";
    $a = 1;
    $b = 1;
    While(true) {
        If ($a > $x) {
            echo "Задуманное число не входит в числовой ряд";
            break;
        } else {
            If ($a == $x) {
                echo "Задуманное число входит в числовой ряд";
                break;
            } else {
                $c = $a;
                $a = $a + $b;
                $b = $c;
                echo "C=".$c."</br>";
                echo "A=".$a."</br>";
                echo "B=".$b."</br>";
                echo "</br>";
            }
        }
    }
?>