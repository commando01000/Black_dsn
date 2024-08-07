<?php if($paginator->hasPages()): ?>
    <div class="dsn-pagination p-relative d-flex align-items-center">
        
        <?php if($paginator->onFirstPage()): ?>
            <span class="page-numbers disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>" style="display: none;">
                <svg viewbox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="#fff">
                    <path
                        d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z">
                    </path>
                </svg>
                <span class="sm-title-block dsn-heading-title"><?php echo app('translator')->get('pagination.previous'); ?></span>
            </span>
        <?php else: ?>
            <a class="prev page-numbers" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev"
                aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                <svg viewbox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="#fff">
                    <path
                        d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z">
                    </path>
                </svg>
                <span class="sm-title-block dsn-heading-title"><?php echo app('translator')->get('pagination.previous'); ?></span>
            </a>
        <?php endif; ?>

        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_string($element)): ?>
                <span class="page-numbers disabled" aria-disabled="true"><?php echo e($element); ?></span>
            <?php endif; ?>

            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <span class="page-numbers current" aria-current="page">
                            <span class="dsn-numbers dsn-heading-title title-tag">
                                <span class="number"><?php echo e($page); ?></span>
                            </span>
                        </span>
                    <?php else: ?>
                        <a class="page-numbers" href="<?php echo e($url); ?>">
                            <span class="dsn-numbers dsn-heading-title title-tag">
                                <span class="number"><?php echo e($page); ?></span>
                            </span>
                        </a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if($paginator->hasMorePages()): ?>
            <a class="next page-numbers" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"
                aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                <svg viewbox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="#fff">
                    <path
                        d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z">
                    </path>
                </svg>
                <span class="sm-title-block dsn-heading-title"><?php echo app('translator')->get('pagination.next'); ?></span>
            </a>
        <?php else: ?>
            <span class="page-numbers disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                <svg viewbox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="#fff">
                    <path
                        d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z">
                    </path>
                </svg>
                <span class="sm-title-block dsn-heading-title"><?php echo app('translator')->get('pagination.next'); ?></span>
            </span>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH G:\xampp\htdocs\Black_dsn\resources\views/front/pagination/custom-pagination.blade.php ENDPATH**/ ?>