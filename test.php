<?php
$fileJson = file_get_contents("oferty.json");
$tablica = json_decode($fileJson);
          echo $tablica->oferty[0]->restauracja;
      ?>
