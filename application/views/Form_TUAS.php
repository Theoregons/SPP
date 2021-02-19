
<body class="no-skin">
	<div class="main-content">
		<div class="main-content-inner">
			<div class="page-content">

				<!-- form content -->

				<h3> <b>Form Tambah Jenis Ujian Sekolah<b> </h3><br>
				
				<form method="post" action="<?php echo base_url().'SPP/TUAS'; ?>">

					<div class="form-group">
						<label> Jenis / Nama Ujian  </label>	
						<input type="hidden" name="id_academic" class="form-control">
						<input type="text" name="jenis" class="form-control">
						<input type="hidden" name="school" class="form-control" value = "MI KH.MOHAMMAD SAID">
					</div>
					<div class="form-group">
						<label> Tarif </label>
						<input type="hidden" name="year" class="form-control" value = <?= $date=date('Y')?> >
						<input type="text" name="claim" class="form-control">
					</div>
					
					<button type="submit" class="btn btn-primary">
						Simpan
					</button>

				</form>

				<!-- end form content -->

			</div>
		</div>
	</div>
</body>