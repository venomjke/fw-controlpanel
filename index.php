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
				      <li class="active"><a href="#">Каталог</a></li>
				      <li><a href="#about">Заказы</a></li>
				      <li><a href="news.php">Новости</a></li>
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
			        			<style type="text/css">

			        			</style>
			        			<script type="text/javascript">
			        				$(function(){
			        					$('#toggleCategoryDescription').data('toggle',0);
			        					$('#toggleCategoryDescription').click(function(){
			        						$('#categoryDescription').slideToggle();
			        						if($(this).data('toggle') == 0){
			        							$(this).data('toggle',1);
			        							$(this).attr('class','icon-circle-arrow-up');
			        						}else{
			        							$(this).data('toggle',0);
			        							$(this).attr('class','icon-circle-arrow-down');
			        						}
			        					})
			        				})
			        			</script>	
			        			<h3> Пункт 1.</h3>
			        		    <div id="categoryToolbar" class="well btn-toolbar">
			        				<div class="btn-group">
									  <a class="btn btn-primary" href="product.php"><i class="icon-plus icon-white"></i> Добавить товар</a>
									</div>
									<div class="btn-group">
									  <a class="btn" href="category.php"><i class="icon-plus"></i> Добавить категорию</a>
									</div>
									<div class="btn-group">
									  <a class="btn" href="category.php"><i class="icon-pencil"></i> Изменить категорию</a>
									</div>
								</div>
								<hr/>	
								<div class="content">
									<div class="well">
										<form class="form-inline">
										  Название содержит <input type="text" class="input-large" placeholder="Кухня форко">
										  Цена от:<input type="text" class="input-small" placeholder="1000">
										  до: <input type="text"  class="input-small" placeholder="5000" >
										  <button type="submit" class="btn">Отправить</button>
										</form>
									</div>

									<div class="inner-content well">
										<table class="products" class="table">
											<thead>
													<tr>
													<td colspan="5">
														<div class="pagination">
														  <ul>
														    <li><a href="#">&laquo;</a></li>
														    <li><a href="#">1</a></li>
														    <li><a href="#">2</a></li>
														    <li><a href="#">3</a></li>
														    <li><a href="#">4</a></li>
														    <li><a href="#">&raquo;</a></li>
														  </ul>
														</div>
													</td>
												</tr>
												<tr>
													<th> Номер </th>
													<th> Изображение </th>
													<th> Заголовок </th>
													<th> Цена </th>
													<th></th>
												</tr>
												<tr>
											</thead>
											<tfoot>
												<tr>
													<td colspan="5">
														<div class="pagination">
														  <ul>
														    <li><a href="#">&laquo;</a></li>
														    <li><a href="#">1</a></li>
														    <li><a href="#">2</a></li>
														    <li><a href="#">3</a></li>
														    <li><a href="#">4</a></li>
														    <li><a href="#">&raquo;</a></li>
														  </ul>
														</div>
													</td>
												</tr>
											</tfoot>
											<?php for($i=0; $i<10; ++$i): ?>
											<tr>
												<td class="productNumber"> <?php echo $i; ?> </td>
												<td  class="productImg"><img src="images/noimage.png" class="img-polaroid" alt=""></td>
												<td class="productTitle">Кухня №21</td>
												<td class="productPrice"> 5 600 </td>
												<td class="productBtns">
													<form action="index.php?id=500&amp;edit=56" method="post" class="np_button_form">
														<input type="hidden" name="np_existing" value="true">
														<input type="hidden" name="np_doc_id" value="56">
														<a href="product.php" class="btn btn-primary">Изменить</a>
														<a href="#" class="btn btn-danger">Удалить</a>
														<!--<input type="submit" class="np_edit_this_button" name="submit" value="Редактировать">-->
														<!--<input type="button" class="pic_edit_this_button" value="Редактировать изображения" onclick="window.location = 'index.php?id=502&amp;edit=56' ">-->
													</form>
												</td>
											</tr>
											<?php endfor; ?>
										</table>
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