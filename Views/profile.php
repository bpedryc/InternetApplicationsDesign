
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Public/css/style.css" />
    <link rel="stylesheet" href="Public/css/profile.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Teabuds</title>
</head>
    <?php include 'navbar.php'; ?>

    <div class="heading">
        <div class="heading__container container">
            <p>Profile</p>
        </div>
        <div class="profile-avatar container">
            <img src="Public/img/avatar_01.png" class="rounded-circle" alt="Cinque Terre" width="120" height="120">
        </div>
        <div class="profile-info container">
            <p class="profile-name"> <?php echo $user->getFirstName() . ' ' . $user->getLastName(); ?> </p>
            <div class="row profile-stats">
                <div class="col col-6 col-md-2 offset-md-4">
                    <p>Followers: <?php //echo $user->getFirstName() ?> </p>
                </div>
                <div class="col col-6 col-md-2">
                    <p>Following: <?php //echo $user->getLastName()?> </p>
                </div>
            </div>
            <div class="profile-desc">
                <p>Hi! My name is Bartłomiej, I’m a student in Cracov's University of Technology and I'm a big fan of good tea. Japanese greens are my favourite!</p>
            </div>
        </div>
    </div>
    <div class="collection container row">
        <div class="col-6 col-md-4 col-lg-2">
            <div class="col-12 collection-item">
                <img class="img-fluid p-2" src="Public/img/logo.png">
                <div class="collection-item-name">
                    Sencha satsuma
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
            <div class="col-12 collection-item">
                <img class="img-fluid p-2" src="Public/img/logo.png">
                <div class="collection-item-name">
                    Sencha satsuma
                </div>
            </div>
        </div>

        <?php
/*            foreach ($collection as $item){
                echo '<div></div>';
            }
        */?>
    </div>

</body>
</html>