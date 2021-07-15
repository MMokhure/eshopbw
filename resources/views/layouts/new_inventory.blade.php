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

<label>Select Form</label>
<select id="select1" onchange="fun1()">
<option ></option>
<option value="1">Form 1</option>
<option value="2">Form 2</option>
</select>


<form  method="post"  name="firstform" id="form1" action="">
<label>Add computer</label><br>

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