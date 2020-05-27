<?php if(!empty($_REQUEST['edit_brand_id'])){?>
<?php $edit_brand_id = $_REQUEST['edit_brand_id'];
 $query=mysqli_query($dbc,"SELECT * FROM brands WHERE brand_id = '$edit_brand_id'");
 $brand=mysqli_fetch_assoc($query);
 ?>
<div class="row">
	<h4 class="text-center">Update Brand</h4>
 <?php if(!empty($msg)):?>
  <div class="alert alert-<?=$sts?>"><?=$msg?></div>
   <?php endif; ?>
	<div class="col-sm-6">
	 <form action="" method="POST">
		<div class="form-group">
			<label for="" class="control-label">Name</label>
			<input type="text" name="brand_name" class="form-control" value="<?=$brand['brand_name']?>">
			<input type="hidden" readonly="" class="form-control" name="brand_id" value="<?=$brand['brand_id']?>">
			</div><!--form group-->
		<div class="form-group">
			<label for="" class="control-label">Status</label>
			<select name="brand_sts" id="" class="form-control" value="<?=$brand['brand_sts']?>">
				<option value="">~~choose~~</option>
				<option <?php if(@$brand['brand_sts'] == 1) {?> <?php echo "selected";?> <?php }?> value="1">Available</option>
				<option <?php if(@$brand['brand_sts'] == 0) {?> <?php echo "selected";?> <?php }?> value="0">Un Available</option>
			</select>
			</div><!--form grou-->
		<input type="submit" name="update_brand" value="Update" class="btn btn-info pull-right">
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
		   	<?php $query1 = mysqli_query($dbc,"SELECT * FROM brands");
		   	while($row1=mysqli_fetch_assoc($query1)): ?>
		   	<tr>
		   	 <td><?=$row1['brand_name']?></td>
		   	 <td><?=getStatus($row1['brand_sts']);?></td>
		   	 <td><a class="btn btn-danger btn-sm" href="index.php?nav=brand&del_brand_id=<?=$row1['brand_id']?>">X</a></td>		   		
		   	 <td><a href="index.php?nav=brand&edit_brand_id=<?=$row1['brand_id']?>" class="btn btn-info btn-sm">H</a>
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
	<h4 class="text-center">Insert Brand</h4>
 <?php if(!empty($msg)): ?>
  <div class="alert alert-<?=$sts?>"><?=$msg?></div>
   <?php endif; ?>
	<div class="col-sm-6">
		<form action="" method="POST">
			<div class="form-group">
				<label for="" class="control-label">Name</label>
				<input type="text" name="brand_name" class="form-control">
			</div><!--form group-->
			<div class="form-group">
				<label for="" class="control-label">Status</label>
				<select name="brand_sts" id="" class="form-control">
					<option value="">~~choose~~</option>
					<option value="1">Available</option>
					<option value="0">Un Available</option>
				</select>
			</div><!--form grou-->
			<input type="submit" name="add_brand" value="Submit" class="btn btn-success pull-right">
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
		   	<?php $q = mysqli_query($dbc,"SELECT * FROM brands");
		   	while($r=mysqli_fetch_assoc($q)): ?>
		   	<tr>
		   	 <td><?=$r['brand_name']?></td>
		   	 <td><?=getStatus($r['brand_sts']);?></td>
		   	 <td><a class="btn btn-danger btn-sm" href="index.php?nav=brand&del_brand_id=<?=$r['brand_id']?>">X</a></td>		   		
		   	 <td><a href="index.php?nav=brand&edit_brand_id=<?=$r['brand_id']?>" class="btn btn-info btn-sm">H</a></td>		   		
		   	</tr>
		   <?php endwhile;?>
		   </tbody>
		</table>
		</form><!--form-->
	</div><!--col-sm-6-->
</div><!--row-->
<?php }?>
