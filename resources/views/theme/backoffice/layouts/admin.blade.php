<!DOCTYPE html>

<html lang="es">

    <head>

        <title></title>
        
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="no" name="msapplication-tap-highlight">
        
        <link href="css//materialize.css" rel="stylesheet" type="text/css">
        <link href="css//style.css" rel="stylesheet" type="text/css">
        <link href="css/custom/custom.css" rel="stylesheet" type="text/css">
        <link href="vendors/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css">
        <link href="vendors/flag-icon/css/flag-icon.min.css" rel="stylesheet" type="text/css">
   
    </head>

    <body>
        
        <div id="loader-wrapper">
            <div id="loader">
            </div>
            <div class="loader-section section-left">
            </div>
            <div class="loader-section section-right">
            </div>
        </div>

        <header class="page-topbar" id="header">
            <div class="navbar-fixed">
                <nav class="navbar-color gradient-45deg-light-blue-cyan">
                    <div class="nav-wrapper">

                        <ul class="left">
                            <li>
                                <h1 class="logo-wrapper">
                                    <a class="brand-logo darken-1" href="index.html">
                                        <img alt="materialize logo" src="images/logo/materialize-logo.png">
                                        <span class="logo-text hide-on-med-and-down">Clinic</span>
                                    </a>
                                </h1>
                            </li>
                        </ul>

                        <div class="header-search-wrapper hide-on-med-and-down">
                            <i class="material-icons">search</i>
                            <input class="header-search-input z-depth-2" name="Search" placeholder="¿Qué deseas buscar?" type="text"/>
                        </div>

                        <ul class="right hide-on-med-and-down">
                            
                            <li>
                                <a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);">
                                    <i class="material-icons">settings_overscan</i>
                                </a>
                            </li>
                           
                            <li>
                                <a class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown" href="javascript:void(0);">
                                    <span class="avatar-status avatar-online">
                                        <img alt="avatar" src="images/avatar/avatar-7.png">
                                        <i></i>
                                    </span>
                                </a>
                            </li>

                        </ul>

                        <!-- profile-dropdown -->
                        <ul class="dropdown-content" id="profile-dropdown">
                            <li>
                                <a class="grey-text text-darken-1" href="#">
                                    <i class="material-icons">face</i>
                                    Perfil
                                </a>
                            </li>
                            <li>
                                <a class="grey-text text-darken-1" href="#">
                                    <i class="material-icons">settings</i>
                                    Ajustes
                                </a>
                            </li>
                            <li>
                                <a class="grey-text text-darken-1" href="#">
                                    <i class="material-icons">live_help</i>
                                    Ayuda
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="grey-text text-darken-1" href="#">
                                    <i class="material-icons">keyboard_tab</i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div id="main">
            <div class="wrapper">

                <aside id="left-sidebar-nav">
                    <ul class="side-nav fixed leftside-navigation" id="slide-out">
                        <li class="user-details cyan darken-2">
                            <div class="row">
                                <div class="col col s4 m4 l4">
                                    <img alt="" class="circle responsive-img valign profile-image cyan" src="images/avatar/avatar-7.png">
                                    </img>
                                </div>
                                <div class="col col s8 m8 l8">
                                    <ul class="dropdown-content" id="profile-dropdown-nav">
                                        <li>
                                            <a class="grey-text text-darken-1" href="#">
                                                <i class="material-icons">face</i>
                                                Perfil
                                            </a>
                                        </li>
                                        <li>
                                            <a class="grey-text text-darken-1" href="#">
                                                <i class="material-icons">settings</i>
                                                Ajustes
                                            </a>
                                        </li>
                                        <li>
                                            <a class="grey-text text-darken-1" href="#">
                                                <i class="material-icons">live_help</i>
                                                Ayuda
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a class="grey-text text-darken-1" href="#">
                                                <i class="material-icons">keyboard_tab</i>
                                                Salir
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" data-activates="profile-dropdown-nav" href="#">
                                        Homero
                                        <i class="mdi-navigation-arrow-drop-down right"></i>
                                    </a>
                                    <p class="user-roal">Administrador</p>
                                </div>
                            </div>
                        </li>
                        <li class="no-padding">
                            <ul class="collapsible" data-collapsible="accordion">
                                <li class="bold">
                                    <a class="waves-effect waves-cyan" href="index.html">
                                        <i class="material-icons">
                                            pie_chart_outlined
                                        </i>
                                        <span class="nav-text">
                                            Panel de administración
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>

                    <a class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only" data-activates="slide-out" href="#">
                        <i class="material-icons">menu</i>
                    </a>

                </aside>

                <section id="content">
                    <div class="container">
                    </div>
                </section>
            </div>
        </div>

        <footer class="page-footer gradient-45deg-light-blue-cyan">
            <div class="footer-copyright">
                <div class="container">
                    <span>
                        Copyright ©
                        <script type="text/javascript">
                            document.write(new Date().getFullYear());
                        </script>
                    </span>
                </div>
            </div>
        </footer>

        <script src="vendors/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="js/materialize.min.js" type="text/javascript"></script>
        <script src="vendors/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script>
        <script src="js/plugins.js" type="text/javascript"></script>
        <script src="js/custom-script.js" type="text/javascript"></script>
    </body>
</html>