
<!DOCTYPE html>
	<html lang="en">
	   <!--begin::Head-->
	   <head>
		   <base href="../../../../">
		   <meta charset="utf-8" />
		   <title><?= $this->siteTitle();?>  | Keenthemes</title>
		   <meta name="description" content="User profile account information example" />
		   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		   <link rel="canonical" href="https://keenthemes.com/metronic" />
		   <!--begin::Fonts-->
		   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		   <!--end::Fonts-->
		   <!--begin::Global Theme Styles(used by all pages)-->
		   <link href="<?=PROOT?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		   <link href="<?=PROOT?>assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		   <link href="<?=PROOT?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		   <!--end::Global Theme Styles-->
		   <!--begin::Layout Themes(used by all pages)-->
		   <!--end::Layout Themes-->
		   <link rel="shortcut icon" href="<?=PROOT?>assets/media/logos/favicon.ico" />
		   <?=$this->content('head');?>
	   </head>
	   <?=$this->content('body');?>
	   </html>

 