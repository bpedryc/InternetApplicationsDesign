<!DOCTYPE html>
<html>
<head>
    <?php include __DIR__.'/../Common/head.php' ?>
    <link rel="stylesheet" href="Public/css/tea.css" />
</head>

<body>
<?php include __DIR__.'/../Common/navbar.php'; ?>

<?php
    $maxTemp = 100;
    $maxTime = 600;
    $maxLeaf = 5;

    $temp = $tea->getTemperature();
    $tempBarValue = max(0, min($temp / $maxTemp * 100, 100));

    $minutes = intval($tea->getSteepingTime() / 60);
    $seconds = $tea->getSteepingTime() % 60;
    $timeBarValue = max(0, min($tea->getSteepingTime() / $maxTime * 100, 100));

    $leaf = $tea->getLeafAmount();
    $leafBarValue = max(0, min($leaf / $maxLeaf * 100, 100));

?>

<div style="margin-top: 4em;" class="container row">
    <div class="col-6 d-flex flex-column" style="text-align: center;">
        <h2><?= $tea->getName() ?></h2>
        <p><?= $tea->getType() ?></p>
        <img src="<?=$imgLink?>" class="tea-img img-flex">
        <form method="get">
            <button class="btn btn-danger" type="submit" name="page" value="delete_tea">Delete Tea</button>
            <input type="hidden" name="teaId" value="<?= $tea->getId() ?>">
        </form>
    </div>
    <div class="col-6">
        <div class="rating">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
            </div>
        <div class="steeping">
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: <?= $tempBarValue ?>%;">Temperature: <?= $tempBarValue ?>°C</div>
                </div>
            <div class="progress">

                <div class="progress-bar bg-success" role="progressbar" style="width: <?= $timeBarValue ?>%;">Time: <?= $minutes ?>min <?= $seconds ?>sec</div>
                </div>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: <?= $leafBarValue ?>%;" >Leaf: <?= number_format($leaf, 1, '.', '') ?>g/100ml</div>
                </div>
            </div>
            <div class="notes">
                <p><?= $tea->getNotes() ?></p>
            </div>
        </div>
    </div>
