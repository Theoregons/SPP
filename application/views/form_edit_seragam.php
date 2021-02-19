
<body class="no-skin">
	<div class="main-content">
		<div class="main-content-inner">
			<div class="page-content">

				<!-- form content -->

				<h3> <b>Form Update Jenis Seragam<b> </h3><br>
				
				<?php foreach($th As $DS) { ?>

				<form  action="<?php echo base_url().'SPP/Update_uniform'; ?>" method="post">
					<div class="form-group">
					<label> Jenis Seragam </label>
						<input type="hidden" name="id" class="form-control"
						value="<?php echo $DS->id ?>">
						<input type="text" name="jenis" class="form-control"
						value="<?php echo $DS->jenis ?>">
					</div>
					<div class="form-group">
						<label> Tarif </label>
						<input type="text" name="claim" class="form-control"
						value="<?php echo $DS->claim ?>">
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