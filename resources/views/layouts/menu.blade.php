 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-fraccol-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="{{ asset('images/Logo.png') }}" alt="Fraccionamientos Colima" class="brand-image img-circle elevation-3"
             style="opacity: .8">
         <span class="brand-text font-weight-light">Fraccol</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar Menu -->
         <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('realEstate.dashboard') }}" class="nav-link">
                        
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('realEstate.users') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Usuarios
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('realEstate.appointments') }}" class="nav-link">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>
                                Citas
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('realEstate.permissions') }}" class="nav-link">
                            <i class="nav-icon fas fa-user-lock"></i>
                            <p>
                                Permisos
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('realEstate.developments') }}" class="nav-link">
                            <i class="nav-icon fa fa-buildings"></i>
                            <p>
                                Fraccionamientos
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('realEstate.properties') }}" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Propiedades
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('realEstate.leads') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Prospectos
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('realEstate.payments') }}" class="nav-link">
                            <i class="nav-icon fas fa-file-invoice-dollar"></i>
                            <p>
                                Pagos
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('realEstate.invoices') }}" class="nav-link">
                            <i class="nav-icon fas fa-file-invoice"></i>
                            <p>
                                Facturas
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('realEstate.reports') }}" class="nav-link">
                            <i class="nav-icon fas fa-file-invoice"></i>
                            <p>
                                Reportes
                            </p>
                        </a>
                    </li>
                </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
