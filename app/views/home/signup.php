<?php $this->setSiteTitle('Signup');?>
<?php $this->start('head');?>
<link href="<?=PROOT?>assets/css/pages/login/login-3.css" rel="stylesheet" type="text/css" />
<?php $this->end();?>

<?php $this->start('body');?>
<body id="kt_body" style="background-image: url(<?=PROOT?>assets/media/bg/bg-10.jpg)" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid wizard" id="kt_login">
				<!--begin::Aside-->
				<div class="login-aside d-flex flex-column flex-row-auto">
					<!--begin::Aside Top-->
					<div class="d-flex flex-column-auto flex-column pt-15 px-30">
						<!--begin::Aside header-->
						<a href="#" class="login-logo py-6">
							<img src="<?=PROOT?>assets/media/logos/logo-1.png" class="max-h-70px" alt="" />
						</a>
						<!--end::Aside header-->
						<!--begin: Wizard Nav-->
						<div class="wizard-nav pt-5 pt-lg-30">
							<!--begin::Wizard Steps-->
							<div class="wizard-steps">
								<!--begin::Wizard Step 1 Nav-->
								<!-- <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
									<div class="wizard-wrapper">
										<div class="wizard-icon">
											<i class="wizard-check ki ki-check"></i>
											<span class="wizard-number">1</span>
										</div>
										<div class="wizard-label">
											<h3 class="wizard-title">Account Settings</h3>
											<div class="wizard-desc">Setup Your Account Details</div>
										</div>
									</div>
								</div> -->
								<!--end::Wizard Step 1 Nav-->
								<!--begin::Wizard Step 2 Nav-->
								<!-- <div class="wizard-step" data-wizard-type="step">
									<div class="wizard-wrapper">
										<div class="wizard-icon">
											<i class="wizard-check ki ki-check"></i>
											<span class="wizard-number">2</span>
										</div>
										<div class="wizard-label">
											<h3 class="wizard-title">Address Details</h3>
											<div class="wizard-desc">Setup Residence Address</div>
										</div>
									</div>
								</div> -->
								<!--end::Wizard Step 2 Nav-->
								<!--begin::Wizard Step 3 Nav-->
								<!-- <div class="wizard-step" data-wizard-type="step">
									<div class="wizard-wrapper">
										<div class="wizard-icon">
											<i class="wizard-check ki ki-check"></i>
											<span class="wizard-number">3</span>
										</div>
										<div class="wizard-label">
											<h3 class="wizard-title">Make Payment</h3>
											<div class="wizard-desc">Use Credit or Debit Cards</div>
										</div>
									</div>
								</div> -->
								<!--end::Wizard Step 3 Nav-->
								<!--begin::Wizard Step 4 Nav-->
								<!-- <div class="wizard-step" data-wizard-type="step">
									<div class="wizard-wrapper">
										<div class="wizard-icon">
											<i class="wizard-check ki ki-check"></i>
											<span class="wizard-number">4</span>
										</div>
										<div class="wizard-label">
											<h3 class="wizard-title">Completed!</h3>
											<div class="wizard-desc">Review and Submit</div>
										</div>
									</div>
								</div> -->
								<!--end::Wizard Step 4 Nav-->
							</div>
							<!--end::Wizard Steps-->
						</div>
						<!--end: Wizard Nav-->
					</div>
					<!--end::Aside Top-->
					<!--begin::Aside Bottom-->
					<div class="aside-img-wizard d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center pt-2 pt-lg-5" style="background-position-y: calc(100% + 3rem); background-image: url(<?=PROOT?>assets/media/svg/illustrations/features.svg)"></div>
					<!--end::Aside Bottom-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="login-content flex-column-fluid d-flex flex-column p-10">
					<!--begin::Top-->
					<div class="text-right d-flex justify-content-center">
						<div class="top-signup text-right d-flex justify-content-end pt-5 pb-lg-0 pb-10">
							<span class="font-weight-bold text-muted font-size-h4">Having issues?</span>
							<a href="javascript:;" class="font-weight-bolder text-primary font-size-h4 ml-2" id="kt_login_signup">Get Help</a>
						</div>
					</div>
					<!--end::Top-->
					<!--begin::Wrapper-->
					<div class="d-flex flex-row-fluid flex-center">
						<!--begin::Signin-->
						<div class="login-form login-form-signup">
							<!--begin::Form-->
							<form class="form" novalidate="novalidate" id="kt_login_signup_form"  action="<?=PROOT?>home/signup" method="POST">
								<!--begin: Wizard Step 1-->
								<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
									<!--begin::Title-->
									<div class="pb-10 pb-lg-15">
										<h3 class="font-weight-bolder text-dark display5">Create Account</h3>
										<div class="text-muted font-weight-bold font-size-h4">Already have an Account ?
										<a href="custom/pages/login/login-3/signin.html" class="text-primary font-weight-bolder">Sign In</a></div>
									</div>
									<!--begin::Title-->
									<!--begin::Form Group-->
									<div class="form-group">
										<label class="font-size-h6 font-weight-bolder text-dark">First Name</label>
										<input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6 <?php echo (!empty($data['fname_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['fname']; ?>" name="fname" placeholder="First Name" value="" />
										<span class="invalid-feedback"><?php echo $data['fname_err']; ?></span>
									</div>
									<!--end::Form Group-->
									<!--begin::Form Group-->
									<div class="form-group">
										<label class="font-size-h6 font-weight-bolder text-dark">Last Name</label>
										<input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6 <?php echo (!empty($data['lname_err'])) ? 'is-invalid' : ''; ?>" name="lname" placeholder="Last Name" value="" />
										<span class="invalid-feedback"><?php echo $data['lname_err']; ?></span>
									</div>
									<!--end::Form Group-->
									<!--begin::Form Group-->
									<div class="form-group">
										<label class="font-size-h6 font-weight-bolder text-dark">Email</label>
										<input type="email" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6 <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" name="email" placeholder="Email"  />
										<span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
									</div>
									<div class="form-group">
										<label class="font-size-h6 font-weight-bolder text-dark">Password</label>
										<input type="password" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6 <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>" name="password" placeholder="Password" />
										<span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
									</div>
									<div class="form-group">
										<label class="font-size-h6 font-weight-bolder text-dark">Confirm pasword</label>
										<input type="password" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6 <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" name="confirm_password" placeholder="Confirm Password"  />
										<span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
									</div>
									<!--end::Form Group-->
								</div>
								<div class="row justify-content-end">
									<div class="col d-flex justify-content-between pt-3">
									<button type="submit" value="Register" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3">Submit
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
													<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
												</g>
											</svg>
									</button>
									</div>
									
								</div>
								
								<!--end: Wizard Step 1-->
								<!--begin: Wizard Step 2-->
								
								<!--end: Wizard Step 4-->
								<!--begin: Wizard Actions-->
								<div class="d-flex justify-content-between pt-3">
									
									<div>
										
										<button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" data-wizard-type="action-submit">Submit
										<span class="svg-icon svg-icon-md ml-1">
											<!--begin::Svg Icon | path:<?=PROOT?>assets/media/svg/icons/Navigation/Right-2.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
													<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span></button>
									</div>
								</div>
								<!--end: Wizard Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Signin-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="<?=PROOT?>assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?=PROOT?>assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="<?=PROOT?>assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="<?=PROOT?>assets/js/pages/custom/login/login-3.js"></script>
		<!--end::Page Scripts-->
	</body>
<?php $this->end();?>