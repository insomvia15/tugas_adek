 <div id="root">
     <div class="flex gap-10 flex-col md:flex-row">
         <!-- Root Biodata  -->
         <section class="space-y-5">
             <figure class="h-[250px] w-[200px]">
                 <?php if(!isset($biodata['photo'])): ?>
                     <div class="flex justify-center items-center w-full h-full bg-gray-200">
                         <div class="text-center">
                             <h1 class="text-red-500">Unknown</h1>
                             <small class="italic text-gray-600">Missing source image!!!</small>
                         </div>
                     </div>
                 <?php else: ?>
                     <img class="h-full w-full rounded-lg object-cover" src="<?php echo e($biodata['photo']); ?>"
                         alt="<?php echo e($biodata['biodata']); ?>" />
                 <?php endif; ?>

             </figure>

             <div>
                 <h1 class="text-2xl font-semibold">
                     <?php if(isset($biodata['name'])): ?>
                         <?php echo e($biodata['name']); ?>

                     <?php else: ?>
                         No data available
                     <?php endif; ?>
                 </h1>
                 <h1 class="text-2xl font-semibold"><?php echo e($biodata['nim']); ?></h1>
                 <h1 class="text-2xl font-semibold"><?php echo e($biodata['address']); ?></h1>
                 <div id="root-sosmed" class="my-2 flex items-center space-x-1">
                     <a href="https://twitter.com/VerstappenCOM#:~:text=Max%20Verstappen%20(%40VerstappenCOM)%20%2F%20Twitter"
                         target="_blank" rel="noopener noreferrer">
                         <img width="25" height="25" src="https://img.icons8.com/ios-glyphs/30/twitter--v1.png"
                             alt="twitter" />
                     </a>
                     <a href="https://www.instagram.com/maxverstappen1/?hl=en" target="_blank"
                         rel="noopener noreferrer">
                         <img width="25" height="25" src="https://img.icons8.com/ios-glyphs/30/instagram-new.png"
                             alt="instagram" />
                     </a>
                     <a href="https://github.com/buryne/tugas-web-1" target="_blank" rel="noopener noreferrer">
                         <img width="28" height="28" src="https://img.icons8.com/ios-glyphs/30/github.png"
                             alt="github" />
                     </a>
                 </div>

                 <a href="https://github.com/buryne" class="group relative mt-2 inline-block px-4 py-2 font-medium">
                     <span
                         class="absolute inset-0 h-full w-full translate-x-1 translate-y-1 transform bg-black transition duration-200 ease-out group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                     <span
                         class="absolute inset-0 h-full w-full border-2 border-black bg-white group-hover:bg-black"></span>
                     <span class="relative text-black group-hover:text-white">Start Here</span>
                 </a>
             </div>
         </section>
<?php /**PATH F:\ghifar\1. KULIAH\3. Matkul Semester 4\pemograman-web\AFTER-UTS\laravel\coba-laravel\resources\views/partials/card.blade.php ENDPATH**/ ?>