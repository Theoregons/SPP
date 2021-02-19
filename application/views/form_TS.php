
<body class="no-skin">
	<div class="main-content">
		<div class="main-content-inner">
			<div class="page-content">

				<!-- form content -->

				<h3> <b>Form Tambah Siswa<b> </h3><br>
				
				<form method="post" action="<?php echo base_url().'SPP/TS'; ?>">

					<div class="form-group">
						<label> NIS  </label>	
						<input type="text" name="nis" class="form-control">
					</div>
					<div class="form-group">
						<label> Nama Siswa </label>	
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label> Kelas </label>	
						<input type="text" name="class" class="form-control">
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