<!DOCTYPE html>
<html>
<head>
    <?php include __DIR__.'/../Common/head.php' ?>
    <link rel="stylesheet" href="Public/css/admin.css" />
    <script src="Public/js/admin.js"></script>
</head>

<body>
    <?php include __DIR__.'/../Common/navbar.php'; ?>

    <div class="content">
        <div class="container">
            <h4 class="text-center mt-4 mb-3">User management</h4>
            <table class="table bg-light">
                <thead class="thead">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">FirstName</th>
                        <th scope="col">LastName</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id="users-table">
                    <!-- js generated content -->
                </tbody>
            </table>

        </div>
    </div>


    <input id="user-id" type="hidden" name="userId" value="<?=$_SESSION['id']?>">
</body>
</html>


