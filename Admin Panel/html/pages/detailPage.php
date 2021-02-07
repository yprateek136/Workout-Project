<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Material Admin - Add Categories</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
		<!-- END STYLESHEETS -->
         <link rel="stylesheet" href="../api/dropzone/css/style.css">
         <link rel="stylesheet" href="../api/dropzone/css/dropzone.css">

		
	</head>
	<body class="menubar-hoverable header-fixed ">

		<?php include_once '../include/header.php';?>

		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-header" style="margin: 10px; margin-left: 105px;">
						<ol class="breadcrumb">
							<li class="active">Add Details Page Data</li>
						</ol>
					</div>

					<div class="row">
							
							<div class="col-lg-offset-1 col-md-10">
                                <label>Select Your Image:</label>
                                <div class="dropzone" id="file_upload"></div>
								<form class="form form-validate floating-label" novalidate="novalidate" method="post" action="php/category_api.php">
									<div class="card">
										<div class="card-body">
                                            <input type="hidden" id="imageName" name="imageName">
											<div class="form-group">
												<input type="text" class="form-control" id="Category" name="Category" data-rule-minlength="2" maxlength="100" required>
												<label for="minmax2">Category</label>
												<p class="help-block">Minimum length 2 / Maximum length 20</p>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="CategoryName" name="CategoryName" data-rule-minlength="2" maxlength="100" required>
												<label for="minmax2">Category Name</label>
												<p class="help-block">Minimum length 2 / Maximum length 20</p>
											</div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="City" name="City" data-rule-minlength="2" maxlength="100" required>
                                                <label for="minmax2">City</label>
                                                <p class="help-block">Minimum length 2 / Maximum length 20</p>
                                            </div>
											<div class="form-group">
												<input type="text" class="form-control" id="Address" name="Address" data-rule-minlength="2" maxlength="100" required>
												<label for="minmax2">Address</label>
												<p class="help-block">Minimum length 2 / Maximum length 20</p>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="AverageSpending" name="AverageSpending" data-rule-minlength="2" maxlength="100" required>
												<label for="minmax2">Average Spending</label>
												<p class="help-block">Minimum length 2 / Maximum length 20</p>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="Description" name="Description" data-rule-minlength="2" maxlength="700" required>
												<label for="minmax2">Description</label>
												<p class="help-block">Minimum length 2 / Maximum length 20</p>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="AverageSpendingDetail" name="AverageSpendingDetail" data-rule-minlength="2" maxlength="200" required>
												<label for="minmax2">Average Spending Detail</label>
												<p class="help-block">Minimum length 2 / Maximum length 20</p>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="CrowdDensity" name="CrowdDensity" data-rule-minlength="2" maxlength="200" required>
												<label for="minmax2">Crowd Density</label>
												<p class="help-block">Minimum length 2 / Maximum length 20</p>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="Facilities" name="Facilities" data-rule-minlength="2" maxlength="200" required>
												<label for="minmax2">Facilities</label>
												<p class="help-block">Minimum length 2 / Maximum length 20</p>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="PhoneNo" name="PhoneNo" data-rule-minlength="2" maxlength="200" required>
												<label for="minmax2">Phone No</label>
												<p class="help-block">Minimum length 2 / Maximum length 20</p>
											</div>
											
										</div><!--end .card-body -->
										<div class="card-actionbar">
											<div class="card-actionbar-row">
												<button type="button" class="btn btn-flat btn-primary ink-reaction" onclick="sendData()">ADD</button>
											</div>
										</div>
									</div><!--end .card -->
									<em class="text-caption">Advanced validation</em>
								</form>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END ADVANCED VALIDATION -->

					<!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->

			<?php include_once '../include/leftSideBar.php' ?>
			<?php include_once '../include/rightSideBar.php' ?>

		

		</div><!--end #base-->
		<!-- END BASE -->

		<!-- BEGIN JAVASCRIPT -->
		<script src="../../assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="../../assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="../../assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="../../assets/js/libs/spin.js/spin.min.js"></script>
		<script src="../../assets/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="../../assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/additional-methods.min.js"></script>
		<script src="../../assets/js/core/source/App.js"></script>
		<script src="../../assets/js/core/source/AppNavigation.js"></script>
		<script src="../../assets/js/core/source/AppOffcanvas.js"></script>
		<script src="../../assets/js/core/source/AppCard.js"></script>
		<script src="../../assets/js/core/source/AppForm.js"></script>
		<script src="../../assets/js/core/source/AppNavSearch.js"></script>
		<script src="../../assets/js/core/source/AppVendor.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>
		<!-- END JAVASCRIPT -->


 <script type="text/javascript" src="../api/dropzone/js/jquery.js"></script>
  <script type="text/javascript" src="../api/dropzone/js/dropzone.js"></script>
  <script>
    Dropzone.autoDiscover = false;
    var img1;
    var myDropzone = new Dropzone("#file_upload", { 
      url: "../api/dropzone/moveDropzone.php",
      paramName: "file", // The name that will be used to transfer the file
      
      maxFilesize: 20, // MB
      acceptedFiles: '.png,.jpg,.jpeg',
      success: function(file,response){
        console.log(response);
         img1 += JSON.parse(response).name+",";
          $("#imageName").val(img1);
        
      }
    });


  </script>
		 <script>
		 	let id = "<?=isset($_GET['id'])?$_GET['id']:'0'?>";
            $.ajax({
                type: 'POST',
                url: '../api/index_api.php',
                data: {
                apiKey: "108045B4BAF2D77655BD7D68F5D5B0C1",
                api: "crudDetail",
                request:"105",
                id:id,
                
            },
                dataType: 'json',
                success: function (data, status, xhr) {
                console.log('status: ' + status + ', data: '+":"+data+":");
                    if(status=="success"){
                        if(data.status=="N200") {
                            console.log(data.data);
                            var res = data.data;
                            $("input[name='Category']").val(res.category);
                            $("input[name='CategoryName']").val(res.categoryName);
                            $("input[name='City']").val(res.City);                            
                            $("input[name='Address']").val(res.address);
                            $("input[name='AverageSpending']").val(res.averageSpending);
                            $("input[name='Description']").val(res.description);
                            $("input[name='AverageSpendingDetail']").val(res.averageSpendingDetail);
                            $("input[name='CrowdDensity']").val(res.crowdDensity);
                            $("input[name='Facilities']").val(res.facilities);
                            $("input[name='PhoneNo']").val(res.phoneNo);
                           
                            
                            }
                        

                    }
                    else{
                            alert("Data Fetching Failed");
                    }
                },
                error: function (jqXhr, textStatus, errorMessage) {
                        console.log('Error' + errorMessage);
                }
            });


 
