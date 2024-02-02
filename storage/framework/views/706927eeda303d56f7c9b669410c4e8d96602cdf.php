<div class="relative flex items-top justify-center  bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <?php if(Route::has('login')): ?>
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/dashboard')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\youcod\Desktop\LARAVEL2\Recipe_book\resources\views/layouts/nacgeust.blade.php ENDPATH**/ ?>