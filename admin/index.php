<?php include '../connect/db.php'; ?>
<?php include '../code/code.php'; ?> 
<?php if(!isset($_SESSION['admin_login'])):
 header('location:login.php');
 ?>
<?php else:?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin DashBoard</title>
</head>
<link rel="stylesheet" href="../css/bootstrap.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
	<?php include 'nav.php'; ?>
	<div class="container">
		<?php include $page; ?>
	</div><!--conatiner-->
</body>
</html>
<?php endif; ?>