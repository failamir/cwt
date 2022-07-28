<?php if(!is_api() && empty($footer_null)): ?>
    <!-- Main Footer -->
    <?php
        $footer_style = $row->footer_style ?? '';
        if(empty($footer_style)) $footer_style = setting_item_with_lang('footer_style');
    ?>
    <footer class="main-footer <?php echo e($footer_style); ?> <?php if($footer_style == 'style_1' && empty($is_home)): ?> alternate5 <?php endif; ?>">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section wow fadeInUp">
                
                <div class="row">
                    <div class="big-column col-xl-12 col-lg-12 col-md-12">
                        <div class="head-office">
                            <h3 class="mb-2">Head Office</h3>
                            <ul class="d-flex text-light">
                                <li><a href="#">Jakarta</a></li>
                                <li><a href="#">Bali</a></li>
                                <li><a href="#">Yogyakarta</a></li>
                                <li><a href="#">Surabaya</a></li>
                                <li><a href="#">Bandung</a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>

                <div class="row">
                    <div class="big-column col-xl-12 col-lg-12 col-md-12">
                        <div class="social-links">
                            <?php echo @clean(setting_item_with_lang('footer_socials')); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text">
                    <?php echo @clean(setting_item_with_lang('copyright')); ?>

                </div>
            </div>
        </div>

        <!-- Scroll To Top -->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    </footer>
    <!-- End Main Footer -->
<?php endif; ?>

<style>
    .head-office {
        display: flex;
        flex-direction: column;
        justify-items: center;
        align-items: center;
    }

    .head-office h3 {
        padding-bottom: 32px;
        position: relative;
        font-size: 30px;
        line-height: 1.2em;
        color: #fff;
        font-weight: 500;
    }

    .head-office ul li:not(:last-child) {
        margin-right: 16px;
    }

    .head-office ul li a {
        color: black;
        background: #fefefe;
        padding: 12px 24px;
        border-radius: 8px; 
    }

    .social-links {
        display: flex;
        flex-direction: row;
        justify-items: center;
        justify-content: center;
        align-items: center;
        padding: 32px 0;
    }

    .social-links a i {
        font-size: 18px;
        color: white;
    }

    .main-footer.style_1 .social-links a i {
        font-size: 18px;
        color: #696969;
    }

    .footer-bottom .outer-box {
        display: flex;
        justify-items: center;
    }

    .main-footer .head-office h3 {
        color: white;
    }

    .main-footer.style_1 .head-office h3 {
        color: black;
    }
</style>

<?php echo $__env->make('Layout::parts.login-register-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('Layout::parts.chat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if(Auth::id()): ?>
	<?php echo $__env->make('Media::browser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(!is_candidate() || empty($candidate)): ?>
    <div class="bc-alert-popup">
        <div class="message-box warning"></div>
    </div>
<?php endif; ?>
<link rel="stylesheet" href="<?php echo e(asset('libs/flags/css/flag-icon.min.css')); ?>">

<?php echo \App\Helpers\Assets::css(true); ?>



<script src="<?php echo e(asset('libs/lazy-load/intersection-observer.js')); ?>"></script>
<script async src="<?php echo e(asset('libs/lazy-load/lazyload.min.js')); ?>"></script>
<script>
    // Set the options to make LazyLoad self-initialize
    window.lazyLoadOptions = {
        elements_selector: ".lazy",
        // ... more custom settings?
    };

    // Listen to the initialization event and get the instance of LazyLoad
    window.addEventListener('LazyLoad::Initialized', function (event) {
        window.lazyLoadInstance = event.detail.instance;
    }, false);
</script>
<script src="<?php echo e(asset('libs/jquery-3.6.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('libs/jquery-migrate/jquery-migrate.min.js')); ?>"></script>
<script src="<?php echo e(asset('libs/header.js')); ?>"></script>
<script>
    $(document).on('ready', function () {
        $.superioHeader.init($('#header'));
    });
</script>
<script src="<?php echo e(asset('libs/lodash.min.js')); ?>"></script>
<script src="<?php echo e(asset('libs/vue/vue'.(!env('APP_DEBUG') ? '.min':'').'.js')); ?>"></script>
<script src="<?php echo e(asset('libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('libs/bootbox/bootbox.min.js')); ?>"></script>

<?php if(Auth::id()): ?>
	<script src="<?php echo e(asset('module/media/js/browser.js?_ver='.config('app.asset_version'))); ?>"></script>
<?php endif; ?>


<script src="<?php echo e(asset('js/functions.js?_ver='.config('app.asset_version'))); ?>"></script>

<script src="<?php echo e(asset('module/superio/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('module/superio/js/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('module/superio/js/chosen.min.js')); ?>"></script>
<script src="<?php echo e(asset('module/superio/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('module/superio/js/jquery.fancybox.js')); ?>"></script>
<script src="<?php echo e(asset('module/superio/js/jquery.modal.min.js')); ?>"></script>
<script src="<?php echo e(asset('module/superio/js/mmenu.polyfills.js')); ?>"></script>
<script src="<?php echo e(asset('module/superio/js/mmenu.js')); ?>"></script>
<script src="<?php echo e(asset('module/superio/js/appear.js')); ?>"></script>
<script src="<?php echo e(asset('module/superio/js/anm.min.js')); ?>"></script>
<script src="<?php echo e(asset('module/superio/js/owl.js')); ?>"></script>
<script src="<?php echo e(asset('module/superio/js/wow.js')); ?>"></script>
<script src="<?php echo e(asset('module/superio/js/script.js?_ver='.config('app.asset_version'))); ?>"></script>

<script src="<?php echo e(asset('libs/pusher.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/home.js?_ver='.config('app.asset_version'))); ?>"></script>

<?php if(!empty($is_user_page)): ?>
	<script src="<?php echo e(asset('module/user/js/user.js?_ver='.config('app.asset_version'))); ?>"></script>
<?php endif; ?>
<?php if(setting_item('cookie_agreement_enable')==1 and request()->cookie('booking_cookie_agreement_enable') !=1 and !is_api()  and !isset($_COOKIE['booking_cookie_agreement_enable'])): ?>
	<div class="booking_cookie_agreement p-3 fixed-bottom">
		<div class="container d-flex ">
            <div class="content-cookie"><?php echo setting_item_with_lang('cookie_agreement_content'); ?></div>
            <button class="btn save-cookie"><?php echo setting_item_with_lang('cookie_agreement_button_text'); ?></button>
        </div>
	</div>
	<script>
        var save_cookie_url = '<?php echo e(route('core.cookie.check')); ?>';
	</script>
	<script src="<?php echo e(asset('js/cookie.js?_ver='.config('app.asset_version'))); ?>"></script>
<?php endif; ?>

<?php echo \App\Helpers\Assets::js(true); ?>


<?php echo $__env->yieldContent('footer'); ?>

<?php \App\Helpers\ReCaptchaEngine::scripts() ?>
<?php /**PATH /Users/macbook/Sites/localhost/superio200/modules/Layout/parts/footer.blade.php ENDPATH**/ ?>