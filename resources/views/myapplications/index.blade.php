<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 fixed top-full menuh-top"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 fixed top-full menuh-top"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 fixed top-full menuh-top"> <![endif]-->
<!--[if gt IE 8]> <html class="animations ie gt-ie8 fixed top-full menuh-top"> <![endif]-->
<!--[if !IE]><!--><html class="animations fixed top-full menuh-top"><!-- <![endif]-->
<head>
	<title>My Applications</title>

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
	<!--[if IE 7]><link rel="stylesheet" href="../../../../../common/theme/fonts/font-awesome/css/font-awesome-ie7.min.css')}}"><![endif]-->

	<!-- Uniform Pretty Checkboxes -->
	<link href="{{asset('common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css')}}" rel="stylesheet" />

	<!-- PrettyPhoto -->
    <link href="{{asset('common/theme/scripts/plugins/gallery/prettyphoto/css/prettyPhoto.css')}}" rel="stylesheet" />

    <!-- JQuery -->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
      <script src="../../../../../common/theme/scripts/plugins/system/html5shiv.js')}}"></script>
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
	<link href="{{asset('common/theme/scripts/plugins/other/google-code-prettify/prettify.css')}}')}}" rel="stylesheet" />

	<!-- Select2 Plugin -->
	<link href="{{asset('common/theme/scripts/plugins/forms/select2/select2.css')}}"  rel="stylesheet" />

	<!-- Pageguide Guided Tour Plugin -->
	<!--[if gt IE 8]><!--><link media="screen" href="{{asset('common/theme/scripts/plugins/other/pageguide/css/pageguide.css')}}" rel="stylesheet" /><!--<![endif]-->

	<!-- DataTables Plugin -->
	<link href="{{asset('common/theme/scripts/plugins/tables/DataTables/media/css/DT_bootstrap.css')}}" rel="stylesheet" />
	<link href="{{asset('common/theme/scripts/plugins/tables/DataTables/extras/TableTools/media/css/TableTools.css')}}" rel="stylesheet" />
	<link href="{{asset('common/theme/scripts/plugins/tables/DataTables/extras/ColVis/media/css/ColVis.css')}}" rel="stylesheet" />

	<!-- Main Theme Stylesheet :: CSS -->
	<link href="{{asset('common/theme/css/style-default-menus-light.css?1374506516')}}" rel="stylesheet" type="text/css" />


	<!-- FireBug Lite -->
	<!-- <script src="https://getfirebug.com/firebug-lite-debug.js"></script> -->

	<!-- LESS.js Library -->
	<script src="{{asset('common/theme/scripts/plugins/system/less.min.js')}}"></script>

	<!-- Global -->
	<script>
	//<![CDATA[
	var basePath = '',
		commonPath = '"{{asset('common/')}}';

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
						<li><a href="{{url('/myapplications')}}" class="glyphicons book"><i></i> My Applications</a></li>
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
	<li>My Applications</li>

</ul>

<h3>My Applications</h3>
<div class="innerLR">

	<!-- Widget -->
	<div class="widget widget-heading-simple widget-body-gray">
		<div class="widget-body">

			<!-- Table -->
			<table class="dynamicTable tableTools table table-striped table-bordered table-condensed table-white">

				<!-- Table heading -->
				<thead>
					<tr>
						<th>Application Name</th>
						<th>Date Submitted</th>
						<th>Status</th>

					</tr>
				</thead>
				<!-- // Table heading END -->

				<!-- Table body -->
				<tbody>

					<!-- Table row -->
					<tr class="gradeX">
						<td>Classifcation Application</td>
						<td>3rd January 2016</td>
						<td>Licensed</td>

					</tr>
					<!-- // Table row END -->

					<!-- Table row -->
					<tr class="gradeC">
						<td>Classifcation Application</td>
						<td>24th June 2016</td>
						<td>Processing</td>

					</tr>
					<!-- // Table row END -->

					<!-- Table row -->
					<tr class="gradeA">
						<td>Video Shop Application</td>
						<td>4th May 2016</td>
						<td>Processing</td>

					</tr>
					<!-- // Table row END -->

					<!-- Table row -->
					<tr class="gradeA">
						<td>Film Agent/Company Application</td>
						<td>21st April 2016</td>
						<td>Licensed</td>

					</tr>
					<!-- // Table row END -->

					<!-- Table row -->
					<tr class="gradeA">
						<td>Video Show Application</td>
						<td>18th November 2015</td>
						<td>Licensed</td>
					</tr>
					<!-- // Table row END -->

					<!-- Table row -->
					<tr class="gradeA">
						<td>Still Photography Application</td>
						<td>12th February 2016</td>
						<td>Licensed</td>

					</tr>
					<!-- // Table row END -->

					<!-- Table row -->
					<tr class="gradeA">
						<td>Still Photography Application</td>
						<td>20th June 2016</td>
						<td>Processing</td>

					</tr>
					<!-- // Table row END -->

					<!-- Table row -->
					<tr class="gradeA">
						<td>Film Agent/Company Application</td>
						<td>10th October 2015</td>
						<td>Licensed</td>

					</tr>
					<!-- // Table row END -->

					<!-- Table row -->
					<tr class="gradeA">
						<td>Video Shop Application</td>
						<td>27th June 2015</td>
						<td>Denied</td>

					</tr>
					<!-- // Table row END -->

					<!-- Table row -->
					<tr class="gradeA">
						<td>Film Agent/Company Application</td>
						<td>19th July 2015</td>
						<td>Denied</td>

					</tr>
					<!-- // Table row END -->

					<!-- Table row -->
					<tr class="gradeA">
						<td>Video Shop Application</td>
						<td>3rd December 2015</td>
						<td>Licensed</td>

					</tr>
					<!-- // Table row END -->

					<!-- Table row -->
					<tr class="gradeA">
						<td>Classifcation Application</td>
						<td>24th June 2016</td>
						<td>Denied</td>
					</tr>
					<!-- // Table row END -->

					<!-- Table row -->
					<tr class="gradeA">
						<td>Video Show Application</td>
						<td>3rd February 2016</td>
						<td>Denied</td>
					</tr>
					<!-- // Table row END -->

				</tbody>
				<!-- // Table body END -->

			</table>
			<!-- // Table END -->

		</div>
	</div>


	<div class="separator bottom"></div>


	</div>
	<!-- // Widget END -->

	<div class="separator bottom"></div>



</div>


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
	<script src="{{asset('common/theme/scripts/plugins/other/holder/holder.js?1374506516')}}"></script>

	<!-- Uniform Forms Plugin -->
	<script src="{{asset('common/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js')}}"></script>

	<!-- MegaMenu -->
	<script src="{{asset('common/theme/scripts/demo/megamenu.js?1374506516')}}"></script>

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




	<!-- DataTables Tables Plugin -->
	<script src="{{asset('common/theme/scripts/plugins/tables/DataTables/media/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('common/theme/scripts/plugins/tables/DataTables/extras/TableTools/media/js/TableTools.min.js')}}"></script>
	<script src="{{asset('common/theme/scripts/plugins/tables/DataTables/extras/ColVis/media/js/ColVis.min.js')}}"></script>
	<script src="{{asset('common/theme/scripts/plugins/tables/DataTables/media/js/DT_bootstrap.js')}}"></script>

	<!-- Tables Demo Script -->
	<script src="{{asset('common/theme/scripts/demo/tables.js')}}"></script>

	<!-- Common Demo Script -->
	<script src="{{asset('common/theme/scripts/demo/common.js?1374506516')}}"></script>

</body>
</html>
