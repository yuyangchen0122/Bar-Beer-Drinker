<?php
$db = mysqli_connect('rucs336group66.cmbbmvtvxryw.us-east-1.rds.amazonaws.com', 'yuyangchen0122', 'a123123q45', 'RUCS336Group66');
?>
<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
	<title>Bar Beer Drinker</title>


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

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


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
								</ul>
							</li>
							<li class="menu-item menu-item-object-page ">
								<a href="features-query.php">SQL QUERY INTERFACE</a>
							</li>
							<li class="menu-item menu-item-object-page ">
								<a href="modification.php">Modification</a>
							</li>
							<li class="menu-item menu-item-object-page ">
								<a href="ER-Diagram.php">ER-Diagram</a>
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
										</ul>
									</li>
									<li class="menu-item menu-item-object-page ">
										<a href="modification.php">Modification</a>
									</li>
									<li class="menu-item menu-item-object-page ">
										<a href="ER-Diagram.php">ER-Diagram</a>
									</li>
									<li class="menu-item menu-item-object-page ">
										<a href="features-query.php">SQL QUERY INTERFACE</a>
									</li>
									<li class="menu-item menu-item-has-children ">
										<a href="#">About us</a>
										<ul class="sub-menu">
											<li class="menu-item menu-item-object-page ">
												<a href="about-us-about-us.html">About us</a>
											</li>
											<li class="menu-item ">
												<a href="about-us-bartender.html">Bartender&#8217;s Page</a>
											</li>
										</ul>
									</li>

									<li class="menu-item menu-item-object-page ">
										<a href="contacts.html">Contacts</a>
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

				<div class="container">
					<div class="table-responsive">
						<?php include 'features-BeerPage-include.php';?>
					</div>
				</div>


				<div class="container">
					<h3 class="page_subtitle">Bars where this beer sells the most</h3>
					<h3 class="page_subtitle">Please Enter a Beer Name in the Following Text Area</h3>
					<form action="features-BeerPage.php" method="post">

						<input style="    width: 100%;
						padding: 12px 20px;
						margin: 8px 0;
						box-sizing: border-box;
						border: 2px solid black;
						border-radius: 4px;
						"type="text" placeholder="Please Enter the Item Name"
						value="<?php echo $inputBeer1;?>" name="inputBeer1" />


						<button type="submit" title="Start type" name="typedBeer1">Submit</button>
					</form>
					<?php
					if (isset($_POST['typedBeer1'])) {
						$beer1=$_POST['inputBeer1'];
						$query1 = "SELECT BILL.License, COUNT(BILL.License) AS TotalAmount
						FROM BarBeerDrinker.BILL
						LEFT JOIN BarBeerDrinker.Transaction ON BILL.BillID=Transaction.BillID
						LEFT JOIN BarBeerDrinker.Sells ON Transaction.ItemID=Sells.ItemID
						WHERE Sells.Item = '$beer1'
						GROUP BY BILL.License
						LIMIT 10";
						$result1 = mysqli_query($db, $query1);
					}
					?>
					<div class="container">
						<?php
						if (!$result1) {
								        // the query failed and debugging is enabled
							echo "<p>There was an error in query: $query1</p>";
							echo $mysqli->error;
						}
						?>
					</div>
					<script type="text/javascript" src="loder.js"></script>
					<script type="text/javascript">
						google.charts.load('current', {'packages':['corechart']});

						google.charts.setOnLoadCallback(drawChart);
						function drawChart(){
							var data = new google.visualization.DataTable();
							var data = google.visualization.arrayToDataTable([
								['License','TotalAmount'],
								<?php
								while($row = mysqli_fetch_assoc($result1)){
									echo "['".$row["License"]."', ".$row["TotalAmount"]."],";
								}
								?>
								]);

							var options = {
								title: 'Bar graph of top bars where this beer sells the most.',
								curveType: 'function',
								legend: { position: 'bottom' }
							};

							var chart = new google.visualization.BarChart(document.getElementById('Barchart1'));
							chart.draw(data, options);

						}

					</script>
					<div id="Barchart1" style="width: 900px; height: 400px"></div>
				</div>


				<div class="container">
					<h3 class="page_subtitle">Drinkers who are the biggest consumers of this beer </h3>
					<h3 class="page_subtitle">Please Enter a Beer Name in the Following Text Area</h3>
					<form action="features-BeerPage.php" method="post">

						<input style="    width: 100%;
						padding: 12px 20px;
						margin: 8px 0;
						box-sizing: border-box;
						border: 2px solid black;
						border-radius: 4px;
						"type="text" placeholder="Please Enter the Beer Name"
						value="<?php echo $inputBeer2;?>" name="inputBeer2" />


						<button type="submit" title="Start type" name="typedBeer2">Submit</button>
					</form>
					<?php
					if (isset($_POST['typedBeer2'])) {
						$beer2=$_POST['inputBeer2'];
						$query2 = "SELECT DRINKER.Name, COUNT(BILL.SSN) AS TotalAmount
						FROM BarBeerDrinker.BILL
						LEFT JOIN BarBeerDrinker.Transaction ON BILL.BillID=Transaction.BillID
						LEFT JOIN BarBeerDrinker.Sells ON Transaction.ItemID = Sells.ItemID
						LEFT JOIN BarBeerDrinker.DRINKER ON BILL.SSN = DRINKER.SSN
						WHERE Sells.Item = '$beer2'
						GROUP BY BILL.SSN
						ORDER BY TotalAmount DESC
						LIMIT 10";
						$result2 = mysqli_query($db, $query2);
					}
					?>
					<div class="container">
						<?php
						if (!$result2) {
								        // the query failed and debugging is enabled
							echo "<p>There was an error in query: $query1</p>";
							echo $mysqli->error;
						}
						?>
					</div>
					<script type="text/javascript" src="loder.js"></script>
					<script type="text/javascript">
						google.charts.load('current', {'packages':['corechart']});

						google.charts.setOnLoadCallback(drawChart);
						function drawChart(){
							var data = new google.visualization.DataTable();
							var data = google.visualization.arrayToDataTable([
								['Name','TotalAmount'],
								<?php
								while($row = mysqli_fetch_assoc($result2)){
									echo "['".$row["Name"]."', ".$row["TotalAmount"]."],";
								}
								?>
								]);

							var options = {
								title: 'Drinkers who are the biggest consumers of this beer.',
								curveType: 'function',
								legend: { position: 'bottom' }
							};

							var chart = new google.visualization.BarChart(document.getElementById('Barchart2'));
							chart.draw(data, options);

						}

					</script>
					<div id="Barchart2" style="width: 900px; height: 400px"></div>
				</div>

				<div class="container">
					<?php include 'features-BeerPage-Time-Distribution.php';?>
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
								+1(929)217-4708<br>
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
