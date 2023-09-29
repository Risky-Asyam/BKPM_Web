<?php
include 'produk.php';

$person1 = new produk("Asyam", 20, "Male");
echo $person1->getName() ;
echo "<br>";
echo $person1->getAge();
?>