<?php if(!empty($_REQUEST['edit_item_id'])){?>
<?php $edit_item_id = $_REQUEST['edit_item_id'];
 $query=mysqli_query($dbc,"SELECT * FROM items WHERE item_id = '$edit_item_id'");
 $item=mysqli_fetch_assoc($query);
 ?>
<div class="row">
  <h4 class="text-center">Update Items</h4>
 <?php if(!empty($msg)):?>
  <div class="alert alert-<?=$sts?>"><?=$msg?></div>
   <?php endif; ?>
  <div class="col-sm-6">
   <form action="" method="POST">
    <div class="form-group">
      <label for="" class="control-label">Name</label>
      <input type="text" name="item_name" class="form-control" value="<?=$item['item_name']?>">
      <input type="hidden" readonly="" class="form-control" name="item_id" value="<?=$item['item_id']?>">
      </div><!--form group-->
    <div class="form-group">
      <label for="" class="control-label">Item Cate</label>
      <select name="cate_id" id="" class="form-control" value="<?=$item['cate_id']?>">
        <option value="">~~choose~~</option>
        <?php $fetchcate =mysqli_query($dbc,"SELECT * FROM categorys");
        while($rowcate = mysqli_fetch_assoc($fetchcate)):?>
        <option <?php if(@$item['cate_id'] == $rowcate['cate_id']) {?> <?php echo "selected";?> <?php }?> value="<?=$rowcate['cate_id']?>"><?=$rowcate['cate_name']?></option>
        <?php endwhile; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="" class="control-label">Brands</label>
      <select name="brand_id" id="" class="form-control" value="<?=$item['brand_id']?>">
        <option value="">~~choose~~</option>
        <?php $fetchbrand =mysqli_query($dbc,"SELECT * FROM brands");
        while($rowbrand = mysqli_fetch_assoc($fetchbrand)):?>
        <option <?php if(@$item['brand_id'] == $rowbrand['brand_id']) {?> <?php echo "selected";?> <?php }?> value="<?=$rowbrand['brand_id']?>"><?=$rowbrand['brand_name']?></option>
        <?php endwhile; ?>
      </select>
      </div><!--form grou-->
      <div class="form-group">
        <label for="" class="control-label">Price</label>
        <input type="text" class="form-control" name="item_price" value="<?=$item['item_price']?>">
      </div>
      <div class="form-group">
        <label for="" class="control-label">Status</label>
          <select name="item_sts" id="" class="form-control">
          <option value="">~~choose~~</option>
          <option <?php if(@$item['item_sts'] == 1) {?> <?php echo "selected";?> <?php }?> value="1">Available</option>
          <option <?php if(@$item['item_sts'] == 0) {?> <?php echo "selected";?> <?php }?> value="0">Un Available</option>
        </select>
      </div><!--form groupp-->
    <input type="submit" name="update_item" value="Update" class="btn btn-info pull-right">
  </div><!--col-sm-6-->
  <div class="col-sm-6">
   <table class="table table-bordered">
    <thead>
    <tr>
       <th>Name</th>
       <th>Brands</th>
       <th>Price</th>
       <th>Status</th>
       <th>Price</th>
       <th>Action</th>
       <th>Action</th>
    </tr>
     </thead>
    <tbody>
        <?php $query1 = mysqli_query($dbc,"SELECT * FROM items");
        while($row3=mysqli_fetch_assoc($query1)): ?>
        <tr>
         <td><?=$row3['item_name']?></td>
         <td><?=fetchRecord($dbc,"categorys","cate_id",$row3['cate_id'])['cate_name'];?></td>
         <td><?=fetchRecord($dbc,"brands","brand_id",$row3['brand_id'])['brand_name'];?></td>
         <td><?=getStatus($row3['item_sts']);?></td>
         <td><?=$row3['item_price']?></td>

         <td><a class="btn btn-danger btn-sm" href="index.php?nav=item&del_item_id=<?=$row3['item_id']?>">X</a></td>         
         <td><a href="index.php?nav=item&edit_item_id=<?=$row3['item_id']?>" class="btn btn-info btn-sm">H</a>
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
  <h4 class="text-center">Insert Items</h4>
 <?php if(!empty($msg)): ?>
  <div class="alert alert-<?=$sts?>"><?=$msg?></div>
   <?php endif; ?>
  <div class="col-sm-6">
    <form action="" method="POST">
       <div class="form-group">
      <label for="" class="control-label">Name</label>
      <input type="text" name="item_name" class="form-control">
      </div><!--form group-->
    <div class="form-group">
      <label for="" class="control-label">Items</label>
      <select name="cate_id" id="" class="form-control" value="<?=$item['cate_id']?>">
        <option value="">~~choose~~</option>
        <?php $fetchcate =mysqli_query($dbc,"SELECT * FROM categorys");
        while($rowcate = mysqli_fetch_assoc($fetchcate)):?>
        <option value="<?=$rowcate['cate_id']?>"><?=$rowcate['cate_name']?></option>
        <?php endwhile; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="">Brands</label>
      <select name="brand_id" id="" class="form-control">
        <option value="">~~choose~~</option>
        <?php $fetchbrand =mysqli_query($dbc,"SELECT * FROM brands");
        while($rowbrand = mysqli_fetch_assoc($fetchbrand)):?>
        <option value="<?=$rowbrand['brand_id']?>"><?=$rowbrand['brand_name']?></option>
        <?php endwhile; ?>
      </select>
      </div><!--form grou-->
      <div class="form-group">
        <label for="" class="control-label">Price</label>
        <input type="text" class="form-control" name="item_price">
      </div>
      <div class="form-group">
        <label for="" class="control-label">Status</label>
          <select name="item_sts" id="" class="form-control">
          <option value="">~~choose~~</option>
          <option value="1">Available</option>
          <option value="0">Un Available</option>
        </select>
      </div><!--form groupp-->
      <input type="submit" name="add_item" value="Submit" class="btn btn-success pull-right">
    </div><!--col-sm-6-->
    <div class="col-sm-6">
     <table class="table table-bordered">
      <thead>
      <tr>
       <th>Name</th>
       <th>Cates</th>
       <th>Brands</th>
       <th>Price</th>
       <th>Status</th>
       <th>Action</th>
       <th>Action</th>
      </tr>
       </thead>
       <tbody>
         <?php $query1 = mysqli_query($dbc,"SELECT * FROM items");
        while($row1=mysqli_fetch_assoc($query1)): ?>
        <tr>
         <td><?=$row1['item_name']?></td>
         <td><?=fetchRecord($dbc,"categorys","cate_id",$row1['cate_id'])['cate_name'];?></td>
         <td><?=fetchRecord($dbc,"brands","brand_id",$row1['brand_id'])['brand_name'];?></td>
         <td><?=getStatus($row1['item_sts']);?></td>
         <td><?=$row1['item_price']?></td>
         <td><a class="btn btn-danger btn-sm" href="index.php?nav=item&del_item_id=<?=$row1['item_id']?>">X</a></td>         
         <td><a href="index.php?nav=item&edit_item_id=<?=$row1['item_id']?>" class="btn btn-info btn-sm">H</a>
         </td>          
        </tr>
       <?php endwhile;?>
       </tbody>
    </table>
    </form><!--form-->
  </div><!--col-sm-6-->
</div><!--row-->
<?php }?>
