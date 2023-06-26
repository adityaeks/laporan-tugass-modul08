<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-center align-items-center"  style="height: 100vh; background-color: blue;" >
    <div class="p-5 bg-light rounded-3 border col-xl-3">
        <div class="mb-3 text-center">
            <i class="bi-hexagon-fill fs-1 text-primary"></i>
            <h4 class="fw-bold"><?php echo e(__('Employee Data Master')); ?></h4>
        </div>
        <hr>
        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <div class="col-md-12 mb-3">
                <label for="email" class="form-label"><?php echo e(__('Email Address')); ?></label>
                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><small><?php echo e($message); ?></small></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="col-md-12 mb-3">
                <label for="password" class="form-label"><?php echo e(__('Password')); ?></label>
                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><small><?php echo e($message); ?></small></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>


            <div class="row">
                <div class="col-md-12 d-grid">
                    <button type="submit" class="btn btn-primary btn-lg mt-3"> <i class="bi bi-arrow-right-square me-2"></i><?php echo e(__('Login')); ?></button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Arie Prasetyo\Documents\BELAJARLARAVEL\tugas framework\aplikasi awal - Copy (2)\resources\views/welcome.blade.php ENDPATH**/ ?>