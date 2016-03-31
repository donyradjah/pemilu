<!doctype html>
<html>
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <!-- Apple devices fullscreen -->
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent"/>


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
    <link rel="stylesheet" href="assets/css/plugins/pageguide/pageguide.css">
    <link rel="stylesheet" href="assets/css/plugins/fullcalendar/fullcalendar.css">
    <link rel="stylesheet" href="assets/css/plugins/fullcalendar/fullcalendar.print.css" media="print">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/themes.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="assets/js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
    <script src="assets/js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
    <script src="assets/js/plugins/jquery-ui/jquery.ui.draggable.min.js"></script>
    <script src="assets/js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
    <script src="assets/js/plugins/touch-punch/jquery.touch-punch.min.js"></script>
    <script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins/vmap/jquery.vmap.min.js"></script>
    <script src="assets/js/plugins/vmap/jquery.vmap.world.js"></script>
    <script src="assets/js/plugins/vmap/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/plugins/bootbox/jquery.bootbox.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.min.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.bar.order.min.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.pie.min.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.resize.min.js"></script>
    <script src="assets/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
    <script src="assets/js/plugins/pageguide/jquery.pageguide.js"></script>
    <script src="assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>
    <script src="assets/js/eakroko.min.js"></script>
    <script src="assets/js/application.min.js"></script>
    <link rel="shortcut icon" href="assets/img/favicon.ico"/>
    <link rel="apple-touch-icon-precomposed" href="assets/img/apple-touch-icon-precomposed.png"/>

</head>
<body>
<div id="navigation">
    <div class="container-fluid">
        <a href="#" id="brand">PEMILU</a>
        <ul class='main-nav'>
            <li>
                <a href="index.html">
                    <i class="icon-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li <?php if($pml == "partai"){echo "class='active'";} ?>>
                <a href="#" >
                    <i class="icon-edit"></i>
                    <span>Partai</span>
                </a>
            </li>
            <li>
                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                    <i class="icon-th-large"></i>
                    <span>Components</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="components-messages.html">Messages &amp; Chat</a>
                    </li>
                    <li>
                        <a href="components-gallery.html">Gallery &amp; Thumbs</a>
                    </li>
                    <li>
                        <a href="components-tiles.html">Tiles</a>
                    </li>
                    <li>
                        <a href="components-icons.html">Icons &amp; Buttons</a>
                    </li>
                    <li>
                        <a href="components-elements.html">UI elements</a>
                    </li>
                    <li>
                        <a href="components-typography.html">Typography</a>
                    </li>
                    <li>
                        <a href="components-bootstrap.html">Bootstrap elements</a>
                    </li>
                    <li>
                        <a href="components-grid.html">Grid</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                    <i class="icon-table"></i>
                    <span>Tables</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="tables-basic.html">Basic tables</a>
                    </li>
                    <li>
                        <a href="tables-dynamic.html">Dynamic tables</a>
                    </li>
                    <li>
                        <a href="tables-large.html">Large tables</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                    <i class="icon-th-large"></i>
                    <span>Plugins</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="plugins-charts.html">Charts</a>
                    </li>
                    <li>
                        <a href="plugins-calendar.html">Calendar</a>
                    </li>
                    <li>
                        <a href="plugins-filemanager.html">File manager</a>
                    </li>
                    <li>
                        <a href="plugins-filetrees.html">File trees</a>
                    </li>
                    <li>
                        <a href="plugins-elements.html">Editable elements</a>
                    </li>
                    <li>
                        <a href="plugins-maps.html">Maps</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                    <i class="icon-th"></i>
                    <span>Pages</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="more-error.html">Error pages</a>
                    </li>
                    <li>
                        <a href="more-invoice.html">Invoice</a>
                    </li>
                    <li>
                        <a href="more-userprofile.html">User profile</a>
                    </li>
                    <li>
                        <a href="more-searchresults.html">Search results</a>
                    </li>
                    <li>
                        <a href="more-login.html">Login</a>
                    </li>
                    <li>
                        <a href="more-blank.html">Blank page</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="user">
            <ul class="icon-nav">
                <li class="dropdown sett">
                    <a href="#" class='dropdown-toggle' data-toggle="dropdown"><i class="icon-cog"></i></a>
                    <ul class="dropdown-menu pull-right theme-settings">
                        <li>
                            <span>Layout-width</span>

                            <div class="version-toggle">
                                <a href="#" class='set-fixed'>Fixed</a>
                                <a href="#" class="active set-fluid">Fluid</a>
                            </div>
                        </li>
                        <li>
                            <span>Topbar</span>

                            <div class="topbar-toggle">
                                <a href="#" class='set-topbar-fixed'>Fixed</a>
                                <a href="#" class="active set-topbar-default">Default</a>
                            </div>
                        </li>
                        <li>
                            <span>Sidebar</span>

                            <div class="sidebar-toggle">
                                <a href="#" class='set-sidebar-fixed'>Fixed</a>
                                <a href="#" class="active set-sidebar-default">Default</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class='dropdown colo'>
                    <a href="#" class='dropdown-toggle' data-toggle="dropdown"><i class="icon-tint"></i></a>
                    <ul class="dropdown-menu pull-right theme-colors">
                        <li class="subtitle">
                            Predefined colors
                        </li>
                        <li>
                            <span class='red'></span>
                            <span class='orange'></span>
                            <span class='green'></span>
                            <span class="brown"></span>
                            <span class="blue"></span>
                            <span class='lime'></span>
                            <span class="teal"></span>
                            <span class="purple"></span>
                            <span class="pink"></span>
                            <span class="magenta"></span>
                            <span class="grey"></span>
                            <span class="darkblue"></span>
                            <span class="lightred"></span>
                            <span class="lightgrey"></span>
                            <span class="satblue"></span>
                            <span class="satgreen"></span>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="more-locked.html" class='lock-screen' rel='tooltip' title="Lock screen"
                       data-placement="bottom"><i class="icon-lock"></i></a>
                </li>
            </ul>
            <div class="dropdown">
                <a href="#" class='dropdown-toggle' data-toggle="dropdown">John Doe <img src="img/demo/user-avatar.jpg"
                                                                                         alt=""></a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="more-userprofile.html">Edit profile</a>
                    </li>
                    <li>
                        <a href="#">Account settings</a>
                    </li>
                    <li>
                        <a href="more-login.html">Sign out</a>
                    </li>
                </ul>
            </div>
        </div>
        <a href="#" class='toggle-mobile'><i class="icon-reorder"></i></a>
    </div>
</div>