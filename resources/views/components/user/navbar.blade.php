<header class="w-full sticky top-0 z-50">
    <!-- Top Header -->
    <div class="bg-primary text-white py-1 mx-auto">
        <div class="container mx-auto px-4 lg:px-8 flex justify-center md:justify-between items-center">
            <div class="flex space-x-6">
                <div class="text-xs flex items-center">
                    <i class="fas fa-envelope mr-2 text-yellow-200"></i>
                    <span>sdn@gmail.com</span>
                </div>
                <div class="text-xs flex items-center">
                    <i class="fas fa-phone mr-2 text-yellow-200"></i>
                    <span>(024) 3551189</span>
                </div>
            </div>
            <div class="hidden md:flex space-x-4">
                <a href="#" class="hover:text-yellow-200 transition-colors" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="hover:text-yellow-200 transition-colors" aria-label="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="hover:text-yellow-200 transition-colors" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="hover:text-yellow-200 transition-colors" aria-label="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Navigation Menu -->
    <nav class="bg-white shadow-custom mx-auto">
        <div class="container mx-auto px-4 lg:px-8 ">
            <div class="flex justify-between items-center py-2">
                <div class="flex items-center animate__animated animate__zoomIn animate__delay-0.5s">
                    <div class="min-w-[64px] min-h-[64px] mr-2 bg-primary bg-opacity-10 rounded-lg flex    items-center justify-center">
                        <img src="{{ asset('favicon.png') }}" alt="Logo SDN Semarang" class="h-16 w-16 object-contain">
                    </div>
                    <div>
                        <div class="text-xl font-bold text-primary">SDN Semarang</div>
                        <div class="text-sm text-gray-600">Jl. Pendidikan No. 123, Semarang</div>
                    </div>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-600 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>

                <div class="hidden md:flex flex-wrap justify-end animate__animated animate__fadeInDown">
                    <div class="group relative px-3 py-2">
                        <a href="#" class="flex items-center text-gray-700 hover:text-primary font-medium transition-colors">
                            <i class="fas fa-home mr-2"></i> Beranda
                        </a>
                    </div>

                    <div class="group relative px-3 py-2">
                        <a href="#" class="flex items-center text-gray-700 hover:text-primary font-medium transition-colors">
                            <i class="fas fa-school mr-2"></i> Profil
                            <i class="fas fa-chevron-down ml-2 text-xs"></i>
                        </a>
                        <div class="absolute left-0 top-full hidden w-64 bg-white rounded-lg shadow-lg group-hover:block z-10 transition-all duration-300 transform translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white rounded-md mx-2 my-1 transition-colors">Visi Misi Sekolah</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white rounded-md mx-2 my-1 transition-colors">Sejarah Singkat Sekolah</a>
                                <a href="https://referensi.data.kemdikbud.go.id/tabs.php?npsn=203293" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white rounded-md mx-2 my-1 transition-colors">NPSN</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white rounded-md mx-2 my-1 transition-colors">Pendidikan dan Tenaga Kependidikan</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-700 hover:text-white rounded-md mx-2 my-1 transition-colors">Peserta Didik</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-700 hover:text-white rounded-md mx-2 my-1 transition-colors">Prestasi Sekolah</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white rounded-md mx-2 my-1 transition-colors">Ekstrakurikuler</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-700 hover:text-white rounded-md mx-2 my-1 transition-colors">BOS (Bantuan Operasional Sekolah)</a>
                            </div>
                        </div>
                    </div>

                    <div class="group relative px-3 py-2">
                        <a href="#" class="flex items-center text-gray-700 hover:text-primary font-medium transition-colors">
                            <i class="fas fa-book mr-2"></i> Kurikulum
                            <i class="fas fa-chevron-down ml-2 text-xs"></i>
                        </a>
                        <div class="absolute left-0 top-full hidden w-64 bg-white rounded-lg shadow-lg group-hover:block z-10 transition-all duration-300 transform translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-700 hover:text-white rounded-md mx-2 my-1 transition-colors">Kurikulum Sekolah</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-700 hover:text-white rounded-md mx-2 my-1 transition-colors">Kalender Pendidikan</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-700 hover:text-white rounded-md mx-2 my-1 transition-colors">Tugas Siswa</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-700 hover:text-white rounded-md mx-2 my-1 transition-colors">Buku Elektronik Siswa</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-700 hover:text-white rounded-md mx-2 my-1 transition-colors">Video Pembelajaran YouTube</a>
                            </div>
                        </div>
                    </div>

                    <div class="group relative px-3 py-2">
                        <a href="#" class="flex items-center text-gray-700 hover:text-primary font-medium transition-colors">
                            <i class="fas fa-bullhorn mr-2"></i> Informasi
                            <i class="fas fa-chevron-down ml-2 text-xs"></i>
                        </a>
                        <div class="absolute left-0 top-full hidden w-64 bg-white rounded-lg shadow-lg group-hover:block z-10 transition-all duration-300 transform translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-700 hover:text-white rounded-md mx-2 my-1 transition-colors">Berita Sekolah</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-700 hover:text-white rounded-md mx-2 my-1 transition-colors">Pendaftaran Siswa Baru</a>
                            </div>
                        </div>
                    </div>

                    <div class="group relative px-3 py-2">
                        <a href="#" class="flex items-center text-gray-700 hover:text-primary font-medium transition-colors">
                            <i class="fas fa-trophy mr-2"></i> Lomba
                            <i class="fas fa-chevron-down ml-2 text-xs"></i>
                        </a>
                        <div class="absolute left-0 top-full hidden w-64 bg-white rounded-lg shadow-lg group-hover:block z-10 transition-all duration-300 transform translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-700 hover:text-white rounded-md mx-2 my-1 transition-colors">Lomba Membuat Tulisan Motivasi/Inspiratif 2021</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-700 hover:text-white rounded-md mx-2 my-1 transition-colors">Lomba Bahasa Jawa 2021</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-700 hover:text-white rounded-md mx-2 my-1 transition-colors">MAPSI 2021</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-700 hover:text-white rounded-md mx-2 my-1 transition-colors">FLS2N</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-700 hover:text-white rounded-md mx-2 my-1 transition-colors">KSN</a>
                            </div>
                        </div>
                    </div>

                    <div class="group relative px-3 py-2">
                        <a href="#" class="flex items-center text-gray-700 hover:text-primary font-medium transition-colors">
                            <i class="fas fa-images mr-2"></i> Galeri
                            <i class="fas fa-chevron-down ml-2 text-xs"></i>
                        </a>
                        <div class="absolute left-0 top-full hidden w-48 bg-white rounded-lg shadow-lg group-hover:block z-10 transition-all duration-300 transform translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white rounded-md mx-2 my-1 transition-colors">Foto</a>
                                <a href="https://www.youtube.com/channel/UC4s4UjNNJ5eO6MJrtgck2wQ" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white rounded-md mx-2 my-1 transition-colors" target="_blank">Video</a>
                            </div>
                        </div>
                    </div>

                    <div class="group relative px-3 py-2">
                        <a href="#" class="flex items-center text-gray-700 hover:text-primary font-medium transition-colors">
                            <i class="fas fa-envelope mr-2"></i> Kontak Kami
                            <i class="fas fa-chevron-down ml-2 text-xs"></i>
                        </a>
                        <div class="absolute right-0 top-full hidden w-48 bg-white rounded-lg shadow-lg group-hover:block z-10 transition-all duration-300 transform translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white rounded-md mx-2 my-1 transition-colors">Kontak</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white rounded-md mx-2 my-1 transition-colors">Kritik dan Saran</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden bg-white border-t">
            <div class="px-4 py-3 space-y-1">
                <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50 rounded-lg">
                    <i class="fas fa-home mr-2"></i> Beranda
                </a>

                <div class="mobile-dropdown">
                    <button class="w-full flex justify-between items-center px-3 py-2 text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50 rounded-lg">
                        <span><i class="fas fa-school mr-2"></i> Profil</span>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                    <div class="hidden pl-6 py-2 space-y-1">
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">Visi Misi Sekolah</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">Sejarah Singkat Sekolah</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">NPSN</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">Pendidikan dan Tenaga Kependidikan</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">Peserta Didik</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">Prestasi Sekolah</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">Ekstrakurikuler</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">BOS (Bantuan Operasional Sekolah)</a>
                    </div>
                </div>
                <div class="mobile-dropdown">
                    <button class="w-full flex justify-between items-center px-3 py-2 text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50 rounded-lg">
                        <span><i class="fas fa-book mr-2"></i> Kurikulum</span>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                    <div class="hidden pl-6 py-2 space-y-1">
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">Kurikulum Sekolah</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">Kalender Pendidikan</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">Tugas Siswa</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">Buku Elektronik Siswa</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">Video Pembelajaran YouTube</a>
                    </div>
                </div>

                <div class="mobile-dropdown">
                    <button class="w-full flex justify-between items-center px-3 py-2 text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50 rounded-lg">
                        <span><i class="fas fa-bullhorn mr-2"></i> Informasi</span>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                    <div class="hidden pl-6 py-2 space-y-1">
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">Berita Sekolah</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">Pendaftaran Siswa Baru</a>
                    </div>
                </div>

                <div class="mobile-dropdown">
                    <button class="w-full flex justify-between items-center px-3 py-2 text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50 rounded-lg">
                        <span><i class="fas fa-trophy mr-2"></i> Lomba</span>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                    <div class="hidden pl-6 py-2 space-y-1">
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">Lomba Membuat Tulisan Motivasi/Inspiratif 2021</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">Lomba Bahasa Jawa 2021</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">MAPSI 2021</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">FLS2N</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">KSN</a>
                    </div>
                </div>

                <div class="mobile-dropdown">
                    <button class="w-full flex justify-between items-center px-3 py-2 text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50 rounded-lg">
                        <span><i class="fas fa-images mr-2"></i> Galeri</span>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                    <div class="hidden pl-6 py-2 space-y-1">
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">Foto</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">Video</a>
                    </div>
                </div>

                <div class="mobile-dropdown">
                    <button class="w-full flex justify-between items-center px-3 py-2 text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50 rounded-lg">
                        <span><i class="fas fa-envelope mr-2"></i> Kontak Kami</span>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                    <div class="hidden pl-6 py-2 space-y-1">
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">Kontak</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary hover:bg-gray-50 rounded-lg">Kritik dan Saran</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<script>
        // Simple mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // Mobile dropdowns
            const mobileDropdowns = document.querySelectorAll('.mobile-dropdown button');
            mobileDropdowns.forEach(dropdown => {
                dropdown.addEventListener('click', function() {
                    const dropdownContent = this.nextElementSibling;
                    dropdownContent.classList.toggle('hidden');
                });
            });
        });
        document.addEventListener("DOMContentLoaded", function() {
            const scrollToTopBtn = document.querySelector(".scrollToTop");

            window.addEventListener("scroll", function() {
                if (window.scrollY > 200) {
                    scrollToTopBtn.classList.remove("opacity-0", "translate-y-4", "invisible");
                    scrollToTopBtn.classList.add("opacity-100", "translate-y-0", "visible");
                } else {
                    scrollToTopBtn.classList.remove("opacity-100", "translate-y-0", "visible");
                    scrollToTopBtn.classList.add("opacity-0", "translate-y-4", "invisible");
                }
            });

            scrollToTopBtn.addEventListener("click", function(e) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        });
    </script>