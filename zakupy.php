<!DOCTYPE html>
<html lang="pl">
<head>
    
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://kit.fontawesome.com/bade884e9c.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="zakupy.css">
      <title>Zakupy</title>
      <style>
            body{
    background-color:#F5C311;
    margin: 0;
}

i{
    margin-top: 40px;
    font-size: 40px;
}
.nawigacja{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    grid-template-rows: 80px;
    width: 100%;
    height: 200px;
    flex-wrap: wrap;
    margin: 0;
    justify-content: space-between;
    background-color:#F5C311;
    font-size: 25px;
}

nav > a{
text-decoration: none;
    color: #000;
    margin: 0;
    text-align: center;
    line-height: 100px;
    font-size: 30px;

}
hr{
      border-top: 1px solid #000;
      color: #F5C311;
      width: 60%;
      margin-left: auto;
      margin-right: auto;
      margin-top: 0;

}

.active{
    font-size: 40px;
    background-color: transparent;
}

.active > hr {
      border-top: 3px solid #000;

}

a:hover{
      transform: scale(0.9);
      transition: 1s;
}


</style>
</head>

<body>
      <nav class="nawigacja">
            <img src="logo.png" alt="logo strony napis oraz widelec i nóż">
          <a  href="strona_glowna.html">O nas <hr></a>
          <a class="active"href="zakupy.php">Zakupy <hr></a>
          <a href="promocje.html">Promocje <hr></a>
          <a href="koszyk.html"><i class="fa-solid fa-cart-shopping"></i></a>
        </nav>

        <?php
            $fileJson = file_get_contents("oferty.json");
            $tablica = json_decode($fileJson);
            echo "<div class='oferta'>"."<div class='restauracja'>".$tablica->oferty[0]->restauracja."</div>".    "<div class='danie'>".$tablica->oferty[0]->danie."</div>".    "<div class='cena'>".$tablica->oferty[0]->cena."</div>".    "<img  class='zdjecie' src=".$tablica->oferty[0]->zdjecie." alt='zdjecie jedzenia'>"."</div>";
            echo "<div class='oferta'>"."<div class='restauracja'>".$tablica->oferty[1]->restauracja."</div>".    "<div class='danie'>".$tablica->oferty[1]->danie."</div>".    "<div class='cena'>".$tablica->oferty[1]->cena."</div>".    "<img  class='zdjecie' src=".$tablica->oferty[1]->zdjecie." alt='zdjecie jedzenia'>"."</div>";
            echo "<div class='oferta'>"."<div class='restauracja'>".$tablica->oferty[2]->restauracja."</div>".    "<div class='danie'>".$tablica->oferty[2]->danie."</div>".    "<div class='cena'>".$tablica->oferty[2]->cena."</div>".    "<img  class='zdjecie' src=".$tablica->oferty[2]->zdjecie." alt='zdjecie jedzenia'>"."</div>";
            ?>


      
        


      
      
 
</body>
</html>