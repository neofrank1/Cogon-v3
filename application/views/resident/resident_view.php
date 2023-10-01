<main class="content">
				<div class="container-fluid p-0">

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header d-md-flex justify-content-between">
									<!-- Notification-->
                <h1 class="h3 mt-2">Residents</h1>
                <?php 
                            // Add Resident Button
                            $add_resident_attr = array(
                              'class' => "btn btn-success" ,
                              'data-toggle' => 'modal',
                              'data-target' => '#addresidentmodal',
                              'content' => 'Add New Resident'
                            );
                            echo form_button($add_resident_attr);
                          ?>
								</div>
								<div class="card-body">
									<table id="datatables-buttons" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th>Name</th>
												<th>Address</th>
												<th style="width: 150px !important;">Contact Number</th>
												<th class="text-center" style="width: 150px !important;">Action</th>
											</tr>
										</thead>
										<tbody>
											<!--resident table body -->
											<?php foreach ($amenities as $resident): ?>
											<tr>
												<td><?php echo $resident->name?></td>
												<td><?php echo $resident->price?></td>
												<td><?php echo $resident->quantity?></td>
												<td class="text-center">
												<!--resident Information Button-->
												<button class="btn border-0 text-info" data-toggle="modal" data-target="#residentinfo" data-data='<?= json_encode($resident) ?>'> 
													<i data-feather="info"></i>
												</button>
												<button class ="btn border-0 text-primary" data-toggle="modal" data-target="#updateresidentmodal"
												data-data='<?= json_encode($resident)?>' data-action="update">
												<i data-feather="edit"></i>
												</button>
												<a href="<?php echo base_url('resident/delete/' .$resident->id);?>" onclick="return confirm('Are you sure you want to remove this facility? This action cannot be undone.');"><button class ="btn border-0 text-danger"><i data-feather="trash"></i></button></a>
													
												</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
      <?php include('application\views\menu\modals.php'); ?>
	  <script src="<?php echo base_url('assets/js/resident.js');?>"></script>
		
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables with Buttons
			var datatablesButtons = $("#datatables-buttons").DataTable({
				responsive: true,
				lengthChange: !1,
				buttons: ["copy", "print"]
			});
			datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)");
		});
	</script>
</body>
