

<?php $__env->startSection('title', 'Add New Food'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('partials.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if(isset($success)): ?>
    <div class="row justify-content-center">
        <div class="col-4 position-absolute" style="z-index: 10000;">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                New Food created!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif; ?>

<div style="margin-left: 100px; margin-right: 100px">
    <h1 class="text-warning">添加新食物 | Add New Food</h1>
    <form action="/add" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-3 mx-auto text-warning">
            <label for="name" class="form-label" style="font-size: 20px">Food Name</label>
            <input type="text" class="form-control" name="name" placeholder="Min 5 Characters">
        </div>

        <div class="mb-3 mx-auto text-warning">
            <label for="brief_desc" class="form-label" style="font-size: 20px">Food Brief Description</label>
            <textarea type="text" class="form-control" name="brief_desc" placeholder="Maximum 100 Characters"></textarea>
        </div>

        <div class="mb-3 mx-auto text-warning">
            <label for="full_desc" class="form-label" style="font-size: 20px">Food Full Description</label>
            <textarea type="text" class="form-control" name="full_desc" placeholder="Maximum 255 Characters"></textarea>
        </div>

        <div class="mb-3 mx-auto text-warning">
            <label for="category" class="form-label" style="font-size: 20px">Food Category</label>
            <br>
            <select class="mx-auto" name="category" style="font-size: 16px; width: 100%; height: 35px; padding-left: 8px">
                <option value="main">Main Course</option>
                <option value="beverages">Beverages</option>
                <option value="dessert">Dessert</option>
            </select>
        </div>

        <div class="mb-3 mx-auto text-warning">
            <label for="price" class="form-label" style="font-size: 20px">Food Price</label>
            <input type="number" class="form-control" name="price" placeholder="Must be more than 0">
        </div>

        <div class="mb-3 mx-auto text-warning" style="font-size: 20px">
            <label for="image" class="form-label">Food Image</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>

        <div class="col-12 text-end mb-4">
            
            <button type="submit" class="btn btn-dark float-right">Save</button>
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PROJECT WEBPROG\project\resources\views/add.blade.php ENDPATH**/ ?>