<?php if($paginator->hasPages()): ?>
    <ul class="pagination">
        <?php if($paginator->onFirstPage()): ?>
            <li class="disabled">
                <a class="page-link" href="#">
                    <i class="fa fa-angle-left"></i>
                </a>
            </li>
        <?php else: ?>
            <li>
                <a class="page-link" href="<?php echo e($paginator->url(1)); ?>">
                    <i class="fa fa-angle-double-left"></i>
                </a>
            </li>
            <li>
                <a class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>">
                    <i class="fa fa-angle-left"></i>
                </a>
            </li>
        <?php endif; ?>
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <li class="active">
                            <a class="page-link" href="#"><?php echo e($page); ?></a>
                        </li>
                    <?php elseif(($page == $paginator->currentPage() + 1 || $page == $paginator->currentPage() + 2) || $page == $paginator->lastPage()): ?>
                        <li>
                            <a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                        </li>
                    <?php elseif($page == $paginator->lastPage() - 1): ?>
                        <li class="disabled">
                            <span class="page-link text-muted">...</span>
                        </li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($paginator->hasMorePages()): ?>
            <li>
                <a class="page-link" href="<?php echo e($paginator->nextPageUrl()); ?>">
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
            <li>
                <a class="page-link" href="<?php echo e($paginator->url($paginator->lastPage())); ?>">
                    <i class="fa fa-angle-double-right"></i>
                </a>
            </li>
        <?php else: ?>
            <li class="disabled">
                <a class="page-link" href="#">
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        <?php endif; ?>
    </ul>
<?php endif; ?>