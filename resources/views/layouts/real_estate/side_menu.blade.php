<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('images/Logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">INFACE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Sergio Lopez</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('realEstate.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-home"></i>
                        <p>Inicio</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('realEstate.developments.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-building"></i>
                        <p>Fraccionamientos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('realEstate.branches.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-building"></i>
                        <p>Oficinas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('realEstate.sales.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-money-check-alt"></i>
                        <p>Ventas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('realEstate.realEstateAgents.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Agentes inmobiliarios</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('realEstate.secretaries.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Secretarias</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('realEstate.developmentManagers.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Encargados de fraccionamiento</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('realEstate.developments.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-contract"></i>
                        <p>Contratos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('realEstate.developments.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Configuración
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"
                        onclick="event.preventDefault(); document.getElementById('logout').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Cerrar Sesión
                        </p>
                    </a>
                    <form id="logout" action="{{ route('realEstate.logout') }}" method="POST"
                        style="display: none;">
                        @csrf
                    </form>

                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
