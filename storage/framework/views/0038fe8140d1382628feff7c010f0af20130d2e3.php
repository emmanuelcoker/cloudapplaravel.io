<?php $__env->startSection('content'); ?>
<div class="form-content">

    <h1 class="">Get started with a <br /> free account</h1>
    <p class="signup-link">Already have an account? <a href="/login">Log in</a></p>
    <form class="text-left" action="<?php echo e(route('move_to_setup')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <br> <br>
        <div id="username-field" class="field-wrapper input">
           
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cast">
                <path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path>
                <line x1="2" y1="20" x2="2.01" y2="20"></line>
            </svg>
            <input id="username" name="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('name')); ?>" required placeholder="Company Name" autofocus autocomplete="name">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <bR> <br>
        </div>


        <div class="form-group mb-4">
            <label for="exampleFormControlSelect1">Select Location</label>
            <select class="form-control" name="location" id="exampleFormControlSelect1" required>
                <option value="">Select your country</option>
                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <bR><BR>
        </div>

        <div class="d-sm-flex justify-content-between">
            <div class="field-wrapper" style="display: block; margin: auto;">
                <button type="submit" class="btn btn-primary" style="display: block; margin: auto;" value="">Get Started!</button>
            </div>
        </div>

    </form>
    <p class="terms-conditions">© 2020 All Rights Reserved. <a href="index.html"><?php echo e(env('APP_NAME')); ?></a> is a product of Moore Advice Ltd. <a href="javascript:void(0);">Cookie Preferences</a>, <a href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.</p>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CloudAppLaravel\resources\views/auth/register.blade.php ENDPATH**/ ?>