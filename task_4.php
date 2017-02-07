<!DOCTYPE html>
<!--
Вначале написать самом ответы, а потом проверить себя 
Что выведет?
$a = 0;
$b = '0';
$c = '0.00';
$d = 0.00;
$e = '';
$f = null;
$g = 'null';
$h = 'a0';
$j = 'a' . 0;
$k = '0a';
$l = 0 . 'a';
$z = 5;
$i = '5';
$x = '1';
$c = 'string';
$v = false;
$n = true;
$s = 'false';
$w = 'true';
$r = [];
$t = '    ';

$a > $b;
$z > $i;
$b > $r;
$g > $f;
$k > $j;

$a / $b;
$a * $b;
$z / $i;
$z * $i;
$r / $z;

$z == $i;
$a == $b;
$a == $c;
$a == $f;
$a == $g;
$a == $v;
$a == $s;
$a == $r;
$a == $t;
$a == $e;
$c == $f;
$c == $g;
$c == $v;
$c == $s;
$c == $r;
$c == $t;
$c == $e;
$s == $v;

$v === $a;
$v === $r;
$v === null;
$a === $d;
$a === $b;
$z === $i;

$a + $b;
$l + $j;
$h + $k;
$z + $i;

$a - $b;
$z - $i;

$a . $b;
$z . $i;
$c . $d;
$f . $g;
$s . $r;
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       $a = 0;
        $b = '0';
        $c = '0.00';
        $d = 0.00;
        $e = '';
        $f = null;
        $g = 'null';
        $h = 'a0';
        $j = 'a' . 0;
        $k = '0a';
        $l = 0 . 'a';
        $z = 5;
        $i = '5';
        $x = '1';
        $m = 'string';//? Было c
        $v = false;
        $n = true;
        $s = 'false';
        $w = 'true';
//        $r = [];
        $t = '    ';

        var_dump($a > $b);  //false
        var_dump($z > $i); // false
        var_dump($b > $r); // false
        var_dump($g > $f); // true
        var_dump($k > $j); // false
        echo "<br>";
        var_dump($a / $b);  //false?
        var_dump($a * $b); //0
        var_dump($z / $i); //1
        var_dump($z * $i); //25
        var_dump($r / $z); //  честно говоря, так и не понял, но предположу, что будет 0(массив преобразуется в 0)
        echo "<br>";
        var_dump($z == $i); //true
        var_dump($a == $b); //true
        var_dump($a == $c); //true
        var_dump($a == $f); //true
        var_dump($a == $g); //false
        var_dump($a == $v); //true
        var_dump($a == $s); //false
        var_dump($a == $r); //true
        var_dump($a == $t); //true
        var_dump($a == $e); //true
        var_dump($c == $f); //false
        var_dump($c == $g); //false
        var_dump($c == $v); //false
        var_dump($c == $s); //false
        var_dump($c == $r); //false
        var_dump($c == $t); //false
        var_dump($c == $e); //false
        var_dump($s == $v); //false
echo "<br>";
        var_dump($v === $a); //false
        var_dump($v === $r); //false
        var_dump($v === null); //false
        var_dump($a === $d); //false
        var_dump($a === $b); //false
        var_dump($z === $i); //false
echo "<br>";
        var_dump($a + $b); //0
        var_dump($l + $j); //0
        var_dump($h + $k); //0
        var_dump($z + $i); //10
echo "<br>";
        var_dump($a - $b); //0
        var_dump($z - $i); //0
echo "<br>";
        var_dump($a . $b); //"00"
        var_dump($z . $i); //"55"
        var_dump($c . $d); //"0,0000"  Не знаю насчет второй запятой, будет ли
        var_dump($f . $g); //"null"
        var_dump($s . $r);  //"false"
        ?>
    </body>
</html>
