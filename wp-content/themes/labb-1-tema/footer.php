<?php wp_footer(); ?>
<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<?php dynamic_sidebar('footerleft');?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<?php dynamic_sidebar('footercenter');?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<div class="col-xs-12">
							<?php dynamic_sidebar('footerright');?>
						</div>
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<?php dynamic_sidebar('footerbottom');?>
					</div>
				</div>
			</div>
		</footer>

	</div>
</body>
</html>