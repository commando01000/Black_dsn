
<?php $__env->startSection('title', 'edit Project'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10"><?php echo e(__('edit Design')); ?></h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><?php echo Html::link(route('home'), __('Dashboard'), []); ?></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('design-category.index')); ?>"><?php echo e(__('Design')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(__('Create Design')); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="section-body">
            <div class="m-auto col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5> <?php echo e(__('Create Design')); ?></h5>
                    </div>
                    <?php echo Form::open([
                        'route' => ['designs.update', 'design' => $design->id],
                        'method' => 'PUT',
                        'enctype' => 'multipart/form-data',
                        'data-validate',
                    ]); ?>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group row">

                                    <div class="col-sm-10">
                                        <strong class="d-block"><?php echo e(__('Page Builder')); ?></strong>
                                    </div>
                                    <div class="col-sm-2 form-check form-switch custom-switch-v1">
                                        <div class="form-switch custom-switch-v1 d-inline-block">
                                            <?php echo Form::checkbox('builder', null, $design->builder == 'on' ? true : false, [
                                                'class' => 'custom-control custom-switch form-check-input input-primary',
                                                'id' => 'startViewSettingEnableBtn',
                                                'data-onstyle' => 'primary',
                                                'data-toggle' => 'switchbutton',
                                            ]); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('title', __('Title'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::text('title', $design->title, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter title'),
                                        'required' => 'required',
                                    ]); ?>

                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('Design Creation Date', __('Design Creation Date'), ['class' => 'form-label'])); ?>

                                    <?php echo Form::text('project_date', Utility::date_format($design->created_at), [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter Project Date'),
                                    ]); ?>

                                </div>
                            </div>
                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('project_category', __('Project Category'), ['class' => 'form-label'])); ?>

                                    <select name="category_id" id="" class="form-control" required>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($category->id); ?>"
                                                <?php if($design->design_category == $category->id): ?> <?php echo e('selected'); ?> <?php endif; ?>>
                                                <?php echo e($category->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 p-0">
                                <div class="col-md-12 form_field_outer p-0">
                                    <?php $__currentLoopData = $design->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row form_field_outer_row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control w_90"
                                                    name="details[<?php echo e($index); ?>][category]"
                                                    id="category_<?php echo e($index); ?>" placeholder="Enter category"
                                                    value="<?php echo e(old('details.' . $index . '.category', $detail->advantage)); ?>" />
                                                <?php $__errorArgs = ['details.' . $index . '.category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="text-danger"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control"
                                                    name="details[<?php echo e($index); ?>][number]"
                                                    id="number_<?php echo e($index); ?>" placeholder="Enter number"
                                                    value="<?php echo e(old('details.' . $index . '.number', $detail->design_id)); ?>" />
                                                <?php $__errorArgs = ['details.' . $index . '.number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="text-danger"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <input type="hidden" name="details[<?php echo e($index); ?>][id]"
                                                value="<?php echo e($detail->id); ?>" />
                                            <div class="form-group col-md-2 add_del_btn_outer">

                                                <button class="btn_round remove_node_btn_frm_field">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('images', __('cover'), ['class' => 'form-label'])); ?> *
                                    <?php echo Form::file('cover', ['class' => 'form-control', 'required' => 'required']); ?>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('images', __('image (s)'), ['class' => 'form-label'])); ?> *
                                    <div id="image-upload-container">
                                        <input type="file" name="images[]" class="form-control" required>
                                    </div>
                                    <button type="button" id="add-image-upload" class="btn btn-secondary mt-2">Add More
                                        Images</button>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('description', __('Short Description'), ['class' => 'form-label'])); ?>

                                    *
                                    <?php echo Form::textarea('description', $design->description, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter short description'),
                                        'required' => 'required',
                                    ]); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="mb-3 btn-flt float-end">
                            <?php echo Html::link(route('designs.index'), __('Cancel'), ['class' => 'btn btn-secondary']); ?>

                            <?php echo e(Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary'])); ?>

                        </div>
                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('assets/js/plugins/choices.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/ckeditor/ckeditor.js')); ?>"></script>
    <script>
        CKEDITOR.replace('body', {
            filebrowserUploadUrl: "<?php echo e(route('ckeditor.upload', ['_token' => csrf_token()])); ?>",
            filebrowserUploadMethod: 'form'
        });
        document.addEventListener('DOMContentLoaded', function() {
            var genericExamples = document.querySelectorAll('[data-trigger]');
            for (i = 0; i < genericExamples.length; ++i) {
                var element = genericExamples[i];
                new Choices(element, {
                    placeholderValue: 'This is a placeholder set in the config',
                    searchPlaceholderValue: 'This is a search placeholder',
                });
            }
            $(document).ready(function() {
                // Clone method
                $("body").on("click", ".add_node_btn_frm_field", function(e) {
                    e.preventDefault();
                    var index = $(e.target).closest(".form_field_outer").find(
                            ".form_field_outer_row").length +
                        1;
                    var cloned_el = $(e.target).closest(".form_field_outer_row").clone(true);
                    cloned_el.find("input").val(''); // Clear the values of cloned elements
                    $(e.target).closest(".form_field_outer").append(cloned_el);
                    $(".form_field_outer").find(".remove_node_btn_frm_field:not(:first)").prop(
                        "disabled",
                        false);
                    $(".form_field_outer").find(".remove_node_btn_frm_field").first().prop(
                        "disabled", true);
                    cloned_el.find("input[type='text']").each(function() {
                        var oldId = $(this).attr('id');
                        var newId = oldId.split('_')[0] + '_' + index;
                        $(this).attr('id', newId);
                    });
                });

                // Add new form field row
                $("body").on("click", ".add_new_frm_field_btn", function(e) {
                    e.preventDefault();
                    var index = $(".form_field_outer").find(".form_field_outer_row").length + 1;
                    $(".form_field_outer").append(`
                    <div class="row form_field_outer_row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control w_90" name="details[${index}][advantage]" id="advantage_${index}" placeholder="Enter advantage" />
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="details[${index}][number]" id="number_${index}" placeholder="Enter number" />
                        </div>
                        <input type="hidden" name="details[${index}][id]" />
                        <div class="form-group col-md-2 add_del_btn_outer">
                            <button type="button" class="btn_round add_node_btn_frm_field" title="Copy or clone this row">
                                <i class="fas fa-copy"></i>
                            </button>
                            <button type="button" class="btn_round remove_node_btn_frm_field">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>
                `);
                    $(".form_field_outer").find(".remove_node_btn_frm_field:not(:first)").prop(
                        "disabled",
                        false);
                    $(".form_field_outer").find(".remove_node_btn_frm_field").first().prop(
                        "disabled", true);
                });

                // Remove form field row
                $("body").on("click", ".remove_node_btn_frm_field", function(e) {
                    e.preventDefault();
                    $(this).closest(".form_field_outer_row").remove();
                });
            });
            // handle multiple image input
            document.getElementById('add-image-upload').addEventListener('click', function() {
                var container = document.getElementById('image-upload-container');
                var input = document.createElement('input');
                input.type = 'file';
                input.name = 'images[]';
                input.className = 'form-control mt-2';
                input.required = true;
                container.appendChild(input);
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.back.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/back/design/edit.blade.php ENDPATH**/ ?>