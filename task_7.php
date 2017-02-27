<!DOCTYPE html>
<!--
- создать экземпляр класса B и вызвать каждый метод, посмотреть что получилось,
проверить себя. затем в дочернем классе переопределить все переменные 
родительского класса и вызвать еще раз все методы.  
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class A {

            public $public = 'public1';
            protected $protected = 'protected1';
            private $private = 'private1';

            public function publicGetPublic() {
                return $this->public;
            }

            protected function protectedGetPublic() {
                return $this->public;
            }

            private function privateGetPublic() {
                return $this->public;
            }

            public function publicGetProtected() {
                return $this->protected;
            }

            protected function protectedGetProtected() {
                return $this->protected;
            }

            private function privateGetProtected() {
                return $this->protected;
            }

            public function publicGetPrivate() {
                return $this->private;
            }

            protected function protectedGetPrivate() {
                return $this->private;
            }

            private function privateGetPrivate() {
                return $this->private;
            }

            public function overrideMethod() {
                return 123 . '-' . $this->public;
            }

        }

        class B extends A {
            public $public = 'public2';  //for second part
            protected $protected = 'protected2'; //for second part
            private $private = 'private2'; //for second part
            public function overrideMethod() {
                return 456 . '-' . $this->public;
            }

        }
        $obj = new B();
            echo $obj->publicGetPublic($public) . "<br>"; //works
//            echo $obj->protectedGetPublic($public) . "<br>"; //error
//            echo $obj->privateGetPublic($public) . "<br>"; //error
            echo "<hr>";
            echo $obj->publicGetProtected($protected) . "<br>"; //works
//            echo $obj->protectedGetProtected($protected) . "<br>";//error
//            echo $obj->privateGetProtected($protected) . "<br>";//error
            echo "<hr>";
            echo $obj->publicGetPrivate($private) . "<br>"; //works
//            echo $obj->protectedGetPrivate($private) . "<br>";//error
//            echo $obj->privateGetPrivate($private) . "<br>";//error
            echo "<hr>";
            echo $obj->overrideMethod($public); //works
            ?>
    </body>
</html>
