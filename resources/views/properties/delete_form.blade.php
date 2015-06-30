<div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Are You Sure?</h4>
      </div>
      <div class="modal-body">
        <p>Deleting this property will permanently remove it from the database</p>
      </div>

      <div class="modal-footer">
  
        {!! Form::open(['method' => 'DELETE', 'route' => ['properties.destroy', 'properties' => $property->id]]) !!}
        {!! Form::hidden('id', $property->id) !!}
        {!! Form::submit("Delete", ['class' => 'btn btn-danger']) !!}
        
        {!! Form::close() !!}
  
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->