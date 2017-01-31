<!DOCTYPE html>
<!--1. Прочитать: 
 http://www.php.su/learnphp/vars/?basicA - общие сведения
 Чем отличаются двойные кавычки от одинарных
 Что такое конкатенация
2. Сделать
- Создать переменные $age и $name. Засетить туда свой возраст и имя соответственно.
Создать третью переменную $data в которую поместить строку - "Меня зовут Вова мне 32 годика". 
Имя и возраст подставить из переменных. Сделать это над при помощи конкатенации и без нее.-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "<h1>Hello World!</h1>";
            echo 'Hello World!';
            echo "<br>";
            $name = 'Вова';
            $age = 33;
            $data = 'Меня зовут ' . $name . ', мне ' . $age . 'годика';
            echo $data;
            echo "<br>";
            $dataWithout = "Меня зовут $name, мне $age годика";
            echo $dataWithout;
        ?>
    </body>
</html>
