@extends('layouts.real_estate.real_estates')

@section('content')
    @livewire('panel.real-estates.dashboard.section-top-indicators')
    <div class="row">
        <div class="col-md-8">
            @livewire('panel.real-estates.dashboard.card-last-development')
            @livewire('panel.real-estates.dashboard.card-development-grater-properties')
            @livewire('panel.real-estates.dashboard.card-best-development-agents')
            @livewire('panel.real-estates.dashboard.card-property-sold-by-agent')
            @livewire('panel.real-estates.dashboard.card-lastest-clients')
            @livewire('panel.real-estates.dashboard.card-clients-recent-purchases')
            @livewire('panel.real-estates.dashboard.card-sales')

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Monto Total de Comisiones</h3>
                </div>
                <div class="card-body">
                    <h2>$100,000</h2>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Próximos Eventos y Citas</h3>
                </div>
                <div class="card-body">
                    <div id="calendar"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Notificaciones</h3>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>
                            <i class="fas fa-exclamation-circle text-warning"></i> Vencimiento de contrato el 15 de agosto.
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i> Tarea de seguimiento programada para hoy.
                        </li>
                        <li>
                            <i class="fas fa-exclamation-circle text-danger"></i> Factura pendiente de pago.
                        </li>
                        <!-- Agregar más notificaciones aquí -->
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ingresos y Gastos</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Ingresos</h4>
                            <p>Total de ingresos: $10,000</p>
                        </div>
                        <div class="col-md-6">
                            <h4>Gastos</h4>
                            <p>Total de gastos: $5,000</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Gráfico de Ingresos Mensuales</h3>
                </div>
                <div class="card-body">
                    <canvas id="ingresos-mensuales-chart"></canvas>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Estado de Pagos</h3>
                </div>
                <div class="card-body">
                    <h4>Pagos Pendientes</h4>
                    <p>Total de pagos pendientes: $3,000</p>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pagos Realizados</h3>
                </div>
                <div class="card-body">
                    <h4>Total de Pagos Realizados</h4>
                    <p>Monto total de pagos realizados por clientes: $7,000</p>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Contratos Recientes</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Número de Contrato</th>
                                <th>Cliente</th>
                                <th>Tipo de Contrato</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>CON2023001</td>
                                <td>John Doe</td>
                                <td>Compra de Propiedad</td>
                                <td><span class="badge bg-success">Activo</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>CON2023002</td>
                                <td>Jane Smith</td>
                                <td>Arrendamiento</td>
                                <td><span class="badge bg-success">Activo</span></td>
                            </tr>
                            <!-- Agregar más filas según los contratos recientes -->
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tareas Pendientes</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Llamar a cliente para seguimiento de venta</label>
                        </li>
                        <li class="list-group-item">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Enviar recordatorio de cita de desarrollo</label>
                        </li>
                        <!-- Agregar más elementos de lista según las tareas pendientes -->
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Plantillas de Contratos</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Contrato de Compra de Propiedad</li>
                        <li class="list-group-item">Contrato de Arrendamiento Residencial</li>
                        <li class="list-group-item">Contrato de Corretaje Inmobiliario</li>
                        <!-- Agregar más plantillas de contratos disponibles -->
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Agentes y Empleados Activos</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Agente Inmobiliario: Juan Pérez</li>
                        <li class="list-group-item">Agente Inmobiliario: María Rodríguez</li>
                        <li class="list-group-item">Secretaria: Ana Gómez</li>
                        <!-- Agregar más agentes y empleados activos -->
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Estadísticas de Ventas por Agente</h3>
                </div>
                <div class="card-body">
                    <div id="salesByAgentChart"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Relación Clientes y Propiedades</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Cliente: Juan Pérez - Propiedad: Casa en Fraccionamiento A</li>
                        <li class="list-group-item">Cliente: María Rodríguez - Propiedad: Departamento en Torre B</li>
                        <li class="list-group-item">Cliente: Ana Gómez - Propiedad: Lote en Desarrollo C</li>
                        <!-- Agregar más relaciones de clientes y propiedades -->
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Propiedades Más Visitadas</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Casa en Fraccionamiento A - 50 visitas</li>
                        <li class="list-group-item">Departamento en Torre B - 45 visitas</li>
                        <li class="list-group-item">Lote en Desarrollo C - 30 visitas</li>
                        <!-- Agregar más propiedades visitadas -->
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Resumen de Propiedades por Desarrollo</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Desarrollo A - Propiedades: 120</li>
                        <li class="list-group-item">Desarrollo B - Propiedades: 85</li>
                        <li class="list-group-item">Desarrollo C - Propiedades: 60</li>
                        <!-- Agregar más desarrollos y propiedades -->
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Distribución de Tipos de Propiedades por Desarrollo</h3>
                </div>
                <div class="card-body">
                    <canvas id="propertyDistributionChart"></canvas>
                </div>
            </div>


        </div>
    </div>
@endsection
