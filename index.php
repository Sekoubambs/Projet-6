<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>
<body>
<section>

    <?php

$tab = [
        "Lundi" => [
            "nord" => 12,
            "sud" => 18,
            "est" => 18,
            "ouest" => 14,
            "centre" => 12,
        ],
        "Mardi" => [
            "nord" => 13,
            "sud" => 20,
            "est" => 14,
            "ouest" => 15,
            "centre" => 14,
        ],
        "Mercredi" => [
            "nord" => 15,
            "sud" => 21,
            "est" => 16,
            "ouest" => 14,
            "centre" => 15,
        ],
        "Jeudi" => [
            "nord" => 14,
            "sud" => 19,
            "est" => 17,
            "ouest" => 13,
            "centre" => 15,
        ],
        "Vendredi" => [
            "nord" => 12,
            "sud" => 18,
            "est" => 18,
            "ouest" => 12,
            "centre" => 16,
        ],
        "Samedi" => [
            "nord" => 10,
            "sud" => 20,
            "est" => 16,
            "ouest" => 9,
            "centre" => 15,
        ],
        "Dimanche" => [
            "nord" => 14,
            "sud" => 22,
            "est" => 15,
            "ouest" => 10,
            "centre" => 17,
        ],
    ];
    


?>


<div class="container">

<div class="bouton">

        <ul>

            <a href="index.php?jour=lundi"><button type="button">lundi</button></a>
            <a href="index.php?jour=mardi"><button type="button">mardi</button></a>
            <a href="index.php?jour=mercredi"><button type="button">mercredi</button></a>
            <a href="index.php?jour=jeudi"><button type="button">jeudi</button></a>
            <a href="index.php?jour=vendredi"><button type="button">vendredi</button></a>
            <a href="index.php?jour=samedi"><button type="button">samedi</button></a>
            <a href="index.php?jour=dimanche"><button type="button">dimanche</button></a>
        </ul>

</div>

<div class="mesures">

        <?php


                $jourRecherche = isset($_GET['jour']) ? $_GET['jour'] : ''; 

                $jourRecherche = ucfirst(strtolower($jourRecherche)); 

                if ($jourRecherche && isset($tab[$jourRecherche])) { 
   
                foreach ($tab[$jourRecherche] as $region => $valeur) {

                        $classeCSS = 'mesure-' . strtolower($region);
        
                        echo '<span class ="' . $classeCSS .'">' . $valeur . '</span><br>';
                }
                } 

        ?>


</div>


    <div class="image">

        <img src="map.png" alt="map">

    </div>
   


</div>
    

</section>    








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>