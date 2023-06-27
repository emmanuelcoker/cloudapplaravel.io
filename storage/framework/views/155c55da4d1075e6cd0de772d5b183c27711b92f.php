<div class="searchable-items list">
    <div class="items items-header-section">
        <div class="item-content">
            <div class="" style="width: 25%; text-align: left;">
                <div class="n-chk align-self-center text-center">
                    <label class="new-control new-checkbox checkbox-primary">
                        <input type="checkbox" class="new-control-input" id="contact-check-all">
                        <span class="new-control-indicator"></span>
                    </label>
                </div>
                <h4 style="color:var(--blackText)">Locations</h4>
            </div>
            <div class="user-email" style="width: 25%; text-align: center;">
                <h4 style="color:var(--blackText)">Country</h4>
            </div>
            <div class="user-email" style="width: 25%; text-align: center;">
                <h4 style="color:var(--blackText)">Displays</h4>
            </div>
            <div class="action-btn" style="width: 25%; text-align: right;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                </svg>
            </div>
        </div>
    </div>

    <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="items"> 
        <div class="item-content" style="min-width: 100%;  ">
            <div class="user-profile" style="width: 25%; text-align: center;">
                <div class="n-chk align-self-center text-center">
                    <label class="new-control new-checkbox checkbox-primary">
                        <input type="checkbox" class="new-control-input contact-chkbox">
                        <span class="new-control-indicator"></span>
                    </label>
                </div>
                <p class="user-work" data-name="<?php echo e($location->name); ?>" style="font-size: 14px; display: block; margin-left: 40px; color:var(--tableFontColor)"><?php echo e($location->name); ?></p>
            </div>



            <div class="user-email" style="width: 25%; text-align: center;">
                <div class="user-meta-info">
                    <p class="user-work" style="font-size: 14px; display: block; margin-left: 40px;" data-occupation="<?php echo e($location['country']['name']); ?>"><?php echo e($location['country']['name']); ?></p>
                </div>
            </div>

            <div class="user-email" style="width: 25%; text-align: center;">
                <div class="user-meta-info">
                    <p class="user-work" style="font-size: 14px; display: block; margin-left: 40px;" data-occupation="<?php echo e(count($location['tvs'])); ?>"><?php echo e(count($location['tvs'])); ?></p>
                </div>
            </div>

            <div class="action-btn" style="width: 25%; text-align: right;">
                <a href="#" wire:click="setupEdit('<?php echo e($location->id); ?>')" data-toggle="modal" data-target="#editLocation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 edit">
                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                    </svg>
                </a>

                &nbsp;&nbsp;

                <a href="#" wire:click="delete('<?php echo e($location->id); ?>')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        <line x1="10" y1="11" x2="10" y2="17"></line>
                        <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg>
                </a>

                &nbsp;&nbsp;
                <a href="#" data-toggle="modal" wire:click="getLocationDetail('<?php echo e($location->id); ?>')" data-target="#locationDetail">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                </a>
                &nbsp;&nbsp;
                <a href="#" data-toggle="modal" wire:click="getDisplays('<?php echo e($location->id); ?>')" data-target="#displays">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tv">
                        <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                        <polyline points="17 2 12 7 7 2"></polyline>
                    </svg>
                </a>

                <?php if($settings['add_display']): ?>
                <a href="#" wire:click="setLocation('<?php echo e($location->id); ?>')" data-toggle="modal" data-target="#addDisplay">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    <?php if($locationDetails): ?>
    <!-- Add Modal -->
    <div wire:ignore.self class="modal fade" id="locationDetail" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content" style="background:var(--dashboardCard)">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">
                        <b><span id="uploadTitle" style="color:var(--blackText)"><span class="text-success" ><?php echo e($locationDetails['name']); ?> </span> Location</span></b>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <div class="row" style="padding:20px 0px 10px 50px">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 style="color:var(--blackText)"><b>Location Name</b></h5>
                                <p style="font-size: 16px; color:var(--tableFontColor)"><?php echo e($locationDetails['name']); ?></p>
                                <br>
                            </div>

                            <div class="col-md-12">
                                <h5 style="color:var(--blackText)"><b>Location Address</b></h5>
                                <p style="font-size: 16px; color:var(--tableFontColor)"><?php echo e($locationDetails['address']); ?></p>
                                <br>
                            </div>

                            <div class="col-md-12">
                                <h5 style="color:var(--blackText)"><b>Country</b></h5>
                                <p style="font-size: 16px; color:var(--tableFontColor)"><?php echo e($locationDetails['country']['name']); ?></p>
                                <br>
                            </div>

                            <div class="col-md-12">
                                <h5 style="color:var(--blackText)"><b>State</b></h5>
                                <p style="font-size: 16px; color:var(--tableFontColor)"><?php echo e($locationDetails['state']['name']); ?></p>
                                <br>
                            </div>

                            <div class="col-md-12">
                                <h5 style="color:var(--blackText)"><b>City</b></h5>
                                <p style="font-size: 16px; color:var(--tableFontColor)"><?php echo e($locationDetails['city']['name']); ?></p>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 style="color:var(--blackText)"><b>Supervisor</b></h5>
                                <p style="font-size: 16px; color:var(--tableFontColor)"><?php echo e($locationDetails['supervisor']); ?></p>
                                <br>
                            </div>

                            <div class="col-md-12">
                                <h5 style="color:var(--blackText)"><b>Supervisor Email</b></h5>
                                <p style="font-size: 16px; color:var(--tableFontColor)"><?php echo e($locationDetails['supervisor_email']); ?></p>
                                <br>
                            </div>

                            <div class="col-md-12">
                                <h5 style="color:var(--blackText)"><b>Supervisor Phone</b></h5>
                                <p style="font-size: 16px; color:var(--tableFontColor)"><?php echo e($locationDetails['supervisor_phone']); ?></p>
                                <br>
                            </div>

                            <div class="col-md-12">
                                <h5 style="color:var(--blackText)"><b>Manager</b></h5>
                                <p style="font-size: 16px; color:var(--tableFontColor)"><?php echo e($locationDetails['manager']); ?></p>
                                <br>
                            </div>

                            <div class="col-md-12">
                                <h5 style="color:var(--blackText)"><b>Manager Email</b></h5>
                                <p style="font-size: 16px; color:var(--tableFontColor)"><?php echo e($locationDetails['manager_email']); ?></p>
                                <br>
                            </div>

                            <div class="col-md-12">
                                <h5 style="color:var(--blackText)"><b>Manager Phone</b></h5>
                                <p style="font-size: 16px; color:var(--tableFontColor)"><?php echo e($locationDetails['manager_phone']); ?></p>
                                <br>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <?php endif; ?>



    <div wire:ignore.self class="modal fade" id="addDisplay" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content" style="background:var(--dashboardCard)">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">
                        <b><span id="uploadTitle"><span class="text-success">Add Display</span></b>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <form wire:submit.prevent="addDisplay">
                    <div class="modal-body">
                        <div class="row" style="padding:15px">
                            <div class="col-md-12" style="margin: auto;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-occupation">
                                            <i class="flaticon-fill-area"></i>
                                            <label for="">Select Zone</label>
                                            <select wire:model="zone" wire:change="getZoneLastID" class="form-control" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                <option value="">Choose a Zone</option>
                                                <?php $__currentLoopData = $zones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($zone->id); ?>"><?php echo e($zone->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <Br>
                                    </div>
                                    <div class="col-md-12">
                                        <BR>
                                        <div class="contact-occupation">
                                            <i class="flaticon-fill-area"></i>
                                            <label for="">Display ID</label>
                                            <input type="text" wire:model="displayIDName" class="form-control" readonly required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                        </div>
                                        <Br>
                                    </div>
                                    <div class="col-md-12">
                                        <BR>
                                        <div class="contact-occupation">
                                            <i class="flaticon-fill-area"></i>
                                            <label for="">Template Type</label>
                                            <select wire:model="template" id="" class="form-control" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                <option value="">Choose</option>
                                                <option value="1">Template 1</option>
                                                <option value="2">Template 2</option>
                                                <option value="3">Template 3</option>
                                                <option value="4">Template 4</option>
                                                <option value="5">Template 5</option>
                                                <option value="6">Template 6</option>
                                            </select>
                                        </div>
                                        <Br>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="display: flex; justify-content: center;  align-items: center; text-align: center;">

                        <button class="float-left btn btn-success">Create</button>
                        <button class="btn btn-danger" style="background: var(--danger); color:white" data-dismiss="modal"> <i class="flaticon-delete-1"></i> Close</button>

                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Edit Location -->
    <div wire:ignore.self class="modal fade" id="editLocation" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true" >
        <div class="modal-dialog  modal-dialog-centered" role="document" >
            <div class="modal-content" style="background:var(--dashboardCard)">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">
                        <b><span id="uploadTitle" style="color:var(--blackText)">Edit Location</span> </b>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <form id="addContactModalTitle" wire:submit.prevent="editLocation">
                    <div class="modal-body">
                        <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                        <div class="add-contact-box">
                            <div class="add-contact-content">

                                <?php echo csrf_field(); ?>

                                <div class="row">
                                    <div class="col-md-12" style="margin: auto;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="contact-occupation">
                                                    <i class="flaticon-fill-area"></i>
                                                    <input type="text" wire:model="name" class="form-control" placeholder="Location Name" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                </div>
                                                <Br>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="contact-occupation">
                                                    <i class="flaticon-fill-area"></i>
                                                    <input type="text" wire:model="address" class="form-control" placeholder="Location Address" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                </div>
                                                <Br>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="contact-occupation">
                                                    <i class="flaticon-fill-area"></i>
                                                    <input type="text" wire:model="supervisor" class="form-control" placeholder="Supervisor Name" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                </div>
                                                <Br>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="contact-occupation">
                                                    <i class="flaticon-fill-area"></i>
                                                    <input type="text" wire:model="phone" class="form-control" placeholder=" Supervisor Phone Number" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                </div>
                                                <Br>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="contact-occupation">
                                                    <i class="flaticon-fill-area"></i>
                                                    <input type="email" wire:model="email" class="form-control" placeholder=" Supervisor Email" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                </div>
                                                <Br>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="contact-occupation">
                                                    <select class="form-control" wire:model="country" wire:change="getStates" id="" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <Br>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="contact-occupation">
                                                    <select class="form-control" wire:model="state" wire:change="getCities" id="" style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                        <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($state->id); ?>"><?php echo e($state->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <Br>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="contact-occupation">
                                                    <select class="form-control" wire:model="city" id="" style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
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












    <!-- Add Modal -->
    <div wire:ignore.self class="modal fade" id="displays" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content" style="padding: 10px; background:var(--dashboardCard)">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">
                        <b><span id="uploadTitle" style="color:var(--blackText)"><span class="text-success"><?php echo e($displayName); ?></span> Display</span> </b>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <?php if(count($displays) > 0): ?>
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
                            <h4 style="color:var(--blackText)">Zone</h4>
                        </div>
                        <div class="user-email" style="width: 20%; text-align: center;">
                            <h4 style="color:var(--blackText)">ID</h4>
                        </div>
                        <div class="user-email" style="width: 20%; text-align: center;">
                            <h4 style="color:var(--blackText)">Status</h4>
                        </div>
                        <div class="action-btn" style="width: 20%; text-align: right;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <?php $__currentLoopData = $displays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $display): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="items">
                    <div class="item-content" style="min-width: 100%;  ">
                        <div class="user-profile" style="width: 20%; text-align: center;">
                            <div class="n-chk align-self-center text-center">
                                <label class="new-control new-checkbox checkbox-primary">
                                    <input type="checkbox" class="new-control-input contact-chkbox">
                                    <span class="new-control-indicator"></span>
                                </label>
                            </div>
                            <p class="user-name" data-name="<?php echo e($display->name); ?>" style="font-size: 14px; display: block; margin-left: 40px; color:var(--tableFontColor)"><?php echo e($display->name); ?></p>
                        </div>

                        <div class="user-email" style="width: 20%; text-align: center;">
                            <div class="user-meta-info">
                                <p class="user-name" data-name="<?php echo e($display['zone']['name']); ?>" style="font-size: 14px; display: block; margin-left: 40px; color:var(--tableFontColor)"><?php echo e($display['zone']['name']); ?></p>
                            </div>
                        </div>

                        <div class="user-email" style="width: 20%; text-align: center;">
                            <div class="user-meta-info">
                                <p class="user-name" data-name="Display<?php echo e($display->displayID); ?>" style="font-size: 14px; display: block; margin-left: 40px; color:var(--tableFontColor)">Display<?php echo e($display->displayID); ?></p>
                            </div>
                        </div>

                        <div class="user-email" style="width: 20%; text-align: center;">
                            <div class="user-meta-info" style="display: block; margin-left: 60px;"">
                                <label class=" switch s-icons s-outline s-outline-success mr-2">
                                <input <?php if($display->is_active): ?> checked <?php endif; ?> type="checkbox" wire:change="switch('<?php echo e($display->id); ?>')" >
                                <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="action-btn" style="width: 20%; text-align: right;">

                            <a href="<?php echo e(route('changeTv', $display['id'])); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 edit">
                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                </svg>
                            </a>

                            <a href="#" wire:click="deleteDisplay('<?php echo e($display->id); ?>')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                            </a>

                            <a href="#" onclick="window.open('<?php echo e(Variables::displayUrl($display->name)); ?>', 'newwindow', 'width=1300, height=720'); return false;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                            </a>

                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <h2 class="text-center text-danger" style="display: block; margin: 30px;">No Displays!</h2>
                <?php endif; ?>
            </div>
        </div>
    </div>



</div><?php /**PATH C:\laragon\www\CloudAppLaravel\resources\views/livewire/location-list.blade.php ENDPATH**/ ?>