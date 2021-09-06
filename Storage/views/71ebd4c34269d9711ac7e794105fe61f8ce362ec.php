<?php $__env->startSection('Title'); ?>
Student Page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('nav'); ?>
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold"><?php echo e($_SESSION['login']); ?></span>
                            <span class="text-muted text-xs block">menu <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><button  class="dropdown-item">Logout</button></li>
                        </ul>

                    </div>
                    <div class="logo-element">
                        Kazem
                    </div>
                </li>
                <li class="active">
                    <a href="<?php echo e($docroot); ?>/"><i class="fa fa-th-large"></i> <span
                                class="nav-label">Student</span></a>
                </li>
                <li>
                    <a href="<?php echo e($docroot); ?>/Teachers"><i class="fa fa-th-large"></i> <span
                                class="nav-label">Teachers</span> </a>
                </li>
                <li>
                    <a href="<?php echo e($docroot); ?>/Days"><i class="fa fa-th-large"></i> <span
                                class="nav-label">Days</span> </a>
                </li>
                <li>
                    <a href="<?php echo e($docroot); ?>/Years"><i class="fa fa-th-large"></i> <span
                                class="nav-label">Years</span> </a>
                </li>
                <li>
                    <a href="<?php echo e($docroot); ?>/Room"><i class="fa fa-th-large"></i> <span
                                class="nav-label">Room</span> </a>
                </li>
            </ul>

        </div>
    </nav>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="w-50 d-block m-auto">
                <a href="student/add" class="btn text-white btn-success w-100">اضافه کردن</a>
            </div>
            <h1 style="text-align: center">
                Students
            </h1>
            <table class="table table-hover text-right table-sm text-center">
                <thead style="background-color: #2F4050" class="text-light">
                <tr>
                    <th>Changes</th>
                    <th>Age</th>
                    <th>LastName</th>
                    <th>Name</th>
                    <th>id</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $AllStudent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <a href="student/edit?id=<?php echo e($stu->$col1); ?>&fname=<?php echo e($stu->$col2); ?>&lname=<?php echo e($stu->$col3); ?>&Age=<?php echo e($stu->$col4); ?>" class="btn text-light btn-primary">ویرایش</a>
                            <a href="student/delete?id=<?php echo e($stu->$col1); ?>&fname=<?php echo e($stu->$col2); ?>&lname=<?php echo e($stu->$col3); ?>" class="btn text-light btn-danger ">حذف</a>
                        </td>
                        <td><?php echo e($stu->$col4); ?></td>
                        <td><?php echo e($stu->$col3); ?></td>
                        <td><?php echo e($stu->$col2); ?></td>
                        <td><?php echo e($stu->$col1); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('MyTemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esa\App\Views/index.blade.php ENDPATH**/ ?>