<section class="job-section">
    <div class="auto-container wow fadeInUp">
        <div class="sec-title text-center">
            <h2><?php echo e($title); ?></h2>
            <div class="text"><?php echo e($sub_title); ?></div>
        </div>

        <div class="job-carousel owl-carousel owl-theme default-dots">
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $translation = $row->translateOrOrigin(app()->getLocale());
                ?>
                <div class="job-block-three">
                    <div class="inner-box">
                        <div class="content">
                            <?php if($row->company && $company_logo = $row->getThumbnailUrl()): ?>
                                <span class="company-logo">
                                    <img src="<?php echo e($company_logo); ?>" alt="<?php echo e($row->company ? $row->company->name : 'company'); ?>">
                                </span>
                            <?php endif; ?>
                            <h4><a href="<?php echo e($row->getDetailUrl()); ?>"><?php echo e($translation->title); ?></a></h4>
                            <ul class="job-info">
                                <?php if($row->category): ?>
                                    <?php $cat_translation = $row->category->translateOrOrigin(app()->getLocale()) ?>
                                    <li><span class="icon flaticon-briefcase"></span> <?php echo e($cat_translation->name); ?></li>
                                <?php endif; ?>
                                    <?php if($row->location): ?>
                                        <?php $location_translation = $row->location->translateOrOrigin(app()->getLocale()) ?>
                                        <li><span class="icon flaticon-map-locator"></span> <?php echo e($location_translation->name); ?></li>
                                    <?php endif; ?>
                            </ul>

                        </div>
                        <ul class="job-other-info">
                            <?php if($row->jobType): ?>
                                <?php $jobType_translation = $row->jobType->translateOrOrigin(app()->getLocale()) ?>
                                <li class="time"><?php echo e($jobType_translation->name); ?></li>
                            <?php endif; ?>
                            <?php if($row->is_urgent): ?>
                                <li class="required"><?php echo e(__("Urgent")); ?></li>
                            <?php endif; ?>
                        </ul>
                        <button class="bookmark-btn <?php if($row->wishlist): ?> active <?php endif; ?> service-wishlist" data-id="<?php echo e($row->id); ?>" data-type="<?php echo e($row->type); ?>">
                            <img src="<?php echo e(asset('images/loading.gif')); ?>" class="loading-icon" alt="loading" />
                            <span class="flaticon-bookmark"></span>
                        </button>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH /Users/macbook/GitHub/superio200/modules/Job/Views/frontend/layouts/blocks/jobs-list/style_10.blade.php ENDPATH**/ ?>