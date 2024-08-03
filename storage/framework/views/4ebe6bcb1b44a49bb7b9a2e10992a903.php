

<?php $__env->startSection('title', __('Blogs')); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Projects')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item active"><?php echo e(__('Design')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <main class="container">
        <div class="row">
            <div class="section-body">
                <div class="m-auto col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5> <?php echo e(__('Edit Design')); ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('title', __('Title'), ['class' => 'form-label'])); ?> *
                                        <?php echo Form::text('title', $design->title, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]); ?>

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <?php echo e(Form::label('category_id', __('Category'), ['class' => 'form-label'])); ?>

                                            <?php
                                                $categoryName = $design->category->name ?? 'Default Category';
                                            ?>
                                            <?php echo Form::text('category_name', $categoryName, ['class' => 'form-control', 'disabled']); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('body', __('Description'), ['class' => 'form-label'])); ?> *
                                        <?php echo Form::textarea('short description', $design->description, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]); ?>

                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <?php echo e(Form::label('advantage', __('Details'), ['class' => 'form-label'])); ?> *
                                    <?php $__currentLoopData = $design->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="form-group">
                                            <?php echo Form::text('advantage', $detail->advantage, [
                                                'class' => 'form-control',
                                                'disabled',
                                            ]); ?>

                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>


                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('project_date', __('Project Date'), ['class' => 'form-label'])); ?> *
                                        <?php echo Form::text('project_date', Utility::date_format($design->created_at), [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="mb-3 btn-flt float-end">
                                <?php echo Html::link(route('designs.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

                                
                            </div>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Black_dsn\resources\views/back/design/view.blade.php ENDPATH**/ ?>