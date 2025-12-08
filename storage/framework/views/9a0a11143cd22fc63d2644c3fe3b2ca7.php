<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Wisata Desa Lerep</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
</head>

<body class="min-h-screen font-poppins bg-gray-50" x-data="{ isOpen: false }">
    <?php if (isset($component)) { $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e = $attributes; } ?>
<?php $component = App\View\Components\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Navbar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $attributes = $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $component = $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>

    <main class="container mx-auto px-4 py-8">
        <div class="max-w-screen-2xl mx-auto px-4 md:px-8 py-8">
            <div class="mb-12 text-center">
                <h1 class="text-3xl md:text-4xl font-bold text-orange-500">Daftar Wisata</h1>
                <div class="w-20 h-1 bg-orange-500 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <?php $__empty_1 = true; $__currentLoopData = $wisatas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wisata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="bg-white rounded-lg shadow hover:shadow-md transition duration-300 flex flex-col">
                        <div class="h-48 w-full">
                            <img src="<?php echo e(asset('storage/' . $wisata->gambar)); ?>" alt="<?php echo e($wisata->nama); ?>"
                                class="w-full h-full object-cover rounded-t-lg">
                        </div>
                        <div class="p-4 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-2"><?php echo e($wisata->nama); ?></h3>
                                <p class="text-sm text-gray-600 line-clamp-2">
                                    <?php echo e($wisata->deskripsi); ?>

                                </p>
                            </div>
                            <div class="mt-4">
                                <a href="<?php echo e(route('wisata.show', $wisata->id)); ?>"
                                    class="text-sm text-orange-500 hover:underline font-medium">
                                    Lihat Selengkapnya →
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-center text-gray-500 col-span-full">Belum ada data wisata yang tersedia.</p>
                <?php endif; ?>
            </div>
        </div>
    </main>

    <?php if (isset($component)) { $__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa = $attributes; } ?>
<?php $component = App\View\Components\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Footer::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa)): ?>
<?php $attributes = $__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa; ?>
<?php unset($__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa)): ?>
<?php $component = $__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa; ?>
<?php unset($__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa); ?>
<?php endif; ?>
</body>

</html>
<?php /**PATH C:\laragon\www\wisata\resources\views/daftar_wisata.blade.php ENDPATH**/ ?>