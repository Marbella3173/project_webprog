

<?php $__env->startSection('title', 'Your Cart'); ?>

<?php $__env->startSection('content'); ?>

<div style="margin-left: 100px; margin-right: 100px">
    <h1 class="text-warning" style="margin-bottom: 30px; padding-top: 20px">你的购物车 | Your Cart</h1>
    
    <?php if(sizeof($list) == 0): ?>
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="card mx-auto d-flex align-items-center justify-content-center" style="width: 70vw; background-color: black; color: white; vertical-align: middle; margin-top: 100px">           
                <div class="card-body">
                    <h3 class="mx-auto text-warning" style="text-align: center">Your cart is empty...</h3>
                    <div style="font-size: 18px; margin-left: 30px; margin-right: 30px; margin-top: 15px">
                        Looks like your cart is on a diet! Don't worry, our delicious dishes are just a few clicks away. 
                        Start filling up your cart and let the feast begin!
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php else: ?>
    <table class="table table-bordered" style="border-color: black">
        <thead class="table" style="background-color: black">
            <tr class="table text-warning" style="text-align: center; background-color: black; border-color:black">
                <th scope="col">Food</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="align-middle text-light" style="background-color: dimgrey; text-align: center; font-weight: bold">
                <td><?php echo e($item->food->name); ?></td>
                <td><?php echo e($item->food->price); ?></td>
                <td><form action="/cart" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="food_id" value=<?php echo e($item->food->id); ?>>
                    <button class ="minus bg-dark text-light" name="action" value="less">-</button>
                    <?php echo e($item->quantity); ?>

                    <button class ="plus bg-dark text-light" name="action" value="more">+</button>
                </form></td>
                <td><?php echo e($item->food->price * $item->quantity); ?></td>
                <td><form action="/cart" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="remove_id" value=<?php echo e($item->food->id); ?>>
                    <button type="submit" class="btn btn-dark text-warning">Remove</button></form></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="text-end">
        <span style="text-align: right; color: white; font-size: 30px; font-weight: bold">Total Price: $<?php echo e($total); ?></span>
        <br>
        <a href="/checkout"><button class="btn btn-dark mt-2 text-warning" style="background-color: #545454">Proceed to Checkout</button></a>
    </div>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PROJECT WEBPROG\project\resources\views/cart.blade.php ENDPATH**/ ?>