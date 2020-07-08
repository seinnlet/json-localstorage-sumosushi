$(function () {

	getMenulist();

	function getMenulist() {
		$.get('menulist.json', function(response) {
			if (response) {
				let menuObjArray = response;

				let html = '', j = 1, x = 1;
				let sushi = '', bentoboxes = '', ramen = '', appetizers = '', rice = '';
				$.each(menuObjArray, function(i, v) {
					html += `<tr>
										<td>${j++}.</td>
										<td>${v.name}</td>
										<td><em>Ks.${v.price}</em></td>
										<td class="action">
											<button class="btn btn-sm btn-outline-info btn-detail" data-id="${i}" data-toggle="modal" data-target="#detailModal"><i class="fas fa-info-circle"></i></button>
											<button class="btn btn-sm btn-outline-warning btn-edit" data-id="${i}"><i class="fas fa-edit"></i></button>
											<button class="btn btn-sm btn-outline-danger btn-delete" data-id="${i}" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt"></i></button>
										</td>
									</tr>
									`;

					switch (v.category) {
						case 'Bento Boxes':
							bentoboxes += ` 
									<div class="col-6 col-lg-4 mb-5">
										<div class="card">
											<span class="price badge badge-dark badge-pill">${v.price} Ks</span>
											<img src="${v.image}" class="card-img-top">
											<div class="card-body">
												<h6 class="card-title text-center mb-2">${v.name}</h6>
												<hr>
												<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="${x++}" data-name="${v.name}" data-price="${v.price}">Add to Cart</button>
											</div>
										</div>
									</div>
														`;
							break;

						case 'Ramen':
							ramen += ` 
									<div class="col-6 col-lg-4 mb-5">
										<div class="card">
											<span class="price badge badge-dark badge-pill">${v.price} Ks</span>
											<img src="${v.image}" class="card-img-top">
											<div class="card-body">
												<h6 class="card-title text-center mb-2">${v.name}</h6>
												<hr>
												<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="${x++}" data-name="${v.name}" data-price="${v.price}">Add to Cart</button>
											</div>
										</div>
									</div>
												`;
							break;

						case 'Appetizers':
							appetizers += ` 
									<div class="col-6 col-lg-4 mb-5">
										<div class="card">
											<span class="price badge badge-dark badge-pill">${v.price} Ks</span>
											<img src="${v.image}" class="card-img-top">
											<div class="card-body">
												<h6 class="card-title text-center mb-2">${v.name}</h6>
												<hr>
												<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="${x++}" data-name="${v.name}" data-price="${v.price}">Add to Cart</button>
											</div>
										</div>
									</div>
														`;
							break;

						case 'Rice':
							rice += ` 
									<div class="col-6 col-lg-4 mb-5">
										<div class="card">
											<span class="price badge badge-dark badge-pill">${v.price} Ks</span>
											<img src="${v.image}" class="card-img-top">
											<div class="card-body">
												<h6 class="card-title text-center mb-2">${v.name}</h6>
												<hr>
												<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="${x++}" data-name="${v.name}" data-price="${v.price}">Add to Cart</button>
											</div>
										</div>
									</div>
											`;
							break;

						default:
							sushi += ` 
									<div class="col-6 col-lg-4 mb-5">
										<div class="card">
											<span class="price badge badge-dark badge-pill">${v.price} Ks</span>
											<img src="${v.image}" class="card-img-top">
											<div class="card-body">
												<h6 class="card-title text-center mb-2">${v.name}</h6>
												<hr>
												<button class="btn btn-outline-danger btn-block btn-addtocart" data-id="${x++}" data-name="${v.name}" data-price="${v.price}">Add to Cart</button>
											</div>
										</div>
									</div>
												`;
							break;
					}

				});
				$('#menulist tbody').html(html);
				$('#row-sushi').html(sushi);
				$('#row-bentoboxes').html(bentoboxes);
				$('#row-ramen').html(ramen);
				$('#row-appetizers').html(appetizers);
				$('#row-rice').html(rice);
			}
		});
	}

	// edit
	$('#menulist tbody').on('click', '.btn-edit', function() {

		var id = $(this).data('id');

		$.get('menulist.json', function(response) {
 
			var menuObjArray = response;
			var name = menuObjArray[id].name;
			var price = menuObjArray[id].price;
			var category = menuObjArray[id].category;
			var image = menuObjArray[id].image;

			$('#edit-id').val(id);
			$('#edit-name').val(name);
			$('#edit-price').val(price);

			switch (category) {
				case 'Bento Boxes': $('#cbo-bentoboxes').attr('selected', '');
					break;

				case 'Ramen': $('#cbo-ramen').attr('selected', '');
					break;

				case 'Appetizers': $('#cbo-appetizers').attr('selected', '');
					break;

				case 'Rice': $('#cbo-rice').attr('selected', '');
					break;

				default: $('#cbo-sushi').attr('selected', '');
					break;
			}

			$('#old-image-name').val(image);

			$('#old-image').attr('src', image);

		});

		$('#div-add').hide();
		$('#div-edit').show(600);
	});

	$('#btn-modal-edit').click(function() {
		var id = $(this).data('id');

		$.get('menulist.json', function(response) {
 
			var menuObjArray = response;
			var name = menuObjArray[id].name;
			var price = menuObjArray[id].price;
			var category = menuObjArray[id].category;
			var image = menuObjArray[id].image;

			$('#edit-id').val(id);
			$('#edit-name').val(name);
			$('#edit-price').val(price);

			switch (category) {
				case 'Bento Boxes': $('#cbo-bentoboxes').attr('selected', '');
					break;

				case 'Ramen': $('#cbo-ramen').attr('selected', '');
					break;

				case 'Appetizers': $('#cbo-appetizers').attr('selected', '');
					break;

				case 'Rice': $('#cbo-rice').attr('selected', '');
					break;

				default: $('#cbo-sushi').attr('selected', '');
					break;
			}

			$('#old-image-name').val(image);

			$('#old-image').attr('src', image);

		});

		$('#div-add').hide();
		$('#div-edit').show(600);
	});


	// delete
	$('#menulist tbody').on('click', '.btn-delete', function() {

		let id = $(this).data('id');
		$('#btn-modal-delete').attr('data-id', id);

	});
	$('#btn-modal-delete').click(function() {
		
		let id = $(this).data('id');
		$.post('deletemenu.php',{id: id}, function(data) {
				getMenulist();
			});

	});


	// detail 
	$('#menulist tbody').on('click', '.btn-detail', function() {

		let id = $(this).data('id');

		$.get('menulist.json', function(response) {
 
			var menuObjArray = response;
			var name = menuObjArray[id].name;
			var price = menuObjArray[id].price;
			var category = menuObjArray[id].category;
			var image = menuObjArray[id].image;

			$('#detail-name').text(name);
			$('#detail-price').text(price);
			$('#detail-category').text(category);
			$('#detail-image').attr('src', image);
			$('#btn-modal-edit').attr('data-id', id);
		});

	});

})