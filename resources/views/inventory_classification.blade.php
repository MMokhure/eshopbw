<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

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
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-asColorPicker/dist/css/asColorPicker.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
	<style>
		.box{
			color: #fff;
			padding: 20px;
			display: none;
			margin-top: 20px;
		}
		
	</style>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script>
	$(document).ready(function(){
		$("select").change(function(){
			$(this).find("option:selected").each(function(){
				var optionValue = $(this).attr("value");
				if(optionValue){
					$(".box").not("." + optionValue).hide();
					$("." + optionValue).show();
				} else{
					$(".box").hide();
				}
			});
		}).change();
	});
	</script>
</head>
<body>
	<!-----------include pre-loader------------>
		
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

	@include('layouts.admin_navbar')
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
					
					<div class="col-md-12 col-sm-12">
					
					<center>
					<div class="title" >
								
								
								<div id="v2" class="row">
								
								
								<div class=" col-md-9 text-right"  >
								<h2  style="color:royalblue;">Classify Inventory By:
								</h2>
								</div>
								<div class=" col-md-3 "  >
								<h3></h3>
							</div>
							</center>


						   </div>

									
							</div>

							<div class="col-md-2 text-left">
								<form name="categoryForm" >
								<select class="form-control search-container__input"  name="category"  id="category" >
										<option value=""> Classify Inventory By:</option>
										<option value="station"> Station</option>
										<option value="user">Current User</option>
										<option value="device">Device Categories</option>
										
								</select>
							</form>
										</div>
										
						
						</div>


						
					</div>
				</div>
