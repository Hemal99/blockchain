

<?php $this->setSiteTitle('Login');?>
<?php $this->start('head');?>
<link href="<?=PROOT?>assets/css/pages/login/classic/login-6.css" rel="stylesheet" type="text/css" />
<?php $this->end();?>

<?php $this->start('body');?>
<body id="kt_body" style="background-image: url(<?=PROOT?>assets/media/bg/bg-10.jpg)" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-6 login-signin-on login-signin-on d-flex flex-column-fluid" id="kt_login">
				<div class="d-flex flex-column flex-lg-row flex-row-fluid text-center" style="background-image: url(<?=PROOT?>assets/media/bg/bg-3.jpg);">
					<!--begin:Aside-->
					<div class="d-flex w-100 flex-center p-15">
						<div class="login-wrapper">
							<!--begin:Aside Content-->
							<div class="text-dark-75">
								<a href="#">
									<img src="<?=PROOT?>assets/media/logos/logo-letter-13.png" class="max-h-75px" alt="" />
								</a>
								<h3 class="mb-8 mt-22 font-weight-bold">JOIN OUR GREAT COMMUNITY</h3>
								<p class="mb-15 text-muted font-weight-bold">The ultimate Bootstrap &amp; Angular 6 admin theme framework for next generation web apps.</p>
								<a href="<?=PROOT?>/home/signup"  class="text-muted text-hover-primary font-weight-bold"><button type="button"  class="btn btn-outline-primary btn-pill py-4 px-9 font-weight-bold">Get An Account</button></a>
							</div>
							<!--end:Aside Content-->
						</div>
					</div>
					<!--end:Aside-->
					<!--begin:Divider-->
					<div class="login-divider">
						<div></div>
					</div>
					<!--end:Divider-->
					<!--begin:Content-->
					<div class="d-flex w-100 flex-center p-15 position-relative overflow-hidden">
						<div class="login-wrapper">
							<!--begin:Sign In Form-->
							<div class="login-signin">
								<div class="text-center mb-10 mb-lg-20">
									<h2 class="font-weight-bold">Sign In</h2>
									<p class="text-muted font-weight-bold">Enter your E-mail and password</p>
								</div>
								<form class="form text-left" action="<?=PROOT?>home/login" method="POST" id="kt_login_signin_form" >
									<div class="form-group py-2 m-0">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="email" placeholder="E-mail" name="email" autocomplete="on" />
									</div>
									<div class="form-group py-2 border-top m-0">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="Password" placeholder="password" name="password" />
									</div>
									<div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-5">
										<div class="checkbox-inline">
											<label class="checkbox m-0 text-muted font-weight-bold">
											<input type="checkbox" name="remember" />
											<span></span>Remember me</label>
										</div>
										<a href="<?=PROOT?>home/forgot" class="text-muted text-hover-primary font-weight-bold">Forget Password ?</a>
									</div>
									<div class="text-center mt-15">
										
									</div>
									<input id="kt_login_signin_submit"  value="Sign In" type="submit" name="submit-form" class="btn btn-primary btn-pill text-center mt-15 shadow-sm py-4 px-9 font-weight-bold"/>
								</form>
							</div>
							<!--end:Sign In Form-->
							<!--begin:Sign Up Form-->
						
							<!--end:Forgot Password Form-->
						</div>
					</div>
					<!--end:Content-->
				</div>
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
		<script src="<?=PROOT?>assets/js/pages/custom/login/login-general.js"></script>
	
		<!--end::Page Scripts-->
	</body>
    <?php $this->end();?>