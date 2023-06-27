<?php $__env->startSection('css'); ?>

<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo e(Path::asset('admin/plugins/pricing-table/css/component.css')); ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo e(Path::asset('admin/assets/css/forms/theme-checkbox-radio.css')); ?>">

<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo e(Path::asset('admin/assets/css/scrollspyNav.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(Path::asset('admin/plugins/file-upload/file-upload-with-preview.min.css')); ?>" rel="stylesheet" type="text/css" />

<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="<?php echo e(Path::asset('admin/assets/css/components/tabs-accordian/custom-tabs.css')); ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo e(Path::asset('admin/assets/css/forms/theme-checkbox-radio.css')); ?>">

<style>
    .priceLogo {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        display: block;
        margin: 10px auto 0px auto;
    }

    .operations1 {
        position: absolute;
        top: 10px;
        left: 10px;
    }

    .operations2 {
        position: absolute;
        top: 10px;
        right: 10px;
    }

    .operations1 a,
    .operations2 a {
        border-radius: 50px;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="layout-px-spacing">
    <?php if(Session::has('success')): ?>
    <script>
        swal("Uploaded", "<?php echo Session::get('success'); ?>", "success");
    </script>
    <?php endif; ?>
    <?php if(Session::has('fail')): ?>
    <script>
        swal("Ooosps", "<?php echo Session::get('fail'); ?>", "error");
    </script>
    <?php endif; ?>
    <?php if(Session::has('errors')): ?>
    <?php $__currentLoopData = Session::get('errors'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <script>
        swal("Ooosps", "<?php echo $error; ?>", "error");
    </script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 filtered-list-search layout-spacing align-self-center" style="margin-top: 50px;">
            <div class="fq-header-wrapper">
                <h1 class=""  style="color:var(--tableTitleColor1)">Admin Plans</h1>
                <p class=""  style="color:var(--tableTitleColor1)">Manage plans and features!</p>
            </div>
        
            <button class="btn btn-success" type="submit" style="display: block; margin:30px 0px;float:right; " data-toggle="modal" data-target="#plan">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                    <path d="M11.5 0c6.347 0 11.5 5.153 11.5 11.5s-5.153 11.5-11.5 11.5-11.5-5.153-11.5-11.5 5.153-11.5 11.5-11.5zm0 1c5.795 0 10.5 4.705 10.5 10.5s-4.705 10.5-10.5 10.5-10.5-4.705-10.5-10.5 4.705-10.5 10.5-10.5zm.5 10h6v1h-6v6h-1v-6h-6v-1h6v-6h1v6z"></path>
                </svg> &nbsp;&nbsp;
                Add Plan
            </button>
        </div>
        <div class="col-lg-12" style="margin-top: 50px;">
            <section class="pricing-section bg-7 mt-5">
                <div class="pricing pricing--norbu">


                    <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="pricing__item" style="background:var(--dashboardCard); color: var(--blackText)">
                        <div class="operations1">
                            <a href="#" data-toggle="modal" data-target="#edit" class="btn btn-primary" onclick="
                                document.getElementById('planID').value = '<?php echo e($plan->id); ?>';
                                document.getElementById('plan_price').value = '<?php echo e($plan->price); ?>';
                                document.getElementById('plan_name').value = '<?php echo e($plan->name); ?>';
                                document.getElementById('planName').innerHTML = '<?php echo e($plan->name); ?>';"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                    <path d="M12 20h9"></path>
                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                </svg></a>
                        </div> 
                        <div class="operations2">
                            <a href="<?php echo e(route('plan.delete', $plan->id)); ?>" class="btn btn-danger"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg></a>
                        </div>
                        <div> 
                            <img src="<?php echo e(Path::asset('images/'.$plan->image)); ?>" alt="sdf" class="priceLogo">
                        </div>
                        <h3 class="pricing__title" style="color:var(--blackText)"><?php echo e($plan->name); ?></h3>
                        <div class="pricing__price"><span class="pricing__currency">$</span><?php echo e(number_format($plan->price)); ?><span class="pricing__period">/ month</span></div>
                        <ul class="pricing__feature-list text-center">
                            <li class="pricing__feature">
                                <?php echo e($plan->banners); ?> Banners
                            </li>
                            <br>
                            <li class="pricing__feature">
                                <?php echo e($plan->logos); ?> Logos
                            </li>
                            <br>
                            <li class="pricing__feature">
                                <?php echo e($plan->media); ?> Media Contents
                            </li>
                            <br>
                            <li class="pricing__feature">
                                <?php echo e($plan->schedule_video); ?> Media Schedule Contents
                            </li>
                            <br>
                            <li class="pricing__feature">
                                <?php echo e($plan->locations); ?> Locations
                            </li>
                            <br>
                            <li class="pricing__feature">
                                <?php echo e($plan->displays); ?> Displays
                            </li>
                            <br>
                        </ul>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            </section>
        </div>
    </div>

</div>





<!-- Add Modal -->
<div class="modal fade" id="plan" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="addContactModalTitle" method="post" action="<?php echo e(route('plan.store')); ?>" enctype="multipart/form-data">

                <div class="modal-head" style="margin:10px;">
                    <h3 style="text-primary">Add a Plan</h3>
                    <hr>
                </div>
                <div class="modal-body">
                    <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                    <div class="add-contact-box">
                        <div class="add-contact-content">

                            <?php echo csrf_field(); ?>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <label for="">Name</label>
                                            <input type="text" name="name" placeholder="Full Name" required class="form-control mb-4">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <label for="">Price</label>
                                            <input type="text" name="price" placeholder="Price" required class="form-control mb-4">
                                        </div>
                                        <Br><br>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="custom-file-container" data-upload-id="myFirstImage">
                                            <label>Upload Plan Image <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                            <label class="custom-file-container__custom-file">
                                                <input type="file" name="file" class="custom-file-container__custom-file__custom-file-input">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                                            </label>
                                            <div class="custom-file-container__image-preview"></div>
                                        </div>
                                    </div>
                                   

                                    

                                </div>

                                <div class="col-md-6">
                                <div class="col-md-12">
                                        <h5 class="text-primary">Features</h5>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <div class="form-group mb-4">
                                            <label for="">No of Banners</label>
                                            <input type="number" name="banners" placeholder="No of Banners" required class="form-control mb-4">
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <div class="form-group mb-4">
                                            <label for="">No of Logos</label>
                                            <input type="number" name="logos" placeholder="No of Logos" required class="form-control mb-4">
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <div class="form-group mb-4">
                                            <label for="">Media contents</label>
                                            <input type="number" name="media" placeholder="No of Media Contents" required class="form-control mb-4">
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <div class="form-group mb-4">
                                            <label for="">Media Scheduled contents</label>
                                            <input type="number" name="media_schedule" placeholder="No of Media Scheduled Contents" required class="form-control mb-4">
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="col-md-12" style="margin-top: 10px;">
                                        <div class="form-group mb-4">
                                        <label for="">Daily Schedule</label>
                                            <select name="schedule" id="" class="form-control">
                                                <option value="on">Activate</option>
                                                <option value="off">Deactivate</option>
                                            </select>
                                        </div>
                                    </div> -->


                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <div class="form-group mb-4">
                                            <label for="">Locations</label>
                                            <input type="number" name="locations" placeholder="No of Locations" required class="form-control mb-4">
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 10px;">
                                        <div class="form-group mb-4">
                                            <label for="">Displays</label>
                                            <input type="number" name="displays" placeholder="No of Displays" required class="form-control mb-4">
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button class="float-left btn btn-success">Add</button>

                    <button class="btn btn-danger" data-dismiss="modal"> <i class="flaticon-delete-1"></i> Discard</button>

                </div>
            </form>
        </div>
    </div>
</div>




<!-- edit Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="addContactModalTitle" method="post" action="<?php echo e(route('plan.update')); ?>" enctype="multipart/form-data">

                <div class="modal-head" style="margin:10px;">
                    <h3 style="text-primary">Edit <span id="planName"></span></h3>
                    <hr>
                </div>
                <div class="modal-body">
                    <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                    <div class="add-contact-box">
                        <div class="add-contact-content">

                            <?php echo csrf_field(); ?>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <label for="">Name</label>
                                            <input type="hidden" name="id" id="planID" required class="form-control mb-4">
                                            <input type="text" name="name" placeholder="Full Name" id="plan_name" required class="form-control mb-4">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <label for="">Price</label>
                                            <input type="text" name="price" placeholder="Price" id="plan_price" required class="form-control mb-4">
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span id="planFeatures"></span>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group mb-4">
                                                    <label for="">Add More Features</label>
                                                    <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-text checkbox-success">
                                                            <input type="checkbox" name="features[]" value="<?php echo e($feature->id); ?>" class="new-control-input">
                                                            <span class="new-control-indicator"></span><span class="new-chk-content"> &nbsp; <?php echo e($feature->item); ?></span>
                                                        </label>
                                                    </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-12" style="display: flex; justify-content: center;  align-items: center; text-align: center;">
                                        <span id="showLastImage"></span>
                                        <br><br>
                                    </div> -->
                                </div>

                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="custom-file-container" data-upload-id="myFirstImage1">
                                            <label>Upload Plan Image <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                            <label class="custom-file-container__custom-file">
                                                <input type="file" name="file" class="custom-file-container__custom-file__custom-file-input">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                                            </label>
                                            <div class="custom-file-container__image-preview"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button class="float-left btn btn-success">Update</button>

                    <button class="btn btn-danger" data-dismiss="modal"> <i class="flaticon-delete-1"></i> Discard</button>

                </div>
            </form>
        </div>
    </div>
</div>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(Path::asset('admin/assets/js/apps/contact.js')); ?>"></script>


<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo e(Path::asset('admin/assets/js/scrollspyNav.js')); ?>"></script>
<script src="<?php echo e(Path::asset('admin/plugins/file-upload/file-upload-with-preview.min.js')); ?>"></script>

<script>
    //First upload
    var firstUpload = new FileUploadWithPreview('myFirstImage')
    var firstUpload = new FileUploadWithPreview('myFirstImage1')
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CloudAppLaravel\resources\views/superadmin/plans.blade.php ENDPATH**/ ?>