<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
    <div class="text-center mb-4">
        <h3>Insert your score here!</h3>
    </div>
    <div class="container d-flex justify-content-center">
        <form action="" method="POST" style="width:20vw; min-width:300px;">
            <div class="row">
                <div class="col">
                    <label for="form-label">Your Score:</label>
                    <input type="text" class="form-control" name="user_score" placeholder="Score">
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <?php switch($grade):
    case (0-25): ?>
        <div class="grade_e">Your Grade is E, You aren't doing good, don't be discouraged!</div>
    <?php break; ?>
    <?php case (26-40): ?>
        <div class="grade_d">Your Grade is D, Not bad, but try harder than that!</div>
    <?php break; ?>
    <?php case (41-65): ?>
        <div class="grade_c">Your Grade is C, You've done a decent job, but let's see those grades soar even higher!</div>
    <?php break; ?>
    <?php case (66-80): ?>
        <div class="grade_b">Your Grade is B, You're doing great! Keep it up!</div>
    <?php break; ?>
    <?php case (81-90): ?>
        <div class="grade_a">Your Grade is A, You have performed greatly! Let's aim for the top!</div>
    <?php break; ?>
    <?php case (91-100): ?>
        <div class="grade_a_plus">Your Grade is A+, Amazing! You are doing marvelously!</div>
    <?php break; ?>
    <?php default: ?>
        <div class="invalid">Invalid Score!</div>
    <?php endswitch; ?>

</div>

<?php /**PATH C:\xampp\htdocs\GSLCWebProgSession5\resources\views/insertgrade.blade.php ENDPATH**/ ?>