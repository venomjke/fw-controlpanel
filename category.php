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
			.show-grid div[class*="span"]{
				background-color: #EEE;
				text-align: center;
				-webkit-border-radius: 3px;
				-moz-border-radius: 3px;
				border-radius: 3px;
				min-height: 40px;
				line-height: 40px;
			}
		</style>
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
				  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				  </a>
				  <a class="brand" href="#">Проект-x</a>
				  <div class="nav-collapse collapse">
				    <p class="navbar-text pull-right">
				      Авторизован как: <a href="#" class="navbar-link"> Администратор </a>
				      <a class="btn btn-small" style="margin-top:0px;"> Выйти </a>
				    </p>
				    <ul class="nav">
				      <li class="active"><a href="#">Каталог</a></li>
				      <li><a href="#about">Заказы</a></li>
				      <li><a href="#contact">Новости</a></li>
				      <li><a href="#contact">Акции</a></li>
				      <li><a href="#contact">Вакансии</a></li>
				      <li><a href="#contact">Страницы</a></li>
				    </ul>
				  </div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
		        <div class="span3">
		        	<div class="well">
		        		<ul class="nav">
			          		<li class="active"> <a href="#">Пункт 1.</a> 
			          			<ul>
			          				<li> <a href="#">Пункт 1.1 </a> </li>
			          				<li> <a href="#">Пункт 1.2 </a>
			          					<ul>
					          				<li> <a href="#"> Пункт 1.1.1 </a> </li>
					          				<li> <a href="#"> Пункт 1.1.2 </a> </li>
					          			</ul>
			          				 </li>
			          			</ul>
			          		</li>
			          		<li> <a href="#">Пункт 2. </a> </li>
			          		<li> <a href="#">Пункт 3.</a> </li>
			          	</ul>
		            </div>
		        </div><!--/span-->
		        <div class="span9">
		        	<div class="well">
			        	<div class="container-fluid">
			        		<form class="form-horizontal">
			        			<h3>Пункт 1.</h3>
								<div class="content">

									<div class="inner-content well">
									  	<form>
									  		<table class="resource">
									  			<tr>
									  				<td>
											  			<div>
												  			<label for="inputTitle"> Заголовок </label>
												  			<div>
													  			<input class="input-xlarge" id="inputTitle" type="text" value="Кухня"/>
											  				</div>
											  			</div>
											  			<div>
												  			<label for="inputAnnotation"> Аннотация </label>
												  			<div>
													  			<input type="text"  class="input-xlarge" value="Кухня" id="inputAnnotation"/>
											  				</div>
											  			</div>
											  												  			<div>
											  				<label for="inputPublic"> Опубликовать </label>
											  					<input type="checkbox" id="inputPublic" value="1" />
											  			</div>
												  	</td>
												  	<td>
												  		<div>
									  						<img class="img-polaroid"  src="images/noimage.png"/>
									  					</div>
									  					<input type="file" style="width:200px;"/>
												  	</td>
										    	</tr>
										    	<tr>
										    		<td colspan="2">
											  			<div>
											  				<div>
											  					<label for="inputDescription"> Содержимое </label>
											  					<div>
													  				<textarea style="width:100%" rows="10"></textarea>
													  			</div>
													  		</div>
											  			</div>
													  </td> 
												</tr>
												<tr>
													<td colspan="2">
														<button class="btn btn-primary" type="submit"> Сохранить </button>
													</td>
												</tr>
											</table>
										</form>
									</div>
								</div>
							</form>
				        </div>
				     </div>
		        </div>
			</div>
			<div class="row">
				<div class="span12">
					<footer>
				        <p class="well">&copy; Company 2012</p>
				      </footer>
			  </div>
			</div>
		</div>
		  
	</body>
</html>