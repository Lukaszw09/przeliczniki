<?php
    session_start();

    if (!isset($_SESSION["jednostki"]))
    {
        $_SESSION["jednostki"] = [];
    }

    // zapis wybranej jednostki wysylany asynchronicznie z kod.js po zmianie <select>
    if (($_GET["akcja"] ?? "") == "zapisz_jednostke")
    {
        $typ_jednostki = $_GET["typ"] ?? "";
        $numer_jednostki = $_GET["numer"] ?? "";
        $wartosc_jednostki = $_GET["jednostka"] ?? "";

        if ($typ_jednostki !== "" && $numer_jednostki !== "")
        {
            $_SESSION["jednostki"]["{$typ_jednostki}_{$numer_jednostki}"] = $wartosc_jednostki;
        }

        exit("ok");
    }

    // zwraca " selected" jeśli dana opcja jest zapisaną (lub domyślną) jednostką pola
    function zaznaczona($typ, $numer, $wartosc, $domyslna)
    {
        $zapisana = $_SESSION["jednostki"]["{$typ}_{$numer}"] ?? $domyslna;
        return $zapisana === $wartosc ? " selected" : "";
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>strona matma</title>
</head>

<body>
    <header>
        <h1>strona matma</h1>
    </header>
    <main>
    <h2>przeliczniki</h2>
        <div class="przelicznik" id="przelicznik_dlugosci">
            <h3>przelicznik dlugości</h3>
            <form action="index.php" method="post" name="przelicznik_dlugosci" >
            <div id="jednostki_dlugosci">
            <input type="number" id="number1_dlugosci" placeholder="Wprowadź liczbę">
                <select id="jednostka1_dlugosci" class="jednostki">
                    <option value="m"<?= zaznaczona("dlugosci", 1, "m", "m") ?>>Metr</option>
                    <option value="μm"<?= zaznaczona("dlugosci", 1, "μm", "m") ?>>mikrometr</option>
                    <option value="mm"<?= zaznaczona("dlugosci", 1, "mm", "m") ?>>Milimetr</option>
                    <option value="cm"<?= zaznaczona("dlugosci", 1, "cm", "m") ?>>Centymetr</option>
                    <option value="dm"<?= zaznaczona("dlugosci", 1, "dm", "m") ?>>decymetr</option>
                    <option value="km"<?= zaznaczona("dlugosci", 1, "km", "m") ?>>Kilometr</option>
                    <option value="in"<?= zaznaczona("dlugosci", 1, "in", "m") ?>>cal</option>
                    <option value="ft"<?= zaznaczona("dlugosci", 1, "ft", "m") ?>>stopa</option>
                    <option value="yd"<?= zaznaczona("dlugosci", 1, "yd", "m") ?>>jard</option>
                    <option value="mi"<?= zaznaczona("dlugosci", 1, "mi", "m") ?>>Mila</option>
                    <option value="kbl"<?= zaznaczona("dlugosci", 1, "kbl", "m") ?>>kabel</option>
                    <option value="nmi"<?= zaznaczona("dlugosci", 1, "nmi", "m") ?>>Mila morska</option>
                    <option value="au"<?= zaznaczona("dlugosci", 1, "au", "m") ?>>jednostka astronomiczna</option>
                    <option value="ly"<?= zaznaczona("dlugosci", 1, "ly", "m") ?>>rok świetlny</option>
                    <option value="par"<?= zaznaczona("dlugosci", 1, "par", "m") ?>>parsek</option>   
                </select><br>

                <input type="number" id="number2_dlugosci" placeholder="Wprowadź liczbę">
                <select id="jednostka2_dlugosci" class="jednostki">
                    <option value="m"<?= zaznaczona("dlugosci", 2, "m", "m") ?>>Metr</option>
                    <option value="μm"<?= zaznaczona("dlugosci", 2, "μm", "m") ?>>mikrometr</option>
                    <option value="mm"<?= zaznaczona("dlugosci", 2, "mm", "m") ?>>Milimetr</option>
                    <option value="cm"<?= zaznaczona("dlugosci", 2, "cm", "m") ?>>Centymetr</option>
                    <option value="dm"<?= zaznaczona("dlugosci", 2, "dm", "m") ?>>decymetr</option>
                    <option value="km"<?= zaznaczona("dlugosci", 2, "km", "m") ?>>Kilometr</option>
                    <option value="in"<?= zaznaczona("dlugosci", 2, "in", "m") ?>>cal</option>
                    <option value="ft"<?= zaznaczona("dlugosci", 2, "ft", "m") ?>>stopa</option>
                    <option value="yd"<?= zaznaczona("dlugosci", 2, "yd", "m") ?>>jard</option>
                    <option value="mi"<?= zaznaczona("dlugosci", 2, "mi", "m") ?>>Mila</option>
                    <option value="kbl"<?= zaznaczona("dlugosci", 2, "kbl", "m") ?>>kabel</option>
                    <option value="nmi"<?= zaznaczona("dlugosci", 2, "nmi", "m") ?>>Mila morska</option>
                    <option value="au"<?= zaznaczona("dlugosci", 2, "au", "m") ?>>jednostka astronomiczna</option>
                    <option value="ly"<?= zaznaczona("dlugosci", 2, "ly", "m") ?>>rok świetlny</option>
                    <option value="par"<?= zaznaczona("dlugosci", 2, "par", "m") ?>>parsek</option>
                </select><br>
            
                <?php
                    for($i=0;$i<($_SESSION["dlugosc"] ?? 0);$i++)
                    {
                    
                ?>
            <input type="number" id="number<?= $i + 3 ?>_dlugosci" placeholder="Wprowadź liczbę">
                <select id="jednostka<?= $i + 3 ?>_dlugosci" class="jednostki">
                    <option value="m"<?= zaznaczona("dlugosci", $i + 3, "m", "m") ?>>Metr</option>
                    <option value="μm"<?= zaznaczona("dlugosci", $i + 3, "μm", "m") ?>>mikrometr</option>
                    <option value="mm"<?= zaznaczona("dlugosci", $i + 3, "mm", "m") ?>>Milimetr</option>
                    <option value="cm"<?= zaznaczona("dlugosci", $i + 3, "cm", "m") ?>>Centymetr</option>
                    <option value="dm"<?= zaznaczona("dlugosci", $i + 3, "dm", "m") ?>>decymetr</option>
                    <option value="km"<?= zaznaczona("dlugosci", $i + 3, "km", "m") ?>>Kilometr</option>
                    <option value="in"<?= zaznaczona("dlugosci", $i + 3, "in", "m") ?>>cal</option>
                    <option value="ft"<?= zaznaczona("dlugosci", $i + 3, "ft", "m") ?>>stopa</option>
                    <option value="yd"<?= zaznaczona("dlugosci", $i + 3, "yd", "m") ?>>jard</option>
                    <option value="mi"<?= zaznaczona("dlugosci", $i + 3, "mi", "m") ?>>Mila</option>
                    <option value="kbl"<?= zaznaczona("dlugosci", $i + 3, "kbl", "m") ?>>kabel</option>
                    <option value="nmi"<?= zaznaczona("dlugosci", $i + 3, "nmi", "m") ?>>Mila morska</option>
                    <option value="au"<?= zaznaczona("dlugosci", $i + 3, "au", "m") ?>>jednostka astronomiczna</option>
                    <option value="ly"<?= zaznaczona("dlugosci", $i + 3, "ly", "m") ?>>rok świetlny</option>
                    <option value="par"<?= zaznaczona("dlugosci", $i + 3, "par", "m") ?>>parsek</option>   
                </select><br>
                <?php
                    }
                ?>
            </div>

            <button id="button1_dodaj" type="button">dodaj jednostkę</button>
            </form>
        </div>

        <div class="przelicznik" id="przelicznik_powierzchni">
            <h3>przelicznik powierzchni</h3>
            <form action="index.php" method="post" name="przelicznik_powierzchni">
                <?php
                    
                    if(!isset($_SESSION["powierzchnia"]))
                    {
                        $_SESSION["powierzchnia"]=0;
                    }
                ?>
            <div id="jednostki_powierzchni">
            <input type="number" id="number1_powierzchni" placeholder="Wprowadź liczbę">
            <select id="jednostka1_powierzchni" class="jednostki">
                <option value="m²"<?= zaznaczona("powierzchni", 1, "m²", "m²") ?>>Metr kwadratowy</option>
                <option value="km²"<?= zaznaczona("powierzchni", 1, "km²", "m²") ?>>Kilometr kwadratowy</option>
                <option value="ha"<?= zaznaczona("powierzchni", 1, "ha", "m²") ?>>hektar</option>
                <option value="a"<?= zaznaczona("powierzchni", 1, "a", "m²") ?>>ar</option>
                <option value="dm²"<?= zaznaczona("powierzchni", 1, "dm²", "m²") ?>>Decymetr kwadratowy</option>
                <option value="cm²"<?= zaznaczona("powierzchni", 1, "cm²", "m²") ?>>Centymetr kwadratowy</option>
                <option value="mm²"<?= zaznaczona("powierzchni", 1, "mm²", "m²") ?>>Milimetr kwadratowy </option>
                <option value="mi²"<?= zaznaczona("powierzchni", 1, "mi²", "m²") ?>>Mila kwadratowa</option>
                <option value="akr"<?= zaznaczona("powierzchni", 1, "akr", "m²") ?>>akr</option>
                <option value="ft²"<?= zaznaczona("powierzchni", 1, "ft²", "m²") ?>>stopa kwadratowa</option>
                <option value="in²"<?= zaznaczona("powierzchni", 1, "in²", "m²") ?>>cal kwadratowy</option>
                <option value="yd²"<?= zaznaczona("powierzchni", 1, "yd²", "m²") ?>>jard kwadratowy</option>
            </select><br>

            <input type="number" id="number2_powierzchni" placeholder="Wprowadź liczbę">
            <select id="jednostka2_powierzchni" class="jednostki">
                <option value="m²"<?= zaznaczona("powierzchni", 2, "m²", "m²") ?>>Metr kwadratowy</option>
                <option value="km²"<?= zaznaczona("powierzchni", 2, "km²", "m²") ?>>Kilometr kwadratowy</option>
                <option value="ha"<?= zaznaczona("powierzchni", 2, "ha", "m²") ?>>hektar</option>
                <option value="a"<?= zaznaczona("powierzchni", 2, "a", "m²") ?>>ar</option>
                <option value="dm²"<?= zaznaczona("powierzchni", 2, "dm²", "m²") ?>>Decymetr kwadratowy</option>
                <option value="cm²"<?= zaznaczona("powierzchni", 2, "cm²", "m²") ?>>Centymetr kwadratowy</option>
                <option value="mm²"<?= zaznaczona("powierzchni", 2, "mm²", "m²") ?>>Milimetr kwadratowy </option>
                <option value="mi²"<?= zaznaczona("powierzchni", 2, "mi²", "m²") ?>>Mila kwadratowa</option>
                <option value="akr"<?= zaznaczona("powierzchni", 2, "akr", "m²") ?>>akr</option>
                <option value="ft²"<?= zaznaczona("powierzchni", 2, "ft²", "m²") ?>>stopa kwadratowa</option>
                <option value="in²"<?= zaznaczona("powierzchni", 2, "in²", "m²") ?>>cal kwadratowy</option>
                <option value="yd²"<?= zaznaczona("powierzchni", 2, "yd²", "m²") ?>>jard kwadratowy</option>
            </select><br>
            <?php
                for($i=0;$i<($_SESSION["powierzchnia"] ?? 0);$i++)
                        {
                ?>
            <input type="number" id="number<?= $i + 3 ?>_powierzchni" placeholder="Wprowadź liczbę">
            <select id="jednostka<?= $i + 3 ?>_powierzchni" class="jednostki">
                <option value="m²"<?= zaznaczona("powierzchni", $i + 3, "m²", "m²") ?>>Metr kwadratowy</option>
                <option value="km²"<?= zaznaczona("powierzchni", $i + 3, "km²", "m²") ?>>Kilometr kwadratowy</option>
                <option value="ha"<?= zaznaczona("powierzchni", $i + 3, "ha", "m²") ?>>hektar</option>
                <option value="a"<?= zaznaczona("powierzchni", $i + 3, "a", "m²") ?>>ar</option>
                <option value="dm²"<?= zaznaczona("powierzchni", $i + 3, "dm²", "m²") ?>>Decymetr kwadratowy</option>
                <option value="cm²"<?= zaznaczona("powierzchni", $i + 3, "cm²", "m²") ?>>Centymetr kwadratowy</option>
                <option value="mm²"<?= zaznaczona("powierzchni", $i + 3, "mm²", "m²") ?>>Milimetr kwadratowy </option>
                <option value="mi²"<?= zaznaczona("powierzchni", $i + 3, "mi²", "m²") ?>>Mila kwadratowa</option>
                <option value="akr"<?= zaznaczona("powierzchni", $i + 3, "akr", "m²") ?>>akr</option>
                <option value="ft²"<?= zaznaczona("powierzchni", $i + 3, "ft²", "m²") ?>>stopa kwadratowa</option>
                <option value="in²"<?= zaznaczona("powierzchni", $i + 3, "in²", "m²") ?>>cal kwadratowy</option>
                <option value="yd²"<?= zaznaczona("powierzchni", $i + 3, "yd²", "m²") ?>>jard kwadratowy</option>
                
            </select><br>
                <?php
                    }
                ?>
            </diV>   
            <button id="button2_dodaj" type="button">dodaj jednostkę</button>
            </form>
        </div>

        <div class="przelicznik" id="przelicznik_objetosci">
            <h3>przelicznik objętości</h3>
            <form action="index.php" method="post" name="przelicznik_objetosci">
            <div id="jednostki_objetosci">
                <?php
                    if(!isset($_SESSION["objentosc"]))
                    {
                        $_SESSION["objentosc"]=0;
                    }
                    
                ?>
            <input type="number" id="number1_objetosci" placeholder="Wprowadź liczbę">
            <select id="jednostka1_objetosci" class="jednostki">
                <option value="m³"<?= zaznaczona("objetosci", 1, "m³", "m³") ?>>Metr sześcienny/kubik</option>   
                <option value="km³"<?= zaznaczona("objetosci", 1, "km³", "m³") ?>>Kilometr sześcienny</option>
                <option value="dm³"<?= zaznaczona("objetosci", 1, "dm³", "m³") ?>>Decymetr sześcienny/litr</option>
                <option value="cm³"<?= zaznaczona("objetosci", 1, "cm³", "m³") ?>>Centymetr sześcienny/mili litr</option>
                <option value="mm³"<?= zaznaczona("objetosci", 1, "mm³", "m³") ?>>Milimetr sześcienny</option>
                <option value="mi³"<?= zaznaczona("objetosci", 1, "mi³", "m³") ?>>Mila sześcienna</option>
                <option value="gal_usa"<?= zaznaczona("objetosci", 1, "gal_usa", "m³") ?>>galon amerykański</option>
                <option value="gal_uk"<?= zaznaczona("objetosci", 1, "gal_uk", "m³") ?>>galon brytyjski</option>
                <option value="bar"<?= zaznaczona("objetosci", 1, "bar", "m³") ?>>barylka</option>
            </select><br>

            <input type="number" id="number2_objetosci" placeholder="Wprowadź liczbę">
            <select id="jednostka2_objetosci" class="jednostki">
                <option value="m³"<?= zaznaczona("objetosci", 2, "m³", "m³") ?>>Metr sześcienny/kubik</option>
                <option value="km³"<?= zaznaczona("objetosci", 2, "km³", "m³") ?>>Kilometr sześcienny</option>
                <option value="dm³"<?= zaznaczona("objetosci", 2, "dm³", "m³") ?>>Decymetr sześcienny/litr</option>
                <option value="cm³"<?= zaznaczona("objetosci", 2, "cm³", "m³") ?>>Centymetr sześcienny/mili litr</option>
                <option value="mm³"<?= zaznaczona("objetosci", 2, "mm³", "m³") ?>>Milimetr sześcienny</option>
                <option value="mi³"<?= zaznaczona("objetosci", 2, "mi³", "m³") ?>>Mila sześcienna</option>
                <option value="gal_usa"<?= zaznaczona("objetosci", 2, "gal_usa", "m³") ?>>galon amerykański</option>
                <option value="gal_uk"<?= zaznaczona("objetosci", 2, "gal_uk", "m³") ?>>galon brytyjski</option>
                <option value="bar"<?= zaznaczona("objetosci", 2, "bar", "m³") ?>>barylka</option>
            </select><br>
            
            <?php
                for($i=0;$i<($_SESSION["objentosc"] ?? 0);$i++)
                        {
            ?>
            <input type="number" id="number<?= $i + 3 ?>_objetosci" placeholder="Wprowadź liczbę">
            <select id="jednostka<?= $i + 3 ?>_objetosci" class="jednostki">
                <option value="m³"<?= zaznaczona("objetosci", $i + 3, "m³", "m³") ?>>Metr sześcienny/kubik</option>
                <option value="km³"<?= zaznaczona("objetosci", $i + 3, "km³", "m³") ?>>Kilometr sześcienny</option>
                <option value="dm³"<?= zaznaczona("objetosci", $i + 3, "dm³", "m³") ?>>Decymetr sześcienny/litr</option>
                <option value="cm³"<?= zaznaczona("objetosci", $i + 3, "cm³", "m³") ?>>Centymetr sześcienny/mili litr</option>
                <option value="mm³"<?= zaznaczona("objetosci", $i + 3, "mm³", "m³") ?>>Milimetr sześcienny</option>
                <option value="mi³"<?= zaznaczona("objetosci", $i + 3, "mi³", "m³") ?>>Mila sześcienna</option>
                <option value="gal_usa"<?= zaznaczona("objetosci", $i + 3, "gal_usa", "m³") ?>>galon amerykański</option>
                <option value="gal_uk"<?= zaznaczona("objetosci", $i + 3, "gal_uk", "m³") ?>>galon brytyjski</option>
                <option value="bar"<?= zaznaczona("objetosci", $i + 3, "bar", "m³") ?>>barylka</option>
            </select><br>
            <?php
                    }
            ?>

            </div>
            <button id="button3_dodaj" type="button">dodaj jednostkę</button>
            </form>
        </div>

        <div class="przelicznik" id="przelicznik_prędkości">
            <h3>przelicznik prędkości</h3>
            <form action="index.php" method="post" name="przelicznik_prędkości">
                <div id="jednostki_prędkości">
                <?php
                    if(!isset($_SESSION["predkosc"]))
                    {
                        $_SESSION["predkosc"]=0;
                    }
                ?>
            <input type="number" id="number1_prędkości" placeholder="Wprowadź liczbę">
            <select id="jednostka1_prędkości" class="jednostki">
                <option value="km/h"<?= zaznaczona("prędkości", 1, "km/h", "km/h") ?>>Kilometr na godzinę</option>
                <option value="m/s"<?= zaznaczona("prędkości", 1, "m/s", "km/h") ?>>Metr na sekundę</option>
                <option value="cm/s"<?= zaznaczona("prędkości", 1, "cm/s", "km/h") ?>>Centymetr na sekundę</option>
                <option value="m/h"<?= zaznaczona("prędkości", 1, "m/h", "km/h") ?>>Metr na godzinę</option>
                <option value="mi/h"<?= zaznaczona("prędkości", 1, "mi/h", "km/h") ?>>Mila na godzinę</option>
                <option value="ft/s"<?= zaznaczona("prędkości", 1, "ft/s", "km/h") ?>>Stopa na sekundę</option>
                <option value="mn/h"<?= zaznaczona("prędkości", 1, "mn/h", "km/h") ?>>węzel</option>
                <option value="ma"<?= zaznaczona("prędkości", 1, "ma", "km/h") ?>>mach</option>
                <option value="c"<?= zaznaczona("prędkości", 1, "c", "km/h") ?>>światlo</option>
            </select><br>

            <input type="number" id="number2_prędkości" placeholder="Wprowadź liczbę">
            <select id="jednostka2_prędkości" class="jednostki">
                <option value="km/h"<?= zaznaczona("prędkości", 2, "km/h", "km/h") ?>>Kilometr na godzinę</option>
                <option value="m/s"<?= zaznaczona("prędkości", 2, "m/s", "km/h") ?>>Metr na sekundę</option>
                <option value="cm/s"<?= zaznaczona("prędkości", 2, "cm/s", "km/h") ?>>Centymetr na sekundę</option>
                <option value="m/h"<?= zaznaczona("prędkości", 2, "m/h", "km/h") ?>>Metr na godzinę</option>
                <option value="mi/h"<?= zaznaczona("prędkości", 2, "mi/h", "km/h") ?>>Mila na godzinę</option>
                <option value="ft/s"<?= zaznaczona("prędkości", 2, "ft/s", "km/h") ?>>Stopa na sekundę</option>
                <option value="mn/h"<?= zaznaczona("prędkości", 2, "mn/h", "km/h") ?>>węzel</option>
                <option value="ma"<?= zaznaczona("prędkości", 2, "ma", "km/h") ?>>mach</option>
                <option value="c"<?= zaznaczona("prędkości", 2, "c", "km/h") ?>>światlo</option>
            </select><br>

            <?php
                for($i=0;$i<($_SESSION["predkosc"] ?? 0);$i++)
                        {
            ?>
            <input type="number" id="number<?= $i + 3 ?>_prędkości" placeholder="Wprowadź liczbę">
            <select id="jednostka<?= $i + 3 ?>_prędkości" class="jednostki">
                <option value="km/h"<?= zaznaczona("prędkości", $i + 3, "km/h", "km/h") ?>>Kilometr na godzinę</option>
                <option value="m/s"<?= zaznaczona("prędkości", $i + 3, "m/s", "km/h") ?>>Metr na sekundę</option>
                <option value="cm/s"<?= zaznaczona("prędkości", $i + 3, "cm/s", "km/h") ?>>Centymetr na sekundę</option>
                <option value="m/h"<?= zaznaczona("prędkości", $i + 3, "m/h", "km/h") ?>>Metr na godzinę</option>
                <option value="mi/h"<?= zaznaczona("prędkości", $i + 3, "mi/h", "km/h") ?>>Mila na godzinę</option>
                <option value="ft/s"<?= zaznaczona("prędkości", $i + 3, "ft/s", "km/h") ?>>Stopa na sekundę</option>
                <option value="mn/h"<?= zaznaczona("prędkości", $i + 3, "mn/h", "km/h") ?>>węzel</option>
                <option value="ma"<?= zaznaczona("prędkości", $i + 3, "ma", "km/h") ?>>mach</option>
                <option value="c"<?= zaznaczona("prędkości", $i + 3, "c", "km/h") ?>>światlo</option>
            </select><br>
            <?php
                    }
            ?>

            </div>
            <button id="button4_dodaj" type="button">dodaj jednostkę</button>
            </form>
        </div>

        <div class="przelicznik" id="przelicznik_czasu">
            <h3>przelicznik czasu</h3>
            <form action="index.php" method="post" name="przelicznik_czasu">
            <div id="jednostki_czasu">
                <?php
                    if(!isset($_SESSION["czas"]))
                    {
                        $_SESSION["czas"]=0;
                    }
                ?>
            <input type="number" id="number1_czasu" placeholder="Wprowadź liczbę">
            <select id="jednostka1_czasu" class="jednostki">
                <option value="s"<?= zaznaczona("czasu", 1, "s", "s") ?>>Sekundy</option>
                <option value="min"<?= zaznaczona("czasu", 1, "min", "s") ?>>Minuty</option>
                <option value="h"<?= zaznaczona("czasu", 1, "h", "s") ?>>Godziny</option>
                <option value="d"<?= zaznaczona("czasu", 1, "d", "s") ?>>Dni</option>
                <option value="wk"<?= zaznaczona("czasu", 1, "wk", "s") ?>>Tygodnie</option>
                <option value="kw"<?= zaznaczona("czasu", 1, "kw", "s") ?>>kwartal</option>
                <option value="y"<?= zaznaczona("czasu", 1, "y", "s") ?>>Lata</option>
            </select><br>

            <input type="number" id="number2_czasu" placeholder="Wprowadź liczbę">
            <select id="jednostka2_czasu" class="jednostki">
                <option value="s"<?= zaznaczona("czasu", 2, "s", "s") ?>>Sekundy</option>
                <option value="min"<?= zaznaczona("czasu", 2, "min", "s") ?>>Minuty</option>
                <option value="h"<?= zaznaczona("czasu", 2, "h", "s") ?>>Godziny</option>
                <option value="d"<?= zaznaczona("czasu", 2, "d", "s") ?>>Dni</option>
                <option value="wk"<?= zaznaczona("czasu", 2, "wk", "s") ?>>Tygodnie</option>
                <option value="kw"<?= zaznaczona("czasu", 2, "kw", "s") ?>>kwartal</option>
                <option value="y"<?= zaznaczona("czasu", 2, "y", "s") ?>>Lata</option>
            </select><br>

            <?php
                for($i=0;$i<($_SESSION["czas"] ?? 0);$i++)
                        {
            ?>
            <input type="number" id="number<?= $i + 3 ?>_czasu" placeholder="Wprowadź liczbę">
            <select id="jednostka<?= $i + 3 ?>_czasu" class="jednostki">
                <option value="s"<?= zaznaczona("czasu", $i + 3, "s", "s") ?>>Sekundy</option>
                <option value="min"<?= zaznaczona("czasu", $i + 3, "min", "s") ?>>Minuty</option>
                <option value="h"<?= zaznaczona("czasu", $i + 3, "h", "s") ?>>Godziny</option>
                <option value="d"<?= zaznaczona("czasu", $i + 3, "d", "s") ?>>Dni</option>
                <option value="wk"<?= zaznaczona("czasu", $i + 3, "wk", "s") ?>>Tygodnie</option>
                <option value="kw"<?= zaznaczona("czasu", $i + 3, "kw", "s") ?>>kwartal</option>
                <option value="y"<?= zaznaczona("czasu", $i + 3, "y", "s") ?>>Lata</option>
            </select><br>
            <?php
                    }
            ?>
            </div>
            <button id="button5_dodaj" type="button">dodaj jednostkę</button>
            </form>
        </div>

        <div  class="przelicznik" id="przelicznik_wagi">
            <h3>przelicznik waga</h3>
            <form action="index.php" method="post" name="przelicznik_waga">
                <div id="jednostki_wagi">
                <?php
                    if(!isset($_SESSION["waga"]))
                    {
                        $_SESSION["waga"]=0;
                    }
                ?>
            <input type="number" id="number1_wagi" placeholder="Wprowadź liczbę">
            <select id="jednostka1_wagi" class="jednostki">

                <option value="g"<?= zaznaczona("wagi", 1, "g", "g") ?>>Gramy</option>
                <option value="mg"<?= zaznaczona("wagi", 1, "mg", "g") ?>>Miligramy</option>
                <option value="dg"<?= zaznaczona("wagi", 1, "dg", "g") ?>>Dekagramy</option>
                <option value="kg"<?= zaznaczona("wagi", 1, "kg", "g") ?>>Kilogramy</option>
                <option value="t"<?= zaznaczona("wagi", 1, "t", "g") ?>>Tony</option>
                <option value="oz"<?= zaznaczona("wagi", 1, "oz", "g") ?>>uncja</option>
                <option value="lb"<?= zaznaczona("wagi", 1, "lb", "g") ?>>funt</option>
                <option value="st"<?= zaznaczona("wagi", 1, "st", "g") ?>>stone</option>
                <option value="karat"<?= zaznaczona("wagi", 1, "karat", "g") ?>>karat</option>
                <option value="tona_us"<?= zaznaczona("wagi", 1, "tona_us", "g") ?>>tona amerykańska</option>
                <option value="tona_uk"<?= zaznaczona("wagi", 1, "tona_uk", "g") ?>>tona brytyjska</option>
            </select><br>

            <input type="number" id="number2_wagi" placeholder="Wprowadź liczbę">
            <select id="jednostka2_wagi" class="jednostki">
                <option value="g"<?= zaznaczona("wagi", 2, "g", "g") ?>>Gramy</option>
                <option value="mg"<?= zaznaczona("wagi", 2, "mg", "g") ?>>Miligramy</option>
                <option value="dg"<?= zaznaczona("wagi", 2, "dg", "g") ?>>Dekagramy</option>
                <option value="kg"<?= zaznaczona("wagi", 2, "kg", "g") ?>>Kilogramy</option>
                <option value="t"<?= zaznaczona("wagi", 2, "t", "g") ?>>Tony</option>
                <option value="oz"<?= zaznaczona("wagi", 2, "oz", "g") ?>>uncja</option>
                <option value="lb"<?= zaznaczona("wagi", 2, "lb", "g") ?>>funt</option>
                <option value="st"<?= zaznaczona("wagi", 2, "st", "g") ?>>stone</option>
                <option value="karat"<?= zaznaczona("wagi", 2, "karat", "g") ?>>karat</option>
                <option value="tona_us"<?= zaznaczona("wagi", 2, "tona_us", "g") ?>>tona amerykańska</option>
                <option value="tona_uk"<?= zaznaczona("wagi", 2, "tona_uk", "g") ?>>tona brytyjska</option>
            </select><br>
            <?php
                for($i=0;$i<($_SESSION["waga"] ?? 0);$i++)
                        {
            ?>
            <input type="number" id="number<?= $i + 3 ?>_wagi" placeholder="Wprowadź liczbę">
            <select id="jednostka<?= $i + 3 ?>_wagi" class="jednostki">
                <option value="g"<?= zaznaczona("wagi", $i + 3, "g", "g") ?>>Gramy</option>
                <option value="mg"<?= zaznaczona("wagi", $i + 3, "mg", "g") ?>>Miligramy</option>
                <option value="dg"<?= zaznaczona("wagi", $i + 3, "dg", "g") ?>>Dekagramy</option>
                <option value="kg"<?= zaznaczona("wagi", $i + 3, "kg", "g") ?>>Kilogramy</option>
                <option value="t"<?= zaznaczona("wagi", $i + 3, "t", "g") ?>>Tony</option>
                <option value="oz"<?= zaznaczona("wagi", $i + 3, "oz", "g") ?>>uncja</option>
                <option value="lb"<?= zaznaczona("wagi", $i + 3, "lb", "g") ?>>funt</option>
                <option value="st"<?= zaznaczona("wagi", $i + 3, "st", "g") ?>>stone</option>
                <option value="karat"<?= zaznaczona("wagi", $i + 3, "karat", "g") ?>>karat</option>
                <option value="tona_us"<?= zaznaczona("wagi", $i + 3, "tona_us", "g") ?>>tona amerykańska</option>
                <option value="tona_uk"<?= zaznaczona("wagi", $i + 3, "tona_uk", "g") ?>>tona brytyjska</option>
            </select><br>
            <?php
                    }
            ?>
            </div>
            <button id="button6_dodaj" type="button">dodaj jednostkę</button>
            </form>
        </div>

        <div  class="przelicznik" id="przelicznik_temperatury">
            <h3>przelicznik temperatura</h3>
            <form action="index.php" method="post" name="przelicznik_temperatury">
            <div id="jednostki_temperatury">
                <?php
                    if(!isset($_SESSION["temperatury"]))
                    {
                        $_SESSION["temperatury"]=0;
                    }
                ?>
            <input type="number" id="number1_temperatury" placeholder="Wprowadź liczbę">
            <select id="jednostka1_temperatury" class="jednostki">
                <option value="C"<?= zaznaczona("temperatury", 1, "C", "C") ?>>Celsjusze</option>
                <option value="F"<?= zaznaczona("temperatury", 1, "F", "C") ?>>Fahrenheity</option>
                <option value="K"<?= zaznaczona("temperatury", 1, "K", "C") ?>>Kelwiny</option>
            </select><br>

            <input type="number" id="number2_temperatury" placeholder="Wprowadź liczbę">
            <select id="jednostka2_temperatury" class="jednostki">
                <option value="C"<?= zaznaczona("temperatury", 2, "C", "C") ?>>Celsjusze</option>
                <option value="F"<?= zaznaczona("temperatury", 2, "F", "C") ?>>Fahrenheity</option>
                <option value="K"<?= zaznaczona("temperatury", 2, "K", "C") ?>>Kelwiny</option>
            </select><br>

            <?php
                for($i=0;$i<($_SESSION["temperatury"] ?? 0);$i++)
                        {
            ?>
            <input type="number" id="number<?= $i + 3 ?>_temperatury" placeholder="Wprowadź liczbę">
            <select id="jednostka<?= $i + 3 ?>_temperatury" class="jednostki">
                <option value="C"<?= zaznaczona("temperatury", $i + 3, "C", "C") ?>>Celsjusze</option>
                <option value="F"<?= zaznaczona("temperatury", $i + 3, "F", "C") ?>>Fahrenheity</option>
                <option value="K"<?= zaznaczona("temperatury", $i + 3, "K", "C") ?>>Kelwiny</option>
            </select><br>
            <?php
                    }
            ?>
            </div>

            <button id="button7_dodaj" type="button">dodaj jednostkę</button>
            </form>
        </div>

        <div  class="przelicznik" id="przelicznik_cisnienia">
            <h3>przelicznik ciśnienie</h3>
            <form action="index.php" method="post" name="przelicznik_cisnienia">
                <div id="jednostki_cisnienia">
                <?php
                    if(!isset($_SESSION["cisnienia"]))
                    {
                        $_SESSION["cisnienia"]=0;
                    }
                ?>
            <input type="number" id="number1_cisnienia" placeholder="Wprowadź liczbę">
            <select id="jednostka1_cisnienia" class="jednostki">
                <option value="Pa"<?= zaznaczona("cisnienia", 1, "Pa", "Pa") ?>>Paskale</option>
                <option value="kPa"<?= zaznaczona("cisnienia", 1, "kPa", "Pa") ?>>Kilopaskale</option>
                <option value="HPa"<?= zaznaczona("cisnienia", 1, "HPa", "Pa") ?>>Hektopaskale</option>
                <option value="MePa"<?= zaznaczona("cisnienia", 1, "MePa", "Pa") ?>>Megapaskale</option>
                <option value="bar"<?= zaznaczona("cisnienia", 1, "bar", "Pa") ?>>bar</option>                
                <option value="psi "<?= zaznaczona("cisnienia", 1, "psi ", "Pa") ?>>funt na cal kwadratowy</option>
                <option value="mmHg"<?= zaznaczona("cisnienia", 1, "mmHg", "Pa") ?>>milimetr slupa rtęci</option>
            </select><br>

            <input type="number" id="number2_cisnienia" placeholder="Wprowadź liczbę">
            <select id="jednostka2_cisnienia" class="jednostki">
                <option value="Pa"<?= zaznaczona("cisnienia", 2, "Pa", "Pa") ?>>Paskale</option>
                <option value="kPa"<?= zaznaczona("cisnienia", 2, "kPa", "Pa") ?>>Kilopaskale</option>
                <option value="HPa"<?= zaznaczona("cisnienia", 2, "HPa", "Pa") ?>>Hektopaskale</option>
                <option value="MePa"<?= zaznaczona("cisnienia", 2, "MePa", "Pa") ?>>Megapaskale</option>
                <option value="bar"<?= zaznaczona("cisnienia", 2, "bar", "Pa") ?>>bar</option>                
                <option value="psi "<?= zaznaczona("cisnienia", 2, "psi ", "Pa") ?>>funt na cal kwadratowy</option>
                <option value="mmHg"<?= zaznaczona("cisnienia", 2, "mmHg", "Pa") ?>>milimetr slupa rtęci</option>
            </select><br>
            <?php
                for($i=0;$i<($_SESSION["cisnienia"] ?? 0);$i++)
                    {
            ?>
            <input type="number" id="number<?= $i + 3 ?>_cisnienia" placeholder="Wprowadź liczbę">
            <select id="jednostka<?= $i + 3 ?>_cisnienia" class="jednostki">
                <option value="Pa"<?= zaznaczona("cisnienia", $i + 3, "Pa", "Pa") ?>>Paskale</option>
                <option value="kPa"<?= zaznaczona("cisnienia", $i + 3, "kPa", "Pa") ?>>Kilopaskale</option>
                <option value="HPa"<?= zaznaczona("cisnienia", $i + 3, "HPa", "Pa") ?>>Hektopaskale</option>
                <option value="MePa"<?= zaznaczona("cisnienia", $i + 3, "MePa", "Pa") ?>>Megapaskale</option>
                <option value="bar"<?= zaznaczona("cisnienia", $i + 3, "bar", "Pa") ?>>bar</option>                
                <option value="psi "<?= zaznaczona("cisnienia", $i + 3, "psi ", "Pa") ?>>funt na cal kwadratowy</option>
                <option value="mmHg"<?= zaznaczona("cisnienia", $i + 3, "mmHg", "Pa") ?>>milimetr slupa rtęci</option>
            </select><br>
            <?php
                    }
            ?>
            </div>
            <button id="button8_dodaj" type="button">dodaj jednostkę</button>
            
            </form>
        </div>

        <div class="przelicznik" id="przelicznik_energii">
            <h3>przelicznik energia</h3>
            <form action="index.php" method="post" name="przelicznik_energii">
                <div id="jednostki_energii">
                <?php
                    if(!isset($_SESSION["energii"]))
                    {
                        $_SESSION["energii"]=0;
                    }
                ?>
            <input type="number" id="number1_energii" placeholder="Wprowadź liczbę">
            <select id="jednostka1_energii" class="jednostki">
                <option value="J"<?= zaznaczona("energii", 1, "J", "J") ?>>Joule</option>
                <option value="kJ"<?= zaznaczona("energii", 1, "kJ", "J") ?>>Kilojoule</option>
                <option value="MeJ"<?= zaznaczona("energii", 1, "MeJ", "J") ?>>Megajoule</option>
                <option value="GJ"<?= zaznaczona("energii", 1, "GJ", "J") ?>>Gigajoule</option>
                <option value="cal"<?= zaznaczona("energii", 1, "cal", "J") ?>>Kalorie</option>
                <option value="kcal"<?= zaznaczona("energii", 1, "kcal", "J") ?>>Kilokalorie</option>
                <option value="wh"<?= zaznaczona("energii", 1, "wh", "J") ?>>Watogodzina</option>
                <option value="kwh"<?= zaznaczona("energii", 1, "kwh", "J") ?>>Kilowatogodzina</option>
                <option value="eV"<?= zaznaczona("energii", 1, "eV", "J") ?>>Elektronowolt</option>
                <option value="cal"<?= zaznaczona("energii", 1, "cal", "J") ?>>Kalorie</option>
                <option value="kcal"<?= zaznaczona("energii", 1, "kcal", "J") ?>>Kilokalorie</option>
                <option value="Erg"<?= zaznaczona("energii", 1, "Erg", "J") ?>>centymetr-gram-sekunda</option>
                <option value="BTU"<?= zaznaczona("energii", 1, "BTU", "J") ?>>Ilość ciepla potrzebna do ogrzania 1 funta wody o 1°F</option>
                <option value="thm"<?= zaznaczona("energii", 1, "thm", "J") ?>>ilość ciepla uzyskiwaną ze spalenia określonej objętości gazu</option>
            </select><br>

            <input type="number" id="number2_energii" placeholder="Wprowadź liczbę">
            <select id="jednostka2_energii" class="jednostki">
                <option value="J"<?= zaznaczona("energii", 2, "J", "J") ?>>Joule</option>
                <option value="kJ"<?= zaznaczona("energii", 2, "kJ", "J") ?>>Kilojoule</option>
                <option value="MeJ"<?= zaznaczona("energii", 2, "MeJ", "J") ?>>Megajoule</option>
                <option value="GJ"<?= zaznaczona("energii", 2, "GJ", "J") ?>>Gigajoule</option>
                <option value="wh"<?= zaznaczona("energii", 2, "wh", "J") ?>>Watogodzina</option>
                <option value="kwh"<?= zaznaczona("energii", 2, "kwh", "J") ?>>Kilowatogodzina</option>
                <option value="eV"<?= zaznaczona("energii", 2, "eV", "J") ?>>Elektronowolt</option>
                <option value="cal"<?= zaznaczona("energii", 2, "cal", "J") ?>>Kalorie</option>
                <option value="kcal"<?= zaznaczona("energii", 2, "kcal", "J") ?>>Kilokalorie</option>
                <option value="Erg"<?= zaznaczona("energii", 2, "Erg", "J") ?>>centymetr-gram-sekunda</option>
                <option value="BTU"<?= zaznaczona("energii", 2, "BTU", "J") ?>>Ilość ciepla potrzebna do ogrzania 1 funta wody o 1°F</option>
                <option value="thm"<?= zaznaczona("energii", 2, "thm", "J") ?>> ilość ciepla uzyskiwaną ze spalenia określonej objętości gazu</option>
            </select><br>
            <?php
                for($i=0;$i<($_SESSION["energii"] ?? 0);$i++)
                    {
            ?>
            <input type="number" id="number<?= $i + 3 ?>_energii" placeholder="Wprowadź liczbę">
            <select id="jednostka<?= $i + 3 ?>_energii" class="jednostki">
                <option value="J"<?= zaznaczona("energii", $i + 3, "J", "J") ?>>Joule</option>
                <option value="kJ"<?= zaznaczona("energii", $i + 3, "kJ", "J") ?>>Kilojoule</option>
                <option value="MeJ"<?= zaznaczona("energii", $i + 3, "MeJ", "J") ?>>Megajoule</option>
                <option value="GJ"<?= zaznaczona("energii", $i + 3, "GJ", "J") ?>>Gigajoule</option>
                <option value="wh"<?= zaznaczona("energii", $i + 3, "wh", "J") ?>>Watogodzina</option>
                <option value="kwh"<?= zaznaczona("energii", $i + 3, "kwh", "J") ?>>Kilowatogodzina</option>
                <option value="eV"<?= zaznaczona("energii", $i + 3, "eV", "J") ?>>Elektronowolt</option>
                <option value="cal"<?= zaznaczona("energii", $i + 3, "cal", "J") ?>>Kalorie</option>
                <option value="kcal"<?= zaznaczona("energii", $i + 3, "kcal", "J") ?>>Kilokalorie</option>
                <option value="Erg"<?= zaznaczona("energii", $i + 3, "Erg", "J") ?>>centymetr-gram-sekunda</option>
                <option value="BTU"<?= zaznaczona("energii", $i + 3, "BTU", "J") ?>>Ilość ciepla potrzebna do ogrzania 1 funta wody o 1°F</option>
                <option value="thm"<?= zaznaczona("energii", $i + 3, "thm", "J") ?>> ilość ciepla uzyskiwaną ze spalenia określonej objętości gazu</option>
            </select><br>
            <?php
                    }
            ?>
            </div>
            <button id="button9_dodaj" type="button">dodaj jednostkę</button>
            </form>
        </div>
        

        <div class="przelicznik" id="przelicznik_mocy">
            <h3>przelicznik mocy</h3>
            <form action="index.php" method="post" name="przelicznik_mocy">
                <div id="jednostki_mocy">
                <?php
                    if(!isset($_SESSION["mocy"]))
                    {
                        $_SESSION["mocy"]=0;
                    }
                ?>
            <input type="number" id="number1_mocy" placeholder="Wprowadź liczbę">
            <select id="jednostka1_mocy" class="jednostki">
                <option value="W"<?= zaznaczona("mocy", 1, "W", "W") ?>>Wat</option>
                <option value="kW"<?= zaznaczona("mocy", 1, "kW", "W") ?>>Kilowat</option>
                <option value="MW"<?= zaznaczona("mocy", 1, "MW", "W") ?>>Megawat</option>
                <option value="GW"<?= zaznaczona("mocy", 1, "GW", "W") ?>>Gigawat</option>
                <option value="HP"<?= zaznaczona("mocy", 1, "HP", "W") ?>>Koń mechaniczny</option>
                <option value="erg/s"<?= zaznaczona("mocy", 1, "erg/s", "W") ?>>wykonanie pracy o wartości 1 erga w czasie 1 sekundy</option>
                <option value="ft·lb/min"<?= zaznaczona("mocy", 1, "ft·lb/min", "W") ?>>Stopofunt na minutę</option>
                <option value="L"<?= zaznaczona("mocy", 1, "L", "W") ?>>jasność slońca</option>
                <option value="dBW"<?= zaznaczona("mocy", 1, "dBW", "W") ?>>decybelowat</option>
            </select><br>

            <input type="number" id="number2_mocy" placeholder="Wprowadź liczbę">
            <select id="jednostka2_mocy" class="jednostki">
                <option value="W"<?= zaznaczona("mocy", 2, "W", "W") ?>>Wat</option>
                <option value="kW"<?= zaznaczona("mocy", 2, "kW", "W") ?>>Kilowat</option>
                <option value="MW"<?= zaznaczona("mocy", 2, "MW", "W") ?>>Megawat</option>
                <option value="GW"<?= zaznaczona("mocy", 2, "GW", "W") ?>>Gigawat</option>
                <option value="HP"<?= zaznaczona("mocy", 2, "HP", "W") ?>>Koń mechaniczny</option>
                <option value="erg/s"<?= zaznaczona("mocy", 2, "erg/s", "W") ?>>wykonanie pracy o wartości 1 erga w czasie 1 sekundy</option>
                <option value="ft·lb/min"<?= zaznaczona("mocy", 2, "ft·lb/min", "W") ?>>Stopofunt na minutę</option>
                <option value="L"<?= zaznaczona("mocy", 2, "L", "W") ?>>jasność slońca</option>
                <option value="dBW"<?= zaznaczona("mocy", 2, "dBW", "W") ?>>decybelowat</option>
            </select><br>
            <?php
                for($i=0;$i<($_SESSION["mocy"] ?? 0);$i++)
                    {
            ?>
            <input type="number" id="number<?= $i + 3 ?>_mocy" placeholder="Wprowadź liczbę">
            <select id="jednostka<?= $i + 3 ?>_mocy" class="jednostki">
                <option value="W"<?= zaznaczona("mocy", $i + 3, "W", "W") ?>>Wat</option>
                <option value="kW"<?= zaznaczona("mocy", $i + 3, "kW", "W") ?>>Kilowat</option>
                <option value="MW"<?= zaznaczona("mocy", $i + 3, "MW", "W") ?>>Megawat</option>
                <option value="GW"<?= zaznaczona("mocy", $i + 3, "GW", "W") ?>>Gigawat</option>
                <option value="HP"<?= zaznaczona("mocy", $i + 3, "HP", "W") ?>>Koń mechaniczny</option>
                <option value="erg/s"<?= zaznaczona("mocy", $i + 3, "erg/s", "W") ?>>wykonanie pracy o wartości 1 erga w czasie 1 sekundy</option>
                <option value="ft·lb/min"<?= zaznaczona("mocy", $i + 3, "ft·lb/min", "W") ?>>Stopofunt na minutę</option>
                <option value="L"<?= zaznaczona("mocy", $i + 3, "L", "W") ?>>jasność slońca</option>
                <option value="dBW"<?= zaznaczona("mocy", $i + 3, "dBW", "W") ?>>decybelowat</option>
            </select><br>
            <?php
                    }
            ?>
            </div>
            <button id="button10_dodaj" type="button">dodaj jednostkę</button>
            </form>

        </div>

        <div class="przelicznik" id="przelicznik_sily">
            <h3>przelicznik sila</h3>
            <form action="index.php" method="post" name="przelicznik_sily">
            <div id="jednostki_sily">
                    <?php
                    if(!isset($_SESSION["sila"]))
                    {
                        $_SESSION["sila"]=0;
                    }
                ?>
                
            <input type="number" id="number1_sily" placeholder="Wprowadź liczbę">
            <select id="jednostka1_sily" class="jednostki">
                <option value="N"<?= zaznaczona("sily", 1, "N", "N") ?>>Newton</option>
                <option value="lbf"<?= zaznaczona("sily", 1, "lbf", "N") ?>>Funt sily</option>
                <option value="dyn"<?= zaznaczona("sily", 1, "dyn", "N") ?>>Dyna <!-- sila, która nadaje masie 1 grama przyspieszenie 1 centymetra na sekundę do kwadratu --></option> 
                <option value="kgf"<?= zaznaczona("sily", 1, "kgf", "N") ?>>Kilogram sily</option>
            </select><br>

            <input type="number" id="number2_sily" placeholder="Wprowadź liczbę">
            <select id="jednostka2_sily" class="jednostki">
                <option value="N"<?= zaznaczona("sily", 2, "N", "N") ?>>Newton</option>
                <option value="lbf"<?= zaznaczona("sily", 2, "lbf", "N") ?>>Funt sily</option>
                <option value="dyn"<?= zaznaczona("sily", 2, "dyn", "N") ?>>Dyna <!-- sila, która nadaje masie 1 grama przyspieszenie 1 centymetra na sekundę do kwadratu --></option> 
                <option value="kgf"<?= zaznaczona("sily", 2, "kgf", "N") ?>>Kilogram sily</option>
            </select><br>
            <?php
                for($i=0;$i<($_SESSION["sila"] ?? 0);$i++)
                    {
            ?>
            <input type="number" id="number<?= $i + 3 ?>_sily" placeholder="Wprowadź liczbę">
            <select id="jednostka<?= $i + 3 ?>_sily" class="jednostki">
                <option value="N"<?= zaznaczona("sily", $i + 3, "N", "N") ?>>Newton</option>
                <option value="lbf"<?= zaznaczona("sily", $i + 3, "lbf", "N") ?>>Funt sily</option>
                <option value="dyn"<?= zaznaczona("sily", $i + 3, "dyn", "N") ?>>Dyna <!-- sila, która nadaje masie 1 grama przyspieszenie 1 centymetra na sekundę do kwadratu --></option> 
                <option value="kgf"<?= zaznaczona("sily", $i + 3, "kgf", "N") ?>>Kilogram sily</option>
            </select><br>
            <?php
                    }
            ?>
            </div>
            <button id="button11_dodaj" type="button">dodaj jednostkę</button>    
            </form>
        </div>
            
        <div class="przelicznik" id="przelicznik_przyśpieszenia">
            <h3>przelicznik przyśpieszenie</h3>
            <form action="index.php" method="post" name="przelicznik_przyśpieszenia">
                <div id="jednostki_przyśpieszenia">
                    <?php
                    if(!isset($_SESSION["przyspieszenie"]))
                    {
                        $_SESSION["przyspieszenie"]=0;
                    }
                ?>
            <input type="number" id="number1_przyśpieszenia" placeholder="Wprowadź liczbę">
            <select id="jednostka1_przyśpieszenia" class="jednostki">
                <option value="m/s²"<?= zaznaczona("przyśpieszenia", 1, "m/s²", "m/s²") ?>>Metr na sekundę do kwadratu</option>
                <option value="km/h/s"<?= zaznaczona("przyśpieszenia", 1, "km/h/s", "m/s²") ?>>Kilometr na godzinę na sekundę</option>
                <option value="g"<?= zaznaczona("przyśpieszenia", 1, "g", "m/s²") ?>>przyspieszenie ziemskie</option>
            </select><br>

            <input type="number" id="number2_przyśpieszenia" placeholder="Wprowadź liczbę">
            <select id="jednostka2_przyśpieszenia" class="jednostki">
                <option value="m/s²"<?= zaznaczona("przyśpieszenia", 2, "m/s²", "m/s²") ?>>Metr na sekundę do kwadratu</option>
                <option value="km/h/s"<?= zaznaczona("przyśpieszenia", 2, "km/h/s", "m/s²") ?>>Kilometr na godzinę na sekundę</option>
                <option value="g"<?= zaznaczona("przyśpieszenia", 2, "g", "m/s²") ?>>przyspieszenie ziemskie</option>
            </select><br>
            <?php
                for($i=0;$i<($_SESSION["przyspieszenie"] ?? 0);$i++)
                    {
            ?>
                <input type="number" id="number<?= $i + 3 ?>_przyśpieszenia" placeholder="Wprowadź liczbę">
                <select id="jednostka<?= $i + 3 ?>_przyśpieszenia" class="jednostki">
                    
                    <option value="m/s²"<?= zaznaczona("przyśpieszenia", $i + 3, "m/s²", "m/s²") ?>>Metr na sekundę do kwadratu</option>
                    <option value="km/h/s"<?= zaznaczona("przyśpieszenia", $i + 3, "km/h/s", "m/s²") ?>>Kilometr na godzinę na sekundę</option>
                    <option value="g"<?= zaznaczona("przyśpieszenia", $i + 3, "g", "m/s²") ?>>przyspieszenie ziemskie</option>
                </select><br>
            <?php
                    }
            ?>
            </div>
            <button id="button12_dodaj" type="button">dodaj jednostkę</button>
            </form>
        </div>

        <div class="przelicznik" id="przelicznik_danych">
            <h3>przelicznik Danych</h3>
            <form action="index.php" method="post" name="przelicznik_danych">
                <div id="jednostki_danych">
                    <?php
                    if(!isset($_SESSION["dane"]))
                    {
                        $_SESSION["dane"]=0;
                    }
                ?>
            <input type="number" id="number1_danych" placeholder="Wprowadź liczbę">
            <select id="jednostka1_danych" class="jednostki">
                <option value="b"<?= zaznaczona("danych", 1, "b", "b") ?>>bajt</option>
                <option value="kb"<?= zaznaczona("danych", 1, "kb", "b") ?>>kilobajt</option>
                <option value="meb"<?= zaznaczona("danych", 1, "meb", "b") ?>>megabajt</option>
                <option value="gb"<?= zaznaczona("danych", 1, "gb", "b") ?>>gigabajt</option>
                <option value="tb"<?= zaznaczona("danych", 1, "tb", "b") ?>>terabajt</option>
                <option value="pb"<?= zaznaczona("danych", 1, "pb", "b") ?>>petabajt</option>
                <option value="bit"<?= zaznaczona("danych", 1, "bit", "b") ?>>bit</option>
                <option value="KiB"<?= zaznaczona("danych", 1, "KiB", "b") ?>>Kibibajt </option>
            </select><br><br><br>

            <input type="number" id="number2_danych" placeholder="Wprowadź liczbę">
            <select id="jednostka2_danych" class="jednostki">
                <option value="b"<?= zaznaczona("danych", 2, "b", "b") ?>>bajt</option>
                <option value="kb"<?= zaznaczona("danych", 2, "kb", "b") ?>>kilobajt</option>
                <option value="meb"<?= zaznaczona("danych", 2, "meb", "b") ?>>megabajt</option>
                <option value="gb"<?= zaznaczona("danych", 2, "gb", "b") ?>>gigabajt</option>
                <option value="tb"<?= zaznaczona("danych", 2, "tb", "b") ?>>terabajt</option>
                <option value="pb"<?= zaznaczona("danych", 2, "pb", "b") ?>>petabajt</option>
                <option value="bit"<?= zaznaczona("danych", 2, "bit", "b") ?>>bit</option>
                <option value="KiB"<?= zaznaczona("danych", 2, "KiB", "b") ?>>Kibibajt </option>
            </select><br>
            <?php
                for($i=0;$i<($_SESSION["dane"] ?? 0);$i++)
                    {
            ?>
                <input type="number" id="number<?= $i + 3 ?>_danych" placeholder="Wprowadź liczbę">
                <select id="jednostka<?= $i + 3 ?>_danych" class="jednostki">
                    <option value="b"<?= zaznaczona("danych", $i + 3, "b", "b") ?>>bajt</option>
                <option value="kb"<?= zaznaczona("danych", $i + 3, "kb", "b") ?>>kilobajt</option>
                <option value="meb"<?= zaznaczona("danych", $i + 3, "meb", "b") ?>>megabajt</option>
                <option value="gb"<?= zaznaczona("danych", $i + 3, "gb", "b") ?>>gigabajt</option>
                <option value="tb"<?= zaznaczona("danych", $i + 3, "tb", "b") ?>>terabajt</option>
                <option value="pb"<?= zaznaczona("danych", $i + 3, "pb", "b") ?>>petabajt</option>
                <option value="bit"<?= zaznaczona("danych", $i + 3, "bit", "b") ?>>bit</option>
                <option value="KiB"<?= zaznaczona("danych", $i + 3, "KiB", "b") ?>>Kibibajt </option>
                </select><br>
            <?php
                    }
            ?>
            </div>
            <button id="button13_dodaj" type="button">dodaj jednostkę</button>
            </form>
        </div>

        <div class="przelicznik" id="przelicznik_gęstości">
            <h3>przelicznik gęstości</h3>
            <form action="index.php" method="post" name="przelicznik_gęstości">
                <div id="jednostki_gęstości">
                    <?php
                    if(!isset($_SESSION["gestosc"]))
                    {
                        $_SESSION["gestosc"]=0;
                    }
                ?>
            <input type="number" id="number1_gęstości" placeholder="Wprowadź liczbę">
            <select id="jednostka1_gęstości" class="jednostki">
                <option value="kg/m³"<?= zaznaczona("gęstości", 1, "kg/m³", "kg/m³") ?>>kilogram na metr sześcienny</option>
                <option value="g/cm³"<?= zaznaczona("gęstości", 1, "g/cm³", "kg/m³") ?>>gram na centymetr sześcienny</option>
            </select><br>

            <input type="number" id="number2_gęstości" placeholder="Wprowadź liczbę">
            <select id="jednostka2_gęstości" class="jednostki">
                <option value="kg/m³"<?= zaznaczona("gęstości", 2, "kg/m³", "kg/m³") ?>>kilogram na metr sześcienny</option>
                <option value="g/cm³"<?= zaznaczona("gęstości", 2, "g/cm³", "kg/m³") ?>>gram na centymetr sześcienny</option>
            </select><br>
            <?php
                for($i=0;$i<($_SESSION["gestosc"] ?? 0);$i++)
                    {
            ?>
                <input type="number" id="number<?= $i + 3 ?>_gęstości" placeholder="Wprowadź liczbę">
                <select id="jednostka<?= $i + 3 ?>_gęstości" class="jednostki">
                <option value="kg/m³"<?= zaznaczona("gęstości", $i + 3, "kg/m³", "kg/m³") ?>>kilogram na metr sześcienny</option>
                <option value="g/cm³"<?= zaznaczona("gęstości", $i + 3, "g/cm³", "kg/m³") ?>>gram na centymetr sześcienny</option>
                </select><br>
            <?php
                    }
            ?>
            </div>
            <button id="button14_dodaj" type="button">dodaj jednostkę</button>
            </form>
        </div>

         <div class="przelicznik" id="przelicznik_częstotliwości">
            <h3>przelicznik częstotliwości</h3>
            <form action="index.php" method="post" name="przelicznik_częstotliwości">
                <div id="jednostki_częstotliwości">
                    <?php
                    if(!isset($_SESSION["czestotliwosc"]))
                    {
                        $_SESSION["czestotliwosc"]=0;
                    }
                ?>
            <input type="number" id="number1_częstotliwości" placeholder="Wprowadź liczbę">
            <select id="jednostka1_częstotliwości" class="jednostki">
                <option value="Hz"<?= zaznaczona("częstotliwości", 1, "Hz", "Hz") ?>>herc</option>
                <option value="kHz"<?= zaznaczona("częstotliwości", 1, "kHz", "Hz") ?>>kiloherc</option>
                <option value="MHz"<?= zaznaczona("częstotliwości", 1, "MHz", "Hz") ?>>megaherc</option>
                <option value="GHz"<?= zaznaczona("częstotliwości", 1, "GHz", "Hz") ?>>gigaherc</option>
            </select><br>

            <input type="number" id="number2_częstotliwości" placeholder="Wprowadź liczbę">
            <select id="jednostka2_częstotliwości" class="jednostki">
                <option value="Hz"<?= zaznaczona("częstotliwości", 2, "Hz", "Hz") ?>>herc</option>
                <option value="kHz"<?= zaznaczona("częstotliwości", 2, "kHz", "Hz") ?>>kiloherc</option>
                <option value="MHz"<?= zaznaczona("częstotliwości", 2, "MHz", "Hz") ?>>megaherc</option>
                <option value="GHz"<?= zaznaczona("częstotliwości", 2, "GHz", "Hz") ?>>gigaherc</option>
            </select><br>
            <?php
                for($i=0;$i<($_SESSION["czestotliwosc"] ?? 0);$i++)
                    {
            ?>
                <input type="number" id="number<?= $i + 3 ?>_częstotliwości" placeholder="Wprowadź liczbę">
                <select id="jednostka<?= $i + 3 ?>_częstotliwości" class="jednostki">
                <option value="Hz"<?= zaznaczona("częstotliwości", $i + 3, "Hz", "Hz") ?>>herc</option>
                <option value="kHz"<?= zaznaczona("częstotliwości", $i + 3, "kHz", "Hz") ?>>kiloherc</option>
                <option value="MHz"<?= zaznaczona("częstotliwości", $i + 3, "MHz", "Hz") ?>>megaherc</option>
                <option value="GHz"<?= zaznaczona("częstotliwości", $i + 3, "GHz", "Hz") ?>>gigaherc</option>
                </select><br>
            <?php
                    }
            ?>
            </div>
            <button id="button15_dodaj" type="button">dodaj jednostkę</button>
            </form>

        </div>

         <div class="przelicznik" id="przelicznik_napięcia">
            <h3>przelicznik Napięcie</h3>
            <form action="index.php" method="post" name="przelicznik_napięcia">
                <div id="jednostki_napięcia">
                    <?php
                    if(!isset($_SESSION["napiecie"]))
                    {
                        $_SESSION["napiecie"]=0;
                    }
                ?>
            <input type="number" id="number1_napięcia" placeholder="Wprowadź liczbę">
            <select id="jednostka1_napięcia" class="jednostki">
                <option value="V"<?= zaznaczona("napięcia", 1, "V", "V") ?>>wolt</option>
                <option value="µV"<?= zaznaczona("napięcia", 1, "µV", "V") ?>>mikrowolt</option>
                <option value="mV"<?= zaznaczona("napięcia", 1, "mV", "V") ?>>milivolt</option>
                <option value="kV"<?= zaznaczona("napięcia", 1, "kV", "V") ?>>kilowolt</option>
                <option value="MeV"<?= zaznaczona("napięcia", 1, "MeV", "V") ?>>megawolt</option>
            </select><br>

            <input type="number" id="number2_napięcia" placeholder="Wprowadź liczbę">
            <select id="jednostka2_napięcia" class="jednostki">
                <option value="V"<?= zaznaczona("napięcia", 2, "V", "V") ?>>wolt</option>
                <option value="µV"<?= zaznaczona("napięcia", 2, "µV", "V") ?>>mikrowolt</option>
                <option value="mV"<?= zaznaczona("napięcia", 2, "mV", "V") ?>>milivolt</option>
                <option value="kV"<?= zaznaczona("napięcia", 2, "kV", "V") ?>>kilowolt</option>
                <option value="MeV"<?= zaznaczona("napięcia", 2, "MeV", "V") ?>>megawolt</option>
            </select><br>
            <?php
                for($i=0;$i<($_SESSION["napiecie"] ?? 0);$i++)
                    {
            ?>
                <input type="number" id="number<?= $i + 3 ?>_napięcia" placeholder="Wprowadź liczbę">
                <select id="jednostka<?= $i + 3 ?>_napięcia" class="jednostki">
                <option value="V"<?= zaznaczona("napięcia", $i + 3, "V", "V") ?>>wolt</option>
                <option value="µV"<?= zaznaczona("napięcia", $i + 3, "µV", "V") ?>>mikrowolt</option>
                <option value="mV"<?= zaznaczona("napięcia", $i + 3, "mV", "V") ?>>milivolt</option>
                <option value="kV"<?= zaznaczona("napięcia", $i + 3, "kV", "V") ?>>kilowolt</option>
                <option value="MeV"<?= zaznaczona("napięcia", $i + 3, "MeV", "V") ?>>megawolt</option>
                </select><br>
            <?php
                    }
            ?>
            </div>
            <button id="button16_dodaj" type="button">dodaj jednostkę</button>
            </form>
        </div>

        <div class="przelicznik" id="przelicznik_natężenia">
            <h3>przelicznik natężenie prądu</h3>
            <form action="index.php" method="post" name="przelicznik_natężenia">
                <div id="jednostki_natężenia">
                    <?php
                    if(!isset($_SESSION["natezenie"]))
                    {
                        $_SESSION["natezenie"]=0;
                    }
                ?>
            <input type="number" id="number1_natężenie" placeholder="Wprowadź liczbę">
            <select id="jednostka1_natężenie" class="jednostki">
                <option value="A"<?= zaznaczona("natężenie", 1, "A", "A") ?>>amper</option>
                <option value="µA"<?= zaznaczona("natężenie", 1, "µA", "A") ?>>mikroamper</option>
                <option value="mA"<?= zaznaczona("natężenie", 1, "mA", "A") ?>>miliamper</option>
                <option value="kA"<?= zaznaczona("natężenie", 1, "kA", "A") ?>>kiloamper</option>
            </select><br>

            <input type="number" id="number2_natężenie" placeholder="Wprowadź liczbę">
            <select id="jednostka2_natężenie" class="jednostki">
                <option value="A"<?= zaznaczona("natężenie", 2, "A", "A") ?>>amper</option>
                <option value="µA"<?= zaznaczona("natężenie", 2, "µA", "A") ?>>mikroamper</option>
                <option value="mA"<?= zaznaczona("natężenie", 2, "mA", "A") ?>>miliamper</option>
                <option value="kA"<?= zaznaczona("natężenie", 2, "kA", "A") ?>>kiloamper</option>
            </select><br>
            <?php
                for($i=0;$i<($_SESSION["natężenie"] ?? 0);$i++)
                    {
            ?>
                <input type="number" id="number<?= $i + 3 ?>_natężenie" placeholder="Wprowadź liczbę">
                <select id="jednostka<?= $i + 3 ?>_natężenie" class="jednostki">
                <option value="A"<?= zaznaczona("natężenie", $i + 3, "A", "A") ?>>amper</option>
                <option value="µA"<?= zaznaczona("natężenie", $i + 3, "µA", "A") ?>>mikroamper</option>
                <option value="mA"<?= zaznaczona("natężenie", $i + 3, "mA", "A") ?>>miliamper</option>
                <option value="kA"<?= zaznaczona("natężenie", $i + 3, "kA", "A") ?>>kiloamper</option>
                </select><br>
            <?php
                    }
            ?>
            </div>
            <button id="button17_dodaj" type="button">dodaj jednostkę</button>
            </form>
        </div>
        <div class="przelicznik" id="przelicznik_kat">
            <h3>przelicznik katu</h3>
            <form action="index.php" method="post" name="przelicznik_kat">
            <div id="jednostki_kat">
                    <?php
                    if(!isset($_SESSION["kat"]))
                    {
                        $_SESSION["kat"]=0;
                    }
                ?>
            <input type="number" id="number1_kat" placeholder="Wprowadź liczbę">
            <select id="jednostka1_kat" class="jednostki">
                <option value="st"<?= zaznaczona("kat", 1, "st", "st") ?>>stopnie</option>
                <option value="rd"<?= zaznaczona("kat", 1, "rd", "st") ?>>radiany</option>
                <option value="gr"<?= zaznaczona("kat", 1, "gr", "st") ?>>gradiany</option>
                <option value="mk"<?= zaznaczona("kat", 1, "mk", "st") ?>>minuty kątowe</option>
                <option value="sk"<?= zaznaczona("kat", 1, "sk", "st") ?>>sekundy kątowe</option>
            </select><br>

            <input type="number" id="number2_kat" placeholder="Wprowadź liczbę">
            <select id="jednostka2_kat" class="jednostki">
                <option value="st"<?= zaznaczona("kat", 2, "st", "st") ?>>stopnie</option>
                <option value="rd"<?= zaznaczona("kat", 2, "rd", "st") ?>>radiany</option>
                <option value="gr"<?= zaznaczona("kat", 2, "gr", "st") ?>>gradiany</option>
                <option value="mk"<?= zaznaczona("kat", 2, "mk", "st") ?>>minuty kątowe</option>
                <option value="sk"<?= zaznaczona("kat", 2, "sk", "st") ?>>sekundy kątowe</option>
            </select><br>
            <?php
                for($i=0;$i<($_SESSION["kat"] ?? 0);$i++)
                    {
            ?>
                <input type="number" id="number<?= $i + 3 ?>_kat" placeholder="Wprowadź liczbę">
                <select id="jednostka<?= $i + 3 ?>_kat" class="jednostki">
                <option value="st"<?= zaznaczona("kat", $i + 3, "st", "st") ?>>stopnie</option>
                <option value="rd"<?= zaznaczona("kat", $i + 3, "rd", "st") ?>>radiany</option>
                <option value="gr"<?= zaznaczona("kat", $i + 3, "gr", "st") ?>>gradiany</option>
                <option value="mk"<?= zaznaczona("kat", $i + 3, "mk", "st") ?>>minuty kątowe</option>
                <option value="sk"<?= zaznaczona("kat", $i + 3, "sk", "st") ?>>sekundy kątowe</option>
                </select><br>
            <?php
                    }
            ?>
            </div>
            <button id="button18_dodaj" type="button">dodaj jednostkę</button>
            </form>
        </div>

        <div class="przelicznik" id="przelicznik_momentu">
            <h3>przelicznik momentu obrotowego</h3>
            <form action="index.php" method="post" name="przelicznik_momentu">
                <div id="jednostki_momentu">
                    <?php
                    if(!isset($_SESSION["momentu"]))
                    {
                        $_SESSION["momentu"]=0;
                    }
                ?>
            <input type="number" id="number1_momentu" placeholder="Wprowadź liczbę">
            <select id="jednostka1_momentu" class="jednostki">
                <option value="N·m"<?= zaznaczona("momentu", 1, "N·m", "N·m") ?>>niutonometr</option>
                <option value="kgf·m"<?= zaznaczona("momentu", 1, "kgf·m", "N·m") ?>>kilogramosila metr</option>
                <option value="lb·ft"<?= zaznaczona("momentu", 1, "lb·ft", "N·m") ?>>funt stopa</option>
                <option value="lb·in"<?= zaznaczona("momentu", 1, "lb·in", "N·m") ?>>funt cal</option>
            </select><br>

            <input type="number" id="number2_momentu" placeholder="Wprowadź liczbę">
            <select id="jednostka2_momentu" class="jednostki">
                <option value="N·m"<?= zaznaczona("momentu", 2, "N·m", "N·m") ?>>niutonometr</option>
                <option value="kgf·m"<?= zaznaczona("momentu", 2, "kgf·m", "N·m") ?>>kilogramosila metr</option>
                <option value="lb·ft"<?= zaznaczona("momentu", 2, "lb·ft", "N·m") ?>>funt stopa</option>
                <option value="lb·in"<?= zaznaczona("momentu", 2, "lb·in", "N·m") ?>>funt cal</option>
            </select><br>
            <?php
                for($i=0;$i<($_SESSION["momentu"] ?? 0);$i++)
                    {
            ?>
                <input type="number" id="number<?= $i + 3 ?>_momentu" placeholder="Wprowadź liczbę">
                <select id="jednostka<?= $i + 3 ?>_momentu" class="jednostki">
                <option value="N·m"<?= zaznaczona("momentu", $i + 3, "N·m", "N·m") ?>>niutonometr</option>
                <option value="kgf·m"<?= zaznaczona("momentu", $i + 3, "kgf·m", "N·m") ?>>kilogramosila metr</option>
                <option value="lb·ft"<?= zaznaczona("momentu", $i + 3, "lb·ft", "N·m") ?>>funt stopa</option>
                <option value="lb·in"<?= zaznaczona("momentu", $i + 3, "lb·in", "N·m") ?>>funt cal</option>
                </select><br>
            <?php
                    }
            ?>
            </div>
            <button id="button19_dodaj" type="button">dodaj jednostkę</button>
            </form>
        </div>

        <div class="przelicznik" id="przelicznik_rezystancji">
            <h3>przelicznik rezystancji</h3>
            <form action="index.php" method="post" name="przelicznik_rezystancji">
                <div id="jednostki_rezystancji">
                    <?php
                    if(!isset($_SESSION["rezystancji"]))
                    {
                        $_SESSION["rezystancji"]=0;
                    }
                ?>
            <input type="number" id="number1_rezystancji" placeholder="Wprowadź liczbę">
            <select id="jednostka1_rezystancji" class="jednostki">
                <option value="Ω"<?= zaznaczona("rezystancji", 1, "Ω", "Ω") ?>>om</option>
                <option value="mΩ"<?= zaznaczona("rezystancji", 1, "mΩ", "Ω") ?>>miliom</option>
                <option value="kΩ"<?= zaznaczona("rezystancji", 1, "kΩ", "Ω") ?>>kiloom</option>
                <option value="MΩ"<?= zaznaczona("rezystancji", 1, "MΩ", "Ω") ?>>megaom</option>
            </select><br>

            <input type="number" id="number2_rezystancji" placeholder="Wprowadź liczbę">
            <select id="jednostka2_rezystancji" class="jednostki">
                <option value="Ω"<?= zaznaczona("rezystancji", 2, "Ω", "Ω") ?>>om</option>
                <option value="mΩ"<?= zaznaczona("rezystancji", 2, "mΩ", "Ω") ?>>miliom</option>
                <option value="kΩ"<?= zaznaczona("rezystancji", 2, "kΩ", "Ω") ?>>kiloom</option>
                <option value="MΩ"<?= zaznaczona("rezystancji", 2, "MΩ", "Ω") ?>>megaom</option>
            </select><br>
            <?php
                for($i=0;$i<($_SESSION["rezystancji"] ?? 0);$i++)
                    {
            ?>
                <input type="number" id="number<?= $i + 3 ?>_rezystancji" placeholder="Wprowadź liczbę">
                <select id="jednostka<?= $i + 3 ?>_rezystancji" class="jednostki">
                <option value="Ω"<?= zaznaczona("rezystancji", $i + 3, "Ω", "Ω") ?>>om</option>
                <option value="mΩ"<?= zaznaczona("rezystancji", $i + 3, "mΩ", "Ω") ?>>miliom</option>
                <option value="kΩ"<?= zaznaczona("rezystancji", $i + 3, "kΩ", "Ω") ?>>kiloom</option>
                <option value="MΩ"<?= zaznaczona("rezystancji", $i + 3, "MΩ", "Ω") ?>>megaom</option>
                </select><br>
            <?php
                    }
            ?>
            </div>
            <button id="button20_dodaj" type="button">dodaj jednostkę</button>
            </form>
        </div>

            <div class="przelicznik" id="przelicznik_lepkości">
                <h3>przelicznik lepkości</h3>
                <form action="index.php" method="post" name="przelicznik_lepkości">
                    <div id="jednostki_lepkości">
                        <?php
                        if(!isset($_SESSION["lepkości"]))
                        {
                            $_SESSION["lepkości"]=0;
                        }
                    ?>
                    <input type="number" id="number1_lepkości" placeholder="Wprowadź liczbę">
                    <select id="jednostka1_lepkości" class="jednostki">
                        <option value="Pa·s"<?= zaznaczona("lepkości", 1, "Pa·s", "Pa·s") ?>>paskal·sekunda</option>
                        <option value="cP"<?= zaznaczona("lepkości", 1, "cP", "Pa·s") ?>>centypoise</option>
                        <option value="mP"<?= zaznaczona("lepkości", 1, "mP", "Pa·s") ?>>mili poise</option>
                        <option value="P"<?= zaznaczona("lepkości", 1, "P", "Pa·s") ?>>poise</option>
                        <option value="lb/(ft·s)"<?= zaznaczona("lepkości", 1, "lb/(ft·s)", "Pa·s") ?>>funt/(stop·sekunda)</option>
                        <option value="lb/(in·h)"<?= zaznaczona("lepkości", 1, "lb/(in·h)", "Pa·s") ?>>funt/(cal·godzina)</option>
                        
                    </select><br>
                    <input type="number" id="number2_lepkości" placeholder="Wprowadź liczbę">
                    <select id="jednostka2_lepkości" class="jednostki">
                        <option value="Pa·s"<?= zaznaczona("lepkości", 2, "Pa·s", "Pa·s") ?>>paskal·sekunda</option>
                        <option value="cP"<?= zaznaczona("lepkości", 2, "cP", "Pa·s") ?>>centypoise</option>
                        <option value="mP"<?= zaznaczona("lepkości", 2, "mP", "Pa·s") ?>>mili poise</option>
                        <otion value="P"<?= zaznaczona("lepkości", 2, "P", "Pa·s") ?>>poise</option>
                        <option value="lb/(ft·s)"<?= zaznaczona("lepkości", 2, "lb/(ft·s)", "Pa·s") ?>>funt/(stop·sekunda)</option>
                        <option value="lb/(in·h)"<?= zaznaczona("lepkości", 2, "lb/(in·h)", "Pa·s") ?>>funt/(cal·godzina)</option>

                    </select><br>
                    <?php
                        for($i=0;$i<($_SESSION["lepkości"] ?? 0);$i++)
                            {
                    ?>
                        <input type="number" id="number<?= $i + 3 ?>_lepkości" placeholder="Wprowadź liczbę">
                        <select id="jednostka<?= $i + 3 ?>_lepkości" class="jednostki">
                        <option value="Pa·s"<?= zaznaczona("lepkości", $i + 3, "Pa·s", "Pa·s") ?>>paskal·sekunda</option>
                        <option value="cP"<?= zaznaczona("lepkości", $i + 3, "cP", "Pa·s") ?>>centypoise</option>
                        <option value="mP"<?= zaznaczona("lepkości", $i + 3, "mP", "Pa·s") ?>>mili poise</option>
                        <option value="P"<?= zaznaczona("lepkości", $i + 3, "P", "Pa·s") ?>>poise</option>
                        <option value="lb/(ft·s)"<?= zaznaczona("lepkości", $i + 3, "lb/(ft·s)", "Pa·s") ?>>funt/(stop·sekunda)</option>
                        <otion value="lb/(in·h)"<?= zaznaczona("lepkości", $i + 3, "lb/(in·h)", "Pa·s") ?>>funt/(cal·godzina)</option>

                        </select><br>
                    <?php
                            }  
                    ?>
                    </div>
                    <button id="button21_dodaj" type="button">dodaj jednostkę</button>
                </form>
        </div>

        <div class="przelicznik" id="przelicznik_ladunku">
            <h3>przelicznik ladunku elektrycznego</h3>
            <form action="index.php" method="post" name="przelicznik_ladunku">
                <div id="jednostki_ladunku">
                    <?php
                    if(!isset($_SESSION["ladunek"]))
                    {
                        $_SESSION["ladunek"]=0;
                    }
                ?>
            <input type="number" id="number1_ladunek" placeholder="Wprowadź liczbę">
            <select id="jednostka1_ladunek" class="jednostki">
                <option value="C"<?= zaznaczona("ladunek", 1, "C", "C") ?>>kulomb</option>
                <option value="mC"<?= zaznaczona("ladunek", 1, "mC", "C") ?>>milikulomb</option>
                <option value="µC"<?= zaznaczona("ladunek", 1, "µC", "C") ?>>mikrokulomb</option>
                <option value="nC"<?= zaznaczona("ladunek", 1, "nC", "C") ?>>nanokulomb</option>
                <option value="pC"<?= zaznaczona("ladunek", 1, "pC", "C") ?>>pikokulomb</option>
                <option value="ah"<?= zaznaczona("ladunek", 1, "ah", "C") ?>>amperogodzina</option>
                <option value="mAh"<?= zaznaczona("ladunek", 1, "mAh", "C") ?>>miliamperogodzina</option>
            </select><br>

            <input type="number" id="number2_ladunek" placeholder="Wprowadź liczbę">
            <select id="jednostka2_ladunek" class="jednostki">
                <option value="C"<?= zaznaczona("ladunek", 2, "C", "C") ?>>kulomb</option>
                <option value="mC"<?= zaznaczona("ladunek", 2, "mC", "C") ?>>milikulomb</option>
                <option value="µC"<?= zaznaczona("ladunek", 2, "µC", "C") ?>>mikrokulomb</option>
                <option value="nC"<?= zaznaczona("ladunek", 2, "nC", "C") ?>>nanokulomb</option>
                <option value="pC"<?= zaznaczona("ladunek", 2, "pC", "C") ?>>pikokulomb</option>
                <option value="ah"<?= zaznaczona("ladunek", 2, "ah", "C") ?>>amperogodzina</option>
                <option value="mAh"<?= zaznaczona("ladunek", 2, "mAh", "C") ?>>miliamperogodzina</option>

            </select><br>
            <?php
                for($i=0;$i<($_SESSION["ladunek"] ?? 0);$i++)
                    {
            ?>
                <input type="number" id="number<?= $i + 3 ?>_ladunek" placeholder="Wprowadź liczbę">
                <select id="jednostka<?= $i + 3 ?>_ladunek" class="jednostki">
                <option value="C"<?= zaznaczona("ladunek", $i + 3, "C", "C") ?>>kulomb</option>
                <option value="mC"<?= zaznaczona("ladunek", $i + 3, "mC", "C") ?>>milikulomb</option>
                <option value="µC"<?= zaznaczona("ladunek", $i + 3, "µC", "C") ?>>mikrokulomb</option>
                <option value="nC"<?= zaznaczona("ladunek", $i + 3, "nC", "C") ?>>nanokulomb</option>
                <option value="pC"<?= zaznaczona("ladunek", $i + 3, "pC", "C") ?>>pikokulomb</option>
                <option value="ah"<?= zaznaczona("ladunek", $i + 3, "ah", "C") ?>>amperogodzina</option>
                <option value="mAh"<?= zaznaczona("ladunek", $i + 3, "mAh", "C") ?>>miliamperogodzina</option>
                </select><br>
            <?php
                    }
            ?>
            </div>
            <button id="button22_dodaj" type="button">dodaj jednostkę</button>
            </form>
        </div>

       
    </main>
    <div class="tabela">
    <table>
        <th>
            <td>przedrostek</td><td>skrót</td><td>potęga</td>
        </th>
        <tr>
            <td>yotta</td><td>Y</td><td>10<sup>24</sup></td>
        </tr>
        <tr>
            <td>zetta</td><td>Z</td><td>10<sup>21</sup></td>
        </tr>
        <tr>
            <td>exa</td><td>E</td><td>10<sup>18</sup></td>
        </tr>
        <tr>
            <td>peta</td><td>P</td><td>10<sup>15</sup></td>
        </tr>
        <tr>
            <td>tera</td><td>T</td><td>10<sup>12</sup></td>
        </tr>
        <tr>
            <td>giga</td><td>G</td><td>10<sup>9</sup></td>
        </tr>
        <tr>
            <td>mega</td><td>M</td><td>10<sup>6</sup></td>
        </tr>
        <tr>
            <td>kilo</td><td>K</td><td>10<sup>3</sup></td>
        </tr>
        <tr>
            <td>hekto</td><td>h</td><td>10<sup>2</sup></td>
        </tr>
        <tr>
            <td>deka</td><td>da</td><td>10<sup>3</sup></td>
        </tr>
        <tr>
            <td>decy</td><td>d</td><td>10<sup>-1</sup></td>
        </tr>
        <tr>
            <td>centy</td><td>c</td><td>10<sup>-2</sup></td>
        </tr>
        <tr>
            <td>mili</td><td>m</td><td>10<sup>-3</sup></td>
        </tr>
        <tr>
            <td>mikro</td><td>µ</td><td>10<sup>-6</sup></td>
        </tr>
        <tr>
            <td>nano</td><td>n</td><td>10<sup>-9</sup></td>
        </tr>
        <tr>
            <td>piko</td><td>p</td><td>10<sup>-12</sup></td>
        </tr>
        <tr>
            <td>femto</td><td>f</td><td>10<sup>-15</sup></td>
        </tr>
        <tr>
            <td>atto</td><td>a</td><td>10<sup>-18</sup></td>
        </tr>
        <tr>
            <td>zepto</td><td>z</td><td>10<sup>-21</sup></td>
        </tr>
        <tr>
            <td>yocto</td><td>y</td><td>10<sup>-24</sup></td>
        </tr>
    </table>
    </div>
    <script src="kod.js"></script>
</body>
</html>