<?php echo $__env->make('layouts.front.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.front.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('layouts.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('js'); ?>
<?php echo $__env->yieldContent('style'); ?>

<script src="<?php echo e(asset('assets/front_assets/assets/js/jquery-3.1.1.min-1.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_assets/assets/js/jquery-3.1.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_assets/assets/js/plugins.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_assets/assets/js/plugins.min-1.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_assets/assets/js/custom-1.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_assets/assets/js/custom.js')); ?>"></script>

<script src="<?php echo e(asset('assets/front_assets/assets/js/home.js')); ?>"></script>
</body>

</html>
<?php /**PATH G:\xampp\htdocs\Black_dsn\resources\views/layouts/front/app.blade.php ENDPATH**/ ?>