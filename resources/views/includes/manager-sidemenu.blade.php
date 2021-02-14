<div class='nav-left'>
    <nav id='manager-sidemenu' class='navbar navbar-expand-lg navbar-dark bg-success bg-gradient'>
        <div class='container-fluid px-3'>
            <a class='d-lg-none navbar-brand' href='/manager'>Menu</a>
            <button
                class='navbar-toggler collapsed ml-auto'
                type='button'
                data-toggle='collapse'
                data-target='#navbarToggler'
                aria-controls='navbarToggler'
                aria-expanded='false'
                aria-label='Toggle navigation'
            >
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse navbar-default' id='navbarToggler'>
                <ul class='navbar-nav nav flex-column'>
                    <li class='nav-divider'>
                        Menu
                    </li>
                    <li class='nav-item'>
                        <a href='#' class='dropdown-toggle nav-link collapsed' data-toggle='collapse' aria-expanded='false' data-target='#submenu-1' arial-controls='submenu-1'>
                            <i class='fas fa-columns'></i> Dashboard
                            <b class='caret'></b>
                        </a>
                        <div id='submenu-1' class='submenu collapse'>
                            <ul class='nav flex-column'>
                                <li class='nav-item'>
                                    <a class='nav-link' href='/manager'>Home</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class='nav-item'>
                        <a href='#' class='dropdown-toggle nav-link collapsed arrow' data-toggle='collapse' aria-expanded='false' data-target='#submenu-2' arial-controls='submenu-2'>
                            <i class='fas fa-building'></i> Management
                            <b class='caret'></b>
                        </a>
                        <div id='submenu-2' class='submenu collapse'>
                            <ul class='nav flex-column'>
                                <li class='nav-item'>
                                    <a class='dropdown-toggle nav-link' href='#' data-toggle='collapse' aria-expanded='false' data-target='#submenu-2-1' aria-controls='submenu-2-1'>
                                        Properties
                                        <b class='caret'></b>
                                    </a>
                                    <div id='submenu-2-1' class='collapse submenu'>
                                        <ul class='nav flex-column'>
                                            <li class='nav-item'>
                                                <a href='/manager/properties' class='nav-link'>All Properties</a>
                                            </li>
                                            <li class='nav-item'>
                                                <a class='nav-link' href='/manager/properties/create'>
                                                    New Property
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class='nav-item'>
                                    <a class='dropdown-toggle nav-link' href='#' data-toggle='collapse' aria-expanded='false' data-target='#submenu-2-2' aria-controls='submenu-2-2'>
                                        Units
                                        <b class='caret'></b>
                                    </a>
                                    <div id='submenu-2-2' class='collapse submenu'>
                                        <ul class='nav flex-column'>
                                            <li class='nav-item'>
                                                <a href='/manager/units' class='nav-link'>All Units</a>
                                            </li>
                                            <li class='nav-item'>
                                                <a href='/manager/units/available' class='nav-link'>Available Units</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class='nav-item'>
                        <a href='#' class='dropdown-toggle nav-link collapsed' data-toggle='collapse' aria-expanded='false' data-target='#submenu-3' arial-controls='submenu-3'>
                            <i class='fas fa-users'></i> Tenants
                            <b class='caret'></b>
                        </a>
                        <div id='submenu-3' class='submenu collapse'>
                            <ul class='nav flex-column'>
                                <li class='nav-item'>
                                    <a class='nav-link' href='/manager/tenants'>All Tenants</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='/manager/tenants/create'>New Tenant</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class='nav-item'>
                        <a href='#' class='dropdown-toggle nav-link collapsed' data-toggle='collapse' aria-expanded='false' data-target='#submenu-4' arial-controls='submenu-4'>
                            <i class='fas fa-inbox'></i> Messages
                            <b class='caret'></b>
                        </a>
                        <div id='submenu-4' class='submenu collapse'>
                            <ul class='nav flex-column'>
                                <li class='nav-item'>
                                    <a class='nav-link' href='/manager/email-list'>Email Subscriptions</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='/manager/messages'>Messages</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='/manager/rental-applications'>Rental Applications</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>