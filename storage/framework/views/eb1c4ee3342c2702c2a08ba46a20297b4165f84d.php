<div class="searchable-items list">
<?php if(Permission::check('can_update_rate')): ?>
    <div class="row" style="width: 153%;">
        <div class="col-md-6 " style="left: 0px; right: 0px; margin:10px auto 40px auto;">
            <div style="display: inline-block;">
                <a class="btn btn-success" href="#" role="button" id="pendingTask" data-toggle="modal" data-target="#interestRate1" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                        <path d="M7 11v13h2v-5h2v3h2v-7h2v9h2v-13h6l-11-11-11 11z"></path>
                    </svg> &nbsp; Update by Excel
                </a>

            </div>
            &nbsp;&nbsp;
            <div style="display: inline-block;">
                <a class="btn btn-primary" href="#" role="button" id="pendingTask" data-toggle="modal" data-target="#addInt" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                        <path d="M11.5 0c6.347 0 11.5 5.153 11.5 11.5s-5.153 11.5-11.5 11.5-11.5-5.153-11.5-11.5 5.153-11.5 11.5-11.5zm0 1c5.795 0 10.5 4.705 10.5 10.5s-4.705 10.5-10.5 10.5-10.5-4.705-10.5-10.5 4.705-10.5 10.5-10.5zm.5 10h6v1h-6v6h-1v-6h-6v-1h6v-6h1v6z"></path>
                    </svg> &nbsp; Add <?php echo e($tabs->tab3); ?>

                </a>
            </div>
        </div>
    </div>
<?php endif; ?>

    <div class="items items-header-section">
        <div class="item-content">
            <div class="user-email">
                <h4 style="color:var(--blackText)">Rate Name</h4>
            </div>
            <div class="user-email">
                <h4 style="color:var(--blackText)">Rate Value</h4>
            </div>

            <div class="action-btn">
            <?php if(Permission::check('can_update_rate')): ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    <line x1="10" y1="11" x2="10" y2="17"></line>
                    <line x1="14" y1="11" x2="14" y2="17"></line>
                </svg>
                <?php endif; ?>
            </div>
            
        </div>
    </div>
    <form action="#" wire:submit.prevent="save">
        <?php $__currentLoopData = $interests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="items">
            <div class="item-content">

                <div class="user-email">
                    <p class="info-title">County: </p>
                    <div class="form-group">
                        <span style="display: none;"><?php echo e($x++); ?> <?php echo e($i++); ?></span>
                        <input type="text" wire:model="name.<?php echo e($x); ?>" class="form-control mb-4" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                        <input type="hidden" wire:model="key.<?php echo e($i); ?>" class="form-control mb-4" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                    </div>
                </div>
                <div class="user-location">
                    <p class="info-title">Value: </p>
                    <div class="form-group">
                        <span style="display: none;"><?php echo e($y++); ?></span>
                        <input type="text" wire:model="value.<?php echo e($y); ?>" class="form-control mb-4" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                    </div>
                </div>
               
                <div class="action-btn">
                <?php if(Permission::check('can_update_rate')): ?>
                    <a href="#" wire:click="delete('<?php echo e($interest->id); ?>')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>

                    </a>
                    <?php endif; ?>
                </div>
               
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if(Permission::check('can_update_rate')): ?> 
        <button class="btn btn-success" type="submit" style="display: block; margin:40px auto 10px auto; width:15%">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                <path d="M13 3h2.996v5h-2.996v-5zm11 1v20h-24v-24h20l4 4zm-17 5h10v-7h-10v7zm15-4.171l-2.828-2.829h-.172v9h-14v-9h-3v20h20v-17.171zm-3 10.171h-14v1h14v-1zm0 2h-14v1h14v-1zm0 2h-14v1h14v-1z"></path>
            </svg>&nbsp;&nbsp; Save
        </button>
        <?php endif; ?>
    </form>



    <div class="modal fade" wire:ignore.self id="addInt" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background:var(--dashboardCard)">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle" style="color:var(--blackText)"><b>Add <?php echo e($tabs->tab3); ?></b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <form wire:submit.prevent="add">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" wire:model="n" class="form-control mb-4" placeholder="Name" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" wire:model="v" class="form-control mb-4" placeholder="Enter value" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
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
</div><?php /**PATH C:\laragon\www\CloudAppLaravel\resources\views/livewire/interest1.blade.php ENDPATH**/ ?>