

<?php $__env->startSection('container'); ?>
    <?php if(isset($biodata)): ?>
        <p>Name : <?php echo e($biodata['name']); ?></p>
        <p>Nim : <?php echo e($biodata['nim']); ?></p>
        <p>Address : <?php echo e($biodata['address']); ?></p>
        <?php $__currentLoopData = $biodata['hobby']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hobbi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Hobby : <?php echo e($hobbi['name']); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\ghifar\1. KULIAH\3. Matkul Semester 4\pemograman-web\AFTER-UTS\laravel\coba-laravel-template\resources\views/home.blade.php ENDPATH**/ ?>