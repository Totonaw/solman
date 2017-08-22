
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Solman">
<meta name="description" content="administration page">

<title>Solman Login Administration</title>

<!-- js here -->

<!-- css here -->
<style>
body {
	background: slategray;
}

header {
	margin: auto;
	max-width: 400px;
	text-align: center;
	font-size: 20px;
	margin-top: 2%;
	color: cornsilk;
	margin-bottom: 10px;
}

.centered{
    margin: auto;
    max-width: 400px;
}

.main-form{
    border: honeydew 2px solid;
    background: aliceblue;
    padding: 10px;
}

.login-label{
	display: block;
    font-size: 16px;
    margin-bottom: 5px;
}

.login-input{
	width: 100%;
    padding: 5px 0px 5px 0px;
    font-size: 16px;
    margin-bottom: 10px;
    border: none;
}

.login-btn{
    display: block;
    width: 100%;
    padding: 5px;
    margin-bottom: 5px;
    border: none;
    background: lightblue;
    font-size: 16px;
}

</style>
</head>
<body>
	<header class=""> Solman Administration </header>

	<section>
		<div class="centered">
			<form method="POST">
				<div class="main-form">
					<label class="login-label">Email/Employee ID</label> 
					<input class="login-input" type="text" name="login" /> 
					<label class="login-label">Password</label> 
					<input class="login-input" type="password" name="password" /> 
					<input class="login-btn" type="submit" name="submit-btn" value="login" /> 
					<input type="hidden" name={{tokenKey}} value={{token}} /> 
					<a id="test">Forgot password</a> <a>Register here</a>
				</div>
			</form>
		</div>
	</section>

	<footer> </footer>
</body>

<script>
	window.onload = function(e){
		var test = document.getElementById('test');
		var host = window.location.origin;
		var path = window.location.pathname;
		
		test.addEventListener('click',function(e){
			var authPath = "/Solman/admin/login/auth"; 
			var http = new XMLHttpRequest();
			http.onreadystatechange = function() {
					if(this.readyState == 4){
					    var res = JSON.parse(this.responseText);
					 	console.log(res);
					}
			    };
			http.open("POST",host+authPath);
			http.setRequestHeader('HTTP_X_REQUESTED_WITH','XMLHttpRequest');
			http.send();
		})
	}
</script>

</html>