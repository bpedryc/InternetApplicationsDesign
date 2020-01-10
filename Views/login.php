<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="Public/css/style.css" />
        <link rel="stylesheet" href="Public/css/login.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <title>Teabuds</title>
    </head>

    <body>
        <div class="container row">
            <div class="logo col-12 col-md-5 col-md-offset-1">
                <img src="Public/img/logo.png" class="img-fluid">
            </div>
            <div class="col-8 col-md-5">
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
                        <button type="submit">LOGIN</button>
                    </form>

                    <form action="" method="get">
                        <button type="submit" name="page" value="register">REGISTER</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

