<?php include("./mvc/views/partials/theme.php"); ?> 
<div class="container-fluid bg2" style="height: 100vh;padding: 100px">

		<div class="col-sm-12 col-md-4 rounded shadow-sm bg3">
			<p class="cl mt-4 ml-3" style="font-weight: bold;font-size: 1.3rem;">SIGNIN ACCOUNT</p>
			<div class="col-12 pb-3 ">
				<div class="form-group">
					<label class="cl">Username</label>
					<input id="username" type="text" name="username" class="form-control" placeholder="Username">
				</div>
				<div class="form-group">
					<label class="cl">Password</label>
					<input id="password" type="password" name="password" class="form-control" placeholder="Password">
				</div>      
			</div>
			<p id="check-login-status" class="text-center text-danger" style="font-size: 90%;display: none;">Wrong username or password</p>
			<div onclick="Login()" type="submit" class="btn bg1 cl btn-block mt-1 mb-5 " style="width: 80%;margin:0 auto;">Submit</div>
		</div>
	</div>
</div>    
<script type="text/javascript">
	
	function Login(){
		
		username = $("#username").val();
		password = $("#password").val();
		var data="username=" + username +"&password="+password;
		$.post("../Account/CheckLogin/",{username:username,password:password},function(data){	
			console.log(data);
			if(data ==1){
				window.location.href = "../Home";
			}else{
				$("#check-login-status").show();
			}

		})
		
	}
</script>