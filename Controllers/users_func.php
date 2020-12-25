<?php 
	// $path = $_SERVER['DOCUMENT_ROOT'];
 	//  	$path .= '/PHP_courses/inventory';
  	// $path .= "/Models/User.php";
  	// require $path.'/Models/User.php'; 
	set_include_path($_SERVER['DOCUMENT_ROOT'].'/PHP_courses/inventory');
include 'Models/User.php';
$user = new User();

// Delete
if (isset($_GET['delete_id'])) $user->delete($_GET['delete_id']);
// Update
if (isset($_GET['update_id'])) {
	$id = $_GET['update_id'];
	$row = $user->getUser($id);
}
// Submit user
if (isset($_POST) AND !empty($_POST)) {
	$firstName = strip_tags($_POST['firstName']);
	$lastName = strip_tags($_POST['lastName']);
	$age = strip_tags($_POST['age']);
	$id = strip_tags($_POST['id']);
	
	if ( empty( $id ) ) $user->insert($firstName, $lastName, $age);
	else $user->update($id, $firstName, $lastName, $age);
}

?>