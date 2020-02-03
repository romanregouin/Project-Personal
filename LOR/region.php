<html>
    <head>
        <link rel="icon" type="image/png" href="Img/icon.png">
        <link rel="stylesheet" href="LOR.css">
        <title>Let's have fun !</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    </head>
    <body>
    <?php
        include("menu.php");
    ?>
    <div id="tableau">
        <ul class="menu_region">
            <li class="list_region">
                <a href="index.php?Region=Demacia">
                    <img src="Img/demacia_splash.jpg" alt="demacia_region" id="demacia_region" class="image_region">
                    <img src="Img/demacia_crest_icon.png" alt="demacia_icon" id="demacia_icon" class="icon_region">
                </a>
            </li>
            <li class="list_region"><a href="index.php?Region=Piltover/Zaun"><img src="Img/piltover_splash.jpg" alt="piltover/zaun_region" id="piltover/zaun_region" class="image_region"></a></li>
            <li class="list_region"><a href="index.php?Region=Shadow_Isles"><img src="Img/shadow-isles_splash.jpg" alt="shadow-isles_region" id="shadow-isles_region" class="image_region"></a></li>
            <li class="list_region"><a href="index.php?Region=Freljord"><img src="Img/freljord_splash.jpg" alt="freljord_region" id="freljord_region" class="image_region"></a></li>
            <li class="list_region"><a href="index.php?Region=Noxus"><img src="Img/noxus_splash.jpg" alt="noxus_region" id="noxus_region" class="image_region"></a></li>
            <li class="list_region"><a href="index.php?Region=Ionia"><img src="Img/ionia-01.jpg" alt="ionia_region" id="ionia_region" class="image_region"></a></li>
        </ul>
    </div>
    <?php
        include("footer.php");
    ?>
    </body>
</html>