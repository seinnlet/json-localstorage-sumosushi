<?php  

	$name = $_POST['name'];
	$price = $_POST['price'];
	$category = $_POST['category'];

	$image = $_FILES['image'];
	$imagename = $image['name'];

	// upload file 
	$basepath = "photo/";
	$fullpath = $basepath.$imagename;
	move_uploaded_file($image['tmp_name'], $fullpath);

	$menu = array(
		"name" => $name,
		"price" => $price,
		"category" => $category,
		"image" => $fullpath
	);

	// get jsonData from jsonfile 
	$jsonData = file_get_contents('menulist.json');

	if (!$jsonData) {
		$jsonData = '[]';
	}

	// convert into array from json
	$data_arr = json_decode($jsonData);

	array_push($data_arr, $menu);

	// convert into json again
	$jsonData = json_encode($data_arr, JSON_PRETTY_PRINT);

	file_put_contents('menulist.json', $jsonData);
	header("location:menulist.php");

?>