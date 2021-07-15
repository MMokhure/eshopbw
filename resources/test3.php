<!DOCTYPE html>
<html>
<head>
<title>Select Form</title>
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

</body>
<script type="text/javascript">
fun2();//to hide form elements after page has loaded completely
</script>
</html>