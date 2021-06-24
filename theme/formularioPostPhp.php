
<?php 
    if (isset($_POST["apellido"]) && !empty($_POST["nombre"]))
    {
    
            $post = [
                'apellido' => $_POST["apellido"],
                'nombre' => $_POST["nombre"],
                
            ];
            $ch = curl_init();
    
            curl_setopt($ch, CURLOPT_URL,"http://localhost/ejemplo/dataapp/apiCliente/Cliente/insertarCliente");
            //curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_VERBOSE, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
    
    
            // receive server response ...
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
            $response = curl_exec ($ch);
    
           	echo $response;
            $soporte = json_decode($response,true);
    
    
            $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
                    
            curl_close ($ch);
    
    }
    
?>
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Blank Page | KingAdmin - Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="KingAdmin - Bootstrap Admin Dashboard Theme">
	<meta name="author" content="The Develovers">
	<meta http-equiv="Pragma" content="no-cache">
	<!-- CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/main.css" rel="stylesheet" type="text/css">
	<link href="assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">
	<!--[if lte IE 9]>
		<link href="assets/css/main-ie.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/main-ie-part2.css" rel="stylesheet" type="text/css"/>
	<![endif]-->
	
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/kingadmin-favicon144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/kingadmin-favicon114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/kingadmin-favicon72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/ico/kingadmin-favicon57x57.png">
	<link rel="shortcut icon" href="assets/ico/favicon.png">
</head>

