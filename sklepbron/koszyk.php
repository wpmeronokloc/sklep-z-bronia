<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <title>Broń</title>
    <link rel="stylesheet" href="koszyk.css" />
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
        <section id="napisy">
            <div class="koszyk_zawartosc_napis napis">
                <span>Zawartośc koszyka</span>
            </div>
            <div class="koszyk_podsumowanie_napis napis">
                <span>Podsumowanie</span>
            </div>
        </section>
        <section id="koszyk_main">
            <section id="koszyk_zawartosc">
                <div class="koszyk_element">
                    <div class="koszyk_img koszyk_czesc">
                        <img src="img/nowosc1.jpg" alt="">
                    </div>
                    <div class="koszyk_nazwa  koszyk_czesc">
                        <p>Glock 19</p>
                    </div>
                    <div class="koszyk_opis  koszyk_czesc">
                        <p>Pistolet automatyczny</p>
                    </div>
                    <div class="koszyk_cena  koszyk_czesc">
                        <p>899zł</p>
                    </div>
                </div>
            </section>
            <section id="koszyk_podsumowanie">
                <p>Łączna wartość koszyka:</p>
                <p id="koszyk_podsumowanie_wartosc"></p>
                <button id="button_koszyk_reset" onclick="koszyk_reset()">Resetuj koszyk</button>
            </section>
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
<script src="koszyk.js"></script>

</html>