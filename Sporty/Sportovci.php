<?php
require "App.php";
$app = new App();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../vlastne.css">
    <link rel="stylesheet" href="../nove.css">
    <title>Športovci</title>
</head>

<body>
<div class="header zadnyObrazok">
    <h1>Moja nová stránka</h1>
    <h2>Stránka, ktorá sa venuje olympijským hrám v Tokiu</h2>
</div>

<div class="row">
    <div class="col-1 col-s-0">

    </div>
    <div class="col-2 col-s-12 menu">
        <ul>
            <li class="hlavne"><a href="../index.php">Hlavná stránka</a></li>
            <li class="hlavne">Športy<i class="fas fa-caret-down"></i></li>
            <li class="opacne"><a href="Atletika.html" class="red">Atletika</a></li>
            <li class="opacne"><a href="Futbal.html" class="red">Futbal</a></li>
            <li class="opacne"><a href="Plavanie.html" class="red">Plávanie</a></li>
            <li class="opacne"><a href="Volejbal.html" class="red">Volejbal</a></li>
            <li class="hlavne">Krajiny</li>
            <li class="opacne">Slovensko</li>
            <li class="opacne">Česko</li>
            <li class="opacne">Japonsko</li>
            <li class="opacne">USA</li>
        </ul>
    </div>

    <div class="col-6 col-s-8">
        <div class="main">
            <h1>Športovci</h1>

            <br>

            <form method="post" enctype="multipart/form-data">
                <input type="file" name="file"><br><br>
                <input type="submit" value="Vloz obrazok">
            </form>
            <?php foreach ($app->getAllPosts() as $post) { ?>
                <div class="lave" style="width: 18rem; margin: 0.2rem; margin-top: 1rem">
                    <img src="files/<?=$post->getImage()?>" class="obr vlavo" height="160">
                    <?php if($post->getMeno() == "") { ?>
                        <form method="post">
                            <input type="hidden" name="id" value="<?= $post->getId()?>">
                            <input type="text" name="text" size="19" placeholder="Vloz meno ...">
                            <input type="submit" value="Posli" name="meno">
                        </form>
                    <?php } else { ?>
                        <p><?=$post->getmeno()?></p>
                    <?php } ?>
                    <?php if($post->getPriezvisko() == "") { ?>
                        <form method="post">
                            <input type="hidden" name="id" value="<?= $post->getId()?>">
                            <input type="text" name="text" size="19" placeholder="Vloz priezvisko ...">
                            <input type="submit" value="Posli" name="priezvisko">
                        </form>
                    <?php } else { ?>
                        <p><?=$post->getPriezvisko()?></p>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="col-22 col-s-4 aside">
        <div class="right">
            <img src="../pravy.png" class="obr">
            <h2>Japonsko</h2>
            <p>Japonsko (jap. 日本 – Nippon alebo Nihon; formálne: jap. 日本国 – Nippon-koku alebo Nihon-koku) je štát ležiaci na východnom okraji ázijského kontinentu, na východ od Číny a Kórey. Rozkladá sa od Ochotského mora na severe, po Východočínske more na juhovýchode. Zo západu ho obklopuje Japonské more a z východu a juhu Tichý oceán.</p>
        </div>
    </div>
    <div class="col-1 col-s-0">

    </div>
</div>

</div>

<div>
    <div class="col-3">

    </div>
    <div class="col-6">]
        <div class="footer">
            <p>Autor stránky - Daniel Závodský.</p>
        </div>
    </div>
    <div class="col-3">

    </div>
</div>
</body>
</html>