<div class="modal fade" id="modal-informe-delete-{{$informe->id}}" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Eliminar informe</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Está seguro que desea eliminar el informe <b>{{$informe->nombre_informe}}</b> ?</p>
            </div>
            <div class="modal-footer d-flex justify-content-end">
                <form method="POST" action="{{route('ejecutor.informes.destroy', $informe->id)}}">
                    @csrf
                    @method('delete')
                    
                    <button type="button" class="btn btn-sm btn-secondary btn-simple mx-1" data-dismiss="modal"><i class="tim-icons icon-simple-remove"></i> Cancelar</button>

                    <button type="submit" class="btn btn-sm btn-danger mx-1"><i class="tim-icons icon-trash-simple"></i> Eliminar</button>
                </form>
    
            </div>
        </div>
    </div>
</div><!-- End Basic Modal-->
