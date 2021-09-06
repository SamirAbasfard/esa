<?php $__env->startSection('Title'); ?>
    login
<?php $__env->stopSection(); ?>
<?php
    session_start();
       $my_link_url = \App\Config::MY_WEBSITE;
?>
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e($my_link_url); ?>/resources/css/login.css">
    <link rel="stylesheet" href="<?php echo e($my_link_url); ?>/resources/css/fonts.css">
    <form style="font-family: BYekan,Calibri" method="post" class="form-signin text-center">
        <img class="mb-4" src="<?php echo e($my_link_url); ?>/resources/img/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">لطفا در ابتدا وارد شوید</h1>
        <input style="border-bottom-left-radius: 0;border-bottom-right-radius: 0;" type="text" name="inputuser"
               id="inputuser" class="form-control" placeholder="User Name" required autofocus>

        <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password"
               required>

        <button name="send" class="btn btn-lg btn-primary btn-block" type="submit">ورود</button>
        <p class="mt-5 mb-3 text-muted">&copy;EducationalSystemArvand</p>
    </form>
    <?php
        if(isset($_POST['send'])){
$user = $_POST['inputuser'];
$pass = $_POST['inputPassword'];

    if ($user=="admin" && $pass=="admin"){

         $_SESSION['login'] = "admin";
         $sit = \App\Config::MY_WEBSITE;
        header("Location:$sit");

        }else{

         $sit = \App\Config::MY_WEBSITE;
        header("Location:$sit/login");

        }
    }


    ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('TemplateBaseHtml', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esa\App\Views/Pages/login.blade.php ENDPATH**/ ?>