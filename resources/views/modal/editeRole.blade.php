<div class="modal fade" id="modal-edits{{$row->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Role</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('update_role')}}" method="POST" enctype="multipart/form-data">
              @csrf  <div class="modal-body">

                    <div class="row">
                       
                               
                       <input type="hidden" name="role_id" value="{{$row->id}}" class="form-control" placeholder="" required="" autocomplete="off">
                            
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Role</label>
                                <input type="text" name="role" value="{{$row->role}}" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                    </div>
                     
                  
                </div>
                <div class="modal-footer justify-content-between">
                   
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="edit_emplo">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>