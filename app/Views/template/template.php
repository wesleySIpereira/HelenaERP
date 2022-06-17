<!doctype html>
<html class="fixed js flexbox flexboxlegacy no-touch csstransforms csstransforms3d no-overflowscrolling gecko linux js no-mobile-device custom-scroll" style=""><head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Blank Page |<?php echo $this->renderSection('titulo') ;?></title>
    <meta name="keywords" content="HTML5 Admin Template">
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/theme/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/theme/vendor/animate/animate.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/theme/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/theme/vendor/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/theme/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/theme/css/theme.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/theme/css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/theme/css/custom.css">

    <!-- Head Libs -->
    <script src="<?php echo base_url(); ?>/theme/vendor/modernizr/modernizr.js"></script>
    <!-- styles person -->
    <?php echo $this->renderSection('estilos') ;?>

</head>
<body>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="../2.2.0" class="logo">
                    <img src="<?php echo base_url(); ?>/theme/img/logo.png" alt="Porto Admin" width="75" height="35">
                </a>
                <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                    <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>
        
            <!-- start: search & user box -->
            <div class="header-right">
        
                
        
                <span class="separator"></span>
        
                <ul class="notifications">
                    <li class="">
                        <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-tasks"></i>
                            <span class="badge">3</span>
                        </a>
        
                        <div class="dropdown-menu notification-menu large" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                            <div class="notification-title">
                                <span class="float-right badge badge-default">3</span>
                                Tasks
                            </div>
        
                            <div class="content">
                                <ul>
                                    <li>
                                        <p class="clearfix mb-1">
                                            <span class="message float-left">Generating Sales Report</span>
                                            <span class="message float-right text-dark">60%</span>
                                        </p>
                                        <div class="progress progress-xs light">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        </div>
                                    </li>
        
                                    <li>
                                        <p class="clearfix mb-1">
                                            <span class="message float-left">Importing Contacts</span>
                                            <span class="message float-right text-dark">98%</span>
                                        </p>
                                        <div class="progress progress-xs light">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                                        </div>
                                    </li>
        
                                    <li>
                                        <p class="clearfix mb-1">
                                            <span class="message float-left">Uploading something big</span>
                                            <span class="message float-right text-dark">33%</span>
                                        </p>
                                        <div class="progress progress-xs light mb-1">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-envelope"></i>
                            <span class="badge">4</span>
                        </a>
        
                        <div class="dropdown-menu notification-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                            <div class="notification-title">
                                <span class="float-right badge badge-default">230</span>
                                Messages
                            </div>
        
                            <div class="content">
                                <ul>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <figure class="image">
                                                <img src="<?php echo base_url(); ?>/theme/img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle">
                                            </figure>
                                            <span class="title">Joseph Doe</span>
                                            <span class="message">Lorem ipsum dolor sit.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <figure class="image">
                                                <img src="<?php echo base_url(); ?>/theme/img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle">
                                            </figure>
                                            <span class="title">Joseph Junior</span>
                                            <span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <figure class="image">
                                                <img src="<?php echo base_url(); ?>/theme/img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle">
                                            </figure>
                                            <span class="title">Joe Junior</span>
                                            <span class="message">Lorem ipsum dolor sit.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <figure class="image">
                                                <img src="<?php echo base_url(); ?>/theme/img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle">
                                            </figure>
                                            <span class="title">Joseph Junior</span>
                                            <span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
                                        </a>
                                    </li>
                                </ul>
        
                                <hr>
        
                                <div class="text-right">
                                    <a href="#" class="view-more">View All</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bell"></i>
                            <span class="badge">3</span>
                        </a>
        
                        <div class="dropdown-menu notification-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                            <div class="notification-title">
                                <span class="float-right badge badge-default">3</span>
                                Alerts
                            </div>
        
                            <div class="content">
                                <ul>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <div class="image">
                                                <i class="fas fa-thumbs-down bg-danger text-light"></i>
                                            </div>
                                            <span class="title">Server is Down!</span>
                                            <span class="message">Just now</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <div class="image">
                                                <i class="fas fa-lock bg-warning text-light"></i>
                                            </div>
                                            <span class="title">User Locked</span>
                                            <span class="message">15 minutes ago</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <div class="image">
                                                <i class="fas fa-signal bg-success text-light"></i>
                                            </div>
                                            <span class="title">Connection Restaured</span>
                                            <span class="message">10/10/2017</span>
                                        </a>
                                    </li>
                                </ul>
        
                                <hr>
        
                                <div class="text-right">
                                    <a href="#" class="view-more">View All</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
        
                <span class="separator"></span>
        
                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown" aria-expanded="false">
                        <figure class="profile-picture">
                            <img src="<?php echo base_url(); ?>/theme/img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="<?php echo base_url(); ?>/theme/img/!logged-user.jpg">
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                            <span class="name">John Doe Junior</span>
                            <span class="role">administrator</span>
                        </div>
        
                        <i class="fa custom-caret"></i>
                    </a>
        
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                        <ul class="list-unstyled mb-2">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fas fa-user"></i> My Profile</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fas fa-lock"></i> Lock Screen</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fas fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">
            
                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
            
                <div class="nano">
                    <div class="nano-content" tabindex="0">
                        <nav id="menu" class="nav-main" role="navigation">
                        
                            <ul class="nav nav-main">
                                <li>
                                    <a class="nav-link" href="layouts-default.html">
                                        <i class="fas fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>                        
                                </li>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
            
                            </ul>
                        </nav>
            
                        <hr class="separator">
            
                        
            
                        
            
                        
                    </div>
            
                    <script>
                        // Maintain Scroll Position
                        if (typeof localStorage !== 'undefined') {
                            if (localStorage.getItem('sidebar-left-position') !== null) {
                                var initialPosition = localStorage.getItem('sidebar-left-position'),
                                    sidebarLeft = document.querySelector('#sidebar-left .nano-content');
                                
                                sidebarLeft.scrollTop = initialPosition;
                            }
                        }
                    </script>
                    
            
                <div class="nano-pane" style="opacity: 1; visibility: visible; display: none;"><div class="nano-slider" style="height: 271px; transform: translate(0px);"></div></div></div>
            
            </aside>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Blank Page</h2>
                
                    <div class="right-wrapper text-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index.html">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li><span>Pages</span></li>
                            <li><span>Blank Page</span></li>
                        </ol>
                
                        <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
                    </div>
                </header>

                <!-- start: page -->

                <?php echo $this->renderSection('conteudo') ;?>

                <!-- end: page -->
            </section>
        </div>

        
    </section>

    <!-- Vendor -->
    <script src="<?php echo base_url(); ?>/theme/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url(); ?>/theme/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="<?php echo base_url(); ?>/theme/vendor/popper/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/theme/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>/theme/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>/theme/vendor/common/common.js"></script>
    <script src="<?php echo base_url(); ?>/theme/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="<?php echo base_url(); ?>/theme/vendor/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="<?php echo base_url(); ?>/theme/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo base_url(); ?>/theme/js/theme.js"></script>
    
    <!-- Theme Custom -->
    <script src="<?php echo base_url(); ?>/theme/js/custom.js"></script>
    
    <!-- Theme Initialization Files -->
    <script src="<?php echo base_url(); ?>/theme/js/theme.init.js"></script><a class="scroll-to-top hidden-mobile" href="#"><i class="fas fa-chevron-up"></i></a>


    <!--recursos javascritp personalizados -->
    <?php echo $this->renderSection('scripts') ;?>

</body></html>