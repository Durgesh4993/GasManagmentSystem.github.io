<?php 	

require_once 'core.php';
$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
extract($_POST);
  $name = $_POST['name']; 
    $reffering = $_POST['reffering']; 
        $address = $_POST['address']; 
        $gender = $_POST['gender']; 

        $productImage 	= $_POST['productImage'];

        $connection_no = rand(000,999);

  $image = $_FILES['productImage']['name'];
$target = "../assets/myimages/".basename($image);

if (move_uploaded_file($_FILES['productImage']['tmp_name'], $target)) {
 // @unlink("uploadImage/Profile/".$_POST['old_image']);
	//echo $_FILES['image']['tmp_name'];
	//cho $target;exit;
      $msg = "Image uploaded successfully";
      echo $msg;
    }else{
      $msg = "Failed to upload image";
      echo $msg;
    }
 	
				$sql = "INSERT INTO `tbl_client`(`name`, `mob_no`, `reffering`, `address`, `gender`,`image`, `connection_no`)VALUES ('$name', '$mob_no', '$reffering', '$address','$gender','$image','$connection_no')";

				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";
					header('location:../client.php');	
				} 
				else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the members";
					header('location:../client.php');
				}

			// /else	
		// if
	// if in_array 		

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST