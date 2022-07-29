
    <div class="searchable-items list">
    <?php if(Permission::check('can_update_rate')): ?>
        <div class="row" style="width: 155%;">
            <div class="col-md-6 " style="left: 0px; right: 0px; margin:10px auto 40px auto;">
                <div style="display: inline-block;">
                    <a class="btn btn-success" href="#" role="button" id="pendingTask" data-toggle="modal" data-target="#exampleModalCenter" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                            <path d="M7 11v13h2v-5h2v3h2v-7h2v9h2v-13h6l-11-11-11 11z"></path>
                        </svg> &nbsp; Update by Excel
                    </a>
                </div>
                &nbsp;&nbsp;
                <div style="display: inline-block;">
                    <a class="btn btn-primary" href="#" role="button" id="pendingTask" data-toggle="modal" data-target="#addRate" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                            <path d="M11.5 0c6.347 0 11.5 5.153 11.5 11.5s-5.153 11.5-11.5 11.5-11.5-5.153-11.5-11.5 5.153-11.5 11.5-11.5zm0 1c5.795 0 10.5 4.705 10.5 10.5s-4.705 10.5-10.5 10.5-10.5-4.705-10.5-10.5 4.705-10.5 10.5-10.5zm.5 10h6v1h-6v6h-1v-6h-6v-1h6v-6h1v6z"></path>
                        </svg> &nbsp; Add <?php echo e($tabs->tab1); ?>

                    </a>
                </div>

            </div>
        </div>
        <?php endif; ?>



        <form action="#" wire:submit.prevent="save">

            <div class="items">
                <div class="item-content">
                    <div class="user-profile" style="width: 20%; text-align: left;">
                        <div class="n-chk align-self-center text-center">
                            <label class="new-control new-checkbox checkbox-primary">
                                <input type="checkbox" class="new-control-input contact-chkbox">
                                <span class="new-control-indicator"></span>
                            </label>
                        </div>
                        <h4 style="margin-left: 40px; color:var(--blackText)"><b>Country</b></h4>
                    </div>

                    <div class="user-email" style="width: 20%; ">
                        <div class="form-group" style="width: 70%;   float:right">
                            <input type="text" wire:model="tab1" class="form-control mb-4" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                        </div>
                    </div>
                    <div class="user-email" style="width: 20%; ">
                        <div class="form-group " style="width: 70%;   float:right">
                            <input type="text" wire:model="tab2" class="form-control mb-4" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                        </div>
                    </div>
                    <div class="user-email" style="width: 20%; ">
                        <div class="form-group" style="width: 70%;   float:right">
                            <input type="text" wire:model="tab3" class="form-control mb-4" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                        </div>
                    </div>
                    <?php if(Permission::check('can_update_rate')): ?>
                    <div class="action-btn" style="width: 20%; ">
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <?php $__currentLoopData = $rates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="items">
                <div class="item-content">
                    <div class="user-profile" style="width: 20%; text-align: left;">
                        <div class="n-chk align-self-center text-center">
                            <label class="new-control new-checkbox checkbox-primary">
                                <input type="checkbox" class="new-control-input contact-chkbox">
                                <span class="new-control-indicator"></span>
                            </label>
                        </div>
                        <img src="<?php echo e(Variables::tvPath('flag/'.$rate->currency.'.png')); ?>" style="width:70px; height:70px; margin-left:40px" alt="">
                    </div>

                    <div class="user-email" style="width: 20%; ">
                        <div class="form-group" style="width: 70%;   float:right">
                            <span style="display: none;"><?php echo e($x++); ?> <?php echo e($i++); ?></span>
                            <select wire:model="currency.<?php echo e($x); ?>" class="form-control mb-4" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                <option value="<?php echo e($rate->currency); ?>"><?php echo e($rate->currency); ?></option>
                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($country->currency); ?>"><?php echo e($country->currency); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <input type="hidden" wire:model="key.<?php echo e($i); ?>" class="form-control mb-4" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                        </div>
                    </div>
                    <div class="user-email" style="width: 20%;">
                        <div class="form-group" style="width: 70%;   float:right">
                            <span style="display: none;"><?php echo e($y++); ?></span>
                            <input type="text" wire:model="buy.<?php echo e($y); ?>" class="form-control mb-4" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                        </div>
                    </div>
                    <div class="user-email" style="width: 20%; ">
                        <p class="info-title">Sell: </p>
                        <div class="form-group" style="width: 70%;   float:right">
                            <span style="display: none;"><?php echo e($z++); ?></span>
                            <input type="text" wire:model="sell.<?php echo e($z); ?>" class="form-control mb-4" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                        </div>
                    </div>
                    <?php if(Permission::check('can_update_rate')): ?>
                    <div class="action-btn" style="width: 20%; text-align: right;">
                        <a href="#" wire:click="delete('<?php echo e($rate->id); ?>')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>

                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(Permission::check('can_update_rate')): ?> 
            <button class="btn btn-success" type="submit" style="display: block; margin:40px auto 10px auto; width:200px">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                    <path d="M13 3h2.996v5h-2.996v-5zm11 1v20h-24v-24h20l4 4zm-17 5h10v-7h-10v7zm15-4.171l-2.828-2.829h-.172v9h-14v-9h-3v20h20v-17.171zm-3 10.171h-14v1h14v-1zm0 2h-14v1h14v-1zm0 2h-14v1h14v-1z"></path>
                </svg> &nbsp;&nbsp; Save
            </button>
            <?php endif; ?>
        </form>




 <!-- add fx-rate Modal -->
 <div class="modal fade" wire:ignore.self id="addRate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background:var(--dashboardCard)">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle" style="color:var(--blackText)"><b>Add <?php echo e($tabs->tab1); ?></b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <form wire:submit.prevent="add">
                    <div class="modal-body">
                        <div class="row" style="margin: auto;">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select wire:model="c" class="form-control mb-4" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                        <option value="">Select Currency</option>
                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($country->currency); ?>"><?php echo e($country->currency); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" wire:model="b" class="form-control mb-4" placeholder="<?php echo e($tabs->tab5); ?> value" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" wire:model="s" class="form-control mb-4" placeholder="<?php echo e($tabs->tab6); ?> value" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Add</button>
                        <button class="btn " data-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
    


   <?php /**PATH C:\laragon\www\CloudAppLaravel\resources\views/livewire/fx-rate.blade.php ENDPATH**/ ?>