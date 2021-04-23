<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ToolEdit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="API Wiktionnaire - Récupérer et mettre en forme les définitions de termes recherchés">
    <meta name="author" content="Frédéric Gainza">
    <meta name="theme-color" content="#ffffff">

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon-letters/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-letters/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-letters/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon-letters/site.webmanifest">
    <link rel="mask-icon" href="assets/img/favicon-letters/safari-pinned-tab.svg" color="#5bbad5">

    <link rel="canonical" href="https://api-definition.fgainza.fr">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,900;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">

    
    <!-- CSS Perso -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- GitHub Rubicon Fork Me -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.2.3/gh-fork-ribbon.min.css" />
</head>
<body>

<header>
    <div class="logo">
        <img src="assets/images/Logo.svg" alt="">
    </div>
    <nav>
        <ul>
            <li> 
                <a href="#" onclick="nouveau()">
                <div class="picto">
                    <i class="far fa-file-alt"></i> 
                </div>   
                Nouveau</a> 
            </li> 


            <li> 
                <a href="#" onclick="traduction()">
                <div class="picto">
                <i class="fas fa-language"></i> 
                </div>   
                Traduire</a> 
            </li> 

            <li> 
                <a href="#" onclick="dictionnaire()">
                <div class="picto">
                <i class="fas fa-book"></i> 
                </div>   
                Dictionnaire</a> 
            </li> 

            <!-- <li> 
                <a href="#">
                <div class="picto">
                <i class="fas fa-spell-check"></i> 
                </div>   
                SEO</a> 
            </li> -->

            <li> 
                <a class="countword" href="#"  onclick="synthese()">
                <div class="picto">
                <i class="far fa-chart-bar"></i>
                </div>   
                Synthèse</a> 
            </li>

        </ul>
    </nav>

    <a href="#"class="download btn">Télécharger</a>
</header>
    
