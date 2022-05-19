<?php

$nazwa = $_POST['nazwa'];
$haslo = $_POST['haslo'];

$submit = $_POST['submit'];

$link_do_jsona = "user.json";
$zawartosc_jsona = file_get_contents("user.json");
$string_z_jsona = json_decode($zawartosc_jsona);




function sprawdzaieCzyjest($nazwa)
{

    $users = $GLOBALS['string_z_jsona']->users;
    for ($i = 0; $i < count($users); $i++) {
        if ($users[$i]->nazwa == $nazwa)
            return $i;
    }

    return -1;
}
$index = sprawdzaieCzyjest($nazwa);

if ($index == -1) {
    header("location:logowanie.html");
}



if ($index != -1) {
    $users = $GLOBALS['string_z_jsona']->users;
    if ($users[$index]->haslo == $haslo) {
        header("location:strona_glowna.html");
    } else {
        echo "zły login lub hasło";
    }
}
