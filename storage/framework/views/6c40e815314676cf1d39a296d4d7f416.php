<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500&display=swap"
        rel="stylesheet" />
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <title><?php echo e($title); ?></title>
</head>

<body>
    <div class="container  w-full px-10 lg:px-0 lg:w-[600px] my-4 mx-auto">
        <header>
            <nav class="space-x-10 py-10">
                <a href="/">Home</a>
            </nav>
        </header>

        <main>
            <?php echo $__env->yieldContent('container'); ?>
        </main>

        <footer class="mt-10 text-center text-sm text-gray-500 lg:mt-7">
            <p class="italic">
                Made with <span class="text-red-500">&hearts;</span> by
                <a class="text-blue-500 hover:text-blue-800" href="https://github.com/buryne/tugas-web-1"
                    target="_blank" rel="noopener noreferrer">
                    Rito
                </a>
            </p>
        </footer>
    </div>
</body>

</html>
<?php /**PATH F:\ghifar\1. KULIAH\3. Matkul Semester 4\pemograman-web\AFTER-UTS\laravel\coba-laravel-template\resources\views/layouts/main.blade.php ENDPATH**/ ?>