<div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
    <div id="general-info" class="section general-info">
        <div class="info">
            <h6 class="" style="color:var(--blackText)">Zones</h6>
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                            <div class="form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="fullName" style="color:var(--blackText)">Company Industry</label>
                                            <select class="form-control" wire:change="submit" wire:model="industryID" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                <?php $__currentLoopData = $industries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $industry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($industry->id); ?>"><?php echo e($industry->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mr-1">
                                            <button style="display: block; margin: auto;" type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#createZone">View <?php echo e($industryData->name); ?> Zones</button>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Add Modal -->
    <div class="modal fade" wire:ignore.self id="createZone" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background:var(--fullBackground)">
                <div class="modal-body" style="padding: 25px;">
                    <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                    <div class="add-contact-box">
                        <div class="add-contact-content">

                            <div class="row">
                                <div class="col-md-12">
                                <?php if(count($industryData->zones) > 0): ?>
                                    <table style="width: 100%; font-size: 15px; margin-top: 10px; margin-left:20px">
                                        <thead>
                                            <tr style="font-size: 18px;">
                                                <th style="color:var(--blackText)">Zones</th>
                                                <th class="text-center" style="color:var(--blackText)">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                                <?php $__currentLoopData = $industryData->zones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td style="color:var(--tableFontColor)"><?php echo e($zone->name); ?></td>
                                                        <td class="text-center">
                                                            <label class="switch s-outline s-outline-info  mb-4 mr-2">
                                                                <input id="<?php echo e($zone->id); ?>" class="zones" type="checkbox" <?php if($zone->is_active == true): ?> checked <?php endif; ?>>
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                        </tbody>
                                    </table>
                                    <?php else: ?>
                                            <h3 class="text-center text-danger">No Zone yet!</h3>
                                            <?php endif; ?>
                                </div>
                            </div>

                            <div class="row" style="margin: 30px 6px  6px  6px ; background: var(--dashboardCard);  padding:15px 0px">
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <label for=""><b>Add Zone</b></label>
                                        <input type="text" wire:model="name" placeholder="Input Zone" class="form-control mb-4" style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                    <button type="button" wire:click="addZone" class="btn btn-success" style="display: block; margin: auto;" >Save </button>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal"> <i class="flaticon-delete-1"></i> Close</button>

                </div>

            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\CloudAppLaravel\CloudAppLaravel\resources\views/livewire/industry.blade.php ENDPATH**/ ?>