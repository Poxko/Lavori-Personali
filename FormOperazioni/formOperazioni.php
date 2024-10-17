<?php
$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
$operazione = $_POST['oper'];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati Operazioni</title>
    <link rel="stylesheet" href="formOperazioni.css">
</head>
<body>
    <div class="container">
        <h1>Risultati Operazioni</h1>
        <?php
        echo "<strong>OPERAZIONE: ".$operazione."</strong><br><br>";
        if ($operazione == 'somma') {
            $somma = $numero1 + $numero2;
            echo "La somma è: " . $somma;
        } elseif ($operazione == 'differenza') {
            $differenza = $numero1 - $numero2;
            echo "La differenza è: " . $differenza;
        } elseif ($operazione == 'prodotto') {
            $prodotto = $numero1 * $numero2;
            echo "Il prodotto è: " . $prodotto;
        } else {
            if ($numero2 == 0) {
                echo "Divisione non possibile perché il secondo numero ha valore 0";
            } else {
                $rapporto = $numero1 / $numero2;
                echo "La divisione è: " . $rapporto;
            }
        }
        ?>
        <br><br>
        <a href="formOperazioni.html" class="button">Torna Indietro</a>
    </div>
</body>
</html>
