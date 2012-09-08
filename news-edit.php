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
				      <li ><a href="index.php">Каталог</a></li>
				      <li><a href="#about">Заказы</a></li>
				      <li class="active"><a href="news.php">Новости</a></li>
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
		        <div class="span12">
		        	<div class="well">
			        	<div class="container-fluid">
			        		<form class="form-horizontal">
			        			<h3> Кухня кухня кухня кухня № 24</h3>
								<div class="content">

									<div class="inner-content well">
										<form>
									  		<table class="resource">
									  			<tr>
									  				<td>
											  			<div>
												  			<label for="inputTitle"> Заголовок </label>
												  			<div>
													  			<input class="input-xxlarge" id="inputTitle" type="text" value="Кухня"/>
											  				</div>
											  			</div>
											  			<div>
												  			<label for="inputAnnotation"> Аннотация </label>
												  			<div>
													  			<input type="text"  class="input-xxlarge" value="Кухня" id="inputAnnotation"/>
											  				</div>
											  			</div>
											  					<div >
											  				<label for="inputPublic"> Опубликовать </label>
											  					<input type="checkbox" id="inputPublic" value="1" />
											  			</div>
												  	</td>
										    	</tr>
										    	<tr>
										    		<td>
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
													<td>
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