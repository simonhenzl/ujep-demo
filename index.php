<?php $start = microtime(true); ?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>ExoOvoce - PHP Verze</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Exotický ráj 🍍</h1>
            <p>Čerstvé plody přímo z tropů až k vám domů</p>
        </div>
        <nav>
            <a href="#">Domů</a>
            <a href="#">Ovoce</a>
            <a href="#">Kontakt</a>
            <span class="kosik-stav">🛒 Košík: 0 Kč</span>
            <span style="color: #90ee90; margin-left: 15px; font-weight: bold;">
                ● <?php echo (date("H") >= 8 && date("H") < 20) ? "Máme otevřeno" : "Momentálně máme zavřeno"; ?>
            </span>
        </nav>
    </header>

    <h2 class="podnadpis">Aktuální nabídka týdne (Dynamická verze)</h2>

    <main class="katalog">
        <div class="produkt">
            <img src="https://i.pinimg.com/736x/c4/41/60/c44160336851753abc03b27896af17b4.jpg" alt="Mango">
            <div class="produkt-info">
                <h2>Mango</h2>
                <p>Sladké a šťavnaté mango z Brazílie.</p>
                <p class="cena">49 Kč / ks</p>
                <button class="btn-koupit">Do košíku</button>
            </div>
        </div>
        <div class="produkt">
            <img src="https://i.pinimg.com/736x/86/81/04/868104774af1defa1d6a2606d75196e8.jpg" alt="Dračí ovoce">
            <div class="produkt-info">
                <h2>Pitaya (Dračí ovoce)</h2>
                <p>Exotický vzhled a jemná chuť.</p>
                <p class="cena">89 Kč / ks</p>
                <button class="btn-koupit">Do košíku</button>
            </div>
        </div>
        <div class="produkt">
            <img src="https://i.pinimg.com/736x/7c/2d/23/7c2d23df7578a62e66faa52aaac5fc73.jpg" alt="Banány">
            <div class="produkt-info">
                <h2>Bio Banány</h2>
                <p>Prémiové banány z Ekvádoru.</p>
                <p class="cena">35 Kč / kg</p>
                <button class="btn-koupit">Do košíku</button>
            </div>
        </div>
    </main>

    <section class="sleva-sekce" style="border: 2px solid orange; padding: 20px; border-radius: 10px; margin: 30px auto; max-width: 800px; text-align: center; background: white;">
        <h3>🎁 Získej slevu podle roku narození</h3>
        <form method="post" action="index.php#sleva">
            <input type="number" name="n" placeholder="Zadej rok narození" required style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            <input type="submit" value="Zjistit mou slevu" style="padding: 10px 20px; background: #ff9900; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">
        </form>

        <div id="sleva" style="margin-top: 15px; font-weight: bold; color: #e65100;">
            <?php
            if (isset($_POST['n'])) {
                $rok = intval($_POST['n']);
                $aktualni = date("Y");
                if ($rok > $aktualni) echo "Ještě jsi se nenarodil!";
                else if ($rok > 2008) echo "Budeš bohatý! Sleva 20 %: MLADI20";
                else if ($rok > 1990) echo "Budeš slavný! Sleva 15 %: ELITA15";
                else echo "Budeš milovaný! Doprava zdarma: LASKA";
            }
            ?>
        </div>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> E-shop ExoOvoce</p>
        <p style="font-size: 0.8em; opacity: 0.7;">
            Vygenerováno za <?php echo round(microtime(true) - $start, 4); ?> s.
        </p>
    </footer>
</body>
</html>
