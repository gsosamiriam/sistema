<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
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
                <input type="text" placeholder="Buscar" />
            </div>
            <div class="navbar_content">
                <i class="bi bi-grid"></i>
                <span class="material-icons" id="darkLight">light_mode</span>
                <span class="material-icons">notifications</span>
                <span class="material-icons" title="Cerrar sesión">logout</span>
                <img src="images/profile.jpg" alt="" class="profile" />
            </div>
        </nav>

        <!-- sidebar -->
        <nav class="sidebar">
            <div class="menu_content">

                <ul class="menu_items">
                    <!-- start -->
                    <li class="item">
                        <div href="#" class="nav_link submenu_item">
                            <span class="navlink_icon">
                                <span class="material-symbols-outlined">admin_panel_settings</span>
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
                  
                </ul>

                <ul class="menu_items">
                   
                    <!-- start -->
                    <li class="item">
                        <div href="#" class="nav_link submenu_item">
                            <span class="navlink_icon">
                                <span class="material-symbols-outlined">app_registration</span>
                            </span>
                            <span class="navlink">Overview</span>
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