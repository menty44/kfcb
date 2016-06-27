<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 fixed top-full menuh-top"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 fixed top-full menuh-top"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 fixed top-full menuh-top"> <![endif]-->
<!--[if gt IE 8]> <html class="animations ie gt-ie8 fixed top-full menuh-top"> <![endif]-->
<!--[if !IE]><!--><html class="animations fixed top-full menuh-top"><!-- <![endif]-->
<head>
	<title>KFCB - Agent Application</title>

	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

	<!-- Bootstrap -->
	<link href="{{asset('common/bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('common/bootstrap/css/responsive.css')}}" rel="stylesheet" type="text/css" />

	<!-- Glyphicons Font Icons -->
	<link href="{{asset('common/theme/fonts/glyphicons/css/glyphicons.css')}}" rel="stylesheet" />

	<link rel="stylesheet" href="{{asset('common/theme/fonts/font-awesome/css/font-awesome.min.css')}}">
	<!--[if IE 7]><link rel="stylesheet" href="../../../../../common/theme/fonts/font-awesome/css/font-awesome-ie7.min.css"><![endif]-->

	<!-- Uniform Pretty Checkboxes -->
	<link href="{{asset('common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css')}}" rel="stylesheet" />

	<!-- PrettyPhoto -->
    <link href="{{asset('common/theme/scripts/plugins/gallery/prettyphoto/css/prettyPhoto.css')}}" rel="stylesheet" />

    <!-- JQuery -->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js')}}"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js')}}"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
      <script src="../../../../../common/theme/scripts/plugins/system/html5shiv.js"></script>
    <![endif]-->

	<!-- Bootstrap Extended -->
	<link href="{{asset('common/bootstrap/extend/jasny-fileupload/css/fileupload.css')}}" rel="stylesheet">
	<link href="{{asset('common/bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css')}}" rel="stylesheet">
	<link href="{{asset('common/bootstrap/extend/bootstrap-select/bootstrap-select.css')}}" rel="stylesheet" />
	<link href="{{asset('common/bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css')}}" rel="stylesheet" />

	<!-- DateTimePicker Plugin -->
	<link href="{{asset('common/theme/scripts/plugins/forms/bootstrap-datetimepicker/css/datetimepicker.css')}}" rel="stylesheet" />

	<!-- JQueryUI -->
	<link href="{{asset('common/theme/scripts/plugins/system/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.min.css')}}" rel="stylesheet" />

	<!-- MiniColors ColorPicker Plugin -->
	<link href="{{asset('common/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.css')}}" rel="stylesheet" />

	<!-- Notyfy Notifications Plugin -->
	<link href="{{asset('common/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.css')}}" rel="stylesheet" />
	<link href="{{asset('common/theme/scripts/plugins/notifications/notyfy/themes/default.css')}}" rel="stylesheet" />

	<!-- Gritter Notifications Plugin -->
	<link href="{{asset('common/theme/scripts/plugins/notifications/Gritter/css/jquery.gritter.css')}}" rel="stylesheet" />

	<!-- Easy-pie Plugin -->
	<link href="{{asset('common/theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart.css')}}" rel="stylesheet" />

	<!-- Google Code Prettify Plugin -->
	<link href="{{asset('common/theme/scripts/plugins/other/google-code-prettify/prettify.css')}}" rel="stylesheet" />

	<!-- Select2 Plugin -->
	<link href="{{asset('common/theme/scripts/plugins/forms/select2/select2.css')}}" rel="stylesheet" />

	<!-- Pageguide Guided Tour Plugin -->
	<!--[if gt IE 8]><!--><link media="screen" href="{{asset('common/theme/scripts/plugins/other/pageguide/css/pageguide.css')}}" rel="stylesheet" /><!--<![endif]-->

	<!-- Main Theme Stylesheet :: CSS -->
	<link href="{{asset('common/theme/css/style-default-menus-light.css?1374506511')}}" rel="stylesheet" type="text/css" />


	<!-- FireBug Lite -->
	<!-- <script src="https://getfirebug.com/firebug-lite-debug.js"></script> -->

	<!-- LESS.js Library -->
	<script src="{{asset('common/theme/scripts/plugins/system/less.min.js')}}"></script>

	<!-- Global -->
	<script>
	//<![CDATA[
	var basePath = '',
		commonPath = '{{asset('common/')}}';

	// colors
	var primaryColor = '#e5412d',
		dangerColor = '#b55151',
		successColor = '#609450',
		warningColor = '#ab7a4b',
		inverseColor = '#45484d';

	var themerPrimaryColor = primaryColor;
	//]]>
	</script>
