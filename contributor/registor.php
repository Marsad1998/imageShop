<?php include '../connect/db.php'; ?>
<?php include '../code/code.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registor</title>
</head>
<link rel="stylesheet" href="../css/bootstrap.css">
<body>
	<br><br><br><br><br>
	<h4 class="text-center">Contributor Singup</h4>
	<div class="container">
		<?php if(!empty($msg)): ?>
		<div class="alert alert-<?=$sts?>"><?=$msg?></div>
	    <?php endif; ?>
		<div class="col-md-4"></div>
		<div class="col-md-4 jumbotron">
			<form action="" method="POST">
				<div class="form-group">
					<label for="" class="control-label">Name</label>
					<input type="text" class="form-control" name="contr_name" required="">
				</div><!--form groupp-->
				<div class="form-group">
					<label for="" class="control-label">Email</label>
					<input type="email" class="form-control" name="contr_email" required="">
				</div><!--form groupp-->
				<div class="form-group">
					<label for="" class="control-label">Passwoard</label>
					<input type="password" class="form-control" name="contr_pass" required="">
				</div><!--form group-->
				<div class="form-group">
				  <label for="" class="control-label">Get Code*</label>
					<div class="row">
						<div class="col-md-3">
						   <label for=""><img src="capature.php"></label>
							</div>
							<div class="col-md-9">
								<input type="text" placeholder="Confirm You're not a bot" name="captcha" autocomplete="off" required="" class="form-control">
							</div>
						</div><!--row-->
				</div><!--form grssoup-->
				<div class="form-group">
				<input type="submit" name="add_contr" value="Registor" class="btn btn-info pull-right btn-block">
			   </div>
			</form><!--FORM-->
		</div><!--col-sm-4-->
		<div class="col-sm-4"></div>
	</div><!---conatonet-->
</body>
</html>