<!---------------------------------------------------------------Device Category------------------------------------------------------------------------------------------------------------------------->
				<div class="pd-20 card-box mb-30 device box"   >
					<div class="clearfix mb-20 pull-center" >
						<div class="pull-center">
							<h4 align="center" class=" h4">Category By Device Types</h4>
						</div>
					</div>
					
					<div id="mainsection">
        <div class="main">
           <a href="index.php?categ=Images"><button class="btn btn-secondary"><i class=" icon-picture icon-white"></i>Computer</button></a>
		   <a href="index.php?categ=Text Files"><button class="btn btn-warning"><i class="icon-file icon-white"></i>Monitors</button></a>
	   <a href="index.php?categ=Music"><button class="btn btn-success"><i class=" icon-music icon-white"></i>Laptops</button></a>
           <a href="index.php?categ=Videos"><button class="btn btn-primary" id="clickme"><i class="icon-film icon-white"></i>Printers/Scanners</button></a>
           <a href="index.php?categ=Documents"><button class="btn btn-info"><i class="icon-file icon-white"></i>Switches</button></a>
           <a href="index.php?categ=Text Files"><button class="btn btn-dark"><i class="icon-file icon-white">Servers</i></button></a>
		   <a href="index.php?categ=Text Files"><button class="btn btn-warning"><i class="icon-file icon-white">Routers</i></button></a>
           <a href="index.php?categ="><button class="btn btn-light"><i class="icon-check"></i>All Devices</button></a>
           <hr>
            <table id="dtable" width="100%" class="table table-bordered">
                    <thead>
                        <th>File Name</th>
                        <th>File Size</th>
                        <th>Uploader</th>
                        <th>DOWNLOAD</th>
                    </thead>
                    <tbody>
                        <!--<?php
                            //include "db.php";
							//$categ="all";
							//$categ=$_GET['categ'];
                           /* if($categ=="all"){
                                $q="select * from upload_data";
                            }
                            else{
                                $q="select * from upload_data where CATEGORY='$categ'";
                            }
                            $result=mysqli_query($conn,$q);
                            while($rs=mysqli_fetch_array($result)){
                                echo "
                                    <tr>
                                        <td width='60%'>".$rs['FILE_NAME']."</td>
                                        <td align='right'>".$rs['FILE_SIZE']." KB</td>
                                        <td align='right'>".$rs['UPLOADED_BY']."</td>
                                        <td align='right'><a href='".$rs['PATH']."'><button class='btn btn-primary'><i class='icon-download-alt icon-white'></button></a></td>
                                    </tr>
                                ";
                            }**/
                        ?>-->

						<tr>
							<td>1</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>

						</tr>
                    </tbody>
                </table>
        </div>
    </div>



				</div>

				<!-----------------------------------------------------------------------End Device Category Box------------------------------------------------------------------------------------------------------------->
				<!---------------------------------------------------------------User Box------------------------------------------------------------------------------------------------------------------------->
				<div class="pd-20 card-box mb-30 user box"   >
					<div class="clearfix mb-20">
						<div class="pull-center">
							<h4 align="center" class="text-primary h4"> Inventory Assigned To The Current User</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<form>
								<div class="form-group">
									<label>Computer (Desktop)</label>
									<div class="col-xl-12 mb-30">
										<div class="card-box height-100-p widget-style1">
											<div class="d-flex flex-wrap align-items-center">
												<div class="progress-data">
													<div id="chart"></div>
												</div>
												<div class="widget-data">
													<div class="h4 mb-0">Computers (Desktops)</div>
													<br>
													<div class="h5 mb-0">MODEL:</div>
													<hr>
													<div class="h5 mb-0">GOVT SERIAL No.:</div>
													<hr>
													<div class="h5 mb-0">MAN SERIAL No.:</div>
													<hr>
													<div class="h5 mb-0">RAM:</div>
													<hr>
													<div class="h5 mb-0"><span> ROM:</span></div>
													<hr>
													<div class="h5 mb-0"><span> CURRENT OS:</span></div>
													<hr>
													<div class="h5 mb-0"><span> CURRENT STATUS:</span></div>
													<hr>
													<div class="h5 mb-0"><span> OTHER SPECS:</span></div>
												</div>
											</div>
										</div>
									</div>

								</div>
								<div class="form-group">
									<label>Monitor</label>

									<div class="col-xl-12 mb-30">
										<div class="card-box height-100-p widget-style1">
											<div class="d-flex flex-wrap align-items-center">
												
												<div class="widget-data">
													<div class="h4 mb-0">Monitor</div>
													<br>
													<div class="h5 mb-0">MODEL:</div>
													<hr>
													<div class="h5 mb-0">GOVT SERIAL No.:</div>
													<hr>
													<div class="h5 mb-0">MAN SERIAL No.:</div>
													<hr>
													<div class="h5 mb-0">INCHES:</div>
													<hr>
													<div class="h5 mb-0"><span> CURRENT STATUS:</span></div>
													<hr>
													<div class="h5 mb-0"><span> OTHER SPECS:</span></div>												</div>
											</div>
										</div>
									</div>

								</div>
							</form>
						</div>
						<div class="col-md-4 col-sm-12 text-center">
							<div class="mb-20">
								<label>User Information</label>
								<div class="col-xl-12 mb-30">
									<div class="card-box height-100-p widget-style1">
										<div class="d-flex flex-wrap align-items-center">
											
											<div class="widget-data">
												<div class="h4 mb-0">User Information</div>
												<div class="weight-600 font-14">200</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12">
							<form>
								<div class="form-group">
									<label>Laptop</label>

									<div class="col-xl-12 mb-30">
										<div class="card-box height-100-p widget-style1">
											<div class="d-flex flex-wrap align-items-center">
												
												<div class="widget-data">
												<div class="h4 mb-0">Laptop</div>
													<br>
													<div class="h5 mb-0">MODEL:</div>
													<hr>
													<div class="h5 mb-0">GOVT SERIAL No.:</div>
													<hr>
													<div class="h5 mb-0">MAN SERIAL No.:</div>
													<hr>
													<div class="h5 mb-0">RAM:</div>
													<hr>
													<div class="h5 mb-0"><span> ROM:</span></div>
													<hr>
													<div class="h5 mb-0"><span> CURRENT OS:</span></div>
													<hr>
													<div class="h5 mb-0"><span> CURRENT STATUS:</span></div>
													<hr>
													<div class="h5 mb-0"><span> OTHER SPECS:</span></div>
												</div>
											</div>
										</div>
									</div>


								</div>
								<div class="form-group">
									<label>Scanner/Printer</label>

									<div class="col-xl-12 mb-30">
										<div class="card-box height-100-p widget-style1">
											<div class="d-flex flex-wrap align-items-center">
											<div class="widget-data">
												<div class="h4 mb-0">Scanner/Printertop</div>
													<br>
													<div class="h5 mb-0">MODEL:</div>
													<hr>
													<div class="h5 mb-0">GOVT SERIAL No.:</div>
													<hr>
													<div class="h5 mb-0">MAN SERIAL No.:</div>
													<hr>
													<div class="h5 mb-0">Paper Tray Capacity:</div>
													<hr>
													<div class="h5 mb-0"><span> Cartridge Capacity:</span></div>
													<hr>
													<div class="h5 mb-0"><span> Printer Type:</span></div>
													<hr>
													<div class="h5 mb-0"><span> Ink Type:</span></div>
													<hr>
													<div class="h5 mb-0"><span> Printer Only/All-in-one:</span></div>
													<hr>
													<div class="h5 mb-0"><span> Connection Interface:</span></div>
													<hr>

													<div class="h5 mb-0"><span> CURRENT STATUS:</span></div>

													<hr>
													<div class="h5 mb-0"><span> OTHER SPECS:</span></div>
												</div>
												
											</div>
										</div>
									</div>


								</div>
							</form>
						</div>
					</div>
				</div>

<!----------------------------------------------------------------------End User Category Box------------------------------------------------------------------------------------------------------------------------------->


<!---------------------------------------------------------------Station Category Box------------------------------------------------------------------------------------------------------------------------->
<div class="pd-20 card-box mb-30 station box"   >
	<div class="clearfix mb-20">
		<div class="pull-center" align="center">
			<h4 class="text-blue h4 ">Category By Station</h4>
		</div>
	</div>
	

</div>
<!---------------------------------------------------------------End Station Category Box------------------------------------------------------------------------------------------------------------------------->

			
		</div>
	</div>
	<script>
		$(function () {
	$("#category").on("change", function () {
		var text = $(this).find('option:selected').text();
		$('#v2 h3').text(text);
	});
});
	 </script>
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jquery-asColor/dist/jquery-asColor.js"></script>
	<script src="src/plugins/jquery-asGradient/dist/jquery-asGradient.js"></script>
	<script src="src/plugins/jquery-asColorPicker/jquery-asColorPicker.js"></script>
	<script src="vendors/scripts/colorpicker.js"></script>
</body>
</html>