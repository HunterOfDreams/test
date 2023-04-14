<!DOCTYPE html>
<html>
    <head>
        <title>PHP-скрипт</title>
        <meta charset='utf-8'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
        echo "Hello world!";
    ?>
    <form action="action.php" method="post">
        <p>Ім'я: <input type="text" name="name" /></p>
        <p>Прізвище: <input type="text" name="surename" /></p>
        <p>Стать: <input type="text" name="sex" /></p>
        <p>Національність: <input type="text" name="nationality" /></p>
        <p>Назва організації: <input type="text" name="organization" /></p>
        <p>Посада: <input type="text" name="position" /></p>
        <p>email: <input type="text" name="emale" /></p>
        <p>Пароль: <input type="text" name="password" /></p>
        <p>Підтвердіть пароль: <input type="text" name="password1" /></p>
        <?php
            if ($password!==$password1) {
                echo "Паролі не співпадають";
            }
        ?>
        <p>Зареєструватися<input type="submit" /></p>
       </form>
       
    Здравствуйте, <?php echo htmlspecialchars($_POST['name']); ?>.
    Вам <?php echo (int)$_POST['surename']; ?> лет.
    </body>
</html>














