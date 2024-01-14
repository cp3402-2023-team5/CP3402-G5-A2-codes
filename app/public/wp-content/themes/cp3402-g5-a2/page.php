<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CP3402-G5-A2
 */

get_header();
?>

<main id="primary" class="site-main">

	<video width="100%" id="smp-banner-video-0" class="smp-banner-carousel__item-video active" playsinline="" autoplay="" loop="" muted="" contols="">
		<source src="wp-content/themes/cp3402-g5-a2/video.mp4" type="video/webm">
		<source src="wp-content/themes/cp3402-g5-a2/video.mp4" type="video/mp4">
	</video>

	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', 'page');

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

	<!-- <div id="schedule"></div>
	<div id="component_2095942">
		<center>
			<hr />
			<h2 style="text-align: center;"><strong>📅 Events Schedule</strong></h2> For event schedule and details, please click on the following:<br /><a href="https://www.jcu.edu.sg/university-pathways-discovery-week/home/day-1" class="pop"><img src="https://www.jcu.edu.sg/__data/assets/image/0018/2100474/07-Individual-Banner-01-min.jpg" width="338" height="223" alt="" /></a><br /><a href="https://www.jcu.edu.sg/university-pathways-discovery-week/home/day-2" class="pop"><img src="https://www.jcu.edu.sg/__data/assets/image/0019/2100475/07-Individual-Banner-05-min.jpg" width="338px" height="223px" alt="" /></a><br /><a href="https://www.jcu.edu.sg/university-pathways-discovery-week/home/day-3" class="pop"><img src="https://www.jcu.edu.sg/__data/assets/image/0016/2101282/07-Individual-Banner-06-min.jpg" width="338px" height="223px" alt="" /></a><br /><a href="https://www.jcu.edu.sg/university-pathways-discovery-week/home/day-4" class="pop"><img src="https://www.jcu.edu.sg/__data/assets/image/0017/2101283/07-Individual-Banner-03-min.jpg" width="338px" height="223px" alt="" /></a><br /><a href="https://www.jcu.edu.sg/university-pathways-discovery-week/home/day-5" class="pop"><img src="https://www.jcu.edu.sg/__data/assets/image/0004/2100478/07-Individual-Banner-02-min.jpg" width="338px" height="223px" alt="" /></a><br /><a href="https://www.jcu.edu.sg/university-pathways-discovery-week/home/day-6" class="pop"><img src="https://www.jcu.edu.sg/__data/assets/image/0015/2101263/07-Individual-Banner-04-min.jpg" width="338px" height="223px" alt="" /></a><br />
			<p>*The activities listed are subject to change.</p><br />
			<style>
				.enqu1 {
					width: 30%;
					border: none;
					background-color: #eb1c24;
					color: white;
					padding: 10px 20px;
					font-size: 15px;
					cursor: pointer;
					text-align: center;
				}

				.enqu1:hover {
					background-color: #086cc2;
					color: white;
				}
			</style>
			<center><a class="enqu1" href="#register" role="button">Register Now</a></center>
		</center>
	</div> -->

	<div id="rankings"></div>
	<div class="container">

		<div class="smp-info-cards__heading ">
			<h2>
				<hr>
				<p style="color:#0066cc" ;="" align="center">🌎 Your World-Class Education Begins Here </p>
			</h2>
		</div>

		<div class="card-rows ">

			<div class="card">


				<div class="card-body">
					<h3 class="card-title">
						<center>Ranked in the<br> Top 2% </center>
					</h3>
					<span class="card-text">
						<center> of Universities in the World<sup>1</sup>
							<center>
							</center>
						</center>
					</span>
				</div>
			</div>

			<div class="card">


				<div class="card-body">
					<h3 class="card-title">
						<center>#1 in Australia <br>and #14 in the World</center>
					</h3>
					<span class="card-text">
						<center>for Sustainable Education<sup>2</sup></center>
					</span>
				</div>
			</div>

			<div class="card">


				<div class="card-body">
					<h3 class="card-title">
						<center>Awarded<br> 5 Stars<br>⭐⭐⭐⭐⭐</center>
					</h3>
					<span class="card-text">
						<center>for Full-time Employment, Graduate Starting Salary, Student Teacher Ratio<sup>3 </sup></center>
					</span>
				</div>
			</div>
		</div>
	</div>

	<hr>
	<div id="admissionsday"></div>

	<div>
		<center>
			<h2>📚 Admissions and Scholarships Consultation<h2>
		</center>
	</div>
	<center>
		<p>
			Have you got questions for us?<br>
			Come down to our campus for our Admissions Day!<br>
			<br>
			Date: January 14th, 2024 (Sunday)<br>
			Time: 12:00 PM - 5:00 PM (On site)*<br>
			Venue: JCU Singapore, 149 Sims Drive, Singapore 387380<br>
			<br>
			Engage in an individualised conversation with our Recruitment Team about your admissions and scholarship eligibility. <br>

			Kindly prepare your relevant educational documents for us to better assist you.<br>
			<br>
			Still need time to consider? No worries! <br>

			Feel free to visit our campus for a tour and experience a taste of our campus life.<br>
			<br>
			We look forward to having you!<br>
			<br>
			<i>*The event will be held at our Singapore campus. Attendence is open only for people residing in Singapore.</i>
		</p>
	</center>

	<style>
		.enqu1 {

			width: 30%;
			border: none;
			background-color: #eb1c24;
			color: white;
			padding: 10px 20px;
			font-size: 15px;
			cursor: pointer;
			text-align: center;
		}

		.enqu1:hover {
			background-color: #086cc2;
			color: white;
		}
	</style>

	<center>

		<p><br /><a class="enqu1" href="#register" role="button">Register Now</a>
		</p>

	</center>

	<hr>
	<div id="virtualcampustour"></div>
	<div>
		<center>
			<h2>🏫 Virtual Campus Tour</h2>
		</center>
	</div>
	<center>
		<p>

			Are you based outside of Singapore?<br>
			No worries, our Recruitment Team will be in touch with you after your registration.<br>
			<br>
			You can also take a virtual tour of our campus here:

		</p>
	</center>



	<iframe src="https://360.theredmarker.com/F15d4Yv3wl/36145899p&amp;135h&amp;32.18t" width="100%" height="720" frameborder="0" style="border:0" allowfullscreen="">
	</iframe>

	<!-- <img src="Downloads/screenshot.jpg">
	
		<section class="container">
			<h1 class="center" pt-5><b><center>Register Now</center></b></h1>
			<div class="bg-primary text-black pt-5 pb-5">
				<p><b><center>Please fill out the form below.</b></p>
				<p>Required fields are marked with an asterisk (*).
				<br>Photos and videos will be taken during the event for news and various publicity purposes.</center></p>
			</div>
		</section> -->

	<div class="smp-form-wide bg-breakout">
		<div class="container">
			<form id="form_email_2094953" enctype="multipart/form-data" action="https://www.jcu.edu.sg/university-pathways-discovery-week/thank-you" method="post" class="smp-form" novalidate="novalidate"><input type="hidden" name="SQ_FORM_2094953_PAGE" value="1" class="sq-form-field" id="SQ_FORM_2094953_PAGE"><input type="hidden" name="form_email_2094953_referral_url" value="">
				<div id="register"></div>
				<div id="form_-_introduction_2095658">
					<hr>
					<h2 style="text-align: center;">🚀 Register Now</h2>
					<p style="text-align: center;">Are you ready to shape your future? <br>If you wish to attend any of the sessions above, please register for our University Pathways Discovery Week using the form below! <br>Upon registration, you will receive a confirmation email containing the link to access the virtual sessions.<br>We look forward to embarking on a journey to help you realise your aspirations together!</p>
					<p style="text-align: center;"><em>The activities listed are subject to change. Photos and videos will be taken during the event for news and various publicity purposes.</em></p>
				</div>
				<div class="sq-form-required-field-note">
					<center>Please fill out the form below.<br><small> Required fields are marked with an asterisk </small>(<abbr class="sq-form-required-field" title="required">*</abbr>).<br>





					</center>
				</div>
				<div class="sq-form-content sq-form-2094953">

					<!--- capture Parameters --->

					<div class="smp-form__column-wrapper">
						<div class="smp-form__column">
							<script type="text/javascript">
								// Parse the URL
								function getParameterByName(name) {
									name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
									var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
										results = regex.exec(location.search);
									return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
								}
								// Give the URL parameters variable names
								var source = getParameterByName('utm_source');
								var medium = getParameterByName('utm_medium');
								var campaign = getParameterByName('utm_campaign');
								var content = getParameterByName('utm_content');
							</script>
							<div class="sq-form-question sq-form-question-text " id="sq_form_field_wrapper_q2094954_q1"><label class="sq-form-question-title" for="q2094954_q1">Name <abbr class="sq-form-required-field" title="required">*</abbr></label>
								<div class="sq-form-question-answer"><input type="text" name="q2094954:q1" value="" size="30" maxlength="300" id="q2094954_q1" class="sq-form-field" data-validation-type="text-field"></div>
							</div>
							<div class="sq-form-question sq-form-question-text " id="sq_form_field_wrapper_q2094954_q2"><label class="sq-form-question-title" for="q2094954_q2">Email <abbr class="sq-form-required-field" title="required">*</abbr></label>
								<div class="sq-form-question-answer"><input type="text" name="q2094954:q2" value="" size="30" maxlength="300" id="q2094954_q2" class="sq-form-field" data-validation-type="text-field"></div>
							</div>
							<div class="sq-form-question sq-form-question-numeric " id="sq_form_field_wrapper_q2094954_q4"><label class="sq-form-question-title" for="q2094954_q4">Phone number (Please put your country code) <abbr class="sq-form-required-field" title="required">*</abbr></label>
								<div class="sq-form-question-answer"><input type="text" name="q2094954:q4" value="" size="30" maxlength="300" id="q2094954_q4" class="sq-form-field" data-validation-type="text-field"></div>
							</div>
							<div class="sq-form-question sq-form-question-select " id="sq_form_field_wrapper_q2094954_q8"><label class="sq-form-question-title" for="q2094954_q8">Course Interested in <abbr class="sq-form-required-field" title="required">*</abbr></label>
								<div class="sq-form-question-answer"><select name="q2094954:q8" id="q2094954_q8" class="sq-form-field" data-validation-type="select-field">
										<option value="Bachelor of Information Technology">Bachelor of Information Technology</option>
										<option value="Bachelor of Cybersecurity">Bachelor of Cybersecurity</option>
										<option value="Bachelor of Science (Majoring in Data Science)">Bachelor of Science (Majoring in Data Science)</option>
										<option value="Bachelor of Science (Internet of Things)">Bachelor of Science (Internet of Things)</option>
										<option value="Master of International Tourism and Hospitality Management - Master of Business Administration">Master of International Tourism and Hospitality Management - Master of Business Administration</option>
										<option value="Master of Information Technology (Majoring in Business Informatics)">Master of Information Technology (Majoring in Business Informatics)</option>
										<option value="Master of Information Technology (Majoring in Computing)">Master of Information Technology (Majoring in Computing)</option>
										<option value="Master of Information Technology (Majoring in Interactive Technologies &amp; Games Design)">Master of Information Technology (Majoring in Interactive Technologies &amp; Games Design)</option>
										<option value="Master of Information Technology - Master of Business Administration">Master of Information Technology - Master of Business Administration</option>
									</select></div>
							</div>
							<div class="sq-form-question sq-form-question-select " id="sq_form_field_wrapper_q2094954_q11"><label class="sq-form-question-title" for="q2094954_q11">Nationality <abbr class="sq-form-required-field" title="required">*</abbr></label>
								<div class="sq-form-question-answer"><select name="q2094954:q11" id="q2094954_q11" class="sq-form-field" data-validation-type="select-field">
										<option value="" selected="selected">-- Please Select --</option>
										<option value="181">Singaporean</option>
										<option value="10">Australian</option>
										<option value="11">Austrian</option>
										<option value="25">Brazilian</option>
										<option value="26">British</option>
										<option value="31">Burmese</option>
									</select></div>
							</div>
						</div>
						<div class="smp-form__column">
							<div class="sq-form-question sq-form-question-text " id="sq_form_field_wrapper_q2094954_q13"><label class="sq-form-question-title" for="q2094954_q13">Highest Qualification <abbr class="sq-form-required-field" title="required">*</abbr></label>
								<div class="sq-form-question-answer"><input type="text" name="q2094954:q13" value="" size="30" maxlength="300" id="q2094954_q13" class="sq-form-field" data-validation-type="text-field"></div>
							</div>
							<div class="sq-form-conditional" data-type="conditional-trigger" data-for="2094953-contactmethod">
								<div class="sq-form-question sq-form-question-option-list " id="sq_form_field_wrapper_q2094954_q6">
									<fieldset>
										<legend class="sq-form-question-title">The Singapore campus of James Cook University can contact me regarding information on other courses, future events and news updates <abbr class="sq-form-required-field" title="required">*</abbr></legend>
										<div class="sq-form-question-answer">
											<div class="custom-control custom-radio">
												<ul>
													<li><input type="radio" name="q2094954:q6" id="q2094954_q6_0" value="0" class="sq-form-field" data-validation-type="radio-check-field"> <label for="q2094954_q6_0">Yes</label></li>
													<li><input type="radio" name="q2094954:q6" id="q2094954_q6_1" value="1" class="sq-form-field" data-validation-type="radio-check-field"> <label for="q2094954_q6_1">No</label></li>
												</ul>
											</div>
										</div>
									</fieldset>
								</div>
							</div>
							<div class="sq-form-conditional" data-type="conditional-content" data-id="2094953-contactmethod" style="display: none;">
								<div class="sq-form-question sq-form-question-tickbox-list " id="sq_form_field_wrapper_q2094954_q7">
									<fieldset>
										<legend class="sq-form-question-title">Contact Method <abbr class="sq-form-required-field" title="required">*</abbr></legend>
										<div class="sq-form-question-answer">
											<div class="custom-control custom-checkbox">
												<ul>
													<li><input type="checkbox" name="q2094954:q7[]" id="q2094954_q7_0" value="0" checked="checked" class="sq-form-field" data-validation-type="radio-check-field"> <label for="q2094954_q7_0">Email</label></li>
													<li><input type="checkbox" name="q2094954:q7[]" id="q2094954_q7_1" value="1" checked="checked" class="sq-form-field" data-validation-type="radio-check-field"> <label for="q2094954_q7_1">SMS</label></li>
													<li><input type="checkbox" name="q2094954:q7[]" id="q2094954_q7_2" value="2" checked="checked" class="sq-form-field" data-validation-type="radio-check-field"> <label for="q2094954_q7_2">Phone</label></li>
												</ul>
											</div>
										</div>
									</fieldset>
								</div>
							</div>
							<div class="sq-form-recaptcha" data-for="2094953">

								<input type="hidden" id="grecaptcha-response-2094953" name="grecaptcha-response" value="">
								<script type="text/javascript">
									function recaptchaCheck2094953(response) {
										// Save response
										var target_input = '#grecaptcha-response-' + 2094953;
										document.querySelector(target_input).value = response;

										// Clear error if present
										var error_element = document.querySelector('.sq-form-recaptcha[data-for="2094953"] .sq-form-error');

										if (error_element !== null) {
											error_element.parentNode.removeChild(error_element);
										}
									}
								</script>

								<script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
								<div class="g-recaptcha" id="grecaptcha-2094953" data-callback="recaptchaCheck2094953" data-theme="light" data-size="normal" data-sitekey="6Lfl3rQZAAAAANwch_WXguc2VbvjaK_gk6cNd5en">
									<div style="width: 304px; height: 78px;">
										<div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-ai0nngv95lhw" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lfl3rQZAAAAANwch_WXguc2VbvjaK_gk6cNd5en&amp;co=aHR0cHM6Ly93d3cuamN1LmVkdS5zZzo0NDM.&amp;hl=en&amp;v=u-xcq3POCWFlCr3x8_IPxgPu&amp;theme=light&amp;size=normal&amp;cb=o4d0r4g295ti"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
									</div><iframe style="display: none;"></iframe>
								</div>

							</div>
							<div class="sq-form-control">
								<input type="submit" name="form_email_2094953_submit" value="Submit" class="sq-form-submit" id="form_email_2094953_submit">
							</div>
						</div>
					</div>
				</div>
				<div class="sq-form-tracking visuallyhidden">
					<fieldset class="sq-form-section" id="sq_form_section_2094955">
						<legend class="sq-form-section-title">Tracking</legend>
						<div class="sq-form-question sq-form-question-text " id="sq_form_field_wrapper_q2094955_q1"><label class="sq-form-question-title" for="q2094955_q1">utm_source</label>
							<div class="sq-form-question-answer"><input type="hidden" name="q2094955:q1" value="" size="30" maxlength="300" class="source" id="q2094955_q1"></div>
						</div>
						<div class="sq-form-question sq-form-question-text " id="sq_form_field_wrapper_q2094955_q2"><label class="sq-form-question-title" for="q2094955_q2">utm_medium</label>
							<div class="sq-form-question-answer"><input type="text" name="q2094955:q2" value="" size="30" maxlength="300" class="utm_medium" id="q2094955_q2"></div>
						</div>
						<div class="sq-form-question sq-form-question-text " id="sq_form_field_wrapper_q2094955_q3"><label class="sq-form-question-title" for="q2094955_q3">utm_campaign</label>
							<div class="sq-form-question-answer"><input type="hidden" name="q2094955:q3" value="" size="30" maxlength="300" class="utm_campaign" id="q2094955_q3"></div>
						</div>
						<div class="sq-form-question sq-form-question-text " id="sq_form_field_wrapper_q2094955_q4"><label class="sq-form-question-title" for="q2094955_q4">utm_content</label>
							<div class="sq-form-question-answer"><input type="hidden" name="q2094955:q4" value="" size="30" maxlength="300" class="utm_content" id="q2094955_q4"></div>
						</div>
					</fieldset>
				</div>
				<!---Assign UTM Parameters Fields--->
				<script>
					var sourceValue = document.querySelector(".source");
					sourceValue.setAttribute('value', source);

					var mediumValue = document.querySelector(".utm_medium");
					mediumValue.setAttribute('value', medium);

					var campaignValue = document.querySelector(".utm_campaign");
					campaignValue.setAttribute('value', campaign);

					var contentValue = document.querySelector(".utm_content");
					contentValue.setAttribute('value', content);
				</script>
			</form>
		</div>
	</div>

</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
?>