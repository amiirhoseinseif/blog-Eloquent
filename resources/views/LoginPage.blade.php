<html>
    <head>
        <header>
            <?php
                echo view ('header',['pagename'=>"home"]);
            ?>
        </header>
    </head>
    <body>
        <div>
            <form method="get" action="">
                <label>
                    username:
                </label>
                <input type="text" name="username">
                <br>
                <label>
                    password:
                </label>
                <input type="password" name="password">
                <br>
                <button type="submit">submit</button>
            </form>
        </div>
    </body>
    <footer>
        <?php
            echo view ('footer');
        ?>
    </footer>
</html>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'get')
        {
            header('http://localhost:8000/login?username='.$_GET['username']."&password=".$_GET['password']);
//            http://localhost:8000/login?username=amirhosein&password=1234
        }
?>