</head>
<body class="document-body ">

		<!-- Main Container Fluid -->
	<div class="container-fluid menu-hidden sidebar-hidden-phone fixed menu-left">


		<!-- Content -->
		<div id="content">

				<!-- Top navbar -->
		<div class="navbar main">

			<!-- Menu Toggle Button -->
			<button type="button" class="btn btn-navbar pull-left visible-phone">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</button>
			<!-- // Menu Toggle Button END -->

						<!-- Not Blank page -->

						<!-- Full Top Style -->
						<ul class="topnav pull-left">
							<li><a href="{{url('/home')}}" class="glyphicons dashboard"><i></i> Dashboard</a></li>
							<li><a href="{{url('/myapplications')}}" class="glyphicons dashboard"><i></i> My Applications</a></li>
							<li><a href="index.html?lang=en&amp;layout_type=fixed&amp;style=style-default-menus-light&amp;sidebar=false" class="glyphicons list"><i></i> My Licenses</a></li>
							<li><a href="index.html?lang=en&amp;layout_type=fixed&amp;style=style-default-menus-light&amp;sidebar=false" class="glyphicons file"><i></i> My Invoices</a></li>
						</ul>
			<!-- // Full Top Style END -->

			<!-- // Not Blank Page END -->


						<!-- Top Menu Right -->
						<!-- Top Menu Right -->
			<ul class="topnav pull-right hidden-phone">

				<!-- Profile / Logout menu -->
				<li class="account dropdown dd-1">
										<a data-toggle="dropdown" href="my_account_advanced.html?lang=en&amp;layout_type=fixed&amp;style=style-default-menus-light&amp;sidebar=false" class="glyphicons logout lock"><span class="hidden-tablet hidden-phone hidden-desktop-1">User Logout</span><i></i></a>

									</li>
				<!-- // Profile / Logout menu END -->

			</ul>
			<!-- // Top Menu Right END -->

						<div class="clearfix"></div>

		</div>
		<!-- Top navbar END -->

	<ul class="breadcrumb">
	<li>You are here</li>
	<li><a href="index.html?lang=en&amp;layout_type=fixed&amp;style=style-default-menus-light&amp;sidebar=false" class="glyphicons dashboard"><i></i> Dashboard</a></li>
	<li class="divider"><i class="icon-caret-right"></i></li>
	<li>Film or Agent License Application</li>

</ul>

<h2>Film or Agent License Application</h2>
<div class="innerLR">



<!-------------------------------------------->

