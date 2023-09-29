<?php
    $hak_akses = "admin";

    if ($hak_akses === "admin") {
        echo "anda memiliki hak akses admin";
    }
    elseif ($hak_akses === "jamaah") {
        echo "anda memiliki hak akses jamaah";
    }
    else {
        echo "hak akses tidak valid";
    }
?> 