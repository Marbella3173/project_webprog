

<?php $__env->startSection('title', 'Manage Food'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('partials.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div style="margin-left: 100px">
    <h1 class="text-warning" style="margin-bottom: 30px; padding-top: 20px">管理食物 | Manage Foods</h1>
    <form style="margin-bottom: 30px" action="/manage" method="get">
        <?php echo csrf_field(); ?>
        <div class="d-inline-flex mb-3">
            <input class="form-control me-2" type="search" placeholder="Search" name="search" style="width: 700px">
            <button class="btn btn-dark">Search</button>
        </div>
    
        <div class="mb-3 radio-inline text-light">
            Filter By Category

            <input type="checkbox" id="main-course" class = "form-check-input" style="margin-left: 10px" name="main" checked>
            <label for="main-course" class="form-check-label" >Main Course</label>

            <input type="checkbox" id="beverages" class = "form-check-input" style="margin-left: 10px" name="beverage" checked> 
            <label for="beverages">Beverages</label>

            <input type="checkbox" id="dessert" class = "form-check-input" style="margin-left: 10px" name="dessert" checked>
            <label for="dessert">Dessert</label>
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PROJECT WEBPROG\project\resources\views/manage.blade.php ENDPATH**/ ?>