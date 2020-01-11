<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Public/css/style.css" />
    <link rel="stylesheet" href="Public/css/register.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <title>Teabuds</title>
</head>
<body>
    <div class="container">
        <form action="?page=register" method="post">
            <div class="row">
                <h1 class="col-12 col-md-5 col-lg-4 offset-md-1 offset-lg-2">Create an Account</h1>
            </div>

            <div class="row mb-2">
                <div class="col-sm-12 col-md-5 col-lg-4 offset-md-1 offset-lg-2">
                    <p class="mb-0">Welcome!</p>
                    <p>We're glad you decided to join us!</p>
                </div>
                <div class="col-12 col-md-5 col-lg-4 d-none d-md-block">
                    <h2>Personal Information</h2>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-12 col-md-5 col-lg-4 offset-md-1 offset-lg-2">
                    <div class="form-group">
                        <label for="inputName">Full Name</label>
                        <input type="text" class="form-control" id="inputName">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordVerify">Repeat Password</label>
                        <input type="password" class="form-control" id="inputPasswordVerify">
                    </div>
                    <div class="form-group">
                        <label for="">Favourite Tea</label>
                        <input type="text" class="form-control" id="">
                    </div>
                </div>

                <div class="col-sm-12 col-md-5 col-lg-4">
                    <div class="form-group">
                        <label for="">Date of Birth</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Country/Region</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">State</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">City</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Street</label>
                        <input type="text" class="form-control" id="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-md-6 offset-3 offset-md-3 text-center">
                    <button class="register-button" type="submit">REGISTER</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
