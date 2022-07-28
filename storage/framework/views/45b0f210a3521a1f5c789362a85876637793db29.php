<?php if(!empty($list_item)): ?>
<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="container-fluid">
        <!-- Sec Title -->
        <div class="sec-title text-center">
            <h2><?php echo e($title ?? ''); ?></h2>
            <div class="text"><?php echo e($sub_title ?? ''); ?></div>
        </div>

        <div class="carousel-outer wow fadeInUp">

            <!-- Testimonial Carousel -->
            <div class="testimonial-carousel owl-carousel owl-theme">

                <?php $__currentLoopData = $list_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!--Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <h4 class="title"><?php echo e($item['title'] ?? ''); ?></h4>
                        <div class="text"><?php echo e($item['desc'] ?? ''); ?></div>
                        <div class="info-box">
                            <div class="thumb"><img src="<?php echo e(get_file_url($item['avatar'])); ?>" alt="<?php echo e($item['info_name']); ?>"></div>
                            <h4 class="name"><?php echo e($item['info_name'] ?? ''); ?></h4>
                            <span class="designation"><?php echo e($item['position'] ?? ''); ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Section -->
<?php endif; ?>
<?php /**PATH /home/forkomdi/jobs.ciptawiratirta.com/modules/Template/Views/frontend/blocks/testimonial/style_2.blade.php ENDPATH**/ ?>