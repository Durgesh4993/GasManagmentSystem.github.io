<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
<?php include('./constant/connect');
$sql = "SELECT * FROM tbl_client WHERE delete_status = 0 and status= 0";
$result = $connect->query($sql);
//echo $sql;exit;

?>
<div class="page-wrapper">

<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary"> New Connection</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">New Connection</li>
</ol>
</div>
</div>


<div class="container-fluid">




<div class="card">
<div class="card-body">


<div class="table-responsive m-t-40">
<table id="myTable" class="table table-bordered table-striped">
<thead>
<tr>
<th>#</th>
<th style="width:10%;">Photo</th>
<th>Consumer
 Name</th>
<th>Gender</th>
<th>Mobile NO</th>
<th>ID Proof Number</th>
<th>Address</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
foreach ($result as $row) {
$no+=1;
?>
<tr>
<td><?php echo$no; ?></td>
<td><img src="assets/myimages/<?php echo $row['image'];?>" style="width: 80px; height: 80px;"></td>
<td><?php echo $row['name'] ?></td>
<td><?php echo $row['gender'] ?></td>
<td><?php echo $row['mob_no'] ?></td>
<td><?php echo $row['reffering'] ?></td>
<td><?php echo $row['address'] ?></td>

<td>

<a href="edit_connection.php?id=<?php echo $row['id']?>"><button type="button" class="btn btn-xm btn-primary" >Change Status</button></a>



<!-- <a href="php_action/removeclient.php?id=<?php //echo $row['id']?>" ><button type="button" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash"></i></button></a> -->


</td>
</tr>

</tbody>
<?php    
}
?>
</table>
</div>
</div>
</div>


<?php include('./constant/layout/footer.php');?>


