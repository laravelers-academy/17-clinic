<div id="breadcrumbs-wrapper">
    <!-- Search for small screen -->
    <div class="header-search-wrapper grey lighten-2 hide-on-large-only">
        <input class="header-search-input z-depth-2" name="Search" placeholder="Explore Materialize" type="text">
        </input>
    </div>
    <div class="container">
        <div class="row">
            <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title">
                    @yield('title')
                </h5>
                <ol class="breadcrumbs">
                    <li>
                        <a href="#">
                            Panel de administración
                        </a>
                    </li>
                    @yield('breadcrumbs')
                </ol>
            </div>
            <div class="col s2 m6 l6">
                <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" data-activates="dropdown1" href="#!">
                    <i class="material-icons hide-on-med-and-up">
                        settings
                    </i>
                    <span class="hide-on-small-onl">
                        Acciones
                    </span>
                    <i class="material-icons right">
                        arrow_drop_down
                    </i>
                </a>
                <ul class="dropdown-content" id="dropdown1">
                    @yield('dropdown_settings')
                </ul>
            </div>
        </div>
    </div>
</div>