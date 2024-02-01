

<?php $__env->startSection('title', 'Search'); ?>

<?php $__env->startSection('content'); ?>

<div style="margin-left: 100px">
    <h1 class="text-warning" style="margin-bottom: 30px; padding-top: 20px">搜索食物 | Search Foods</h1>
    <form style="margin-bottom: 30px" action="/search" method="get">
        <?php echo csrf_field(); ?>
        <div class="d-inline-flex mb-3">
            <input class="form-control me-2" type="search" placeholder="Enter food name" name="search" style="width: 700px">
            <button class="btn btn-dark">Search</button>
        </div>
        

        <div class="mb-3 radio-inline" style="color: white">
            Filter By Category

            <input type="checkbox" id="main-course" class = "form-check-input" style="margin-left: 10px" name="main">
            <label for="main-course" class="form-check-label" >Main Course</label>

            <input type="checkbox" id="beverages" class = "form-check-input" style="margin-left: 10px" name="beverages">
            <label for="beverages">Beverages</label>

            <input type="checkbox" id="dessert" class = "form-check-input" style="margin-left: 10px" name="dessert">
            <label for="dessert">Dessert</label>
        </div>
        
    </form> 
    <?php if(sizeof($product) > 0): ?>
    <div class = "container" style = "margin-left: 0px">
        <div class = "row row-cols-2">
        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class = "col">
                    <div class="card text-white bg-dark mb-3" style="max-width: 700px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/assets/Food/<?php echo e($product->image); ?>" class="img-fluid rounded-start" alt="No Picture Found" style="object-fit: cover; height: 100%">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" tyle="font-weight: bold"><?php echo e($product->name); ?></h5>
                                <p class="card-text">
                                    <ul class="list-unstyled">
                                        <li style="font-weight: bold">Category</li>
                                        <li><?php echo e($product->category); ?></li>
                                    </ul>
                                    <ul class="list-unstyled">
                                        <li style="font-weight: bold">Description</li>
                                        <li><?php echo e($product->brief_desc); ?></li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php else: ?>
        <div class="d-grid gap-2" style="margin-top: 10px; margin-bottom: 10px; margin-left: 100px; margin-right: 100px">
                <button class="btn btn-dark active" type="button" style="background-color: grey; font-size: 20px; color: white" disabled>
                    Food is not available
                </button>
        </div>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PROJECT WEBPROG\project\resources\views/searchresult.blade.php ENDPATH**/ ?>