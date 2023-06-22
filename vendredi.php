<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="stle.css">

</head>
<body>
<section>

    <?php

$tab = [

        
        "Lundi" => array(
    
            "nord" => 12 ,
            "est" => 18 ,
            "est" =>  15 ,
            "ouest" => 14 ,
            "centre" => 12 ,
    ),
    
            "Mardi" => array(
    
            "nord" => 13,
            "sud" => 20,
            "est" => 14,
            "ouest" => 15,
            "centre" => 14
    ),
    
            "Mercredi" => array(
    
            "nord" => 15,
            "sud" => 21,
            "est" => 16,
            "ouest" => 14,
            "centre" => 15
    ),
    
            "Jeudi" => array(
    
            "nord" => 14,
            "sud" => 19,
            "est" => 17,
            "ouest" => 13,
            "centre" => 15
    ),
    
            "Vendredi" => array(
    
            "nord" => 12,
            "sud" => 18,
            "est" => 18,
            "ouest" => 12,
            "centre" => 16
    ),
    
            "Samedi" => array(
    
            "nord" => 10,
            "sud" => 20,
            "est" => 16,
            "ouest" => 9,
            "centre" => 15
    ),
            "Dimanche" => array(
    
            "nord" => 14,
            "sud" => 22,
            "est" => 15,
            "ouest" => 10,
            "centre" => 17
    )
    ]
    
    ;
    
    
    ?>
    
        <div class="bouton">
    
            <ul>
    
                <a href="index.php?jour=lundi"><li>lundi</li></a>
                <a href="index.php?jour=mardi"><li>mardi</li></a>
                <a href="index.php?jour=mercredi"><li>mercredi</li></a>
                <a href="index.php?jour=jeudi"><li>jeudi</li></a>
                <a href="index.php?jour=vendredi"><li>#</li></a>
                <a href="index.php?jour=samedi"><li>samedi</li></a>
                <a href="index.php?jour=dimanche"><li>dimanche</li></a>
    
            </ul>
    
            <?php
    
    
            foreach ($tab as $key) {
    
                            if ($_GET["jour"]=="lundi") {
                         
                             echo "nord" . '<br>' . "sud" .'<br>' .  "est" .'<br>' .  "ouest" . '<br>' . "centre" ; 
                           }
    
                           if ($_GET["jour"]=="mardi") {
                         
                            echo "nord" . '<br>' . "sud" .'<br>' .  "est" .'<br>' .  "ouest" . '<br>' . "centre" ; 
                          }
    
                          if ($_GET["jour"]=="mercredi") {
                         
                            echo "nord" . '<br>' . "sud" .'<br>' .  "est" .'<br>' .  "ouest" . '<br>' . "centre" ; 
                          }
    
                          if ($_GET["jour"]=="jeudi") {
                         
                            echo "nord" . '<br>' . "sud" .'<br>' .  "est" .'<br>' .  "ouest" . '<br>' . "centre" ; 
                          }
    
                          if ($_GET["jour"]=="vendredi") {
                         
                            echo "nord" . '<br>' . "sud" .'<br>' .  "est" .'<br>' .  "ouest" . '<br>' . "centre" ; 
                          }
    
                          if ($_GET["jour"]=="samedi") {
                         
                            echo "nord" . '<br>' . "sud" .'<br>' .  "est" .'<br>' .  "ouest" . '<br>' . "centre" ; 
                          }
    
                          if ($_GET["jour"]=="dimanche") {
                         
                            echo "nord" . '<br>' . "sud" .'<br>' .  "est" .'<br>' .  "ouest" . '<br>' . "centre" ; 
                          }
    
                          
                    
                          
            }
           
    
           
        ?>

    </div>



    <div>
    <img src="map.png" alt="map">
    </div>

</section>    








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>