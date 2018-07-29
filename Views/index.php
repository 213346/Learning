<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tp1 Stage </title>
    <?php
        require_once('./Include/header.php');
    ?>
</head>
<body>
<?php
require_once('./Include/nav.php');
?>


<div class="container mt-5">

    <div class="row">

        <div class="col-12 mt-5 mb-5">
            <h1>List of users </h1>
            <?php for ($i=1; $i<11; $i++){ ?>
                <?php if ($i%2==0) { ?>
                    <div class="card mb-2">
                        <div class="card-header">
                            User <?php echo $i; ?>
                            <a href="#" data-mylink="<?php echo "chat$i"; ?>" class="fa fa-comments pull-right linkChat" aria-hidden="true"></a>
                        </div>
                        <div id="<?php echo "chat$i"; ?>" class="card-body chatContent">

                        </div>
                    </div>
                <?php }else { ?>
                    <div class="card mb-2 ">
                        <div class="card-header bg-success text-white ">
                            User <?php echo $i; ?>
                            <a  data-mylink="<?php echo "chat$i"; ?>" href="#" class="fa fa-comments pull-right text-white linkChat" aria-hidden="true"></a>
                        </div>
                        <div id="<?php echo "chat$i"; ?>" class="card-body chatContent">

                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>

</div>


<?php
require_once('./Include/footer.php');


?>
</body>
</html>