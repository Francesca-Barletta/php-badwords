<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./server.php" method="GET">
        <p>
             <label for="text">Testo:</label>
             <textarea name="message" id="text" placeholder="Scrivi qui.."></textarea>
        </p>
       <p>
            <label for="hdword">Parola da censurare</label>
            <input type="text" name="hdword" id="hdword" placeholder="Scrivi la tua parola">
       </p>
       <button>Invia</button>
    </form>
</body>
</html>