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
             margin-top:15px;
             margin-bottom:30px;
             font-size:24px;
             border-style:none;
	       }
	      h6{
	      	  font-size:14px;
	      }
	  #name{
              border-radius:20px;
              text-align:center;
              background-color:#F0F3F3;
              border-style:none;
              margin-bottom:15px;
              height:40px;
              width:70%;

	       } 
  #password{
              border-radius:20px;
              text-align:center;
              background-color:#F0F3F3;
              border-style:none;
              height:40px;
              width:70%;
	       }
	#submit{
              border-radius:20px;
              width:70%;
              font-size:16px;
              border-style:none;
	       }   
</style>
</head>
<body>
<div class="container">
    <p id="alert" style="color:red;"></p>
	<div class="card border-light btn-rounded shadow mb-5">
	 <div class="text-white btn-success rounded-top">
	    <h6 class="header">Sign in</h6>
	 </div><br><br>
	 <center>
	 	<p id="alert1" style="color:red;"></p>
	    <input type="text" placeholder="Username" id="name">
	 </center>
	 <center>
	 	<p id="alert2" style="color:red;"></p>
	 	<input type="password" placeholder="Password" id="password">
	 </center>
	 <a href="#" style="font-size:16px;">Forget Username/Password?</a><br>
	 <center>
	    <input type="submit" value="SIGN IN" class="btn btn-success btn-rounded text-light "  onclick="myFunction()" id="submit">
	 </center><br><br>
	 <a href="#">Don't have account?</a>
	 <center><h6>SIGN UP NOW</h6></center>
	</div>
	
</div>
</body>
<script>
function myFunction() {
	var name=document.getElementById("name").value;
	var password=document.getElementById("password").value;
	if(name=="admin" && password=="123")
	{ 
		document.getElementById("alert").innerHTML = "Success!!";
		// alert("Success");
	}
	else{
	document.getElementById("alert").innerHTML = "Please Fill Again";
    }
    if(name!="admin")
    {
      document.getElementById("alert1").innerHTML = "Wrong Name!";
    }
    if(password!="123")
    {
      document.getElementById("alert2").innerHTML = "Wrong Password";
    }
}
 
</script>
</html>