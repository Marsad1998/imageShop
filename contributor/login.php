<?php include '../connect/db.php'; ?>
<?php include '../code/code.php'; ?>
<?php if(isset($_SESSION['contr_login'])): 
header('location:index.php');
?>
<?php else: ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registor</title>
</head>
<link rel="stylesheet" href="../css/bootstrap.css">
<body><br>
	<h3 style="margin: 50px; text-align:center; color:black;">Contributor Login Page</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div><!--cSol-md 4-->
                <div class="col-md-4 jumbotron">
                    <?php if(!empty($msg)): ?>
                    <div class="alert alert-<?=$sts?>"><?=$msg?></div>
                    <?php endif; ?>
                    <form action="" method="POST">
                        <p class="login-box-msg text-center">
                        	<?php if(!empty($msg)): ?>
							<div class="alert alert-<?=$sts?>"><?=$msg?></div>
						   <?php endif; ?>
                        </p>
                        <div class="form-group ">
                            <label for="">Email:</label>
                            <input type="text" placeholder="Email" name="contr_email" class="form-control">
                        </div><!--form group-->
                        <br>
                        <div class="form-group">
                            <label for="">Pasword</label>
                            <input type="password" placeholder="Password" name="contr_pass" class="form-control">
                        </div><!--form froup-->
                        <button class="btn btn-primary pull-right" name="contr_login" style="padding: 10px">Login</button>
                    </form><!--form-->
                </div><!--col- md -4-->
                <div class="col-md-4">
                </div><!--col-md-4-->
            </div><!--row-->
        </div><!--conatoner fliud-->
</body>
</html>
<?php endif; ?>