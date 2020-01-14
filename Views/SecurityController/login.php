<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include __DIR__.'/../Common/head.php' ?>
        <link rel="stylesheet" href="Public/css/login.css" />
    </head>

    <body>
        <div class="login container">
            <div class="row">
                <div class="logo col-12 col-md-5 offset-md-1">
                    <img src="Public/img/logo.png" class="img-fluid">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-5 offset-sm-2 offset-md-0">
                    <div class="forms">
                        <h1>TEABUDS</h1>
                        <form action="?page=login" method="post">
                            <div class="messages">
                                <?php
                                if(isset($messages)){
                                    foreach($messages as $message) {
                                        echo $message;
                                    }
                                }
                                ?>
                            </div>
                            <input name="email" type="text" placeholder="email@email.com">
                            <input name="password" type="password" placeholder="password">
                            <button class="button-rounded" type="submit">LOGIN</button>
                        </form>

                        <form action="" method="get">
                            <button class="button-rounded" type="submit" name="page" value="register">REGISTER</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

