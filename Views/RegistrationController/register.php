<!DOCTYPE html>
<html>
<head>
    <?php include __DIR__.'/../Common/head.php' ?>
    <link rel="stylesheet" href="Public/css/register.css" />
    <script src="Public/js/register.js"></script>
</head>

<body>
    <div class="container">
        <form id="register-form" action="?page=register" method="post">
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
                        <label for="name">Full Name</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="password-verify">Repeat Password</label>
                        <input type="password" class="form-control" id="password-verify">
                    </div>
                    <div class="form-group">
                        <label for="fav-tea">Favourite Tea</label>
                        <input name="favTea" type="text" class="form-control" id="fav-tea">
                    </div>
                </div>

                <div class="col-sm-12 col-md-5 col-lg-4">
                    <div class="form-group">
                        <label for="birth-date">Date of Birth</label>
                        <input name="birthDate" type="date" class="form-control" id="birth-date">
                    </div>
                    <div class="form-group">
                        <label for="country">Country/Region</label>
                        <input name="country" type="text" class="form-control" id="country">
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <input name="state" type="text" class="form-control" id="state">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input name="city" type="text" class="form-control" id="city">
                    </div>
                    <div class="form-group">
                        <label for="street">Street</label>
                        <input name="street" type="text" class="form-control" id="street">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-md-6 offset-3 offset-md-3 text-center">
                    <button class="register-button button-rounded" type="button" onclick="validateRegister()">REGISTER</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