<!-- Form -->
<form class="form-horizontal margin-none" id="validateSubmitForm" method="POST" action="{{ url('/exhibition') }}" autocomplete="off">
	{{ csrf_field() }}

	<!-- Widget -->
	<div class="widget widget-heading-simple widget-body-gray">



		<div class="widget-body">

			<!-- Row for exhibition details -->
			<div class="row-fluid">

				<!-- Column for Exhibition details 1-->
				<div class="span12">
					<h4>Company Details</h4>
					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="compname">Company Name</label>
						<div class="controls"><input class="span12" id="compname" name="compname" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="address">Address</label>
						<div class="controls">
							<textarea class="span12"></textarea>
						</div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="telno">Tel. No</label>
						<div class="controls"><input class="span12" id="telno" name="telno" type="text" /></div>
					</div>
					<!-- group end -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="physical">Physical Location</label>
						<div class="controls">
							<textarea class="span12"></textarea>
						</div>
					</div>
					<!-- // Group END -->

				</div>



			</div>
			<!-- // Row END -->


			<hr class="separator" />
			<h4>State previous experience in film making by indicating previous productions.</h4>

			<hr class="separator" />



			<!-- Row for previous experience  and dates etc -->
			<div class="row-fluid">

				<!-- Column for Shooting Location -->
				<div class="span6">

					<h5>Title</h5>
					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="Title1">Title 1</label>
						<div class="controls"><input class="span12" id="Title1" name="Title1" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="Title2">Title 2</label>
						<div class="controls"><input class="span12" id="Title2" name="Title2" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="Title3">Title 3</label>
						<div class="controls"><input class="span12" id="Title3" name="Title3" type="text" /></div>
					</div>
					<!-- // Group END -->



				</div>
				<!-- end column -->

				<!-- Column for Dir2 and 23-->
				<div class="span6">

					<h5>Date</h5>
					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="date1">Date 1</label>
						<div class="controls"><input class="span12" id="date1" name="date1" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="date2">Date 2</label>
						<div class="controls"><input class="span12" id="date2" name="date2" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="date3">Date 3</label>
						<div class="controls"><input class="span12" id="date3" name="date3" type="text" /></div>
					</div>
					<!-- // Group END -->

				</div>
				<!-- end column -->

			</div>
			<!-- // Row END -->


			<hr class="separator" />
			<h4>Names &amp; Certificates of officials in your company with training in film making.</h4>

			<hr class="separator" />

			<!-- Row for previous experience  and dates etc -->
			<div class="row-fluid">

				<!-- Column for Shooting Location -->
				<div class="span4">

					<h5>Name</h5>
					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="name1">Name 1</label>
						<div class="controls"><input class="span12" id="name1" name="name1" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="name2">Name 2</label>
						<div class="controls"><input class="span12" id="name2" name="name2" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="name3">Name 3</label>
						<div class="controls"><input class="span12" id="name3" name="name3" type="text" /></div>
					</div>
					<!-- // Group END -->



				</div>
				<!-- end column -->

				<!-- Column for Dir2 and 23-->
				<div class="span4">

					<h5>Nationality</h5>
					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="nationality1">Nationality 1</label>
						<div class="controls"><input class="span12" id="nationality1" name="nationality1" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="nationality2">Nationality 2</label>
						<div class="controls"><input class="span12" id="nationality2" name="nationality2" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="nationality3">Nationality 3</label>
						<div class="controls"><input class="span12" id="nationality3" name="nationality3" type="text" /></div>
					</div>
					<!-- // Group END -->

				</div>
				<!-- end column -->

				<!-- Column for Dir2 and 23-->
				<div class="span4">

					<h5>Training/Experience</h5>
					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="training1">Training 1</label>
						<div class="controls"><input class="span12" id="training1" name="training1" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="training2">Training 2</label>
						<div class="controls"><input class="span12" id="training2" name="training2" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="training3">Training 3</label>
						<div class="controls"><input class="span12" id="training3" name="training3" type="text" /></div>
					</div>
					<!-- // Group END -->

				</div>
				<!-- end column -->

			</div>
			<!-- // Row END -->

			<hr class="separator" />
			<h4>List expatriates employed or who are directors/partners in the organization.</h4>
			<hr class="separator" />

			<!-- Row for previous experience  and dates etc -->
			<div class="row-fluid">

				<!-- Column for Shooting Location -->
				<div class="span4">

					<h5>Name</h5>
					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="expat1">Expatriate Name 1</label>
						<div class="controls"><input class="span12" id="expat1" name="expat1" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="expat2">Expatriate Name 2</label>
						<div class="controls"><input class="span12" id="expat2" name="expat" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="expat3">Expatriate Name 3</label>
						<div class="controls"><input class="span12" id="expat3" name="expat3" type="text" /></div>
					</div>
					<!-- // Group END -->



				</div>
				<!-- end column -->

				<!-- Column for Dir2 and 23-->
				<div class="span4">

					<h5>Nationality</h5>
					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="expnationality1">Nationality 1</label>
						<div class="controls"><input class="span12" id="expnationality1" name="expnationality1" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="expnationalit2">Nationality 2</label>
						<div class="controls"><input class="span12" id="expnationality2" name="expnationality2" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="date3">Nationality 3</label>
						<div class="controls"><input class="span12" id="expnationality3" name="expnationality3" type="text" /></div>
					</div>
					<!-- // Group END -->

				</div>
				<!-- end column -->

				<!-- Column for Dir2 and 23-->
				<div class="span4">

					<h5>Income Tax No.</h5>
					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="taxno1">Income Tax No 1</label>
						<div class="controls"><input class="span12" id="taxno1" name="taxno1" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="taxno2">Income Tax No 2</label>
						<div class="controls"><input class="span12" id="taxno2" name="taxno2" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="taxno3">Income Tax No  3</label>
						<div class="controls"><input class="span12" id="taxno3" name="taxno3" type="text" /></div>
					</div>
					<!-- // Group END -->

				</div>
				<!-- end column -->

			</div>
			<!-- // Row END -->


			<hr class="separator" />
			<h4> Mandatory Requirements</h4>
			<!-- Row -->
			<div class="row-fluid">
					<!-- Column for Shooting Location -->
				<div class="span6">
					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="compreg">Company Reg. No.</label>
						<div class="controls"><input class="span12" id="compreg" name="compreg" type="text"/></div>
					</div>
					<!-- // Group END -->
				</div>
				<!-- end column -->
				<div class="span6">
					<div class="fileupload fileupload-new margin-none" data-provides="fileupload">
					  	<div class="input-append">
					    	<div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-default btn-file"><span class="fileupload-new">Attach Certificate</span><span class="fileupload-exists">Change</span><input type="file" class="margin-none" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
					  	</div>
					</div>
				</div>

			</div>
			<!-- // Row END -->
			<hr class="separator" />
			<!-- Row -->
			<div class="row-fluid">
					<!-- Column for Shooting Location -->
				<div class="span6">
					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="vatcertno">VAT Certificate No.</label>
						<div class="controls"><input class="span12" id="vatcertno" name="vatcertno" type="text"/></div>
					</div>
					<!-- // Group END -->
				</div>
				<!-- end column -->
				<div class="span6">
					<div class="fileupload fileupload-new margin-none" data-provides="fileupload">
					  	<div class="input-append">
					    	<div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-default btn-file"><span class="fileupload-new">Attach Certificate</span><span class="fileupload-exists">Change</span><input type="file" class="margin-none" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
					  	</div>
					</div>
				</div>

			</div>
			<!-- // Row END -->
			<hr class="separator" />
			<!-- Row -->
			<div class="row-fluid">
					<!-- Column for Shooting Location -->
				<div class="span6">
					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="procerts">Professional Certificates </label>
						<div class="controls">
							<div class="span6">
								<div class="fileupload fileupload-new margin-none" data-provides="fileupload">
										<div class="input-append">
											<div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-default btn-file"><span class="fileupload-new">Attach Professional Certificates</span><span class="fileupload-exists">Change</span><input type="file" class="margin-none" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
										</div>
								</div>
							</div>
						</div>
					</div>
					<!-- // Group END -->
				</div>
				<!-- end column -->


			</div>
			<!-- // Row END -->

			<hr class="separator" />
			<!-- Row -->

			<div class="row-fluid">
			<!-- Group -->
			<div class="control-group">
				<label class="control-label" for="rawstock">Do you own filming equipment?</label>
				<div class="controls">
					<select class="selectpicker span12" data-style="btn-primary">
						<option>Yes</option>
						<option>No</option>
					</select>
				</div>

			</div>
			<!-- // Group END -->

		</div>
		<hr class="separator" />
		<!-- Row -->

		<div class="row-fluid">
		<!-- Group -->
		<div class="control-group">
			<label class="control-label" for="rawstock">Have you insured your equipment?</label>
			<div class="controls">
				<select class="selectpicker span12" data-style="btn-primary">
					<option>Yes</option>
					<option>No</option>
				</select>
			</div>

		</div>
		<!-- // Group END -->

		<!-- Group -->
		<div class="control-group">
			<label class="control-label" for="insuranceco">Insurance Company Name</label>
			<div class="controls"><input class="span12" id="insuranceco" name="insuranceco" type="text" /></div>
		</div>
		<!-- // Group END -->

	</div>



			<hr class="separator" />


			<hr class="separator" />

			<!-- Row for exhibition details -->


				<!-- Last Row with signature and Cap222 -->
				<div class="row-fluid uniformjs">

					<!-- Column -->
					<div class="span4">
						<h4 style="margin-bottom: 10px;">Terms &amp; Conditions</h4>
						<label class="checkbox" for="agree">
							<input type="checkbox" class="checkbox" id="agree" name="agree" />
							Please agree to our Terms &amp; Conditions <br/>

						</label>
						<p>
						<h4 style="margin-bottom: 10px;">Undertaking/Declaration</h4>
						<label class="checkbox" for="undertaking">
							<input type="checkbox" class="checkbox" id="undertaking" name="undertaking" />
							Click this to digitally sign your undertaking.
						</label>
					</p>
					</div>
					<!-- // Column END -->



					<div class="span8">
						<h4 style="margin-bottom: 10px;">Declaration</h4>
							<h5>I hereby declare as follows:</h5>
							a) That the information I have given in this application is true and correct;
							<br/>
							b) I have note been convicted of an offence under the Films and Stage Plays Act Cap 222 of the Laws of Kenya
					</div>
				</div>
				<!-- // Row END -->

				<hr class="separator" />

				<!-- Form actions -->
				<div class="form-actions">
					<button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Submit &amp; Pay</button>
				</div>
				<!-- // Form actions END -->
			</div>


		</div>
	</div>
	<!-- // Widget END -->

