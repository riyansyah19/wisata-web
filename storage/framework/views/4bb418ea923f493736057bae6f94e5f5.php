<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontak Visit Sumenep</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
</head>

<body class="font-poppins bg-gray-50">
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

    <div class="flex items-center justify-center min-h-[73vh] px-4 py-5">
        <div class="w-full max-w-7xl bg-white p-24 rounded-xl shadow-lg grid grid-cols-1 md:grid-cols-2 gap-32">

            <!-- FORM PESAN -->
            <div>
                <h2 class="text-2xl font-semibold mb-4">Hubungi Visit Sumenep</h2>
                <p class="text-gray-600 mb-6">
                    Silakan kirim pesan, pertanyaan, atau saran seputar wisata Kabupaten Sumenep melalui formulir di
                    bawah ini.
                </p>

                <?php if($errors->any()): ?>
                    <div class="bg-red-100 text-red-700 p-4 rounded-md mb-4 text-sm">
                        <ul class="list-disc list-inside">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('kirim.pesan')); ?>" method="POST" class="space-y-4">
                    <?php echo csrf_field(); ?>
                    <input type="text" name="nama" placeholder="Nama Lengkap" required
                        class="w-full px-4 py-3 rounded-md bg-gray-100 border border-gray-300" />

                    <input type="email" name="email" placeholder="Alamat Email" required
                        class="w-full px-4 py-3 rounded-md bg-gray-100 border border-gray-300" />

                    <textarea name="pesan" rows="5" placeholder="Tulis pesan Anda di sini..." required
                        class="w-full px-4 py-3 rounded-md bg-gray-100 border border-gray-300"></textarea>

                    <button type="submit"
                        class="w-full bg-teal-700 text-white py-3 rounded-md hover:bg-teal-800 transition">
                        Kirim Pesan
                    </button>
                </form>
            </div>

            <!-- INFO KONTAK -->
            <div class="space-y-6 text-sm text-gray-700">
                <h2 class="text-2xl font-semibold mb-4">Informasi Kontak</h2>

                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-teal-600 mt-1" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2C8.1 2 5 5.1 5 9c0 5.3 7 13 7 13s7-7.7 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5z" />
                    </svg>
                    <p>
                        Kantor Pariwisata Kabupaten Sumenep<br />
                        Jl. Trunojoyo, Kabupaten Sumenep, Jawa Timur
                    </p>
                </div>

                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-teal-600" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.21 11.36 11.36 0 003.53.57 1 1 0 011 1v3.56a1 1 0 01-1 1A17.89 17.89 0 013 5a1 1 0 011-1h3.56a1 1 0 011 1 11.36 11.36 0 00.57 3.53 1 1 0 01-.21 1.11l-2.3 2.15z" />
                    </svg>
                    <p>(0328) 123456</p>
                </div>

                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-teal-600" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20 4H4a2 2 0 00-2 2v1.2l10 5.6 10-5.6V6a2 2 0 00-2-2zM2 18a2 2 0 002 2h16a2 2 0 002-2V8.8l-10 5.6-10-5.6V18z" />
                    </svg>
                    <p>
                        <a href="mailto:info@visitsumenep.id" class="text-teal-700 hover:underline">
                            info@visitsumenep.id
                        </a>
                    </p>
                </div>

                <div>
                    <p class="font-medium">Layanan Informasi Wisata</p>
                    <p class="mt-1">0812 3456 7890</p>
                </div>

                <div class="text-gray-600">
                    Jam Operasional:<br>
                    Senin – Jumat : 08.00 – 16.00 WIB
                </div>
            </div>

        </div>
    </div>

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
<?php /**PATH C:\laragon\www\wisata\resources\views/kontak.blade.php ENDPATH**/ ?>