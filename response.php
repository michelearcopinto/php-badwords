<?php
$string = trim($_GET['user_message']);
$name_surname = trim($_GET['name_surname']);
$string_no_spaces = str_replace(' ', '', $string);
$string_array = explode(' ', $string);

$parolacce = [
    "merda", "cazzo", "stronzo", "fanculo", "puttana", "bastardo", "troia", "frocio", "culattone", "pirla",
    "testa di cazzo", "fregna", "zoccola", "potta", "coglione", "cagna", "mignotta", "mona", "sborra", "pipì",
    "cristo", "dio cane", "cavolo", "sfigato", "scemo", "figlio di puttana", "deficiente", "cretino", "idiota",
    "pezzo di merda", "stronza", "coglione", "porco", "pirlone", "zozzone", "pompino", "stronzata", "palle",
    "vaffanculo", "rompiscatole", "cane", "putrida", "tette", "culone", "pene", "palle", "schifo", "sborone"
];
$censored_message = str_replace($parolacce, '***', $string);
$censored_message_no_spaces = str_replace(' ', '', $censored_message);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="card text-start container mt-5">
        <h1 class="card-title">Risposta del server</h1>
        <div class="card-body">
            <ul>
                <li><strong>Nome e Cognome:</strong> <?php echo $name_surname ?>;</li>
                <li><strong>Messaggio utente:</strong> <?php echo $string ?>;</li>
                <li><strong>Lunghezza messaggio:</strong> <?php echo strlen($string_no_spaces) ?> caratteri;</li>
                <li><strong>Array messaggio:</strong> <?php echo var_dump($string_array); ?>;</li>
                <li><strong>Messaggio utente censurato:</strong> <?php echo $censored_message ?>;</li>
                <li><strong>Lunghezza messaggio censurato:</strong> <?php echo strlen($censored_message_no_spaces) ?> caratteri;</li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>