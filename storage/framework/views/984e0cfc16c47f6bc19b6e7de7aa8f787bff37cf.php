<form class="form bravo-form-register" method="post">
    <?php echo csrf_field(); ?>
    <form method="post" action="#">
        <div class="form-group">
            <div class="btn-box row">
                
                    <input class="checked" style="display: none" type="radio" name="type" id="checkbox1" value="candidate" checked/>
                    
                
                
                    <input class="checked"style="display: none" type="radio" name="type" id="checkbox2" value="employer"/>
                    
                
            </div>
        </div>

        <div class="form-group">
            <label><?php echo e(__('Email address')); ?></label>
            <input type="email" name="email" placeholder="<?php echo e(__('Email address')); ?>" required>
            <span class="invalid-feedback error error-email"></span>
        </div>

        <div class="form-group">
            <label><?php echo e(__("Password")); ?></label>
            <input id="password-field" type="password" name="password" value="" placeholder="<?php echo e(__("Password")); ?>">
            <span class="invalid-feedback error error-password"></span>
        </div>

        <div class="form-group">
            <label><?php echo e(__("No HP")); ?></label>
            <input id="password-field" type="text" name="phone" value="" placeholder="<?php echo e(__("Phone Number")); ?>">
            <span class="invalid-feedback error error-password"></span>
        </div>

        <?php if(setting_item("recaptcha_enable")): ?>
            <div class="form-group">
                <?php echo e(recaptcha_field($captcha_action ?? 'register')); ?>

                <span class="invalid-feedback error error-recaptcha"></span>
            </div>
        <?php endif; ?>

        <div class="form-group">
            <button class="theme-btn btn-style-one " type="submit" name="Register"><?php echo e(__('Sign Up')); ?>

                <span class="spinner-grow spinner-grow-sm icon-loading" role="status" aria-hidden="true"></span>
            </button>
        </div>
    </form>
    <?php if(setting_item('facebook_enable') or setting_item('google_enable') or setting_item('twitter_enable')): ?>
        <div class="bottom-box">
            <div class="divider"><span>or</span></div>
            <div class="btn-box row">
                <?php if(setting_item('facebook_enable')): ?>
                    <div class="col-lg-6 col-md-12">
                        <a href="<?php echo e(url('/social-login/facebook')); ?>" class="theme-btn social-btn-two facebook-btn btn_login_fb_link"><i class="fab fa-facebook-f"></i><?php echo e(__('Facebook')); ?></a>
                    </div>
                <?php endif; ?>
                <?php if(setting_item('google_enable')): ?>
                    <div class="col-lg-6 col-md-12">
                        <a href="<?php echo e(url('social-login/google')); ?>" class="theme-btn social-btn-two google-btn btn_login_gg_link"><i class="fab fa-google"></i><?php echo e(__('Google')); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</form>
<?php /**PATH /Users/macbook/Sites/localhost/superio200/modules/Layout/auth/register-form.blade.php ENDPATH**/ ?>