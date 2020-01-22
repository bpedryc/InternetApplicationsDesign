<script class="shop-template" type="text/x-custom-template">
    <div class="shop-wrapper col-4">
        <button class="shop col-12" type="submit">
            <p class="shop-name"><?/*=$shop->getName()*/?></p>
            <p class="shop-address"><?/*=$shop->getAddressId()*/?></p>
            <img class="shop-photo img-fluid" src="data:image/jpeg;base64,<?/*= base64_encode( $shop->getPhoto() ) */?>"/>
            </button>
        </div>;
</script>

