<div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
    <div id="general-info" class="section general-info">
        <div class="info">
            <h6 class="" style="color:var(--blackText)">FAQ & Tutorial Sections</h6>
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                            <div class="form">
                                <div class="row">
                                    <div class="col-sm-6" style="margin:auto">
                                        <div class="form-group mr-1">
                                            <button style="display: block; margin: auto;" type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#sections">Manage Sections</button>
                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-6">
                                        <div class="form-group mr-1">
                                            <button style="display: block; margin: auto;" type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#plans">Manage App Features</button>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Add Modal -->
    <div class="modal fade" wire:ignore.self id="sections" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background:var(--fullBackground)">
                <div class="modal-body" style="padding: 25px;">
                    <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                    <div class="add-contact-box">
                        <div class="add-contact-content">

                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-center" style="color:var(--blackText)">List of Sections</h3>
                                    <hr>
                                    <table style="width: 100%; font-size: 15px; margin-top: 10px; margin-left:20px">
                                        <thead>
                                            <tr style="font-size: 18px;">
                                            <th>#</th>
                                                <th style="color:var(--blackText)">Sections</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php $x = 1; ?>
                                            <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td style="color:var(--tableFontColor)"><?php echo e($x++); ?></td>
                                                <td style="color:var(--tableFontColor)"><?php echo e($section->name); ?></td>
                                                <td>
                                                    <svg wire:click="deleteSection('<?php echo e($section->id); ?>')" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                                    </svg>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row" style="margin: 30px 6px  6px  6px ; background:var(--dashboardCard);  padding:15px 0px">
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <label for=""><b>Add Section</b></label>
                                        <input type="text" wire:model="section" placeholder="Input Section Name" class="form-control mb-4" style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <button type="button" wire:click="addSection" class="btn btn-success" style="display: block; margin: auto;">Save </button>
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


    <!-- Add Modal -->
    <div class="modal fade" wire:ignore.self id="plans" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" >
                <div class="modal-body" style="padding: 25px;">
                    <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                    <div class="add-contact-box">
                        <div class="add-contact-content">

                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-center">App Features</h3>
                                    <hr>
                                    <table style="width: 100%; font-size: 15px; margin-top: 10px; margin-left:20px">
                                        <thead>
                                            <tr style="font-size: 18px;">
                                                <th>#</th>
                                                <th>Features</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $y = 1; ?>
                                            <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($y++); ?></td>
                                                <td><?php echo e($feature->item); ?></td>
                                                <td>
                                                    <svg wire:click="deleteFeature('<?php echo e($feature->id); ?>')" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                                    </svg>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row" style="margin: 30px 6px  6px  6px ; background: whitesmoke;  padding:15px 0px">
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <label for="" style="text-align:center"><b>Add App Feature</b></label>
                                        <br>
                                        <input type="text" wire:model="feature" placeholder="Feature" class="form-control mb-4">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <button type="button" wire:click="addFeature" class="btn btn-success" style="display: block; margin: auto;">Save </button>
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
</div><?php /**PATH C:\xampp\htdocs\CloudAppLaravel\CloudAppLaravel\resources\views/livewire/sections.blade.php ENDPATH**/ ?>