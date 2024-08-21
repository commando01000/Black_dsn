<?php echo Form::open(['route' => 'test.send.mail', 'method' => 'POST']); ?>

<div class="modal-body">
    <div class="row">
        <div class="form-group col-12 ">
            <?php echo e(Form::label('email', __('Email'), ['class' => 'form-label'])); ?>

            <?php echo Form::text('email', null, ['class' => 'form-control', 'placeholder' => __('Enter email'), 'required']); ?>

        </div>
    </div>
</div>
<div class="modal-footer">
    <div class="float-end">
        <?php echo e(Form::button(__('Cancel'), ['class' => 'btn btn-secondary', 'data-bs-dismiss' => 'modal'])); ?>

        <?php echo e(Form::button(__('Send'), ['type' => 'submit','class' => 'btn btn-primary', 'id' => 'save-btn'])); ?>

    </div>
</div>
<?php echo Form::close(); ?>

<?php /**PATH G:\xampp\htdocs\Black_dsn\resources\views/back/settings/test-mail.blade.php ENDPATH**/ ?>