<?php include 'header.php'; ?>

	<main>
		<div class="container-fluid pt-4 pb-5">
			<div class="row">

				<!-- items -->
				<div class="col-md-7">
					<div class="shadow p-3">
						<ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active text-danger" id="pills-sushi-tab" data-toggle="pill" href="#pills-sushi" role="tab" aria-controls="pills-sushi" aria-selected="true">Sushi</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link text-danger" id="pills-bentoboxes-tab" data-toggle="pill" href="#pills-bentoboxes" role="tab" aria-controls="pills-bentoboxes" aria-selected="false">Bento Boxes</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link text-danger" id="pills-ramen-tab" data-toggle="pill" href="#pills-ramen" role="tab" aria-controls="pills-ramen" aria-selected="false">Ramen</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link text-danger" id="pills-appetizers-tab" data-toggle="pill" href="#pills-appetizers" role="tab" aria-controls="pills-appetizers" aria-selected="false">Appetizers</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link text-danger" id="pills-rice-tab" data-toggle="pill" href="#pills-rice" role="tab" aria-controls="pills-rice" aria-selected="false">Rice</a>
							</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">

							<!-- sushi -->
							<div class="tab-pane fade py-4 show active" id="pills-sushi" role="tabpanel" aria-labelledby="pills-sushi-tab">
								<div class="row row-menu" id="row-sushi">

								</div>
							</div>

							<!-- bento boxes -->
							<div class="tab-pane fade py-4" id="pills-bentoboxes" role="tabpanel" aria-labelledby="pills-bentoboxes-tab">
								<div class="row row-menu" id="row-bentoboxes">

								</div>
							</div>

							<!-- ramen -->
							<div class="tab-pane fade py-4" id="pills-ramen" role="tabpanel" aria-labelledby="pills-ramen-tab">
								<div class="row row-menu" id="row-ramen">

								</div>
							</div>

							<!-- appetizers -->
							<div class="tab-pane fade py-4" id="pills-appetizers" role="tabpanel" aria-labelledby="pills-appetizers-tab">
								<div class="row row-menu" id="row-appetizers">

								</div>
							</div>

							<!-- rice -->
							<div class="tab-pane fade py-4" id="pills-rice" role="tabpanel" aria-labelledby="pills-rice-tab">
								<div class="row row-menu" id="row-rice">

								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- payment -->
				<div class="col-md-5" id="div-voucher" style="display: none;">
					<div class="shadow p-3">
						<h5 class="text-center mb-3">Payment</h5>

						<!-- table -->
						<form>
							<div class="table-responsive">
								<table class="table table-bordered" id="payment">
									<thead>
										<tr class="thead-light">
											<th>Name</th>
											<th>Qty</th>
											<th>Price</th>
											<th>Remove</th>
										</tr>
									</thead>
									<tbody></tbody>
									<tfoot></tfoot>
								</table>
							</div>
						</form>
					</div>
				</div>

			</div> <!-- row ends -->
		</div>
	</main>

<?php include 'footer.php'; ?>