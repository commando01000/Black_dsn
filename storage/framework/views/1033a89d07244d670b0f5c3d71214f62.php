

<?php $__env->startSection('title', __('Blogs')); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Blogs')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item active"><?php echo e(__('Blogs')); ?></li>
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
                            <h5> <?php echo e(__('Edit Blog')); ?></h5>
                        </div>
                        <?php echo Form::model($blog, [
                            'route' => ['blog.update', $blog->id],
                            'method' => 'Patch',
                            'class' => 'form-horizontal',
                            'data-validate',
                            'enctype' => 'multipart/form-data',
                        ]); ?>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('title', __('Title'), ['class' => 'form-label'])); ?> *
                                        <?php echo Form::text('title', $blog->title, [
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
                                                $categoryName = $blog->category->name ?? 'Default Category';
                                            ?>
                                            <?php echo Form::text('category_name', $categoryName, ['class' => 'form-control', 'disabled']); ?>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('short_description', __('Short Description'), ['class' => 'form-label'])); ?>

                                        *
                                        <?php echo Form::textarea('short_description', null, [
                                            'class' => 'form-control ',
                                            'disabled',
                                        ]); ?>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('normal_description', __('Normal Description'), ['class' => 'form-label'])); ?>

                                        *
                                        <?php echo Form::textarea('normal_description', null, [
                                            'class' => 'form-control ',
                                            'disabled',
                                        ]); ?>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('description', __('Description'), ['class' => 'form-label'])); ?> *
                                        <?php

                                        $var = html_entity_decode($blog->description);

                                        echo $var;

                                        ?>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="mb-3 btn-flt float-end">
                                <?php echo Html::link(route('blog.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

                                
                            </div>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Black_dsn\resources\views/back/blog/view.blade.php ENDPATH**/ ?>