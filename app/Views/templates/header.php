<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>SISTEMA</title>
    <?= CSSBoot(); ?>

</head>

<body>

    <header>

        <nav class="navbar">
            <div class="logo_item">
                <span class="material-icons" id="sidebarOpen">menu</span>
            </div>
            <div class="search_bar">
                <input type="text" placeholder="Search" />
            </div>
            <div class="navbar_content">
                <i class="bi bi-grid"></i>
                <span class="material-icons" id="darkLight">light_mode</span>
                <span class="material-icons">notifications</span>
                <img src="images/profile.jpg" alt="" class="profile" />
            </div>
        </nav>

        <!-- sidebar -->
        <nav class="sidebar">
            <div class="menu_content">
                <ul class="menu_items">
             
                    <!-- duplicate or remove this li tag if you want to add or remove navlink with submenu -->
                    <!-- start -->
                    <li class="item">
                        <div href="#" class="nav_link submenu_item">
                            <span class="navlink_icon">
                                <i class="bx bx-home-alt"></i>
                            </span>
                            <span class="navlink">Home</span>
                            <span class="material-icons arrow-right">keyboard_double_arrow_right</span>
                        </div>
                        <ul class="menu_items submenu">
                            <a href="#" class="nav_link sublink">Nav Sub Link</a>
                            <a href="#" class="nav_link sublink">Nav Sub Link</a>
                            <a href="#" class="nav_link sublink">Nav Sub Link</a>
                            <a href="#" class="nav_link sublink">Nav Sub Link</a>
                        </ul>
                    </li>
                    <!-- end -->
                    <!-- duplicate this li tag if you want to add or remove  navlink with submenu -->
                    <!-- start -->
                    <li class="item">
                        <div href="#" class="nav_link submenu_item">
                            <span class="navlink_icon">
                                <i class="bx bx-grid-alt"></i>
                            </span>
                            <span class="navlink">Overview</span>
                            <i class="bx bx-chevron-right arrow-left"></i>
                        </div>
                        <ul class="menu_items submenu">
                            <a href="#" class="nav_link sublink">Nav Sub Link</a>
                            <a href="#" class="nav_link sublink">Nav Sub Link</a>
                            <a href="#" class="nav_link sublink">Nav Sub Link</a>
                            <a href="#" class="nav_link sublink">Nav Sub Link</a>
                        </ul>
                    </li>
                    <!-- end -->
                </ul>
                <ul class="menu_items">
                    <div class="menu_title menu_editor"></div>
                    <!-- duplicate these li tag if you want to add or remove navlink only -->
                    <!-- Start -->
                    <li class="item">
                        <a href="#" class="nav_link">
                            <span class="navlink_icon">
                                <i class="bx bxs-magic-wand"></i>
                            </span>
                            <span class="navlink">Magic build</span>
                        </a>
                    </li>
                    <!-- End -->
                    <li class="item">
                        <a href="#" class="nav_link">
                            <span class="navlink_icon">
                                <i class="bx bx-loader-circle"></i>
                            </span>
                            <span class="navlink">Filters</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="nav_link">
                            <span class="navlink_icon">
                                <i class="bx bx-filter"></i>
                            </span>
                            <span class="navlink">Filter</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="nav_link">
                            <span class="navlink_icon">
                                <i class="bx bx-cloud-upload"></i>
                            </span>
                            <span class="navlink">Upload new</span>
                        </a>
                    </li>
                </ul>
                <ul class="menu_items">
                    <div class="menu_title menu_setting"></div>
                    <li class="item">
                        <a href="#" class="nav_link">
                            <span class="navlink_icon">
                                <i class="bx bx-flag"></i>
                            </span>
                            <span class="navlink">Notice board</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="nav_link">
                            <span class="navlink_icon">
                                <i class="bx bx-medal"></i>
                            </span>
                            <span class="navlink">Award</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="nav_link">
                            <span class="navlink_icon">
                                <i class="bx bx-cog"></i>
                            </span>
                            <span class="navlink">Setting</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="nav_link">
                            <span class="navlink_icon">
                                <i class="bx bx-layer"></i>
                            </span>
                            <span class="navlink">Features</span>
                        </a>
                    </li>
                </ul>
                <!-- Sidebar Open / Close -->
                <div class="bottom_content">
                    <div class="bottom expand_sidebar">
                        <span class="hide">Expandir</span>
                        <span class="material-symbols-outlined">left_panel_open</span>
                    </div>
                    <div class="bottom collapse_sidebar">
                        <span>Contraer</span>
                        <span class="material-symbols-outlined">left_panel_close</span>
                        
                    </div>

                   

                </div>
            </div>
        </nav>

    </header>