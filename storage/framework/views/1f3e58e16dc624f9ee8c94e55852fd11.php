
<?php $__env->startSection('title', __('Statistics')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Statistics')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item active"><?php echo e(__('Statistics')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <div class="card-header">
                    <h5><?php echo e(__('Statistics')); ?></h5>
                    <a href="<?php echo e(route('statistics.create')); ?>"
                        class="btn btn-primary float-right"><?php echo e(__('Create Statistics')); ?></a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th><?php echo e(__('Title')); ?></th>
                                <th><?php echo e(__('Description')); ?></th>
                                <th><?php echo e(__('Cover')); ?></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $statistics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statistic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($statistic->id); ?></td>
                                    <td><?php echo e($statistic->title); ?></td>
                                    <td><?php echo e($statistic->short_description); ?></td>
                                    <td>
                                        <?php if($statistic->cover && Storage::exists($statistic->cover)): ?>
                                            <img src="<?php echo e(Storage::url($statistic->cover)); ?>" width="50" />
                                        <?php else: ?>
                                            <img src="<?php echo e(Storage::url('not-exists-data-images/350x250.png')); ?>" width="50" />
                                        <?php endif; ?>
                                    </td>
                                    
                                    
                                    <td>
                                        <a href="<?php echo e(route('statistics.edit', $statistic->id)); ?>"
                                            class="btn btn-warning btn-sm"><?php echo e(__('Edit')); ?></a>
                                        <?php echo Form::open([
                                            'route' => ['statistics.destroy', $statistic->id],
                                            'method' => 'DELETE',
                                            'style' => 'display:inline-block;',
                                        ]); ?>

                                        <?php echo e(Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirm("Are you sure?")'])); ?>

                                        <?php echo Form::close(); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <?php echo $__env->make('layouts.includes.datatable-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <?php echo $__env->make('layouts.includes.datatable-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Black_dsn\resources\views/back/statistics/index.blade.php ENDPATH**/ ?>