function sendData() {

/*if(validation()){*/

     $.ajax({
                type: 'POST', 
                url: '../api/index_api.php',
                data: {
                apiKey: "108045B4BAF2D77655BD7D68F5D5B0C1",
                api: "crudDetail",
				request:id==0?"101":"103",                
				Category: $("input[name='Category']").val(),
                CategoryName: $("input[name='CategoryName']").val(),
                City: $("input[name='City']").val(),
                Address: $("input[name='Address']").val(),
                AverageSpending: $("input[name='AverageSpending']").val(),
                Description: $("input[name='Description']").val(),
                AverageSpendingDetail: $("input[name='AverageSpendingDetail']").val(),
                CrowdDensity: $("input[name='CrowdDensity']").val(),
                Facilities: $("input[name='Facilities']").val(),
                PhoneNo: $("input[name='PhoneNo']").val(),
                imageName: $("input[name='imageName']").val(),

                id:id,
              
                
            },
                dataType: 'json',
                success: function (data, status, xhr) {
                  
                    if(status=="success"){
                        if (data.status=="N200") {
                        
                             window.location.href = "../tables/showDetail.php";
                        }else{
                        
                       		alert(data.message);
                            console.log(data.log);
                        }
                        if (data.status=="N201") {    
                             window.location.href = "../tables/showDetail.php";
                        }
                       	if(data.status=="N405"){
                   				  
                       		alert(data.message);
                            console.log(data.log);
                        }
                    }
                },
              
            });
    

        }
</script>

	</body>
</html>