<body class="sidebar-fixed topnav-fixed demo-only-page-blank">
	<!-- WRAPPER -->
	<div id="wrapper" class="wrapper">
		<!-- TOP BAR -->
		<div class="top-bar navbar-fixed-top">
			<div class="container">
				<div class="clearfix">
					<a href="#" class="pull-left toggle-sidebar-collapse"><i class="fa fa-bars"></i></a>
					<!-- logo -->
					<div class="pull-left left logo">
						<a href="index.html"><img src="assets/img/kingadmin-logo-white.png" alt="KingAdmin - Admin Dashboard" /></a>
						<h1 class="sr-only">KingAdmin Admin Dashboard</h1>
					</div>
					<!-- end logo -->
					<div class="pull-right right">
						<!-- search box -->
						<div class="searchbox">
							<div id="tour-searchbox" class="input-group">
								<input type="search" class="form-control" placeholder="enter keyword here...">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
						<!-- end search box -->
						<!-- top-bar-right -->
						<div class="top-bar-right">
							<button type="button" id="start-tour" class="btn btn-link"><i class="fa fa-refresh"></i> Start Tour</button>
							<button type="button" id="global-volume" class="btn btn-link btn-global-volume"><i class="fa"></i></button>
							<div class="notifications">
								<ul>
									<!-- notification: inbox -->
									<li class="notification-item inbox">
										<div class="btn-group">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="fa fa-envelope"></i><span class="count">2</span>
												<span class="circle"></span>
											</a>
											<ul class="dropdown-menu" role="menu">
												<li class="notification-header">
													<em>You have 2 unread messages</em>
												</li>
												<li class="inbox-item clearfix">
													<a href="#">
														<div class="media">
															<div class="media-left">
																<img class="media-object" src="assets/img/user1.png" alt="Antonio">
															</div>
															<div class="media-body">
																<h5 class="media-heading name">Antonius</h5>
																<p class="text">The problem just happened this morning. I can't see ...</p>
																<span class="timestamp">4 minutes ago</span>
															</div>
														</div>
													</a>
												</li>
												<li class="inbox-item unread clearfix">
													<a href="#">
														<div class="media">
															<div class="media-left">
																<img class="media-object" src="assets/img/user2.png" alt="Antonio">
															</div>
															<div class="media-body">
																<h5 class="media-heading name">Michael</h5>
																<p class="text">Hey dude, cool theme!</p>
																<span class="timestamp">2 hours ago</span>
															</div>
														</div>
													</a>
												</li>
												<li class="inbox-item unread clearfix">
													<a href="#">
														<div class="media">
															<div class="media-left">
																<img class="media-object" src="assets/img/user3.png" alt="Antonio">
															</div>
															<div class="media-body">
																<h5 class="media-heading name">Stella</h5>
																<p class="text">Ok now I can see the status for each item. Thanks! :D</p>
																<span class="timestamp">Oct 6</span>
															</div>
														</div>
													</a>
												</li>
												<li class="inbox-item clearfix">
													<a href="#">
														<div class="media">
															<div class="media-left">
																<img class="media-object" src="assets/img/user4.png" alt="Antonio">
															</div>
															<div class="media-body">
																<h5 class="media-heading name">Jane Doe</h5>
																<p class="text"><i class="fa fa-reply"></i> Please check the status of your ...</p>
																<span class="timestamp">Oct 2</span>
															</div>
														</div>
													</a>
												</li>
												<li class="inbox-item clearfix">
													<a href="#">
														<div class="media">
															<div class="media-left">
																<img class="media-object" src="assets/img/user5.png" alt="Antonio">
															</div>
															<div class="media-body">
																<h5 class="media-heading name">John Simmons</h5>
																<p class="text"><i class="fa fa-reply"></i> I've fixed the problem :)</p>
																<span class="timestamp">Sep 12</span>
															</div>
														</div>
													</a>
												</li>
												<li class="notification-footer">
													<a href="#">View All Messages</a>
												</li>
											</ul>
										</div>
									</li>
									<!-- end notification: inbox -->
									<!-- notification: general -->
									<li class="notification-item general">
										<div class="btn-group">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="fa fa-bell"></i><span class="count">8</span>
												<span class="circle"></span>
											</a>
											<ul class="dropdown-menu" role="menu">
												<li class="notification-header">
													<em>You have 8 notifications</em>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-comment green-font"></i>
														<span class="text">New comment on the blog post</span>
														<span class="timestamp">1 minute ago</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-user green-font"></i>
														<span class="text">New registered user</span>
														<span class="timestamp">12 minutes ago</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-comment green-font"></i>
														<span class="text">New comment on the blog post</span>
														<span class="timestamp">18 minutes ago</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-shopping-cart red-font"></i>
														<span class="text">4 new sales order</span>
														<span class="timestamp">4 hours ago</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-edit yellow-font"></i>
														<span class="text">3 product reviews awaiting moderation</span>
														<span class="timestamp">1 day ago</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-comment green-font"></i>
														<span class="text">New comment on the blog post</span>
														<span class="timestamp">3 days ago</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-comment green-font"></i>
														<span class="text">New comment on the blog post</span>
														<span class="timestamp">Oct 15</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-warning red-font"></i>
														<span class="text red-font">Low disk space!</span>
														<span class="timestamp">Oct 11</span>
													</a>
												</li>
												<li class="notification-footer">
													<a href="#">View All Notifications</a>
												</li>
											</ul>
										</div>
									</li>
									<!-- end notification: general -->
								</ul>
							</div>
							<!-- logged user and the menu -->
							<div class="logged-user">
								<div class="btn-group">
									<a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
										<img src="assets/img/user-avatar.png" alt="User Avatar" />
										<span class="name">Stacy Rose</span> <span class="caret"></span>
									</a>
									<ul class="dropdown-menu" role="menu">
										<li>
											<a href="#">
												<i class="fa fa-user"></i>
												<span class="text">Profile</span>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-cog"></i>
												<span class="text">Settings</span>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-power-off"></i>
												<span class="text">Logout</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- end logged user and the menu -->
						</div>
						<!-- end top-bar-right -->
					</div>
				</div>
			</div>
			<!-- /container -->
		</div>
		<!-- END TOP BAR -->
		<!-- LEFT SIDEBAR -->
		<div id="left-sidebar" class="left-sidebar ">
			<!-- main-nav -->
			<div class="sidebar-scroll">
				<nav class="main-nav">
					<ul class="main-menu">
						<li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-dashboard fa-fw"></i><span class="text">Dashboard</span>
							<i class="toggle-icon fa fa-angle-left"></i></a>
							<ul class="sub-menu ">
								<li><a href="index.html"><span class="text">Dashboard v1</span></a></li>
								<li><a href="index-transparent.html"><span class="text">Dashboard v1 Transp.</span></a></li>
								<li><a href="index-dashboard-v2.html"><span class="text">Dashboard v2</span></a></li>
								<li><a href="index-dashboard-v2-transparent.html"><span class="text">Dashboard v2 Trans.</span></a></li>
								<li><a href="index-dashboard-v3.html"><span class="text">Dashboard v3</span></a></li>
								<li><a href="index-dashboard-v4.html"><span class="text">Dashboard v4 <span class="badge element-bg-color-blue">New</span></span></a></li>
							</ul>
						</li>
						<li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-navicon"></i><span class="text">Navigations <span class="badge element-bg-color-blue">New</span></span>
							<i class="toggle-icon fa fa-angle-left"></i></a>
							<ul class="sub-menu ">
								<li><a href="nav-default-fixed.html"><span class="text">Default Fixed Sidebar</span></a></li>
								<li><a href="nav-normal.html"><span class="text">Normal Sidebar</span></a></li>
							</ul>
						</li>
						<li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-columns"></i><span class="text">Layouts <span class="badge element-bg-color-blue">New</span></span>
							<i class="toggle-icon fa fa-angle-left"></i></a>
							<ul class="sub-menu ">
								<li><a href="layout-collapsed.html"><span class="text">Collapsed Sidebar</span></a></li>
								<li><a href="layout-minified.html"><span class="text">Minified Sidebar</span></a></li>
								<li><a href="layout-ontop-navigation.html"><span class="text">On-Top Navigation</span></a></li>
							</ul>
						</li>
						<li class="active"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-clipboard fa-fw"></i><span class="text">Pages</span>
							<i class="toggle-icon fa fa-angle-down"></i></a>
							<ul class="sub-menu open">
								<li><a href="page-profile.html"><span class="text">Profile</span></a></li>
								<li><a href="page-invoice.html"><span class="text">Invoice</span></a></li>
								<li><a href="page-knowledgebase.html"><span class="text">Knowledge Base</span></a></li>
								<li><a href="page-new-message.html"><span class="text">New Message</span></a></li>
								<li><a href="page-view-message.html"><span class="text">View Message</span></a></li>
								<li><a href="page-search-result.html"><span class="text">Search Result</span></a></li>
								<li><a href="page-submit-ticket.html"><span class="text">Submit Ticket</span></a></li>
								<li><a href="page-faq.html"><span class="text">FAQ</span></a></li>
								<li><a href="page-register.html"><span class="text">Register</span></a></li>
								<li><a href="page-register-transparent.html"><span class="text">Register Transparent</span></a></li>
								<li><a href="page-login.html"><span class="text">Login</span></a></li>
								<li><a href="page-login-transparent.html"><span class="text">Login Transparent</span></a></li>
								<li><a href="page-404.html"><span class="text">404</span></a></li>
								<li><a href="page-404-transparent.html"><span class="text">404 Transparent</span></a></li>
								<li class="active"><a href="page-blank.html"><span class="text">Blank Page</span></a></li>
							</ul>
						</li>
						<li><a href="page-inbox.html"><i class="fa fa-envelope-o"></i><span class="text">Inbox <span class="badge red-bg">32</span></span></a></li>
						<li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-file"></i><span class="text">File Manager</span>
							<i class="toggle-icon fa fa-angle-left"></i></a>
							<ul class="sub-menu ">
								<li><a href="page-file-manager.html"><span class="text">Default</span></a></li>
								<li><a href="page-file-manager-transparent.html"><span class="text">Transparent</span></a></li>
							</ul>
						</li>
						<li><a href="page-projects.html"><i class="fa fa-briefcase"></i><span class="text">Projects</span></a></li>
						<li><a href="page-project-detail.html"><i class="fa fa-tasks"></i><span class="text">Project Detail</span></a></li>
						<li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-bar-chart-o fw"></i><span class="text">Charts &amp; Statistics</span>
							<i class="toggle-icon fa fa-angle-left"></i></a>
							<ul class="sub-menu ">
								<li><a href="charts-statistics.html"><span class="text">Charts</span></a></li>
								<li><a href="charts-statistics-transparent.html"><span class="text">Charts Transparent</span></a></li>
								<li><a href="charts-statistics-interactive.html"><span class="text">Interactive Charts</span></a></li>
								<li><a href="charts-statistics-interactive-transparent.html"><span class="text">Interactive Charts Transparent</span></a></li>
								<li><a href="charts-statistics-real-time.html"><span class="text">Realtime Charts</span></a></li>
								<li><a href="charts-statistics-real-time-transparent.html"><span class="text">Realtime Charts Transparent</span></a></li>
								<li><a href="charts-d3charts.html"><span class="text">D3 Charts</span></a></li>
							</ul>
						</li>
						<li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-edit fw"></i><span class="text">Forms</span>
							<i class="toggle-icon fa fa-angle-left"></i></a>
							<ul class="sub-menu ">
								<li><a href="form-inplace-editing.html"><span class="text">In-place Editing</span></a></li>
								<li><a href="form-elements.html"><span class="text">Form Elements</span></a></li>
								<li><a href="form-layouts.html"><span class="text">Form Layouts</span></a></li>
								<li><a href="form-bootstrap-elements.html"><span class="text">Bootstrap Elements</span></a></li>
								<li><a href="form-validations.html"><span class="text">Validation</span></a></li>
								<li><a href="form-file-upload.html"><span class="text">File Upload</span></a></li>
								<li><a href="form-text-editor.html"><span class="text">Text Editor</span></a></li>
							</ul>
						</li>
						<li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-list-alt fw"></i><span class="text">UI Elements</span>
							<i class="toggle-icon fa fa-angle-left"></i></a>
							<ul class="sub-menu ">
								<li><a href="ui-elements-general.html"><span class="text">General Elements</span></a></li>
								<li><a href="ui-elements-tabs.html"><span class="text">Tabs</span></a></li>
								<li><a href="ui-elements-buttons.html"><span class="text">Buttons</span></a></li>
								<li><a href="ui-elements-icons.html"><span class="text">Icons <span class="badge element-bg-color-blue">Updated</span></span></a></li>
								<li><a href="ui-elements-flash-message.html"><span class="text">Flash Message</span></a></li>
							</ul>
						</li>
						<li><a href="widgets.html"><i class="fa fa-puzzle-piece fa-fw"></i><span class="text">Widgets</span></a></li>
						<li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-gears fw"></i><span class="text">Components</span>
							<i class="toggle-icon fa fa-angle-left"></i></a>
							<ul class="sub-menu ">
								<li><a href="components-wizard.html"><span class="text">Wizard (with validation)</span></a></li>
								<li><a href="components-calendar.html"><span class="text">Calendar</span></a></li>
								<li><a href="components-maps.html"><span class="text">Maps</span></a></li>
								<li><a href="components-maps-transparent.html"><span class="text">Maps Transparent</span></a></li>
								<li><a href="components-gallery.html"><span class="text">Gallery</span></a></li>
								<li><a href="components-tree-view.html"><span class="text">Tree View </span></a></li>
								<li><a href="components-tree-view-transparent.html"><span class="text">Tree View Transparent</span></a></li>
							</ul>
						</li>
						<li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-table fw"></i><span class="text">Tables</span>
							<i class="toggle-icon fa fa-angle-left"></i></a>
							<ul class="sub-menu ">
								<li><a href="tables-static-table.html"><span class="text">Static Table</span></a></li>
								<li><a href="tables-dynamic-table.html"><span class="text">Dynamic Table</span></a></li>
							</ul>
						</li>
						<li><a href="typography.html"><i class="fa fa-font fa-fw"></i><span class="text">Typography</span></a></li>
						<li>
							<a href="#" class="js-sub-menu-toggle"><i class="fa fa-bars"></i>
								<span class="text">Menu Lvl 1</span>
								<i class="toggle-icon fa fa-angle-left"></i>
							</a>
							<ul class="sub-menu">
								<li class="">
									<a href="#" class="js-sub-menu-toggle">
										<span class="text">Menu Lvl 2</span>
										<i class="toggle-icon fa fa-angle-left"></i>
									</a>
									<ul class="sub-menu">
										<li><a href="#">Menu Lvl 3</a></li>
										<li><a href="#">Menu Lvl 3</a></li>
										<li><a href="#">Menu Lvl 3</a></li>
									</ul>
								</li>
								<li>
									<a href="#">
										<span class="text">Menu Lvl 2</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- /main-nav -->
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN CONTENT WRAPPER -->
		<div id="main-content-wrapper" class="content-wrapper ">
			<!-- top general alert -->
			<div class="alert alert-danger top-general-alert">
				<span>If you <strong>can't see the logo</strong> on the top left, please reset the style on right style switcher (for upgraded theme only).</span>
				<button type="button" class="close">&times;</button>
			</div>
			<!-- end top general alert -->
			<div class="row">
				<div class="col-lg-4 ">
					<ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#">Home</a></li>
						<li><a href="#">Pages</a></li>
						<li class="active">Blank Page</li>
					</ul>
				</div>
				<div class="col-lg-8 ">
					<div class="top-content">
						<ul class="list-inline quick-access">
							<li>
								<a href="charts-statistics-interactive.html">
									<div class="quick-access-item bg-color-green">
										<i class="fa fa-bar-chart-o"></i>
										<h5>CHARTS</h5><em>basic, interactive, real-time</em>
									</div>
								</a>
							</li>
							<li>
								<a href="page-inbox.html">
									<div class="quick-access-item bg-color-blue">
										<i class="fa fa-envelope"></i>
										<h5>INBOX</h5><em>inbox with gmail style</em>
									</div>
								</a>
							</li>
							<li>
								<a href="tables-dynamic-table.html">
									<div class="quick-access-item bg-color-orange">
										<i class="fa fa-table"></i>
										<h5>DYNAMIC TABLE</h5><em>tons of features and interactivity</em>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- main -->
			<div class="content">
		
		<!--		<div class="main-header">
					<h2>Blank Page</h2>
					<em>an example of blank page</em>
				</div>
				<div class="main-content">
					<form method="post">
            Nombre:<input type="text" id="nombre" name='nombre'><br>
            Apellido:<input type="text" id="apellido" name='apellido'><br>
            <button type="button" id="btn-insert">Insertar</button>
        </form>
	-->
					<div class="widget">
						<div class="widget-header">
							<h3><i class="fa fa-edit"></i> Clientes Form</h3></div>
						<div class="widget-content">

						<?php include("formcliente/form.php");?>
						</div>

						<table id="datatable-column-interactive1" class="table table-sorting table-hover table-bordered datatable">
							<thead>
								<tr>
									<th>Cliente_codigo</th>
									<th>Apellido</th>
									<th>Nombre</th>
								
								</tr>
							</thead>
							<tbody>
							
							</tbody>	
						</table>
						
						<!--<?php include("Datatable/datatablecliente.php");?>-->
					</div>
			</div>
	
			<!-- /main -->
			<!-- FOOTER -->
			<footer class="footer">
				&copy; 2017 The Develovers
			</footer>
			<!-- END FOOTER -->
		</div>
		<!-- END CONTENT WRAPPER -->
	</div>
	<!-- END WRAPPER -->
	
	<!-- Javascript -->
	<script src="assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="assets/js/bootstrap/bootstrap.js"></script>
	<script src="assets/js/plugins/modernizr/modernizr.js"></script>
	<script src="assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
	<script src="assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/king-common.js"></script>
	<script src="assets/js/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="assets/js/plugins/datatable/exts/dataTables.colVis.bootstrap.js"></script>
	<script src="assets/js/plugins/datatable/exts/dataTables.colReorder.min.js"></script>
	<script src="assets/js/plugins/datatable/exts/dataTables.tableTools.min.js"></script>
	<script src="assets/js/plugins/datatable/dataTables.bootstrap.js"></script>
	<script src="datatablepost.js"></script>
	
</body>

</html>
