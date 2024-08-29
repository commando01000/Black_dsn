
<?php $__env->startSection('title', __('Projects')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Projects')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item active"><?php echo e(__('Projects')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12">
                
                <div class="float-left">
                    <a href="<?php echo e(route('designs.create')); ?>" class="btn btn-light-primary"><?php echo e(__('Create Design')); ?></a>
                </div>
                
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo e(__('Title')); ?></th>
                    <th><?php echo e(__('Category')); ?></th>
                    <th><?php echo e(__('Created At')); ?></th>
                    <th><?php echo e(__('cover')); ?></th>
                    <th><?php echo e(__('Action')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $designs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $design): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($design->title); ?></td>
                        <td><?php echo e($design->category->name); ?></td>

                        <td><?php echo e(\App\Facades\UtilityFacades::date_time_format($design->created_at)); ?></td>
                        <td>
                            <?php if($design->cover && Storage::exists($design->cover)): ?>
                                <img src="<?php echo e(Storage::url($design->cover)); ?>" width="50" />
                            <?php else: ?>
                                <img src="<?php echo e(Storage::url('not-exists-data-images/350x250.png')); ?>" width="50" />
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?php echo e(route('designs.show', $design->id)); ?>"
                                class="btn btn-success"><?php echo e(__('View')); ?></a>
                            <a href="<?php echo e(route('designs.edit', $design->id)); ?>"
                                class="btn btn-warning"><?php echo e(__('Edit')); ?></a>
                            <form action="<?php echo e(route('designs.destroy', $design->id)); ?>" method="POST"
                                style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger"><?php echo e(__('Delete')); ?></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($designs->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
    <?php echo $__env->make('layouts.includes.datatable-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <?php echo $__env->make('layouts.includes.datatable-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/back/design/index.blade.php ENDPATH**/ ?>