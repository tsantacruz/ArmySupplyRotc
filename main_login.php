<!DOCTYPE html>
<link rel="stylesheet" href= "css/bootstrap.min.css">
<link rel="stylesheet" href="rotcc.css">
<html>
    <body>
 <div id= "mydiv" name="mydiv" class="inline">
     <ul>
  <li><a class="active" href="#home">Admin Login</a></li>
  <li><a href=request_form.php>Submit Request</a></li>
  <li><a href=rotc.php>Home</a></li>

</ul>
     </div> 
<div style="float: auto; style="margin-top: 100px;margin-left:200px;""><IMG SRC="university-logo-desktop.png"></div>

    		<div class="panel panel-default" style="margin-left:200px;">
			  	<div class="panel-heading"><br>
			    	<h2 class="panel-title">Admin Login</h2>
			 	</div>
			  	<div class="panel-body">
			    	<form  method="post" action="checklogin.php">
                    <fieldset >
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Username" name="myusername" id="myusername"type="text"><br>
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="mypassword" type="password" value="" id="mypassword"><br>
                        </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login" style="width:200px; margin:auto;"><br><br>
			    	</fieldset>
			      	</form>
                    <form method="post" action="rotc.php">
        <button type="submit" class="btn btn-lg btn-success btn-block"  style="width:110px; margin:auto;">Home</button>
    </form>
			    </div>
    </div>
			</div>
    </body>
</html>
    