<!DOCTYPE html>
<html>
<head>
    <?php include __DIR__.'/../Common/head.php' ?>
    <link rel="stylesheet" href="Public/css/shops.css" />
    <script src="Public/js/shops.js"></script>
</head>

<body>
    <?php include __DIR__.'/../Common/navbar.php'; ?>

    <div class="heading">
        <div class="container">
            <p>Shops</p>
            <p class="text-center pt-3 pb-4">Choose the shop you want to order from</p>
        </div>
    </div>

    <div class="container row">
        <?php
        if (isset($shops)){
             foreach ($shops as $shop){
                echo '<div class="shop-wrapper col-4">'.
                        '<button class="shop col-12">'.
                            '<p class="shop-name">'.$shop->getName().'</p>'.
                            '<p class="shop-address">'.$shop->getAddress().'</p>'.
                            '<img class="shop-photo img-fluid" src="data:image/jpeg;base64,'.base64_encode( $shop->getPhoto() ).'"/>'.
                        '</button>'.
                    '</div>';
            }
        }
        ?>
    </div>
</body>
</html>





