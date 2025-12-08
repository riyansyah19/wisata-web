<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paket Wisata Desa Lerep</title>
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

        <div class="mb-12 text-center mt-10">
            <h1 class="text-3xl md:text-4xl font-bold text-orange-500">Paket Wisata</h1>
            <div class="w-20 h-1 bg-orange-500 mx-auto mt-4"></div>
        </div>
        <div class="max-w-screen-2xl mx-auto space-y-10 px-4 md:px-8">
            <?php $__empty_1 = true; $__currentLoopData = $wisataPackages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php echo $__env->make('components.package-card', ['package' => $package], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-center text-gray-500 text-lg">Belum ada paket wisata yang tersedia.</p>
            <?php endif; ?>
        </div>

        <div class="mb-12 text-center mt-20">
            <h1 class="text-3xl md:text-4xl font-bold text-orange-500">Paket Makrab</h1>
            <div class="w-20 h-1 bg-orange-500 mx-auto mt-4"></div>
        </div>
        <div class="max-w-screen-2xl mx-auto space-y-10 px-4 md:px-8">
            <?php $__empty_1 = true; $__currentLoopData = $makrabPackages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php echo $__env->make('components.package-card', ['package' => $package], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-center text-gray-500 text-lg">Belum ada paket makrab yang tersedia.</p>
            <?php endif; ?>
        </div>

        <div class="mb-12 text-center mt-20">
            <h1 class="text-3xl md:text-4xl font-bold text-orange-500">Paket Study Branding</h1>
            <div class="w-20 h-1 bg-orange-500 mx-auto mt-4"></div>
        </div>
        <div class="max-w-screen-2xl mx-auto space-y-10 px-4 md:px-8">
            <?php $__empty_1 = true; $__currentLoopData = $studyBandingPackages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php echo $__env->make('components.package-card', ['package' => $package], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-center text-gray-500 text-lg">Belum ada paket study branding yang tersedia.</p>
            <?php endif; ?>
        </div>

        <div class="max-w-4xl mx-auto text-center py-10">
            <h2 class="text-3xl md:text-4xl font-bold text-emerald-900 mb-10">Pemesanan dan Informasi Lain</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white shadow-md rounded-xl p-6 border border-gray-200">
                    <h3 class="text-orange-500 font-semibold text-lg mb-4">Paket Wisata & Makrab</h3>
                    <img class="w-24 mx-auto mb-4" src="<?php echo e(asset('img/icon/customer-service-1.png')); ?>"
                        alt="logo-desa-lerep" />
                    <div class="flex items-center justify-center text-gray-700 text-lg">
                        <i class="fas fa-phone-alt text-orange-500 mr-2"></i>
                        <a href="https://wa.me/6289655491853?text=<?php echo e(urlencode('Halo, saya ingin tanya tentang Paket Wisata & Makrab')); ?>"
                            target="_blank" class="hover:underline">
                            0896 5549 1853
                        </a>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-xl p-6 border border-gray-200">
                    <h3 class="text-orange-500 font-semibold text-lg mb-4">Paket Study Banding</h3>
                    <img class="w-24 mx-auto mb-4" src="<?php echo e(asset('img/icon/customer-service-agent-1.png')); ?>"
                        alt="logo-desa-lerep" />
                    <div class="text-gray-700 text-lg space-y-2">
                        <div class="flex items-center justify-center">
                            <i class="fas fa-phone-alt text-orange-500 mr-2"></i>
                            <a href="https://wa.me/6285643545218?text=<?php echo e(urlencode('Halo, saya ingin tanya tentang Paket Study Banding')); ?>"
                                target="_blank" class="hover:underline">
                                0856 4354 5218
                            </a>
                        </div>
                        <div class="flex items-center justify-center">
                            <i class="fas fa-phone-alt text-orange-500 mr-2"></i>
                            <a href="https://wa.me/6285713366266?text=<?php echo e(urlencode('Halo, saya ingin tanya tentang Paket Study Banding')); ?>"
                                target="_blank" class="hover:underline">
                                0857 1336 6266
                            </a>
                        </div>
                    </div>
                </div>
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
<?php /**PATH C:\laragon\www\wisata\resources\views/paket_wisata.blade.php ENDPATH**/ ?>