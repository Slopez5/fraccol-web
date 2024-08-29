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
                        <a href="{{ route('realEstate.sales') }}" class="nav-link">
                            <i class="nav-icon fas fa-dollar-sign"></i>
                            <p>
                                Ventas
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
                        <a href="{{ route('realEstate.expenses') }}" class="nav-link">
                            <i class="nav-icon fas fa-money-bill"></i>
                            <p>
                                Gastos
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('realEstate.developments') }}" class="nav-link">
                            <i class="nav-icon fas fa-building"></i>
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
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Configuración
                                <i class="right fas fa-angle-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('realEstate.settings.activityCategories') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tipos de actividad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('realEstate.settings.expenseCategories') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>categorías de gastos</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('realEstate.settings.realEstateAgencies') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Agencias inmobiliarias</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('realEstate.settings.realEstateBranches') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sucursales inmobiliarias</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('realEstate.settings.invoiceStatuses') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Estados de factura</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('realEstate.settings.loteStatuses') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Estados de lote</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('realEstate.settings.loteTypes') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tipos de lote</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('realEstate.settings.paymentPlans') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Planes de pago</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('realEstate.settings.paymentMethods') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Metodos de pago</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('realEstate.settings.paymentStatuses') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Estados de pago</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('realEstate.settings.countries') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Paises</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('realEstate.settings.contracts') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Contratos</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('realEstate.settings.propertyTypes') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tipos de propiedades</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
