<?php if(!empty($list_item)): ?>
    <section class="testimonial-section style-two alternate" <?php if(!empty($banner_image)): ?> style="background-image: url(<?php echo e($banner_image_url); ?>);" <?php endif; ?>>
        <div class="auto-container">
            <div class="sec-title text-center light">
                <h2><?php echo e($title ?? ''); ?></h2>
                <div class="text"><?php echo e($sub_title ?? ''); ?></div>
            </div>
            <div class="carousel-outer wow fadeInUp">
                <div class="testimonial-carousel-three owl-carousel owl-theme default-dots light">
                    <?php $__currentLoopData = $list_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<?php endif; ?>
<?php /**PATH /home/forkomdi/ciptawiratirta.com/modules/Template/Views/frontend/blocks/testimonial/style_6.blade.php ENDPATH**/ ?>