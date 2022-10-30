<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="text-center mb-4">
        <h3>Your score says...</h3>
    </div>
    <div class="container d-flex justify-content-center">
        <?php if(($score >= 0) and ($score <= 50)): ?>
            <div>
                You didn't pass, that's okay! You can do better!
            </div>
        <?php else: ?>
            <div>
                Keep it up, you're doing great!
            </div>
        <?php endif; ?>
    </div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GSLCWebProgSession5\resources\views/scoretalker.blade.php ENDPATH**/ ?>