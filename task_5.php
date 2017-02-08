<!DOCTYPE html>
<!--
Есть массив [1,2,3,4,5,6,7,8,9]
- увеличить в массиве каждый четный элемент на 2,
каждый третий на 3(сделать это через (if else, if elseif, switchcase) .
сделать это всеми циклами
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $array = $array1 = $array2 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
        $x = $y = 1;
        print_r($array);
        echo "<br>";
        while ($x < count($array1)) {
            if ($x % 2 == 0) {
                $array1[$x] += 2;
            }
            if ($x % 3 == 0) {
                $array1[$x] += 3;
            }
            $x++;
        }
        print_r($array1);
        echo "<br>";
        do {
            if ($y % 2 == 0) {
                $array2[$y] += 2;
            } elseif ($y % 3 == 0) {
                $array2[$y] += 3;
            }
        } while (++$y < count($array2));
        print_r($array2);
        echo "<br>";
        for ($x = 1; $x < count($array); $x++) {
            switch ($x) {
                case ($x % 2 == 0) : $array[$x] += 2;
                    break;
                case ($x % 3 == 0) : $array[$x] += 3;
                    break;
            }
        }
         print_r($array);
        echo "<br>";
        ?>
    </body>
</html>
