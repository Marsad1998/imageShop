<?php 
if(isset($_POST["admin_registor"])){
 	$data=[
  	'admin_name'=>$_POST['admin_name'],
  	'admin_email'=>$_POST['admin_email'],
  	'admin_pass'=>$_POST['admin_pass'],
  	'captcha'=> $_POST['captcha'],
	];
	if(insert_data($dbc,"admins",$data)){
	 $msg = "Admin Registor Successfully";
	 $sts = "success";
	}else{
	 $msg = mysqli_error($dbc);
	 $sts = "danger";
	}
}
// Login Admin
 if(isset($_POST['admin_login'])){
  $admin_email = validate_data($dbc,strip_tags($_REQUEST['admin_email']));
  $admin_pass = $_REQUEST['admin_pass'];
  $sql = mysqli_query($dbc,"SELECT * FROM admins WHERE admin_email = '$admin_email' AND admin_pass = '$admin_pass'");
  $count = mysqli_num_rows($sql);
  if ($count == 1) {
  $_SESSION['admin_login'] = $admin_email;
  $msg = "Login Successfully";
  $sts = "success";
  header('refresh:1;url=index.php');
  }else{
  $msg = "Invaild Email and Password";
  $sts = "danger"; 	
 }
 }// Login ADmin Close
 // Add Brand
 if(isset($_POST['add_brand'])){
  $data = [
  'brand_name'=>$_POST['brand_name'],
  'brand_sts'=>$_POST['brand_sts'],
  ];
  if(insert_data($dbc,"brands",$data)){
  $msg = "Add Brand Successfully";
  $sts = "success";
  }else{
  $msg=mysqli_error($dbc);
  $sts="danger";
  }
 }
  //Add Category
 if(isset($_POST['submit_cate'])){
  $data = [
  'cate_name'=>$_POST['cate_name'],
  'cate_sts'=>$_POST['cate_sts'],
  ];
  if(insert_data($dbc,"categorys",$data)){
    $msg = "Data Insert Successfully";
    $sts = "success";
  }else{
  $msg=mysqli_query($dbc);
  $sts = "danger";
  }
 }
 // Delete Category
 if (!empty($_REQUEST['del_cate_id'])){
  $del_cate_id = $_REQUEST['del_cate_id'];
  deleteFromTable($dbc,"categorys","cate_id",$del_cate_id);
  // $q = mysqli_query($dbc,"DELETE FROM categorys WHERE cate_id = '$del_cate_id'");
  header('refresh:1;url=index.php?nav=category');
 } 
 //Update Category Code
 if(isset($_POST['update_cate'])){
  $data = [
  'cate_name'=>$_POST['cate_name'],
  'cate_sts'=>$_POST['cate_sts'],
  'cate_id'=>$_POST['cate_id'],
  ];
  if(update_data($dbc,"categorys",$data,'cate_id',$_POST['cate_id'])){
  $msg = "Data Update Successfully";
  $sts = "success";
  header('refresh:1;url=index.php?nav=category');
  }else{
  $msg=mysqli_error($dbc);
  $sts="danger";
  }
 }
// DELETE Brand
if(!empty($_REQUEST['del_brand_id'])){
  $del_brand_id = $_REQUEST['del_brand_id'];
  deleteFromTable($dbc,"brands","brand_id",$del_brand_id);
   header('refresh:1;url=index.php?nav=brand');
 }
 // Update Brand
 if(isset($_POST['update_brand'])){
  $data=[
    'brand_name'=>$_POST['brand_name'],
    'brand_sts'=>$_POST['brand_sts'],
    'brand_id'=>$_POST['brand_id'],
  ];
  if(update_data($dbc,"brands",$data,'brand_id',$_POST['brand_id'])){
    $msg = "Brands Successfully Update";
    $sts = "success";
    header('refresh:1;url=index.php?nav=brand');
  }else{
    $msg = mysqli_error($dbc);
    $sts = "danger";
    }
 }
// Registor contributor
if(isset($_POST["add_contr"])){
  $data=[
    'contr_name'=>$_POST['contr_name'],
    'contr_email'=>$_POST['contr_email'],
    'contr_pass'=>$_POST['contr_pass'],
    'captcha'=> $_POST['captcha'],
  ];
  if(insert_data($dbc,"contributors",$data)){
   $msg = "Contributor Registor Successfully";
   $sts = "success";
  }else{
   $msg = mysqli_error($dbc);
   $sts = "danger";
  }
  $lastid=mysqli_insert_id($dbc);
  $data=['user_id'=>$lastid,];
  insert_data($dbc,"files",$data);
}
// Login Admin
 if(isset($_POST['contr_login'])){
  $contr_email = validate_data($dbc,strip_tags($_REQUEST['contr_email']));
  $contr_pass = $_REQUEST['contr_pass'];
  $sql = mysqli_query($dbc,"SELECT * FROM contributors WHERE contr_email = '$contr_email' AND contr_pass = '$contr_pass'");
  $count = mysqli_num_rows($sql);
  if ($count == 1) {
  $_SESSION['contr_login'] = $contr_email;
  $msg = "Login Successfully";
  $sts = "success";
  header('refresh:1;url=index.php');
  }else{
  $msg = "Invaild Email and Password";
  $sts = "danger";  
 }
 }// Login ADmin Close

 // Registor contributor
if(isset($_POST["add_item"])){
  $data=[
    'item_name'=>$_POST['item_name'],
    'cate_id'=>$_POST['cate_id'],
    'brand_id'=>$_POST['brand_id'],
    'item_price'=> $_POST['item_price'],
    'item_sts'=> $_POST['item_sts'],
  ];
  if(insert_data($dbc,"items",$data)){
   $msg = "Items Data  Successfully Added";
   $sts = "success";
  }else{
   $msg = mysqli_error($dbc);
   $sts = "danger";
  }
}
// DELETE Items
if(!empty($_REQUEST['del_item_id'])){
  $del_item_id = $_REQUEST['del_item_id'];
  deleteFromTable($dbc,"items","item_id",$del_item_id);
   header('refresh:1;url=index.php?nav=item');
 }

  // Update ITEMS
 if(isset($_POST['update_item'])){
  $data=[
    'item_name'=>$_POST['item_name'],
    'cate_id'=>$_POST['cate_id'],
    'brand_id'=>$_POST['brand_id'],
    'item_price'=>$_POST['item_price'],
    'item_sts'=>$_POST['item_sts'],
    'item_id'=>$_POST['item_id'],
  ];
  if(update_data($dbc,"items",$data,'item_id',$_POST['item_id'])){
    $msg = "Items Successfully Update";
    $sts = "success";
    header('refresh:1;url=index.php?nav=item');
  }else{
    $msg = mysqli_error($dbc);
    $sts = "danger";
    }
 }

?> 