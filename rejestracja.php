<?php

$nazwa = $_POST['nazwa'];
$haslo = $_POST['haslo'];
$email = $_POST['email'];
$miasto = $_POST['miasto'];
$kod = $_POST['kod'];
$ulica = $_POST['ulica'];
$nrDomu = $_POST['nrDomu'];

$check = $_POST['check'];
$submit = $_POST['submit'];


$nazwaVal = '/^[A-Za-z]{1,}+[0-9]{0,}$/u';
$hasloVal = '/^.{5,}+$/u';
$emailVal = '/^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/';
$miastoVal = '/^[A-Za-zĄĘĆŁŃÓŚŻŹąęćłńóśżź]{3,100}$|^[A-Za-zĄĘĆŁŃÓŚŻŹąęćłńóśżź]+[A-Za-zĄĘĆŁŃÓŚŻŹąęćłńóśżź0-9\s\-]+[A-Za-zĄĘĆŁŃÓŚŻŹąęćłńóśżź0-9]{1,100}$/';
$kodVal = '/^[0-9]{2}-[0-9]{3}$/';
$ulicaVal = '/^[A-Za-zĄĘĆŁŃÓŚŻŹąęćłńóśżź]{3,100}$|^[A-Za-zĄĘĆŁŃÓŚŻŹąęćłńóśżź]+[A-Za-zĄĘĆŁŃÓŚŻŹąęćłńóśżź0-9\s\-\.\/]+[A-Za-zĄĘĆŁŃÓŚŻŹąęćłńóśżź0-9]{1,100}$/';


if(preg_match($nazwaVal,$nazwa)||(preg_match($hasloVal,$haslo)||(preg_match($emailVal,$email)||(preg_match($miastoVal,$miasto)||(preg_match($miastoVal,$miasto)



















$tablica = array("nazwa" => $nazwa, "haslo" => $haslo, "email" => $email, "miast" => $miasto, "kod" => $kod, "ulica" => $ulica, "nrDomu" => $nrDomu); // tworze sobie tablice z wszytkim

$fileJson = file_get_contents("user.json"); // bierze zawartosc tablicy
$tablica2 = json_decode($fileJson); // zmiena stringa na json
array_push($tablica2->users, $tablica); // dodanie tablicy z danymi do users
// echo var_dump($tablica2);
$tablica2 = json_encode($tablica2); // zamiana jsona na streinga 


file_put_contents("user.json", $tablica2); //dodanie danych do pliku z users
