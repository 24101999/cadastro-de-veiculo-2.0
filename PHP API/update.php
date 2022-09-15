<?php
require_once("./edit.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/gota-de-agua.png" type="image/x-icon" />
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet" />

    <!-- Filled -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet" />

    <!-- Rounded -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet" />

    <!-- Sharp -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet" />

    <!-- Two tone -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/icon?family=Montserrat" rel="stylesheet" />
    <!-- CSS only -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="stylesheet" href="update.css" />
</head>

<body>
    <article class="form-edit">
        <form action="./edit.php?id=<?= $dados[0]['id'] ?>" method="post">
            <input class="inp-for-edit" id="1" type="text" name="veiculo" placeholder="veiculo" />
            <input class="inp-for-edit" id="2" type="text" name="ano" placeholder="ano" />
            <input class="inp-for-edit" id=3 type="text" name="marca" placeholder="marca" />
            <textarea class="text-area-edit" name="descricao" id="" cols="30" rows="10"
                placeholder="descricão"></textarea>
            <button type="submit" class="send">editar</button>
        </form>
        <a href="redirecinamento.html"><?= $msg ?></a>
    </article>

</body>

</html>

<script src="./index.js">

</script>