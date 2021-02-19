
<body class="no-skin">
	<div class="main-content">
		<div class="main-content-inner">
			<div class="page-content">

				<!-- form content -->

				<h3> <b>Form Update Siswa<b> </h3><br>
				
				<?php foreach($admin As $DS) { ?>

				<form  action="<?php echo base_url().'SPP/updatepass'; ?>" method="post">
					<div class="form-group">
						<br>
						<label> Ubah Username </label>
						<input type="text" name="username" class="form-control"
						value="<?php echo $DS->username ?>">
						<br>
						<label> Ubah Password</label>
						<input type="text" name="password" class="form-control"
						value="<?php echo $DS->password ?>">
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