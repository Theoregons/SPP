

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
								<h3> <b>Data Siswa</b> </h3><br>
								<div class="profile-user-info profile-user-info-striped">
											
												<div class="profile-info-row">
													<div class="profile-info-name"> Sekolah </div>

													<div class="profile-info-value">
														<i class="fa fa-map-marker light-orange bigger-110"></i> &nbsp 
														<span class="editable" id="country"> <?php echo $year->school ?> </span>
														
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Tahun Ajaran </div>

													<div class="profile-info-value">
														<span class="editable" id="username"><?php echo $year->year ?></span>
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
								<h3> <b>Form Pembayaran SPP</b> </h3><br>
								<div class="center">
									<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														
														<th>No.</th>
														<th>Bulan</th>
														<th class="hidden-480">Tagihan
														</th>
														<th>
															Bayar
														</th>
														
													</tr>
												</thead>

												<tbody>
													
													<tr>
														
														<td>1</td>
														<td>Januari</td>
														

														<td>
															<?php echo $year->claim ?>
															<form method="post" action="<?php echo base_url().'SPP/bayar'; ?>">
																<div class="form-group">
																	<input type="hidden" name="id_payment" class="form-control">
																</div>
																<div class="form-group">
																	<input type="hidden" name="nis" class="form-control" value = "<?php echo $detail->nis ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="month_name" class="form-control"value = "Januari">
																</div>
																
																<div class="form-group">
																	<input type="hidden" name="claim" class="form-control" value = <?php echo $year->claim ?>>
																</div>
																<div class="form-group">
																	<input type="hidden" name="status" class="form-control" value = "1">
																</div>
																<div class="form-group">
																	<input type="hidden" name="date" class="form-control" value = <?= $date=date('Y-m-d')?> >
																</div>
																<div class="form-group">
																	<input type="hidden" name="class" class="form-control" value = "<?php echo $detail->class ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="name" class="form-control" value = "<?php echo $detail->name ?>">
																</div>
																
																  <?php if($detail->status >= "1") {
																  	?> <td>Lunas</td>
																  <?php } 
																  else { ?>
																  	<?php echo anchor('SPP/bayar/'.$detail->nis,'<td><button class="btn btn-xs btn-success pull-mid">
																		<span class="bigger-110">Bayar</span>
																		</button></td>' ) ?>
																  <?php } ?>
																
															</form>
														</td>
														
													</tr>
													
													
													<tr>
														<td>2</td>
														<td>Februari</td>
														
														<!--<td class="hidden-480">Belum Lunas</td> -->
														
															<td>
															<?php echo $year->claim ?>
															<form method="post" action="<?php echo base_url().'SPP/bayar2'; ?>">
																<div class="form-group">
																	<input type="hidden" name="id_payment" class="form-control">
																</div>
																<div class="form-group">
																	<input type="hidden" name="nis" class="form-control" value = "<?php echo $detail->nis ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="month_name" class="form-control"value = "Februari">
																</div>
																
																<div class="form-group">
																	<input type="hidden" name="claim" class="form-control" value = <?php echo $year->claim ?>>
																</div>
																<div class="form-group">
																	<input type="hidden" name="status" class="form-control" value = "2">
																</div>
																<div class="form-group">
																	<input type="hidden" name="date" class="form-control" value = <?= $date=date('Y-m-d')?> >
																</div>
																<div class="form-group">
																	<input type="hidden" name="class" class="form-control" value = "<?php echo $detail->class ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="name" class="form-control" value = "<?php echo $detail->name ?>">
																</div>
																
																  <?php if($detail->status >= "2") {
																  	?> <td>Lunas</td>
																  <?php }
																  elseif($detail->status < "1") { 
																  	?> <td> </td>
																  <?php }
																  else { ?>
																  	<?php echo anchor('SPP/bayar2/'.$detail->nis,'<td><button class="btn btn-xs btn-success pull-mid">
																		<span class="bigger-110">Bayar</span>
																		</button></td>' ) ?>
																  <?php } ?>
																
															</form>
														</td>
													</tr>
													<tr>
														<td>3</td>
														<td>Maret</td>
														
														<!-- <td class="hidden-480">Belum Lunas</td> -->
														<td>
															<?php echo $year->claim ?>
															<form method="post" action="<?php echo base_url().'SPP/bayar3'; ?>">
																<div class="form-group">
																	<input type="hidden" name="id_payment" class="form-control">
																</div>
																<div class="form-group">
																	<input type="hidden" name="nis" class="form-control" value = "<?php echo $detail->nis ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="month_name" class="form-control"value = "Maret">
																</div>
																
																<div class="form-group">
																	<input type="hidden" name="claim" class="form-control" value = <?php echo $year->claim ?>>
																</div>
																<div class="form-group">
																	<input type="hidden" name="status" class="form-control" value = "3">
																</div>
																<div class="form-group">
																	<input type="hidden" name="date" class="form-control" value = <?= $date=date('Y-m-d')?> >
																</div>
																<div class="form-group">
																	<input type="hidden" name="class" class="form-control" value = "<?php echo $detail->class ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="name" class="form-control" value = "<?php echo $detail->name ?>">
																</div>
																
																  <?php if($detail->status >= "3") {
																  	?> <td>Lunas</td>
																  <?php }
																  elseif($detail->status < "2") { 
																  	?> <td> </td>
																  <?php }
																  else { ?>
																  	<?php echo anchor('SPP/bayar3/'.$detail->nis,'<td><button class="btn btn-xs btn-success pull-mid">
																		<span class="bigger-110">Bayar</span>
																		</button></td>' ) ?>
																  <?php } ?>
																
															</form>
														</td>
														
													</tr>
													<tr>
														<td>4</td>
														<td>April</td>
														<!-- <td class="hidden-480">Belum Lunas</td> -->
														<td>
															<?php echo $year->claim ?>
															<form method="post" action="<?php echo base_url().'SPP/bayar4'; ?>">
																<div class="form-group">
																	<input type="hidden" name="id_payment" class="form-control">
																</div>
																<div class="form-group">
																	<input type="hidden" name="nis" class="form-control" value = "<?php echo $detail->nis ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="month_name" class="form-control"value = "April">
																</div>
																
																<div class="form-group">
																	<input type="hidden" name="claim" class="form-control" value = <?php echo $year->claim ?>>
																</div>
																<div class="form-group">
																	<input type="hidden" name="status" class="form-control" value = "4">
																</div>
																<div class="form-group">
																	<input type="hidden" name="date" class="form-control" value = <?= $date=date('Y-m-d')?> >
																</div>
																<div class="form-group">
																	<input type="hidden" name="class" class="form-control" value = "<?php echo $detail->class ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="name" class="form-control" value = "<?php echo $detail->name ?>">
																</div>
																
																  <?php if($detail->status >= "4") {
																  	?> <td>Lunas</td>
																  <?php }
																  elseif($detail->status < "3") { 
																  	?> <td> </td>
																  <?php }
																  else { ?>
																  	<?php echo anchor('SPP/bayar4/'.$detail->nis,'<td><button class="btn btn-xs btn-success pull-mid">
																		<span class="bigger-110">Bayar</span>
																		</button></td>' ) ?>
																  <?php } ?>
																
															</form>
														</td>
														
													</tr>
													<tr>
														<td>5</td>
														<td>Mei</td>
														
														<!-- <td class="hidden-480">Belum Lunas</td> -->
														<td>
															<?php echo $year->claim ?>
															<form method="post" action="<?php echo base_url().'SPP/bayar5'; ?>">
																<div class="form-group">
																	<input type="hidden" name="id_payment" class="form-control">
																</div>
																<div class="form-group">
																	<input type="hidden" name="nis" class="form-control" value = "<?php echo $detail->nis ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="month_name" class="form-control"value = "Mei">
																</div>
																
																<div class="form-group">
																	<input type="hidden" name="claim" class="form-control" value = <?php echo $year->claim ?>>
																</div>
																<div class="form-group">
																	<input type="hidden" name="status" class="form-control" value = "5">
																</div>
																<div class="form-group">
																	<input type="hidden" name="date" class="form-control" value = <?= $date=date('Y-m-d')?> >
																</div>
																<div class="form-group">
																	<input type="hidden" name="class" class="form-control" value = "<?php echo $detail->class ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="name" class="form-control" value = "<?php echo $detail->name ?>">
																</div>
																
																  <?php if($detail->status >= "5") {
																  	?> <td>Lunas</td>
																  <?php }
																  elseif($detail->status < "4") { 
																  	?> <td> </td>
																  <?php }
																  else { ?>
																  	<?php echo anchor('SPP/bayar5/'.$detail->nis,'<td><button class="btn btn-xs btn-success pull-mid">
																		<span class="bigger-110">Bayar</span>
																		</button></td>' ) ?>
																  <?php } ?>
																
															</form>
														</td>
														
													</tr>
													<tr>
														<td>6</td>
														<td>Juni</td>
														
														<!-- <td class="hidden-480">Belum Lunas</td> -->
														<td>
															<?php echo $year->claim ?>
															<form method="post" action="<?php echo base_url().'SPP/bayar6'; ?>">
																<div class="form-group">
																	<input type="hidden" name="id_payment" class="form-control">
																</div>
																<div class="form-group">
																	<input type="hidden" name="nis" class="form-control" value = "<?php echo $detail->nis ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="month_name" class="form-control"value = "Juni">
																</div>
																
																<div class="form-group">
																	<input type="hidden" name="claim" class="form-control" value = <?php echo $year->claim ?>>
																</div>
																<div class="form-group">
																	<input type="hidden" name="status" class="form-control" value = "6">
																</div>
																<div class="form-group">
																	<input type="hidden" name="date" class="form-control" value = <?= $date=date('Y-m-d')?> >
																</div>
																<div class="form-group">
																	<input type="hidden" name="class" class="form-control" value = "<?php echo $detail->class ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="name" class="form-control" value = "<?php echo $detail->name ?>">
																</div>
															
																  <?php if($detail->status >= "6") {
																  	?> <td>Lunas</td>
																  <?php }
																  elseif($detail->status < "5") { 
																  	?> <td> </td>
																  <?php }
																  else { ?>
																  	<?php echo anchor('SPP/bayar6/'.$detail->nis,'<td><button class="btn btn-xs btn-success pull-mid">
																		<span class="bigger-110">Bayar</span>
																		</button></td>' ) ?>
																  <?php } ?>
																
															</form>
														</td>
														
													</tr>
													<tr>
														<td>7</td>
														<td>Juli</td>
														
														<!-- <td class="hidden-480">Belum Lunas</td> -->
														<td>
															<?php echo $year->claim ?>
															<form method="post" action="<?php echo base_url().'SPP/bayar7'; ?>">
																<div class="form-group">
																	<input type="hidden" name="id_payment" class="form-control">
																</div>
																<div class="form-group">
																	<input type="hidden" name="nis" class="form-control" value = "<?php echo $detail->nis ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="month_name" class="form-control"value = "Juli">
																</div>
																
																<div class="form-group">
																	<input type="hidden" name="claim" class="form-control" value = <?php echo $year->claim ?>>
																</div>
																<div class="form-group">
																	<input type="hidden" name="status" class="form-control" value = "7">
																</div>
																<div class="form-group">
																	<input type="hidden" name="date" class="form-control" value = <?= $date=date('Y-m-d')?> >
																</div>
																<div class="form-group">
																	<input type="hidden" name="class" class="form-control" value = "<?php echo $detail->class ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="name" class="form-control" value = "<?php echo $detail->name ?>">
																</div>
																
																  <?php if($detail->status >= "7") {
																  	?> <td>Lunas</td>
																  <?php }
																  elseif($detail->status < "6") { 
																  	?> <td> </td>
																  <?php }
																  else { ?>
																  	<?php echo anchor('SPP/bayar7/'.$detail->nis,'<td><button class="btn btn-xs btn-success pull-mid">
																		<span class="bigger-110">Bayar</span>
																		</button></td>' ) ?>
																  <?php } ?>
																
															</form>
														</td>
														
													</tr>
													<tr>
														<td>8</td>
														<td>Agustus</td>
														
														<!-- <td class="hidden-480">Belum Lunas</td> -->
														<td>
															<?php echo $year->claim ?>
															<form method="post" action="<?php echo base_url().'SPP/bayar8'; ?>">
																<div class="form-group">
																	<input type="hidden" name="id_payment" class="form-control">
																</div>
																<div class="form-group">
																	<input type="hidden" name="nis" class="form-control" value = "<?php echo $detail->nis ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="month_name" class="form-control"value = "Agustus">
																</div>
																
																<div class="form-group">
																	<input type="hidden" name="claim" class="form-control" value = <?php echo $year->claim ?>>
																</div>
																<div class="form-group">
																	<input type="hidden" name="status" class="form-control" value = "8">
																</div>
																<div class="form-group">
																	<input type="hidden" name="date" class="form-control" value = <?= $date=date('Y-m-d')?> >
																</div>
																<div class="form-group">
																	<input type="hidden" name="class" class="form-control" value = "<?php echo $detail->class ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="name" class="form-control" value = "<?php echo $detail->name ?>">
																</div>
																
																  <?php if($detail->status >= "8") {
																  	?> <td>Lunas</td>
																  <?php }
																  elseif($detail->status < "7") { 
																  	?> <td> </td>
																  <?php }
																  else { ?>
																  	<?php echo anchor('SPP/bayar8/'.$detail->nis,'<td><button class="btn btn-xs btn-success pull-mid">
																		<span class="bigger-110">Bayar</span>
																		</button></td>' ) ?>
																  <?php } ?>
																
															</form>
														</td>
														
													</tr>
													<tr>
														<td>9</td>
														<td>September</td>
														
														<!-- <td class="hidden-480">Belum Lunas</td>-->
														<td>
															<?php echo $year->claim ?>
															<form method="post" action="<?php echo base_url().'SPP/bayar9'; ?>">
																<div class="form-group">
																	<input type="hidden" name="id_payment" class="form-control">
																</div>
																<div class="form-group">
																	<input type="hidden" name="nis" class="form-control" value = "<?php echo $detail->nis ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="month_name" class="form-control"value = "September">
																</div>
																
																<div class="form-group">
																	<input type="hidden" name="claim" class="form-control" value = <?php echo $year->claim ?>>
																</div>
																<div class="form-group">
																	<input type="hidden" name="status" class="form-control" value = "9">
																</div>
																<div class="form-group">
																	<input type="hidden" name="date" class="form-control" value = <?= $date=date('Y-m-d')?> >
																</div>
																<div class="form-group">
																	<input type="hidden" name="class" class="form-control" value = "<?php echo $detail->class ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="name" class="form-control" value = "<?php echo $detail->name ?>">
																</div>
																
																  <?php if($detail->status >= "9") {
																  	?> <td>Lunas</td>
																  <?php }
																  elseif($detail->status < "8") { 
																  	?> <td> </td>
																  <?php }
																  else { ?>
																  	<?php echo anchor('SPP/bayar9/'.$detail->nis,'<td><button class="btn btn-xs btn-success pull-mid">
																		<span class="bigger-110">Bayar</span>
																		</button></td>' ) ?>
																  <?php } ?>
																
															</form>
														</td>
														
													</tr>
													<tr>
														<td>10</td>
														<td>October</td>
														
														<td>
															<?php echo $year->claim ?>
															<form method="post" action="<?php echo base_url().'SPP/bayar10'; ?>">
																<div class="form-group">
																	<input type="hidden" name="id_payment" class="form-control">
																</div>
																<div class="form-group">
																	<input type="hidden" name="nis" class="form-control" value = "<?php echo $detail->nis ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="month_name" class="form-control"value = "Oktober">
																</div>
																
																<div class="form-group">
																	<input type="hidden" name="claim" class="form-control" value = <?php echo $year->claim ?>>
																</div>
																<div class="form-group">
																	<input type="hidden" name="status" class="form-control" value = "10">
																</div>
																<div class="form-group">
																	<input type="hidden" name="date" class="form-control" value = <?= $date=date('Y-m-d')?> >
																</div>
																<div class="form-group">
																	<input type="hidden" name="class" class="form-control" value = "<?php echo $detail->class ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="name" class="form-control" value = "<?php echo $detail->name ?>">
																</div>
															
																  <?php if($detail->status >= "10") {
																  	?> <td>Lunas</td>
																  <?php }
																  elseif($detail->status < "9") { 
																  	?> <td> </td>
																  <?php }
																  else { ?>
																  	<?php echo anchor('SPP/bayar10/'.$detail->nis,'<td><button class="btn btn-xs btn-success pull-mid">
																		<span class="bigger-110">Bayar</span>
																		</button></td>' ) ?>
																  <?php } ?>
																
															</form>
														</td>
														
													</tr>
													<tr>
														<td>11</td>
														<td>November</td>
														
														<td>
															<?php echo $year->claim ?>
															<form method="post" action="<?php echo base_url().'SPP/bayar11'; ?>">
																<div class="form-group">
																	<input type="hidden" name="id_payment" class="form-control">
																</div>
																<div class="form-group">
																	<input type="hidden" name="nis" class="form-control" value = "<?php echo $detail->nis ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="month_name" class="form-control"value = "November">
																</div>
																
																<div class="form-group">
																	<input type="hidden" name="claim" class="form-control" value = <?php echo $year->claim ?>>
																</div>
																<div class="form-group">
																	<input type="hidden" name="status" class="form-control" value = "11">
																</div>
																<div class="form-group">
																	<input type="hidden" name="date" class="form-control" value = <?= $date=date('Y-m-d')?> >
																</div>
																<div class="form-group">
																	<input type="hidden" name="class" class="form-control" value = "<?php echo $detail->class ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="name" class="form-control" value = "<?php echo $detail->name ?>">
																</div>
															
																  <?php if($detail->status >= "11") {
																  	?> <td>Lunas</td>
																  <?php }
																  elseif($detail->status < "10") { 
																  	?> <td> </td>
																  <?php }
																  else { ?>
																  	<?php echo anchor('SPP/bayar11/'.$detail->nis,'<td><button class="btn btn-xs btn-success pull-mid">
																		<span class="bigger-110">Bayar</span>
																		</button></td>' ) ?>
																  <?php } ?>
																
															</form>
														</td>
														
													</tr>
													<tr>
														<td>12</td>
														<td>Desember</td>
														
														<td>
															<?php echo $year->claim ?>
															<form method="post" action="<?php echo base_url().'SPP/bayar12'; ?>">
																<div class="form-group">
																	<input type="hidden" name="id_payment" class="form-control">
																</div>
																<div class="form-group">
																	<input type="hidden" name="nis" class="form-control" value = "<?php echo $detail->nis ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="month_name" class="form-control"value = "Desember">
																</div>
																
																<div class="form-group">
																	<input type="hidden" name="claim" class="form-control" value = <?php echo $year->claim ?>>
																</div>
																<div class="form-group">
																	<input type="hidden" name="status" class="form-control" value = "12">
																</div>
																<div class="form-group">
																	<input type="hidden" name="date" class="form-control" value = <?= $date=date('Y-m-d')?> >
																</div>
																<div class="form-group">
																	<input type="hidden" name="class" class="form-control" value = "<?php echo $detail->class ?>">
																</div>
																<div class="form-group">
																	<input type="hidden" name="name" class="form-control" value = "<?php echo $detail->name ?>">
																</div>
															
																  <?php if($detail->status >= "12") {
																  	?> <td>Lunas</td>
																  <?php }
																  elseif($detail->status < "11") { 
																  	?> <td> </td>
																  <?php }
																  else { ?>
																  	<?php echo anchor('SPP/bayar12/'.$detail->nis,'<td><button class="btn btn-xs btn-success pull-mid">
																		<span class="bigger-110">Bayar</span>
																		</button></td>' ) ?>
																  <?php } ?>
																
															</form>
														</td>
														
													</tr>
												
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

		