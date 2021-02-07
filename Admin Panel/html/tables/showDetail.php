<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Material Admin - Dynamic tables</title>
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
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/DataTables/jquery.dataTables.css?1423553989" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/DataTables/extensions/dataTables.colVis.css?1423553990" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/DataTables/extensions/dataTables.tableTools.css?1423553990" />
		<!-- END STYLESHEETS -->
		
	</head>
	<body class="menubar-hoverable header-fixed ">
		<!-- BEGIN HEADER-->
		<?php include_once '../include/header.php'; ?>
		<!-- END HEADER-->
		<!-- BEGIN BASE-->
		<div id="base">
			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->
			<!-- BEGIN CONTENT-->
			<div id="content">
				<section class="style-default-bright">				
					<div class="section-body">
					<!-- BEGIN DATATABLE 1 -->					
						<div class="row">
							<div class="col-md-12">
								<h4>Example 1: Show/hide columns</h4>
							</div><!--end .col -->
							<div class="col-lg-12">
								<div class="table-responsive">
									<table id="example" class="table table-striped table-hover">
										<thead>
											<tr>
												<th>Sr.No.</th>
												<th>Category</th>
												<th>Category Name</th>
												<th>Address</th>
												<th>Phone No</th>
												<th>Description</th>
												<th>Edit Page</th>
												<th>Delete Page</th>
											</tr>
										</thead>														
									</table>
								</div>
							</div>
						</div>
					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->
			<!-- BEGIN MENUBAR-->		
			<?php include_once '../include/leftSideBar.php'; ?>
			<?php include_once '../include/rightSideBar.php'; ?>
			
		</div><!--end #base-->
		<!-- END BASE -->
		<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
		<!-- BEGIN JAVASCRIPT -->
		<script src="../../assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="../../assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="../../assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="../../assets/js/libs/spin.js/spin.min.js"></script>
		<script src="../../assets/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="../../assets/js/libs/DataTables/jquery.dataTables.min.js"></script>
		<script src="../../assets/js/libs/DataTables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
		<script src="../../assets/js/libs/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="../../assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="../../assets/js/core/source/App.js"></script>
		<script src="../../assets/js/core/source/AppNavigation.js"></script>
		<script src="../../assets/js/core/source/AppOffcanvas.js"></script>
		<script src="../../assets/js/core/source/AppCard.js"></script>
		<script src="../../assets/js/core/source/AppForm.js"></script>
		<script src="../../assets/js/core/source/AppNavSearch.js"></script>
		<script src="../../assets/js/core/source/AppVendor.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>
		<script src="../../assets/js/core/demo/DemoTableDynamic.js"></script>
		<!-- END JAVASCRIPT -->
		 <script type="text/javascript">
			var table;
		    $(document).ready(function() {
		    table=$('#example').DataTable( {
	
        "ajax": {
                "url": "../api/index_api.php",
                "data": function ( d ) {
                 d.api = "crudDetail";
                 d.apiKey = "108045B4BAF2D77655BD7D68F5D5B0C1";
                 d.request = 102;
                },
            },
            "fnCreatedRow": function( nRow, aData, iDataIndex ) {
                $(nRow).attr('id', "row"+aData.id);
            },
            "columns": [      
            {"data":"id"},
            {"data":"category"},
            {"data":"categoryName"},
            {"data":"address"},
            {"data":"phoneNo"},
            {"data":"description"},
           
            /*{"data":"category"},*/
            {"data":"update",
              
                "mData": null,
                "bSortable": false,
                "mRender": function (o) {
                     return `<i class="fa fa-edit" style="font-size:22px; cursor:pointer;" onclick="editData(${o.id})"></i>`;}
               },
              
           	 {"data":"delete",
              
                "mData": null,
                "bSortable": false,
                "mRender": function (o) {
                     return `<i class="fa fa-times" style="font-size:22px; cursor:pointer;" onclick="removeData(${o.id})"></i>`;}
               },
            ]          
    } );
} );

function editData(id){
    window.location.href = "../pages/detailPage.php?id="+id;
}
function removeData(id){
    // alert(id);
    // return;
     $.ajax({
                type: 'POST',  
                url: '../api/index_api.php',
                data: {
                apiKey: "108045B4BAF2D77655BD7D68F5D5B0C1",
                api: "crudDetail",
                request:"128",
                id: id,
            },
                dataType: 'json',
                success: function (data, status, xhr) {
                    $("#loadingButton").hide();
                    $("#saveButton").show();
                    console.log('status: ' + status + ', data: ' + ":"+data+":");
                    if(status=="success"){
                        if (data.status=="N200") {
                        	table.row("#row"+id).remove().draw();
                              //table.ajax.reload();
                        $("#opMsg").html(data.message);
                        $('#exampleModal').modal('show');
                            //$('#tab0Form')[0].reset();


                        }else{
                            alert("Error, Please Rerty!");
                            console.log(data.log);
                        }
                    }else{
                        alert("Upload Failed");
                    }
                },
                error:function (jqXhr, textStatus, errorMessage) {
                    $("#loadingButton").hide();
                    $("#saveButton").show();
                        console.log('Error' + errorMessage);
                    }
            }); 
}

    </script>
	</body>
</html>
