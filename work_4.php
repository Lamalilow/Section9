<?php
function resultProst($number)
{
    for ($j = 2; $j < $number; $j++) { // проверить, делится ли число..

        if ($number % $j == 0)
            echo "норм";
        else
            echo "мегаплох";// не подходит, берём следующее
    }

}
resultProst(4);
