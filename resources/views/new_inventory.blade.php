<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>AOJ INVENTORY</title>
	
    <style>
        h1 {
            color: green;
        }
  
        .multipleSelection {
            width: 250px;
            background-color: #BCC2C1;
        }
  
        .selectBox {
            position: relative;
        }
  
        .selectBox select {
            width: 100%;
            font-weight: bold;
        }
  
        .overSelect {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }
  
        #checkBoxes {
            display: none;
            border: 1px #8DF5E4 solid;
        }
  
        #checkBoxes label {
            display: block;
        }
  
       
    </style>
	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">
	<link href="styles/multiselect.css" rel="stylesheet"/>


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
        document.getElementById('form4').style.display = "block";
    }
	else if(xx==5)
    {
        document.getElementById('form5').style.display = "block";
    }
	else if(xx==6)
    {
        document.getElementById('form6').style.display = "block";
    }
	else if(xx==7)
    {
        document.getElementById('form7').style.display = "block";
    }
	else if(xx==8)
    {
        document.getElementById('form8').style.display = "block";
    }
	else if(xx==9)
    {
        document.getElementById('form9').style.display = "block";
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
								<div class="h4 mb-0">Computers</div>
								<div class="weight-600 font-14">200</div>
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
								<div class="h4 mb-0">Laptop</div>
								<div class="weight-600 font-14">200</div>
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
								<div class="h4 mb-0">Printers</div>
								<div class="weight-600 font-14">200</div>
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
								<div class="h4 mb-0">Scanners</div>
								<div class="weight-600 font-14">200</div>
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

        <label for="type" class="search-container__label">INVENTORY TYPE: </label>
			<select id="select1" onchange="fun1()">
			<option >Choose Inventory Type </option>
			<option value="1">Computer(Desktop)</option>
			<option value="2">Laptop</option>
			<option value="3">Scanner</option>
			<option value="4">Printer</option>
			<option value="5">Switch</option>
			<option value="6">Monitor</option>
			<option value="7">Tablet</option>
			<option value="8">Router</option>
			<option value="9">Server</option>
			</select>




<!------------------------------------------1---Computer Desktop  Form------------------------------------------------------------------------>

<form  method="post"  name="firstform" id="form1" action="desktops">
@csrf
<label><h4>Add Computer(Desktop)</h4></label><br>

				  <div class="form-group col-md-12">
                  
                  <label for="memory" class="register-container__label">Enter Model/Make:</label>
                  <input name="model" type="text" class="form-control register-container__input" id="model" required>
                  </div>

				  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter Man Serial No.:</label>
                  <input name="mserail" type="text" class="form-control register-container__input" id="ram" required>
                  </div>
                 
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter Govt Serial No.:</label>
                  <input name="gserial" type="text" class="form-control register-container__input" id="rom" required>

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
                

                  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="OS" class="search-container__label">SELECT CURRENT OPERATING SYSTEM</label>
                  <input name="operating_system" type="text" class="form-control register-container__input" id="operating_system" required>

                  </div> 
                  <div class="col-md-6">
                    <label for="type" class="search-container__label">SELECT CURRENT STATUS</label>
                    <select class="form-control search-container__input" id="type" name="status" required>
					<option value=""> Select current status</option>
					<option value="functional"> Functional</option>
                    <option value="non-functional">Non-Functional</option>
                    


                    </select>
                  </div>
                 </div>
				 

          <div class="mb-3">
            <label for="message-text" class="col-form-label">Other Specs:</label>
            <textarea name="other" class="form-control" id="specs"></textarea>
          </div>
		  <button type="submit" name="submit" class="btn btn-primary">Add Inventory</button>
</form>
<!----------------------------------------------------1------END COMPUTER ---------------------------------------------------------------------------------------->


<!-------------------------2--------laptop form------------------------------------------------------->

<form name="secondform" id="form2" action="laptops" method="POST">
@csrf
<label><h4>Add Laptop</h4></label><br>
				  <div class="form-group col-md-12">
                  
                  <label for="memory" class="register-container__label">Enter Model/Make:</label>
                  <input name="model" type="text" class="form-control register-container__input" id="model" required>
                  </div>

				  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter Man Serial No.:</label>
                  <input name="mserial" type="text" class="form-control register-container__input" id="ram" required>
                  </div>
                 
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter Govt Serial No.:</label>
                  <input name="gserial" type="text" class="form-control register-container__input" id="rom" required>

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
                  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="OS" class="search-container__label">SELECT CURRENT OPERATING SYSTEM</label>
                  <input name="operating_system" type="text" class="form-control register-container__input" id="operating_system" required>

                  </div> 
                  <div class="col-md-6">
                    <label for="type" class="search-container__label">SELECT CURRENT STATUS</label>
                    <select class="form-control search-container__input" id="type" name="status" required>
					<option value=""> Select current status</option>
					<option value="functional"> Functional</option>
                    <option value="non-functional">Non-Functional</option>
                    </select>
                  </div>
                 </div>

          <div class="mb-3">
            <label for="message-text" class="col-form-label">Other Specs:</label>
            <textarea name="others" class="form-control" id="specs"></textarea>
          </div>
		  <button type="submit" name="submit" class="btn btn-primary">Add Inventory</button>
</form>  
<!-------------------------------------------------2-------end laptop form--------------------------------------------------------------------->




<!--------------------------3------Scanner form------------------------------------------------------->

<form name="thirdform" id="form3" action="scanners" method="POST"> 
@csrf
<label><h4>Add Scanner</h4></label><br>



				  <div class="form-group col-md-12">
                  
                  <label for="memory" class="register-container__label">Enter Model/Make:</label>
                  <input name="model" type="text" class="form-control register-container__input" id="model" required>
                  </div>

				  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter Man Serial No.:</label>
                  <input name="mserial" type="text" class="form-control register-container__input" id="ram" required>
                  </div>
                 
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter Govt Serial No.:</label>
                  <input name="gserial" type="text" class="form-control register-container__input" id="rom" required>

                  </div>

                  </div>


                  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Choose Scanning Mode:</label>
				  <select class="form-control search-container__input" id="type" name="type" required>
					<option value=""> Select scanning mode </option>
					<option value="Flatbed"> Flatbed</option>
                    <option value="ADF">ADF</option>

                    </select>

				</div>

                  </div>
				  <div class="form-group col-md-8">
                    <label for="type" class="search-container__label">SELECT CURRENT STATUS</label>
                    <select class="form-control search-container__input" id="type" name="type" required>
					<option value=""> Select current status</option>
					<option value="functional"> Functional</option>
                    <option value="non-functional">Non-Functional</option>
                    


                    </select>
                  </div>
                 
				 

          <div class="mb-3">
            <label for="message-text" class="col-form-label">Other Specs:</label>
            <textarea name="specs" class="form-control" id="specs"></textarea>
          </div>
		  <button type="submit" name="submit" class="btn btn-primary">Add Inventory</button>
       	  
		

</form>
<!---------------------------------------------------------------3-----end Scanner form-------------------------------------------------------------------->



<!------------------------------4---Switch form------------------------------------------------------->

<form name="fifthform" id="form5" action="" method="POST"> 
<label><h4>Add Switch</h4></label><br>



				  <div class="form-group col-md-12">
                  
                  <label for="memory" class="register-container__label">Enter Model/Make:</label>
                  <input name="model" type="text" class="form-control register-container__input" id="model" required>
                  </div>

				  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="serial_No" class="register-container__label">Enter Man Serial No.:</label>
                  <input name="serial_No" type="text" class="form-control register-container__input" id="serial_No" required>
                  </div>
                 
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter Govt Serial No.:</label>
                  <input name="rom" type="text" class="form-control register-container__input" id="rom" required>

                  </div>

                  </div>


                  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="port" class="register-container__label">Enter Number Port:</label>
				  <input name="port" type="text" class="form-control register-container__input" id="port" required>

				</div>
                 
                  <div class="col-md-6">
                  <label for="data_rate" class="register-container__label">Enter Data Rate:</label>
                  <input name="data_rate" type="text" class="form-control register-container__input" id="data_rate" required>

                  </div>

                  </div>
				  <div class="form-group col-md-8">
                    <label for="type" class="search-container__label">SELECT CURRENT STATUS</label>
                    <select class="form-control search-container__input" id="type" name="type" required>
					<option value=""> Select current status</option>
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
<!--------------------5---end Switch form----------------------------------->


<!---------------------------6------Monitor form------------------------------------------------------->

<form name="sixthform" id="form6" action="" method="POST">
<label><h4>Add Monitor</h4></label><br>



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
                  <label for="G_NO" class="register-container__label">Enter Govt Serial No.:</label>
                  <input name="G_NO" type="text" class="form-control register-container__input" id="G_NO" required>

                  </div>

                  </div>


                  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="screen_size" class="register-container__label">Enter Screen Inches:</label>
				  <input name="screen_size" type="text" class="form-control register-container__input" id="screen_size" required>


				</div>
                 
                 

                  </div>
				  <div class="form-group col-md-8">
                    <label for="type" class="search-container__label">SELECT CURRENT STATUS</label>
                    <select class="form-control search-container__input" id="type" name="type" required>
					<option value=""> Select current status</option>
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
<!-------------------6----end Monitor form----------------------------------->


<!--------------------------7-------Tablet form------------------------------------------------------->

<form name="seventhform" id="form7" action="" method="POST">
<label><h4>Add Tablet</h4></label><br>



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
					<option value=""> Select current status</option>
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
<!-------------------7----end Tablet form----------------------------------->



<!-----------------------------8----Router form------------------------------------------------------->

<form name="Eighthform" id="form8" action="" method="POST">
<label><h4>Add Router</h4></label><br>



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
                  <label for="memory" class="register-container__label">Choose Scanning Mode:</label>
	             <input name="rom" type="text" class="form-control register-container__input" id="rom" required>


				</div>
                 
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Enter ROM:</label>
                  <input name="rom" type="text" class="form-control register-container__input" id="rom" required>

                  </div>

                  </div>
				  <div class="form-group col-md-8">
                    <label for="type" class="search-container__label">SELECT CURRENT STATUS</label>
                    <select class="form-control search-container__input" id="type" name="type" required>
					<option value=""> Select current status</option>
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
<!-----------------8------end Router form----------------------------------->


<!-----------------------9---------Server form------------------------------------------------------->

<form name="ninethform" id="form9" action="" method="POST">
<label><h4>Add Server</h4></label><br>

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
                  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="OS" class="search-container__label">SELECT CURRENT OPERATING SYSTEM</label>
                  <input name="operating_system" type="text" class="form-control register-container__input" id="operating_system" required>

                  </div> 
                  <div class="col-md-6">
                    <label for="type" class="search-container__label">SELECT CURRENT STATUS</label>
                    <select class="form-control search-container__input" id="type" name="type" required>
					<option value=""> Select current status</option>
					<option value="functional"> Functional</option>
                    <option value="non-functional">Non-Functional</option>
                    


                    </select>
                  </div>
                 </div>
                 
				 

          <div class="mb-3">
            <label for="message-text" class="col-form-label">Other Specs:</label>
            <textarea name="specs" class="form-control" id="specs"></textarea>
          </div>
		  <button type="button" name="submit" class="btn btn-primary">Add Inventory</button>

</form>
<!------------------9-----end Server form----------------------------------->





<!--------------------------3------Printer form------------------------------------------------------->

<form name="forthform" id="form4" action="" method="POST"> 
<label><h4>Add Printer</h4></label><br>



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
                  <label for="Tray" class="register-container__label">Enter Paper Tray Capacity:</label>
				  <input name="Tray" type="text" class="form-control register-container__input" id="Tray" required>
				</div>
                 


				<div class="col-md-6">
                  <label for="Cartridge" class="register-container__label">Enter Cartridge Capacity:</label>
				  <input name="Cartridge" type="text" class="form-control register-container__input" id="Cartridge" required>
				</div>
                 
                 
			 </div>


				  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="printer_type" class="register-container__label">Printer Type:</label>
				  <select class="form-control search-container__input" id="printer_type" name="printer_type" required>
					<option > Select Printer Type </option>
					<option value="Inkjet">  Inkjet Printer</option>
                    <option value="Laserjet">LaserJet Printer</option>
                  </select>

				</div>
                 
                  <div class="col-md-6">
				  <label for="mode" class="register-container__label">Ink Type:</label>
				  <select class="form-control search-container__input" id="type" name="type" required>
					<option value=""> Select Ink Type </option>
					<option value="Monochrome"> Monochrome</option>
                    <option value="Color"> Color</option>
                  </select>
                  </div>

              </div>  

			  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="mode" class="register-container__label">Printer Only/All-in-one:</label>
				  <select class="form-control search-container__input" id="type" name="type" required>
					<option value=""> Select Printer Only/All-in-one </option>
					<option value="printer only"> Printer Only</option>
                    <option value="all-in-one">All-in-one</option>
                  </select>

				</div>
                 
                  <div class="col-md-6">
                  <div class="col-md-6">
                  <label for="memory" class="register-container__label">Select Connection Interface:</label>
								<div class="multipleSelection">
										<div class="selectBox" 
											onclick="showCheckboxes()">
											<select>
												<option>Select options</option>
											</select>
											<div class="overSelect"></div>
										</div>
						
									<div id="checkBoxes">
										<label for="first">
											<input type="checkbox" id="first" />
											LAN network Capability
										</label>
										
										<label for="second">
											<input type="checkbox" id="second" />
											Standard USB Cable
										</label>
										<label for="third">
											<input type="checkbox" id="third" />
											Wi-Fi Capability

										</label>
										<label for="fourth">
											<input type="checkbox" id="fourth" />
											Bluetooth Capability
											
										</label>
										
										<label for="fifth">
											<input type="checkbox" id="fifth" />
											NFC (Near Field Communication) Printing 
										</label>

										<label for="sixth">
											<input type="checkbox" id="sixth" />
											Cloud Printing Capability
										</label>
									</div>
								</div>
                  </div>
                  </div>

              </div> 

				  <div class="form-group row">
                  <div class="col-md-6 mb-3">
                  <<label for="message-text" class="col-form-label">Other Specs:</label>
            <textarea name="specs" class="form-control" id="specs"></textarea>
                  </div> 
                  <div class="col-md-6">
					  
                    <label for="type" class="search-container__label">SELECT CURRENT STATUS</label>
                    <select class="form-control search-container__input" id="type" name="type" required>
					<option value=""> Select current status</option>
					<option value="functional"> Functional</option>
                    <option value="non-functional">Non-Functional</option>
                    


                    </select>
                  </div>
                 </div>
				 

          <
		  <button type="button" name="submit" class="btn btn-primary">Add Inventory</button>
		

</form>
<!---------------------------------------------------------------3-----end Printer form-------------------------------------------------------------------->













                        </div>
					</div>
				</div>
			
			</div>
		
	<!-- js -->
	<script src="vendors/scripts/multiselect.min.js"></script>

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

<script> 

        var show = true;
  
        function showCheckboxes() {
            var checkboxes = 
                document.getElementById("checkBoxes");

				
  
            if (show) {
                checkboxes.style.display = "block";
                show = false;
            } else {
                checkboxes.style.display = "none";
                show = true;
            }
        }
    </script>

</body>
</html>