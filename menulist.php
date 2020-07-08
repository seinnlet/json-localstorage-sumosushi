<?php include 'header.php'; ?>

<main>
	<div class="container-fluid pt-4 pb-5">
		<div class="row">
			<div class="col-lg-7 mb-4">
				<div class="shadow p-4" id="div-add">
					<h4 class="mb-4">Add New Menu</h4>
					<form method="post" action="addmenu.php" enctype="multipart/form-data">
						
						<div class="form-row my-4">
							<label class="col-2 col-form-label" for="name">Name: </label>
							<div class="col-10">
								<input type="text" name="name" id="name" required class="form-control" placeholder="Enter Menu Name" autofocus>
							</div>
						</div>

						<div class="form-row my-4">
							<label class="col-2 col-form-label" for="price">Price (Ks): </label>
							<div class="col-10">
								<input type="number" name="price" id="price" required class="form-control" min="0" max="100000" placeholder="Enter Price">
							</div>
						</div>

						<div class="form-row my-4">
							<label class="col-2 col-form-label" for="image">Image: </label>
							<div class="col-10">
								<div class="custom-file">
									<input type="file" class="custom-file-input image" name="image" accept="image/*">
									<label class="custom-file-label" for="image">Choose file</label>
								</div>
							</div>
						</div>

						<div class="form-row my-4">
							<label class="col-2 col-form-label" for="category">Category: </label>
							<div class="col-10">
								<select name="category" required class="form-control">
									<option value="No Category Defined">Select Category</option>
									<option value="Sushi">Sushi</option>
									<option value="Bento Boxes">Bento Boxes</option>
									<option value="Ramen">Ramen</option>
									<option value="Appetizers">Appetizers</option>
									<option value="Rice">Rice</option>
								</select>
							</div>
						</div>

						<div class="form-row mt-5 mb-3">
							<div class="col-lg-10 offset-lg-2">
								<button type="submit" class="btn btn-danger btn-block">SAVE</button>
							</div>
						</div>

					</form>
				</div>

				<div class="shadow p-4" id="div-edit" style="display: none">
					<h4 class="mb-4">Edit Menu</h4>
					<form method="post" action="updatemenu.php" enctype="multipart/form-data">
						<input type="hidden" name="editid" id="edit-id">
						<div class="form-row my-4">
							<label class="col-2 col-form-label" for="edit-name">Name: </label>
							<div class="col-10">
								<input type="text" name="editname" id="edit-name" required class="form-control" placeholder="Enter Menu Name">
							</div>
						</div>

						<div class="form-row my-4">
							<label class="col-2 col-form-label" for="edit-price">Price (Ks): </label>
							<div class="col-10">
								<input type="number" name="editprice" id="edit-price" required class="form-control" min="0" max="100000" placeholder="Enter Price">
							</div>
						</div>

						<div class="form-row my-4">
							<label class="col-2 col-form-label" for="image">Image: </label>
							<div class="col-10">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Old Image</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">New Image</a>
									</li>
								</ul>
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active py-3" id="home" role="tabpanel" aria-labelledby="home-tab">
										<input type="hidden" name="oldimagename" id="old-image-name">
										<img src="" width="100px" id="old-image">
									</div>
									<div class="tab-pane fade py-4" id="contact" role="tabpanel" aria-labelledby="contact-tab">
										<div class="custom-file">
											<input type="file" class="custom-file-input image" name="newimage" accept="image/*">
											<label class="custom-file-label" for="image">Choose file</label>
										</div>
									</div>
								</div>
										
							</div>
						</div>

						<div class="form-row my-4">
							<label class="col-2 col-form-label" for="category">Category: </label>
							<div class="col-10">
								<select name="editcategory" required class="form-control">
									<option id="cbo-sushi" value="Sushi">Sushi</option>
									<option id="cbo-bentoboxes" value="Bento Boxes">Bento Boxes</option>
									<option id="cbo-ramen" value="Ramen">Ramen</option>
									<option id="cbo-appetizers" value="Appetizers">Appetizers</option>
									<option id="cbo-rice" value="Rice">Rice</option>
								</select>
							</div>
						</div>

						<div class="form-row mt-5">
							<div class="col-lg-5 offset-lg-2">
								<button type="button" class="btn btn-outline-secondary btn-block mb-3" id="btn-cancel">Cancel</button>
							</div>
							<div class="col-lg-5">
								<button type="submit" class="btn btn-danger btn-block mb-3">UPDATE</button>
							</div>
						</div>

					</form>
				</div>
			</div>

			<div class="col-lg-5 mb-4">
				<div class="table-responsive shadow p-4">
					<h4 class="mb-4">Menu List</h4>
					<table class="table table-hover table-bordered" id="menulist">
						<thead>
							<tr>
								<th>No.</th>
								<th>Menu</th>
								<th>Price</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>

		</div>
	</div>
</main>

<!-- delete modal -->
<div class="modal" id="deleteModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="mb-4">
        	<span class="text-danger mr-3"><i class="fas fa-exclamation-triangle fa-lg"></i></span>
        Are You Sure to Delete?
        </p>
      	<div class="row mt-4">
      		<div class="col-6">
      			<button type="button" class="btn btn-outline-secondary btn-block" data-dismiss="modal">Cancel</button>
      		</div>
      		<div class="col-6">
      			<button type="button" class="btn btn-danger btn-block" id="btn-modal-delete" data-dismiss="modal">Delete</button>
      		</div>
      	</div>
      </div>
    </div>
  </div>
</div>

<!-- detail modal -->
<div class="modal" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       	
      	<div class="row">
      		<div class="col-md-6">
      			<img src="" class="rounded img-fluid shadow mb-4" id="detail-image">
      		</div>
      		<div class="col-md-6">
      			<h5 class="mb-4" id="detail-name"></h5>
      			<p><strong>Price: </strong>Ks. <span id="detail-price"></span></p>
      			<p><strong>Category: </strong> <span id="detail-category"></span></p>

   					<button type="button" class="btn btn-outline-info btn-block mt-4 mb-3" id="btn-modal-edit" data-dismiss="modal"><i class="fas fa-edit"></i> Edit</button>

      			<button type="button" class="btn btn-outline-secondary btn-block mb-3" data-dismiss="modal">Close</button>


      		</div>
      	</div>

      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>