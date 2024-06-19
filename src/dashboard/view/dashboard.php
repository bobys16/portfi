<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Portfi Member Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="/logo.png" type="image/x-icon">

    <!-- ================== BEGIN core-css ================== -->
    <link href="/dashboard/assets/css/vendor.min.css" rel="stylesheet" />
    <link href="/dashboard/assets/css/style.min.css" rel="stylesheet" />
    <!-- ================== END core-css ================== -->
    <!-- ================== START datatable ================== -->
    <link href="/dashboard/assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="/dashboard/assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css"
        rel="stylesheet" />
    <link href="/dashboard/assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css"
        rel="stylesheet" />
    <!-- ================== END datatable ================== -->

    <!-- ================== BEGIN page-css ================== -->
    <link href="/dashboard/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
    <link href="assets/plugins/photoswipe/dist/photoswipe.css" rel="stylesheet">
    <!-- ================== END page-css ================== -->

</head>

<body class="d-flex flex-column min-vh-100">
    <div id="app" class="app">
        <div id="loader" style="background-color: #09152F;position: fixed;z-index: 10000;display: block;width: 100vw;height: 100vh;top: 0;left: 0;">
        <img src="assets/images/login.png" style="width: 100%; height: auto; display: block; position: absolute; top: 50%; right: 50%;transform: translate(50%,-50%); max-width: 400px;">
    </div>
        <!-- BEGIN #header -->
        <div id="header" class="app-header">
            <!-- BEGIN mobile-toggler -->
            <div class="mobile-toggler">
                <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled"
                    data-toggle-target=".app">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
            <!-- END mobile-toggler -->

            <!-- BEGIN desktop-toggler -->
            <div class="desktop-toggler">
                <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed"
                    data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
            <!-- BEGIN desktop-toggler -->

            <!-- BEGIN menu -->
            <div class="menu">
                <div class="menu-item dropdown dropdown-mobile-full">
                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                        <div class="menu-img online">
                            <img src="/logo.png" alt="Profile" height="60" />
                        </div>
                        
                    </a>
                    <div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
                        <a style="display:none;" id="isCreated" view="true" path="Features">a</a>
                        <a class="dropdown-item d-flex align-items-center" view="true" path="profile">PROFILE <i
                                class="bi bi-person-circle ms-auto text-theme fs-16px my-n1"></i></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center" href="logout">LOGOUT <i
                                class="bi bi-lock ms-auto text-theme fs-16px my-n1"></i></a>
                    </div>
                </div>
            </div>
            <!-- END menu -->
        </div>
        <!-- END #header -->

        <!-- BEGIN #sidebar -->
        <div id="sidebar" class="app-sidebar">
            <!-- BEGIN scrollbar -->
            <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
                <!-- BEGIN menu -->
                <div class="menu">
                    <div class="menu-header">Navigation</div>
                    <div class="menu-item">
                        <a href="" class="menu-link">
                            <span class="menu-icon"><i class="bi bi-cpu"></i></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </div>
                    <div class="menu-item has-sub">
						<a href="#" class="menu-link">
							<span class="menu-icon">
								<i class="bi bi-person-check-fill"></i>
							</span>
							<span class="menu-text">Member Menu</span>
							<span class="menu-caret"><b class="caret"></b></span>
						</a>
						<div class="menu-submenu">
						<div
                            class="menu-item">
                            <a href="javascript:void(0);" view="true" path="infoPorto" class="menu-link">
                                <span class="menu-text">Base Info</span>
                            </a>
                        </div>
                        <div
                            class="menu-item">
                            <a href="javascript:void(0);" view="true" path="detailPorto" class="menu-link">
                                <span class="menu-text">Porto Detail</span>
                            </a>
                        </div>
                        <div
                            class="menu-item">
                            <a href="javascript:void(0);" view="true" path="workList" class="menu-link">
                                <span class="menu-text">Work Experience</span>
                            </a>
                        </div>
                        <div
                            class="menu-item">
                            <a href="javascript:void(0);" view="true" path="skillList" class="menu-link">
                                <span class="menu-text">Skill</span>
                            </a>
                        </div>
                        <div
                            class="menu-item">
                            <a href="javascript:void(0);" view="true" path="educationList" class="menu-link">
                                <span class="menu-text">Education</span>
                            </a>
                        </div>
                        <div
                            class="menu-item">
                            <a href="javascript:void(0);" view="true" path="portoList" class="menu-link">
                                <span class="menu-text">Portofolio</span>
                            </a>
                        </div>
                        <div
                            class="menu-item">
                            <a href="javascript:void(0);" view="true" path="serviceList" class="menu-link">
                                <span class="menu-text">Service</span>
                            </a>
                        </div>
                        <div
                            class="menu-item">
                            <a href="javascript:void(0);" view="true" path="socialPorto" class="menu-link">
                                <span class="menu-text">Porto Social Media</span>
                            </a>
                        </div>
						</div>
					</div>
                    <div
                        class="menu-item">
                        <a href="#" target="_blank" class="menu-link">
                            <span class="menu-icon"><i class="bi bi-discord"></i></span>
                            <span class="menu-text">Discord</span>
                        </a>
                    </div>
                    <div
                        class="menu-item">
                        <a href="logout" class="menu-link">
                            <span class="menu-icon"><i class="bi bi-lock"></i></span>
                            <span class="menu-text">Logout</span>
                        </a>
                    </div>
                </div>
                <!-- END menu -->
            </div>
            <!-- END scrollbar -->
        </div>
        <!-- END #sidebar -->

        <!-- BEGIN mobile-sidebar-backdrop -->
        <button class="app-sidebar-mobile-backdrop" data-toggle-target=".app"
            data-toggle-class="app-sidebar-mobile-toggled"></button>
        <!-- END mobile-sidebar-backdrop -->

        <!-- BEGIN #content -->
        <div id="content" class="app-content" content-loader="true">

        <div class="row">
        	<!-- begin webticker -->
        	<div class="col-12">
        		<div class="card mb-3">
        			<div class="card-body tickers-block">
        				<ul id="webTicker">
        					<li>
        						<i class="cc BTC"></i><span class="text-theme"> Welcome to Portfi.online, Here you can modified your portofolio and do something on it. this is Alpha Version, if you find any problem or difficulty using our services, please dont hesitate to contact us!</span>
        					</li>
        					
        				</ul>
        			</div>
        			<!-- BEGIN card-arrow -->
        			<div class="card-arrow">
        				<div class="card-arrow-top-left"></div>
        				<div class="card-arrow-top-right"></div>
        				<div class="card-arrow-bottom-left"></div>
        				<div class="card-arrow-bottom-right"></div>
        			</div>
        			<!-- END card-arrow -->
        		</div>
        		
        	</div>
        	<!-- end webticker -->
        
        	<!-- BEGIN card -->
        	<!-- BEGIN col-3 -->
        	<div class="col-lg-6">
        		<!-- BEGIN card -->
        		<div class="card mb-3 h-70">
        			<!-- BEGIN card-body -->
        			<div class="card-body">
        				<!-- BEGIN title -->
        				<div class="d-flex fw-bold small mb-4">
        					<span class="flex-grow-1 fs-16px text-theme">Total Visitor</span>
        					<a href="javascript:void(0);"
        						class="text-white text-opacity-50 text-decoration-none"><i
        							class="bi bi-person-badge"></i></a>
        				</div>
        				<!-- END title -->
        
        				<!-- BEGIN body -->
        				<div class="row align-items-center">
        					<div class="col-7">
        						<h3 class="mb-0">0</h3>
        					</div>
        					<div class="col-5 d-flex justify-content-end">
        						<button type="button" data-bs-toggle="modal" data-bs-target="#modalip" class="btn btn-outline-theme">Porto Detail</button>
        					</div>
        				</div>
        				<!-- END body -->
        			</div>
        			<!-- END card-body -->
                    <!-- modal-sm -->


                <div class="modal fade" id="modalSm">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      ...
                    </div>
                  </div>
                </div>
        			<!-- BEGIN card-arrow -->
        			<div class="card-arrow">
        				<div class="card-arrow-top-left"></div>
        				<div class="card-arrow-top-right"></div>
        				<div class="card-arrow-bottom-left"></div>
        				<div class="card-arrow-bottom-right"></div>
        			</div>
        			<!-- END card-arrow -->
        		</div>
        		<!-- END card -->
        	</div>
        	<div class="col-lg-6">
        		<!-- BEGIN card -->
        		<div class="card mb-3 h-70">
        			<!-- BEGIN card-body -->
        			<div class="card-body">
        				<!-- BEGIN title -->
        				<div class="d-flex fw-bold small mb-4">
        					<span class="flex-grow-1 fs-16px text-theme">Total Testimonial</span>
        					<a href="javascript:void(0);"
        						class="text-white text-opacity-50 text-decoration-none"><i
        							class="bi bi-person-badge"></i></a>
        				</div>
        				<!-- END title -->
        
        				<!-- BEGIN body -->
        				<div class="row align-items-center">
        					<div class="col-7">
        						<h3 class="mb-0">0</h3>
        					</div>
        					<div class="col-5 d-flex justify-content-end">
        						<button type="button" data-bs-toggle="modal" data-bs-target="#modalcomingsoon" class="btn btn-outline-theme">Ngeri ga c?</button>
        					</div>
        				</div>
        				<!-- END body -->
        			</div>
        			<!-- END card-body -->
                    <!-- modal-sm -->


                <div class="modal fade" id="modalSm">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      ...
                    </div>
                  </div>
                </div>
        			<!-- BEGIN card-arrow -->
        			<div class="card-arrow">
        				<div class="card-arrow-top-left"></div>
        				<div class="card-arrow-top-right"></div>
        				<div class="card-arrow-bottom-left"></div>
        				<div class="card-arrow-bottom-right"></div>
        			</div>
        			<!-- END card-arrow -->
        		</div>
        		<!-- END card -->
        	</div>

        </div>

        </div>
        <!-- END #content -->

        <!-- BEGIN btn-scroll-top -->
        <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade mb-5 mb-md-0"><i
                class="fa fa-arrow-up"></i></a>
        <!-- END btn-scroll-top -->

        <!-- START Modal Coming Soon -->
        <div class="modal modal-cover fade" id="modalComingSoon">
            <div class="modal-dialog">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <h1 class="text-theme mb-5">COMING SOON</h1>
                        <button type="button" class="btn btn-outline-theme" class="btn-close"
                            data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        
        
         <div class="modal modal-cover fade" id="modalip">
            <div class="modal-dialog">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <h1 class="text-theme mb-5">Link will be here</h1>
                        <button type="button" class="btn btn-outline-theme" class="btn-close"
                            data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
         <!-- START Modal Coming Soon -->
        <div class="modal modal-cover fade" id="modalCreate">
            <div class="modal-dialog">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <h1 class="text-theme mb-5">Anda Bisa Membuat Character didalam Game!</h1>
                        <button type="button" class="btn btn-outline-theme" class="btn-close"
                            data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Modal Coming Soon -->
    </div>
    <!-- END #app -->
    <div id="footer mb-md-5" class="app-footer d-flex flex-row justify-content-between mt-auto">
        <div class="">© 2024 <a href="#" class="text-decoration-none">Portfi Dev.</a> All
            Rights Reserved.</div>
        <div class="me-5"><a href="javascript:void(0):" view="true" path="faq" class="text-decoration-none">FAQ</a></div>
    </div>
    <div class="modal modal-cover fade" id="modalComingSoon">
		<div class="modal-dialog">
			<div class="modal-content text-center">
				<div class="modal-body">
					<h1 class="text-theme mb-5">COMING SOON</h1>
					<button type="button" class="btn btn-outline-theme" class="btn-close"
						data-bs-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>
	

    <!-- ================== BEGIN core-js ================== -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <!-- ================== END core-js ================== -->

    <!-- ================== Start webticker ================== -->
    <script src="assets/js/webticker.js"></script>

    <script>
        $('#webTicker').webTicker();
    </script>
    <!-- ================== END webticker ================== -->

    <!-- ================== START datatable ================== -->
    <script src="assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
    <script src="//cdn.datatables.net/plug-ins/1.13.5/sorting/natural.js"></script>
    <script type="module" src="https://unpkg.com/@github/relative-time-element@latest/dist/bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="index.js?id=<?= time();?>"></script>
    <script>
    bind_form(); 
    bind_view();
    </script>
    <?php
    // Assuming $user['is_created'] holds the value you want to check
    $isCreated = $user['is_created'];
    
    // Check if $user['is_created'] is less than 1
    if ($isCreated < 1) {
        // Echo JavaScript code to click the button
        echo '<script>
                $(window).on("load", function() {
                    $("#isCreated").click();
                });
              </script>';
    }
    ?>
    <script>

     function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
            bind_view();
            $("#viewcr").click();
        }
        $('#datatableDefault').DataTable({
            // dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-end'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center'<'me-auto'i><'mb-0'p>>",
            lengthMenu: [10, 20, 30, 40, 50],
            responsive: true
        });
        $('#datatableDefault1').DataTable({
            // dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-end'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center'<'me-auto'i><'mb-0'p>>",
            columnDefs: [
                { type: 'natural', targets: 0 }
            ],
            lengthMenu: [10, 20, 30, 40, 50],
            responsive: true
        });
    </script>
    <!-- ================== END datatable ================== -->
</body>

</html>
