<!DOCTYPE html>
<html>
<head>
    <?php include __DIR__.'/../Common/head.php' ?>
    <link rel="stylesheet" href="Public/css/profile.css" />
    <script src="Public/js/profile.js"></script>
</head>

<body>
    <?php include __DIR__.'/../Common/navbar.php'; ?>

    <?php include __DIR__ . '/profile_tea_form.php' ?>

    <div class="content">
        <div class="container">
            <p>Profile</p>

            <div class="profile-avatar container">
                <img src="Public/img/avatar_01.png" class="rounded-circle" alt="Cinque Terre" width="120" height="120">
            </div>
            <div class="profile-info container">
                <p class="profile-name"> <?= $user->getFirstName() ?> <?= $user->getLastName(); ?></p>
                <div class="row profile-stats">
                    <div class="col col-6 col-md-2 offset-md-4">
                        <p>Followers: <?= $user->getFollowers() ?> </p>
                    </div>
                    <div class="col col-6 col-md-2">
                        <p>Following: <?= $user->getFollowing() ?> </p>
                    </div>
                </div>
                <div class="profile-desc">
                    <p><?= $user->getBio() ?></p>
                </div>
            </div>
            <div class="collection container row pb-5">
                    <?php include __DIR__ . '/profile_item.php' ?>
            </div>

            <nav id="pagination-nav">

            </nav>
        </div>
    </div>

    <input type="hidden" id="user-id" value="<?= $_SESSION['id'] ?>">

</body>
</html>