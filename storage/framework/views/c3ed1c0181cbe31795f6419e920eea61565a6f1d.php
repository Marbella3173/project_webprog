

<?php $__env->startSection('title', 'Checkout'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('partials.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div>
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col d-flex flex-column align-items-center justify-content-center mt-5">
                <h1 class="text-center text-warning">查看 | Checkout</h1>

                <form class="row g-3" action="/" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <h4 class="text-light">Billing Information</h4>
                    <div class="col-md-6 text-warning">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Min 5 Characters" name="name">
                    </div>
                    <div class="col-md-6 text-warning">
                        <label for="phoneNum" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="phoneNum" placeholder="Has to be 12 numbers" name="phoneNum">
                    </div>
                    <div class="col-md-6 text-warning">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" class="form-control" id="country" placeholder="Min 5 Characters" name="country">
                    </div>
                    <div class="col-md-6 text-warning">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" placeholder="Min 5 Characters" name="city">
                    </div>
                    <div class="col-md-6 text-warning">
                        <label for="cardName" class="form-label">Card Name</label>
                        <input type="text" class="form-control" id="cardName" placeholder="Min 3 Characters" name="cardName">
                    </div>
                    <div class="col-md-6 text-warning">
                        <label for="cardNum" class="form-label">Card Number</label>
                        <input type="number" class="form-control" id="cardNum" placeholder="Must be numerical and have 16 characters" name="cardNum">
                    </div>

                    <h4 class="text-light" style="padding-top: 10px">Additional Information</h4>
                    <div class="mb-3 text-warning">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" rows="3" placeholder="Min 5 Characters" name="address"></textarea>
                    </div>
                    <div class="mb-3 text-warning">
                        <label for="postalCode" class="form-label">ZIP/Postal Code</label>
                        <input type="number" class="form-control" id="postalCode" placeholder="Fill with number only" name="postalCode">
                    </div>

                    <div class="col-12 text-end mb-4 text-warning">
                        
                        <button type="submit" class="btn btn-dark text-warning float-right">Place Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PROJECT WEBPROG\project\resources\views/checkout.blade.php ENDPATH**/ ?>