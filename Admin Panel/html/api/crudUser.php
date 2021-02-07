<?php
$today = date('Y-m-d H:i:s');
$today1 = date("l jS F Y h:i:s A");
    $day = date('l');
    $time = date('H:i:s');
    $today_date = date('Y-m-d');
	$tablename = 'user';

    switch ($_REQUEST['request']) {
     case "101":
        $category = $_REQUEST['category'];
 	  $sql_s="SELECT * from categoriestable where category='$category' AND categoriestable.isdeleted=0";
		//$result = $conn->query($sql_s);

		  	 $result = $conn->query($sql_s);
			 if ($result->num_rows > 0) {	

			$data['status'] = 'N405';
			$data['message'] = 'User Already Exists!';
			$data['log'] = $conn->error;

		  }else{
			  $sql= "INSERT INTO categoriestable (category)
	 			VALUES ('$category')";

	 	  if ($conn->query($sql) === TRUE) {
		      $data['status'] = "N201";
		      $data['message'] = "User Successfully Added!";
		 } 
	 	else {
			  $data['status'] = 'N4004';
			  $data['message'] = 'Server Error DDB';
			 $data['log'] = $conn->error;
	  	}
	}
	break;

 case "102":
	 $tableData = [];
    /*$sql="SELECT sign_in_info.clock_in,sign_in_info.clock_out,User.id,User.image,User.name,User.email
     FROM User RIGHT JOIN sign_in_info ON sign_in_info.emailid=User.email where User.status=1";
	*//*
    $sql="SELECT User.id,User.image,User.name,User.email,(SELECT max(sign_in_info.clock_in) FROM sign_in_info WHERE User.email=sign_in_info.emailid) 'clock_in'
     FROM User JOIN sign_in_info ON sign_in_info.emailid=User.email where User.status=1";*/

     /*$sql="SELECT User.id,User.image,User.name,User.email,(SELECT max(sign_in_info.clock_in,sign_in_info.clock_out) FROM sign_in_info WHERE User.email=sign_in_info.emailid) As clock_in,(SELECT max(sign_in_info.clock_out) FROM sign_in_info WHERE User.email=sign_in_info.emailid) As clock_out FROM User WHERE User.status =1";*/
  //    $result = mysqli_query($conn,"SELECT * FROM categoriestable WHERE categoriestable.isdeleted=0");
 

	 // $result = $conn->query($sql);
	 // if ($result && $result->num_rows > 0) {
		//  while($row = $result->fetch_assoc()) {
		// 	 array_push($tableData, $row);
		//  }

		 $sql = "SELECT * FROM categoriestable WHERE categoriestable.isdeleted=0";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    array_push($tableData, $row);
  }

		
		// $array_y = array_unique($data_y);
		$data['status'] = "N200";
		$data['data'] = $tableData;
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['data'] = [];
		$data['log'] = $conn->error;
	}
	
	  /*$sql = "SELECT * FROM User WHERE status !=0";
	   $result = $conn->query($sql);
	if ($result->num_rows >= 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($tableData, $row);
		}
		$data['status'] = "N200";
		$data['data'] = $tableData;
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}*/
	break;
//update
case "103":
	$id = $_REQUEST['id'];
	$category = $_REQUEST['category'];
	
	$sql="UPDATE categoriestable SET category='$category' WHERE id=$id";
	if($conn->query($sql) === TRUE) {
		$data['status'] = "N200";
		$data['message'] = "User Updated Successfully".$id;

	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}
	break;
    //delete
  case "104":
	$id = $_REQUEST['id'];
	$sql = "UPDATE user SET status = 0 WHERE id=$id";
	if ($conn->query($sql) === TRUE) {
		$data['status'] = "N200";
		$data['data'] = "Updated";
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}
	 break;
 case "105":

	$tableData = [];
	$id = $_REQUEST['id'];

	$sql = "SELECT * FROM categoriestable WHERE id=$id";
	$result = $conn->query($sql);
	if ($result->num_rows>0) {
		$tableData = $result->fetch_assoc();
		$data['status'] = "N200";
		$data['data'] = $tableData;
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}
	break;
		
