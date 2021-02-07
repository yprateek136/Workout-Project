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

		
	</head>
	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN HEADER-->
		<?php include_once '../include/header.php'; ?>
		<?php include_once '../include/leftSideBar.php'; ?>
		<?php include_once '../include/rightSideBar.php'; ?>
		<!-- END HEADER-->

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
							<li class="active">Add Categories</li>
						</ol>
					</div>

					<div class="row">
							
							<div class="col-lg-offset-1 col-md-10">
								<form class="form form-validate floating-label" novalidate="novalidate" method="post">
									<div class="card">
										<div class="card-body">
											<div class="form-group">
												<input type="text" class="form-control" id="minmax2" name="minmax2" data-rule-minlength="2" maxlength="20" required>
												<label for="minmax2">Min / Max length</label>
												<p class="help-block">Minimum length 2 / Maximum length 20</p>
											</div>
											
										</div><!--end .card-body -->
										<div class="card-actionbar">
											<div class="card-actionbar-row">
												<button type="button" class="btn btn-flat btn-primary ink-reaction" onclick="sendData()">Update</button>
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

		 <script>
    
    		let id = "<?=isset($_GET['id'])?$_GET['id']:'0'?>";
            $.ajax({
                type: 'POST',
                url: '../api/index_api.php',
                data: {
                apiKey: "108045B4BAF2D77655BD7D68F5D5B0C1",
                api: "crudUser",
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
                            $("input[name='minmax2']").val(res.category);
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
                api: "crudUser",
                request:"103",
                request:id==0?"101":"103",
                id:id,
                category: $("input[name='minmax2']").val(),

            },
                dataType: 'json',
                success: function (data, status, xhr) {
                    $("#loadingButton").hide();
                    $("#saveButton").show();
                    console.log('status: ' + status + ', data: ' + ":"+data+":");
                    
                        if(data.status=="N200") {

                         //alert(data.message);
                        $("#opMsg").html(data.message);
                        $('#exampleModal').modal('show');
                        window.location.href = "../tables/dynamic.php";
                        }else{
                            /*alert("Error, Please Rerty!");*/
                            console.log(data.log);
                        }
                        if (data.status=="N201") {    
                             window.location.href = "../tables/dynamic.php";
                        }
                       	if(data.status=="N405"){
                   				  
                       		alert(data.message);
                            console.log(data.log);
                        }
                  
                },
                error: function (jqXhr, textStatus, errorMessage) {
                        console.log('Error' + errorMessage);
                        $("#loadingButton").hide();
                        $("#saveButton").show();
                    }
            });
       }
/*}*/
</script>

	</body>
</html>
