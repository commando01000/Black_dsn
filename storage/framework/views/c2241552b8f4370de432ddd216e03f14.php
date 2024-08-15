<!doctype html>
<html class="no-js" lang="">

<?php echo $__env->make('layouts.front.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body class="v-dark dsn-ajax">

    <?php echo $__env->make('layouts.front.pre-loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main id="main_root" class="main-root">

        <!-- ========== Menu ========== -->
        <?php echo $__env->make('layouts.front.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- ========== End Menu ========== -->
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->yieldContent('css'); ?>
        <?php echo $__env->yieldContent('js'); ?>

        <?php echo $__env->make('layouts.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </main>

    <!-- ========== Cursor ========== -->
    <?php echo $__env->make('layouts.front.cursor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ========== End Cursor ========== -->

    <!-- ==========  Social ========== -->
    <?php echo $__env->make('layouts.front.social', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ========== End Social ========== -->

    <!-- ========== Style Option Page ========== -->
    <?php echo $__env->make('layouts.front.style-option-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ========== End Style Option Page ========== -->

    <!-- ========== Line BG ========== -->
    <?php echo $__env->make('layouts.front.line-bg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ========== End Line BG ========== -->


    <script src="<?php echo e(asset('front_asset/assets/js/jquery-3.1.1.min.js')); ?>"></script>

    <script src="<?php echo e(asset('front_asset/assets/js/plugins.min.js')); ?>"></script>

    <script src="<?php echo e(asset('front_asset/assets/js/plugins/dsn-grid.min.js')); ?>"></script>

    <script src="<?php echo e(asset('front_asset/assets/js/custom.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\dell\source\repos\Black_dsn\resources\views/layouts/front/app.blade.php ENDPATH**/ ?>