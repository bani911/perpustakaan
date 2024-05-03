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
					<div class="card-header">
						<a href="<?php echo site_url('admin/master_loans/create_loan') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No.</th>
										<!-- <th>Loan ID</th> -->
										<th>Book</th>
										<th>Member</th>
										<th>Loan Date</th>
										<th>Due Date</th>
										<th>is Returned ?</th>
										<th>Return Date</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($m_loans as $key => $data): ?>
									<tr>
										<td><?php echo $key + 1; ?></td>
										<!-- <td width="150">
											</?php echo $data['loan_id'] ?>
										</td> -->
										<td>
											<?php echo $data['book_title'] ?>
										</td>
										<td>
											<?php echo $data['member_name'] ?>
										</td>
										<td>
											<?php echo $data['loan_date'] ?>
										</td>
										<td>
											<?php echo $data['due_date'] ?>
										</td>
										<td>
											<?php echo $data['returned']=='t' ? 'Yes' : 'No'; ?>
										</td>
										<td><?php echo $data['return_date']; ?></td>

										<td width="300">
											<a href="<?php echo site_url('admin/master_loans/edit/'.$data['loan_id']) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/master_loans/delete/'.$data['loan_id']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Delete</a> |

											<a href="<?php echo site_url('admin/master_loans/extend_loan/'.$data['loan_id']); ?>">Extend</a> |
                    						<a href="<?php echo site_url('admin/master_loans/create_return/'.$data['loan_id']); ?>">Return</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
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