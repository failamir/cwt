@extends('admin.layouts.app')
@section('title','All Applicants')
@section('content')
{{-- hai --}}
<?php 
$appliedJob = $data;
// var_dump($appliedJob);
// var_dump($user);
// die;
?>
{{-- @dump($data) --}}
    <div class="card">
    <div class="card-header">
        {{-- {{ trans('global.edit') }} {{ trans('cruds.appliedJob.title_singular') }} --}}
        Update Applicants Job
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('job.admin.applicants.applicantsUpdate') }}" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <input class="form-control " type="hidden" name="id" id="id" value="{{ old('remarks', $appliedJob->id) }}">
            <div class="form-group">
                <label for="source">Remarks</label>
                <input class="form-control " type="text" name="remarks" id="remarks" value="{{ old('remarks', $appliedJob->remarks) }}">
            </div>
            <div class="form-group">
                <label for="source">Email</label>
                <input class="form-control " type="text" name="email" id="email" value="{{ old('email', $user->email) }}">
            </div>
            <div class="form-group">
                <label for="crew_code">Crew Code</label>
                <input class="form-control " type="text" name="crew_code" id="crew_code" value="{{ old('crew_code',  $appliedJob->crew_code) }}">
                {{-- @if($errors->has('crew_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('crew_code') }}
                    </div>
                @endif --}}
                {{-- <span class="help-block">{{ trans('cruds.appliedJob.fields.crew_code_helper') }}</span> --}}
            </div>

             <div class="form-group">
                <label for="date_of_entry">Tanggal Melamar</label>
                <input class="form-control date " type="text" name="date_of_entry" id="date_of_entry" value="{{ old('created_at', $appliedJob->created_at) }}">
                {{-- @if($errors->has('date_of_entry'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_entry') }}
                    </div>
                @endif --}}
                {{-- <span class="help-block">{{ trans('cruds.appliedJob.fields.date_of_entry_helper') }}</span> --}}
            </div>
           <div class="form-group">
                <label for="source">Source</label>
                <input class="form-control " type="text" name="source" id="source" value="{{ old('source', $appliedJob->source) }}">
            </div>
            <div class="form-group">
                <label for="source">Last Name</label>
                <input class="form-control " type="text" name="last_name" id="last_name" value="{{ old('last_name', $user->last_name) }}">
            </div>
            <div class="form-group">
                <label for="source">First Name</label>
                <input class="form-control " type="text" name="first_name" id="first_name" value="{{ old('first_name', $user->first_name) }}">
            </div>
            <div class="form-group">
                <label for="source">Applied Position</label>
                <input class="form-control " type="text" name="applied_position" id="applied_position" value="{{ old('applied_position', $job->title) }}">
            </div>
            <div class="form-group">
                <label for="cid">Department</label>
                <select class="form-control select2" name="department" id="department">
                        <option value="Deck" >{{ 'Deck' }}</option>
                        <option value="Engine" checked="true">{{ 'Engine' }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="rating_able">Gender</label>
                <select class="form-control select2" name="gender" id="gender">
                        <option value="M" >{{ 'Male' }}</option>
                        <option value="F" checked="true">{{ 'Female' }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="source">D.O.B</label>
                <input class="form-control " type="date" name="d_o_b" id="d_o_b" value="{{ old('d_o_b', $appliedJob->d_o_b) }}">
            </div>
            <div class="form-group">
                <label for="source">Age</label>
                <input class="form-control " type="text" name="age" id="age" value="{{ old('age', $appliedJob->age) }}">
            </div>
            
            <div class="form-group">
                <label for="cid">vaccination yf</label>
                <select class="form-control select2" name="vaccination_yf" id="vaccination_yf">
                        <option value="Y" >{{ 'Y' }}</option>
                        <option value="N" checked="true">{{ 'N' }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cid">vaccination_covid_19</label>
                <select class="form-control select2" name="vaccination_covid_19" id="vaccination_covid_19">
                        <option value="Y" >{{ 'Y' }}</option>
                        <option value="1st dose" >{{ '1st dose' }}</option>
                        <option value="2nd dose" >{{ '2nd dose' }}</option>
                        <option value="N" checked="true">{{ 'N' }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cid">CID</label>
                <select class="form-control select2" name="cid" id="cid">
                        <option value="Y" >{{ 'Y' }}</option>
                        <option value="N" checked="true">{{ 'N' }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="coc">COC</label>
                <select class="form-control select2" name="coc" id="coc">
                        <option value="Y" >{{ 'Y' }}</option>
                        <option value="N" checked="true">{{ 'N' }}</option>
                        <option value="Class I" >{{ 'Class I' }}</option>
                        <option value="Class II" >{{ 'Class II' }}</option>
                        <option value="Class III" >{{ 'Class III' }}</option>
                        <option value="Class IV" >{{ 'Class IV' }}</option>
                        <option value="Class V" >{{ 'Class V' }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="rating_able">Rating_Able</label>
                <select class="form-control select2" name="rating_able" id="rating_able">
                        <option value="Y" >{{ 'Y' }}</option>
                        <option value="N" checked="true">{{ 'N' }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="rating_able">CCM</label>
                <select class="form-control select2" name="ccm" id="ccm">
                        <option value="Y" >{{ 'Y' }}</option>
                        <option value="N" checked="true">{{ 'N' }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="source">Experience</label>
                {{-- <input class="form-control " type="text" name="experience" id="experience" value="{{ old('bio', $user->bio) }}"> --}}
                <textarea class="form-control " name="experience" id="experience" cols="30" rows="10">
                    {!! old('experience', $user->bio) !!}
                </textarea>
            </div>
            <div class="form-group">
                <label for="rating_able">Application Form</label>
                <select class="form-control select2" name="application_form" id="application_form">
                        <option value="Y" >{{ 'Y' }}</option>
                        <option value="N" checked="true">{{ 'N' }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="source">Contact No</label>
                <input class="form-control " type="text" name="contact_no" id="contact_no" value="{{ old('contact_no', $user->phone) }}">
            </div>
            <div class="form-group">
                <label for="source">interview_date</label>
                <input class="form-control " type="date" name="interview_date" id="interview_date" value="{{ old('interview_date', $appliedJob->interview_date) }}">
            </div>
            <div class="form-group">
                <label for="source">interview_by</label>
                <input class="form-control " type="text" name="interview_by" id="interview_by" value="{{ old('interview_by', $appliedJob->interview_by) }}">
            </div>
            {{-- <div class="form-group">
                <label for="source">interview_result</label>
                <input class="form-control " type="text" name="interview_result" id="interview_result" value="{{ old('interview_result', $appliedJob->interview_result) }}">
            </div> --}}
            <div class="form-group">
                <label for="cid">interview_result</label>
                <select class="form-control select2" name="interview_result" id="interview_result">
                        <option value="Passed" >{{ 'Passed' }}</option>
                        <option value="Failed" checked="true">{{ 'Failed' }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="source">Approved As</label>
                <input class="form-control " type="text" name="approved_as" id="approved_as" value="{{ old('approved_as', $appliedJob->approved_as) }}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control select2" name="status" id="status">
                        <option value="approved" >{{ 'approved' }}</option>
                        <option value="rejected" checked="true">{{ 'rejected' }}</option>
                </select>
            </div>
            {{-- <div class="form-group">
                <label>{{ trans('cruds.appliedJob.fields.department') }}</label>
                <select class="form-control {{ $errors->has('department') ? 'is-invalid' : '' }}" name="department" id="department">
                    <option value disabled {{ old('department', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\AppliedJob::DEPARTMENT_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('department', $appliedJob->department) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('department'))
                    <div class="invalid-feedback">
                        {{ $errors->first('department') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appliedJob.fields.department_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="d_o_b">{{ trans('cruds.appliedJob.fields.d_o_b') }}</label>
                <input class="form-control date {{ $errors->has('d_o_b') ? 'is-invalid' : '' }}" type="text" name="d_o_b" id="d_o_b" value="{{ old('d_o_b', $appliedJob->d_o_b) }}">
                @if($errors->has('d_o_b'))
                    <div class="invalid-feedback">
                        {{ $errors->first('d_o_b') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appliedJob.fields.d_o_b_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.appliedJob.fields.vaccination_yf') }}</label>
                @foreach(App\Models\AppliedJob::VACCINATION_YF_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('vaccination_yf') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="vaccination_yf_{{ $key }}" name="vaccination_yf" value="{{ $key }}" {{ old('vaccination_yf', $appliedJob->vaccination_yf) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="vaccination_yf_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('vaccination_yf'))
                    <div class="invalid-feedback">
                        {{ $errors->first('vaccination_yf') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appliedJob.fields.vaccination_yf_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.appliedJob.fields.vaccination_covid_19') }}</label>
                <select class="form-control {{ $errors->has('vaccination_covid_19') ? 'is-invalid' : '' }}" name="vaccination_covid_19" id="vaccination_covid_19">
                    <option value disabled {{ old('vaccination_covid_19', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\AppliedJob::VACCINATION_COVID_19_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('vaccination_covid_19', $appliedJob->vaccination_covid_19) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('vaccination_covid_19'))
                    <div class="invalid-feedback">
                        {{ $errors->first('vaccination_covid_19') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appliedJob.fields.vaccination_covid_19_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.appliedJob.fields.cid') }}</label>
                <select class="form-control {{ $errors->has('cid') ? 'is-invalid' : '' }}" name="cid" id="cid">
                    <option value disabled {{ old('cid', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\AppliedJob::CID_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('cid', $appliedJob->cid) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('cid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appliedJob.fields.cid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="coc">{{ trans('cruds.appliedJob.fields.coc') }}</label>
                <input class="form-control {{ $errors->has('coc') ? 'is-invalid' : '' }}" type="text" name="coc" id="coc" value="{{ old('coc', $appliedJob->coc) }}">
                @if($errors->has('coc'))
                    <div class="invalid-feedback">
                        {{ $errors->first('coc') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appliedJob.fields.coc_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.appliedJob.fields.rating_able') }}</label>
                <select class="form-control {{ $errors->has('rating_able') ? 'is-invalid' : '' }}" name="rating_able" id="rating_able">
                    <option value disabled {{ old('rating_able', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\AppliedJob::RATING_ABLE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('rating_able', $appliedJob->rating_able) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('rating_able'))
                    <div class="invalid-feedback">
                        {{ $errors->first('rating_able') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appliedJob.fields.rating_able_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.appliedJob.fields.ccm') }}</label>
                <select class="form-control {{ $errors->has('ccm') ? 'is-invalid' : '' }}" name="ccm" id="ccm">
                    <option value disabled {{ old('ccm', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\AppliedJob::CCM_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('ccm', $appliedJob->ccm) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('ccm'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ccm') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appliedJob.fields.ccm_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.appliedJob.fields.application_form') }}</label>
                <select class="form-control {{ $errors->has('application_form') ? 'is-invalid' : '' }}" name="application_form" id="application_form">
                    <option value disabled {{ old('application_form', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\AppliedJob::APPLICATION_FORM_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('application_form', $appliedJob->application_form) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('application_form'))
                    <div class="invalid-feedback">
                        {{ $errors->first('application_form') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appliedJob.fields.application_form_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="interview_date">{{ trans('cruds.appliedJob.fields.interview_date') }}</label>
                <input class="form-control date {{ $errors->has('interview_date') ? 'is-invalid' : '' }}" type="text" name="interview_date" id="interview_date" value="{{ old('interview_date', $appliedJob->interview_date) }}">
                @if($errors->has('interview_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('interview_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appliedJob.fields.interview_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="interview_by">{{ trans('cruds.appliedJob.fields.interview_by') }}</label>
                <input class="form-control {{ $errors->has('interview_by') ? 'is-invalid' : '' }}" type="text" name="interview_by" id="interview_by" value="{{ old('interview_by', $appliedJob->interview_by) }}">
                @if($errors->has('interview_by'))
                    <div class="invalid-feedback">
                        {{ $errors->first('interview_by') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appliedJob.fields.interview_by_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.appliedJob.fields.interview_result') }}</label>
                <select class="form-control {{ $errors->has('interview_result') ? 'is-invalid' : '' }}" name="interview_result" id="interview_result">
                    <option value disabled {{ old('interview_result', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\AppliedJob::INTERVIEW_RESULT_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('interview_result', $appliedJob->interview_result) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('interview_result'))
                    <div class="invalid-feedback">
                        {{ $errors->first('interview_result') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appliedJob.fields.interview_result_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="approved_as">{{ trans('cruds.appliedJob.fields.approved_as') }}</label>
                <input class="form-control {{ $errors->has('approved_as') ? 'is-invalid' : '' }}" type="text" name="approved_as" id="approved_as" value="{{ old('approved_as', $appliedJob->approved_as) }}">
                @if($errors->has('approved_as'))
                    <div class="invalid-feedback">
                        {{ $errors->first('approved_as') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.appliedJob.fields.approved_as_helper') }}</span>
            </div> --}}
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
