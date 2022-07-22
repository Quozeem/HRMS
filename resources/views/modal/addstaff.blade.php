<div class="modal fade" id="modal-overlay">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Staff</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('addSTAFF')}}" method="POST">
        @csrf        <div class="modal-body">

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
                                <input type="text" name="name" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                    
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Password</label>
                                <input type="text" name="password" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                    

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
                        </div>
                        
                   <div class="row">
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
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Staff's (Image)</label>
                                <input type="file" name="file" accept=".jpg, .jpeg, .png" class="form-control" placeholder=""  autocomplete="off">
                            </div>
                        </div>   </div>
                     <!--  
                    
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Password</label>
                                <input type="password" name="ceo_password" class="form-control" placeholder="" required="" autocomplete="off" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                        <label>Next Of Kin</label>
                                <input type="text" name="ceo_next_of_kin" class="form-control" placeholder="" required="" autocomplete="off" >
                        </div>
                     </div>
                </div>
                       <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Home Address</label>
                                <input type="text" name="ceo_home_address" class="form-control" placeholder="" required="" autocomplete="off" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>CEO's Picture(Image)</label>
                                <input type="file" name="ceo_image" accept=".jpg, .jpeg, .png" class="form-control" placeholder=""  autocomplete="off">
                            </div>
                        </div>
                    </div-->
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="hr_admin">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>