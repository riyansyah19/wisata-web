<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Lengkap Desa</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
</head>

<body class="h-full font-poppins" x-data="{ isOpen: false }"">
    <x-navbar></x-navbar>
    <div class="bg-white py-8 px-4 mt-20">
        <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-start md:items-center gap-8">

            <div class="md:w-1/2">
                <h2 class="text-4xl md:text-5xl font-bold text-green-900 mb-6">
                    Profil Kabupaten Sumenep
                </h2>
                <p class="text-lg md:text-xl text-gray-700 leading-relaxed text-justify">
                    Kabupaten Sumenep terletak di ujung timur Pulau Madura, Provinsi Jawa Timur, dan dikenal sebagai
                    daerah
                    dengan kekayaan wisata alam, budaya, dan sejarah. Sumenep memiliki pesona pantai, pulau-pulau
                    eksotis,
                    keraton bersejarah, serta wisata religi yang menjadi daya tarik wisatawan.
                    Masyarakat Sumenep dikenal ramah, menjunjung tinggi nilai budaya Madura, serta memiliki beragam
                    produk
                    unggulan daerah mulai dari batik hingga kuliner khas.
                </p>
            </div>

            <div class="md:w-1/2 flex justify-end">
                <img src="{{ asset('img/peta.jpg') }}" alt="Peta Kabupaten Sumenep"
                    class="w-100 h-auto rounded shadow-md">
            </div>
        </div>
    </div>


    <div class="bg-white py-10 px-4 mt-20">
        <div class="max-w-screen-xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-orange-600 mb-8">Sejarah Kabupaten Sumenep</h2>

            <div class="flex flex-col md:flex-row gap-8 text-justify text-gray-700 text-lg md:text-xl leading-relaxed">

                <div class="md:w-1/2">
                    <p>
                        Kabupaten Sumenep merupakan salah satu wilayah tertua di Pulau Madura yang memiliki sejarah
                        panjang dalam
                        perkembangan pemerintahan, kebudayaan, serta kerajaan Islam di Jawa Timur. Sejak masa lampau,
                        wilayah ini
                        telah menjadi pusat kekuasaan dan aktivitas sosial masyarakat Madura bagian timur. Salah satu
                        bukti sejarah
                        terpenting adalah berdirinya Keraton Sumenep yang dulunya berfungsi sebagai pusat pemerintahan
                        kerajaan,
                        sekaligus simbol kekuasaan raja-raja Madura.
                    </p>

                    <p class="mt-4">
                        Keraton Sumenep tidak hanya menjadi pusat pemerintahan, tetapi juga pusat berkembangnya seni,
                        budaya,
                        arsitektur, dan nilai sosial masyarakat setempat. Jejak sejarah tersebut masih dapat dilihat
                        dari bentuk
                        bangunan, tata kota lama, serta peninggalan benda-benda bersejarah yang tersimpan dengan baik
                        hingga saat ini.
                        Hal ini menunjukkan betapa kuatnya pengaruh kerajaan dalam membentuk identitas Kabupaten
                        Sumenep.
                    </p>
                </div>

                <div class="md:w-1/2">
                    <p>
                        Dalam perjalanan sejarahnya, Kabupaten Sumenep dikenal sebagai salah satu pusat penyebaran agama
                        Islam di
                        Madura. Para ulama dan tokoh agama memainkan peran penting dalam proses penyebaran Islam serta
                        pembentukan
                        karakter religius masyarakat yang masih terasa hingga kini. Banyak pondok pesantren bersejarah
                        yang tumbuh
                        dan berkembang sebagai pusat pendidikan keagamaan di wilayah ini.
                    </p>

                    <p class="mt-4">
                        Selain sebagai daerah religius, Sumenep juga berkembang sebagai wilayah perdagangan dan
                        pelabuhan penting
                        sejak masa kerajaan. Letaknya yang strategis menjadikan daerah ini sebagai jalur perdagangan
                        antarpulau dan
                        antarbangsa. Perpaduan antara budaya lokal, pengaruh luar, serta nilai keislaman membentuk
                        karakter unik
                        budaya Madura yang membedakan Sumenep dari daerah lain di Jawa Timur.
                    </p>
                </div>

            </div>
        </div>
    </div>


    <div class="bg-white py-10 px-4 mt-10">
        <div class="max-w-7xl mx-auto text-center">

            <h2 class="text-4xl md:text-6xl font-bold text-green-800 mb-10">Visi Kabupaten Sumenep</h2>
            <p class="text-gray-700 mt-2 mb-10 text-lg md:text-xl leading-relaxed">
                "Sumenep Unggul, Mandiri, dan Sejahtera"
            </p>
            <h2 class="text-4xl md:text-6xl font-bold text-green-800 mb-10 mt-20">Misi Kabupaten Sumenep</h2>
            <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">

            <div
                class="grid grid-cols-1 md:grid-cols-2 gap-8 text-left text-gray-700 text-lg md:text-lg leading-relaxed mt-10 mb-16 px-4">

                <div class="flex gap-3">
                    <span class="text-orange-500 font-bold text-3xl">01</span>
                    <p>Membangun kualitas sumber daya manusia (SDM) yang unggul, berdaya saing, dan berkarakter.</p>
                </div>

                <div class="flex gap-3">
                    <span class="text-orange-500 font-bold text-3xl">02</span>
                    <p>Meningkatkan kesejahteraan masyarakat melalui penguatan ekonomi rakyat, UMKM, dan sektor unggulan
                        daerah.</p>
                </div>

                <div class="flex gap-3">
                    <span class="text-orange-500 font-bold text-3xl">03</span>
                    <p>Mewujudkan tata kelola pemerintahan yang transparan, profesional, inovatif, dan bebas dari
                        praktik korupsi.</p>
                </div>

                <div class="flex gap-3">
                    <span class="text-orange-500 font-bold text-3xl">04</span>
                    <p>Melaksanakan pembangunan berbasis gotong royong dan nilai-nilai kearifan lokal masyarakat Madura.
                    </p>
                </div>

            </div>
        </div>


        <div class="bg-white p-6 rounded-xl shadow-md contact-card">
            <h3 class="font-medium text-gray-800 mb-4 text-center">Lokasi Kabupaten Sumenep</h3>
            <div class="flex justify-center">
                <div class="w-full max-w-xl aspect-[5/4] overflow-hidden rounded-lg mb-20">

                    <iframe src="https://www.google.com/maps?q=Kabupaten%20Sumenep&output=embed"
                        class="w-full h-full border-0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>
            </div>
        </div>

    </div>
    <x-footer></x-footer>
</body>

</html>
