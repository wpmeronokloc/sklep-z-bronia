<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
    <?php
    $conn = new mysqli("localhost","root","","sklepbron")
    ?>

</head>

<body>
    <section id="nowosc_napis">Broń</section>
    <section id="nowosci">
        <?php
        $sql ="SELECT nazwa, opis, cena, zdjecie FROM bron;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo      
                 "<p>" .$row["zdjecie"]. "</p>
                 <div class='nowosc'>  
                 <img src='img/".$row['zdjecie'].".jpg'/>
                 </div>";       
            }
         }


        ?>

    </section>

</body>

</html>