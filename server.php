<?php
var_dump($_GET);
$message =  strtolower($_GET['message']);
$message_length = strlen($message);
$hidden_word = strtolower($_GET['hdword']);
$new_message = str_replace($hidden_word,'***',$message);
$new_message_length = strlen($new_message);
$number_hidden_words =  substr_count($message, $hidden_word);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Il tuo messaggio è:</h2>
   <p><?php echo $message; ?></p>
   <h3>La lunghezza del messaggio è:</h3>
   <p><?php echo $message_length ?></p>
   <h3>Il messaggio con la parola nascosta è:</h3>
   <p><?php echo $new_message ?></p>
   <h3>La lunghezza del messaggio con la parola nascosta è:</h3>
   <p><?php echo $new_message_length ?></p>
   <h3>La parola nascosta è stata trovata <?php echo $number_hidden_words?> volte nel messaggio</h3>

</body>
</html>