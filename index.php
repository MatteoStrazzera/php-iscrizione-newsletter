<?php
var_dump($_GET);
var_dump(isset($_GET['email']));

$email = $_GET['email'];

function emailCheck($email)
{
    if (str_contains($email, '.') && str_contains($email, '@')) {
        return true;
    } else {
        return false;
    }
}

var_dump(emailCheck($email));

$emailChecked = emailCheck($email);

function messageValidation($emailChecked)
{
    if ($emailChecked == true) {
        return 'Email verificata';
    } else {
        return 'Ops! Qualcosa non va bene';
    }
}

$message = messageValidation($emailChecked);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP iscrizione newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
    QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>

    </header>

    <main>
        <div class="container">
            <form action="" method="get">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Inserisci la tua email">
                </div>
                <button type="submit" class="btn btn-primary">Clicca per inviare</button>
            </form>
        </div>
        <div class="container">
            <span><?php echo $message ?></span>
        </div>
    </main>

    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
    YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>