</form>
<!-- // Form END -->



		</div>
		<!-- // Content END -->


		<div id="footer" class="hidden-print">

			<!--  Copyright Line -->
			<div style="color:white;">&copy; 2016  <a href="http://www.kfcb.co.ke">KFCB</a> - All Rights Reserved. Powered by <a href="http://www.flag42.com" target="_blank">Flag4 2</a></div>
			<!--  End Copyright Line -->

		</div>
		<!-- // Footer END -->

	</div>
	<!-- // Main Container Fluid END -->

<!-- Themer -->
<div id="themer" class="collapse">
	<div class="wrapper">
		<span class="close2">&times; close</span>
		<h4>Themer <span>color options</span></h4>
		<ul>
			<li>Theme: <select id="themer-theme" class="pull-right"></select><div class="clearfix"></div></li>
			<li>Primary Color: <input type="text" data-type="minicolors" data-default="#ffffff" data-slider="hue" data-textfield="false" data-position="left" id="themer-primary-cp" /><div class="clearfix"></div></li>
			<li>
				<span class="link" id="themer-custom-reset">reset theme</span>
				<span class="pull-right"><label>advanced <input type="checkbox" value="1" id="themer-advanced-toggle" /></label></span>
			</li>
		</ul>
		<div id="themer-getcode" class="hide">
			<hr class="separator" />
			<button class="btn btn-primary btn-small pull-right btn-icon glyphicons download" id="themer-getcode-less"><i></i>Get LESS</button>
			<button class="btn btn-inverse btn-small pull-right btn-icon glyphicons download" id="themer-getcode-css"><i></i>Get CSS</button>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- // Themer END -->


	<!-- jQuery Event Move -->
	<script src="{{asset('common/theme/scripts/plugins/system/jquery.event.move/js/jquery.event.move.js')}}"></script>

	<!-- jQuery Event Swipe -->
	<script src="{{asset('common/theme/scripts/plugins/system/jquery.event.swipe/js/jquery.event.swipe.js')}}"></script>

	<!-- jQuery ScrollTo Plugin -->
	<!--[if gt IE 8]><!--><script src="http://balupton.github.io/jquery-scrollto/lib/jquery-scrollto.js')}}"></script><!--<![endif]-->

	<!-- History.js -->
	<!--[if gt IE 8]><!--><script src="http://browserstate.github.io/history.js/scripts/bundled/html4+html5/jquery.history.js')}}"></script><!--<![endif]-->

	<!-- jQuery Ajaxify -->
	<!--[if gt IE 8]><!--><script src="{{asset('common/theme/scripts/plugins/system/jquery-ajaxify/ajaxify-html5.js')}}"></script><!--<![endif]-->


	<!-- Code Beautify -->
	<script src="{{asset('common/theme/scripts/plugins/other/js-beautify/beautify.js')}}"></script>
	<script src="{{asset('common/theme/scripts/plugins/other/js-beautify/beautify-html.js')}}"></script>

	<!-- PrettyPhoto -->
	<script src="{{asset('common/theme/scripts/plugins/gallery/prettyphoto/js/jquery.prettyPhoto.js')}}"></script>

	<!-- JQueryUI -->
	<script src="{{asset('common/theme/scripts/plugins/system/jquery-ui/js/jquery-ui-1.9.2.custom.min.js')}}"></script>

	<!-- JQueryUI Touch Punch -->
	<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
	<script src="{{asset('common/theme/scripts/plugins/system/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>


	<!-- Modernizr -->
	<script src="{{asset('common/theme/scripts/plugins/system/modernizr.js')}}"></script>

	<!-- Bootstrap -->
	<script src="{{asset('common/bootstrap/js/bootstrap.min.js')}}"></script>

	<!-- SlimScroll Plugin -->
	<script src="{{asset('common/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.js')}}"></script>

	<!-- Holder Plugin -->
	<script src="{{asset('common/theme/scripts/plugins/other/holder/holder.js?1374506511')}}"></script>

	<!-- Uniform Forms Plugin -->
	<script src="{{asset('common/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js')}}"></script>

	<!-- MegaMenu -->
	<script src="{{asset('common/theme/scripts/demo/megamenu.js?1374506511')}}"></script>

	<!-- Bootstrap Extended -->
	<script src="{{asset('common/bootstrap/extend/bootstrap-select/bootstrap-select.js')}}"></script>
	<script src="{{asset('common/bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js')}}"></script>
	<script src="{{asset('common/bootstrap/extend/jasny-fileupload/js/bootstrap-fileupload.js')}}"></script>
	<script src="{{asset('common/bootstrap/extend/bootbox.js')}}"></script>
	<script src="{{asset('common/bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js')}}"></script>
	<script src="{{asset('common/bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js')}}"></script>

	<!-- Google Code Prettify -->
	<script src="{{asset('common/theme/scripts/plugins/other/google-code-prettify/prettify.js')}}"></script>

	<!-- Gritter Notifications Plugin -->
	<script src="{{asset('common/theme/scripts/plugins/notifications/Gritter/js/jquery.gritter.min.js')}}"></script>

	<!-- Notyfy Notifications Plugin -->
	<script src="{{asset('common/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.js')}}"></script>

	<!-- MiniColors Plugin -->
	<script src="{{asset('common/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.js')}}"></script>

	<!-- DateTimePicker Plugin -->
	<script src="{{asset('common/theme/scripts/plugins/forms/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>

	<!-- Cookie Plugin -->
	<script src="{{asset('common/theme/scripts/plugins/system/jquery.cookie.js')}}"></script>

	<!-- Select2 Plugin -->
	<script src="{{asset('common/theme/scripts/plugins/forms/select2/select2.js')}}"></script>

	<!-- Themer -->
	<script src="{{asset('common/theme/scripts/demo/themer.js')}}"></script>

	<!-- Twitter Feed -->
	<script src="{{asset('common/theme/scripts/demo/twitter.js')}}"></script>

	<!-- Easy-pie Plugin -->
	<script src="{{asset('common/theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart.js')}}"></script>

	<!-- Sparkline Charts Plugin -->
	<script src="{{asset('common/theme/scripts/plugins/charts/sparkline/jquery.sparkline.min.js')}}"></script>

	<!-- Ba-Resize Plugin -->
	<script src="{{asset('common/theme/scripts/plugins/other/jquery.ba-resize.js')}}"></script>



	<!-- Bootstrap Form Wizard Plugin -->
	<script src="{{asset('common/bootstrap/extend/twitter-bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>

	<!-- Form Wizards Page Demo Script -->
	<script src="{{asset('common/theme/scripts/demo/form_wizards.js')}}"></script>

	<!-- Common Demo Script -->
	<script src="{{asset('common/theme/scripts/demo/common.js?1374506511')}}"></script>

</body>
</html>
