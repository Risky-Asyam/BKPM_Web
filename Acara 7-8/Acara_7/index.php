<?php
    include("person.php");

    $stefan = new person("Stefan Mischook");
    $jimmy = new person("Nick");

    $stefan -> set_name("Stefan Mischook");
    $jimmy -> set_name("Nick Waddles");

    echo "Stefan's full name : ". $stefan->get_name();
    echo "<br>";
    echo "Nick's full name : ". $jimmy -> get_name();
?>