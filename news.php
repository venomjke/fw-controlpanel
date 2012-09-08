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
				      <li ><a href="#about">Заказы</a></li>
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
			        		    <div id="categoryToolbar" class="well btn-toolbar">
			        				<div class="btn-group">
									  <a class="btn btn-primary" href="#"><i class="icon-plus icon-white"></i> Добавить новость</a>
									</div>
								</div>
								<hr/>	
								<div class="content">
									<div class="well">
										<form class="form-inline">
										  Заголовок содержит <input type="text" class="input-large" placeholder="Кухня форко">
  										  Содержание содержит <input type="text" class="input-xlarge" placeholder="Кухня форко">

										  <button type="submit" class="btn pull-right">Отправить</button>
										</form>
									</div>

									<div class="inner-content well">
										<table class="products" class="table">
											<thead>
													<tr>
													<td colspan="4">
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
													<th> Заголовок </th>
													<th> Содержание </th>
													<th></th>
												</tr>
												<tr>
											</thead>
											<tfoot>
												<tr>
													<td colspan="4">
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
												<td class="productTitle">Кухня №21</td>
												<td class="item-content"> Новость Новость Новость Новость Новость Новость Новость Новость Новость Новость Новость Новость Новость Новость НовостьНовость...</td>
												<td class="productBtns">
													<form action="index.php?id=500&amp;edit=56" method="post" class="np_button_form">
														<input type="hidden" name="np_existing" value="true">
														<input type="hidden" name="np_doc_id" value="56">
														<a href="news-edit.php" class="btn btn-primary">Изменить</a>
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