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

						<a href="<?php echo site_url('admin/master_user/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/master_api/edit/ID --->

							<div class="form-group">
								<label for="name">Username*</label>
								<input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
								 type="text" name="username" placeholder="Username" value="<?php echo $m_user->username ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('username') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Password*</label>
								<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
								 type="password" name="password" placeholder="Password" value="<?php echo $m_user->password ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Full Name*</label>
								<input class="form-control <?php echo form_error('full_name') ? 'is-invalid':'' ?>"
								 type="text" name="full_name" placeholder="Full Name" value="<?php echo $m_user->full_name ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('full_name') ?>
								</div>
							</div>

							<!-- hidden param -->
							<input type="hidden" name="user_id" value="<?php echo $m_user->user_id?>" />
							<input type="hidden" name="ori_password" value="<?php echo $m_user->password?>" />
							<input type="hidden" id="api_key" value="<?php echo $api_key ?>">
							<input type="hidden" id="api_plant" value="<?php echo $api_plant ?>">
							<input type="hidden" name="plant_id" id="plant_id" value="<?php echo $m_user->plant_id ?>" />
							<input type="hidden" name="plant_name" id="plant_name" value="<?php echo $m_user->plant_name ?>" />

							<div class="form-group">
								<label for="name">Current Plant*</label>
								<input type="text" name="plant_display" id="plant_display" value="<?php echo $m_user->plant_name ?>" readonly />
							</div>
							<div class="form-group">
								<label for="name">New Plant*</label>
								<select id="plant" name="plant" class="form-control">
                    			</select>
							</div>

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

	// Get data Plant from Odoo RMC
	$("#plant").click(function(){

		var api_get_plant = $("#api_plant").val();
		if (api_get_plant == '') {
			alert ('API GET Plant VSS Kosong => Silakan hubungi IT (Agar API diregister dahulu) !');
			return false;
		}

		$.ajax({
			type: "GET",
			dataType:"html",
			data: "key="+$('#api_key').val(),
			url: api_get_plant,
            beforeSend:function(){
            	$('#loadingmessage').show();
				$('#button_save').hide();
            },
			success: function(data, textStatus, jqXHR) {
				console.log(textStatus + ": " + jqXHR.status);
				$('#loadingmessage').hide();
				$('#button_save').show();
				var dataresp = JSON.parse(data);

				if (jqXHR.status == 200) {

					if (dataresp.code != 200) {
						alert(dataresp.status);
						return false;
					}

					if (dataresp.data[0]) {

						jsonObj = dataresp.data;
						// $('select#plant').html('');
						for (var i = 0; i < jsonObj.length; i++) {
							$("<option />").val(jsonObj[i].id)
							.text(jsonObj[i].name)
							.appendTo($('select#plant'));
						}
						var text_name = $("#plant option:selected").text();
						$("#plant_id").val($("#plant").val());
						$("#plant_name").val(text_name);

					} else {
						alert(dataresp.status);
					}

				} else {
					alert ('Web Service Odoo tidak bisa diakses..! (Silakan hubungin IT RMC).');
				}                 
			},
			error: function(jqXHR, textStatus, errorThrown){
				console.log(textStatus + ": " + jqXHR.status + " " + errorThrown);
				$('#loadingmessage').hide();
				$('#button_save').show();
				alert ('Web Service Odoo Down atau tidak bisa diakses..! (Silakan hubungin IT RMC).');
			}
		
		});
	});

});

</script>