<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>

<?php include('./constant/connect');
$user=$_SESSION['userId'];
$sql = "SELECT *, order_id, order_date, client_name, client_contact, payment_status FROM orders WHERE order_status = 1 AND user_id = '$user'";
$result = $connect->query($sql);

//echo $sql;exit;

//echo $itemCountRow;exit; 
?>
<div class="page-wrapper">

<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary"> Manage Booking</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Manage Booking</li>
</ol>
</div>
</div>


<div class="container-fluid">




<div class="card">
<div class="card-body">

<a href="add-order.php"><button class="btn btn-primary">Add Booking</button></a>

<div class="table-responsive m-t-40">
<table id="myTable" class="table table-bordered table-striped">
<thead>
<tr>
  <th>#</th>
<th>Invoice Date</th>
<th>Client Name</th>
<th>Contact</th>
<th>Delivery Staff</th>
<th>Delivery Staus</th>
<!-- <th>Total Invoice Item</th> -->
<th>Payment Status</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php
foreach ($result as $row) {


?>
<tr>
<td><?php echo $row['order_id'] ?></td>
<td><?php echo $row['order_date'] ?></td>
 <td><?php echo $row['client_name'] ?></td>
  <td><?php echo $row['client_contact'] ?></td>
  <td><?php echo $row['delivery_staff'] ?></td>
  <td><?php echo $row['delivery_status'] ?></td>
   <!-- <td></td> -->
<td><?php  if($row['payment_status']==1)
{
     
     $paymentStatus = "<label class='label label-success' ><h4>Full Payment</h4></label>";
     echo $paymentStatus;
}
else if($row['payment_status']==2){
    $paymentStatus = "<label class='label label-danger'><h4>Advance Payment</h4></label>";
    echo $paymentStatus;
}else {
    $paymentStatus = "<label class='label label-warning'><h4>No Payment</h4></label>";
     echo $paymentStatus;
    } // /els
?></td>
<td>
   <!-- <a href="addmeasurement.php?id=<?php //echo $row['order_id']?>"><button type="button" class="btn btn-xs btn-primary" title="Add Measurement" ><i class="fa fa-plus"></i></button></a> -->
    <a href="editorder.php?id=<?php echo $row['order_id']?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-pencil"></i></button></a>
  <a href="print.php?id=<?php echo $row['order_id']?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-print"></i></button></a>

  


<a href="php_action/removeOrder.php?id=<?php echo $row['order_id']?>" ><button type="button" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash"></i></button></a>

    
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


