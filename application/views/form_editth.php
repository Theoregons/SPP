
<body class="no-skin">
	<div class="main-content">
		<div class="main-content-inner">
			<div class="page-content">

				<!-- form content -->

				<h3> <b>Form Update Siswa<b> </h3><br>
				
				<?php foreach($Tahun As $tahun) { ?>

				<form  action="<?php echo base_url().'SPP/updateth'; ?>" method="post">
					<div class="form-group">
						<label> Tahun Ajaran</label>	
						<input type="hidden" name="id_academic" class="form-control"
						value="<?php echo $tahun->id_academic ?>">
						<input type="text" name="year" class="form-control"
						value="<?php echo $tahun->year ?>">
					</div>
					<div class="form-group">
						<label> Harga SPP </label>
						<input type="text" name="claim" class="form-control"
						value="<?php echo $tahun->claim ?>">
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