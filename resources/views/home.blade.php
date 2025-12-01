<!doctype html>
<html class="h-full bg-gray-white">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite('resources/css/app.css')
    <title>Wisata Desa</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/home.css">
</head>

<body class="h-full font-poppins" x-data="{ isOpen: false }">
    <div class="min-h-full">
        <x-navbar></x-navbar>
        <main>
            <div class="mx-auto max-w-screen-xl px-4 py-6 sm:px-6 lg:px-8 fade-up">
                <section class="bg-white py-12 px-4 sm:px-6 lg:px-8 rounded-xl">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div>
                            <h2 class="text-3xl font-bold text-orange-500 mb-2">Tentang Kita</h2>
                            <h1 class="text-3xl md:text-6xl font-bold text-gray-800 mb-4">
                                Visit <span class="text-[#37726C]"></span> Sumenep
                            </h1>
                            <p class="text-lg text-gray-600 leading-relaxed">
                                Kabupaten Sumenep yang terletak di ujung timur Pulau Madura, Jawa Timur,
                                menawarkan pesona wisata alam, budaya, dan sejarah yang kaya.
                                Dari keindahan pantai, keraton bersejarah, hingga wisata religi dan pulau eksotis,
                                Sumenep menjadi tujuan wisata yang unik dan memikat.
                            </p>
                        </div>
                        <div>
                            <div>
                                <img src="{{ asset('img/wisata1.jpg') }}" alt="Gambar ID">
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <div class="py-16 bg-gradient-to-br from-[#f0fdf4] to-[#d9f2e6] fade-up">
                <div class="max-w-screen-lg mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-12 text-center">

                    <div class="flex flex-col items-center feature-card p-6 rounded-xl bg-white shadow-md fade-left">
                        <img src="img/leaves.png" alt="Wisata Alam Sumenep" class="w-20 h-20 mb-6 hover-zoom">
                        <h3 class="text-2xl font-bold mb-2 text-[#37726C]">Pesona Alam Sumenep</h3>
                        <p class="text-base text-gray-700">
                            Nikmati keindahan pantai, perbukitan, dan pulau eksotis khas Kabupaten Sumenep.
                        </p>
                    </div>

                    <div class="flex flex-col items-center feature-card p-6 rounded-xl bg-white shadow-md fade-up">
                        <img src="img/teamwork.png" alt="Budaya Sumenep" class="w-20 h-20 mb-6 hover-zoom">
                        <h3 class="text-2xl font-bold mb-2 text-[#37726C]">Budaya & Tradisi</h3>
                        <p class="text-base text-gray-700">
                            Rasakan kekayaan budaya Madura, keraton Sumenep, dan tradisi lokal yang unik.
                        </p>
                    </div>

                    <div class="flex flex-col items-center feature-card p-6 rounded-xl bg-white shadow-md fade-right">
                        <img src="img/groups.png" alt="Wisata Edukasi Sumenep" class="w-20 h-20 mb-6 hover-zoom">
                        <h3 class="text-2xl font-bold mb-2 text-[#37726C]">Wisata Edukasi</h3>
                        <p class="text-base text-gray-700">
                            Jelajahi wisata sejarah, religi, dan edukasi yang menambah wawasan dan pengalaman.
                        </p>
                    </div>

                </div>
            </div>
        </main>
    </div>
    <x-footer></x-footer>
    <script src="js/home.js"></script>
</body>

</html>
