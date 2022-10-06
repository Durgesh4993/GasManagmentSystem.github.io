<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?> 
<?php include('./constant/connect.php');



$sql="SELECT * from tbl_client where  id='".$_GET['id']."'";
$result=$connect->query($sql)->fetch_assoc();



?> 

<div class="page-wrapper">

<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">Edit Client Management</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Client Brand</li>
</ol>
</div>
</div>


<div class="container-fluid">




<div class="row">
<div class="col-lg-8" style="    margin-left: 10%;">
<div class="card">
<div class="card-title">

</div>
<div id="add-brand-messages"></div>
<div class="card-body">
<div class="input-states">

<form action="php_action/editClientImage.php?id=<?php echo $_GET['id'];?>" method="POST" id="updateProductImageForm" class="form-horizontal" enctype="multipart/form-data">

                <fieldset>
<h1>Update Photo</h1>
<div class="changeUsenrameMessages"></div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label">Photo:</label>
                        <div class="col-sm-9">
                         
                           <img src="assets/myimages/<?php echo $result['image']?>" style="width:150px; height:150px;" >
                             <input type="hidden" name="old_image" value="<?php echo $result['image']?>">

  


                           
                        </div>
                    </div>
                </div>
            <div class="form-group">
              <div class="row">
<label for="editProductImage" class="col-sm-3 control-label">Select Photo: </label>

<div class="col-sm-9">

<div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>              
<div class="kv-avatar center-block">                  
<input type="file" class="form-control" id="productImage" placeholder="Product Name" name="productImage" class="file-loading" style="width:auto;"/>
</div>

</div>
</div> 
</div>                           


                <button type="submit"  name="btn" id="changeUsernameBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Save Changes</button>
                </fieldset>

 </form>

<form class="form-horizontal" method="POST"  id="submitBrandForm" action="php_action/editclient.php?id=<?php echo $_GET['id'];?>" enctype="multipart/form-data">
 <fieldset>
<input type="hidden" name="currnt_date" class="form-control">

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label"> Name</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="name" placeholder=" Name" name="name" autocomplete="off" required="" value="<?php  echo$result['name'];?>" />
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Gender</label>
<div class="col-sm-9">
  <select class="form-control" id="brandName" name="gender">
    <option value="Female" <?php if($result['gender']=="Female"){ echo "selected";}?>>Female</option>
    <option value="Male" <?php if($result['gender']=="Male"){ echo "selected";}?>>Male</option>
</select></div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Mobile No
</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="" placeholder="" name="mob_no" autocomplete="off" required="" value="<?php  echo$result['mob_no'];?>" />
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">ID Proof Number</label>
<div class="col-sm-9">
    <input type="text" class="form-control" id="" placeholder="" name="reffering" autocomplete="off" required="" value="<?php  echo$result['reffering'];?>" />

</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Address</label>
<div class="col-sm-9">
    <textarea type="text" class="form-control" id="" placeholder="" name="address" autocomplete="off" required="" style="height: 150px;"><?php  echo$result['address'];?></textarea>

</div>
</div>
</div>


<button type="submit" name="create" id="createBrandBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Update</button>
  </fieldset>
</form>
</div>
</div>
</div>
</div>

</div>





<?php include('./constant/layout/footer.php');?>


