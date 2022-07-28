<section class="jobseeker-section">
    <div class="outer-box">
        <div class="image-column">
            <?php if(!empty($bg_image_url)): ?>
                <figure class="image"><img src="<?php echo e($bg_image_url); ?>" alt=""></figure>
            <?php endif; ?>
        </div>
        <div class="content-column">
            <div class="inner-column wow fadeInUp">
                <div class="sec-title">
                    <h2><?php echo e($title); ?></h2>
                    <div class="text"><?php echo e($sub_title); ?></div>
                    <a href="<?php echo e($url_search); ?>" class="theme-btn btn-style-one"><?php echo e($link_search); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /home/forkomdi/ciptawiratirta.com/modules/Template/Views/frontend/blocks/call-to-action/style_5.blade.php ENDPATH**/ ?>