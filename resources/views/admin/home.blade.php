@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="info-box">
                <span class="info-box-icon bg-primary"><i class="fas fa-building"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Inmobiliarias</span>
                    <span class="info-box-number">1</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fas fa-home"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Desarrollos</span>
                    <span class="info-box-number">1</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-building"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Propiedades</span>
                    <span class="info-box-number">1</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="fas fa-dollar-sign"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Ventas</span>
                    <span class="info-box-number">2 ventas</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <section class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    Top Inmobiliarias por Ventas Exitosas
                </div>
                <div class="card-body">
                    <ul class="list-group">
                       
                            <li class="list-group-item">
                                 DE LOA - Ventas: $500,000 
                            </li>
                       
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Top Inmobiliarias por Propiedades
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        
                            <li class="list-group-item">
                                DE LOA - Propiedades: EL Encanto
                            </li>
                        
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Tareas Pendientes
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        
                            <li class="list-group-item">
                                "Tarea 1" - Fecha Límite: 01-09-2023
                            </li>
                       
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Alertas de Vencimiento
                </div>
                <div class="card-body">
                    <ul class="list-group">
                       
                            <li class="list-group-item">
                                Alerta 1 - Fecha de Vencimiento: 05-09-2023
                            </li>
                      
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Últimas Actividades
                </div>
                <div class="card-body">
                    <ul class="list-group">
                       
                            <li class="list-group-item">
                                Actividad 1 - 09-10-2023
                            </li>
                       
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Información Financiera
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            Número total de inmobiliarias registradas: 2
                        </li>
                        <li class="list-group-item">
                            Total de desarrollos creados: 4
                        </li>
                        <li class="list-group-item">
                            Cantidad de propiedades en la plataforma: 5
                        </li>
                        <li class="list-group-item">
                            Ventas realizadas: $3000
                        </li>
                        <li class="list-group-item">
                            Total de comisiones generadas: $1500
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Gastos y Finanzas
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            Total de gastos: $10,000
                        </li>
                        <li class="list-group-item">
                            Ingresos netos: $20,000
                        </li>
                    </ul>
                    <!-- Agregar visualizaciones para los gastos por categoría, gráfico de tendencias, etc. -->
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Desarrollos Destacados
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        
                            <li class="list-group-item">
                                DE LOA - Colima
                            </li>
                        
                    </ul>
                    <!-- Puedes agregar enlaces a los detalles de cada desarrollo, imágenes, etc. -->
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Estado de Propiedades
                </div>
                <div class="card-body">
                    <ul class="list-group">
                       
                            <li class="list-group-item">
                                Vendidas - 3 Propiedades
                            </li>
                        
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Comparativas y Análisis
                </div>
                <div class="card-body">
                    {{-- Gráfico de ventas mensuales --}}
                    <div id="ventasMensualesChart"></div>
            
                    {{-- Otros gráficos y análisis --}}
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Notificaciones
                </div>
                <div class="card-body">
                    <ul>
                        
                            <li>Notificación 1</li>
                        
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Mensajes
                </div>
                <div class="card-body">
                    <ul>
                        
                            <li>Mensaje 1</li>
                        
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Calendario de Eventos
                </div>
                <div class="card-body">
                    <div id="calendar"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Resumen de Clientes
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            Total de Clientes: 3
                        </li>
                        <li class="list-group-item">
                            Clientes Activos: $2000
                        </li>
                        <li class="list-group-item">
                            Clientes Inactivos:  1
                        </li>
                        <li class="list-group-item">
                            Total de Ventas: $100,000
                        </li>
                        <li class="list-group-item">
                            Total de Comisiones: $200,000
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Panel de Control de Agentes
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            Total de Agentes: 50
                        </li>
                        <li class="list-group-item">
                            Agentes Activos: 25
                        </li>
                        <li class="list-group-item">
                            Agentes Inactivos: 25
                        </li>
                    </ul>
                    <div class="mt-3">
                        <h5>Ventas por Agente:</h5>
                        <ul class="list-group">
                            
                                <li class="list-group-item">
                                    Agente ID 1: 50 ventas
                                </li>
                            
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Gestión de Tareas
                </div>
                <div class="card-body">
                    <ul class="list-group">
                       
                            <li class="list-group-item">
                                <strong>Tarea 1</strong>
                                <br>
                                Descripción de la tarea
                                <br>
                                <small>Fecha de Vencimiento: 10-09-2023</small>
                            </li>
                        
                    </ul>
                </div>
            </div>

        </section>
        <section class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ventas</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    {{ $saleschart->container() }}
                </div>
                <!-- /.card-body -->
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tipos de Propiedades</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    {{ $developmentTypesChart->container() }}
                </div>
                <!-- /.card-body -->
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Fraccionamientos</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    {{ $developmentsChart->container() }}
                </div>
                <!-- /.card-body -->
            </div>
        </section>
    </div>
@endsection

@section('extra-scripts')
    {{ $saleschart->script() }}
    {{ $developmentTypesChart->script() }}
    {{ $developmentsChart->script() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                events:
            });
            calendar.render();
        });
    </script>
    <script>
        function selectDevelopment() {
            alert("click");
        }
    </script>
@endsection
