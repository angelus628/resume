<!-- contact
================================================== -->
<section id="contact">

	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>@lang('contact.title')</h5>
   			<h1>@lang('contact.sub-title')</h1>

   			<p class="lead">@lang('contact.description')</p>

   		</div>
   	</div> <!-- /section-intro -->

   	<div class="row contact-form">

   		<div class="col-twelve">

            <!-- form -->
            <!--<form name="contactForm" id="contactForm" method="post" action="">-->
      {{ Form::open([['url' => URL::to('/contact', [], true), 'id' => 'contactForm']) }}
			<!-- Form::open(array('route' => 'contact', 'id' => 'contactForm')) -->
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
		<!--</form>--> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">
            </div>
            <!-- contact-success -->
      		<div id="message-success">
               <i class="fa fa-check"></i>@lang('contact.success')<br>
      		</div>

         </div> <!-- /col-twelve -->

   	</div> <!-- /contact-form -->

   	<div class="row contact-info">

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>@lang('contact.where')</h5>

   			<p>@lang('contact.address')</p>

   		</div>

   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>@lang('contact.emailme')</h5>

   			<p>@lang('contact.email')</p>

   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>@lang('contact.callme')</h5>

   			<p>@lang('contact.number')</p>

   		</div>

   	</div> <!-- /contact-info -->

</section> <!-- /contact -->
