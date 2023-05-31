

<?php $__env->startSection('container'); ?>
    <?php if(isset($biodata)): ?>
        <?php echo $__env->make('partials.card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <section class="sm:mt-0 mt-2 text-center">
            <div class="sm:py-0 sm:pb-5 py-5">
                <h1 class="text-2xl font-bold uppercase">Hobby</h1>
            </div>

            <div id="root-gallery" class="flex flex-wrap justify-center gap-10">
                <?php $__currentLoopData = $biodata['hobby']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hobbi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('partials.gallery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\ghifar\1. KULIAH\3. Matkul Semester 4\pemograman-web\AFTER-UTS\laravel\coba-laravel\resources\views/home.blade.php ENDPATH**/ ?>