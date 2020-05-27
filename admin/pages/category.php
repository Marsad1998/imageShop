<?php if(!empty($_REQUEST['edit_cate_id'])){?>
<?php $edit_cate_id = $_REQUEST['edit_cate_id'];
 $query=mysqli_query($dbc,"SELECT * FROM categorys WHERE cate_id = '$edit_cate_id'");
 $cate=mysqli_fetch_assoc($query);
 ?>
<div class="row">
	<h4 class="text-center">Update Category</h4>
 <?php if(!empty($msg)): ?>
  <div class="alert alert-<?=$sts?>"><?=$msg?></div>
   <?php endif; ?>
	<div class="col-sm-6">
		<form action="" method="POST">
			<div class="form-group">
			  <label for="" class="control-label">Name</label>
			  <input type="text" name="cate_name" class="form-control" value="<?=$cate['cate_name']?>">
			  <input type="hidden" readonly="" class="form-control" name="cate_id" value="<?=$cate['cate_id']?>">
			</div><!--form group-->
			<div class="form-group">
				<label for="" class="control-label">Status</label>
				<select name="cate_sts" id="" class="form-control" value="<?=$cate['cate_sts']?>">
					<option value="">~~choose~~</option>
					<option <?php if(@$cate['cate_sts'] == 1) {?> <?php echo "selected";?> <?php }?> value="1">Available</option>
					<option <?php if(@$cate['cate_sts'] == 0) {?> <?php echo "selected";?> <?php }?> value="0">Un Available</option>
				</select>
			</div><!--form grou-->
			<input type="submit" name="update_cate" value="Update" class="btn btn-success pull-right">
	</div><!--col-sm-6-->
	<div class="col-sm-6">
	 <table class="table table-bordered">
	  <thead>
		<tr>
		 <th>Name</th>
		 <th>Status</th>
		 <th>Action</th>
		<th>Action</th>
	    </tr>
	   </thead>
		<tbody>
		   	<?php $query1 = mysqli_query($dbc,"SELECT * FROM categorys");
		   	while($row1=mysqli_fetch_assoc($query1)): ?>
		   	<tr>
		   	 <td><?=$row1['cate_name']?></td>
		   	 <td><?=getStatus($row1['cate_sts']);?></td>
		   	 <td><a class="btn btn-danger btn-sm" href="index.php?nav=category&del_cate_id=<?=$row1['cate_id']?>">X</a></td>		   		
		   	 <td><a href="index.php?nav=category&edit_cate_id=<?=$row1['cate_id']?>" class="btn btn-info btn-sm">H</a>
		   	 </td>		   		
		   	</tr>
		   <?php endwhile;?>
		   </tbody>
		</table>
	</form><!--form-->
	</div><!--col-sm-6-->
</div><!--row AND End OF Insert form-->
<?php
}
else{
	?>
<div class="row">
	<h4 class="text-center">Insert Category</h4>
 <?php if(!empty($msg)): ?>
  <div class="alert alert-<?=$sts?>"><?=$msg?></div>
   <?php endif; ?>
	<div class="col-sm-6">
		<form action="" method="POST">
			<div class="form-group">
				<label for="" class="control-label">Name</label>
				<input type="text" name="cate_name" class="form-control">
			</div><!--form group-->
			<div class="form-group">
				<label for="" class="control-label">Status</label>
				<select name="cate_sts" id="" class="form-control">
					<option value="">~~choose~~</option>
					<option value="1">Available</option>
					<option value="0">Un Available</option>
				</select>
			</div><!--form grou-->
			<input type="submit" name="submit_cate" value="Submit" class="btn btn-success pull-right">
		</div><!--col-sm-6-->
		<div class="col-sm-6">
	   <table class="table table-bordered">
			<thead>
			<tr>
			 <th>Name</th>
			 <th>Status</th>
			 <th>Action</th>
			 <th>Action</th>
			</tr>
		   </thead>
		   <tbody>
		   	<?php $q = mysqli_query($dbc,"SELECT * FROM categorys");
		   	while($r=mysqli_fetch_assoc($q)): ?>
		   	<tr>
		   	 <td><?=$r['cate_name']?></td>
		   	 <td><?=getStatus($r['cate_sts']);?></td>
		   	 <td><a class="btn btn-danger btn-sm" href="index.php?nav=category&del_cate_id=<?=$r['cate_id']?>">X</a></td>		   		
		   	 <td><a href="index.php?nav=category&edit_cate_id=<?=$r['cate_id']?>" class="btn btn-info btn-sm">H</a></td>		   		
		   	</tr>
		   <?php endwhile;?>
		   </tbody>
		</table>
		</form><!--form-->
	</div><!--col-sm-6-->
</div><!--row-->
<?php }?>
