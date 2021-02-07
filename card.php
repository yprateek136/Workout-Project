<!DOCTYPE html>
<html>
<head>
	<title>card</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- fontawesome link -->
	<!-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> -->
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="header_card">
		<header  class="borderbtm">
			<!-- /Navigation bar -->
			<nav class="navbar navbar-expand-lg navbar-dark backgroundcolor">
				<div class="container-fluid">
					<img class="logo" src="img/fitness.svg">
					<a class="navbar-brand px-2" href="index.html">Workout</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="index.html">Home</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									More
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<li><a class="dropdown-item" href="#">Gym</a></li>
									<li><a class="dropdown-item" href="#">Swimming</a></li>
									<li><a class="dropdown-item" href="#">Pilates</a></li>
									<li><a class="dropdown-item" href="#">Yoga</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<div class="sel-city">
			<nav class="navbar navbar-dark backgroundcolor">
				<div class="container-fluid ">
					<div class="dropdown">
						<p class="dropdown-toggle textcolor" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
							Delhi-NCR
						</p>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<li><a class="dropdown-item" href="#">Faridabad</a></li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<form class="d-flex cover-text1-card cover_text1">
				<div class="form-group has-search cover_search1">
					<span class="fa fa-search form-control-feedback"></span>
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<div class="btn-group">
					<button type="button" class="btn btn-danger dropdown-toggle cover_search_btn1" data-bs-toggle="dropdown" aria-expanded="false">
					All
					</button>
					<ul class="dropdown-menu search_dropdown">
						<li><a class="dropdown-item " href="#">Delhi</a></li>
						<!-- <li><a class="dropdown-item" href="#"></a></li>
						<li><a class="dropdown-item" href="#">Something else here</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="#">Separated link</a></li> -->
					</ul>
				</div>
			</form>
		</div>
	</div>
	<!-- buttons like-trending/bars/clubs are added -->
	<div class="container-fluid card-button ml-5">
		
	</div>
	<div class="container-fluid ml-5" id="catid">
		
	</div>
	<div class="row sorting">
		<div class="col-md-4">
			<p class="text-secondary">9268 Result Found</p>
		</div>
		<div class="col-md-8">
			<div class="d-flex" >
				<p class="mt-1">sort by</p>
				<select class="form-select ml-2 rcomsize"  >
					<option selected class="mx-5">Recommended</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
				<div class="px-3 mt-1">
					<span class="border border-2 py-2 px-2 bg-color"><img class="imageh" src="img/list.svg" alt="list">List</span>
					<span class="border border-2 py-2 px-2"><img class="imageh" src="img/map.svg" alt="map"> Map</span>
				</div>
			</div>
		</div>
	</div>
	<!-- /*Trending Section*/ -->
				<!-- *1st row py-3 Cards* -->
	<div class="" id="trending">
		<div class="row py-4 px-4 mt-5 ">
			<div class="col-sm-9">
				<div class="row" id="dynamincCard">
				</div>
			</div>
			<div class="col-sm-3">
				<!-- <div class="slider-image2"> -->
				<div class="bg-white">
					<div class="box_shadow py-3 px-3">
						<p class="p-2"><strong>Search Places Near You</strong></p>
						<img src="img/search (1).svg" class="serchheight" alt="search.svg"> <span> Search category & moods</span>
						<hr class="hrtag">
						<div class="row">
							<div class="col-sm-6">
								<input type="checkbox" id="male" name="gender" value="male">
								<label for="male"> Vihar</label><br>
							</div>
							<div class="col-sm-6 text-center">
								<ul>
									<li>11</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<input type="checkbox" id="male" name="gender" value="male">
								<label for="male">Uttam Nagar</label><br>
							</div>
							<div class="col-sm-6 text-center">
								<ul>
									<li>11</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								
								<input type="checkbox" id="male" name="gender" value="male">
								<label for="male">Noida</label><br>
								
							</div>
							<div class="col-sm-6 text-center">
								<ul>
									<li>11</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								
								<input type="checkbox" id="male" name="gender" value="male">
								<label for="male">Vaishali</label><br>
								
							</div>
							<div class="col-sm-6 text-center">
								<ul>
									<li>11</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- </div> -->
				<div class=" mt-5 bg-white">
					<div class="box_shadow py-3 px-3">
						<p class="p-2"><strong>Filter by Category & Moods</strong></p>
						<img src="img/search (1).svg" class="serchheight" alt="search.svg"> <span> Search category & moods</span>
						<hr class="hrtag">
						<div class="row">
							<div class="col-sm-6">
								
								<input type="checkbox" id="male" name="gender" value="male">
								<label for="male"> Vihar</label><br>
								
							</div>
							<div class="col-sm-6 text-center">
								<ul>
									<li>11</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								
								<input type="checkbox" id="male" name="gender" value="male">
								<label for="male">Uttam Nagar</label><br>
								
							</div>
							<div class="col-sm-6 text-center">
								<ul>
									<li>11</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								
								<input type="checkbox" id="male" name="gender" value="male">
								<label for="male">Noida</label><br>
								
							</div>
							<div class="col-sm-6 text-center">
								<ul>
									<li>11</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								
								<input type="checkbox" id="male" name="gender" value="male">
								<label for="male">Vaishali</label><br>
								
							</div>
							<div class="col-sm-6 text-center">
								<ul>
									<li>11</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /*Gyms Section*/-->
	<script src="js/jquery-3.5.1.js"></script>
	<!-- Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
	</script>

	<script type="text/javascript">
		function showCategory(id){
			$.ajax({
				type: 'POST',
				url: 'Admin Panel/html/api/index_api.php',
				data: {
					apiKey: "108045B4BAF2D77655BD7D68F5D5B0C1",
					api: "crudUser",
					request:"129",
					id: id,
				},
				dataType: 'json',
				success: function (data, status, xhr) 
				{
					var res = data.data;
					if(status=="success")
					{
						if (data.status=="N200") 
						{
							var student = '';
							// ITERATING THROUGH OBJECTS
							res.forEach((obj)=>{
								student += `<button onclick="viewCardData(${obj.id})" id="btn${obj.id}" data-cat-id="${obj.id}" type="button" class="btn btn-warning rounded-pill px-4 py-2 m-3">${obj.category}</button>`;
							});
							$('#catid').html(student);	
						}
						else{
						alert("Error, Please Rerty!");
						console.log(data.log);
						}
					}
					else{
					alert("Upload Failed");
					}
				},
				error:function (jqXhr, textStatus, errorMessage) 
				{
					console.log('Error' + errorMessage);
				}
			});
		}
		showCategory();
		function viewData(id)
		{
			window.location.href = "detail.php?id="+id;
		}
	</script>
	<script type="text/javascript">
		viewCardData(0);
		function viewCardData(id)
		{
			let city1 = "<?=isset($_GET['city'])?$_GET['city']:'1'?>";
			$.ajax({
				type: 'POST',
				url: 'Admin Panel/html/api/index_api.php',
				data: {
					apiKey: "108045B4BAF2D77655BD7D68F5D5B0C1",
					api: "crudDetail",
					request:"130",
					city1:city1,
					categoryid:id,
				},
				dataType: 'json',
				success: function (data, status, xhr) 
				{
					var res1 = data.data;
					if(status=="success")
					{
						if (data.status=="N208")
							{
								var student1 = '';
								res1.forEach((obj)=>{
									img_url=obj.gallery;
									var array=img_url.split(",");
									student1 += `<div class="col-md-4 mt-4">
										<div class="box_shadow">
											<img src="Admin Panel/html/api/dropzone/images/${array[0]}" alt="seaimager" class="slider-image22-card">
											<div class="lastrel-card">
												<div class="tableicon dflex">
													<span class="tdpadding " ><img src="img/owl1.png" class="o_icon" alt=""></span>
													<span class="tdpadding tdpadding1" ><p>4.5/<small>5</small></p></span>
												</div>
												<div class="figure22">
													<figure class="figure_h_icon1">
														<img src="img/heart11.svg" class="h_icon1" alt="">
													</figure>
													<figure class="figure_s_icon1">
														<img src="img/share1.svg" class="s_icon1" alt="">
													</figure>
												</div>
												<div class="sliderlast">
													<p class="bt1">${obj.catName}</p>
													<h5 class="">${obj.categoryName}</h5>
													<small class="secondary ">${obj.address}</small>
													<small class="secondary">10:30 AM-12:00 PM<span class="ggreen "> (OPEN NOW)</span></small>
													<div>
														<a class="mt btn_view_info" id="a" onclick="viewData(${obj.id})">View info<i class="fa fa-angle-right ml-1"></i></a>
														<a class="bt11-card mt" id="a">Buy A Plan </a>
													</div>
												</div>
											</div>
										</div>
									</div>`;
								});

								$('#dynamincCard').html(student1);

							}
							if (data.status=="N408")
							{
								alert("Error, Please Rerty! 408");
								console.log(data.log);
							}
					}
					else
					{
						alert("Upload Failed");
					}
				},
				error:function (jqXhr, textStatus, errorMessage)	
				{
					console.log('Error' + errorMessage);
				}
			});
		}
	</script>
</body>
</html>