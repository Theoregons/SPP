
<body class="no-skin">
	<div class="main-content">
		<div class="main-content-inner">
			<div class="page-content">

				<!-- form content -->

				<h3> <b>Form Tambah Jenis Seragam<b> </h3><br>
				
				<form method="post" action="<?php echo base_url().'SPP/TSeragam'; ?>">

					<div class="form-group">
						<label> Jenis / Nama Seragam  </label>	
						<input type="hidden" name="id" class="form-control">
						<input type="text" name="jenis" class="form-control">
					</div>
					<div class="form-group">
						<label> Tarif </label>	
						<input type="text" name="claim" class="form-control">
					</div>
					<div class="form-group">
						
						<input type="hidden" name="school" class="form-control" value = "MI KH.MOHAMMAD SAID">
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