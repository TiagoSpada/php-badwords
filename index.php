<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserimento paragrafo</title>
</head>
<body>  
    <form action="stampa-censura.php" method="GET">
    <div>
        <label for="paragrafo">Scrivi una frase</label>
        <input type="text" name="paragrafo" id="paragrafo">
        <label for="censura">Parola da censurare</label>
        <input type="text" name="censura" id="censura">
    </div>
    <div> <button>Invia</button> </div>
    </form>
</body>
</html>