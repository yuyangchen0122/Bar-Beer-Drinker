<?php
$connect = mysqli_connect('rucs336group66.cmbbmvtvxryw.us-east-1.rds.amazonaws.com', 'yuyangchen0122', 'a123123q45', 'RUCS336Group66');
$query = 'SELECT id, State, COUNT(State) AS AmountOfPeople FROM BarBeerDrinker.DRINKER GROUP BY State ORDER BY AmountOfPeople DESC LIMIT 10;';

$result = mysqli_query($connect, $query);
?>



<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
	<title>Oldstory – Whiskey Bar HTML</title>
	
	
	<link rel="stylesheet" type="text/css" media="all" href="css/fontello/css/fontello.min.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/core.animation.min.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/theme.shortcodes.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/plugin.instagram-widget.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/skin.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/responsive.css" />
	
	<link rel="stylesheet" type="text/css" media="all" href="js/vendor/prettyphoto/css/prettyPhoto.min.css">

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('visualization', '1', {packages: ['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawMaterial);

       function drawMaterial() {
       var data = google.visualization.arrayToDataTable([
       	['State','AmountOfPeople'],
       	<?php 
          while($row = mysqli_fetch_array($result)){
            echo "['".$row[1]."', ".$row[2]."],";  
          }
        ?>
        ]);

        var options = {
          title: 'Top Ten Drinker',
          bars: 'horizontal'
        };

        var material = new google.charts.Bar(document.getElementById('barchart'));
          material.draw(data, options);
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
			<li class="menu-item menu-item-object-page ">
				<a href="features-BarPage.php">Bar Page</a>
			</li>
			<li class="menu-item menu-item-object-page ">
				<a href="features-DrinkerPage.php">Drinker Page</a>
			</li>
			<li class="menu-item menu-item-object-page ">
				<a href="features-BeerPage.php">Beer Page</a>
			</li>
			<li class="menu-item menu-item-object-page ">
				<a href="features-query.php">SQL Query Page</a>
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
							<li class="menu-item menu-item-object-page current-menu-item">
								<a href="features-BarPage.php">Bar Page</a>
							</li>
							<li class="menu-item menu-item-object-page ">
								<a href="features-DrinkerPage.php">Drinker Page</a>
							</li>
							<li class="menu-item ">
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
			<div class="breadcrumbs"><a class="breadcrumbs_item home" href="#">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Typography</span>
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
										<h1 class="sc_title margin_top_tiny-">Top 10 drinkers</h1>
									</div>
									<div id="barchart" style="width: 100%; height: 40em;"></div>
								</section>

								<section class="">
									<div class="container">
										<h1 class="sc_title margin_top_huge margin_bottom_large">10 Most popular Beers</h1>
									</div>
								</section>

								<section class="">
									<div class="container">
										<h1 class="sc_title margin_top_huge margin_bottom_large">10 Best Selling manufacturers</h1>
									</div>
								</section>
								<section>
									<div class="container">
										
									</div>
								</section>

								<section class="">
									<div class="container">
										<h1 class="sc_title margin_top_huge margin_bottom_large">Lists</h1>
										<div class="mbn_ne">
											<p>Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, li tot Europa usa li sam vocabularium. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilita; de un nov lingua franca.</p>
										</div>
										<div class="columns_wrap sc_columns sc_columns_count_3 margin_top_small margin_bottom_huge">
											<div class="column-1_3 sc_column_item odd first">
												<ul class="sc_list sc_list_style_ul list-defined ">
													<li class="sc_list_item odd first">Lorem ipsum</li>
													<li class="sc_list_item even">Dolor sit amet</li>
													<li class="sc_list_item odd">Consectetur</li>
													<li class="sc_list_item even">Adipisicing elit</li>
													<li class="sc_list_item odd">Sed do eiusmod</li>
													<li class="sc_list_item even">Sed do eiusmod</li>
												</ul>
											</div><div class="column-1_3 sc_column_item sc_column_item_2 even">
												<ol class="sc_list sc_list_style_ol">
													<li class="sc_list_item odd first">Lorem ipsum</li>
													<li class="sc_list_item even">Dolor sit amet</li>
													<li class="sc_list_item odd">Consectetur</li>
													<li class="sc_list_item even">Adipisicing elit</li>
													<li class="sc_list_item odd">Sed do eiusmod</li>
													<li class="sc_list_item even">Sed do eiusmod</li>
												</ol>
											</div><div class="column-1_3 sc_column_item sc_column_item_3 odd">
												<ul class="sc_list sc_list_style_iconed list-custom margin_right_small">
													<li class="sc_list_item odd first">
														<span class="sc_list_icon icon-right-open"></span>
														Lorem ipsum
													</li>
													<li class="sc_list_item even">
														<span class="sc_list_icon icon-right-open"></span>
														Dolor sit amet
													</li>
													<li class="sc_list_item odd">
														<span class="sc_list_icon icon-right-open"></span>
														Consectetur
													</li>
													<li class="sc_list_item even">
														<span class="sc_list_icon icon-right-open"></span>
														Adipisicing elit
													</li>
												</ul>
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
	
	<script type='text/javascript' src='js/custom/theme.shortcodes.js'></script>
	<script type='text/javascript' src='js/vendor/core.min.js'></script>
	<script type='text/javascript' src='js/vendor/widget.min.js'></script>
	<script type='text/javascript' src='js/vendor/tabs.min.js'></script>
	<script type='text/javascript' src='js/vendor/effect.min.js'></script>
	<script type='text/javascript' src='js/vendor/effect-fade.min.js'></script>
	
	
	
	
	
	
	
	<script type="text/javascript" src="js/vendor/prettyphoto/jquery.prettyPhoto.min.js"></script>
	
	

</body>
</html>
