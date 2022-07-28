<style>
    /* ----- CSS ----- */
    #popup {
        display: inline-block;
        opacity: 0;
        position: fixed;
        top: 20%;
        left: 50%;
        /* top: 0;
        left: 0; */
        /* width: 100%; */
        height: 100%;
        z-index:99;
        padding: 1em;
        transform: translateX(-50%);
        background: #fff;
        border: 1px solid #888;
        box-shadow: 1px 1px .5em 0 rgba(0, 0, 0, .5);
        transition: opacity .3s ease-in-out;
    }

    #popup.hidden {
        display: none;
    }

    #popup.fade-in {
        opacity: 1;
    }
</style>
<section class="banner-section-nine"
    style="background-image: url(<?php if(!empty($banner_image)): ?> <?php echo e($banner_image_url); ?> <?php endif; ?>)">
    <div class="auto-container">
        <div class="cotnent-box">
            <div class="title-box wow fadeInUp" data-wow-delay='300ms'>
                <h3><?php echo $title; ?></h3>
                <div class="text"><?php echo e($sub_title); ?></div>
            </div>
            <div id="popup" class="hidden">
                <div class="img">
                    
                    <img src="popup.png" width="95%" height="75%" />
                </div>
            </div>
            <!-- Job Search Form -->
            
            <!-- Job Search Form -->

            <!-- Fun Fact Section -->
            <?php if(!empty($list_counter)): ?>
                <div class="fun-fact-section">
                    <div class="row">
                        <!--Column-->
                        <?php $__currentLoopData = $list_counter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $counter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                                <div class="count-box"><span class="count-text" data-speed="3000"
                                        data-stop="<?php echo e($counter['title']); ?>">0</span></div>
                                <h4 class="counter-title"><?php echo e($counter['sub_title']); ?></h4>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>
            <!-- Fun Fact Section -->
        </div>
    </div>
</section>
<script type='text/javascript'>
    /* ----- JavaScript ----- */
    window.onload = function() {
        /* Cache the popup. */
        var popup = document.getElementById("popup");

        /* Show the popup. */
        popup.classList.remove("hidden");

        /* Fade the popup in */
        setTimeout(() => popup.classList.add("fade-in"));

        /* Close the popup when a city is selected. */
        document.getElementById("popup").onclick = function() {
            /* Fade the popup out */
            popup.classList.remove("fade-in");

            /* Hide the popup. */
            setTimeout(() => popup.classList.add("hidden"), 300);
            window.location.href = "job";
        };
    };
</script>
<?php /**PATH /Users/macbook/GitHub/superio200/modules/Template/Views/frontend/blocks/hero-banner/style_9.blade.php ENDPATH**/ ?>