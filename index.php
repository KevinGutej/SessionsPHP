<?php
    session_start();
        foreach($_SESSION as $key => $value)
         {
             echo "$key: $value <br>";
         }
?>
<html>
    <head>
        <title>Formularz</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php if(!isset($_SESSION['login']) ): ?>
            <form action="login.php" method="get">
                Login: <input type="text" name="login" required> <br>
                Password <input type="password" name="pass" required> <br>
                <input type="submit" value="Zaloguj!"> <br>
            </form>
        <?php else: ?>
        <div style="border: 1px solid black; padding: 5px; margin: 10px; width: 200px;">
            Jesteś zalogowany
            <a href="ifLogin.php">Link</a>
        </div>
        <form action="<?php session_destroy() ?>">
            <input type="submit" value="Wyloguj">
        </form>
        <?php endif; ?>

    </body>
</html>