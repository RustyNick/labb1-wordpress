<?php wp_footer(); ?>
<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<h4>Kort om oss</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
						<p>Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis.</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4>Kontaktuppgifter</h4>
						<p>
							The Company<br />
							Gatgatan 1<br />
							123 45 Någonstans
						</p>
						<p>
							Tel: 0123456789<br />
							E-post: <a href="">info@thecompany.com</a>
						</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4>Social media</h4>
						<div class="col-xs-12">
						<?php wp_nav_menu( array( 'theme_location' => 'meny-footer' ) ); ?>
					</div>
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; Grupp X, 2016</p>
					</div>
				</div>
			</div>
		</footer>

	</div>
</body>
</html>