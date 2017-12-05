<!-- head -->
	<?php require_once "head.php"; ?>
<!-- head -->	

<body>

<!-- nav header -->
		<?php require_once "nav.php"; ?>
<!-- nav header -->
<!-- banner1 -->
	<div class="banner1">
		<div class="container">
			<div class="banner-info more order_online wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
				<a class="hvr-radial-in" data-toggle="modal" data-target="#myModal1" href="#">Заказать</a>
			</div>
		</div>
	</div>				
<!-- end banner1 -->	
	<div class="container">
		<div class="event-grids"> 
		<?php require_once "processorder.php"; ?>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<table border="1">
				<tr><td><p><b>&nbsp;Материал <strong>шаржа</strong> &nbsp;</b></p></td><td><p><b>&nbsp;Формат шаржа &nbsp;</b></p></td><td><p><b>&nbsp;Количество человек &nbsp;</b></p></td></tr>
				<td>     
					<p><input name="mater" type="radio" value="0">Карандаш Ч/Б</p>
					<p><input name="mater" type="radio" value="500">Акварель цветной</p>
					<p><input name="mater" type="radio" value="700">Гуашь цветной</p>
				</td>
				<td>    
					<p><input name="format" type="radio" value="200">А4</p>
					<p><input name="format" type="radio" value="500">А3</p>
					<p><input name="format" type="radio" value="1500">А2</p>
					<p><input name="format" type="radio" value="2400">А1</p> 
				</td>					
				<td>     
					<p><input name="num" type="radio" value="500">1</p>
					<p><input name="num" type="radio" value="1000">2</p>
					<p><input name="num" type="radio" value="1500">3</p>
					<p><input name="num" type="radio" value="2000">4</p>   
				</td>
				<tr>
					<th colspan="3">Стоимость шаржа&nbsp;<?= $totale. 'руб.' ?></th>
				</tr>	
				<tr>
					<td colspan="3" align="center"><button value="надпись">Расчитать</button></td>
				</tr>
				
				</table>
			</form>			
		</div>
	</div>
<!-- //banner-bottom -->



<!-- //newsletter-bottom -->
<!-- footer -->
<div class="footer">
	<?php require_once "footer.php";?>
</div>	
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

<!-- modal window order -->
	<?php require_once "order.php";?>
<!-- END modal window order -->
</body>
</html>
