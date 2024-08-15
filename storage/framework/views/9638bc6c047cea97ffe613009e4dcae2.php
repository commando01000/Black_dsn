

<?php $__env->startSection('title', 'View Service Category'); ?>


<?php $__env->startSection('content'); ?>

    <main class="container">
        <div class="row">
            <div class="section-body">
                <div class="m-auto col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5> <?php echo e(__('View Service Category')); ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('title', __('Title'), ['class' => 'form-label'])); ?> *
                                        <?php echo Form::text('name', $service_category->name, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]); ?>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <?php if($service_category->cover): ?>
                                        <div class="mt-3">
                                            <strong>Current Cover Image:</strong><br>
                                            <img src="<?php echo e(Storage::url($service_category->cover)); ?>" alt="<?php echo e($service_category->name); ?>"
                                                style="max-width: 100%; height: 80px !important;">
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('body', __('Description'), ['class' => 'form-label'])); ?> *
                                        <?php
                                        
                                        $var = html_entity_decode($service_category->description);
                                        
                                        ?>
                                        <?php echo Form::textarea('body', $var, [
                                            'class' => 'form-control ',
                                            'placeholder' => __('Enter description'),
                                            'disabled',
                                        ]); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="mb-3 btn-flt float-end">
                                <?php echo Html::link(route('service-category.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

                                
                            </div>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\source\repos\Black_dsn\resources\views/back/service-category/view.blade.php ENDPATH**/ ?>