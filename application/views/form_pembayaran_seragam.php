

	<body class="no-skin">

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>

			<!-- /section:basics/sidebar.horizontal -->
			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<!-- #section:settings.box -->
						<div class="ace-settings-container" id="ace-settings-container">
							
							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<!-- #section:settings.skins -->
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<!-- /section:settings.skins -->

									<!-- #section:settings.navbar -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<!-- /section:settings.navbar -->

									<!-- #section:settings.sidebar -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<!-- /section:settings.sidebar -->

									<!-- #section:settings.breadcrumbs -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<!-- /section:settings.breadcrumbs -->

									<!-- #section:settings.rtl -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<!-- /section:settings.rtl -->

									<!-- #section:settings.container -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>

									<!-- /section:settings.container -->
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<!-- #section:basics/sidebar.options -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>

									<!-- /section:basics/sidebar.options -->
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<!-- /section:settings.box -->
						<div class="row">
							<div class="col-xs-3">
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-info visible-sm visible-xs">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Please note that
									<span class="blue bolder">top menu style</span>
									is visible only in devices larger than
									<span class="blue bolder">991px</span>
									which you can change using CSS builder tool.
								</div>

								<div class="well well-sm visible-sm visible-xs">
									Top menu can become any of the 3 mobile view menu styles:
									<em>default</em>
,
									<em>collapsible</em>
									or
									<em>minimized</em>.
								</div>
								<h3> <b>Detail Siswa</b> </h3><br>
								<div class="profile-user-info profile-user-info-striped">
											
												<div class="profile-info-row">
													<div class="profile-info-name"> Sekolah </div>

													<div class="profile-info-value">
														<i class="fa fa-map-marker light-orange bigger-110"></i> &nbsp 
														<span class="editable" id="country"> <?php echo $year->school ?> </span>
														
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> NIS </div>

													<div class="profile-info-value">
														<span class="editable" id="username">
															<?php echo $detail->nis ?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Nama </div>

													<div class="profile-info-value">
														<span class="editable" id="username"><?php echo $detail->name ?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Kelas </div>

													<div class="profile-info-value">
														<span class="editable" id="age"><?php echo $detail->class ?></span>
													</div>
												</div>
											
										</div>

									
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
							
						<!-- /.row -->
					<!-- /.page-content -->
					
						<div class="row">
							<div class="col-xs-8">
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-info visible-sm visible-xs">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Please note that
									<span class="blue bolder">top menu style</span>
									is visible only in devices larger than
									<span class="blue bolder">980px</span>
									which you can change using CSS builder tool.
								</div>

								<div class="well well-sm visible-sm visible-xs">
									Top menu can become any of the 3 mobile view menu styles:
									<em>default</em>,
									<em>collapsible</em>
									or
									<em>minimized</em>.
								</div>
								<h3> <b>Form Pembayaran Seragam Sekolah</b> </h3><br>
								<div class="center">
									<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														
														<th>Jenis</th>
														<th class="hidden-480">Tagihan
														</th>
														<th>
															Bayar
														</th>
														
													</tr>
												</thead>

												<tbody>
													<?php foreach ($uniform as $uni) : ?>
													<tr>
														
														<td><?php echo $uni->jenis ?></td>
														
														<td>
															<?php echo $uni->claim ?>
														
															<form method="post" action="<?php echo base_url().'SPP/bayar_seragam'; ?>">
																<div class="form-group">
																	<input type="hidden" name="id_payment" class="form-control">
																</div>
																<div class="form-group">
																	<input type="hidden" name="nis" class="form-control" value = <?php echo $detail->nis ?> >
																</div>
																<div class="form-group">
																	<input type="hidden" name="jenis" class="form-control"value = "<?php echo $uni->jenis ?>">
																</div>
																
																<div class="form-group">
																	<input type="hidden" name="claim" class="form-control" value = <?php echo $uni->claim ?>>
																</div>
																<div class="form-group">
																	<input type="hidden" name="status" class="form-control" value = "1">
																</div>
																<div class="form-group">
																	<input type="hidden" name="date" class="form-control" value = <?= $date=date('Y-m-d')?> >
																</div>
																<div class="form-group">
																	<input type="hidden" name="class" class="form-control" value = <?php echo $detail->class ?> >
																</div>
																<div class="form-group">
																	<input type="hidden" name="name" class="form-control" value = "<?php echo $detail->name ?>" >
																</div>
																
																  	<?php echo anchor('SPP/bayar_seragam/'.$detail->nis,'<td><button class="btn btn-xs btn-success pull-mid">
																		<span class="bigger-110">Bayar</span>
																		</button></td>' ) ?>
																
															</form>
														</td>
														
													</tr>
													<?php endforeach; ?>
												</tbody>
											</table>
										</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div>
		</div><!-- /.main-content -->

			

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		