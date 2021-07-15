<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>AOJ INVENTORY</title>

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
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
<script type="text/javascript">
function fun1() {
    var xx = document.getElementById('select1').value;
    fun2();
    if(xx==1)
    {
        document.getElementById('form1').style.display = "block";
    }
    else if(xx==2)
    {
        document.getElementById('form2').style.display = "block";
    }
    else if(xx==3)
    {
        document.getElementById('form3').style.display = "block";
    }
    else if(xx==4)
    {
        document.getElementById('form3').style.display = "block";
    }
    else
    {
    }
}
function fun2()//to hide all form elements
{
    var x = document.getElementsByTagName("form");
    var i;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
}
</script>   
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loading-text">
		<h1 style="color: rgb(154, 223, 255)">AOJ IMS </h1>	
			</div>
			<div class="loader-logo"><img src="vendors/images/aoj.png" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Wait! Loading...
			</div>
		</div>
	</div>

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
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo1.jpg" alt="">
										<h3>Lea R. Frith</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo2.jpg" alt="">
										<h3>Erik L. Richards</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo3.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo4.jpg" alt="">
										<h3>Renee I. Hansen</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>Vicki M. Coleman</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="vendors/images/photo1.jpg" alt="">
						</span>
						<span class="user-name">Ross C. Lopez</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
						<a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
		
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	@include('layouts.admin_navbar')
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
	
			<div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">2020</div>
								<div class="weight-600 font-14">Contact</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart2"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">400</div>
								<div class="weight-600 font-14">Deals</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart3"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">350</div>
								<div class="weight-600 font-14">Campaign</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart4"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">$6060</div>
								<div class="weight-600 font-14">Worth</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-8 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Add Inventory</h2>
						<div id="chart">

        <label for="type" class="search-container__label">INVENTORY TYPE</label>
<select id="select1" onchange="fun1()">
<option >Select Inventory Type</option>
<option value="1">Computer</option>
<option value="2">Laptop</option>
<option value="3">Scanner</option>
<option value="4">Printer</option>
<option value="5">Form 2</option>


</select>


<form  method="post"  name="firstform" id="form1" action="">
<label>Add Computer</label><br>

				  <div class="form-group col-md-12">
                  
                  <label for="memory" class="register-container__label">Enter Model/Make:</label>
                  <input name="model" type="text" class="form-control register-container__input" id="model" required>
                  </div>

				  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter Man Serial No.:</label>
                  <input name="ram" type="text" class="form-control register-container__input" id="ram" required>
                  </div>
                 
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter Govt Serial No.:</label>
                  <input name="rom" type="text" class="form-control register-container__input" id="rom" required>

                  </div>

                  </div>


                  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter RAM:</label>
                  <input name="ram" type="text" class="form-control register-container__input" id="ram" required>
                  </div>
                 
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter ROM:</label>
                  <input name="rom" type="text" class="form-control register-container__input" id="rom" required>

                  </div>

                  </div>
				  <div class="form-group col-md-8">
                    <label for="type" class="search-container__label">SELECT CURRENT STATUS</label>
                    <select class="form-control search-container__input" id="type" name="type" required>
					<option value="functional"> Select current status</option>
					<option value="functional"> Functional</option>
                    <option value="non-functional">Non-Functional</option>
                    


                    </select>
                  </div>
                 
				 

          <div class="mb-3">
            <label for="message-text" class="col-form-label">Other Specs:</label>
            <textarea name="specs" class="form-control" id="specs"></textarea>
          </div>
		  <button type="button" name="submit" class="btn btn-primary">Add Inventory</button>
</form>

<!---------------------------------laptop form------------------------------------------------------->

<form name="secondform" id="form2" action="">
<label>Add Laptop</label><br>



				  <div class="form-group col-md-12">
                  
                  <label for="memory" class="register-container__label">Enter Model/Make:</label>
                  <input name="model" type="text" class="form-control register-container__input" id="model" required>
                  </div>

				  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter Man Serial No.:</label>
                  <input name="ram" type="text" class="form-control register-container__input" id="ram" required>
                  </div>
                 
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter Govt Serial No.:</label>
                  <input name="rom" type="text" class="form-control register-container__input" id="rom" required>

                  </div>

                  </div>


                  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter RAM:</label>
                  <input name="ram" type="text" class="form-control register-container__input" id="ram" required>
                  </div>
                 
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter ROM:</label>
                  <input name="rom" type="text" class="form-control register-container__input" id="rom" required>

                  </div>

                  </div>
				  <div class="form-group col-md-8">
                    <label for="type" class="search-container__label">SELECT CURRENT STATUS</label>
                    <select class="form-control search-container__input" id="type" name="type" required>
					<option value="functional"> Select current status</option>
					<option value="functional"> Functional</option>
                    <option value="non-functional">Non-Functional</option>
                    


                    </select>
                  </div>
                 
				 

          <div class="mb-3">
            <label for="message-text" class="col-form-label">Other Specs:</label>
            <textarea name="specs" class="form-control" id="specs"></textarea>
          </div>
		  <button type="button" name="submit" class="btn btn-primary">Add Inventory</button>
       	  
		<!-----------------------end laptop form----------------------------------->

