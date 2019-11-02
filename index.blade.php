<!DOCTYPE html>
<html>
<head>
  <title>Pratical Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
<style>
	 .container{
                  width:350px;
                  height:250px;
                  text-align:center;
                  margin-top:180px;
                  font-size:18px;

	           }
	 .header{
             color:white;
             background-color:green;
	       }
	      h6{
	      	  font-size:14px;
	      }
</style>
</head>
<body>
<div class="container">
	<p id="alert" style="color:red;"></p>
	 <div class="card border-light btn-rounded shadow mb-5">
	 <div class="text-white btn-success rounded-top">
	 <h6 style="margin-top:15px;margin-bottom:30px; font-size:24px; border-style:none;">Sign in</h6>
	 </div><br><br>
	 <center>
	 <input type="text" placeholder="Username" style=" border-radius:20px; text-align:center; background-color:#F0F3F3 ; border-style:none; margin-bottom:15px; height:40px; width:70%;" name="name">
	 </center>
	 <center>
	 	<input type="password" placeholder="Password" style="border-radius:20px; text-align:center; background-color:#F0F3F3; border-style:none; height:40px;  width:70%;" name="password">
	 </center>
	 <a href="#" style="font-size:16px;">Forget Username/Password?</a><br>
	 <center>
	 <input type="submit" value="SIGN IN" class="btn btn-success btn-rounded text-light " style="border-radius:20px; width:70%; font-size:16px; border-style:none;" onclick="myFunction()" >
	</center><br><br>
	 <a href="#">Don't have account?</a>
	 <center><h6>SIGN UP NOW</h6></center>
	 </div>
	
</div>
<script>
function myFunction() {
	if($name==name && $password==password)
	{ 
		document.getElementById("alert").innerHTML = "Success!!";
	}
	else{
	document.getElementById("alert").innerHTML = "Please Fill Again";
    }
}
 
</script>
</body>
</html>