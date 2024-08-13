
<?php $__env->startSection('title', 'Create Category/Service'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Create Category')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('service-category.index')); ?>"><?php echo e(__('Service_Category')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Create Category')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-6 col-lg-8 col-sm-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h5><?php echo e(__('Create Category')); ?></h5>
                    <?php echo Form::open([
                        'route' => 'service-category.store',
                        'method' => 'Post',
                        'data-validate',
                    ]); ?>

                </div>
                <div class="card-body">
                    <div class="form-group">
                        <?php echo e(Form::label('name', __('Name'), ['class' => 'form-label'])); ?>

                        <?php echo Form::text('name', null, ['placeholder' => __('Enter name'), 'class' => 'form-control', 'required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('status', __('Status'), ['class' => 'form-label'])); ?>

                        <select name="status" class="custom_select form-select" id="status" data-trigger>
                            <option value="" selected disabled><?php echo e(__('Select Category Status')); ?></option>
                            <option value="1"><?php echo e(__('Active')); ?></option>
                            <option value="2"><?php echo e(__('Deactive')); ?></option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-end">
                        <?php echo Html::link(route('service-category.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

                        <?php echo e(Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

                    </div>
                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Black_dsn\resources\views/back/service-category/create.blade.php ENDPATH**/ ?>