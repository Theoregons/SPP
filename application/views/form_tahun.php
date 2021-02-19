
<body class="no-skin">
	<div class="main-content">
		<div class="main-content-inner">
			<div class="page-content">

				<!-- form content -->

				<h3> <b>Form Edit Pembayaran<b> </h3><br>
				
				<form method="post" action="<?php echo base_url().'SPP/insert_periode'; ?>">
					
					<div class="form-group">
						<input type="hidden" name="school" class="form-control" value = "MI KH.MOHAMMAD SAID">

						<label> Jenis Pembayaran : </label>	
						<input type="text" name="claim" class="form-control">
					</div>
					<div class="form-group">
						
						<label> Tahun : </label>	
						<input type="text" name="year" class="form-control">
					</div>
					<div class="form-group">
						<label> Harga SPP : </label>	
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