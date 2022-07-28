<!-- Other Options -->
<div class="other-options">
    <div class="social-share">
        <h5><?php echo e(__("Share this job")); ?></h5>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e($row->getDetailUrl()); ?>&amp;title=<?php echo e($translation->title); ?>" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i> <?php echo e(__("Facebook")); ?></a>
        <a href="https://twitter.com/share?url=<?php echo e($row->getDetailUrl()); ?>&amp;title=<?php echo e($translation->title); ?>" target="_blank" class="twitter"><i class="fab fa-twitter"></i> <?php echo e(__("Twitter")); ?></a>
        <a href="http://pinterest.com/pin/create/button/?url=<?php echo e($row->getDetailUrl()); ?>&description=<?php echo e($translation->title); ?>" target="_blank" class="google"><i class="fab fa-pinterest"></i> <?php echo e(__("Pinterest")); ?></a>
    </div>
</div>
<?php /**PATH /Users/macbook/GitHub/superio200/modules/Job/Views/frontend/layouts/details/social-share.blade.php ENDPATH**/ ?>