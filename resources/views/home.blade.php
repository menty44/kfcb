<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 fluid top-full menuh-top"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 fluid top-full menuh-top"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 fluid top-full menuh-top"> <![endif]-->
<!--[if gt IE 8]> <html class="animations ie gt-ie8 fluid top-full menuh-top"> <![endif]-->
<!--[if !IE]><!--><html class="animations fluid top-full menuh-top"><!-- <![endif]-->
<head>
    <title>KFCB - Licensing Portal</title>

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
    <!--[if IE 7]><link rel="stylesheet" href="{{asset('common/theme/fonts/font-awesome/css/font-awesome-ie7.min.css')}}"><![endif]-->

    <!-- Uniform Pretty Checkboxes -->
    <link href="{{asset('common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css')}}" rel="stylesheet" />

    <!-- PrettyPhoto -->
    <link href="{{asset('common/theme/scripts/plugins/gallery/prettyphoto/css/prettyPhoto.css')}}" rel="stylesheet" />

    <!-- JQuery -->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="{{asset('common/theme/scripts/plugins/system/html5shiv.js')}}"></script>
    <![endif]-->

    <!-- Main Theme Stylesheet :: CSS -->
    <link href="{{asset('common/theme/css/style-default-menus-light.css?1374506529')}}" rel="stylesheet" type="text/css" />


    <!-- FireBug Lite -->
    <!-- <script src="https://getfirebug.com/firebug-lite-debug.js"></script> -->

    <!-- LESS.js Library -->
    <script src="{{asset('common/theme/scripts/plugins/system/less.min.js')}}"></script>

    <!-- Global -->
    <script>
        //<![CDATA[
        var basePath = '',
                commonPath = '{{asset('common/')}}'

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
<div class="container-fluid menu-hidden sidebar-hidden-phone fluid menu-left">


    <!-- Content -->
    <div id="content">

        <!-- Top navbar -->
        <div class="navbar main">

            <!-- Menu Toggle Button -->
            <button type="button" class="btn btn-navbar pull-left visible-phone">
                <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
            </button>
            <!-- // Menu Toggle Button END -->


            <ul class="topnav pull-left">
                <li class="active"><a href="index.html?lang=en&amp;layout_type=fluid&amp;style=style-default-menus-light&amp;top-sticky=false&amp;sidebar=false" class="glyphicons dashboard"><i></i> Dashboard</a></li>
                <li><a href="{{url('myapplications')}}" class="glyphicons book"><i></i> My Applications</a></li>
                <li><a href="index.html?lang=en&amp;layout_type=fixed&amp;style=style-default-menus-light&amp;sidebar=false" class="glyphicons list"><i></i> My Licenses</a></li>
                <li><a href="index.html?lang=en&amp;layout_type=fixed&amp;style=style-default-menus-light&amp;sidebar=false" class="glyphicons file"><i></i> My Invoices</a></li>
            </ul>

            <!-- Top Menu Right -->
            <ul class="topnav pull-right hidden-phone">




                <!-- Profile / Logout menu -->
                <li class="account dropdown dd-1">
                    <a data-toggle="dropdown" href="{{url('/logout')}}" class="glyphicons logout lock"><span class="hidden-tablet hidden-phone hidden-desktop-1">Logout</span><i></i></a>

                </li>
                <!-- // Profile / Logout menu END -->

            </ul>
            <!-- // Top Menu Right END -->


            <div class="clearfix"></div>

        </div>
        <!-- Top navbar END -->


        <h2 class="margin-none separator bottom"><i class="icon-film text-primary icon-fixed-width"></i> Kenya Film Classification Board - Licensing Portal</h2>
        <div class="row-fluid">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <!-- Stats Widgets -->
        <div class="row-fluid">
            <div class="span2">
                <a href="{{url('classification')}}" class="widget-stats widget-stats-default widget-stats-5">
                    <span class="glyphicons check"><i></i></span>
                    <span class="txt">Apply License for<span>Classification</span></span>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="span2">
                <a href="{{url('distributor')}}" class="widget-stats widget-stats-info widget-stats-5">
                    <span class="glyphicons home"><i></i></span>
                    <span class="txt">Apply License for<span>Video Shop</span></span>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="span2">
                <a href="{{url('exhibition')}}" class="widget-stats widget-stats-inverse widget-stats-5">
                    <span class="glyphicons display"><i></i></span>
                    <span class="txt">Apply License for<span>Video Show</span></span>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="span2">
                <a href="" class="widget-stats widget-stats-primary widget-stats-5">
                    <span class="glyphicons camera"><i></i></span>
                    <span class="txt">Apply License for<span>Film/Photo</span></span>
                    <div class="clearfix"></div>
                </a>
            </div>

            <div class="span2">
                <a href="{{url('agent')}}" class="widget-stats widget-stats-info widget-stats-5">
                    <span class="glyphicons film"><i></i></span>
                    <span class="txt">Apply License for <span>Film Agent</span></span>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="span2">
                <a href="" class="widget-stats widget-stats-inverse widget-stats-5">
                    <span class="glyphicons play"><i></i></span>
                    <span class="txt">Apply License for<span>Filming</span></span>
                    <div class="clearfix"></div>
                </a>
            </div>
        </div>
        <div class="separator bottom"></div>

        <!-- // Stats Widgets END -->


        <!-- Stats Widgets -->
        <div class="row-fluid">
            <div class="row-fluid">
                <div class="span2">
                    <div class="well margin-none">
                        <h3>Classification </h3>
                        <address class="margin-none">
                            <br/>This application is for certificate of approval of a Film or Poster.</p>
                            <abbr title="Work email">e-mail:</abbr> <a href="mailto:#">classification@kfcb.co.ke</a><br />
                            <abbr title="Work Phone">phone:</abbr> (+254) 345-678-901<br/>
                            <div class="separator bottom"></div>

                        </address>

                    </div>
                </div>

                <div class="span2">
                    <div class="well margin-none">
                        <h3>Video Shop License </h3>
                        <address class="margin-none">
                            <br/>This is for distributors for registration to operate in Kenya.</p>
                            <abbr title="Work email">e-mail:</abbr> <a href="mailto:#">videoshop@kfcb.co.ke</a><br />
                            <abbr title="Work Phone">phone:</abbr> (+254) 345-678-901<br/>
                            <div class="separator bottom"></div>

                        </address>

                    </div>
                </div>

                <div class="span2">
                    <div class="well margin-none">
                        <h3>Video Show License </h3>
                        <address class="margin-none">
                            <br/>This application is for showing film exhibitions in Kenya.</p>
                            <abbr title="Work email">e-mail:</abbr> <a href="mailto:#">videoshow@kfcb.co.ke</a><br />
                            <abbr title="Work Phone">phone:</abbr> (+254) 345-678-901<br/>
                            <div class="separator bottom"></div>

                        </address>

                    </div>
                </div>

                <!-- define film license-->
                <div class="span2">
                    <div class="well margin-none">
                        <h3>Film or Still Photo </h3>
                        <address class="margin-none">
                            <br/>This is for a license to make a film or take still photos in Kenya.</p>
                            <abbr title="Work email">e-mail:</abbr> <a href="mailto:#">filmandstill@kfcb.co.ke</a><br />
                            <abbr title="Work Phone">phone:</abbr> (+254) 345-678-901<br/>
                            <div class="separator bottom"></div>

                        </address>

                    </div>
                </div>

                <div class="span2">
                    <div class="well margin-none">
                        <h3>Film Agent/Company </h3>
                        <address class="margin-none">
                            <br/>This application is for registration of filming agents and companies.</p>
                            <abbr title="Work email">e-mail:</abbr> <a href="mailto:#">agentcompany@kfcb.co.ke</a><br />
                            <abbr title="Work Phone">phone:</abbr> (+254) 345-678-901<br/>
                            <div class="separator bottom"></div>

                        </address>

                    </div>
                </div>
                <div class="span2">
                    <div class="well margin-none">
                        <h3>Filming License </h3>
                        <address class="margin-none">

                            <br/>This information gives an overview of requirements to film in Kenya.</p>
                            <abbr title="Work email">e-mail:</abbr> <a href="mailto:#">requirements@kfcb.co.ke</a><br />
                            <abbr title="Work Phone">phone:</abbr> (+254) 345-678-901<br/>
                            <div class="separator bottom"></div>

                        </address>

                    </div>
                </div>
            </div>
            <div class="separator bottom"></div>
            <div class="separator bottom"></div>
            <div>
                <span></span>

                <h3>Frequently Asked Questions </h3><br/>
                <div class="innerLR">

                    <!-- Widget -->

                    <div class="widget widget-tabs widget-tabs-double-2 widget-tabs-gray">

                        <!-- Widget heading -->
                        <div class="widget-head">
                            <ul>
                                <li class="active"><a class="glyphicons list" href="#tabAll" data-toggle="tab"><i></i><span>All topics</span></a></li>
                                <li><a class="glyphicons user" href="#tabAccount" data-toggle="tab"><i></i><span>Classification</span></a></li>
                                <li><a class="glyphicons credit_card" href="#tabPayments" data-toggle="tab"><i></i><span>Distributor</span></a></li>
                                <li><a class="glyphicons cogwheel" href="#tabSupport" data-toggle="tab"><i></i><span>Film License</span></a></li>
                                <li><a class="glyphicons snowflake" href="#tabFeatures" data-toggle="tab"><i></i><span>Agents/Companies</span></a></li>
                            </ul>
                        </div>
                        <!-- // Widget heading END -->

                        <div class="widget-body">
                            <div class="tab-content">

                                <!-- Tab content -->
                                <div id="tabAll" class="tab-pane active">
                                    <div class="accordion accordion-2 accordion-gray" id="accordion">
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle glyphicons font" data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
                                                    <i></i>What is a License?
                                                </a>
                                            </div>
                                            <div id="collapse-1" class="accordion-body collapse in">
                                                <div class="accordion-inner">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle glyphicons circle_question_mark" data-toggle="collapse" data-parent="#accordion" href="#collapse-2">
                                                    <i></i>Why do we use it?
                                                </a>
                                            </div>
                                            <div id="collapse-2" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle glyphicons flag" data-toggle="collapse" data-parent="#accordion" href="#collapse-3">
                                                    <i></i>Where does it come from?
                                                </a>
                                            </div>
                                            <div id="collapse-3" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle glyphicons download_alt" data-toggle="collapse" data-parent="#accordion" href="#collapse-4">
                                                    <i></i>Where can I get some?
                                                </a>
                                            </div>
                                            <div id="collapse-4" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- // Tab content END -->

                                <!-- Tab content What is Classification -->
                                <div id="tabAccount" class="tab-pane">

                                    <!-- Accordion -->
                                    <div class="accordion accordion-2 accordion-gray" id="tabAccountAccordion">

                                        <!-- Accordion Group -->
                                        <div class="accordion-group">

                                            <!-- Heading -->
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle glyphicons right_arrow" data-toggle="collapse" data-parent="#tabAccountAccordion" href="#collapse-1-1">
                                                    <i></i>What is Classification?
                                                </a>
                                            </div>
                                            <!-- // Heading END -->

                                            <!-- Body -->
                                            <div id="collapse-1-1" class="accordion-body collapse in">
                                                <div class="accordion-inner">
                                                    It is the process by which the Kenya Film Board rates a movie to ascertain its suitability for the public.
                                                </div>
                                            </div>
                                            <!-- // Body END -->

                                        </div>
                                        <!-- // Accordion Group END -->

                                        <!-- Accordion Group -->
                                        <div class="accordion-group">

                                            <!-- Heading -->
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle glyphicons right_arrow" data-toggle="collapse" data-parent="#tabAccountAccordion" href="#collapse-2-1">
                                                    <i></i>How Many Types of rating are there?
                                                </a>
                                            </div>
                                            <!-- // Heading END -->

                                            <!-- Body -->
                                            <div id="collapse-2-1" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    In Kenya we currently employ only 4 types of rating. GE - General Exhibition, PG - Parental Guidance, 16 - Not Suitable for under 16's and 18 - Suitable only for those over 18.
                                                </div>
                                            </div>
                                            <!-- // Body END -->

                                        </div>
                                        <!-- // Accordion Group END -->

                                        <!-- Accordion Group -->
                                        <div class="accordion-group">

                                            <!-- Heading -->
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle glyphicons right_arrow" data-toggle="collapse" data-parent="#tabAccountAccordion" href="#collapse-3-1">
                                                    <i></i>Why can't we use already rated movies from abroad?
                                                </a>
                                            </div>
                                            <!-- // Heading -->

                                            <!-- Body -->
                                            <div id="collapse-3-1" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    Each country has its own policies on viewership. In addition, cultures differ and as such Kenya must adhere to its policies, culutre and observe the constitution.
                                                </div>
                                            </div>
                                            <!-- // Body END -->

                                        </div>
                                        <!-- // Accordion Group END -->

                                        <!-- Accordion Group -->
                                        <div class="accordion-group">

                                            <!-- Heading -->
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle glyphicons right_arrow" data-toggle="collapse" data-parent="#tabAccountAccordion" href="#collapse-4-1">
                                                    <i></i>What is the cost of rating?
                                                </a>
                                            </div>
                                            <!-- // Heading END -->

                                            <!-- Body -->
                                            <div id="collapse-4-1" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    Film rating costs KES XYZ.00
                                                </div>
                                            </div>
                                            <!-- // Body END -->

                                        </div>
                                        <!-- // Accordion Group END -->

                                    </div>
                                </div>
                                <!-- // Tab content END -->

                                <!-- Tab content -->
                                <div id="tabPayments" class="tab-pane widget-body-regular">
                                    <h5>Payments tab content</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ante est, tempor ut posuere nec, venenatis sed arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis in purus ut mauris sodales sollicitudin. Mauris cursus imperdiet dignissim. Phasellus risus felis, rutrum in laoreet vel, posuere vel dolor. Sed venenatis vehicula tempus. Nam at rutrum enim. Sed massa quam, mattis in viverra ut, ullamcorper et massa. Phasellus sapien diam, faucibus ac tempor a, condimentum quis est. Donec nec velit ante, vel mattis metus. Ut nec libero diam, id auctor sapien. Suspendisse eget lorem ante, in fringilla dui. In hac habitasse platea dictumst.</p>
                                </div>
                                <!-- // Tab content END -->

                                <!-- Tab content -->
                                <div id="tabSupport" class="tab-pane widget-body-regular">
                                    <h5>Support tab content</h5>
                                    <p>Integer porttitor, enim eu egestas ullamcorper, odio mauris semper quam, in facilisis dui ligula eget ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas dolor leo, consectetur nec tristique pretium, ornare quis purus. Nullam pulvinar, enim eu molestie venenatis, turpis nisl vehicula eros, et ultricies risus urna sed diam. Suspendisse potenti. Nullam tincidunt tellus nisi. Aenean felis eros, congue vitae hendrerit id, mattis quis mi.</p>
                                </div>
                                <!-- // Tab content END -->

                                <!-- Tab content -->
                                <div id="tabFeatures" class="tab-pane widget-body-regular">
                                    <h5>Features tab content</h5>
                                    <p>Nunc aliquet lacus laoreet odio consectetur tempus. In id nisl diam, congue vehicula sapien. Nulla facilisi. Donec sagittis cursus sollicitudin. Aenean leo tellus, eleifend quis facilisis vel, tempus ac elit. Nam eget turpis nec erat vestibulum fringilla. Donec et felis ipsum. Fusce feugiat ultricies lacus a ultrices. Nunc ultrices, orci ut convallis pulvinar, diam nunc tincidunt augue, sit amet lacinia ante mi a augue. Sed feugiat, neque eget porttitor varius, tellus nisi sollicitudin libero, nec aliquam ante dui gravida ipsum. Fusce cursus rhoncus lectus, quis malesuada sapien facilisis eu. Aenean vitae massa sed urna condimentum porttitor ac at risus.</p>
                                </div>
                                <!-- // Tab content END -->

                            </div>
                        </div>
                    </div>
                    <!-- // Widget END -->

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
        <!--[if gt IE 8]><!--><script src="http://balupton.github.io/jquery-scrollto/lib/jquery-scrollto.js"></script><!--<![endif]-->

        <!-- History.js -->
        <!--[if gt IE 8]><!--><script src="http://browserstate.github.io/history.js/scripts/bundled/html4+html5/jquery.history.js"></script><!--<![endif]-->

        <!-- jQuery Ajaxify -->
        <!--[if gt IE 8]><!--><script src="{{asset('common/theme/scripts/plugins/system/jquery-ajaxify/ajaxify-html5.js')}}"></script><!--<![endif]-->
        <!-- Code Beautify -->
        <script src="{{asset('common/theme/scripts/plugins/other/js-beautify/beautify.js')}}"></script>
        <script src="{{asset('common/theme/scripts/plugins/other/js-beautify/beautify-html.js')}}"></script>
        <!-- PrettyPhoto -->
        <script src="{{asset('common/theme/scripts/plugins/gallery/prettyphoto/js/jquery.prettyPhoto.js')}}"></script>
        <!-- Modernizr -->
        <script src="{{asset('common/theme/scripts/plugins/system/modernizr.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('common/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- SlimScroll Plugin -->
        <script src="{{asset('common/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.js')}}"></script>
        <!-- Holder Plugin -->
        <script src="{{asset('common/theme/scripts/plugins/other/holder/holder.js?1374506529')}}"></script>
        <!-- Uniform Forms Plugin -->
        <script src="{{asset('common/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js')}}"></script>
        <!-- MegaMenu -->
        <script src="{{asset('common/theme/scripts/demo/megamenu.js?1374506529')}}"></script>
        <!-- Common Demo Script -->
        <script src="{{asset('common/theme/scripts/demo/common.js?1374506529')}}"></script>

    </div>
</div>
</body>
</html>
