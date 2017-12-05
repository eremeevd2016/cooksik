<?php
	  require_once ('pagination2.php'); 
      require_once ('connectvars.php');//Подключение переменных
?>
<!-- head -->
	<?php require_once ('head.php'); ?>
<!-- head -->	

<body>

<!-- nav header -->
		<?php require_once ('nav.php'); ?>
<!-- nav header -->

<!-- banner1 -->
	<div class="banner1">
		<div class="container">
			<div class="banner-info more order_online wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
				<a class="hvr-radial-in" data-toggle="modal" data-target="#myModal1" href="#">Заказать</a>
			</div>
		</div>
	</div>			
<!-- //banner1 -->

<div class="container">				
			<?php  while($row = mysqli_fetch_assoc($sql2)){	?>  
				<div class="gallery-grids">			
			<!--------------------gallery-grids---------------------------------------->			
						<div class="col-sm-4 gallery-grids-left wow bounceInLeft">
							<div class="gallery-grid">
							<a href="single.php" class="b-link-stripe b-animate-go  swipebox">								 
									<div class="port-7 effect-3">
										<div class="image-box">														
											<?=  '<img src="' . MM_UPLOADPATH . $row['screenshot'] . '">'; ?>
										</div>
										<div class="gal-desc">
											<h4><?=  $row['head']; ?></h4>
								<a href="#" class="button2 hvr-sweep-to-top"><?= $row['price'];?></a>
											<div class="more">
												<a href=<?= $row['href']; ?> class="hvr-float-shadow">далее</a>
											</div>
											<div class="order">
												<a class="hvr-shutter-out-horizontal" data-toggle="modal" data-target="#myModal1" href="#">Заказать</a>
											</div>
										</div>
									</div>							
							</div>
						</div>
				</div>
				<!--//gallery-grids-->
		<!--------------------------pagination--------------------------------------->
				<?php } ; ?><!--end while------>	
					<div class="container">
						<ul class="pagination active">							
							<li><?php echo $centerPages; ?></li>								
						</ul>
					</div> 
					
		<!--------------------------------------------------------------------------->			
					<!-- single -->

		<h1 class="animated fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">Nulla Quis lorum nisl tempus convallis quis ac lactus</h1>
		<div class="single-left wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
			<p>Published on <span>January 10,2015</span></p>
			<img src="images/8.jpg" alt=" " class="img-responsive" />
		</div>
	
		<div class="single-right wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
			<h2>Curabitur aliquet quam id dui posuere blandit</h2>
			<p><span>There are many variations of passages of Lorem Ipsum available,
			but the majority have suffered alteration in some form, 
			by injected humour, or randomised words which don't look even slightly believable.
			If you are going to use a passage.
			Donec rutrum congue leo eget malesuada.Curabitur non nulla sit amet
			nisl tempus convallis quis ac lactus.Sed porttitor lactus nibh.Proin
			eget tortor risus.Nulla porttitor accumsan tincidunt.Nulla
			porttitoraccumsan tincidunt.
			Curabitur aliquet quam id dui posuere blandit.</span>
			<span>There are many variations of passages of Lorem Ipsum available,
			but the majority have suffered alteration in some form, by injected humour,
			or randomised words which don't look even slightly believable. If you are going
			to use a passage.</span></p>
		</div>
		<div class="clearfix"> </div>
		<p class="tortor wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">There are many variations of passages of Lorem Ipsum available,
			but the majority have suffered alteration in some form, by injected humour,
			or randomised words which don't look even slightly believable. If you are going
			to use a passage.Nulla Quis lorum nisl tempus convallis quis ac lactus.Sed porttitorlactus nibh
			eget tortor risus.Nulla porttitorv много сайтоа.</p>
		
	
	
	
</div>
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