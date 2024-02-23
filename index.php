<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="response.php" method="GET" class="container d-flex flex-column gap-3 mt-5">
        <div class="form-group">
            <label for="exampleInputEmail1">Nome e Cognome:</label>
            <input type="text" class="form-control" id="name_surname" name="name_surname" aria-describedby="name_surname" placeholder="Inserisci nome e cognome">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Inserisci frase:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="user_message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>