<div class="searchable-items list">
    <div class="items items-header-section">
        <div class="item-content">
            <div class="" style="width: 20%; text-align: left;">
                <div class="n-chk align-self-center text-center">
                    <label class="new-control new-checkbox checkbox-primary">
                        <input type="checkbox" class="new-control-input" id="contact-check-all">
                        <span class="new-control-indicator"></span>
                    </label>
                </div>
                <h4 style="color:var(--blackText)">Name</h4>
            </div>
            <div class="user-email" style="width: 20%; text-align: center;">
                <h4 style="color:var(--blackText)">Email</h4>
            </div>
            <div class="user-email" style="width: 20%; text-align: center;">
                <h4 style="color:var(--blackText)">Phone Number</h4>
            </div>
            <div class="user-email" style="width: 20%; text-align: center;">
                <h4 style="color:var(--blackText)">Role</h4>
            </div>
            <div class="action-btn" style="width: 20%; text-align: right;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                </svg>
            </div>
        </div>
    </div>

    @foreach($users as $user )
    <div class="items">
        <div class="item-content" style="min-width: 10%;  ">
            <div class="user-profile" style="width: 20%; text-align: center;">
                <div class="n-chk align-self-center text-center">
                    <label class="new-control new-checkbox checkbox-primary">
                        <input type="checkbox" class="new-control-input contact-chkbox">
                        <span class="new-control-indicator"></span>
                    </label>
                </div>
                <p class="user-name" data-name="{{$user->name}}" style="font-size: 14px; display: block; margin-left: 40px; color:var(--tableFontColor)">{{$user->name}}</p>
            </div>

            <div class="user-email" style="width: 20%; text-align: center;">
                <div class="user-meta-info">
                    <p class="user-name" data-name="{{$user->email}}" style="font-size: 14px; display: block; margin-left: 40px; color:var(--tableFontColor)">{{$user->email}}</p>
                </div>
            </div>

            <div class="user-email" style="width: 20%; text-align: center;">
                <div class="user-meta-info">
                    <p class="user-name" data-name="{{$user->phone}}" style="font-size: 14px; display: block; margin-left: 40px; color:var(--tableFontColor)">{{$user->phone}}</p>
                </div>
            </div>

            <div class="user-email" style="width: 20%; text-align: center;">
                <div class="user-meta-info">
                    <p class="user-work" style="font-size: 14px; display: block; margin-left: 40px; color:var(--tableFontColor)" data-occupation="{{$user['role']['name']}}">{{$user['role']['name']}}</p>
                </div>
            </div>


            <div class="action-btn" style="width: 20%; text-align: right;">
                <a href="#" wire:click="edit('{{$user->id}}')" data-toggle="modal" data-target="#exampleModal" >                    
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </a>
                &nbsp; &nbsp; &nbsp;
                <a href="#" wire:click="delete('{{$user->id}}')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        <line x1="10" y1="11" x2="10" y2="17"></line>
                        <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg>

                </a>
            </div>

        </div>
    </div>
    @endforeach



     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
                            <div class="modal-dialog  modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Edit User</b></h5>
                                    </div>

                                    <form wire:submit.prevent="update">
                                        <div class="modal-body">
                                            <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                                            <div class="add-contact-box">
                                                <div class="add-contact-content">

                                                    @csrf


                                                    <div class="row">
                              
                                        <div class="col-md-12" style="left: 0pc; right: 0px; margin:auto">
                                            <div class="form-group">
                                                <label for="degree3"><b>Full Name</b></label>
                                                <input type="text" wire:model="name" class="form-control mb-4" required>
                                            </div>
                                        </div>

                              
                                        <div class="col-md-12" style="left: 0pc; right: 0px; margin:auto">
                                            <div class="form-group">
                                                <label for="degree4"><b>Email</b></label>
                                                <input type="email" wire:model="email" class="form-control mb-4" required>
                                            </div>
                                        </div>
                                
                              
                                        <div class="col-md-12" style="left: 0pc; right: 0px; margin:auto">
                                            <div class="form-group">
                                                <label for="degree4"><b>Phone Number</b></label>
                                                <input type="tel" wire:model="number" class="form-control mb-4" required>
                                            </div>
                                        </div>

                              
                                        <div class="col-md-12" style="left: 0pc; right: 0px; margin:auto">
                                            <div class="form-group">
                                                <label for="degree3"><b>Role</b></label>
                                                <select wire:model="role" id="" class="form-control" required>
                                                    <option value="">Choose</option>
                                                    @foreach($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    

                              
                                        <div class="col-md-12" style="left: 0pc; right: 0px; margin:auto">
                                            <div class="form-group">
                                                <label for="degree4"><b>Password</b></label>
                                                <input type="password" wire:model="password" class="form-control mb-4" >
                                            </div>
                                        </div>
                                    

                              
                                        <div class="col-md-12" style="left: 0pc; right: 0px; margin:auto">
                                            <div class="form-group">
                                                <label for="degree4"><b>Confirm Password</b></label>
                                                <input type="password" wire:model="confirm" class="form-control mb-4" >
                                            </div>
                                        </div>
                                    

                            </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="modal-footer" style="display: flex; justify-content: center;  align-items: center; text-align: center;">
                                            <button id="btn-edit" class="float-left btn">Update</button>

                                            <button class="btn" style="background: var(--danger); color:white" data-dismiss="modal"> <i class="flaticon-delete-1"></i> Discard</button>

                                        </div>
                                    </form>

                                </div>
                            </div>


                        </div>
</div>