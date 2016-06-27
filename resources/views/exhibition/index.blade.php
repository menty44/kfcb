<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 fixed top-full menuh-top"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 fixed top-full menuh-top"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 fixed top-full menuh-top"> <![endif]-->
<!--[if gt IE 8]> <html class="animations ie gt-ie8 fixed top-full menuh-top"> <![endif]-->
<!--[if !IE]><!--><html class="animations fixed top-full menuh-top"><!-- <![endif]-->
<head>
	<title>KFCB - Exhibitor Application</title>

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
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

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
	<link href="{{asset('common/theme/scripts/plugins/other/google-code-prettify/prettify.css')}}')}}" rel="stylesheet" />

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
	<li>Film Exhibition License Application</li>

</ul>

<h2>Film Exhibition License Application </h2>
<div class="innerLR">

<!-- -->

<!-- Form -->
<form class="form-horizontal margin-none" id="validateSubmitForm" method="POST" action="{{ url('/exhibition') }}" autocomplete="off">
	{{ csrf_field() }}

	<!-- Widget -->
	<div class="widget widget-heading-simple widget-body-gray">



		<div class="widget-body">

			<!-- Row -->
			<div class="row-fluid">

				<!-- Column -->
				<div class="span12">

					<!-- Group -->
					<div class="control-group {{ $errors->has('companyname') ? ' has-error' : '' }}">
						<h4>Company Details</h4>
						<!-- <label class="control-label" for="companyname">Name of Company</label> -->
						<div class="controls"><input class="span12" id="companyname" name="companyname" type="text" value="{{ old('companyname') }}" /></div>
						<!-- @if ($errors->has('companyname'))
                            <span class="help-block">
                            <strong><font color="red">{{ $errors->first('companyname') }}</font></strong>
                            </span>
                        @endif -->
					</div>
					<!-- // Group END -->

					<hr class="separator" />

				</div>



					<!-- <hr class="separator" />-->




			</div>
			<!-- // Row END -->

			<!-- Row for town area and address-->
			<div class="row-fluid">

				<!-- Column for Ad & tel -->
				<div class="span6">

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="address">Address</label>
						<div class="controls"><input class="span12" id="address" name="address" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="telephone">Telephone</label>
						<div class="controls"><input class="span12" id="telephone" name="telephone" type="text" /></div>
					</div>
					<!-- // Group END -->


				</div>
				<!-- // Column END -->

				<!-- Column for Town and Plot -->
				<div class="span6">

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="town">Town/Area</label>
						<div class="controls">
							<select class="selectpicker span12" data-style="btn-primary" name="town">
								<option>Baragoi</option>
								<option>Bungoma</option>
								<option>Busia</option>
								<option>Butere</option>
								<option>Dadaab</option>
								<option>Diani Beach</option>
								<option>Eldoret</option>
								<option>Emali</option>
								<option>Embu</option>
								<option>Garissa</option>
								<option>Gede</option>
								<option>Hola</option>
								<option>Homa Bay</option>
								<option>Isiolo</option>
								<option>Kitui</option>
								<option>Kibwezi</option>
								<option>Makindu</option>
								<option>Wote</option>
								<option>Mutomo</option>
								<option>Kajiado</option>
								<option>Kakamega</option>
								<option>Kakuma</option>
								<option>Kapenguria</option>
								<option>Kericho</option>
								<option>Kiambu</option>
								<option>Kilifi</option>
								<option>Kisii</option>
								<option>Kisumu</option>
								<option>Kitale</option>
								<option>Lamu</option>
								<option>Langata</option>
								<option>Litein</option>
								<option>Lodwar</option>
								<option>Lokichoggio</option>
								<option>Londiani</option>
								<option>Loyangalani</option>
								<option>Machakos</option>
								<option>Malindi</option>
								<option>Mandera</option>
								<option>Maralal</option>
								<option>Marsabit</option>
								<option>Meru</option>
								<option>Mombasa</option>
								<option>Moyale</option>
								<option>Mumias</option>
								<option>Muranga</option>
								<option>Nairobi</option>
								<option>Naivasha</option>
								<option>Nakuru</option>
								<option>Namanga</option>
								<option>Nanyuki</option>
								<option>Naro Moru</option>
								<option>Narok</option>
								<option>Nyahururu</option>
								<option>Nyeri</option>
								<option>Ruiru</option>
								<option>Shimoni</option>
								<option>Takaungu</option>
								<option>Thika</option>
								<option>Vihiga</option>
								<option>Voi</option>
								<option>Wajir</option>
								<option>Watamu</option>
								<option>Webuye</option>
								<option>Wundanyi</option>
							</select>

						</div>

					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="plot">Plot No</label>
						<div class="controls"><input class="span12" id="plot" name="plot" type="text" /></div>
					</div>
					<!-- // Group END -->


				</div>
				<!-- // Column END -->

			</div>
			<!-- // Row END -->


			<hr class="separator" />

			<h5> Enter Director/Proprietor Details</h5>
			<!-- Row for director details-->
			<div class="row-fluid">

				<!-- Column for Dir1 and 2 -->
				<div class="span6">

					<!-- Group -->
					<div class="control-group" {{ $errors->has('Director1') ? ' has-error' : '' }}">
						<label class="control-label" for="Director1">Director 1</label>
						<div class="controls"><input class="span12" id="Director1" name="Director1" type="text" value="{{ old('companyname') }}" /></div>
						@if ($errors->has('Director1'))
                            <span class="help-block">
                            <strong><font color="red">{{ $errors->first('Director1') }}</font></strong>
                            </span>
                        @endif
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="Director2">Director 2</label>
						<div class="controls"><input class="span12" id="Director2" name="Director2" type="text" /></div>
					</div>
					<!-- // Group END -->

				</div>
				<!-- end column -->

				<!-- Column for Dir2 and 23-->
				<div class="span6">
					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="Director3">Director 3</label>
						<div class="controls"><input class="span12" id="Director1" name="Director3" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="Director4">Director 4</label>
						<div class="controls"><input class="span12" id="Director1" name="Director4" type="text" /></div>
					</div>
					<!-- // Group END -->

				</div>
				<!-- end column -->

			</div>
			<!-- // Row END -->

			<hr class="separator" />
			<h5>Enter Exhibition Details</h5>
			<!-- Row for exhibition details -->
			<div class="row-fluid">

				<!-- Column for Exhibition details 1-->
				<div class="span6">

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="seatno">No. of Seats</label>
						<div class="controls"><input class="span12" id="seatno" name="seatno" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="seatcapacity">Capacity</label>
						<div class="controls"><input class="span12" id="seatcapacity" name="seatcapacity" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="employeeno">No. of Employees</label>
						<div class="controls"><input class="span12" id="employeeno" name="employeeno" type="text" /></div>
					</div>

				</div>

				<!-- Column for Exhibition details 2-->
				<div class="span6">

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="toiletno">No. of Toilets</label>
						<div class="controls"><input class="span12" id="toiletno" name="toiletno" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="ventilation">Type of Ventilation</label>
						<div class="controls"><input class="span12" id="ventilation" name="ventilation" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="extinguishers">No. of Fire Extinguishers</label>
						<div class="controls"><input class="span12" id="extinguishers" name="extinguishers" type="text" /></div>
					</div>
					<!-- // Group END -->
				</div>
				<!-- end column -->

			</div>
			<!-- // Row END -->

			<hr class="separator" />

			<h5>Do You Have a?</h5>
			<!-- Row for exhibition details -->
			<div class="row-fluid">

				<!-- Column for  Do you have set 1-->
				<div class="span6">
					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="bookingoffice">Booking office?</label>
						<div class="controls">
							<select class="selectpicker span12" data-style="btn-primary" name="booking">
								<option>Yes</option>
								<option>No</option>
							</select>

						</div>

					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="projectionroom">Projection room?</label>
						<div class="controls">
							<select class="selectpicker span12" data-style="btn-primary" name="projroom">
								<option>Yes</option>
								<option>No</option>
							</select>

						</div>

					</div>
					<!-- // Group END -->
				</div>
				<!-- end column -->

				<!-- Column for Do you have set 2-->
				<div class="span6">

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="projectTv">First aid Kit on premise?</label>
						<div class="controls">
							<select class="selectpicker span12" data-style="btn-primary" name="firstaidkit">
								<option>Yes</option>
								<option>No</option>
							</select>

						</div>

					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="projectTv">Is projection by TV?</label>
						<div class="controls">
							<select class="selectpicker span12" data-style="btn-primary" name="projtv">
								<option>Yes</option>
								<option>No</option>
							</select>

						</div>

					</div>
					<!-- // Group END -->


				</div>
				<!-- end column -->

			</div>
			<!-- // Row END -->
			<h5> Other Details</h5>
			<!-- Row -->
			<div class="row-fluid">

				<!-- Column for Dir1 and 2 -->
				<div class="span6">

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="otheramenities">Describe other social amenities attached to exhibition</label>
						<div class="controls">
							<!--<input class="span12" id="police" name="police" type="text" />-->
							<textarea class="span12" name="amenities"> </textarea>
						</div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="childfee">Admission Fee Child</label>
						<div class="controls"><input class="span12" id="childfee" name="childfee" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="firstshow">1st Show Time</label>
						<div class="controls"><input class="span12" id="firstshow" name="firstshow" type="text" /></div>
					</div>
					<!-- // Group END -->


				</div>
				<!-- end column -->

				<!-- Column for Dir2 and 23-->
				<div class="span6">

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="otherexhibitions">Give details of other exhibitions owned in Kenya</label>
						<div class="controls">
							<!--<input class="span12" id="police" name="police" type="text" />-->
							<textarea class="span12" name="otherexhibitions"> </textarea>
						</div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="adultfee">Admission Fee Adult</label>
						<div class="controls"><input class="span12" id="adultfee" name="adultfee" type="text" /></div>
					</div>
					<!-- // Group END -->

					<!-- Group -->
					<div class="control-group">
						<label class="control-label" for="lastshow">Last Show Time</label>
						<div class="controls"><input class="span12" id="lastshow" name="lastshow" type="text" /></div>
					</div>
					<!-- // Group END -->

				</div>
				<!-- end column -->

			</div>
			<!-- // Row END -->

			<hr class="separator" />

			<!-- Row for exhibition details -->


			<!-- // Row END -->
			<h5> County Details</h5>
			<!-- Row -->
			<div class="row-fluid">

				<!-- Group -->
				<div class="control-group">
					<label class="control-label" for="police">Nearest Police station</label>
					<div class="controls"><input class="span12" id="police" name="police" type="text" /></div>
				</div>
				<!-- // Group END -->

				<!-- Group -->
				<div class="control-group">
					<label class="control-label" for="chiefs">Chiefs Office</label>
					<div class="controls"><input class="span12" id="chiefs" name="chiefs" type="text" /></div>
				</div>
				<!-- // Group END -->

				<!-- Group -->
				<div class="control-group">
					<label class="control-label" for="countyoffice">Nearest County Office</label>
					<div class="controls"><input class="span12" id="countyoffice" name="countyoffice" type="text" /></div>
				</div>
				<!-- // Group END -->				

					<div><input class="span12" id="fee" name="fee" type="hidden" value="10000" /></div>


			</div>
			<!-- // Row END -->
			<hr class="separator" />
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
					<h4 style="margin-bottom: 10px;">Digital Signature</h4>
					<label class="checkbox" for="sign">
						<input type="checkbox" class="checkbox" id="sign" name="sign" />
						Click this to digitally sign your application.
					</label>
				</p>
				</div>
				<!-- // Column END -->



				<div class="span6">
					<h4 style="margin-bottom: 10px;">Cap. 222</h4>
					It is unlawful (Cap. 222) to display, sell or hire out movie content before it is examined and
					classification labels affixed or operate without a valid film license. I hereby agree to abide by
					the Cap 222 Laws of Kenya regulations and conform that the details given above are true to the
					best of my knowledge.
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
	<!--[if gt IE 8]><!--><script src="http://balupton.github.io/jquery-scrollto/lib/jquery-scrollto.js"></script><!--<![endif]-->

	<!-- History.js -->
	<!--[if gt IE 8]><!--><script src="http://browserstate.github.io/history.js/scripts/bundled/html4+html5/jquery.history.js"></script><!--<![endif]-->

	<!-- jQuery Ajaxify -->
	<!--[if gt IE 8]><!--><script src="../../../../../common/theme/scripts/plugins/system/jquery-ajaxify/ajaxify-html5.js')}}"></script><!--<![endif]-->


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