case "106":
	$key = $marshaler->marshalJson('
	    {
	        "id": ' . (int) $_REQUEST['eventId'] . ',
	        "name": "' . $_REQUEST['eventName'] . '"
	    }
	');
	$eav = $marshaler->marshalJson('
	    {
	        ":featured": "' . $_REQUEST["featured"] . '",
	        ":mod":"' . $today . '"
	    }
	');
	$params = [
		'TableName' => $tablename,
		'Key' => $key,
		'UpdateExpression' => 'set featured = :featured, modifiedOn = :mod',
		'ExpressionAttributeValues' => $eav,
		'ReturnValues' => 'UPDATED_NEW',
	];

	try {
		$result = $dynamodb->updateItem($params);
		$data['status'] = "N200";
		$data['data'] = $result['Attributes'];

	} catch (DynamoDbException $e) {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $e->getMessage();
	}
	break;
  case "107":


 $today = date("l jS F Y h:i:s A");
      $time = date('H:i:s');
      $today_date = date('Y-m-d');

  	     if(isset($_REQUEST['emailid'])) {
             $emailid=$_REQUEST['emailid'];
             $sql_s="SELECT * from sign_in_info where emailId='$emailid'";
				     $result = $conn->query($sql_s);

				      //if($conn->query($sql_s)==true) {					
					  if($result->num_rows > 0)  {
				       while ($row = $result->fetch_assoc()) {

				      //$pieces = explode(" ",$row['clock_in']);
				      $pieces = explode(" ",$row['clock_out']);

				      if($pieces[0]!=$day) {
					   if($row['status']==0){
					     $sql = "INSERT INTO sign_in_info (emailId,clockIn,status,login_from) VALUES ('$emailid','$today','1','A')";
                        	    if($conn->query($sql) === TRUE) {
                           		   $data['status'] = 'N200';
                           		   $data['message'] = 'Login Successfully'; 
                       		  	 }
                       		  	 else {
                      	   		   $data['status'] = 'N404';
                           		   $data['message'] = 'page not found';
                           		   $data['log'] = $conn->error;
                       		     } 
                       	       }

                       	       else{
                       	       		$data['status'] = 'N404';
                           		    $data['message'] = 'Logout First';
                           		    $data['log'] = $conn->error;
				                }
				              }
                       	   }  
				
				}
				else{
		          $sql ="INSERT INTO sign_in_info (emailId,clockIn,status,login_from) VALUES ('$emailid','$today','1','A')";
				   //$sql = "UPDATE sign_in_info SET clock_out='$today',status=0 WHERE userid=$userid";
                        	    if($conn->query($sql) === TRUE) {
                           		   $data['status'] = 'N200';
                           		   $data['message'] = 'Login Successfully'; 
                       		  	 }
                       		  	 else {
                      	   		  $data['status'] = 'N404';
                           		  $data['message'] = 'page not found';
                           		  $data['log'] = $conn->error;
                       		      } 
                       	   //}  
				}
				   } 
    

	break;


	case "109":

 $today = date("l jS F Y h:i:s A");
		$tableData = [];

	$sql = "SELECT * FROM holiday WHERE status !=0";
	$result = $conn->query($sql);
	if($result->num_rows >= 0) {
		while($row = $result->fetch_assoc()) {
			array_push($tableData, $row);
		}
		$data['status'] = "N200";
		$data['data'] = $tableData;
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}
	break;
	case "108":

 $today = date("l jS F Y h:i:s A");
 $tableData = [];
          if(isset($_REQUEST['emailid'])) {
                  $emailid=$_REQUEST['emailid'];
                  $sql_s="SELECT * from sign_in_info where emailId='$emailid'";
                  $result = $conn->query($sql_s);

                  if($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                   if($row['status']==1) {
                      $sql = "UPDATE sign_in_info SET status=0,clockOut='$today' WHERE emailId='$emailid'";
                        if($conn->query($sql) === TRUE) {
                             $data['status'] = 'N200';
                             $data['message'] = 'logout Successfully'; 
                        }
                        else {
                               $data['status'] = 'N404';
                               $data['message'] = 'Login first';
                               $data['log'] = $conn->error;
                             } 
                       break;
                   }
                     else if($row['status']==0){
                               $data['status'] = 'N404';
                               $data['message'] = 'Login first';
                               $data['log'] = $conn->error;
                     }
                  
                }
            }
            else{
                        $data['status'] = 'N404';
                        $data['message'] = 'Login first';
                }
    
            }
		break;
case "110":
	$tableData = [];
	$id = $_REQUEST['id'];
	$sql = "SELECT * FROM holiday WHERE status!=0 AND id=$id";
	$result = $conn->query($sql);
	if ($result->num_rows>0) {
		$tableData = $result->fetch_assoc();
		$data['status'] = "N200";
		$data['data'] = $tableData;
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}
	break;

	case "112":
	$id = $_REQUEST['id'];

	$holiday_name = $_REQUEST['holiday_name'];
	$start_date = $_REQUEST['start_date'];

	$end_date = $_REQUEST['end_date'];
	$status = $_REQUEST['status'];

    $sql = "UPDATE holiday SET holiday_name='$holiday_name',start_date='$start_date',end_date='$end_date',status='$status' WHERE id=$id";
	if($conn->query($sql) === TRUE) {
		$data['status'] = "N200";
		$data['message'] = "Holiday Updated Successfully with cityID : ".$id;
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}	
	break;

	case "113":
	//$id = $_REQUEST['id'];

	$holiday_name = $_REQUEST['holiday_name'];

	
	$status = $_POST['status'];
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];

	 /*$sql = "UPDATE holiday SET holiday_name='$holiday_name',days='$days',status='$status' WHERE id=$id";*/
	 $sql="INSERT into holiday(holiday_name,status,start_date,end_date) values('$holiday_name','$status','$start_date','$end_date')";
	 if($conn->query($sql) === TRUE) {
		$data['status'] = "N200";
		$data['message'] = "Holiday Added Successfully!";
	 } else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}	
	break;
	case "114":
