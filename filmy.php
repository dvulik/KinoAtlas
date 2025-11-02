<?php
$filmy = [
  [
    "id" => 1,
    "nazev" => "Arrival",
    "rok" => 2016,
    "popis" => "Lingvistka Louise Banks je pověřena armádou, aby navázala komunikaci s mimozemskými bytostmi, které přistály na Zemi. 
                Čas se stává klíčovým faktorem, protože světové velmoci začínají jednat proti sobě.",
    "hodnoceni" => 8.0
  ],
  [
    "id" => 2,
    "nazev" => "Prisoners",
    "rok" => 2013,
    "popis" => "V malém městě dojde k únosu dvou dívek. Zoufalý otec Keller Dover vezme vyšetřování do vlastních rukou, 
                zatímco detektiv Loki se snaží případ vyřešit oficiální cestou.",
    "hodnoceni" => 8.1
  ],
  [
    "id" => 3,
    "nazev" => "Ex Machina",
    "rok" => 2014,
    "popis" => "Mladý programátor Caleb je vybrán, aby se zúčastnil experimentu s umělou inteligencí. 
                Brzy ale zjistí, že hranice mezi člověkem a strojem je mnohem tenčí, než si myslel.",
    "hodnoceni" => 7.7
  ],
  [
    "id" => 4,
    "nazev" => "Nightcrawler",
    "rok" => 2014,
    "popis" => "Lou Bloom je ambiciózní muž, který začne natáčet brutální noční nehody a zločiny v Los Angeles. 
                Postupně však překračuje etické hranice, aby získal co nejlepší záběry.",
    "hodnoceni" => 7.8
  ],
  [
    "id" => 5,
    "nazev" => "The Lighthouse",
    "rok" => 2019,
    "popis" => "Dva strážci majáku na odlehlém ostrově se postupně propadají do šílenství. 
                Film je černobílý a pracuje s psychologickým napětím, mýty a halucinacemi.",
    "hodnoceni" => 7.4
  ],
  [
    "id" => 6,
    "nazev" => "F1",
    "rok" => 2025,
    "popis" => "Jezdec Formule 1 se vrací z důchodu, aby mentoroval a pracoval s mladším jezdcem.",
    "hodnoceni" => 7.8
  ],
  [
    "id" => 7,
    "nazev" => "Hříšníci",
    "rok" => 2025,
    "popis" => "Bratři-dvojčata se snaží nechat své problematické životy za sebou a vracejí se do svého rodného města, 
                aby začali znovu, jen aby zjistili, že na ně čeká ještě větší zlo.",
    "hodnoceni" => 7.6
  ],
  [
    "id" => 8,
    "nazev" => "Demon Slayer: Kimetsu no Yaiba Infinity Castle",
    "rok" => 2025,
    "popis" => "Sbor zabijáků démonů je vtažen do Hradu nekonečna, kde Tanjiro a Hashira čelí děsivým démonům Vyššího ranku v zoufalém boji, 
                když začíná závěrečná bitva proti Muzanovi Kibutsujimu.",
    "hodnoceni" => 8.6
  ],
  [
    "id" => 9,
    "nazev" => "Mission: Impossible - Poslední zúčtování",
    "rok" => 2025,
    "popis" => "Hunt a MMF pronásledují nebezpečnou umělou inteligenci zvanou Entita, která infiltrovala globální inteligenci. 
                Hunt je pronásledován vládami a postavou z minulosti a snaží se jí zabránit v navždy změně světa.",
    "hodnoceni" => 7.2
  ],
  [
    "id" => 10,
    "nazev" => "Kmotr",
    "rok" => 1972,
    "popis" => "Stárnoucí patriarcha dynastie organizovaného zločinu předává kontrolu nad svou tajnou říší svému neochotnému synovi.",
    "hodnoceni" => 9.2
  ],
];
?>

<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>KinoAtlas</title>
  <link rel="icon" href="logo/final.png" type="image/png">
</head>
<body>
  <div class="container">
    <nav class="navbar">
      <div class="logo">
        <img src="logo/final.png" width="85px" height="57px" alt="Logo">
      </div>
      <form action="vyhledavani.php" method="get" class="search-form">
        <input type="text" name="q" placeholder="Hledat film nebo herce...">
        <button type="submit">Hledat</button>
      </form>
      <ul class="links">
        <li><a href="index.php">Domů</a></li>
        <li><a href="filmy.php">Filmy</a></li>
        <li><a href="herci.php">Herci</a></li>
        <li><a href="watchlist.php">Watchlist</a></li>
      </ul>
    </nav>

    <?php foreach ($filmy as $film): ?>
      <div class="film">
        <div class="film-rada">
          <img src="nahledovky/<?= $film['id'] ?>.jpg" height="132px" width="85px" alt="">
          <div class="film-info">
            <h2><?= $film["nazev"] ?> (<?= $film["rok"] ?>)</h2>
            <p><?= $film["popis"] ?></p>
            <p><strong>Hodnocení:</strong> <?= $film["hodnoceni"] ?>/10</p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    
}

body{
    background: linear-gradient(to right, #ece9e6, #ffffff);
}

h1{
    text-align: center;
    margin: 20px 0 0 0;
}

header {
    position: sticky;
    top: 0;
    z-index: 1000;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #1e1e1e;
    color: #fff;
    padding: 10px 20px;
}

.links {
    list-style: none;
    display: flex;
    gap: 40px;
}

.links a {
    color: #fff;
    text-decoration: none;
    transition: color 0.2s;
}

.links a:hover {
    color: #e9d311ff;
}

.search-form {
    display: flex;
    gap: 8px;
    flex: 1 1 0;
    justify-content: center;
}

.search-form input {
    padding: 6px 18px;
    border: none;
    border-radius: 5px;
    width: 550px;
    height: 35px;
}

.search-form button {
    padding: 6px 22px;
    border: none;
    border-radius: 5px;
    background: #b6a617ff;
    color: white;
    cursor: pointer;
    height: 35px;
    transition: background 0.2s;
}

.container {
    max-width: 1500px;
    width: 99vw;
    min-height: 98vh;
    margin: 32px auto 32px auto;
    background: #fff;
    box-shadow: 0 8px 32px rgba(0,0,0,0.12);
    padding: 0 0 28px 0;
    border-radius: 16px;
}

.film {
      background: #fff;
      margin: 20px;
      padding: 15px 20px;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .film h2 {
      margin-bottom: 10px;
      color: #333;
    }
    .film p {
      margin-bottom: 8px;
      line-height: 1.5;
    }
    .film strong {
      color: #ff9800;
    }
    .film-rada {
      display: flex;
      gap: 10px;
    }
    .film-rada img {
    border-radius: 16px;
    box-shadow: 0 5px 4px rgba(0, 0, 0, 0.1);
}
    .film-info {
      flex: 1;
    }
</style>
</html>
