<!DOCTYPE html>
<html lang="fa">

<head>
    <?php
        $my_link_url = \App\Config::MY_WEBSITE;

    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $__env->yieldContent('Title'); ?></title>

    <link href="<?php echo e($my_link_url); ?>/resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e($my_link_url); ?>/resources/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo e($my_link_url); ?>/resources/css/animate.css" rel="stylesheet">
    <link href="<?php echo e($my_link_url); ?>/resources/css/style.css" rel="stylesheet">
    <link href="<?php echo e($my_link_url); ?>/resources/css/fonts.css" rel="stylesheet">

</head>

<body style="font-family: BYekan,Calibri">

<div id="wrapper">

    <?php echo $__env->yieldContent('nav'); ?>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i>
                    </a>
                    <form role="search" class="navbar-form-custom" method="post" action="#">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control"
                                   name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <form action="" method="post">
                        <button name="logout" class="btn" type="submit">
                            <i class="fa fa-sign-out"></i> Log out
                        </button>
                        </form>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <?php echo $__env->yieldContent('main'); ?>

        </div>
    </div>
</div>
<!-- Mainly scripts -->
<script src="<?php echo e($my_link_url); ?>/resources/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo e($my_link_url); ?>/resources/js/popper.min.js"></script>
<script src="<?php echo e($my_link_url); ?>/resources/js/bootstrap.min.js"></script>
<script src="<?php echo e($my_link_url); ?>/resources/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo e($my_link_url); ?>/resources/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo e($my_link_url); ?>/resources/js/inspinia.js"></script>
<script src="<?php echo e($my_link_url); ?>/resources/js/plugins/pace/pace.min.js"></script>

<?php
if(isset($_POST['logout'])){
    session_destroy();
    $sit = \App\Config::MY_WEBSITE;
    header("Location:$sit/login");
}
?>
</body>

</html><?php /**PATH C:\xampp\htdocs\EducationalSystem\App\Views/MyTemplate.blade.php ENDPATH**/ ?>