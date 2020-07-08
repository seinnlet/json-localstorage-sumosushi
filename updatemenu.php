<?php  

	$id = $_POST['editid'];
	$name = $_POST['editname'];
	$price = $_POST['editprice'];
	$category = $_POST['editcategory'];

	// profile
	$oldimage = $_POST['oldimagename'];

	$newimage = $_FILES['newimage'];
	$newimagename = $newimage['name'];

	// echo "$id $name $price $category $oldimage $newimagename";

	if ($newimage['size'] > 0) {
		unlink($oldimage);
		$basepath = "photo/";
		$fullpath = $basepath.$newimagename;
		move_uploaded_file($newimage['tmp_name'], $fullpath);
	} else {
		$fullpath = $oldimage; 
	}

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

	// edit in array
	$data_arr[$id] = $menu;

	// convert into json again
	$jsonData = json_encode($data_arr, JSON_PRETTY_PRINT);

	file_put_contents('menulist.json', $jsonData);
	header("location:menulist.php");

?>