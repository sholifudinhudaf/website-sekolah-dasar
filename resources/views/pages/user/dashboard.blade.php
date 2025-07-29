{{-- halaman dashboard user --}}
<x-user-layout>
<!-- Hero Carousel Section -->
<section class="bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="relative rounded-lg overflow-hidden shadow-xl h-[300px] md:h-[400px] lg:h-[600px]">
            <!-- Carousel Items -->
            <div class="absolute w-full h-full bg-cover bg-center transition-opacity duration-700" style="background-image: url('https://sdnbandarharjo01.dikdas.semarangkota.go.id/uploads/gallery/media/b9d29b16-f2a4-4cd8-a73c-a927d38dcb43.jpg'); opacity: 1;" id="slide-0">
                <div class="absolute inset-0 flex flex-col justify-center items-center bg-gradient-to-t from-black to-transparent p-6 text-white text-center">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-2">Selamat Datang di SD Negeri Bandarharjo 01</h2>
                    <p class="text-base md:text-lg opacity-90">Mendidik generasi penerus bangsa dengan akhlak mulia dan prestasi gemilang</p>
                </div>
            </div>
            <div class="absolute w-full h-full bg-cover bg-center transition-opacity duration-700" style="background-image: url('https://admlapor.semarangkota.go.id/storage/file/02112025084415-HtqK9ikF.jpeg'); opacity: 0;" id="slide-1">
                <div class="absolute inset-0 flex flex-col justify-center items-center bg-gradient-to-t from-black to-transparent p-6 text-white text-center">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-2">Keunggulan SD Negeri Bandarharjo 01</h2>
                    <p class="text-base md:text-lg opacity-90">Pendidikan berkualitas dengan fasilitas modern untuk masa depan cerah</p>
                </div>
            </div>
            <div class="absolute w-full h-full bg-cover bg-center transition-opacity duration-700" style="background-image: url('https://sdnbandarharjo01.dikdas.semarangkota.go.id/uploads/gallery/media/WhatsApp%20Image%202024-10-21%20at%2011.22.01.jpeg'); opacity: 0;" id="slide-2">
                <div class="absolute inset-0 flex flex-col justify-center items-center bg-gradient-to-t from-black to-transparent p-6 text-white text-center">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-2">Program Unggulan Literasi</h2>
                    <p class="text-base md:text-lg opacity-90">Mengembangkan minat baca dan kreativitas siswa sejak dini</p>
                </div>
            </div>
            <div class="absolute w-full h-full bg-cover bg-center transition-opacity duration-700" style="background-image: url('https://sdnbandarharjo01.dikdas.semarangkota.go.id/uploads/gallery/media/WhatsApp%20Image%202024-10-22%20at%2008.23.18.jpeg'); opacity: 0;" id="slide-3">
                <div class="absolute inset-0 flex flex-col justify-center items-center bg-gradient-to-t from-black to-transparent p-6 text-white text-center">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-2">Prestasi Membanggakan</h2>
                    <p class="text-base md:text-lg opacity-90">Meraih berbagai penghargaan di tingkat kecamatan dan kota</p>
                </div>
            </div>

            <!-- Indicators -->
            <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-3">
                <button class="w-3 h-3 rounded-full bg-white bg-opacity-100" data-index="0"></button>
                <button class="w-3 h-3 rounded-full bg-white bg-opacity-50" data-index="1"></button>
                <button class="w-3 h-3 rounded-full bg-white bg-opacity-50" data-index="2"></button>
                <button class="w-3 h-3 rounded-full bg-white bg-opacity-50" data-index="3"></button>
            </div>

            <!-- Navigation Buttons -->
            <button id="prevBtn" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-80 hover:bg-opacity-100 text-gray-800 p-2 md:p-3 rounded-full shadow-lg transition z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="nextBtn" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-80 hover:bg-opacity-100 text-gray-800 p-2 md:p-3 rounded-full shadow-lg transition z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>
</section>

