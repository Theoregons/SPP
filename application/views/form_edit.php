
<body class="no-skin">
	<div class="main-content">
		<div class="main-content-inner">
			<div class="page-content">

				<!-- form content -->

				<h3> <b>Form Update Siswa<b> </h3><br>
				
				<?php foreach($DataSiswa As $DS) { ?>

				<form  action="<?php echo base_url().'SPP/Update'; ?>" method="post">
					<div class="form-group">
					<label> NIS </label>	
						<input type="text" name="nis" class="form-control"
						value="<?php echo $DS->nis ?>">
					</div>
					<div class="form-group">
						<label> Nama Siswa </label>	
						<input type="text" name="name" class="form-control"
						value="<?php echo $DS->name ?>">
					</div>
					<div class="form-group">
						<label> Kelas </label>	
						<input type="text" name="class" class="form-control"
						value="<?php echo $DS->class ?>">
					</div>
					
					
					<button type="submit" class="btn btn-primary">
						Simpan
					</button>
				</form>
			<?php } ?>
				<!-- end form content -->

			</div>
		</div>
	</div>
</body>