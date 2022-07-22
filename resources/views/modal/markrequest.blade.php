<div class="modal fade" id="modal-edits{{$row->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Send Request</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('sendrequest')}}" method="POST" enctype="multipart/form-data">
              @csrf  <div class="modal-body">

                    <div class="row">
                       
                               
                       <input type="hidden"   name="staff_name" value="{{$row->name}}" class="form-control" placeholder="" required="" autocomplete="off">
                            
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text"  value="{{$row->name}}" disabled="" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                        <input type="hidden" name="department"  value="{{$row->department}}">  
                     <input type="hidden" name="status" value="Pending">  
                     <input type="hidden" name="rank" value="1">  
                     <input type="hidden" name="date" value="<?php echo date('M d,Y');?>">   
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Request Type</label>
                                  <select name="request_type" class="form-control" required>
                                  <option value=""
                                   selected="selected">&larr; Select Type &rarr;</option>
                                  @foreach($selectRequest as $row)
                                    <option value="{{$row->request_type}}">&rarr; {{$row->request_type}}</option>
                                 @endforeach
                                   
                                </select>
                            </div>
                        </div>
                    </div>
                     
                  
                </div>
                <div class="modal-footer justify-content-between">
                   
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="edit_emplo">Send Request</button>
                </div>
            </form>
        </div>
    </div>
</div>