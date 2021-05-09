
<!-- bloc-0 -->
<div class="bloc l-bloc" id="bloc-0">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col">
				<nav class="navbar navbar-light row navbar-expand-md" role="navigation">
					<img class="img-fluid img-style" src="<?php echo get_template_directory_uri(); ?>/img/Prime%20Logo.jpg" alt="Prime%20Logo" />
					<button id="nav-toggle" type="button" class="ml-auto ui-navbar-toggler navbar-toggler border-0 p-0" data-toggle="collapse" data-target=".navbar-31838" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button><?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 2, 'container' => 'div', 'container_class' => 'collapse navbar-collapse navbar-31838', 'container_id' => 'bs-example-navbar-collapse-1', 'menu_class' => 'site-navigation nav navbar-nav ml-auto', 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback', 'walker' => new WP_Bootstrap_Navwalker(), ) ); ?>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- bloc-0 END -->
