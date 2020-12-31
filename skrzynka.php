<?php session_start();
    if(!$_SESSION['zalogowany']){
        header("Location: index.php");
    }
?>

<html>
    <head>
        <style>
            main{
                width: 100%;
                height: 100%;
                display: flex;
            }
            .iframe{
               width:50%; 
               height: 50%;
            }
            textarea{
                width: 100%;
                height: 25%;
                resize: none;
            }
        </style>
    </head>
    <body>
        <h1>Witaj <?php echo $_SESSION['user'] ?></h1>
        <a href = "logout.php">wyloguj się</a>
        <main>
            <iframe src = "odebrane.php" class = "iframe"></iframe>
            <iframe src = "wyslane.php" class = "iframe"></iframe>
            <br/>
            <br/>
            <br/>
            <form method="post" action="send.php">
                <h2>Wyślij wiadomość</h2><br/>
                <label><h3>wpisz nazwę</h3>
                <input type = "text" name = "username"/></label>
                <br/><br/>
                <label>wpisz treść wiadomości
                <textarea name = "content"></textarea></label>
                <br/><br/>
                <input type = "submit" value = "wyślij"/>
                <?php 
                if(isset($_SESSION['blad'])){
                    echo $_SESSION['blad'];
                    unset($_SESSION['blad']);
                }
            ?>
            </form>
        </main>
    </body>
</html>