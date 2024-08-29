@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $appointment->customer_name }}</h1>
                <p>{{ $appointment->customer_phone }}</p>
                <p>{{ $appointment->customer_email }}</p>
                <p>{{ $appointment->appointment_date }}</p>
                <p>{{ $appointment->status }}</p>
                <p>{{ $appointment->notes }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Seguimiento</h3>
                        <div class="card-tools">
                            {{-- add button to open modal --}}
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addActivityModal">
                                Agregar
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Prospecto</th>
                                    <th>Vendedor(a)</th>
                                    <th>Actividad de seguimiento</th>
                                    <th>notas</th>
                                    <th>Fecha y Hora de actividad</th>
                                    <th>Fecha y Hora de completado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($activities as $activity)
                                    <tr>
                                        <td>{{ $activity->lead_id }}</td>
                                        <td>{{ $activity->lead_agent_id }}</td>
                                        <td>{{ $activity->activity_type_id }}</td>
                                        <td>{{ $activity->notes }}</td>
                                        <td>{{ $activity->scheduled_at }}</td>
                                        <td>{{ $activity->completed_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- add activity modal --}}
    <div class="modal fade" id="addActivityModal" tabindex="-1" role="dialog" aria-labelledby="addActivityModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('realEstate.appointment.activity.store', $appointment->id) }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addActivityModalLabel">Agregar Seguimiento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body
                    ">
                        <div class="form-group">
                            <label for="lead_id">Prospecto</label>
                            <select name="lead_id" id="lead_id" class="form-control">
                                <option value="">Seleccionar</option>
                                @foreach($leads as $lead)
                                    <option value="{{ $lead->id }}">{{ $lead->first_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lead_agent_id">Vendedor</label>
                            <select name="lead_agent_id" id="lead_agent_id" class="form-control">
                                <option value="">Seleccionar</option>
                                @foreach($leadAgents as $leadAgent)
                                    <option value="{{ $leadAgent->id }}">{{ $leadAgent->first_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="activity_type_id">Actividad de seguimiento</label>
                            <select name="activity_type_id" id="activity_type_id" class="form-control">
                                <option value="">Seleccionar</option>
                                @foreach($activityTypes as $activityType)
                                    <option value="{{ $activityType->id }}">{{ $activityType->name }}</option>
                                @endforeach
                            </select> 
                        </div>
                        <div class="form-group">
                            <label for="notes">notas</label>
                            <textarea name="notes" id="notes" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="scheduled_at">Fecha y Hora de actividad</label>
                            <input type="datetime-local" name="scheduled_at" id="scheduled_at" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="completed_at">Fecha y Hora de completado</label>
                            <input type="datetime-local" name="completed_at" id="completed_at" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection