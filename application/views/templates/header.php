
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Aplikasi</title>

		<meta name="description" content="top menu &amp; navigation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/font-awesome.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="../assets/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="../assets/css/ace-ie.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url() ?>assets/assets/js/ace-extra.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="../assets/js/html5shiv.js"></script>
		<script src="../assets/js/respond.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
		<div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="" class="navbar-brand">
						<small>
							<i class="fa fa-list-alt"></i>
							&nbsp Sistem Pembayaran
						</small>
					</a>

					<!-- /section:basics/navbar.layout.brand -->

					<!-- #section:basics/navbar.toggle -->
					<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
						<span class="sr-only">Toggle user menu</span>

						<img src="<?php echo base_url() ?>assets/assets/avatars/user.jpg" alt="Jason's Photo" />
					</button>

					<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
						<span class="sr-only">Toggle sidebar</span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>
					</button>

					<!-- /section:basics/navbar.toggle -->
				</div>

				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
					<ul class="nav ace-nav">
						
						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue user-min">
							<a data-toggle="dropdown" href="" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url() ?>assets/assets/avatars/avatar2.png" alt="Jason's Photo" />
								<span class="user-info">
									Welcome, Admin
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="update_pass"> Ganti Profile</a>
								</li>
								<li>
									<a href="logout">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->
				<nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
					<!-- #section:basics/navbar.nav -->
					<ul class="nav navbar-nav">
						<li>
							

							<ul class="dropdown-menu dropdown-light-blue dropdown-caret">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-eye bigger-110 blue"></i>
										Monthly Visitors
									</a>
								</li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-user bigger-110 blue"></i>
										Active Users
									</a>
								</li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog bigger-110 blue"></i>
										Settings
									</a>
								</li>
							</ul>
						</li>

						<li>
							
						</li>
					</ul>

					<!-- /section:basics/navbar.nav -->

					<!-- #section:basics/navbar.form -->
					

					<!-- /section:basics/navbar.form -->
				</nav>
			</div><!-- /.navbar-container -->
		</div>

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='../assets/js/jquery.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url() ?>assets/assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url() ?>assets/assets/js/bootstrap.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="<?php echo base_url() ?>assets/assets/js/ace/elements.scroller.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/elements.colorpicker.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/elements.fileinput.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/elements.typeahead.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/elements.wysiwyg.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/elements.spinner.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/elements.treeview.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/elements.wizard.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/elements.aside.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/ace.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/ace.ajax-content.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/ace.touch-drag.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/ace.sidebar.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/ace.sidebar-scroll-1.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/ace.submenu-hover.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/ace.widget-box.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/ace.settings.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/ace.settings-rtl.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/ace.settings-skin.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/ace.widget-on-reload.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/ace.searchbox-autocomplete.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 var $sidebar = $('.sidebar').eq(0);
			 if( !$sidebar.hasClass('h-sidebar') ) return;
			
			 $(document).on('settings.ace.top_menu' , function(ev, event_name, fixed) {
				if( event_name !== 'sidebar_fixed' ) return;
			
				var sidebar = $sidebar.get(0);
				var $window = $(window);
			
				//return if sidebar is not fixed or in mobile view mode
				var sidebar_vars = $sidebar.ace_sidebar('vars');
				if( !fixed || ( sidebar_vars['mobile_view'] || sidebar_vars['collapsible'] ) ) {
					$sidebar.removeClass('lower-highlight');
					//restore original, default marginTop
					sidebar.st yle.marginTop = '';
			
					$window.off('scroll.ace.top_menu')
					return;
				}
			    
			
				 var done = false;
				 $window.on('scroll.ace.top_menu', function(e) {
			
					var scroll = $window.scrollTop();
					scroll = parseInt(scroll / 4);//move the menu up 1px for every 4px of document scrolling
					if (scroll > 17) scroll = 17;
			
			
					if (scroll > 16) {			
						if(!done) {
							$sidebar.addClass('lower-highlight');
							done = true;
						}
					}
					else {
						if(done) {
							$sidebar.removeClass('lower-highlight');
							done = false;
						}
					}
			
					sidebar.style['marginTop'] = (17-scroll)+'px';
				 }).triggerHandler('scroll.ace.top_menu');
			
			 }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
			
			 $(window).on('resize.ace.top_menu', function() {
				$(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
			 });
			
			
			});
		</script>

		<!-- the following scripts are used in demo only for onpage help and you don't need them -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/ace.onpage-help.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/docs/assets/js/themes/sunburst.css" />

		<script type="text/javascript"> ace.vars['base'] = '..'; </script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/elements.onpage-help.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/ace/ace.onpage-help.js"></script>
		<script src="<?php echo base_url() ?>assets/docs/assets/js/rainbow.js"></script>
		<script src="<?php echo base_url() ?>assets/docs/assets/js/language/generic.js"></script>
		<script src="<?php echo base_url() ?>assets/docs/assets/js/language/html.js"></script>
		<script src="<?php echo base_url() ?>assets/docs/assets/js/language/css.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/dataTables/jquery.dataTables.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/dataTables/jquery.dataTables.bootstrap.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/dataTables/extensions/TableTools/js/dataTables.tableTools.js"></script>
		<script src="<?php echo base_url() ?>assets/assets/js/dataTables/extensions/ColVis/js/dataTables.colVis.js"></script>
		<script src="<?php echo base_url() ?>assets/docs/assets/js/language/javascript.js"></script>
	</body>
</html>
<script>
	$(document).ready(function (){
		$("#dynamic-table").DataTable();
	});
</script>