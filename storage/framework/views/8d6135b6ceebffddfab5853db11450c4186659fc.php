    <?php
        $candidate = $row->candidate;
    ?>
    <div class="row">
        

        

        <div class="form-group">
            <label for="education_level"><?php echo e(__("Kantor CWT Mendaftar")); ?></label>
            <select class="form-control" id="education_level" name="education_level">
                <option value="" <?php if(old('education_level',@$candidate->education_level) == ''): ?> selected <?php endif; ?> ><?php echo e(__("Select")); ?></option>
                <option value="certificate" <?php if(old('education_level',@$candidate->education_level) == 'Jakarta'): ?> selected <?php endif; ?> ><?php echo e(__("Jakarta")); ?></option>
                <option value="diploma" <?php if(old('education_level',@$candidate->education_level) == 'Bali'): ?> selected <?php endif; ?> ><?php echo e(__("Bali")); ?></option>
                <option value="associate" <?php if(old('education_level',@$candidate->education_level) == 'Yogyakarta'): ?> selected <?php endif; ?> ><?php echo e(__("Yogyakarta")); ?></option>
                <option value="bachelor" <?php if(old('education_level',@$candidate->education_level) == 'Surabaya'): ?> selected <?php endif; ?> ><?php echo e(__("Surabaya")); ?></option>
                <option value="master" <?php if(old('education_level',@$candidate->education_level) == 'Bandung'): ?> selected <?php endif; ?> ><?php echo e(__("Bandung")); ?></option>
                
            </select>
        </div>

        <div class="form-group">
            <label for="gender"><?php echo e(__('Gender')); ?></label>
            <select class="form-control" id="gender" name="gender">
                <option value="" <?php if(old('gender', @$candidate->gender) == ''): ?> selected <?php endif; ?>>
                    <?php echo e(__('Select')); ?></option>
                <option value="male" <?php if(old('gender', @$candidate->gender) == 'male'): ?> selected <?php endif; ?>>
                    <?php echo e(__('Male')); ?></option>
                <option value="female" <?php if(old('gender', @$candidate->gender) == 'female'): ?> selected <?php endif; ?>>
                    <?php echo e(__('Female')); ?></option>
            </select>
        </div>

        
    </div>



<?php /**PATH /Users/macbook/Sites/localhost/superio200/modules/Candidate/Views/admin/candidate/form.blade.php ENDPATH**/ ?>