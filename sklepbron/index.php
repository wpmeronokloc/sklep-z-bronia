<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <title>Sklep z bronią</title>
    <link rel="stylesheet" href="styl.css" />
    <?php
    $conn = new mysqli("localhost", "root", "", "sklepbron")
    ?>

</head>

<body>
    <header>
        <section id="logo">
            <img src="img/logo_beztla.png" alt="" />
            <a href="index.php">
                <b>Guns 'n Rons'es</b>
            </a>
        </section>
        <nav>
            <div class="menu">
                <div class="dropdown">
                    <button class="dropbtn">
                        <img src="img/menu.png" alt="" />
                        <span>Menu</span>
                    </button>
                    <div class="dropdown-content">
                        <a href="bron.php">Broń</a>
                        <a href="amunicja.php">Amunicja</a>
                        <a href="akcesoria.php">Akcesoria</a>
                    </div>
                </div>
            </div>
            <section id="nav_element">
                <div class="zaloguj">
                    <a href="zaloguj.html" class="nav_element">
                        <img src="img/klodka.png" alt="" />
                        <span>Zaloguj</span>
                    </a>
                </div>
                <div class="koszyk">
                    <a href="koszyk.php" class="nav_element ">
                        <img src="img/koszyk.png" alt="" />
                        <span>Koszyk</span>
                    </a>
                </div>
                <div class="koszyk_wartosc nav_element">
                    <span id="koszyk_wartosc">0,00zł</span>
                </div>
            </section>
        </nav>
    </header>
    <main>
        <section id="galeria">
            <b>Najlepszy sklep z bronią</b>
            <div class="galeriamain">
                <div class="galeriashow">
                    <img src="img/galeria1.jpg" alt="1" id="galeria_aktualne" />
                </div>
                <img src="img/galeriatlo.png" alt="" id="galeriatlo" />
            </div>
        </section>
        <div class="popularnenapis">Najpopularniejsze kategorie</div>
        <section id="popularne">
            <div class="kontener">
                <img src="img/krotka.jpg" class="kontener_img" alt="" />
                <div class="kontener_text">
                    <p>Broń krótka</p>
                    <img src="img/krotka_logo.png" alt="krotka_logo" />
                </div>
            </div>
            <div class="kontener">
                <img class="kontener_img" src="img/dluga.jpg" alt="" />
                <div class="kontener_text">
                    <p>Broń długa</p>
                    <img src="img/dluga_logo.png" alt="dluga_logo" />
                </div>
            </div>
            <div class="kontener">
                <div class="kontener_text">
                    <p>Amunicja</p>
                    <img src="img/amunicja_logo.png" alt="amunicja_logo" />
                </div>
                <img class="kontener_img" src="img/amunicja.jpg" alt="" />
            </div>
            <div class="kontener">
                <div class="kontener_text">
                    <p>Akcesoria</p>
                    <img src="img/akcesoria_logo.png" alt="akcesoria_logo" />
                </div>
                <img class="kontener_img" src="img/akcesoria.jpg" alt="" />
            </div>
        </section>
        <section id="nowosc_napis">Nowosci</section>
        <section id="nowosci">
            <?php
            $sql = "SELECT id, nazwa, opis, cena, zdjecie FROM bron;";
            $result = $conn->query($sql);
            $count = 0; // Licznik wyników
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if ($count >= 4) {
                        break;
                    }
                    echo
                    "<div class='nowosc' id='nowosc" . $row['id'] . "'>  
                         <img src='img/" . $row['zdjecie'] . ".jpg' alt='' />
                         <p class='nowosc_nazwa'>" . $row['nazwa'] . "</p>
                         <p class='nowosc_opis'>" . $row['opis'] . "</p>
                         <p id='cena_id' class='nowosc_cena'>" . $row['cena'] . "</p>
                         <button class='do_koszyka' onclick='button_do_koszyka(" . $row['cena'] . ")'>Dodaj do koszyka</button>
                         </div>";

                    $count++;
                }
            }
            ?>

        </section>

    </main>
    <footer>
        <div class="stopka">
            <a href="kontakt.html">
                <p>Kontakt</p>
            </a>
        </div>
        <div class="stopka">
            <a href="onas.html">
                <p>O nas</p>
            </a>
        </div>
        <div class="stopka">
            <a href="Partnerzy.html">
                <p>Partnerzy</p>
            </a>
        </div>
    </footer>
</body>
<script src="skrypt.js"></script>

</html>