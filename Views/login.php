<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login </title>
    <?php
    require_once('./Include/header.php');
    ?>
</head>
<body>
<?php
require_once('./Include/nav.php');
?>


<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-10 col-sm-6 mt-5 mb-5 ">
            <div class="card">
                <div class="card-header bg-success text-white text-center">Login</div>
                <div class="card-body">
                    <form method="post" action="../Controller/UsersController.php">
                        <div class="form-group">
                            <label for="Email" >Email </label>
                            <input type="text" name="Email"
                                   placeholder="Enter your email address"
                                   id="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Password" >Password </label>
                            <input type="password" name="Password"
                                   placeholder="Enter your password"
                                   id="Password" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
require_once('./Include/footer.php');


?>
</body>
</html>