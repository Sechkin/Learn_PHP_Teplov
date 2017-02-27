<!DOCTYPE html>
<!--
создать класс Myself. добавить классу свойства age; name
создать функции getAge - должно вернуть строку 'Мне N лет',
getName = должно вернуть строку "Меня зовут N',getAll - ljk;
должно вернуть строку 'Мне N лет, Меня зовут N'. cсоздать экземпляр класса 
и поочередно вывести на экран результат работы всех трех функций. а так же 
вывести на экран все свойства 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!--?php
        class Myself{
            var $age;
            var $name;
            function getAge (){
                echo "Мне $this->age лет";
            }
            function getName (){
                echo "Меня зовут $this->name";
            }
             function getAll (){
                 $this -> getName();
                 echo " , ";
                $this -> getAge ();
                
            }
           
        }
         $object = new Myself;
         $object -> name = "Вова";
         $object -> age = "33";
         $object -> getName();
         echo "<br>";
         $object -> getAge();
         echo "<br>";
         echo "<br>";
         $object -> getAll();
        ?-->
         <?php
        class Myself{
            public $age;
            public $name;
            function getAge (){
                return "Мне $this->age лет";
            }
            function getName (){
                return "Меня зовут $this->name";
            }
             function getAll (){
                return $this->getName()." , ".$this->getAge ();
            }
           
        }
         $object = new Myself();
         $object -> name = "Вова";
         $object -> age = "33";
         echo $object -> getName();
         echo "<br>";
         echo $object -> getAge();
         echo "<br>";
         echo "<br>";
         echo $object -> getAll();
        ?>
    </body>
</html>
