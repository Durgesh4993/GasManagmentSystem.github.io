<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
<link rel="stylesheet" href="custom/js/order.js">

<?php include('./constant/connect.php');?>
 







 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add Measurement</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Measurement</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                
                <div class="row">
                    <div class="col-lg-11" style="    margin-left: 5%;">
                        <div class="card">
                            <div class="card-title">
                               
                            </div>
                            <div id="add-brand-messages"></div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="form-horizontal" method="POST" action="php_action/addMeasurement.php" id="editOrderForm">

        <?php $orderId = $_GET['id'];
        /*

        $sql = "SELECT orders.order_id, orders.order_date, orders.client_name, orders.client_contact, orders.sub_total, orders.vat, orders.total_amount, orders.discount, orders.grand_total, orders.paid, orders.due, orders.payment_type, orders.payment_status,orders.payment_place,orders.gstn FROM orders  
          WHERE orders.order_id = {$orderId}";

        $result = $connect->query($sql);
        $data = $result->fetch_row();
         $sql1 = "SELECT * FROM tbl_client  
          WHERE id = '".$data[2]."'";

        $result1 = $connect->query($sql1);
        $data1 = $result1->fetch_assoc();*/
       
        ?>

        <div class="form-group">
          <div class="row">
          <label class="col-sm-2 control-label">Date</label>
            <div class="col-sm-10">
            <input type="date" class="form-control" id="orderDate" name="date" autocomplete="off" value="" />
          </div>
        </div> 
      </div>
       <div class="form-group">
          <div class="row">
          <label class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="orderDate" name="description" autocomplete="off" value="" />
          </div>
        </div> 
      </div>
      <div></div><div></div>
       <div class="form-group">
          <div class="row">
          <label class="col-sm-2 control-label">Shoulder</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="orderDate" name="shoulder" autocomplete="off" value="" />
          </div>
          <label class="col-sm-2 control-label">SSAS</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="orderDate" name="ssas" autocomplete="off" value="" />
          </div>
          <label class="col-sm-2 control-label">Top Length</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="orderDate" name="Tlength" autocomplete="off" value="" />
          </div>
        </div> 
      </div>
       <div class="form-group">
          <div class="row">
          <label class="col-sm-2 control-label">Back</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="orderDate" name="back" autocomplete="off" value="" />
          </div>
          <label class="col-sm-2 control-label">Long Sleeve Length</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="orderDate" name="longlength" autocomplete="off" value="" />
          </div>
          <label class="col-sm-2 control-label">Short Sleeve Length</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="orderDate" name="shortlength" autocomplete="off" value="" />
          </div>
        </div> 
      </div>

 <div class="form-group">
          <div class="row">
          <label class="col-sm-2 control-label">Sleeve Cuff</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="orderDate" name="scuff" autocomplete="off" value="" />
          </div>
          <label class="col-sm-2 control-label">Neck</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="orderDate" name="neck" autocomplete="off" value="" />
          </div>
          <label class="col-sm-2 control-label">Trouser Length
</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="orderDate" name="trlength" autocomplete="off" value="" />
          </div>
        </div> 
      </div>
       <div class="form-group">
          <div class="row">
          <label class="col-sm-2 control-label">Lap</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="orderDate" name="lap" autocomplete="off" value="" />
          </div>
          <label class="col-sm-2 control-label">Waist</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="orderDate" name="waist" autocomplete="off" value="" />
          </div>
          <label class="col-sm-2 control-label">Hip</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="orderDate" name="hip" autocomplete="off" value="" />
          </div>
        </div> 
      </div>


      <div class="form-group">
          <div class="row">
          <label class="col-sm-2 control-label">Neck Collar</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="orderDate" name="ncollar" autocomplete="off" value="" />
          </div>
          <label class="col-sm-2 control-label">Bottom</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="orderDate" name="bottom" autocomplete="off" value="" />
          </div>
          <label class="col-sm-2 control-label">Waist 36 Inches</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="orderDate" name="WaistInch" autocomplete="off" value="" />
          </div>
        </div> 
     </div>
      <div class="form-group">
          <div class="row">
          <label class="col-sm-2 control-label">Chest</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="orderDate" name="chest" autocomplete="off" value="" />
          </div>
          <label class="col-sm-2 control-label">Length</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="orderDate" name="length" autocomplete="off" value="" />
          </div>
          <label class="col-sm-2 control-label">Other</label>
            <div class="col-sm-2">
            <input type="text" class="form-control" id="orderDate" name="other" autocomplete="off" value="" />
          </div>
        </div> 
     </div>
        

       
          <input type="hidden" name="orderId" id="orderId" value="<?php echo $orderId; ?>" />

          <button type="submit" id="editOrderBtn" data-loading-text="Loading..." class="btn btn-success"><i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
            
          </div>
        </div>
      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               



<?php include('./constant/layout/footer.php');?>



