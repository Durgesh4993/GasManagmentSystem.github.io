<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

  $orderid 		= $_POST['orderId'];
  $date = $_POST['date'];
  $Description = $_POST['description'];
  $Shoulder = $_POST['shoulder'];
  $SSAS = $_POST['ssas'];
  $TopLength = $_POST['Tlength'];
  $Back = $_POST['back'];
  $SSLength = $_POST['longlength'];
  $LSLength = $_POST['shortlength'];
  $SleeveCuff = $_POST['scuff'];
  $Neck = $_POST['neck'];
  $TrouserLength = $_POST['trlength'];
  $Lap = $_POST['lap'];
  $Waist = $_POST['waist'];
  $Hip = $_POST['hip'];
  $NeckCollar = $_POST['ncollar'];
  $Bottom = $_POST['bottom'];
  $WaistInches = $_POST['WaistInch'];
  $Chest = $_POST['chest'];
  $Length = $_POST['length'];
  $Other = $_POST['other'];


				$sql = "INSERT INTO measurement (`order_id`, `Date`, `Description`, `Shoulder`, `SSAS`, `TopLength`, `Back`, `SSLength`, `LSLength`, `SleeveCuff`, `Neck`, `TrouserLength`, `Lap`, `Waist`, `Hip`, `NeckCollar`, `Bottom`, `WaistInches`, `Chest`, `Length`, `Other`) 
				VALUES ('$orderid', '$date', '$Description', '$Shoulder', '$SSAS', '$TopLength', '$Back','$SSLength','$LSLength','$SleeveCuff','$Neck','$TrouserLength','$Lap','$Waist','$Hip','$NeckCollar','$Bottom','$WaistInches','$Chest','$Length','$Other')";

				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";
					//header('location:fetchProduct.php');	
				} 
				else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the members";
					header('location:../Order.php');
				}

			// /else	
		// if
	// if in_array 		

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST