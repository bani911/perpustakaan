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
						<a href="<?php echo site_url('admin/master_loans/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data" >

							<div class="form-group">
								<label for="name">New Due Date*</label>
								<input class="form-control <?php echo form_error('due_date') ? 'is-invalid':'' ?>"
									type="date" name="due_date" placeholder="New Due Date" style="width: 200px;" 
									value="<?php echo isset($m_loans->due_date) ? date('Y-m-d', strtotime($m_loans->due_date)) : '' ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('due_date') ?>
								</div>
							</div>

							<!-- hidden param -->
							<input type="hidden" name="id" value="<?php echo $m_loans->id?>" />

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