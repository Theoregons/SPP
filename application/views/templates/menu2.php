<!-- /section:basics/navbar.layout -->
<style type="text/css">


</style>		
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<!-- #section:basics/sidebar.horizontal -->
			<div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-small" id="sidebar-shortcuts-small">
						<img class="nav-user-photo" src="<?php echo base_url() ?>assets/assets/avatars/logo2.png" alt="Jason's Photo" />
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					
					<li class="hover">
						<a href="../Pembayaran">
							<i class="menu-icon fa fa-list-alt" ></i>
							<span class="menu-text">
								Pembayaran
							</span>
						</a>
					</li>

					<li class="hover">
						<a href="../DataSiswa">
							<i class="menu-icon fa fa-list"></i>	
							<span class="menu-text">
								Data Siswa
							</span>
						</a>
					</li>

					<li class="hover">
						<a href="../Tahun" >
							<i class="menu-icon fa fa-calendar"></i>
							<span class="menu-text">
								Jenis pembayaran
							</span>
						</a>

					</li>

					
					<li class="hover">
						<a href="../Rekap">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Rekap Data </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

					</li>
				</ul>
			</div>
		</div>
		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url() ?>assets/assets/js/jquery.js'>"+"<"+"/script>");
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
					sidebar.style.marginTop = '';
			
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
