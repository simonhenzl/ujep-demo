<html>
    <head>
    </head>
    <h1 align="center">Interaktivní mapa</h1>
    <body>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
       <div style="position: relative; width: 600px; height: 600px;">
     
     <?php
    $minX = $_GET["minX"] ?? 13.95;
    $minY = $_GET["minY"] ?? 50.6;
    $maxX = $_GET["maxX"] ?? 14.15;
    $maxY = $_GET["maxY"] ?? 50.75;
    
    $krok = 0.05;
    
    if (isset($_GET["smer"])) {
    $smer = $_GET["smer"];
    
        if ($smer == "Sever") {
        $minY += $krok;
        $maxY += $krok;
        }
        elseif ($smer == "Jih"){
        $minY -= $krok;
        $maxY -= $krok;
        }
        elseif ($smer == "Vychod"){
        $minX += $krok;
        $maxX += $krok;
        }
        elseif ($smer == "Zapad"){
        $minX -= $krok;
        $maxX -= $krok;
        }
    }   
    $url = "https://ows.terrestris.de/osm/service?SERVICE=WMS&VERSION=1.1.1&REQUEST=GetMap&FORMAT=image/png&TRANSPARENT=true&LAYERS=OSM-WMS&STYLES=&SRS=EPSG:4326&BBOX=$minX,$minY,$maxX,$maxY&WIDTH=600&HEIGHT=600";
    ?>
    
    <img src="<?php echo $url; ?>" style="width: 100%; height: 100%;">
    
    <form method="get" style="position: absolute; top: 10px; left: 50%; transform: translateX(-50%);">
                <input type="hidden" name="minX" value="<?php echo $minX; ?>">
                <input type="hidden" name="minY" value="<?php echo $minY; ?>">
                <input type="hidden" name="maxX" value="<?php echo $maxX; ?>">
                <input type="hidden" name="maxY" value="<?php echo $maxY; ?>">
           
                <input type="submit" name="smer" value="Sever">
        </form>
   
   <form method="get" style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%);">
                <input type="hidden" name="minX" value="<?php echo $minX; ?>">
                <input type="hidden" name="minY" value="<?php echo $minY; ?>">
                <input type="hidden" name="maxX" value="<?php echo $maxX; ?>">
                <input type="hidden" name="maxY" value="<?php echo $maxY; ?>">
                
                <input type="submit" name="smer" value = "Jih">
        </form>

    <form method="get" style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%);">
                <input type="hidden" name="minX" value="<?php echo $minX; ?>">
                <input type="hidden" name="minY" value="<?php echo $minY; ?>">
                <input type="hidden" name="maxX" value="<?php echo $maxX; ?>">
                <input type="hidden" name="maxY" value="<?php echo $maxY; ?>">
                
                <input type="submit" name="smer" value = "Zapad">
        </form>
        
     <form method="get" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%);">
                <input type="hidden" name="minX" value="<?php echo $minX; ?>">
                <input type="hidden" name="minY" value="<?php echo $minY; ?>">
                <input type="hidden" name="maxX" value="<?php echo $maxX; ?>">
                <input type="hidden" name="maxY" value="<?php echo $maxY; ?>">
     
                <input type="submit" name="smer" value = "Vychod">
        </form>
        
        </div>
    </div>
    
    </body>










</html>
