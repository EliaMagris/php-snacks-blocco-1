<!--Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $name = $_GET['name'];
    $mail = $_GET['Email'];
    $age = $_GET['Age']
        ?>

    <form action="" method="GET">
        <input type="text" placeholder="name" name="name">
        <input type="text" placeholder="Email" name="Email">
        <input type="number" placeholder="age" name="Age">

        <button type="submit">send</button>
    </form>

    <?php
    if (strlen($name) > 3 && strpos($mail, '.') !== false && strpos($mail, '@') !== false && is_numeric($age)) {
        echo ('Accesso consentito');
    } else {
        echo ('Accesso Negato');
    }
    ?>

</body>

</html>