<?php $__env->startSection('content'); ?>
    <div class="b-container">
        <div class="b-panel">
            <?php echo $content; ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Email::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/forkomdi/ciptawiratirta.com/modules/Job/Views/emails/change-applicants-status.blade.php ENDPATH**/ ?>