</form>


<!---------------------------------Scanner form------------------------------------------------------->

<form name="secondform" id="form3" action="">
<label>Add Scanner</label><br>



				  <div class="form-group col-md-12">
                  
                  <label for="memory" class="register-container__label">Enter Model/Make:</label>
                  <input name="model" type="text" class="form-control register-container__input" id="model" required>
                  </div>

				  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter Man Serial No.:</label>
                  <input name="ram" type="text" class="form-control register-container__input" id="ram" required>
                  </div>
                 
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter Govt Serial No.:</label>
                  <input name="rom" type="text" class="form-control register-container__input" id="rom" required>

                  </div>

                  </div>


                  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter RAM:</label>
                  <input name="ram" type="text" class="form-control register-container__input" id="ram" required>
                  </div>
                 
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter ROM:</label>
                  <input name="rom" type="text" class="form-control register-container__input" id="rom" required>

                  </div>

                  </div>
				  <div class="form-group col-md-8">
                    <label for="type" class="search-container__label">SELECT CURRENT STATUS</label>
                    <select class="form-control search-container__input" id="type" name="type" required>
					<option value="functional"> Select current status</option>
					<option value="functional"> Functional</option>
                    <option value="non-functional">Non-Functional</option>
                    


                    </select>
                  </div>
                 
				 

          <div class="mb-3">
            <label for="message-text" class="col-form-label">Other Specs:</label>
            <textarea name="specs" class="form-control" id="specs"></textarea>
          </div>
		  <button type="button" name="submit" class="btn btn-primary">Add Inventory</button>
       	  
		<!-----------------------end Scanner form----------------------------------->

</form>

<!---------------------------------Printer form------------------------------------------------------->

<form name="secondform" id="form4" action="">
<label>Add Printer</label><br>



				  <div class="form-group col-md-12">
                  
                  <label for="memory" class="register-container__label">Enter Model/Make:</label>
                  <input name="model" type="text" class="form-control register-container__input" id="model" required>
                  </div>

				  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter Man Serial No.:</label>
                  <input name="ram" type="text" class="form-control register-container__input" id="ram" required>
                  </div>
                 
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter Govt Serial No.:</label>
                  <input name="rom" type="text" class="form-control register-container__input" id="rom" required>

                  </div>

                  </div>


                  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter RAM:</label>
                  <input name="ram" type="text" class="form-control register-container__input" id="ram" required>
                  </div>
                 
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter ROM:</label>
                  <input name="rom" type="text" class="form-control register-container__input" id="rom" required>

                  </div>

                  </div>
				  <div class="form-group col-md-8">
                    <label for="type" class="search-container__label">SELECT CURRENT STATUS</label>
                    <select class="form-control search-container__input" id="type" name="type" required>
					<option value="functional"> Select current status</option>
					<option value="functional"> Functional</option>
                    <option value="non-functional">Non-Functional</option>
                    


                    </select>
                  </div>
                 
				 

          <div class="mb-3">
            <label for="message-text" class="col-form-label">Other Specs:</label>
            <textarea name="specs" class="form-control" id="specs"></textarea>
          </div>
		  <button type="button" name="submit" class="btn btn-primary">Add Inventory</button>
       	  
		<!-----------------------end Printer form----------------------------------->

</form>

                        </div>
					</div>
				</div>
				<div class="col-xl-4 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Lead Target</h2>
						<div id="chart6"></div>
					</div>
				</div>
			</div>
			<div class="card-box mb-30">
				<h2 class="h4 pd-20">Best Selling Products</h2>
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">Product</th>
							<th>Name</th>
							<th>Color</th>
							<th>Size</th>
							<th>Price</th>
							<th>Oty</th>
							<th class="datatable-nosort">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="table-plus">
								<img src="vendors/images/product-1.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Shirt</h5>
								by John Doe
							</td>
							<td>Black</td>
							<td>M</td>
							<td>$1000</td>
							<td>1</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<img src="vendors/images/product-2.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Boots</h5>
								by Lea R. Frith
							</td>
							<td>brown</td>
							<td>9UK</td>
							<td>$900</td>
							<td>1</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<img src="vendors/images/product-3.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Hat</h5>
								by Erik L. Richards
							</td>
							<td>Orange</td>
							<td>M</td>
							<td>$100</td>
							<td>4</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<img src="vendors/images/product-4.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Long Dress</h5>
								by Renee I. Hansen
							</td>
							<td>Gray</td>
							<td>L</td>
							<td>$1000</td>
							<td>1</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="table-plus">
								<img src="vendors/images/product-5.jpg" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16">Blazer</h5>
								by Vicki M. Coleman
							</td>
							<td>Blue</td>
							<td>M</td>
							<td>$1000</td>
							<td>1</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

