
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
                                aria-labelledby="landing-home-about-us-setting">
                                <?php echo Form::open([
                                    'route' => ['landing.home-about-us.store'],
                                    'method' => 'Post',
                                    'id' => 'froentend-form',
                                    'enctype' => 'multipart/form-data',
                                    'data-validate',
                                    'no-validate',
                                ]); ?>

                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <h5 class="mb-0"><?php echo e(__('Home About Us Setting')); ?></h5>
                                        </div>
                                        <div class="col-lg-4 d-flex justify-content-end">
                                            <div class="form-switch custom-switch-v1 d-inline-block">
                                                <?php echo Form::checkbox(
                                                    'home_about_us_setting_enable',
                                                    null,
                                                    Utility::getsettings('home_about_us_setting_enable') == 'on' ? true : false,
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

                                                <?php echo Form::text('title', Utility::getsettings('landing.home.about-us.title'), [
                                                    'class' => 'form-control',
                                                    'placeholder' => __('Enter home title name'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('sub-title', __('Home Sub-Title Name'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::text('sub-title', Utility::getsettings('landing.home.about-us.sub-title'), [
                                                    'class' => 'form-control',
                                                    'placeholder' => __('Enter home title name'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('sub-title_2', __('Home Title_3 Name'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::text('sub-title_2', Utility::getsettings('landing.home.about-us.sub-title_2'), [
                                                    'class' => 'form-control',
                                                    'placeholder' => __('Enter home title name'),
                                                ]); ?>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('cover', __('cover'), ['class' => 'form-label'])); ?> *
                                                <?php echo Form::file('cover', ['class' => 'form-control', 'required' => 'required']); ?>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('background', __('background'), ['class' => 'form-label'])); ?> *
                                                <?php echo Form::file('background', ['class' => 'form-control', 'required' => 'required']); ?>

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo e(Form::label('Home About Us Description', __('home about us description'), ['class' => 'form-label'])); ?>

                                                <?php echo Form::textarea('home-about-us-description', Utility::getsettings('landing.home.about-us.description'), [
                                                    'class' => 'form-control',
                                                    'rows' => '3',
                                                    'placeholder' => __('Enter home description'),
                                                ]); ?>

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

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Black_dsn\resources\views/back/landing-page/home-about-us-setting.blade.php ENDPATH**/ ?>