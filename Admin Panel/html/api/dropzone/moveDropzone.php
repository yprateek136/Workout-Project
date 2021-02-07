<?php
	/* Create connection*/

$res=[];

  if($_FILES['file']['name'] != ''){
    
  	$file_names = '';

  	// $total = count($_FILES['file']['name']);

  	// for($i=0; $i<$total; $i++){
  		$filename = $_FILES['file']['name']; // Get the Uploaded file Name.
  		$extension = pathinfo($filename,PATHINFO_EXTENSION); //Get the Extension of uploded file

  		$valid_extensions = array("png","jpg","jpeg");

  		if(in_array($extension, $valid_extensions)){ // check if upload file is a valid image file.
  			$new_name = uniqid() . ".". $extension;
  			$path = "images/" . $new_name;

  			move_uploaded_file($_FILES['file']['tmp_name'], $path);
        $res=['status'=>200,'name'=>$new_name];
  		}else{
        $res=['status'=>400,'log'=>'false'];
  		}
//  	}

    echo json_encode($res);
      
    // Save uploaded images name on database
  /*	$sql = "INSERT INTO test(file) VALUES('$file_names')";
  	if(mysqli_query($conn,$sql)){
  		echo 'true';
  	}else{
  		echo 'false';
  	}*/
  }

?>
