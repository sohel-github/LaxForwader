
	<div id="four-widget">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="services">
						<img class="img-responsive" src="http://www.laxforwarder.com/wp-content/uploads/2015/02/ocean.png">
						<a href="#">Ocen Freight</a>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="services">
						<img class="img-responsive" src="http://www.laxforwarder.com/wp-content/uploads/2015/02/goods.png">
						<a href="#">Wearhouse</a>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="services">
						<img class="img-responsive" src="http://www.laxforwarder.com/wp-content/uploads/2015/02/air.png">
						<a href="#">Air Freight</a>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="services">
						<img class="img-responsive" src="http://www.laxforwarder.com/wp-content/uploads/2015/02/tracking.png">
						<a href="#">Trucking</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div id="before_footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="widget-bottom">
						<img class="img-responsive clock" src="http://www.laxforwarder.com/wp-content/uploads/2015/02/cicon.png">
						<a href="#" class="link-btn">Schedule Consultation</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="widget-bottom">
						<a href="#" class="link-btn">Find us Online</a>
						<ul>
							<li><a href=""><img class="img-responsive" src="http://www.laxforwarder.com/wp-content/uploads/2015/02/facebook.png"></a></li>
							<li><a href=""><img class="img-responsive" src="http://www.laxforwarder.com/wp-content/uploads/2015/02/google-plus.png"></a></li>
							<li><a href=""><img class="img-responsive" src="http://www.laxforwarder.com/wp-content/uploads/2015/02/twitter.png"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="pull-left">
						<p><i class="glyphicon glyphicon-envelope"></i> rates@laxforwarder.com</p>
					</div>
					<div class="pull-right">
						<p><i class="glyphicon glyphicon-phone-alt"></i> 1-888-444-2301</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
  
  
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>
	<?php wp_footer(); ?>
	<script>
	$(document).ready(function(){
		
		$('#res_menu').click(function(){
			$('#navigation').slideToggle();
		});
		
		$(window).width().resize(function(){
			if($(window).width() > 768){
			$('#navigation').removeAttr('style');
			}
		});
	});
	</script>
</body>
</html>