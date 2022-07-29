<div class="row">
    <div class="col-sm-12" >
        <div style="position: absolute; top:40px; right:50px">
        <div class="form-group mr-1" >
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#sections"> 
            
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
Users Roles</button>
        </div>
        </div>
    </div>



    <!-- Add Modal -->
    <div class="modal fade" wire:ignore.self id="sections" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body" style="padding: 25px;">
                    <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                    <div class="add-contact-box">
                        <div class="add-contact-content">

                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-center">User Roles</h3>
                                    <hr>
                                    <table style="width: 100%; font-size: 15px; margin-top: 10px; margin-left:20px">
                                        <thead>
                                            <tr style="font-size: 18px;">
                                                <th>#</th>
                                                <th>Role</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $y = 1; ?>
                                            @foreach($roles as $role)
                                            <tr>
                                                <td>{{$y++}}</td>
                                                <td>{{$role->name}}</td>
                                                <td>
                                                    <svg wire:click="deleteRole('{{$role->id}}')" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                                    </svg>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row" style="margin: 30px 6px  6px  6px ; background: whitesmoke;  padding:15px 0px">
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <label for="" style="text-align:center"><b>Add Role</b></label>
                                        <br>
                                        <input type="text" wire:model="name" placeholder="Role Name" class="form-control mb-4">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <button type="button" wire:click="addRole" class="btn btn-success" style="display: block; margin: auto;">Save </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="" class="btn btn-success" > <i class="flaticon-delete-1"></i> Apply Changes</a>
                    <button class="btn btn-danger" data-dismiss="modal"> <i class="flaticon-delete-1"></i> Close</button>

                </div>

            </div>
        </div>
    </div>
</div>
</div>