
<body class="no-skin">
	<div class="main-content">
		<div class="main-content-inner">
			<div class="page-content">

				<!-- form content -->

				<h3> <b>Form Update Jenis Ujian<b> </h3><br>
				
				<?php foreach($th As $DS) { ?>

				<form  action="<?php echo base_url().'SPP/update_uas'; ?>" method="post">
					<div class="form-group">
					<label> Jenis Ujian </label>
						<input type="hidden" name="id_academic" class="form-control"
						value="<?php echo $DS->id_academic ?>">
						<input type="text" name="jenis" class="form-control"
						value="<?php echo $DS->jenis ?>">
						<input type="hidden" name="school" class="form-control"
						value="<?php echo $DS->school ?>">
						
					</div>
					<div class="form-group">
						<label> Tarif </label>
						<input type="hidden" name="school" class="form-control"
						value= <?= $date=date('Y')?> >
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