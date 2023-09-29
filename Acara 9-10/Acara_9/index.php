<?php
    include ("person.php");
    $person1 = new Person();    
    //set value -> set_name('Lukman Hakim');
    $person1 -> set_name("Lukman Hakim");
    //akses value dari property name
    echo $person1-> get_name()."<br>";
    //properti tidak bisa diakses secara langsung, karna muncul error
    echo "Hai " . $person1->get_name="Taufiq Rizaldi";
    echo"<hr>";
?>