 <?php

$paragrafo = $_GET['paragrafo'];
$parola_da_censurare = $_GET['censura'];
trim($parola_da_censurare);
$paragrafo_censurato = str_replace($parola_da_censurare, '***', $paragrafo);
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stampa paragrafo</title>
</head>
<body>
    <h2>Paragrafo (lunghezza):</h2>
    <p> <?php echo $paragrafo . ' (' . strlen($paragrafo) .')' ?></p> 
    <h2>Paragrafo Censurato (lunghezza):</h2>
    <p> <?php echo $paragrafo_censurato . ' (' . strlen($paragrafo) .')' ?></p> 
</body>
</html>