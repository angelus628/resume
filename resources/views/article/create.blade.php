@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">

        @component('components.admin-sidebar')
        @endcomponent

        <div class="col-9">
            <h3>@lang('admin.article-section-title')</h3>
            {{ Form::model($article) }}
    			<fieldset>
                	<div class="form-field">
						<input name="contactName" type="text" id="contactName" placeholder="@lang('contact.form-name')" value="" minlength="2" required="">
                	</div>
	                <div class="form-field">
		      		   <input name="contactEmail" type="email" id="contactEmail" placeholder="@lang('contact.form-email')" value="" required="">
		            </div>
                <div class="form-field">
	     				   <input name="contactSubject" type="text" id="contactSubject" placeholder="@lang('contact.form-subject')" value="" required="">
	               </div>
                <div class="form-field">
	                 	<textarea name="contactMessage" id="contactMessage" placeholder="@lang('contact.form-message')" rows="10" cols="50" required=""></textarea>
	               </div>
               <div class="form-field">
                   <button class="submitform">@lang('contact.form-submit')</button>
                   <div id="submit-loader">
                      <div class="text-loader">@lang('contact.sending')</div>
     				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                </div>

    			</fieldset>
      		{{ Form::close() }}

            <div class="form-group">
                <a href="{{ url(App::getLocale() . '/authors/create') }}" class="btn btn-info">@lang('admin.admin-new-article')</a>
            </div>
        </div>
    </div>
</div>
@endsection
