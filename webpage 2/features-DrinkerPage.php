<?php
$connect = mysqli_connect('rucs336group66.cmbbmvtvxryw.us-east-1.rds.amazonaws.com', 'yuyangchen0122', 'a123123q45', 'RUCS336Group66');
$query = '';
?>

<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
	<title>Oldstory – Whiskey Bar HTML</title>
	
	
	
	
	
	
	
	
	<link rel="stylesheet" type="text/css" media="all" href="js/vendor/mediaelement/mediaelementplayer.min.css">
	
	<link rel="stylesheet" type="text/css" media="all" href="css/fontello/css/fontello.min.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/core.animation.min.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/theme.shortcodes.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/plugin.instagram-widget.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/skin.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/responsive.css" />
	<link rel="stylesheet" type="text/css" media="all" href="js/vendor/swiper/swiper.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="js/vendor/prettyphoto/css/prettyPhoto.min.css">

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable(<?php echo $jsonTable; ?>);

        var options = {
          title: 'Top Drinkers who are Largest Spenders',
          legend: { position: 'none' },
        };

        var chart = new google.visualization.Histogram(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

</head>

<body class="page body_filled article_style_stretch scheme_original top_panel_above sidebar_show sidebar_right">
			
	<div class="body_wrap header_style_8">

		<div class="page_wrap">
			
			<div class="top_panel_fixed_wrap"></div>

			<header class="top_panel_wrap top_panel_style_8 scheme_original">
	<div class="top_panel_wrap_inner top_panel_inner_style_8 top_panel_position_above">
		<div class="top_panel_middle" >
			<div class="content_wrap">
				<div class="contact_info">
					<address class="contact_address icon-location">
						57 US Highway 1, New Brunswick,<br>NJ 08901-8554
					</address>
				</div>
				<div class="contact_logo">
					<div class="logo">
						<a href="index.php">
							<img src="images/logo.png" class="logo_main" alt="" width="132" height="54">
						<img src="images/logo.png" class="logo_fixed" alt="" width="132" height="54"></a>
					</div>
				</div>
				<div class="menu_pushy_wrap clearfix">
					<a href="#" class="menu_pushy_button">
						MENU
						<span class=" icon-menu"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</header>

<nav class="menu_pushy_nav_area pushy pushy-left scheme_dark">
	<div class="pushy_inner">
		<a href="#" class="close-pushy"></a>
		<div class="logo">
			<a href="index.php">
				<img src="images/logo.png" class="logo_side" alt="" width="132" height="54">
			</a>
		</div>
		<ul id="menu_pushy" class="menu_pushy_nav">
			<li class="menu-item menu-item-object-page ">
				<a href="index.php">Home</a>
			</li>
			<li class="menu-item current-menu-ancestor menu-item-has-children">
				<a href="#">Features</a>
				<ul class="sub-menu">
					<li class="menu-item menu-item-object-page ">
						<a href="features-BarPage.php">Bar Page</a>
					</li>
					<li class="menu-item menu-item-object-page ">
						<a href="features-DrinkerPage.php">Drinker Page</a>
					</li>
					<li class="menu-item ">
						<a href="features-BeerPage.php">Beer Page</a>
					</li>
					<li class="menu-item  menu-item-has-children">
						<a href="#">Gallery</a>
						<ul class="sub-menu">
							<li class="menu-item menu-item-object-page ">
								<a href="features-gallery-masonry.php">Masonry</a>
							</li>
							<li class="menu-item menu-item-object-page ">
								<a href="features-gallery-grid.php">Grid</a>
							</li>
							<li class="menu-item menu-item-object-page ">
								<a href="features-gallery-cobbles.php">Cobbles</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="menu-item menu-item-has-children ">
				<a href="#">About us</a>
				<ul class="sub-menu">
					<li class="menu-item menu-item-object-page ">
						<a href="about-us-about-us.php">About us</a>
					</li>
					<li class="menu-item ">
						<a href="about-us-bartender.php">Bartender&#8217;s Page</a>
					</li>
				</ul>
			</li>
			<li class="menu-item menu-item-has-children ">
				<a href="#">News</a>
				<ul class="sub-menu">
					<li class="menu-item ">
						<a href="news-post-formats.php">Post Formats</a>
					</li>
					<li class="menu-item ">
						<a href="news-classic.php">Classic Style</a>
					</li>
					<li class="menu-item menu-item-has-children ">
						<a href="#">Masonry Layout</a>
						<ul class="sub-menu">
							<li class="menu-item ">
								<a href="news-masonry-layout-2-columns.php">Masonry (2 columns)</a>
							</li>
							<li class="menu-item ">
								<a href="news-masonry-layout-3-columns.php">Masonry (3 columns)</a>
							</li>
						</ul>
					</li>
					<li class="menu-item menu-item-has-children ">
						<a href="#">Portfolio Layout</a>
						<ul class="sub-menu">
							<li class="menu-item ">
								<a href="news-portfolio-layout-2-columns.php">Portfolio (2 columns)</a>
							</li>
							<li class="menu-item ">
								<a href="news-portfolio-layout-3-columns.php">Portfolio (3 columns)</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="menu-item menu-item-object-page ">
				<a href="menu.php">Menu</a>
			</li>
			<li class="menu-item menu-item-has-children ">
				<a href="#">Store</a>
				<ul class="sub-menu">
					<li class="menu-item menu-item-object-page ">
						<a href="store-shop.php">Shop</a>
					</li>
					<li class="menu-item menu-item-object-page ">
						<a href="store-cart.php">Cart</a>
					</li>
					<li class="menu-item menu-item-object-page ">
						<a href="store-checkout.php">Checkout</a>
					</li>
				</ul>
			</li>
			<li class="menu-item menu-item-object-page ">
				<a href="contacts.php">Contacts</a>
			</li>
		</ul>
	</div>
</nav>

<!-- Site Overlay -->
<div class="site-overlay"></div>
<div class="header_mobile">
	<div class="content_wrap">
		<div class="menu_button icon-menu"></div>
		<div class="logo">
			<a href="index.php">
				<img src="images/logo.png" class="logo_main" alt="" width="132" height="54">
			</a>
		</div>
	</div>
	<div class="side_wrap">
		<div class="close">Close</div>
		<div class="panel_top">
			<nav class="menu_main_nav_area">
				<ul id="menu_main" class="menu_main_nav">
					<li class="menu-item menu-item-object-page ">
						<a href="index.php">Home</a>
					</li>
					<li class="menu-item menu-item-has-children current-menu-ancestor">
						<a href="#">Features</a>
						<ul class="sub-menu">
							<li class="menu-item menu-item-object-page ">
								<a href="features-BarPage.php">Bar Page</a>
							</li>
							<li class="menu-item menu-item-object-page ">
								<a href="features-DrinkerPage.php">Drinker Page</a>
							</li>
							<li class="menu-item current-menu-item">
								<a href="features-BeerPage.php">Beer Page</a>
							</li>
							<li class="menu-item menu-item-has-children ">
								<a href="#">Gallery</a>
								<ul class="sub-menu">
									<li class="menu-item menu-item-object-page ">
										<a href="features-gallery-masonry.php">Masonry</a>
									</li>
									<li class="menu-item menu-item-object-page ">
										<a href="features-gallery-grid.php">Grid</a>
									</li>
									<li class="menu-item menu-item-object-page ">
										<a href="features-gallery-cobbles.php">Cobbles</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="menu-item menu-item-has-children ">
						<a href="#">About us</a>
						<ul class="sub-menu">
							<li class="menu-item menu-item-object-page ">
								<a href="about-us-about-us.php">About us</a>
							</li>
							<li class="menu-item ">
								<a href="about-us-bartender.php">Bartender&#8217;s Page</a>
							</li>
						</ul>
					</li>
					<li class="menu-item menu-item-has-children ">
						<a href="#">News</a>
						<ul class="sub-menu">
							<li class="menu-item ">
								<a href="news-post-formats.php">Post Formats</a>
							</li>
							<li class="menu-item ">
								<a href="news-classic.php">Classic Style</a>
							</li>
							<li class="menu-item menu-item-has-children ">
								<a href="#">Masonry Layout</a>
								<ul class="sub-menu">
									<li class="menu-item ">
										<a href="news-masonry-layout-2-columns.php">Masonry (2 columns)</a>
									</li>
									<li class="menu-item ">
										<a href="news-masonry-layout-3-columns.php">Masonry (3 columns)</a>
									</li>
								</ul>
							</li>
							<li class="menu-item menu-item-has-children ">
								<a href="#">Portfolio Layout</a>
								<ul class="sub-menu">
									<li class="menu-item ">
										<a href="news-portfolio-layout-2-columns.php">Portfolio (2 columns)</a>
									</li>
									<li class="menu-item ">
										<a href="news-portfolio-layout-3-columns.php">Portfolio (3 columns)</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="menu-item menu-item-object-page ">
						<a href="menu.php">Menu</a>
					</li>
					<li class="menu-item menu-item-has-children ">
						<a href="#">Store</a>
						<ul class="sub-menu">
							<li class="menu-item menu-item-object-page ">
								<a href="store-shop.php">Shop</a>
							</li>
							<li class="menu-item menu-item-object-page ">
								<a href="store-cart.php">Cart</a>
							</li>
							<li class="menu-item menu-item-object-page ">
								<a href="store-checkout.php">Checkout</a>
							</li>
						</ul>
					</li>
					<li class="menu-item menu-item-object-page ">
						<a href="contacts.php">Contacts</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="panel_bottom"></div>
	</div>
	<div class="mask"></div>
</div>


	        <div class="top_panel_title top_panel_style_8 breadcrumbs_present scheme_original">
	<div class="top_panel_title_inner top_panel_inner_style_8 breadcrumbs_present_inner">
		<div class="content_wrap">
			<div class="breadcrumbs"><a class="breadcrumbs_item home" href="#">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Shortcodes</span>
			</div>
		</div>
	</div>
</div>

			<div class="page_content_wrap page_paddings_no">

				<div class="content_wrap">
					<div class="content">
						<article class="post_item post_item_single page">
							<div class="post_content">

								<section class="">
									<div class="container">
										<div class="sc_section" data-animation="animated fadeInUp normal">
											<div class="sc_section_inner">
												<h1 class="sc_title margin_top_tiny- margin_bottom_large">Accordion</h1>
												<div class="sc_accordion" data-active="0">
													<div class="sc_accordion_item odd first">

													</div>
												</div>
											</div>
										</div>
									</div>
								</section>

								<section class="">
									<div class="container">
										<div class="sc_section" data-animation="animated fadeInUp normal">
											<div class="sc_section_inner">
												<h1 class="sc_title margin_top_huge margin_bottom_large">Tabs</h1>
												<div id="sc_tab_2" class="sc_tabs sc_tabs_style_1 mw670" data-active="0">
													<ul class="sc_tabs_titles">
														<li class="sc_tabs_title first">
															<a href="#sc_tab_2_1" class="theme_button" id="sc_tab_2_1_tab">scotch & whiskey</a>
														</li>
														<li class="sc_tabs_title">
															<a href="#sc_tab_2_2" class="theme_button" id="sc_tab_2_2_tab">cocktails</a>
														</li>
														<li class="sc_tabs_title">
															<a href="#sc_tab_2_3" class="theme_button" id="sc_tab_2_3_tab">Longdrinks</a>
														</li>
														<li class="sc_tabs_title last">
															<a href="#sc_tab_2_4" class="theme_button" id="sc_tab_2_4_tab">Food</a>
														</li>
													</ul>
													<div id="sc_tab_2_1" class="sc_tabs_content odd first">
														<ul class="sc_list sc_list_style_menu">
															<li class="sc_list_item odd first">
																<div class="columns_wrap sc_columns">
																	<div class="column-4_7 sc_column_item odd first">
																		<h3 class="sc_title">Balantines</h3>
																		<h5 class="sc_title">200 ml</h5>
																		<div class="text_column mbn_ne">
																			<p>Includes dry vermouth and olive brine shaken with ice and served with an olive</p>
																		</div>
																	</div><div class="column-3_7 sc_column_item odd sc_ar">
																		<h2 class="sc_title">$40.00</h2>
																	</div>
																</div>
															</li>
															<li class="sc_list_item even">
																<div class="columns_wrap sc_columns">
																	<div class="column-4_7 sc_column_item odd first">
																		<h3 class="sc_title">Civas Regal</h3>
																		<h5 class="sc_title">200 ml</h5>
																		<div class="text_column mbn_ne">
																			<p>Includes dry vermouth and olive brine shaken with ice and served with an olive</p>
																		</div>
																	</div><div class="column-3_7 sc_column_item odd sc_ar">
																		<h2 class="sc_title">$40.00</h2>
																	</div>
																</div>
															</li>
															<li class="sc_list_item odd">
																<div class="columns_wrap sc_columns">
																	<div class="column-4_7 sc_column_item odd first">
																		<h3 class="sc_title">Balantines</h3>
																		<h5 class="sc_title">200 ml</h5>
																		<div class="text_column mbn_ne">
																			<p>Includes dry vermouth and olive brine shaken with ice and served with an olive</p>
																		</div>
																	</div><div class="column-3_7 sc_column_item odd sc_ar">
																		<h2 class="sc_title">$40.00</h2>
																	</div>
																</div>
															</li>
														</ul>
													</div>
													<div id="sc_tab_2_2" class="sc_tabs_content even">
														<ul class="sc_list sc_list_style_menu">
															<li class="sc_list_item odd first">
																<div class="columns_wrap sc_columns">
																	<div class="column-4_7 sc_column_item odd first">
																		<h3 class="sc_title">Balantines</h3>
																		<h5 class="sc_title">200 ml</h5>
																		<div class="text_column mbn_ne">
																			<p>Includes dry vermouth and olive brine shaken with ice and served with an olive</p>
																		</div>
																	</div><div class="column-3_7 sc_column_item odd sc_ar">
																		<h2 class="sc_title">$40.00</h2>
																	</div>
																</div>
															</li>
															<li class="sc_list_item even">
																<div class="columns_wrap sc_columns">
																	<div class="column-4_7 sc_column_item odd first">
																		<h3 class="sc_title">Civas Regal</h3>
																		<h5 class="sc_title">200 ml</h5>
																		<div class="text_column mbn_ne">
																			<p>Includes dry vermouth and olive brine shaken with ice and served with an olive</p>
																		</div>
																	</div><div class="column-3_7 sc_column_item odd sc_ar">
																		<h2 class="sc_title">$40.00</h2>
																	</div>
																</div>
															</li>
															<li class="sc_list_item odd">
																<div class="columns_wrap sc_columns">
																	<div class="column-4_7 sc_column_item odd first">
																		<h3 class="sc_title">Balantines</h3>
																		<h5 class="sc_title">200 ml</h5>
																		<div class="text_column mbn_ne">
																			<p>Includes dry vermouth and olive brine shaken with ice and served with an olive</p>
																		</div>
																	</div><div class="column-3_7 sc_column_item odd sc_ar">
																		<h2 class="sc_title">$40.00</h2>
																	</div>
																</div>
															</li>
														</ul>
													</div>
													<div id="sc_tab_2_3" class="sc_tabs_content odd">
														<ul class="sc_list sc_list_style_menu">
															<li class="sc_list_item odd first">
																<div class="columns_wrap sc_columns">
																	<div class="column-4_7 sc_column_item odd first">
																		<h3 class="sc_title">Balantines</h3>
																		<h5 class="sc_title">200 ml</h5>
																		<div class="text_column mbn_ne">
																			<p>Includes dry vermouth and olive brine shaken with ice and served with an olive</p>
																		</div>
																	</div><div class="column-3_7 sc_column_item odd sc_ar">
																		<h2 class="sc_title">$40.00</h2>
																	</div>
																</div>
															</li>
															<li class="sc_list_item even">
																<div class="columns_wrap sc_columns">
																	<div class="column-4_7 sc_column_item odd first">
																		<h3 class="sc_title">Civas Regal</h3>
																		<h5 class="sc_title">200 ml</h5>
																		<div class="text_column mbn_ne">
																			<p>Includes dry vermouth and olive brine shaken with ice and served with an olive</p>
																		</div>
																	</div><div class="column-3_7 sc_column_item odd sc_ar">
																		<h2 class="sc_title">$40.00</h2>
																	</div>
																</div>
															</li>
															<li class="sc_list_item odd">
																<div class="columns_wrap sc_columns">
																	<div class="column-4_7 sc_column_item odd first">
																		<h3 class="sc_title">Balantines</h3>
																		<h5 class="sc_title">200 ml</h5>
																		<div class="text_column mbn_ne">
																			<p>Includes dry vermouth and olive brine shaken with ice and served with an olive</p>
																		</div>
																	</div><div class="column-3_7 sc_column_item odd sc_ar">
																		<h2 class="sc_title">$40.00</h2>
																	</div>
																</div>
															</li>
														</ul>
													</div>
													<div id="sc_tab_2_4" class="sc_tabs_content even">
														<ul class="sc_list sc_list_style_menu">
															<li class="sc_list_item odd first">
																<div class="columns_wrap sc_columns">
																	<div class="column-4_7 sc_column_item odd first">
																		<h3 class="sc_title">Balantines</h3>
																		<h5 class="sc_title">200 ml</h5>
																		<div class="text_column mbn_ne">
																			<p>Includes dry vermouth and olive brine shaken with ice and served with an olive</p>
																		</div>
																	</div><div class="column-3_7 sc_column_item odd sc_ar">
																		<h2 class="sc_title">$40.00</h2>
																	</div>
																</div>
															</li>
															<li class="sc_list_item even">
																<div class="columns_wrap sc_columns">
																	<div class="column-4_7 sc_column_item odd first">
																		<h3 class="sc_title">Civas Regal</h3>
																		<h5 class="sc_title">200 ml</h5>
																		<div class="text_column mbn_ne">
																			<p>Includes dry vermouth and olive brine shaken with ice and served with an olive</p>
																		</div>
																	</div><div class="column-3_7 sc_column_item odd sc_ar">
																		<h2 class="sc_title">$40.00</h2>
																	</div>
																</div>
															</li>
															<li class="sc_list_item odd">
																<div class="columns_wrap sc_columns">
																	<div class="column-4_7 sc_column_item odd first">
																		<h3 class="sc_title">Balantines</h3>
																		<h5 class="sc_title">200 ml</h5>
																		<div class="text_column mbn_ne">
																			<p>Includes dry vermouth and olive brine shaken with ice and served with an olive</p>
																		</div>
																	</div><div class="column-3_7 sc_column_item odd sc_ar">
																		<h2 class="sc_title">$40.00</h2>
																	</div>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>

								<section>
									<div class="container">
										<div class="sc_section" data-animation="animated fadeInUp normal">
											<div class="sc_section_inner">
												<h1 class="sc_title margin_top_huge margin_bottom_large">Table</h1>
												<div class="sc_table">
												<p></p>
												<table>
													<tbody>
														<tr>
															<th class="w8p">#</th>
															<th class="w21p">Name</th>
															<th class="sc_al">Description</th>
															<th>Price</th>
														</tr>
														<tr class="sc_ac">
															<td>
																<span class="theme_color">1</span>
															</td>
															<td>
																<span class="theme_color2">Item #1</span>
															</td>
															<td class="sc_al">Lorem ipsum dolor sit amet, consectetur</td>
															<td>
																<span class="theme_color3">$10</span>
															</td>
														</tr>
														<tr class="sc_ac">
															<td>
																<span class="theme_color">2</span>
															</td>
															<td>
																<span class="theme_color2">Item #2</span>
															</td>
															<td class="sc_al">Ut enim ad minim veniam</td>
															<td>
																<span class="theme_color3">$100</span>
															</td>
														</tr>
														<tr class="sc_ac">
															<td>
																<span class="theme_color">3</span>
															</td>
															<td>
																<span class="theme_color2">Item #3</span>
															</td>
															<td class="sc_al">eiusmod tempor incididunt</td>
															<td>
																<span class="theme_color3">$1000</span>
															</td>
														</tr>
														<tr class="sc_ac">
															<td>
																<span class="theme_color">4</span>
															</td>
															<td>
																<span class="theme_color2">Item #4</span>
															</td>
															<td class="sc_al">Lorem ipsum dolor sit amet, consectetur</td>
															<td>
																<span class="theme_color3">$10.000</span>
															</td>
														</tr>
														<tr>
															<td class="ph2em pvn" colspan="3">Total</td>
															<td class="sc_ac">
																<span class="theme_color3">$40</span>
															</td>
														</tr>
													</tbody>
												</table>
												<p></p>
												</div>
											</div>
										</div>
									</div>
								</section>

								<section class="">
									<div class="container">
										<div class="sc_section" data-animation="animated fadeInUp normal">
											<div class="sc_section_inner">
												<h1 class="sc_title margin_top_huge margin_bottom_large">Audio player</h1>
												<div class="sc_audio_player sc_audio sc_audio_image bg_image_17">
													<div class="sc_audio_header">
														<h6 class="sc_audio_title">Geef mij maar Amsterdam</h6>
														<div class="sc_audio_author">
															<span class="sc_audio_author_by">by </span>
															<span class="sc_audio_author_name">Johnny Jordaan</span>
														</div>
													</div>
													<div class="__sc_audio_container">
														<audio src="sounds/Dream-Music-Relax.mp3" data-title="Geef mij maar Amsterdam" data-author="Johnny Jordaan" data-image="images/woman.jpg"></audio>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>

								<section class="">
									<div class="container">
										<div class="sc_section" data-animation="animated fadeInUp normal">
											<div class="sc_section_inner">
												<h1 class="sc_title margin_top_huge margin_bottom_large">Video player</h1>
												<div class="sc_video_player">
													<div class="sc_video_frame" data-width="100%" data-height="659">
														<iframe class="video_frame" src="https://player.vimeo.com/video/74076826" width="100%" height="659" frameborder="0" webkitAllowFullScreen="webkitAllowFullScreen" mozallowfullscreen="mozallowfullscreen" allowFullScreen="allowFullScreen">
														</iframe>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>

								<section class="">
									<div class="container">
										<div class="sc_section" data-animation="animated fadeInUp normal">
											<div class="sc_section_inner">
												<h1 class="sc_title margin_top_huge margin_bottom_large">Slider</h1>
												<div id="sc_slider_1204685948" class="sc_slider sc_slider_swiper swiper-slider-container sc_slider_height_auto sc_slider_controls sc_slider_nopagination sc_slider_bg mw750 mh400" data-interval="7307">
													<div class="slides swiper-wrapper" style="">
														<div class="swiper-slide slider_image_1" data-style="width:100%;">
														</div>
														<div class="swiper-slide slider_image_2" data-style="width:100%;">
														</div>
														<div class="swiper-slide slider_image_3" data-style="width:100%;">
														</div>
														<div class="swiper-slide slider_image_4" data-style="width:100%;">
														</div>
														<div class="swiper-slide slider_image_5" data-style="width:100%;">
														</div>
														<div class="swiper-slide slider_image_6" data-style="width:100%;">
														</div>
														<div class="swiper-slide slider_image_7" data-style="width:100%;">
														</div>
														<div class="swiper-slide slider_image_8" data-style="width:100%;">
														</div>
														<div class="swiper-slide slider_image_9" data-style="width:100%;">
														</div>
														<div class="swiper-slide slider_image_10" data-style="width:100%;">
														</div>
													</div>
													<div class="sc_slider_controls_wrap">
														<a class="sc_slider_prev" href="#"></a>
														<a class="sc_slider_next" href="#"></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>

								<section class="">
									<div class="container">
										<h1 class="sc_title margin_top_huge margin_bottom_large">Inputs &amp; buttons</h1>
										<div class="sc_section">
											<div class="sc_section_inner">
												<div class="wpb_raw_code wpb_content_element wpb_raw_html">
													<div class="wpb_wrapper">
														<div class="input_field dropdown">
															<label>Input Heading</label>
															<input type="text" class="h315em" placeholder="Input field example">
														</div>
													</div>
												</div>
												<div class="wpb_raw_code wpb_content_element wpb_raw_html">
													<div class="wpb_wrapper">
														<div class="input_field">
															<label>Dropdown Heading</label>
															<select class="h315em">
																<option value="">Input field example</option>
															</select>
														</div>
													</div>
												</div>
												<div class="wpb_raw_code wpb_content_element wpb_raw_html">
													<div class="wpb_wrapper">
														<div class="input_field hovered required">
															<label>Hovered Input</label>
															<input type="text" class="h315em" placeholder="Input field example">
														</div>
													</div>
												</div>
												<div class="wpb_raw_code wpb_content_element wpb_raw_html">
													<div class="wpb_wrapper">
														<div class="input_field valid required">
															<label>Input Heading</label>
															<input type="text" class="h315em" placeholder="Input field example">
															<div class = "input_err">Please enter a valid email</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="sc_section margin_top_medium">
											<div class="sc_section_inner">
												<a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">Normal Button</a>
											</div>
										</div>
										<div class="sc_section margin_top_small">
											<div class="sc_section_inner">
												<a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small style_color_light">Normal Button</a>
											</div>
										</div>
									</div>
								</section>

								<section class="">
									<div class="container">
										<div class="sc_section" data-animation="animated fadeInUp normal">
											<div class="sc_section_inner">
												<h1 class="sc_title margin_top_huge margin_bottom_large">Google map</h1>
												<div id="sc_googlemap_1" class="sc_googlemap sc_googlemap_style_1" data-zoom="15" data-style="greyscale">
													<div id="sc_googlemap_1_1" class="sc_googlemap_marker" data-title="" data-description="Berlin" data-address="Berlin" data-latlng="" data-point="images/google.png"></div>
												</div>
											</div>
										</div>
									</div>
								</section>

								<section class="">
									<div class="container">
										<div class="sc_section" data-animation="animated fadeInUp normal">
											<div class="sc_section_inner">
												<h1 class="sc_title margin_top_huge margin_bottom_large">Alert message</h1>
												<div class="sc_infobox sc_infobox_style_regular sc_infobox_closeable sc_infobox_iconed icon-cogs">
													<span class="infobox_title">General message goes here</span> Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundme pluribus unum. Defacto lingo est igpay atinlay. Marquee selectus non provisio incongruous.
												</div>
												<div class="sc_infobox sc_infobox_style_success sc_infobox_closeable sc_infobox_iconed icon-ok">
													<span class="infobox_title">Success message goes here</span> Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundme pluribus unum. Defacto lingo est igpay atinlay. Marquee selectus non provisio incongruous.
												</div>
												<div class="sc_infobox sc_infobox_style_result sc_infobox_closeable custom_infobox  sc_infobox_iconed icon-attention-1 white">
													<span class="infobox_title white">Warning message goes here</span> Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundme pluribus unum. Defacto lingo est igpay atinlay. Marquee selectus non provisio incongruous.
												</div>
												<div class="sc_infobox sc_infobox_style_info sc_infobox_closeable sc_infobox_iconed icon-info-circled">
													<span class="infobox_title">Information message goes here</span> Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundme pluribus unum. Defacto lingo est igpay atinlay. Marquee selectus non provisio incongruous.
												</div>
												<div class="sc_infobox sc_infobox_style_error sc_infobox_closeable margin_bottom_null sc_infobox_iconed icon-error-message-icone">
													<span class="infobox_title">Error message goes here</span> Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundme pluribus unum. Defacto lingo est igpay atinlay. Marquee selectus non provisio incongruous.
												</div>
											</div>
										</div>
									</div>
								</section>

								<section class="">
									<div class="container">
										<div class="sc_section" data-animation="animated fadeInUp normal">
											<div class="sc_section_inner">
												<h1 class="sc_title margin_top_huge margin_bottom_large">Progress bar</h1>
												<div class="sc_skills sc_skills_pie sc_skills_compact_on progress_bar mw680" data-type="pie" data-caption="Skills">
													<div class="sc_skills_legend">
														<div class="sc_skills_legend_item">
															<span class="sc_skills_legend_marker"></span>
															<span class="sc_skills_legend_title">Annual audit preparation</span>
															<span class="sc_skills_legend_value">20</span>
														</div>
														<div class="sc_skills_legend_item">
															<span class="sc_skills_legend_marker"></span>
															<span class="sc_skills_legend_title">Coaching and advising</span>
															<span class="sc_skills_legend_value">35</span>
														</div>
														<div class="sc_skills_legend_item">
															<span class="sc_skills_legend_marker"></span>
															<span class="sc_skills_legend_title">Results reporting</span>
															<span class="sc_skills_legend_value">40</span>
														</div>
														<div class="sc_skills_legend_item">
															<span class="sc_skills_legend_marker"></span>
															<span class="sc_skills_legend_title">Write-up work</span>
															<span class="sc_skills_legend_value">15</span>
														</div>
													</div>
													<div class="sc_skills_item">
														<canvas class="sc_skills_pie_canvas"></canvas>
														<div class="sc_skills_data">
															<div class="pie" data-start="0" data-stop="20" data-step="1" data-steps="100" data-max="100" data-speed="28" data-duration="560" data-color="#bd8951" data-bg_color="#ffffff" data-border_color="#e4e7e8" data-cutout="70" data-easing="easeOutCirc" data-ed="%">
																<input type="hidden" class="text" value="Annual audit preparation" />
																<input type="hidden" class="percent" value="20" />
																<input type="hidden" class="color" value="#bd8951" />
															</div>
															<div class="pie" data-start="0" data-stop="35" data-step="1" data-steps="100" data-max="100" data-speed="31" data-duration="1085" data-color="#6b5134" data-bg_color="#ffffff" data-border_color="#e4e7e8" data-cutout="70" data-easing="easeOutCirc" data-ed="%">
																<input type="hidden" class="text" value="Coaching and advising" />
																<input type="hidden" class="percent" value="35" />
																<input type="hidden" class="color" value="#6b5134" />
															</div>
															<div class="pie" data-start="0" data-stop="40" data-step="1" data-steps="100" data-max="100" data-speed="11" data-duration="440" data-color="#3d352d" data-bg_color="#ffffff" data-border_color="#e4e7e8" data-cutout="70" data-easing="easeOutCirc" data-ed="%">
																<input type="hidden" class="text" value="Results reporting" />
																<input type="hidden" class="percent" value="40" />
																<input type="hidden" class="color" value="#3d352d" />
															</div>
															<div class="pie" data-start="0" data-stop="15" data-step="1" data-steps="100" data-max="100" data-speed="33" data-duration="495" data-color="#c8ae92" data-bg_color="#ffffff" data-border_color="#e4e7e8" data-cutout="70" data-easing="easeOutCirc" data-ed="%">
																<input type="hidden" class="text" value="Write-up work" />
																<input type="hidden" class="percent" value="15" />
																<input type="hidden" class="color" value="#c8ae92" />
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>

								<section class="">
									<div class="container">
										<div class="sc_section" data-animation="animated fadeInUp normal">
											<div class="sc_section_inner">
												<h1 class="sc_title margin_top_huge margin_bottom_large">Skills</h1>
												<div class="sc_skills sc_skills_bar sc_skills_horizontal mw500" data-type="bar" data-caption="Skills" data-dir="horizontal">
													<div class="sc_skills_info">
														<div class="sc_skills_label">Content Submission</div>
													</div>
													<div class="sc_skills_item sc_skills_style_1 odd first">
														<div class="margin_class">
															<div class="sc_skills_count sc_skills_count_style_1"></div>
															<div class="sc_skills_total" data-start="0" data-stop="98" data-step="1" data-max="100" data-speed="39" data-duration="3822" data-ed="%">0%</div>
														</div>
													</div>
													<div class="sc_skills_info">
														<div class="sc_skills_label">Web Design</div>
													</div>
													<div class="sc_skills_item sc_skills_style_1 even">
														<div class="margin_class">
															<div class="sc_skills_count sc_skills_count_style_1"></div>
															<div class="sc_skills_total" data-start="0" data-stop="66" data-step="1" data-max="100" data-speed="22" data-duration="1452" data-ed="%">0%</div>
														</div>
													</div>
													<div class="sc_skills_info">
														<div class="sc_skills_label">Keywords</div>
													</div>
													<div class="sc_skills_item sc_skills_style_1 odd">
														<div class="margin_class">
															<div class="sc_skills_count sc_skills_count_style_1"></div>
															<div class="sc_skills_total" data-start="0" data-stop="87" data-step="1" data-max="100" data-speed="33" data-duration="2871" data-ed="%">0%</div>
														</div>
													</div>
													<div class="sc_skills_info">
														<div class="sc_skills_label">Google Ranking</div>
													</div>
													<div class="sc_skills_item sc_skills_style_1 even">
														<div class="margin_class">
															<div class="sc_skills_count sc_skills_count_style_1"></div>
															<div class="sc_skills_total" data-start="0" data-stop="82" data-step="1" data-max="100" data-speed="24" data-duration="1968" data-ed="%">0%</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>

								<section class="">
									<div class="container">
										<div class="sc_section" data-animation="animated fadeInUp normal">
											<div class="sc_section_inner">
												<h1 class="sc_title margin_top_huge margin_bottom_large">Separators</h1>
												<div class="mbn_ne">
													<p>Solid gray</p>
												</div>
												<div class="sc_line sc_line_style_1 sc_line_position_center_center sc_line_style_solid mt015em mb09em"></div>
												<div class="mbn_ne">
													<p>Solid gold</p>
												</div>
												<div class="sc_line sc_line_style_2 sc_line_position_center_center sc_line_style_solid margin_top_null mb1em"></div>
												<div class="mbn_ne">
													<p>Dotted black</p>
												</div>
												<div class="sc_line sc_line_style_3 sc_line_position_center_center sc_line_style_dotted margin_bottom_null mt02em"></div>
											</div>
										</div>
									</div>
								</section>

								<section class="">
									<div class="container">
										<div class="sc_section margin_bottom_huges " data-animation="animated fadeInUp normal">
											<div class="sc_section_inner">
												<h1 class="sc_title margin_top_huge margin_bottom_large">Team</h1>
												<div class="sc_team_wrap">
													<div class="sc_team sc_team_style_team-3 ">
														<div class="sc_columns columns_wrap">
															<div class="column-1_2 column_padding_bottom">
																<div id="sc_team_1342347696_1" class="sc_team_item sc_team_item_1 odd first">
																	<div class="sc_team_item_avatar">
																		<img alt="Daniel Green" src="images/team2-740x856.jpg">
																		<div class="sc_team_item_hover">
																			<div class="sc_team_item_socials">
																				<div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_tiny">
																					<div class="sc_socials_item">
																						<a href="#" target="_blank" class="social_icons social_facebook">
																							<span class="icon-facebook"></span>
																						</a>
																					</div><div class="sc_socials_item">
																						<a href="#" target="_blank" class="social_icons social_instagramm">
																							<span class="icon-instagramm"></span>
																						</a>
																					</div><div class="sc_socials_item">
																						<a href="#" target="_blank" class="social_icons social_gpl">
																							<span class="icon-gpl"></span>
																						</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="sc_team_item_info">
																		<h3 class="sc_team_item_title">
																		<a href="#">Daniel Green</a>
																		</h3>
																		<div class="sc_team_item_position">Bartender</div>
																	</div>
																</div>
															</div><div class="column-1_2 column_padding_bottom">
																<div class="sc_team_item sc_team_item_2 even">
																	<div class="sc_team_item_avatar">
																		<img alt="Tonny Wisper" src="images/team1-740x856.jpg">
																		<div class="sc_team_item_hover">
																			<div class="sc_team_item_socials">
																				<div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_tiny">
																					<div class="sc_socials_item">
																						<a href="#" target="_blank" class="social_icons social_facebook">
																							<span class="icon-facebook"></span>
																						</a>
																					</div><div class="sc_socials_item">
																						<a href="#" target="_blank" class="social_icons social_instagramm">
																							<span class="icon-instagramm"></span>
																						</a>
																					</div><div class="sc_socials_item">
																						<a href="#" target="_blank" class="social_icons social_gpl">
																							<span class="icon-gpl"></span>
																						</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="sc_team_item_info">
																		<h3 class="sc_team_item_title">
																		<a href="#">Tonny Wisper</a>
																		</h3>
																		<div class="sc_team_item_position">Bartender</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>

							</div>
						</article>
					</div>

<div class="sidebar widget_area scheme_original">
	<div class="sidebar_inner widget_area_inner">

		<aside class="widget widget_categories">
			<h2 class="widget_title">Categories</h2>
			<ul>
				<li class="">
					<a href="#">Classic</a>
				</li>
				<li class="">
					<a href="#">Masonry (2 columns)</a>
				</li>
				<li class="">
					<a href="#">Masonry (3 columns)</a>
				</li>
				<li class="">
					<a href="#">News</a>
				</li>
				<li class="">
					<a href="#">Portfolio (2 columns)</a>
				</li>
				<li class="">
					<a href="#">Portfolio (3 columns)</a>
				</li>
				<li class="">
					<a href="#">Post Formats</a>
				</li>
				<li class="">
					<a href="#">Uncategorized</a>
				</li>
				<li class="">
					<a href="#">Updates</a>
				</li>
			</ul>
		</aside><aside class="widget widget_recent_posts">
			<h2 class="widget_title">Recent Posts</h2>
			<article class="post_item with_thumb first">
				<div class="widget_area_top">
					<div class="post_thumb">
						<img alt="The Top 10 Most Expensive Whiskies in the World" src="images/image-1-75x75.jpg">
					</div>
					<div class="post_content">
						<h6 class="post_title">
						<a href="#">The Top 10 Most Expensive Whiskies in the World</a>
						</h6>
					</div>
				</div>
				<div class="widget_area_bottom">
					<div class="post_info">
						<span class="post_info_item post_info_posted">
							<a href="#" class="post_info_date">Feb 11, 2016</a>
						</span>
						<span class="post_info_item post_info_posted_by">
							by
							<a href="#" class="post_info_author">ANC_admin</a>
						</span>
					</div>
				</div>
			</article>
			<article class="post_item with_thumb">
				<div class="widget_area_top">
					<div class="post_thumb">
						<img alt="Alcohol to Fight Alcohol: Doctors Use Whisky Therapy" src="images/image-14-75x75.jpg">
					</div>
					<div class="post_content">
						<h6 class="post_title">
						<a href="#">Alcohol to Fight Alcohol: Doctors Use Whisky Therapy</a>
						</h6>
					</div>
				</div>
				<div class="widget_area_bottom">
					<div class="post_info">
						<span class="post_info_item post_info_posted">
							<a href="#" class="post_info_date">Feb 11, 2016</a>
						</span>
						<span class="post_info_item post_info_posted_by">
							by
							<a href="#" class="post_info_author">ANC_admin</a>
						</span>
					</div>
				</div>
			</article>
		</aside><aside class="widget widget_calendar">
			<h2 class="widget_title">Calendar</h2>
			<div class="calendar_wrap">
				<table class="sc_calendar">
					<thead>
						<tr>
							<th class="month_prev">
								<a href="#" data-type="post" data-year="2016" data-month="04" title="View posts for March 2016"></a>
							</th>
							<th class="month_cur" colspan="5">
								May 
								<span>2016</span>
							</th>
							<th class="month_next">
								<a href="#" data-type="post" data-year="2016" data-month="06" title="View posts for June 2016"></a>
							</th>
						</tr>
						<tr>
							<th class="weekday" scope="col" title="Monday">M</th>
							<th class="weekday" scope="col" title="Tuesday">T</th>
							<th class="weekday" scope="col" title="Wednesday">W</th>
							<th class="weekday" scope="col" title="Thursday">T</th>
							<th class="weekday" scope="col" title="Friday">F</th>
							<th class="weekday" scope="col" title="Saturday">S</th>
							<th class="weekday" scope="col" title="Sunday">S</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="6" class="pad">
								<span class="day_wrap">&nbsp;</span>
							</td>
							<td class="day">
								<span class="day_wrap">1</span>
							</td>
						</tr>
						<tr>
							<td class="day">
								<span class="day_wrap">2</span>
							</td>
							<td class="day">
								<span class="day_wrap">3</span>
							</td>
							<td class="day">
								<span class="day_wrap">4</span>
							</td>
							<td class="today">
								<span class="day_wrap">5</span>
							</td>
							<td class="day">
								<span class="day_wrap">6</span>
							</td>
							<td class="day">
								<span class="day_wrap">7</span>
							</td>
							<td class="day">
								<span class="day_wrap">8</span>
							</td>
						</tr>
						<tr>
							<td class="day">
								<span class="day_wrap">9</span>
							</td>
							<td class="day">
								<span class="day_wrap">10</span>
							</td>
							<td class="day">
								<span class="day_wrap">11</span>
							</td>
							<td class="day">
								<span class="day_wrap">12</span>
							</td>
							<td class="day">
								<span class="day_wrap">13</span>
							</td>
							<td class="day">
								<span class="day_wrap">14</span>
							</td>
							<td class="day">
								<span class="day_wrap">15</span>
							</td>
						</tr>
						<tr>
							<td class="day">
								<span class="day_wrap">16</span>
							</td>
							<td class="day">
								<span class="day_wrap">17</span>
							</td>
							<td class="day">
								<span class="day_wrap">18</span>
							</td>
							<td class="day">
								<span class="day_wrap">19</span>
							</td>
							<td class="day">
								<span class="day_wrap">20</span>
							</td>
							<td class="day">
								<span class="day_wrap">21</span>
							</td>
							<td class="day">
								<span class="day_wrap">22</span>
							</td>
						</tr>
						<tr>
							<td class="day">
								<span class="day_wrap">23</span>
							</td>
							<td class="day">
								<span class="day_wrap">24</span>
							</td>
							<td class="day">
								<span class="day_wrap">25</span>
							</td>
							<td class="day">
								<span class="day_wrap">26</span>
							</td>
							<td class="day">
								<span class="day_wrap">27</span>
							</td>
							<td class="day">
								<span class="day_wrap">28</span>
							</td>
							<td class="day">
								<span class="day_wrap">29</span>
							</td>
						</tr>
						<tr>
							<td class="day">
								<span class="day_wrap">30</span>
							</td>
							<td class="day">
								<span class="day_wrap">31</span>
							</td>
							<td class="pad" colspan="5">
								<span class="day_wrap">&nbsp;</span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</aside><aside class="widget widget_tag_cloud">
			<h2 class="widget_title">Tags</h2>
			<div class="tagcloud">
				<a href='#' title='5 topics'>alcohol</a>
				<a href='#' title='5 topics'>bourbon</a>
				<a href='#' title='5 topics'>Coctails</a>
				<a href='#' title='5 topics'>events</a>
				<a href='#' title='5 topics'>Food</a>
				<a href='#' title='5 topics'>irish</a>
				<a href='#' title='5 topics'>Latest Events</a>
				<a href='#' title='5 topics'>Longdrinks</a>
				<a href='#' title='5 topics'>post format</a>
				<a href='#' title='5 topics'>scotch</a>
				<a href='#' title='5 topics'>whiskey</a>
			</div>
		</aside><aside class="widget null-instagram-feed">
			<h2 class="widget_title">Instagram</h2>
			<ul class="instagram-pics instagram-size-large">
				<li class="">
					<a href="#" target="_self"  class="">
						<img src="images/1208235_606138602829355_1872004253_n.jpg" alt="ThemeREX instagram" title="ThemeREX instagram" class=""/>
					</a>
				</li>
				<li class="">
					<a href="#" target="_self"  class="">
						<img src="images/10724013_849664728400826_1089527905_n.jpg" alt="ThemeREX instagram" title="ThemeREX instagram" class=""/>
					</a>
				</li>
				<li class="">
					<a href="#" target="_self"  class="">
						<img src="images/10005306_1518043688438328_2045272490_n.jpg" alt="ThemeREX instagram" title="ThemeREX instagram" class=""/>
					</a>
				</li>
				<li class="">
					<a href="#" target="_self"  class="">
						<img src="images/10731433_566339430132701_1314107546_n.jpg" alt="ThemeREX instagram" title="ThemeREX instagram" class=""/>
					</a>
				</li>
				<li class="">
					<a href="#" target="_self"  class="">
						<img src="images/10724812_711840602224115_2085011690_n.jpg" alt="ThemeREX instagram" title="ThemeREX instagram" class=""/>
					</a>
				</li>
				<li class="">
					<a href="#" target="_self"  class="">
						<img src="images/10723875_1488936244696244_469967380_n.jpg" alt="ThemeREX instagram" title="ThemeREX instagram" class=""/>
					</a>
				</li>
			</ul>
		</aside><aside class="widget widget_search">
			<h2 class="widget_title">Search</h2>
			<form method="get" class="search_form" action="#">
				<input type="text" class="search_field" placeholder="Search &hellip;" value="" name="s" title="Search for:" />
				<button type="submit" class="search_button icon-search"></button>
			</form>
		</aside><aside class="widget widget_archive">
			<h2 class="widget_title">Archives</h2>
			<ul>
				<li>
					<a href='#'>February 2016</a>
				</li>
				<li>
					<a href='#'>August 2015</a>
				</li>
				<li>
					<a href='#'>July 2015</a>
				</li>
				<li>
					<a href='#'>June 2015</a>
				</li>
				<li>
					<a href='#'>May 2015</a>
				</li>
			</ul>
		</aside><aside class="widget widget_meta">
			<h2 class="widget_title">Meta</h2>
			<ul>
				<li>
					<a href="#">Log in</a>
				</li>
				<li>
					<a href="#">
						Entries
						<abbr title="Really Simple Syndication">RSS</abbr>
					</a>
				</li>
				<li>
					<a href="#">
						Comments
						<abbr title="Really Simple Syndication">RSS</abbr>
					</a>
				</li>
			</ul>
		</aside><aside class="widget widget_recent_reviews">
			<h2 class="widget_title">Raiting</h2>
			<div class="recent_reviews">
				<article class="post_item with_thumb first">
					<div class="widget_area_top">
						<div class="post_thumb">
							<img alt="Japanese Scotch Whisky Supremacy" src="images/image-3-75x75.jpg">
						</div>
						<div class="post_content">
							<h6 class="post_title">
							<a href="#">Japanese Scotch Whisky Supremacy</a>
							</h6>
						</div>
					</div>
					<div class="widget_area_bottom">
						<div class="post_rating reviews_summary blog_reviews">
							<div class="criteria_summary criteria_row">
								<div class="reviews_stars reviews_style_stars" data-mark="4.7">
									<div class="reviews_stars_wrap">
										<div class="reviews_stars_bg">
											<span class="reviews_star"></span><span class="reviews_star"></span><span class="reviews_star"></span><span class="reviews_star"></span><span class="reviews_star"></span>
										</div><div class="reviews_stars_hover">
											<span class="reviews_star"></span><span class="reviews_star"></span><span class="reviews_star"></span><span class="reviews_star"></span><span class="reviews_star"></span>
										</div>
									</div>
									<div class="reviews_value">4.7</div>
								</div>
							</div>
						</div>
						<div class="post_info"><span class="post_info_item post_info_posted"><a href="#" class="post_info_date">Feb 11, 2016</a></span><span class="post_info_item post_info_posted_by">by <a href="#" class="post_info_author">ANC_admin</a></span>
						</div>
					</div>
				</article>
				<article class="post_item with_thumb">
					<div class="widget_area_top">
						<div class="post_thumb">
							<img alt="Oldest Scotch Sale May Fetch £10,000" src="images/image-12-75x75.jpg">
						</div>
						<div class="post_content">
							<h6 class="post_title">
							<a href="#">Oldest Scotch Sale May Fetch £10,000</a>
							</h6>
						</div>
					</div>
					<div class="widget_area_bottom">
						<div class="post_rating reviews_summary blog_reviews">
							<div class="criteria_summary criteria_row">
								<div class="reviews_stars reviews_style_stars" data-mark="3">
									<div class="reviews_stars_wrap">
										<div class="reviews_stars_bg">
											<span class="reviews_star"></span><span class="reviews_star"></span><span class="reviews_star"></span><span class="reviews_star"></span><span class="reviews_star"></span>
										</div><div class="reviews_stars_hover">
											<span class="reviews_star"></span><span class="reviews_star"></span><span class="reviews_star"></span><span class="reviews_star"></span><span class="reviews_star"></span>
										</div>
									</div>
									<div class="reviews_value">3</div>
								</div>
							</div>
						</div>
						<div class="post_info"><span class="post_info_item post_info_posted"><a href="#" class="post_info_date">Feb 11, 2016</a></span><span class="post_info_item post_info_posted_by">by <a href="#" class="post_info_author">ANC_admin</a></span>
						</div>
					</div>
				</article>
			</div>
		</aside><aside class="widget widget_rss">
			<h2 class="widget_title">
			<a class="rsswidget" href="#">
				<img class="rss-widget-icon" width="14" height="14" src="images/rss.png" alt="RSS" />
			</a>
			<a class="rsswidget" href="#">RSS Feed</a>
			</h2>
			<ul>
				<li>
					<a class='rsswidget' href='#'>Cuba scrambles to keep pace with U.S.-fueled tourism boom</a>
					<span class="rss-date">May 4, 2016</span>
				</li>
				<li>
					<a class='rsswidget' href='#'>Aging Thailand takes toll on indebted households</a>
					<span class="rss-date">May 4, 2016</span>
				</li>
			</ul>
		</aside>

	</div>
</div>


				</div>

			</div>
			
			<footer class="footer_wrap widget_area scheme_original show-footer-border-no">
				<div class="footer_wrap_inner widget_area_inner">
					<div class="content_wrap">
						<div class="columns_wrap">
							<aside class="widget_number_1 column-1_3 widget widget_text">
								<h2 class="widget_title">Email Address</h2>
								<div class="textwidget">
									<a href="chenyuyang0122@gmail.com">chenyuyang0122@gmail.com</a><br>
									<a href="dingzihaojason@gmail.com ">dingzihaojason@gmail.com </a>
								</div>
							</aside><aside class="widget_number_2 column-1_3 widget widget_text">
								<h2 class="widget_title">Phones &#038; Faxes</h2>
								<div class="textwidget">
									+1(732)581-1878<br>
									+1(732)799-9275
								</div>
							</aside><aside class="widget_number_3 column-1_3 widget widget_text">
								<h2 class="widget_title">Creater&#8217;s Name</h2>
								<div class="textwidget">
									Yuyang Chen<br>
									Zihao Ding
								</div>
							</aside>
						</div>
					</div>
				</div>
			</footer>

			<footer class="contacts_wrap scheme_original show-footer-border-no">
				<div class="contacts_wrap_inner">
					<div class="content_wrap">
						<div class="logo">
							<a href="index.php">
								<img src="images/logo_footer.png" class="logo_footer" alt="" width="132" height="54">
							</a>
						</div>
					</div>
				</div>
			</footer>	
	
			<div class="copyright_wrap copyright_style_socials scheme_original">
				<div class="copyright_wrap_inner">
					<div class="content_wrap">
						<div class="copyright_text">
							<a href="http://www.yuyangchen.com/">Yuyang&Zihao</a> © 2018 All Rights Reserved <a href="http://www.yuyangchen.com/">Terms of Use</a> and <a href="http://www.yuyangchen.com/">Privacy Policy</a>
						</div>
						<div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_tiny">
							<div class="sc_socials_item">
								<a href="https://github.com/yuyangchen0122" target="_blank" class="social_icons social_github">
									<span class="icon-github"></span>
								</a>
							</div><div class="sc_socials_item">
								<a href="https://www.linkedin.com/in/yuyang-chen-16b0b1137/" target="_blank" class="social_icons social_linkedin">
									<span class="icon-instagramm"></span>
								</a>
							</div><div class="sc_socials_item">
								<a href="#" target="_blank" class="social_icons social_gpl">
									<span class="icon-gpl"></span>
								</a>
							</div><div class="sc_socials_item">
								<a href="#" target="_blank" class="social_icons social_tripadvisor">
									<span class="icon-tripadvisor"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>	 
							
		</div>

	</div>
	
	
<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>

	<script type='text/javascript' src='js/vendor/jquery-1.12.3.min.js'></script>
	<script type='text/javascript' src='js/vendor/jquery-migrate.min.js'></script>
	
	
	
	
	
	<script type='text/javascript' src='js/custom/__main.js'></script>
	<script type='text/javascript' src='js/vendor/jquery.cookie.min.js'></script>
	<script type='text/javascript' src='js/vendor/superfish.min.js'></script>
	<script type='text/javascript' src='js/custom/jquery.slidemenu.min.js'></script>
	<script type='text/javascript' src='js/custom/core.utils.min.js'></script>
	<script type='text/javascript' src='js/custom/core.init.js'></script>
	<script type='text/javascript' src='js/custom/theme.init.min.js'></script>
	<script type="text/javascript" src="js/vendor/mediaelement/mediaelement-and-player.min.js"></script>
	<script type='text/javascript' src='js/custom/theme.shortcodes.js'></script>
	<script type='text/javascript' src='js/vendor/core.min.js'></script>
	<script type='text/javascript' src='js/vendor/widget.min.js'></script>
	<script type='text/javascript' src='js/vendor/tabs.min.js'></script>
	<script type='text/javascript' src='js/vendor/effect.min.js'></script>
	<script type='text/javascript' src='js/vendor/effect-fade.min.js'></script>
	<script type="text/javascript" src="js/vendor/swiper/swiper.min.js"></script>
	
	<script type="text/javascript" src="js/vendor/accordion.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key="></script>
	<script type="text/javascript" src="js/custom/core.googlemap.min.js"></script>
	<script type="text/javascript" src="js/vendor/chart.min.js"></script>
	
	<script type="text/javascript" src="js/vendor/prettyphoto/jquery.prettyPhoto.min.js"></script>
	
	

</body>
</html>