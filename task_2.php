<!DOCTYPE html>
<!--2.функции работы работы со строками
- кратко ознакомиться с функциями http://www.php.su/functions/?cat=strings 

есть строка "   Харьков, Львов, Днепропетровск "
- удалить пробелы в начале и в конце этой строки
- разбить эту строку в массив. разделителем будет запятая.

есть массив ['Харьков','Львов','Днепропетровск']
- сделать из этого массива строку. слова чтобы шли в строке через запятую

есть строка "067-123-45-67"
- заменить в строке 067 на 095

есть строка "<!DOCTYPE html><html><head><script>window.getYourPrivateBrowserCoockiesDataAndSendToBadGuys();<script></head><body>Site Content</body></html>"
- удалить из нее теги

есть строка "Random string"
- посчитать количество символов в ней
- перевернуть ее задом наперед

есть строка 'hello world'
- сделать первую букву в верхнем регистре
- сделать первые буквы всех слов в верхнем регистре
- Сделать всю строку в верхнем регистре
- сделать всю строку в нижнем регистре

творческое задание! есть строка "some random text 'Hello, PHP progrаmmer!' some random text" тут могут помочь фунуции strpos, substr, trim
- вырезать из нее все то что до одинарных кавычек и все что после чтобы осталось только Hello, PHP progrаmmer! (без одинарных кавычек)-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $firstString = "   Харьков, Львов, Днепропетровск ";
            echo "Строка на входе: <pre>$firstString</pre>";
            $lenth = strlen($firstString);
            echo "количество символов в строке с пробелами в начале и конце: $lenth <hr>";

            $firstStringMod = trim($firstString);
            echo "Строка после обрезки: <pre>$firstStringMod</pre>";
            echo "количество символов в строке без пробелов в начале и конце: " . strlen($firstStringMod) . "<hr>";
            
            $firstStringArr = explode(",", $firstString);
            echo "Тип до преобразования: " . gettype($firstString) . " . Тип после преобразования: " . gettype($firstStringArr) . "<hr>";
            
            $firstStringMod2 = implode(",", $firstStringArr);
            echo "Тип после обратного преобразования: " . gettype($firstStringMod2) . ". Строка: " . $firstStringMod2 . "<hr> <hr><hr>";
            
            $kievstar = "067-123-45-67";
            echo "Номер Киевстар: $kievstar <br>";
            echo  "Номер МТС: 095" . substr($kievstar,3). "<hr> <hr><hr>";   
            echo  "Номер МТС 2й вариант: " . str_replace(067, 095, $kievstar). "<hr> <hr><hr>";   
            
            $tagStr = '<!DOCTYPE html><html><head><script>window.getYourPrivateBrowserCoockiesDataAndSendToBadGuys();<script></head><body>Site Content</body></html>';
            echo "С тэгами: <pre>" . HtmlSpecialChars($tagStr) . "</pre>";
            echo "Без тэгов: " . strip_tags($tagStr) . "<hr> <hr><hr>";
            
            $randomStr = "Random string";
            echo "<pre>$randomStr</pre>" . " Количество символов: " . strlen($randomStr) . "<hr>";
            echo "Задом наперед: <pre>" . strrev($randomStr) . "</pre><hr> <hr><hr>";
            
            $hwStr = 'hello world';
            
        ?>
    </body>
</html>
