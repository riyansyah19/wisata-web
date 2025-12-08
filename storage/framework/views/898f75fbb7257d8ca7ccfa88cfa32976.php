<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginL</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="icon" href="<?php echo e(asset('img/logo.png')); ?>" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-50 relative overflow-hidden">
    <!-- Login Card -->
    <div class="bg-white shadow-lg rounded-xl px-10 py-12 w-full max-w-lg z-10">
        <!-- Logo & Title -->
        <div class="flex flex-col items-center mb-8">
            <img src="<?php echo e(asset('img/logo.png')); ?>" alt="DWL Logo" class="w-60 h-60 object-contain mb-3" />
            <span class="text-xs text-gray-400 mt-1 tracking-wide">ADMIN</span>
        </div>

        <!-- Error Message -->
        <?php if($errors->any()): ?>
            <div class="mb-5 p-4 rounded bg-red-100 text-red-700 text-sm">
                <ul class="list-disc list-inside">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- Form -->
        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-5">
                <label for="email" class="block text-gray-600 text-sm mb-1">Email</label>
                <input type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email"
                    class="w-full px-4 py-2 border rounded-lg outline-none focus:ring-2 focus:ring-teal-600 focus:border-transparent text-sm" />
            </div>

            <div class="mb-6">
                <label for="password" class="block text-gray-600 text-sm mb-1">Password</label>
                <input type="password" name="password" placeholder="Password"
                    class="w-full px-4 py-2 border rounded-lg outline-none focus:ring-2 focus:ring-teal-600 focus:border-transparent text-sm" />
            </div>

            <button type="submit"
                class="w-full bg-teal-700 hover:bg-teal-800 text-white py-2 rounded-lg font-semibold shadow">
                LOGIN
            </button>

            <div class="text-center mt-4">
                <a href="<?php echo e(route('password.request')); ?>" class="text-sm text-teal-700 hover:underline">Forgot
                    password?</a>
            </div>
        </form>
    </div>
</body>

</html>
<?php /**PATH C:\laragon\www\wisata\resources\views/login.blade.php ENDPATH**/ ?>