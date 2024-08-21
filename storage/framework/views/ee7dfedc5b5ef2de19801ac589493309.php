
<?php $__env->startSection('title', 'Create Email'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Create Email')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('emails.index')); ?>"><?php echo e(__('Email')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Create Email')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-6 col-lg-8 col-sm-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h5><?php echo e(__('Create Email')); ?></h5>
                    <?php echo Form::open([
                        'route' => 'emails.store',
                        'method' => 'Post',
                        'data-validate',
                    ]); ?>

                </div>
                <div class="card-body">
                    <div class="form-group">
                        <?php echo e(Form::label('name', __('Recipient Name'), ['class' => 'form-label'])); ?> *
                        <?php echo Form::text('name', null, [
                            'placeholder' => __('Enter recipient name'),
                            'class' => 'form-control',
                            'required',
                        ]); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('email', __('Recipient Email'), ['class' => 'form-label'])); ?> *
                        <?php echo Form::email('email', null, [
                            'placeholder' => __('Enter recipient email'),
                            'class' => 'form-control',
                            'required',
                        ]); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('subject', __('Subject'), ['class' => 'form-label'])); ?> *
                        <?php echo Form::text('subject', null, [
                            'placeholder' => __('Enter email subject'),
                            'class' => 'form-control',
                            'required',
                        ]); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('message', __('Message'), ['class' => 'form-label'])); ?> *
                        <?php echo Form::textarea('message', null, [
                            'placeholder' => __('Enter email message'),
                            'class' => 'form-control',
                            'required',
                        ]); ?>

                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-end">
                        <?php echo Html::link(route('emails.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

                        <?php echo e(Form::button(__('Save & Send'), ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

                    </div>
                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('assets/js/plugins/choices.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/ckeditor/ckeditor.js')); ?>"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var genericExamples = document.querySelectorAll('[data-trigger]');
            for (i = 0; i < genericExamples.length; ++i) {
                var element = genericExamples[i];
                new Choices(element, {
                    placeholderValue: 'This is a placeholder set in the config',
                    searchPlaceholderValue: 'This is a search placeholder',
                });
            }

            // Initialize CKEditor for the 'message' textarea
            CKEDITOR.replace('message', {
                removePlugins: 'cloudservices',
                filebrowserUploadUrl: "<?php echo e(route('ckeditor.upload', ['_token' => csrf_token()])); ?>",
                filebrowserUploadMethod: 'form',
                on: {
                    instanceReady: function() {
                        // This will remove the red warning message
                        var warning = document.querySelector('.cke_notifications_area');
                        console.log(warning);

                        if (warning) {
                            warning.style.display = 'none';
                        }
                    }
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Black_dsn\resources\views/back/emails/create.blade.php ENDPATH**/ ?>