<!--Start Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Inventory</h5>
      
      </div>
      <div class="modal-body">
	  <div class="form-group col-md-8">
                    <label for="type" class="search-container__label">SELECT INVENTORY TYPE</label>
                    <select class="form-control search-container__input" id="type" name="type"  id="select1" onchange="fun1()" required>
					<option value="type"> Select Inventory Type</option>
                    <option value="1"> Computer</option>
                    <option value="Laptop">Laptop</option>
                    <option value="Printer">Printer</option>
                    <option value="Server">Server</option>
                    <option value="Scanner">Scanner</option>
					</select>
                  </div>
<!---------------------------------computer form------------------------------------------------------->
        <form  method="post"  name="firstform" id="form1" action="" >
     

                   
                 
				 <div class="form-title">
					 <h4>Add computer</h4>
					 </div>
				  <div class="form-group col-md-12">
                  
                  <label for="memory" class="register-container__label">Enter Model/Make:</label>
                  <input name="model" type="text" class="form-control register-container__input" id="model" required>
                  </div>

				  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter Man Serial No.:</label>
                  <input name="ram" type="text" class="form-control register-container__input" id="ram" required>
                  </div>
                 
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter Govt Serial No.:</label>
                  <input name="rom" type="text" class="form-control register-container__input" id="rom" required>

                  </div>

                  </div>


                  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter RAM:</label>
                  <input name="ram" type="text" class="form-control register-container__input" id="ram" required>
                  </div>
                 
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter ROM:</label>
                  <input name="rom" type="text" class="form-control register-container__input" id="rom" required>

                  </div>

                  </div>
				  <div class="form-group col-md-8">
                    <label for="type" class="search-container__label">SELECT CURRENT STATUS</label>
                    <select class="form-control search-container__input" id="type" name="type" required>
					<option value="functional"> Select current status</option>
					<option value="functional"> Functional</option>
                    <option value="non-functional">Non-Functional</option>
                    


                    </select>
                  </div>
                 
				 

          <div class="mb-3">
            <label for="message-text" class="col-form-label">Other Specs:</label>
            <textarea name="specs" class="form-control" id="specs"></textarea>
          </div>
		  <button type="button" name="submit" class="btn btn-primary">Add Inventory</button>
			</form>
<!---------------------------------end computer form------------------------------------------------------->

<!---------------------------------laptop form------------------------------------------------------->

<form name="secondform" id="form2" action="">
		  <div class="form-title">
					 <h4>Add Laptop</h4>
					 </div>

				  <div class="form-group col-md-12">
                  
                  <label for="memory" class="register-container__label">Enter Model/Make:</label>
                  <input name="model" type="text" class="form-control register-container__input" id="model" required>
                  </div>

				  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter Man Serial No.:</label>
                  <input name="ram" type="text" class="form-control register-container__input" id="ram" required>
                  </div>
                 
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter Govt Serial No.:</label>
                  <input name="rom" type="text" class="form-control register-container__input" id="rom" required>

                  </div>

                  </div>


                  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter RAM:</label>
                  <input name="ram" type="text" class="form-control register-container__input" id="ram" required>
                  </div>
                 
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter ROM:</label>
                  <input name="rom" type="text" class="form-control register-container__input" id="rom" required>

                  </div>

                  </div>
				  <div class="form-group col-md-8">
                    <label for="type" class="search-container__label">SELECT CURRENT STATUS</label>
                    <select class="form-control search-container__input" id="type" name="type" required>
					<option value="functional"> Select current status</option>
					<option value="functional"> Functional</option>
                    <option value="non-functional">Non-Functional</option>
                    


                    </select>
                  </div>
                 
				 

          <div class="mb-3">
            <label for="message-text" class="col-form-label">Other Specs:</label>
            <textarea name="specs" class="form-control" id="specs"></textarea>
          </div>
		  <button type="button" name="submit" class="btn btn-primary">Add Inventory</button>
        </form>		  
		<!-----------------------end laptop form----------------------------------->


	<!-----------------------footer----------------------------------->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
	  <!--------------------footer-------------------------------->
    </div>
  </div>
</div>
<!--End Modal-->




			<div class="footer-wrap pd-20 mb-20 card-box">
			AOJ IMS was developed and managed By  <a href="#" target="_blank">AOJ IT UNIT</a>
			</div>
		</div>
	</div>
	<!-- js -->

	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>
    <script type="text/javascript">
fun2();//to hide form elements after page has loaded completely
</script>
</body>
</html>