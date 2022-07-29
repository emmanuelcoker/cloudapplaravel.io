<div>

    <!-- Change Password -->
    <div wire:ignore.self class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content" style="background:var(--dashboardCard)">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">
                        <b><span id="uploadTitle" style="color:var(--blackText)">Change Password</span> </b>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <form id="addContactModalTitle" wire:submit.prevent="change">
                    <div class="modal-body">
                        <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                        <div class="add-contact-box">
                            <div class="add-contact-content">

                                @csrf

                                <div class="row">
                                    <div class="col-md-12" style="margin: auto;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="contact-occupation">
                                                    <i class="flaticon-fill-area"></i>
                                                    <input type="text" wire:model="password" class="form-control" placeholder="New Password" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                </div>
                                                <Br>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="contact-occupation">
                                                    <i class="flaticon-fill-area"></i>
                                                    <input type="text" wire:model="confirm" class="form-control" placeholder="Confirm Password" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                </div>
                                                <Br>
                                            </div>

                                            <br><br>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="display: flex; justify-content: center;  align-items: center; text-align: center;">

                        <button class="float-left btn btn-success">Update</button>
                        <button class="btn btn-danger" style="background: var(--danger); color:white" data-dismiss="modal"> <i class="flaticon-delete-1"></i> Close</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>