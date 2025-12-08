<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin - Paket</title>
    <link rel="icon" href="<?php echo e(asset('img/logo.png')); ?>" type="image/png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body>
    <?php if (isset($component)) { $__componentOriginald31f0a1d6e85408eecaaa9471b609820 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald31f0a1d6e85408eecaaa9471b609820 = $attributes; } ?>
<?php $component = App\View\Components\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Sidebar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald31f0a1d6e85408eecaaa9471b609820)): ?>
<?php $attributes = $__attributesOriginald31f0a1d6e85408eecaaa9471b609820; ?>
<?php unset($__attributesOriginald31f0a1d6e85408eecaaa9471b609820); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald31f0a1d6e85408eecaaa9471b609820)): ?>
<?php $component = $__componentOriginald31f0a1d6e85408eecaaa9471b609820; ?>
<?php unset($__componentOriginald31f0a1d6e85408eecaaa9471b609820); ?>
<?php endif; ?>

    <div class="p-4 sm:ml-64">
        <div class="flex-1 p-4 md:p-8">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
                    <div>
                        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Daftar Paket</h1>
                        <p class="text-gray-600 mt-1">Kelola semua paket yang tersedia</p>
                    </div>
                    <a href="<?php echo e(route('packages.create')); ?>"
                        class="flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors">
                        <i class="fas fa-plus"></i>
                        <span>Tambah Paket</span>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div
                            class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100 hover:shadow-md transition-shadow">
                            <?php if($package->image): ?>
                                <div class="h-48 overflow-hidden">
                                    <img src="<?php echo e(asset('storage/' . $package->image)); ?>"
                                        class="w-full h-full object-cover" alt="<?php echo e($package->title); ?>">
                                </div>
                            <?php else: ?>
                                <div class="h-48 bg-gray-100 flex items-center justify-center">
                                    <i class="fas fa-image text-gray-300 text-4xl"></i>
                                </div>
                            <?php endif; ?>

                            <div class="p-5">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-lg font-semibold text-gray-800"><?php echo e($package->title); ?></h3>
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary-100 text-primary-800">
                                        <?php echo e(ucfirst($package->type)); ?>

                                    </span>
                                </div>

                                <p class="text-gray-600 text-sm mb-4 line-clamp-2"><?php echo e($package->description); ?></p>

                                <div class="flex items-center justify-between mb-4">
                                    <span
                                        class="text-lg font-bold text-gray-900">Rp<?php echo e(number_format($package->price, 0, ',', '.')); ?></span>
                                    <span class="text-sm text-gray-500">
                                        <i class="far fa-clock mr-1"></i>
                                        <?php echo e($package->created_at ? $package->created_at->translatedFormat('d M Y H:i') : 'N/A'); ?>

                                    </span>
                                </div>

                                <div class="flex space-x-2">
                                    <a href="<?php echo e(route('packages.edit', $package)); ?>"
                                        class="flex-1 inline-flex justify-center items-center gap-2 text-sm py-2 px-3 rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                                        <i class="fas fa-pencil-alt"></i>
                                        <span>Edit</span>
                                    </a>
                                    <form action="<?php echo e(route('packages.destroy', $package)); ?>" method="POST"
                                        class="flex-1">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" onclick="return confirm('Yakin hapus paket ini?')"
                                            class="w-full inline-flex justify-center items-center gap-2 text-sm py-2 px-3 rounded-lg border border-red-100 bg-red-50 text-red-600 hover:bg-red-100">
                                            <i class="fas fa-trash"></i>
                                            <span>Hapus</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
<?php /**PATH C:\laragon\www\wisata\resources\views/packages/index.blade.php ENDPATH**/ ?>