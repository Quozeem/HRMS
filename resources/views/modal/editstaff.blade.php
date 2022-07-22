<div class="modal fade" id="modal-edits{{$row->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Staff</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('updateStaff')}}" method="POST">
        @csrf        <div class="modal-body">
<input type="hidden" name="staff_id" value="{{$row->id}}">
                    <!--div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                 <label>Company ID</label>
                                <input type="text" name="hr_companyid" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div-->
                        
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" value="{{$row->name}}" name="name" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                    
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Email</label>
                                <input type="text" value="{{$row->email}}" name="email" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                    

                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Role</label>
                                  <select name="role" class="form-control" required="">
                                    <option value="" disabled="disabled" selected="selected">&larr; Select Type &rarr;</option>
                                    @foreach($selectRole as $row)        
    
    <option value="{{ $row->role}}">&rarr; {{ $row->role}}</option>
    @endforeach
                                </select>   </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Department</label>
                                  <select name="department" class="form-control" required>
                                  <option value=" "
                                   selected="selected">&larr; Select Type &rarr;</option>
                                    @foreach($selectDepartment as $row)
                                   
                                    <option value="{{$row->department}}">&rarr; {{$row->department}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        </div>
                        
                  
                   
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="hr_admin">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>