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

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/master_books/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/master_books/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Title*</label>
								<input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
								 type="text" name="title" placeholder="Title" />
								<div class="invalid-feedback">
									<?php echo form_error('title') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Author*</label>
								<input class="form-control <?php echo form_error('author') ? 'is-invalid':'' ?>"
								 type="text" name="author" placeholder="Author" />
								<div class="invalid-feedback">
									<?php echo form_error('author') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Publication Year*</label>
								<input class="form-control <?php echo form_error('publication_year') ? 'is-invalid':'' ?>"
								 type="text" name="publication_year" placeholder="Publication Year" />
								<div class="invalid-feedback">
									<?php echo form_error('publication_year') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">ISBN*</label>
								<input class="form-control <?php echo form_error('isbn') ? 'is-invalid':'' ?>"
								 type="text" name="isbn" placeholder="ISBN" />
								<div class="invalid-feedback">
									<?php echo form_error('isbn') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="available">Available</label>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="available" name="available">
									<label class="form-check-label" for="available">
										Yes
									</label>
								</div>
							</div>

							<!-- hidden param -->

                            <!-- bar progress -->
                            <div id='loadingmessage' style='display:none'>
                                <img src="<?php echo base_url('assets/images/ajax_loader_1.gif'); ?>">
                            </div>

							<input class="btn btn-success" type="submit" name="btn" id="button_save" value="Save" />
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


<!-- JS Start -->
<script type="text/javascript">

$(document).ready(function() {

});

</script>