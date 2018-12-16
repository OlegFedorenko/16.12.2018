<?php

// Тестовый массив из 100 элементов
$constArray = [3,23,25,35,38,40,40,40,41,48,
    58,73,89,90,102,123,146,151,151,155,
    158,165,171,175,183,188,189,197,197,
    210,226,233,262,265,282,286,288,290,
    317,318,353,354,415,427,439,456,458,
    461,467,481,489,498,504,518,519,542,
    555,577,586,587,608,609,624,627,628,
    632,639,666,668,671,694,699,701,711,
    725,730,734,740,769,773,776,784,800,
    813,827,829,843,852,852,867,878,882,
    889,915,918,930, 932,961,963,984,992];

// Тестовый массив из 2 элементов
//$constArray = [3,3];

// Тестовый массив из 1 элемента
//$constArray = [3];

// Сортировка массива для исключения попадания неотсортированного массива в функцию с бинарным поиском
sort($constArray);

foreach ($constArray as $arr) // Вывод массива
{
    echo "$arr ";
}
echo '<br>';

$searchValue = 609; // Искомое значение

if(false !== $searchValueIndex = arraySearch($constArray,$searchValue)) // Вывод результата
{
    echo "Search value: ".$searchValue.'<br>'."Search value index: ".$searchValueIndex;
}
else
{
    echo "Array is not consist search value: ".$searchValue;
}

//Для поиска значения реализован алгоритм бинарного поиска
function arraySearch($source_array, $search_value)
{
    $baseLength = count($source_array); //определяем длину массива - подсчитываем количество элементов

    if (is_int($search_value))
    {
        $leftBorder = 0;
        $rightBorder = $baseLength - 1;

        while(true)
        {
            $currentLength = $rightBorder - $leftBorder; //вычисляем текущую длину массива

            if($currentLength > 2) // вычисление индекса центрального элемента для массива из более чем 2 элементов
            {
                if($currentLength % 2 != 0) // нечетной и четной длины
                {
                    $currentLength++;
                }
                $middle = (int) ($currentLength/2 + $leftBorder);
            }

            elseif($currentLength >= 0) // вычисление индекса центрального элемента для массива из 2 элементов
            {
                $middle = $leftBorder;
            }

            else
            {
                return false;
            }

            if($source_array[$middle] == $search_value) // центральное значение - искомое
            {
                while(($middle != 0) && ($source_array[$middle - 1] == $search_value)) // ищем более ранние вхождения
                {
                    $middle--;
                }
                return $middle;
            }

            elseif($source_array[$middle] > $search_value) // искомое значение находится слева от центрального
            {
                $rightBorder = $middle - 1;
            }

            else // искомое значение находится справа от центрального
            {
                $leftBorder = $middle + 1;
            }
        }
    }

    else
    {
        return false;
    }
}