<?php $this->setSiteTitle('Forgot Password');?>
<?php $this->start('head');?>
<link href="<?=PROOT?>assets/css/pages/login/login-3.css" rel="stylesheet" type="text/css" />
<?php $this->end();?>

<?php $this->start('body');?>

<body id="kt_body" style="background-image: url(<?=PROOT?>assets/media/bg/bg-10.jpg)" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="login-aside d-flex flex-column flex-row-auto">
                <!--begin::Aside Top-->
                <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                    <!--begin::Aside Header-->
                    <a href="#" class="login-logo text-center pt-lg-25 pb-10">
							<img src="<?=PROOT?>assets/media/logos/logo-1.png" class="max-h-70px" alt="" />
						</a>
                    <!--end::Aside Header-->
                    <!--begin::Aside Title-->
                    <h3 class="font-weight-bolder text-center font-size-h4 text-dark-50 line-height-xl">User Experience &amp; Interface Design
                        <br />Strategy SaaS Solutions</h3>
                    <!--end::Aside Title-->
                </div>
                <!--end::Aside Top-->
                <!--begin::Aside Bottom-->
                <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center" style="background-position-y: calc(100% + 5rem); background-image: url(<?=PROOT?>assets/media/svg/illustrations/login-visual-5.svg)"></div>
                <!--end::Aside Bottom-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div class="login-content flex-column-fluid d-flex flex-column p-10">
                <!--begin::Top-->
                <div class="text-right d-flex justify-content-center">
                    <div class="top-forgot text-right d-flex justify-content-end pt-5 pb-lg-0 pb-10">
                        <span class="font-weight-bold text-muted font-size-h4">Having issues?</span>
                        <a href="javascript:;" class="font-weight-bold text-primary font-size-h4 ml-2" id="kt_login_signup">Get Help</a>
                    </div>
                </div>
                <!--end::Top-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-row-fluid flex-center">
                    <!--begin::Forgot-->
                    <div class="login-form">
                        <!--begin::Form-->
                        <form class="form" id="form" method="POST" action="<?=PROOT?>home/forgot">
                            <!--begin::Title-->
                            <div class="pb-5 pb-lg-15">
                                <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Forgotten Password ?</h3>
                                <p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your password</p>
                            </div>
                            <!--end::Title-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <input id='email' class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" onsubmit="emailVerify(this.value)" type="email" placeholder="Email" name="email" autocomplete="off" />
                                <div id="error-text-e" class=fv-help-block></div>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-wrap">
                                <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4" >Submit</button>
                                <a href="<?=PROOT?>" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</a>
                            </div>
                            <!--end::Form group-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Forgot-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#6993FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1E9FF",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="<?=PROOT?>assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?=PROOT?>assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="<?=PROOT?>assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="<?=PROOT?>assets/js/pages/custom/login/login-3.js"></script>
    <!--end::Page Scripts-->
    <script>
        //form and fields

        const email = document.getElementById('email');
        const form = document.getElementById('form');

        //error fields

        const error_text_e = document.getElementById('error-text-e');

        let emailResponse = '';
		error_text_e.style.color = "red";

    
        form.addEventListener('submit', (e) => {

            //empty validation
		    if(email.value =='' ){
				e.preventDefault();
				error_text_e.innerText = 'email is required';
			}

            if (emailResponse.trim() == '' && email.value!='') {
                e.preventDefault();
			
                 error_text_e.innerText = 'email does not exit';
            }

        });


        const emailVerify = (value) => {
		
            if (value.length != 0) {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        if (this.responseText.trim() !== "") {

                            emailResponse ='has already taken';
							
                        } 

                    }
                };
                xmlhttp.open("GET", "<?=PROOT?>home/verify/" + value, true);
                xmlhttp.send();
            }
        }
    </script>
</body>

<?php $this->end();?>