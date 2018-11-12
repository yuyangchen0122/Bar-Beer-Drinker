<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
	<title>Best 336 Bar Project</title>


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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />

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
								</ul>
							</li>
							<li class="menu-item menu-item-object-page ">
								<a href="features-query.php">SQL QUERY INTERFACE</a>
							</li>
							<li class="menu-item menu-item-object-page ">
								<a href="modification.php">Modification</a>
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
							<div class="breadcrumbs"><a class="breadcrumbs_item home" href="#">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Shortcodes</span>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="table-responsive">
						<?php include 'features-DrinkerPage-include.php';?>
					</div>
				</div>

				<div class="container">
					<h3 class="page_title">All his/her transactions ordered by time and grouped by different bars.</h1>
						<h3 class="page_subtitle">Please Enter a Drinker Name in the Following Text Area</h3>

						<form action="features-DrinkerPage.php" method="POST">

							<input type="text" style="width: 100%;
							padding: 12px 20px;
							margin: 8px 0;
							box-sizing: border-box;
							border: 2px solid black;
							border-radius: 4px;" placeholder="Please Enter the Drinker Name"
							value="<?php echo $inputDrinker1;?>" name="inputDrinker1" />


							<button type="submit" title="Start type" name="typedDrinker1">Submit</button>
						</form>
						<?php
						$db = mysqli_connect('rucs336group66.cmbbmvtvxryw.us-east-1.rds.amazonaws.com', 'yuyangchen0122', 'a123123q45', 'RUCS336Group66');
						if (isset($_POST['typedDrinker1'])) {
							$person1=$_POST['inputDrinker1'];
							$query1 = "SELECT DRINKER.Name, DRINKER.SSN, BILL.BillID, BILL.Time, BILL.Date, Transaction.TransactionID, Transaction.ItemID, Sells.Item, Sells.Price, BAR.Bar, BAR.License,UNIX_TIMESTAMP(CONCAT_WS(' ', Date, Time)) AS datetime
							FROM BarBeerDrinker.DRINKER
							LEFT JOIN BarBeerDrinker.BILL ON DRINKER.SSN = BILL.SSN
							LEFT JOIN BarBeerDrinker.Transaction ON BILL.BILLID = Transaction.BillID
							LEFT JOIN BarBeerDrinker.Sells ON Transaction.ItemID = Sells.ItemID
							LEFT JOIN BarBeerDrinker.BAR ON Transaction.License = BAR.License
							WHERE DRINKER.Name = '$person1'
							ORDER BY datetime;";

							$result1 = mysqli_query($db, $query1);
							?>

							<div class="table-responsive">
								<table id="drinker_data1" class="table table-striped table-bordered">
									<thead class="thead-dark">
										<tr>
											<th scope="col">DrinkerName</th>
											<th scope="col">SSN</th>
											<th scope="col">BillID</th>
											<th scope="col">Time</th>
											<th scope="col">Date</th>
											<th scope="col">TransactionID</th>
											<th scope="col">ItemID</th>
											<th scope="col">Item</th>
											<th scope="col">Price</th>
											<th scope="col">Bar</th>
											<th scope="col">License</th>
											<th scope="col">datatime</th>


										</tr>
									</thead>

									<?php
									while($row = mysqli_fetch_array($result1))
									{
										echo '
										<tr>
										<td>'.$row["Name"].'</td>
										<td>'.$row["SSN"].'</td>
										<td>'.$row["BillID"].'</td>
										<td>'.$row["Time"].'</td>
										<td>'.$row["Date"].'</td>
										<td>'.$row["TransactionID"].'</td>
										<td>'.$row["ItemID"].'</td>
										<td>'.$row["Item"].'</td>
										<td>'.$row["Price"].'</td>
										<td>'.$row["Bar"].'</td>
										<td>'.$row["License"].'</td>
										<td>'.$row["datetime"].'</td>
										</tr>
										';
									}
								}
								?>
							</table>
						</div>

					</div>

					<div class="container">
						<h3 class="page_title">Bar graphs of beers s/he orders the most</h1>
							<h3 class="page_subtitle">Please Enter a Drinker Name in the Following Text Area</h3>
							<form action="features-DrinkerPage.php" method="post">

								<input style="    width: 100%;
								padding: 12px 20px;
								margin: 8px 0;
								box-sizing: border-box;
								border: 2px solid black;
								border-radius: 4px;
								"type="text" placeholder="Please Enter the Drinker Name"
								value="<?php echo $person2;?>" name="inputDrinker2" />


								<button type="submit" title="Start type" name="typedDrinker2">Submit</button>
							</form>
							<?php
							$db = mysqli_connect('rucs336group66.cmbbmvtvxryw.us-east-1.rds.amazonaws.com', 'yuyangchen0122', 'a123123q45', 'RUCS336Group66');
							if (isset($_POST['typedDrinker2'])) {
								$person2=$_POST['inputDrinker2'];
								$query2 = "SELECT Items.Item, COUNT(Category) AS AmountOfBeer
								FROM BarBeerDrinker.Transaction
								LEFT JOIN BarBeerDrinker.BILL ON BILL.BillID = Transaction.TransactionID
								LEFT JOIN BarBeerDrinker.DRINKER ON BILL.SSN = DRINKER.SSN
								LEFT JOIN BarBeerDrinker.BAR ON BILL.License = BAR.License
								LEFT JOIN BarBeerDrinker.Sells ON BAR.License = Sells.License
								LEFT JOIN BarBeerDrinker.Items ON Sells.Item = Items.Item
								WHERE DRINKER.Name = '$person2' AND Items.Category = 'beer'
								GROUP BY Items.Item;";
								$result2 = mysqli_query($db, $query2);
							}
							?>
							<script type="text/javascript" src="loder.js"></script>
							<script type="text/javascript">
							google.charts.load('current', {'packages':['corechart']});

							google.charts.setOnLoadCallback(drawChart);
							function drawChart(){
								var data = new google.visualization.DataTable();
								var data = google.visualization.arrayToDataTable([
									['Item','AmountOfBeer'],
									<?php
									while($row = mysqli_fetch_assoc($result2)){
										echo "['".$row["Item"]."', ".$row["AmountOfBeer"]."],";
									}
									?>
								]);

								var options = {
									title: 'Bar graphs of beers s/he orders the most',
									curveType: 'function',
									legend: { position: 'bottom' }
								};

								var chart = new google.visualization.ColumnChart(document.getElementById('Barchart1'));
								chart.draw(data, options);
							}

						</script>
						<div id="Barchart1" style="width: 900px; height: 400px"></div>
					</div>

					<div class="container">
						<h3 class="page_subtitle">Bar graph of his/her spending in different bars, on different dates/weeks/months</h3>
							<h3 class="page_subtitle">Please Enter a Drinker Name in the Following Text Area</h3>
							<form action="features-DrinkerPage.php" method="post">

								<input style="    width: 100%;
								padding: 12px 20px;
								margin: 8px 0;
								box-sizing: border-box;
								border: 2px solid black;
								border-radius: 4px;
								"type="text" placeholder="Please Enter the Drinker Name"
								value="<?php echo $person3;?>" name="inputDrinker3" />


								<button type="submit" title="Start type" name="typedDrinker3">Submit</button>
							</form>
							<?php
							$db = mysqli_connect('rucs336group66.cmbbmvtvxryw.us-east-1.rds.amazonaws.com', 'yuyangchen0122', 'a123123q45', 'RUCS336Group66');
							if (isset($_POST['typedDrinker3'])) {
								$person3=$_POST['inputDrinker3'];
								$query3 = "SELECT BAR.Bar, SUM(Sells.Price) AS TotalAmount, BILL.Date, BILL.Time
													 FROM BarBeerDrinker.Transaction
												   LEFT JOIN BarBeerDrinker.BILL ON BILL.BillID=Transaction.TransactionID
													 LEFT JOIN BarBeerDrinker.DRINKER ON BILL.SSN = DRINKER.SSN
													 LEFT JOIN BarBeerDrinker.BAR ON BILL.License = BAR.License
													 LEFT JOIN BarBeerDrinker.Sells ON Transaction.ItemID = Sells.ItemID
													 WHERE DRINKER.Name = '$person3'
													 GROUP BY BILL.Date";
								$result3 = mysqli_query($db, $query3);
							}
								?>
								<script type="text/javascript" src="loder.js"></script>
								<script type="text/javascript">
								google.charts.load('current', {'packages':['corechart']});

								google.charts.setOnLoadCallback(drawChart);
								function drawChart(){
									var data = new google.visualization.DataTable();
									var data = google.visualization.arrayToDataTable([
										['Bar','TotalAmount'],
										<?php
										while($row = mysqli_fetch_assoc($result3)){
											echo "['".$row["Bar"]."', ".$row["TotalAmount"]."],";
										}
										?>
									]);

									var options = {
										title: 'Bar graph of his/her spending in different bars, on different dates/weeks/months.',
										curveType: 'function',
										legend: { position: 'bottom' }
									};

									var chart = new google.visualization.BarChart(document.getElementById('Barchart2'));
									chart.draw(data, options);

							}

						</script>
						<div id="Barchart2" style="width: 900px; height: 400px"></div>
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
		<script>
		$(document).ready(function(){
			$('#drinker_data1').DataTable();
		});
	</script>
