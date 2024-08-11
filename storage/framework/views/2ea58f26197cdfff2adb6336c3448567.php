<div class="dsn-service d-grid grid-lg-3 grid-sm-2" data-dsn-iconsize="80px">
    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="dsn-up service-item p-relative grid-item style-box">
            <div class="service-item-inner border-style number-item h-100">
                <div class="dsn-icon">
                    <img style="width: 80px; height:80px;" src="<?php echo e(Storage::url($service->cover)); ?>"
                        alt="<?php echo e($service->title); ?>">
                </div>
                <div class="service-content p-relative">
                    <h4 class="service_title title-block"><?php echo e($service->title); ?></h4>
                    <div class="service_description mt-10 max-w570 dsn-auto">
                        <p><?php echo e($service->short_description); ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div style="border-top: 0px !important" class="type-p-nav">
    <div class="dsn-pagination p-relative d-flex align-items-center">
        <?php echo e($services->links('front.pagination.custom-pagination')); ?>

    </div>
</div>
<?php /**PATH G:\xampp\htdocs\Black_dsn\resources\views/front/services/services-section.blade.php ENDPATH**/ ?>