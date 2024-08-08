
<?php $__env->startSection('title', __('Landing Page')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('Home')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), ['']); ?></li>
            <li class="breadcrumb-item"><?php echo e(__('Home')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-xl-3">
                    <div class="card sticky-top">
                        <div class="list-group list-group-flush" id="useradd-sidenav">
                            <?php echo $__env->make('back.landing-page.landing-page-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="card">
                            <div class="tab-pane fade show active" id="home-setting" role="tabpanel"
                                aria-labelledby="landing-services-what-we-do-setting">
                                <?php echo Form::open([
                                    'route' => ['landing.services-what-we-do.store'],
                                    'method' => 'Post',
                                    'id' => 'froentend-form',
                                    'enctype' => 'multipart/form-data',
                                    'data-validate',
                                    'no-validate',
                                ]); ?>

                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <h5 class="mb-0"><?php echo e(__('Services What We Do Setting')); ?></h5>
                                        </div>
                                        <div class="col-lg-4 d-flex justify-content-end">
                                            <div class="form-switch custom-switch-v1 d-inline-block">
                                                <?php echo Form::checkbox(
                                                    'services_what-we-do-setting_enable',
                                                    null,
                                                    Utility::getsettings('services_what-we-do-setting_enable') == 'on' ? true : false,
                                                    [
                                                        'class' => 'custom-control custom-switch form-check-input input-primary',
                                                        'id' => 'homeSettingEnableBtn',
                                                        'data-onstyle' => 'primary',
                                                        'data-toggle' => 'switchbutton',
                                                    ],
                                                ); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('title', __('Home Title Name'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::textarea('title', Utility::getsettings('services.what.we.do.title'), [
                                                    'class' => 'form-control',
                                                    'rows' => '3',
                                                    'placeholder' => __('Enter home title name'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('background image', __('background image'), ['class' => 'form-label'])); ?>

                                                *
                                                <?php echo Form::file('background_1', ['class' => 'form-control', 'required' => 'required']); ?>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('background image', __('background image'), ['class' => 'form-label'])); ?>

                                                *
                                                <?php echo Form::file('background_2', ['class' => 'form-control', 'required' => 'required']); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('Service Short Description', __('Sevices Short Description'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::textarea(
                                                    'services_what-we-do-short-description',
                                                    Utility::getsettings('services.what.we.do.short-description'),
                                                    [
                                                        'class' => 'form-control',
                                                        'rows' => '3',
                                                        'placeholder' => __('Enter service short description'),
                                                    ],
                                                ); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('Service Main Description', __('Sevices Main Description'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::textarea(
                                                    'services_what-we-do-main-description',
                                                    Utility::getsettings('services.what.we.do.main-description'),
                                                    [
                                                        'class' => 'form-control',
                                                        'rows' => '3',
                                                        'placeholder' => __('Enter service main description'),
                                                    ],
                                                ); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('Service Sub Description', __('Sevices Sub Description'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::textarea(
                                                    'services_what-we-do-sub-description',
                                                    Utility::getsettings('services.what.we.do.sub-description'),
                                                    [
                                                        'class' => 'form-control',
                                                        'rows' => '3',
                                                        'placeholder' => __('Enter service sub description'),
                                                    ],
                                                ); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-end">
                                        <?php echo e(Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

                                    </div>
                                </div>
                                <?php echo Form::close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Black_dsn\resources\views/back/landing-page/services-what-we-do-setting.blade.php ENDPATH**/ ?>