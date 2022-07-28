
<?php $__env->startSection("head"); ?>
    <link href="<?php echo e(asset('dist/frontend/module/gig/css/gig.css?_ver='.config('app.version'))); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="page-title">
        <div class="auto-container">
            <div class="title-outer">
                <h1><?php echo e(__("Seller Dashboard")); ?></h1>
            </div>
        </div>
    </section>
    <section class="ls-section seller-dashboard">
        <div class="auto-container">
            <div class="filters-backdrop"></div>
            <div class="row">
                <!-- Filters Column -->
                <div class="filters-column col-lg-4 col-md-12 col-sm-12">
                    <?php echo $__env->make('Gig::frontend.seller.dashboard.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <!-- Content Column -->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="ls-outer">
                        <button type="button" class="theme-btn btn-style-two toggle-filters"><?php echo e(__("Show Filters")); ?></button>
                        <!-- ls Switcher -->
                        <div class="ls-switcher">
                            <div class="showing-result">
                                <div class="text"><?php echo e(__("Showing :from - :to of :total",["from"=>$rows->firstItem(),"to"=>$rows->lastItem(),"total"=>$rows->total()])); ?></div>
                            </div>

                        </div>
                        <!-- Block Block -->
                        <?php if($rows->count() > 0): ?>
                            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $__env->make('Gig::frontend.seller.dashboard.item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <div class="alert alert-danger">
                                <?php echo e(__("Sorry, but nothing matched your search terms. Please try again with some different keywords.")); ?>

                            </div>
                        <?php endif; ?>
                        <div class="ls-pagination">
                            <?php echo e($rows->appends(request()->query())->links()); ?>

                            <?php if($rows->total() > 0): ?>
                                <span class="count-string"><?php echo e(__("Showing :from - :to of :total",["from"=>$rows->firstItem(),"to"=>$rows->lastItem(),"total"=>$rows->total()])); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/GitHub/superio200/modules/Gig/Views/frontend/seller/dashboard/index.blade.php ENDPATH**/ ?>