<?php
    abstract class Person{
        abstract public function greet();   
    }
    class English extends Person{
        public function greet(){
            return "Hi!";
        }
    }
    class German extends Person{
        public function greet(){
            return "Hallo!";
        }
    }
    class French extends Person{
        public function greet(){
            return "Bonjour!";
        }
    }

    function sayGreetings(Person $person){
        echo $person->greet()."<br>";
    }

    $englishPerson = new English();
    $germanPerson = new German();
    $frenchPerson = new French();

    sayGreetings($englishPerson);
    sayGreetings($germanPerson);
    sayGreetings($frenchPerson);
?>