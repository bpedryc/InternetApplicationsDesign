<!DOCTYPE html>
<html>
<head>
    <?php include __DIR__.'/../Common/head.php' ?>
    <link rel="stylesheet" href="Public/css/register.css" />
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
                        <input name="name" type="text" class="form-control" id="inputName">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input name="password" type="password" class="form-control" id="inputPassword">
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordVerify">Repeat Password</label>
                        <input type="password" class="form-control" id="inputPasswordVerify">
                    </div>
                    <div class="form-group">
                        <label for="">Favourite Tea</label>
                        <input name="favTea" type="text" class="form-control" id="">
                    </div>
                </div>

                <div class="col-sm-12 col-md-5 col-lg-4">
                    <div class="form-group">
                        <label for="">Date of Birth</label>
                        <input name="birthDate" type="date" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Country/Region</label>
                        <input name="country" type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">State</label>
                        <input name="state" type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">City</label>
                        <input name="city" type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Street</label>
                        <input name="street" type="text" class="form-control" id="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-md-6 offset-3 offset-md-3 text-center">
                    <button class="register-button button-rounded" type="submit">REGISTER</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
