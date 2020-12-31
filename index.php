<?php session_start()?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h2>zaloguj się do komunikatora</h2>
        <form method="post" action = "logowanie.php">
            <input type = "text" name="login" placeholder="login"/>
            <br/>
            <br/>
            <input type = "password" name = "haslo" placeholder="haslo"/>
            <br/>
            <br/>
            <input type = "submit" value = "zaloguj się"/>
            <?php 
                if(isset($_SESSION['blad'])){
                    echo $_SESSION['blad'];
                    unset($_SESSION['blad']);
                }
            ?>
        </form>
    </body>
</html>