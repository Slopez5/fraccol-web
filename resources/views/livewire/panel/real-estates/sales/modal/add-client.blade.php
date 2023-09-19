<div class="modal fade" id="addNewLead">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Teléfono</th>
                            <th>Corréo</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($leads as $index => $lead)
                        <tr wire:key='{{$lead->id}}' wire:click='selectLead({{$lead->id}})'>
                            <td>{{$lead->first_name}}</td>
                            <td>{{$lead->last_name}}</td>
                            <td>{{$lead->phone}}</td>
                            <td>{{$lead->email}}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