//	$id = $_REQUEST['id'];
	$c_name = $_REQUEST['name'];
	$office_range = $_REQUEST['office_range'];
	$location = $_REQUEST['location'];
	$logo_image = $_REQUEST['logo'];
	$is_location = $_REQUEST['isLocation'];

	$status_u = $_REQUEST['status_usr'];
 
$sql="INSERT into company(name,office_range,location,status,logo,isDeleted,isLocation) values('$c_name','$office_range','$location',$status_u,'$logo_image',1,$is_location)";
	if($conn->query($sql) === TRUE) {
		$data['status'] = "N200";
		$data['message'] = "Company Location Added Successfully";
	} 
	else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}
	break;

	case "115":
	$tableData = [];
	$sql = "SELECT * FROM company where isDeleted!=1";
	$result = $conn->query($sql);
	if($result->num_rows >= 0) {
		while($row = $result->fetch_assoc()) {
			array_push($tableData, $row);
		}
		$data['status'] = "N200";
		$data['data'] = $tableData;
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}	
	break;
	case "116";
	$tableData = [];
	$id = $_REQUEST['id'];
	// if(isset($id)){
	$sql = "SELECT * FROM company WHERE id=$id";
	$result = $conn->query($sql);
	if ($result->num_rows==1) {
		$tableData = $result->fetch_assoc();
		$data['status'] = "N200";
		$data['data'] = $tableData;
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}
	//}
	break;
	case "117":
	$id = $_REQUEST['id'];
	$c_name = $_REQUEST['name'];
	$office_range = $_REQUEST['office_range'];
	$location = $_REQUEST['location'];
	$isLocation = $_REQUEST['isLocation'];
	$status = $_REQUEST['status'];
	$logo_image = $_REQUEST['logo'];

	

	//$image = $_REQUEST['cityPhoto'];
	//$bannerImage = $_REQUEST['cityBannerPhoto'];
$sql = "UPDATE company SET name='$c_name',location='$location',isLocation='$isLocation',status=$status,office_range='$office_range',logo='$logo_image' WHERE id=$id";
	if($conn->query($sql) === TRUE) {
		$data['status'] = "N200";
		$data['message'] = "Company Location Upated Successfully";
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}
	break;

	case "118":
	$id = $_REQUEST['id'];

	$sql = "UPDATE holiday SET status=0 WHERE id=$id";
	if($conn->query($sql) === TRUE) {
		$data['status'] = "N200";
		$data['message'] = "City Successfully deleted with cityID : ".$id;
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}
	break;

	

	case "119":
	$id = $_REQUEST['id'];

	$sql = "UPDATE holiday SET status=0 WHERE id=$id";
	if($conn->query($sql) === TRUE) {
		$data['status'] = "N200";
		$data['message'] = "Successfully deleted with cityID : ".$id;
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}
	break;
	case "120":
	$Title = $_REQUEST['Title'];
	$Description = $_REQUEST['Description'];
	$status_u = $_REQUEST['status'];
	$sql="INSERT into notification(Title,Description,status,isDeleted) values('$Title','$Description',$status_u,1)";

	if($conn->query($sql) === TRUE) {
		$data['status'] = "N200";
		$data['message'] = "Notification Added Successfully!";
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}	
	break;
	case "121":
	 $tableData = [];
     $sql = "SELECT * FROM notification WHERE status !=0";
   
	 $result = $conn->query($sql);
	 if ($result->num_rows >= 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($tableData, $row);
		}
		$data['status'] = "N200";
		$data['data'] = $tableData;
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}

	break;
	case "122":
		 $tableData = [];
		 $id = $_REQUEST['id'];

     $sql = "SELECT * FROM notification WHERE status!=0 AND id=$id";
	 $result = $conn->query($sql);
	 if ($result->num_rows >= 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($tableData, $row);
		}
		$data['status'] = "N200";
		$data['data'] = $tableData;
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}

	break;
	 case "123":
	$id = $_REQUEST['Id'];
	$title = $_REQUEST['Title'];
	$description = $_REQUEST['Description'];
	$status_u = $_REQUEST['status'];

