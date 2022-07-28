
<?php $__env->startSection('title','All Applicants'); ?>
<?php $__env->startSection('content'); ?>

<?php 
$appliedJob = $data;
// var_dump($appliedJob);
// var_dump($user);
// die;
?>

    <div class="card">
    <div class="card-header">
        
        Update Applicants Job
    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route('job.admin.applicants.applicantsUpdate')); ?>" enctype="multipart/form-data">
            <?php echo method_field('POST'); ?>
            <?php echo csrf_field(); ?>
            <input class="form-control " type="hidden" name="id" id="id" value="<?php echo e(old('remarks', $appliedJob->id)); ?>">
            <div class="form-group">
                <label for="source">Remarks</label>
                <input class="form-control " type="text" name="remarks" id="remarks" value="<?php echo e(old('remarks', $appliedJob->remarks)); ?>">
            </div>
            <div class="form-group">
                <label for="source">Email</label>
                <input class="form-control " type="text" name="email" id="email" value="<?php echo e(old('email', $user->email)); ?>">
            </div>
            <div class="form-group">
                <label for="crew_code">Crew Code</label>
                <input class="form-control " type="text" name="crew_code" id="crew_code" value="<?php echo e(old('crew_code',  $appliedJob->crew_code)); ?>">
                
                
            </div>

             <div class="form-group">
                <label for="date_of_entry">Tanggal Melamar</label>
                <input class="form-control date " type="text" name="date_of_entry" id="date_of_entry" value="<?php echo e(old('created_at', $appliedJob->created_at)); ?>">
                
                
            </div>
           <div class="form-group">
                <label for="source">Source</label>
                <input class="form-control " type="text" name="source" id="source" value="<?php echo e(old('source', $appliedJob->source)); ?>">
            </div>
            <div class="form-group">
                <label for="source">Last Name</label>
                <input class="form-control " type="text" name="last_name" id="last_name" value="<?php echo e(old('last_name', $user->last_name)); ?>">
            </div>
            <div class="form-group">
                <label for="source">First Name</label>
                <input class="form-control " type="text" name="first_name" id="first_name" value="<?php echo e(old('first_name', $user->first_name)); ?>">
            </div>
            <div class="form-group">
                <label for="source">Applied Position</label>
                <input class="form-control " type="text" name="applied_position" id="applied_position" value="<?php echo e(old('applied_position', $job->title)); ?>">
            </div>
            <div class="form-group">
                <label for="cid">Department</label>
                <select class="form-control select2" name="department" id="department">
                        <option value="Deck" ><?php echo e('Deck'); ?></option>
                        <option value="Engine" checked="true"><?php echo e('Engine'); ?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="rating_able">Gender</label>
                <select class="form-control select2" name="gender" id="gender">
                        <option value="M" ><?php echo e('Male'); ?></option>
                        <option value="F" checked="true"><?php echo e('Female'); ?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="source">D.O.B</label>
                <input class="form-control " type="date" name="d_o_b" id="d_o_b" value="<?php echo e(old('d_o_b', $appliedJob->d_o_b)); ?>">
            </div>
            <div class="form-group">
                <label for="source">Age</label>
                <input class="form-control " type="text" name="age" id="age" value="<?php echo e(old('age', $appliedJob->age)); ?>">
            </div>
            
            <div class="form-group">
                <label for="cid">vaccination yf</label>
                <select class="form-control select2" name="vaccination_yf" id="vaccination_yf">
                        <option value="Y" ><?php echo e('Y'); ?></option>
                        <option value="N" checked="true"><?php echo e('N'); ?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="cid">vaccination_covid_19</label>
                <select class="form-control select2" name="vaccination_covid_19" id="vaccination_covid_19">
                        <option value="Y" ><?php echo e('Y'); ?></option>
                        <option value="1st dose" ><?php echo e('1st dose'); ?></option>
                        <option value="2nd dose" ><?php echo e('2nd dose'); ?></option>
                        <option value="N" checked="true"><?php echo e('N'); ?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="cid">CID</label>
                <select class="form-control select2" name="cid" id="cid">
                        <option value="Y" ><?php echo e('Y'); ?></option>
                        <option value="N" checked="true"><?php echo e('N'); ?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="coc">COC</label>
                <select class="form-control select2" name="coc" id="coc">
                        <option value="Y" ><?php echo e('Y'); ?></option>
                        <option value="N" checked="true"><?php echo e('N'); ?></option>
                        <option value="Class I" ><?php echo e('Class I'); ?></option>
                        <option value="Class II" ><?php echo e('Class II'); ?></option>
                        <option value="Class III" ><?php echo e('Class III'); ?></option>
                        <option value="Class IV" ><?php echo e('Class IV'); ?></option>
                        <option value="Class V" ><?php echo e('Class V'); ?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="rating_able">Rating_Able</label>
                <select class="form-control select2" name="rating_able" id="rating_able">
                        <option value="Y" ><?php echo e('Y'); ?></option>
                        <option value="N" checked="true"><?php echo e('N'); ?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="rating_able">CCM</label>
                <select class="form-control select2" name="ccm" id="ccm">
                        <option value="Y" ><?php echo e('Y'); ?></option>
                        <option value="N" checked="true"><?php echo e('N'); ?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="source">Experience</label>
                
                <textarea class="form-control " name="experience" id="experience" cols="30" rows="10">
                    <?php echo old('experience', $user->bio); ?>

                </textarea>
            </div>
            <div class="form-group">
                <label for="rating_able">Application Form</label>
                <select class="form-control select2" name="application_form" id="application_form">
                        <option value="Y" ><?php echo e('Y'); ?></option>
                        <option value="N" checked="true"><?php echo e('N'); ?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="source">Contact No</label>
                <input class="form-control " type="text" name="contact_no" id="contact_no" value="<?php echo e(old('contact_no', $user->phone)); ?>">
            </div>
            <div class="form-group">
                <label for="source">interview_date</label>
                <input class="form-control " type="date" name="interview_date" id="interview_date" value="<?php echo e(old('interview_date', $appliedJob->interview_date)); ?>">
            </div>
            <div class="form-group">
                <label for="source">interview_by</label>
                <input class="form-control " type="text" name="interview_by" id="interview_by" value="<?php echo e(old('interview_by', $appliedJob->interview_by)); ?>">
            </div>
            
            <div class="form-group">
                <label for="cid">interview_result</label>
                <select class="form-control select2" name="interview_result" id="interview_result">
                        <option value="Passed" ><?php echo e('Passed'); ?></option>
                        <option value="Failed" checked="true"><?php echo e('Failed'); ?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="source">Approved As</label>
                <input class="form-control " type="text" name="approved_as" id="approved_as" value="<?php echo e(old('approved_as', $appliedJob->approved_as)); ?>">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control select2" name="status" id="status">
                        <option value="approved" ><?php echo e('approved'); ?></option>
                        <option value="rejected" checked="true"><?php echo e('rejected'); ?></option>
                </select>
            </div>
            
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Sites/localhost/superio200/modules/Job/Views/admin/job/edit-applicants.blade.php ENDPATH**/ ?>