<?php
var_dump($_GET);
$message = $_GET['message'];
$message_length = strlen($message);
$new_message = str_replace('Lorem','***',$message);
$new_message_length = strlen($new_message);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>ciao</h1>
   <h2>Il tuo messaggio è:</h2>
   <p><?php echo $message; ?></p>
   <h3>La lunghezza del messaggio è:</h3>
   <p><?php echo $message_length ?></p>
   <h3>Il messaggio con la parola nascosta è:</h3>
   <p><?php echo $new_message ?></p>
   <h3>La lunghezza del messaggio con la parola nascosta è:</h3>
   <p><?php echo $new_message_length ?></p>
</body>
</html>