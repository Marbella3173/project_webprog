

<?php $__env->startSection('title', 'Update Food'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('partials.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if(isset($success)): ?>
    <div class="row justify-content-center">
        <div class="col-4 position-absolute" style="z-index: 10000;">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Item updated!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif; ?>

<div>
    <h1 class="text-center text-warning">更新食物 | Update Food</h1>
    <form action="<?php echo e(Request::url()); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="_method" value="PATCH">

        <div class="mb-3 mx-auto" style="text-align:left">
            <label for="name" class="form-label text-warning" style="font-size: 20px">Food Name</label>
            <input type="text" class="form-control" name="name" placeholder="Mininum 5 Characters" value="<?php echo e($food->name); ?>">
        </div>

        <div class="mb-3 mx-auto" style="text-align:left">
            <label for="brief_desc" class="form-label text-warning" style="font-size: 20px">Brief Description</label>
            <textarea type="text" class="form-control" name="brief_desc" placeholder="Maximum 100 characters"><?php echo e($food->brief_desc); ?></textarea>
        </div>

        <div class="mb-3 mx-auto" style="text-align:left">
            <label for="full_desc" class="form-label text-warning" style="font-size: 20px">Full Description</label>
            <textarea type="text" class="form-control" name="full_desc" placeholder="Maximum 255 characters"><?php echo e($food->full_desc); ?></textarea>
        </div>

        <div class="mb-3 mx-auto" style="text-align:left">
            <label for="category" class="form-label text-warning" style="font-size: 20px">Food Category</label>
            <br>
            <select class="mx-auto" name="category" style="font-size: 16px; width: 100%; height: 35px; padding-left: 8px">
                <option value="Main Course"
                <?php if($food->category == "Main Course"): ?>
                    selected
                <?php endif; ?>
                >Main Course</option>
                <option value="Beverages"
                <?php if($food->category == "Beverages"): ?>
                    selected
                <?php endif; ?>>
                Beverages</option>
                <option value="Dessert" 
                <?php if($food->category == "Dessert"): ?>
                    selected
                <?php endif; ?>>Dessert</option>
            </select>
        </div>

        <div class="mb-3 mx-auto" style="text-align:left">
            <label for="price" class="form-label text-warning" style="font-size: 20px">Price</label>
            <input type="number" class="form-control" name="price" value="<?php echo e($food->price); ?>">
        </div>

        <div class="mb-3 mx-auto">
            <label for="image" class="form-label text-warning" style="font-size: 20px">Food Image</label>
            <input class="form-control" type="file" id="image" name="image" value="<?php echo e($food->image); ?>">
        </div>

        <div class="col-12 text-end mb-4">
            <button type="submit" class="btn btn-dark float-right">Update Food</button>
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PROJECT WEBPROG\project\resources\views/update.blade.php ENDPATH**/ ?>