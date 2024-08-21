
<?php $__env->startSection('title', __('Emails')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Emails')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item active"><?php echo e(__('Emails')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12">
                <div class="float-left">
                    <a href="<?php echo e(route('emails.create')); ?>" class="btn btn-light-primary"><?php echo e(__('Create Email')); ?></a>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo e(__('Recipient Name')); ?></th>
                    <th><?php echo e(__('Recipient Email')); ?></th>
                    <th><?php echo e(__('Subject')); ?></th>
                    <th><?php echo e(__('Created At')); ?></th>
                    <th><?php echo e(__('Action')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($email->name); ?></td>
                        <td><?php echo e($email->email); ?></td>
                        <td><?php echo e($email->subject); ?></td>
                        <td><?php echo e(\App\Facades\UtilityFacades::date_time_format($email->created_at)); ?></td>
                        <td>
                            <form action="<?php echo e(route('emails.destroy', $email->id)); ?>" method="POST"
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
    </div>
    <?php echo e($emails->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Black_dsn\resources\views/back/emails/index.blade.php ENDPATH**/ ?>