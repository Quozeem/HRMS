
  <div class="modal fade" id="modal-delete{{$row->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Department</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form action="{{url('delect_department')}}" method="POST">
     @csrf   <div class="modal-body">
         <input type="text"  value="Are you sure you want to delete department?" class="form-control" disabled="" autocomplete="off" readonly>
        </div>
        <div class="modal-footer justify-content-between">
          <input type="hidden" value="{{$row->id}}" name="id">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger" name="delete_depart">Delete</button>
        </div>
        </form>
      </div>
    </div>
  </div>