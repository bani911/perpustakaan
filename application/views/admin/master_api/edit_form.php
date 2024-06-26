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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/master_api/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/master_api/edit/ID --->

							<input type="hidden" name="id" value="<?php echo $api->id?>" />

							<div class="form-group">
								<label for="name">Name*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="URL API" value="<?php echo $api->name ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Active?*</label>
								<input class="form-control <?php echo form_error('active') ? 'is-invalid':'' ?>"
								 type="checkbox" name="active" placeholder="is Active?" <?php echo ($api->active=='t' ? 'checked' : '');?>/>
								<div class="invalid-feedback">
									<?php echo form_error('active') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">parameter*</label>
								<input class="form-control <?php echo form_error('parameter') ? 'is-invalid':'' ?>"
								 type="text" name="parameter" placeholder="Parameter" value="<?php echo $api->parameter ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('parameter') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">api_key*</label>
								<input class="form-control <?php echo form_error('api_key') ? 'is-invalid':'' ?>"
								 type="text" name="api_key" placeholder="API_KEY" value="<?php echo $api->api_key ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('api_key') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>