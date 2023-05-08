<?php
    include './functions.php';
    $numberPassword = $_GET['numberPassword'];
    $result = createPassword($numberPassword);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-primary text-white">
    <div class="d-flex flex-column align-items-center py-5 gap-4">
        <h1 class="text-center">Generatore di password</h1>
        <form action="" method="GET" class="d-flex flex-column gap-2 w-25">
            <label for="numberPassword">Quanti caratteri vuoi che sia lunga la password?</label>
            <input type="number" name="numberPassword" id="numberPassword" min="6" max="50" class="form-control" placeholder="Inserisci un numero tra 6 e 50">
            <button type="submit" class="btn btn-success">Genera password</button>
        </form>
        <?php if($result){ ?>
            <h2>La tua password è:</h2>
            <div class="card p-5">
                <p><?php echo $result ?></p>
            </div>
        <?php } ?>
    </div>
</body>
</html>