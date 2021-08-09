<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>AOJ MANAGE STATIONS</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
<!-------------pre loader-------------->

@include('layouts.pre-loader')
	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		@include('layouts.notifications_bar')
	@include('layouts.profile_bar')
		
		</div>
	

	
		</div>
	</div>

	@include('layouts.admin_navbar')
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
		
						<br/>
						<center>
								<div id="v2">

									<h2>	Number of Available Stations: 20</h2>
								
								</center>
								<br/>

			<div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							
							<div class="widget-data">
								<div class="h4 mb-0">Broadhurst Magistrate Court</div>
								<div class="weight-600 font-14">Gaborone, Broadhurst </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							
							<div class="widget-data">
								<div class="h4 mb-0">Francistown High Court</div>
								<div class="weight-600 font-14">Francistown</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							
							<div class="widget-data">
								<div class="h4 mb-0">Gaborone Court Of Appeal</div>
								<div class="weight-600 font-14">Gaborone, CBD</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							
							<div class="widget-data">
								<div class="h4 mb-0">Gaborone High Court</div>
								<div class="weight-600 font-14">Gaborone, CBD</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!----------------------------------------------------------------------------------------------------------------------------->

<div class="row">
	<div class="col-xl-3 mb-30">
		<div class="card-box height-100-p widget-style1">
			<div class="d-flex flex-wrap align-items-center">
				
				<div class="widget-data">
					<div class="h4 mb-0">Extension II Magistrate Court</div>
					<div class="weight-600 font-14">Gaborone, Extension II</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 mb-30">
		<div class="card-box height-100-p widget-style1">
			<div class="d-flex flex-wrap align-items-center">
				
				
				<div class="widget-data">
					<div class="h4 mb-0"> Village Magistrate Court</div>
					<div class="weight-600 font-14">Gaborone, Village</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 mb-30">
		<div class="card-box height-100-p widget-style1">
			<div class="d-flex flex-wrap align-items-center">
			
				<div class="widget-data">
					<div class="h4 mb-0">Lobatse High Court</div>
					<div class="weight-600 font-14">Lobatse</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 mb-30">
		<div class="card-box height-100-p widget-style1">
			<div class="d-flex flex-wrap align-items-center">
				
				<div class="widget-data">
					<div class="h4 mb-0">Maun High Court</div>
					<div class="weight-600 font-14">Maun</div>
				</div>
			</div>
		</div>
	</div>
</div>
			

			
			<div class="min-height-200px">
				
		
				<!-- Bordered table  start -->
				<div class="pd-20 card-box mb-30">
					
					<div class="clearfix mb-20">
						<div class="pull-center" >
							<center><h2 class="text-gray h4">AOJ STATIONS</h2></center>
						</div>
					
						<div class="pull-right">
							<a href="#station-table" class="btn btn-success btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-building"></i> Add New Station</a>
						</div>
					</div>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Station</th>
								<th scope="col">Location</th>
								<th scope="col">No. of Work-Rooms</th>
								<th scope="col">Action</th>
								
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>BROADHURST MAGISTRATE COURT</td>
								<td>GABORONE, Broadhurst</td>
								<td>20</td>
								<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
								</td>
								
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>MAUN HIGH COURT</td>
								<td>MAUN</td>
								<td>10</td>
								<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
									
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>	</td>
							
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>TAKATOKWANE MARGISTRATE COURT</td>
								<td>TAKATOKWANE</td>
								<td>17</td>
								<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>	</td>
								
							</tr>
						</tbody>
					</table>
					<div class="collapse collapse-box" id="station-table">
						<div class="code-box">
							<div class="clearfix">
								<a href="#station-table" class="btn btn-secondary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Close</a>
							</div>
						
<br/>
<div class="row">

	<div class="col-md-12 col-sm-12">

<center><h4>Add New Station</h4></center>

</div>

</div>
						
<form method="POST">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<div class="form-group">
				<label>Station Name</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="form-group">
				<label>Station Location</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="form-group">
				<label>Number of Work-Rooms</label>
				<input type="text" class="form-control">
			</div>
		</div>
	</div>

	<div class="modal-footer justify-content-center">
		<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-plus"> </i> Add Station</button>
	</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Bordered table End -->
				
			
			</div>
	</div>
	@include('layouts.footer');
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>

	
    <script>
		    $(function () {
        $("#station").on("change", function () {
            var text = $(this).find('option:selected').text();
            $('#v2 h3').text(text);
        });
    });
		 </script>
</body>
</html>