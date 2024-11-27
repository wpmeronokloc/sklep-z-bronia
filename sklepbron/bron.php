<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <title>Broń</title>
    <link rel="stylesheet" href="bron.css" />
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
                        <a href="bron.html">Broń</a>
                        <a href="amunicja.html">Amunicja</a>
                        <a href="akcesoria.html">Akcesoria</a>
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
                <div class="koszyk nav_element">
                    <img src="img/koszyk.png" alt="" />
                    <span>Koszyk</span>
                </div>
                <div class="koszyk_wartosc nav_element">
                    <span>0,00zł</span>
                </div>
            </section>
        </nav>
    </header>
    <main>
        <section id="nowosc_napis">Broń</section>
        <section id="nowosci">
            <?php
            $sql = "SELECT nazwa, opis, cena, zdjecie FROM bron;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo
                        "<div class='nowosc'>  
                         <img src='img/" . $row['zdjecie'] . ".jpg' alt='' />
                         <p class='nowosc_nazwa'>" . $row['nazwa'] . "</p>
                         <p class='nowosc_opis'>" . $row['opis'] . "</p>
                         <p class='nowosc_cena'>" . $row['cena'] . "</p>
                         <button class='do_koszyka'>Dodaj do koszyka</button>
                         </div>";
                }
            }
            ?>
        </section>
    </main>
</body>

</html>