<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-body">

						<div class="table-responsive">

							<?php echo form_open('admin/kontak/edit');?>
							<?php echo form_hidden('id',$datakontak[0]->id);?>
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<tr><td>ID</td><td><?php echo form_input('',$datakontak[0]->id,"disabled");?></td></tr>
								<tr><td>NAMA</td><td><?php echo form_input('nama',$datakontak[0]->nama);?></td></tr>
								<tr><td>NOMOR</td><td><?php echo form_input('nomor',$datakontak[0]->nomor);?></td></tr>
								<tr><td colspan="2">
									<?php echo form_submit('submit','Simpan');?>
									<a href="<?php echo site_url('admin/kontak') ?>"><i class="fas fa-minus"></i> Back</a></td></tr>
							</table>
							<?php
							echo form_close();
							?>

						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>

</body>

</html>