<?php




   if(isset($_POST['secret']))
   {
       $email =  $_POST['email'];
       $pin =  $_POST['pin'];
       
   
   $sql=mysqli_query($conn,"SELECT * FROM  admin_users where email =='".$email."' && secret_pin =='".$pin."'");
   
    
   
    $results = mysqli_query($conn,$sql);
    $queryResults = mysqli_num_rows($results);
  

    //if there are records found
    if($queryResults > 0)
    {
        //getting the records
        while($row = mysqli_fetch_assoc($results))
        {

            $chckemail =$row['email'];
            $chckpin =$row['secret_pin'];
         


            if($pin ==  $chckpin && $chckemail == $email){


                

	//redirecting back to this url with a message
    echo '	<script>
    alert("secret Pin Confirmed")
    window.location.replace("../change_password.php?id='.$email.'");
    </script>';
    }else{


        //redirecting back to this url with a message
        echo '	<script>
        alert("email doesnt Exist or secret Pin Not Correct")
        window.location.replace("../login.php");
        </script>';

    }
        }
        
       
    }
   }





   
   ?>
   <!DOCTYPE html>
   <html>
   <head>
     <style>
    .clock {
      color:darkgray;
      border-style:none;
      width:40px;
      height:35px;
      font-size:60px;
    }
    
    td{
      border:2px solid darkgray  
    }
    table {
      border-collapse:collapse;
    }
  </style>
  <script>
    function next(next) {
      document.getElementById(next).focus();
    }
  </script>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


</head>
<body>



    
    <div class="container">   
           <div class="form-group col-md-6">
                    <label for="type" class="search-container__label">SELECT INVENTORY TYPE</label>
                    <select class="form-control search-container__input" id="type" name="type" required>
                     
                    <option value="Computer"> Computer</option>
                    <option value="Laptop">Laptop</option>
                    <option value="Printer">Printer</option>
                    <option value="Server">Server</option>
                    <option value="Scanner">Scanner</option>


                    </select>
                  </div>

        <!---------------------------------------------------login box-------------------------------------------------------------------------------------------------------->
 
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px">
                        
                        
                        
                        <a  href="#" onClick="$('#loginbox').hide(); $('#secretbox').show()">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                             
                        <form id="loginform" class="form-horizontal" role="form" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button id="btn-login"type="submit" name="submit" class="btn btn-success">Login 
                                      </button>
<!--                                       <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

                                   
-->

</div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                               <!--         <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
-->
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
<!---------------------------------------------------signup box-------------------------------------------------------------------------------------------------------->

        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Password">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="icode" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                        <span style="margin-left:8px;">or</span>  
                                    </div>
                                </div>
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                    </div>                                           
                                        
                                </div>
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 

<!---------------------------------------------------secretbox-------------------------------------------------------------------------------------------------------->


         <div id="secretbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Forgot Password</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#secretbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="scretform" method="post" action="includes/secret.inc.php" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div  class="form-group">
                                <label for="pin" class="col-md-3 control-label">SECRET PIN</label>
                                    <div class="col-md-9">
                                    <input type="password" class="form-control" name="pin" placeholder="pin">

                                    </div>
                                </div>
                                    

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-secret" type="submit" name="secret" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Confirm</button>
                              
                                    </div>
                                </div>
                                
                              
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
         
    </div>
  



?>
</body>
</html>