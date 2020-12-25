<?php
	set_include_path($_SERVER['DOCUMENT_ROOT'].'/PHP_courses/inventory');
 	include_once "Controllers/users_func.php"; 
  	include_once "Views/assets/header.php";
?>

<div class="login"><a href="login.php"></a></div>
<div class="message"></div>
<div id="indexAjax"></div>

<?php include_once 'Views/assets/footer.php'; ?>