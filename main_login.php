<!DOCTYPE html>
<link rel="stylesheet" href= "css/bootstrap.min.css">
<link rel="stylesheet" href="rotcc.css">
<html>
    <body>
        
    		<div class="panel panel-default">
			  	<div class="panel-heading"><br><br>
			    	<h2 class="panel-title">Admin Login</h2><br><br>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="checklogin.php">
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
        </body>
</html>
    