<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin - Users</title>
    <link rel="icon" href="<?php echo e(asset('img/logo.png')); ?>" type="image/png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
                    <div>
                        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Manajemen User</h1>
                        <p class="text-gray-600 mt-1">Daftar semua pengguna sistem</p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="<?php echo e(route('adminuser.create')); ?>"
                            class="flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors">
                            <i class="fas fa-plus"></i>
                            <span>Tambah User</span>
                        </a>
                    </div>
                </div>

                <?php if(session('success')): ?>
                    <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-6 rounded">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 text-green-500">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-green-700"><?php echo e(session('success')); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        No
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Email
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Role
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <?php echo e($loop->iteration + ($users->currentPage() - 1) * $users->perPage()); ?>

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="flex-shrink-0 h-10 w-10 bg-blue-100 rounded-full flex items-center justify-center">
                                                    <span
                                                        class="text-blue-600 font-medium"><?php echo e(substr($user->name, 0, 1)); ?></span>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        <?php echo e($user->name); ?></div>
                                                    <div class="text-sm text-gray-500">ID: <?php echo e($user->id); ?></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <?php echo e($user->email); ?>

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                <?php echo e($user->role ?? 'Admin'); ?>

                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div class="flex justify-end space-x-2">
                                                <a href="<?php echo e(route('adminuser.edit', $user->id)); ?>"
                                                    class="text-blue-600 hover:text-blue-900 p-2 rounded-lg hover:bg-blue-50"
                                                    title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="<?php echo e(route('adminuser.destroy', $user->id)); ?>"
                                                    method="POST"
                                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus user ini?')">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit"
                                                        class="text-red-600 hover:text-red-900 p-2 rounded-lg hover:bg-red-50"
                                                        title="Hapus">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">
                                            Tidak ada data user yang ditemukan.
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <?php if($users->hasPages()): ?>
                        <div class="bg-white px-6 py-3 border-t border-gray-200">
                            <?php echo e($users->links('pagination::tailwind')); ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div id="confirmDialog" class="fixed inset-0 bg-black bg-opacity-50 items-center justify-center hidden">
            <div class="bg-white rounded-lg p-6 max-w-md w-full">
                <div class="flex items-center mb-4">
                    <div class="bg-red-100 p-2 rounded-full mr-3">
                        <i class="fas fa-exclamation-triangle text-red-600"></i>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900">Konfirmasi Penghapusan</h3>
                </div>
                <p class="text-gray-600 mb-6">Apakah Anda yakin ingin menghapus user ini? Tindakan ini tidak dapat
                    dibatalkan.</p>
                <div class="flex justify-end space-x-3">
                    <button onclick="hideConfirmDialog()"
                        class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50">
                        Batal
                    </button>
                    <button id="confirmDelete" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                        Hapus
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\laragon\www\wisata\resources\views/adminuser/index.blade.php ENDPATH**/ ?>