$sql = "UPDATE notification SET title='$title',description='$description',status='$status_u' WHERE id=$id";

	if($conn->query($sql) === TRUE) {
		$data['status'] = "N200";
		$data['message'] = "Successfully Updated!";
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}
	break;
	case "124":
	$id = $_REQUEST['id'];


	$sql = "UPDATE notification SET status=0 WHERE id=$id";
	if($conn->query($sql) === TRUE) {
		$data['status'] = "N200";
		$data['message'] = "Successfully deleted with cityID : ".$id;
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}
	break;
	case "125":
	     $tableData = [];
	     $tempData = [];
	     $data_m = [];
	     $data_y = [];
		 $emailid = $_REQUEST['emailid'];

	     /*$sql="SELECT * FROM sign_in_info where clock_in LIKE '%November%' AND clock_in LIKE '%2020%' AND emailid='$emailid'";*/
	     $sql="SELECT * FROM sign_in_info where emailId='$emailid'";
         //$sql = "SELECT * FROM sign_in_info WHERE emailid='$emailid'";
	 $result = $conn->query($sql);
	 if($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
		      $pieces = explode(" ",$row['clockIn']);
		      $pieces[2];
		      $pieces[3];
     		
			array_push($data_m, $pieces[2]);
			array_push($data_y, $pieces[3]);
		}
  		$array_m = array_unique($data_m);
  		$array_y = array_unique($data_y);

		$tempData['month']=$array_m;
		$tempData['year']=$array_y;
  		array_push($tableData, $tempData);
  		array_push($tableData, $tempData);
		$data['status'] = "N200";
		$data['data'] = $tempData;
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}
	break;
		 case "126":
	     $tableData = [];
		 $emailid = $_REQUEST['emailid'];
		 $month = $_REQUEST['month'];
		 $year = $_REQUEST['year'];
	     $sql="SELECT * FROM sign_in_info where clock_in LIKE '%$month%' AND clock_in LIKE '%$year%' AND emailId='$emailid'";
         //$sql = "SELECT * FROM sign_in_info WHERE emailid='$emailid'";
	     $result = $conn->query($sql);
	     if($result->num_rows > 0) {
		 while ($row = $result->fetch_assoc()) {
			array_push($tableData, $row);
		 }
		$data['status'] = "N200";
		$data['data'] = $tableData;
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}

	break;
	case "127":
	$id = $_REQUEST['id'];

	$sql = "UPDATE company SET isDeleted=0 WHERE id=$id";
	if($conn->query($sql) === TRUE) {
		$data['status'] = "N200";
		$data['message'] = "Company Data deleted Successfully";
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}
	break;
	case "128":
	$id = $_REQUEST['id'];

	$sql = "UPDATE categoriestable SET isdeleted=1 WHERE id=$id";
	if($conn->query($sql) === TRUE) {
		$data['status'] = "N200";
		$data['message'] = "User is Deleted Successfully";
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}
	break;
	case "129":
	 $tableData = [];
    /*$sql="SELECT sign_in_info.clock_in,sign_in_info.clock_out,User.id,User.image,User.name,User.email
     FROM User RIGHT JOIN sign_in_info ON sign_in_info.emailid=User.email where User.status=1";
	*//*
    $sql="SELECT User.id,User.image,User.name,User.email,(SELECT max(sign_in_info.clock_in) FROM sign_in_info WHERE User.email=sign_in_info.emailid) 'clock_in'
     FROM User JOIN sign_in_info ON sign_in_info.emailid=User.email where User.status=1";*/

     /*$sql="SELECT User.id,User.image,User.name,User.email,(SELECT max(sign_in_info.clock_in,sign_in_info.clock_out) FROM sign_in_info WHERE User.email=sign_in_info.emailid) As clock_in,(SELECT max(sign_in_info.clock_out) FROM sign_in_info WHERE User.email=sign_in_info.emailid) As clock_out FROM User WHERE User.status =1";*/
  //    $result = mysqli_query($conn,"SELECT * FROM categoriestable WHERE categoriestable.isdeleted=0");
 

	 // $result = $conn->query($sql);
	 // if ($result && $result->num_rows > 0) {
		//  while($row = $result->fetch_assoc()) {
		// 	 array_push($tableData, $row);
		//  }

		 $sql = "SELECT * FROM categoriestable WHERE categoriestable.isdeleted=0";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    array_push($tableData, $row);
  }

		
		// $array_y = array_unique($data_y);
		$data['status'] = "N200";
		$data['data'] = $tableData;
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['data'] = [];
		$data['log'] = $conn->error;
	}
	
	  /*$sql = "SELECT * FROM User WHERE status !=0";
	   $result = $conn->query($sql);
	if ($result->num_rows >= 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($tableData, $row);
		}
		$data['status'] = "N200";
		$data['data'] = $tableData;
	} else {
		$data['status'] = 'N404';
		$data['message'] = 'Server Error DDB';
		$data['log'] = $conn->error;
	}*/
	break;
default:
	// code...
	break;
}

?>

