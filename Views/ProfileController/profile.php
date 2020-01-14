<!DOCTYPE html>
<html>
<head>
    <?php include __DIR__.'/../Common/head.php' ?>
    <link rel="stylesheet" href="Public/css/profile.css" />
</head>

<body>
    <?php include __DIR__.'/../Common/navbar.php'; ?>

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
        <?php
        if(isset($teas)){
            foreach ($teas as $tea) {
                echo '<div class="col-6 col-md-4 col-lg-2">'.
                        '<button class="col-12 collection-item">'.
                            '<img class="img-fluid p-2" src="Public/img/logo.png">'.
                            '<div class="collection-item-name">'.
                                $tea->getName().
                            '</div>'.
                        '</button>'.
                     '</div>';
            }
        }
        ?>
    </div>

    <!--<div class="collection container row">
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
        </div>-->
    </div>

</body>
</html>