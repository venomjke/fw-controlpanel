<!DOCTYPE>
<html lang="ru">
	<head>
		<meta charset="utf-8"/>

		<title> Test bootstrap </title>
		
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet" />
		<script src="js/jquery-1.8.1.min.js"> </script>
		<script src="js/bootstrap.min.js"> </script>

		<style type="text/css">
			body{
				padding-top:60px;
			}

			.login input[type="text"],.login input[type="password"]{
				width:328px;
				height:35px;
			}
			.login legend{
				text-align:center;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
			  <div class="span12">
				<div class="row">
				    <div class="span4 offset4">
				      <div class="well">
				        
				        <form action="" method="post" class="login">
					   			<legend>Вход</legend>
				                 
				            <input class="span3 input-xlarge" placeholder="Username" type="text" name="username">
				            <input class="span3 input-xlarge" placeholder="Password" type="password" name="password"> 
				            <label class="checkbox">
				                <input type="checkbox" name="rememberme" value="1"> Запомнить меня
				            </label>
					  
						  <input class="loginLoginValue" type="hidden" name="service" value="login">
						  <input class="returnUrl" type="hidden" name="returnUrl" value="/index.php?id=524">
		            	  <button class="btn-info btn btn-block" name="Login" type="submit">Вход</button>      
				        </form>    
				      </div>
				    </div>
				</div>    
	          </div>
			</div>
		</div>
	</body>
</html>