<!-- Principal's Welcome Section -->
<section class="py-12 bg-gray-50">
    <div class="container max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Sambutan Kepala Sekolah</h2>
        <div class="flex flex-col md:flex-row items-center justify-center gap-8">
            <div class="flex flex-col items-center md:w-1/3">
                <div class="relative w-64 h-64 mb-4 overflow-hidden rounded-lg shadow-md">
                    <img src="{{ asset('images/Kepala sekolah.png') }}" alt="Kepala Sekolah" class="rounded-lg shadow-lg">
                </div>
                <p class="text-xl font-semibold text-gray-800">
                    Elis Dwi P., S.Pd., M.Pd
                </p>
            </div>
            <div class="md:w-2/3 text-center md:text-left">
                <div class="flex justify-center md:justify-start mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-primary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                </div>
                <p class="text-gray-600 mb-6 text-lg">
                    Bismillahirrohmannirrohim Assalamualaikum Warahmatullah Wabarakatuh Alhamdulillahi robbil alamin kami panjatkan kehadirat Allah SWT, bahwasannya dengan rahmat dan karunia-Nya akhirnya Website sekolah ini dengan...
                </p>
                <div class="flex justify-center md:justify-start">
                    <a href="#" class="bg-primary hover:bg-primary-600 text-white px-6 py-2 rounded-lg flex items-center transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        Baca Sambutan Lengkap
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
    <section class="bg-gray-50 border-b py-12">
        <div class="container max-w-6xl mx-auto px-4">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Berita Terkini
            </h2>
            <div class="w-full mb-8">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($beritas as $berita)
                    <div
                        class="flex flex-col h-full overflow-hidden bg-white rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                        <a href="{{ route('berita.show', $berita->slug) }}" class="block overflow-hidden h-48">
                            <img src="{{ $berita->gambar ? asset('storage/' . $berita->gambar) : 'https://placehold.co/600x400?text=No+Image' }}"
                                class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"
                                alt="{{ $berita->judul }}" />
                        </a>

                        <div class="flex-1 p-6">
                            <div class="flex items-center mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 mr-1"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <p class="text-gray-500 text-sm">
                                    {{ $berita->created_at->format('d M Y') }}
                                </p>
                            </div>

                            <h3 class="font-bold text-xl text-gray-800 mb-3 line-clamp-2 hover:text-pink-500">
                                <a href="{{ route('berita.show', $berita->slug) }}">{{ $berita->judul }}</a>
                            </h3>

                            <p class="text-gray-600 text-base mb-4 line-clamp-3">
                                {{ Str::limit(strip_tags($berita->isi), 100) }}
                            </p>

                        </div>

                        <div class="px-6 pb-4">
                            <a class="inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-300 text-sm font-medium"
                                href="{{ route('berita.show', $berita->slug) }}">
                                Baca selengkapnya
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="flex justify-center mt-12">
                <a href="{{ route('berita.index') }}">
                    <button
                        class="mx-auto lg:mx-0 bg-blue-600 text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg hover:bg-blue-700 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Lihat Semua Berita
                    </button>
                </a>
            </div>
        </div>
    </section>

<!-- Related Links Section -->
<section class="py-16 bg-gray-50 ">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Link Terkait</h2>
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <a href="https://semarangkota.go.id/" target="_blank" class="flex justify-center items-center p-4 hover:bg-gray-50 rounded-lg transition-colors duration-300 h-24">
                    <img src="https://www.semarangkota.go.id/assets/images/logo-pemkot-black.png" alt="Logo Pemkot Semarang" class="max-h-16 object-contain">
                </a>
                <a href="https://disdik.semarangkota.go.id/" target="_blank" class="flex justify-center items-center p-4 hover:bg-gray-50 rounded-lg transition-colors duration-300 h-24">
                    <img src="https://disdiksmg.semarangkota.go.id/assets/images/logo_disdik.png" alt="Logo Dinas Pendidikan" class="max-h-16 object-contain">
                </a>
                <a href="https://sangjuara.semarangkota.go.id/" target="_blank" class="flex justify-center items-center p-4 hover:bg-gray-50 rounded-lg transition-colors duration-300 h-24">
                    <img src="https://sangjuara.semarangkota.go.id/asset/img/logo-sang-juara.png" alt="Logo Sang Juara" class="max-h-16 object-contain">
                </a>
                <a href="https://nisn.data.kemdikbud.go.id/" target="_blank" class="flex justify-center items-center p-4 hover:bg-gray-50 rounded-lg transition-colors duration-300 h-24">
                    <img src="https://nisn.data.kemdikbud.go.id/assets/images/icon_nisn.png" alt="Logo NISN" class="max-h-16 object-contain">
                </a>
                <a href="https://dapo.kemdikbud.go.id/" target="_blank" class="flex justify-center items-center p-4 hover:bg-gray-50 rounded-lg transition-colors duration-300 h-24">
                    <img src="https://disdikbud.banyuasinkab.go.id/wp-content/uploads/sites/269/2020/08/Logo-Dapodik-2021.png" alt="Logo Dapodik" class="max-h-16 object-contain">
                </a>
                <a href="https://dikdasmen.go.id/" target="_blank" class="flex justify-center items-center p-4 hover:bg-gray-50 rounded-lg transition-colors duration-300 h-24">
                    <div class="text-center text-gray-700 font-medium">Dikdasmen</div>
                </a>
            </div>
        </div>
    </div>
</section>
<script>
    // Carousel functionality
    const slides = document.querySelectorAll('#slide-0, #slide-1, #slide-2, #slide-3');
    const indicators = document.querySelectorAll('[data-index]');
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.opacity = i === index ? '1' : '0';
        });

        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('bg-opacity-100', i === index);
            indicator.classList.toggle('bg-opacity-50', i !== index);
        });
    }

    document.getElementById('prevBtn').addEventListener('click', () => {
        currentSlide = (currentSlide > 0) ? currentSlide - 1 : slides.length - 1;
        showSlide(currentSlide);
    });

    document.getElementById('nextBtn').addEventListener('click', () => {
        currentSlide = (currentSlide < slides.length - 1) ? currentSlide + 1 : 0;
        showSlide(currentSlide);
    });

    indicators.forEach((indicator, i) => {
        indicator.addEventListener('click', () => {
            currentSlide = i;
            showSlide(currentSlide);
        });
    });

    // Auto slide
    setInterval(() => {
        currentSlide = (currentSlide < slides.length - 1) ? currentSlide + 1 : 0;
        showSlide(currentSlide);
    }, 5000);
</script>
</x-user-layout>
