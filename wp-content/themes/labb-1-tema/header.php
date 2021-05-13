
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/font-awesome.css' ?>">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style.css'?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/header.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/footer.css' ?>">

	<script src="js/jquery.js"></script>
	<title>labb-1-niklas</title>
</head>
<body >
<?php wp_head(); ?>
	<div id="wrap">
		
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="index.html">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
							<div>
								<label class="screen-reader-text">Sök efter:</label>
								<input type="text" />
								<input type="submit" value="Sök" />
							</div>
						</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<?php wp_nav_menu( array( 'theme_location' => 'meny-header' ) ); ?>
					</div>
				</div>
			</div>
		</nav>