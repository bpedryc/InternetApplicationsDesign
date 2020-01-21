<script class="collection-item-template" type="text/x-custom-template">
    <div class="collection-item-wrapper col col-6 col-md-4 col-lg-2">
        <form>
            <button class="col col-12 collection-item" name="page" value="tea" type="submit">
                <img class="img-fluid p-2"> <!--src="img-link"-->
                <div class="collection-item-name">
                    <!--tea-name-->
                </div>
                <input class="collection-item-id" type="hidden" name="teaId"> <!--value=tea-id-->
            </button>
        </form>
    </div>
</script>

<script class="collection-new-item-template" type="text/x-custom-template">
    <div class="button-add-tea col col-6 col-md-4 col-lg-2">
        <button class="col col-12 collection-item" onclick="newTea()" type="button">
            <img class="img-fluid p-2" src="Public/img/function_addtea.png">
        </button>
    </div>
</script>
