<?php
    $currentRouteName = Route::currentRouteName();
?>

<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data Master</a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>"
                        class="nav-link <?php if($currentRouteName == 'home'): ?> active <?php endif; ?>">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('employees.index')); ?>"
                        class="nav-link <?php if($currentRouteName == 'employees.index'): ?> active <?php endif; ?>">Employee</a></li>
            </ul>

            <hr class="d-md-none text-white-50">

           <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                    <!-- Jika pengguna tidak terautentikasi (belum login) -->
                    <?php if(Route::has('login')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                        </li>
                    <?php endif; ?>

                    <?php if(Route::has('register')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <!-- Jika pengguna terautentikasi (sudah login) -->
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="bi bi-person-circle me-1"></i><?php echo e(Auth::user()->name); ?>

                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('profile')); ?>">
                                <i class="bi-person-fill me-1"></i> My Profile
                            </a>

                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                 <i class="bi bi-box-arrow-right me-1"></i><?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>

        </div>
    </div>
</nav>
<?php /**PATH C:\Users\Arie Prasetyo\Documents\BELAJARLARAVEL\tugas framework\aplikasi awal - Copy (2)\resources\views/layouts/nav.blade.php ENDPATH**/ ?>