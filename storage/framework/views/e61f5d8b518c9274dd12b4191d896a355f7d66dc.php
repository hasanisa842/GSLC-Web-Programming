<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="d-flex justify-content-center">
    <a href="scoretalker">
        <button type="button" class="btn btn-primary">What your score says about you</button>
    </a>
</div>
<br>
<div class="d-flex justify-content-center">
    <?php echo $__env->yieldContent('quote'); ?>
</div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GSLCWebProgSession5\resources\views/home.blade.php ENDPATH**/ ?>