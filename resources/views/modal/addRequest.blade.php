<div class="modal fade" id="modal-overlay">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Role</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('insertRequest')}}" method="POST">
           @csrf     <div class="modal-body">

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
                                <label>Available Request</label>
                                <select  id="hr_type" disabled="disabled" size="6" class="form-control" required>
                            @foreach($selectRequest as $row)        
    
                                    <option >&rarr; {{ $row->request_type}}</option>
                                    @endforeach
                                </select>           </div>
                        </div>
                    
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>New Request</label>
                                <input type="text" name="request_type" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    
                   
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