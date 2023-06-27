<form wire:submit.prevent="save">
    <div class="searchable-items list">
        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing" style="margin-top: 40px;">
            <div class="info">

                <div class="row">
                    <div class="col-md-8" style="margin: auto;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-occupation">
                                            <i class="flaticon-fill-area"></i>
                                            <input type="text" wire:model="name" class="form-control" placeholder="Location Name" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                        </div>
                                        <Br>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="contact-occupation">
                                            <i class="flaticon-fill-area"></i>
                                            <input type="text" wire:model="address" class="form-control" placeholder="Location Address" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                        </div>
                                        <Br>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="contact-occupation">
                                            <i class="flaticon-fill-area"></i>
                                            <input type="text"  class="form-control" placeholder="Town" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                        </div>
                                        <Br>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="contact-occupation">
                                            <i class="flaticon-fill-area"></i>
                                            <input type="text"  class="form-control" placeholder="Postal Code" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                        </div>
                                        <Br>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="contact-occupation">
                                            <select class="form-control" wire:model="country" wire:change="getStates" id="" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                <option value="0">Country</option>
                                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <Br>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-occupation">
                                            <select class="form-control" wire:model="state" wire:change="getCities" id="" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                <option value="0">State</option>
                                                <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($state->id); ?>"><?php echo e($state->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <Br>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-occupation">
                                            <select class="form-control" wire:model="city" id="" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                <option value="0">City</option>
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
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-occupation">
                                            <i class="flaticon-fill-area"></i>
                                            <input type="text" wire:model="supervisor" class="form-control" placeholder="Supervisor Name" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                        </div>
                                        <Br>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-occupation">
                                            <i class="flaticon-fill-area"></i>
                                            <input type="text" wire:model="phone" class="form-control" placeholder=" Supervisor Phone Number" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                        </div>
                                        <Br>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-occupation">
                                            <i class="flaticon-fill-area"></i>
                                            <input type="email" wire:model="email" class="form-control" placeholder=" Supervisor Email" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                        </div>
                                        <Br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-occupation">
                                            <i class="flaticon-fill-area"></i>
                                            <input type="text" wire:model="manager" class="form-control" placeholder="Manager Name" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                        </div>
                                        <Br>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-occupation">
                                            <i class="flaticon-fill-area"></i>
                                            <input type="text" wire:model="manager_phone" class="form-control" placeholder=" Manager Phone Number" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                        </div>
                                        <Br>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-occupation">
                                            <i class="flaticon-fill-area"></i>
                                            <input type="email" wire:model="manager_email" class="form-control" placeholder=" Manager Email" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                        </div>
                                        <Br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-success" type="submit" style="display: block; margin:30px auto 45px auto; width:200px">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
            <path d="M13 3h2.996v5h-2.996v-5zm11 1v20h-24v-24h20l4 4zm-17 5h10v-7h-10v7zm15-4.171l-2.828-2.829h-.172v9h-14v-9h-3v20h20v-17.171zm-3 10.171h-14v1h14v-1zm0 2h-14v1h14v-1zm0 2h-14v1h14v-1z"></path>
        </svg> &nbsp;&nbsp; Save
    </button>
</form><?php /**PATH C:\laragon\www\CloudAppLaravel\resources\views/livewire/location.blade.php ENDPATH**/ ?>