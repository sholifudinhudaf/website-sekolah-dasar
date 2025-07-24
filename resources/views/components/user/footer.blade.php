<footer class="bg-gradient-to-b from-primary to-dark text-white">
    <div class="container mx-auto px-4 pt-4">
        <div class="flex flex-col md:flex-row justify-around items-center  gap-8">
            <div class=" flex flex-col md:flex-row justify-start items-center">
                <!-- Logo -->
                <div class="flex justify-center m-2.5 min-w-[112px] min-h-[112px]">
                    <img src="{{ asset('favicon.png') }}" alt="Logo SDN Semarang" class="h-28 w-28 ">
                </div>

                <!-- Informasi Kontak -->
                <div class="text-center md:text-left">
                    <h2 class="text-xl font-bold mb-2">SDN Semarang</h2>
                    <span class=" text-sm mb-2 text-gray-200 flex items-center justify-center md:justify-start">
                        <i class="fas fa-map-marker-alt mr-3 text-yellow-200"></i>Jl. Pendidikan No. 123, Kota Semarang <br>Jawa Tengah, Indonesia
                    </span>
                    <a href="mailto:sdn@gmail.com" class="text-sm mb-2 flex items-center justify-center md:justify-start hover:text-yellow-200 transition-colors">
                        <i class="fas fa-envelope mr-3 text-yellow-200"></i> sdn@gmail.com
                    </a>
                    <a href="tel:+62243551189" class=" text-sm mb-2 flex items-center justify-center md:justify-start hover:text-yellow-200 transition-colors">
                        <i class="fas fa-phone mr-3 text-yellow-200 text"></i> (024) 3551189
                    </a>
                </div>
            </div>

            <!-- Sosial Media -->
            <div class="text-center lg:text-left">
                <h4 class="text-lg font-semibold mb-4 border-b border-blue-400 pb-2">Temukan Kami</h4>
                <p class="text-sm mb-4 text-gray-200">Ikuti kami di media sosial untuk informasi terbaru:</p>
                <div class="flex justify-center lg:justify-start space-x-3">
                    <a href="#" aria-label="Facebook" class="bg-white bg-opacity-10 hover:bg-yellow-500 w-10 h-10 rounded-full flex items-center justify-center transition duration-300">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" aria-label="Twitter" class="bg-gray-700 hover:bg-primary w-10 h-10 rounded-full flex items-center justify-center transition duration-300">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" aria-label="Instagram" class="bg-gray-700 hover:bg-primary w-10 h-10 rounded-full flex items-center justify-center transition duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" aria-label="YouTube" class="bg-gray-700 hover:bg-primary w-10 h-10 rounded-full flex items-center justify-center transition duration-300">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-sm py-1 border-t border-gray-700 mt-2 text-center">
            &copy; {{ date('Y') }} <strong>SDN Semarang</strong>. Semua Hak Dilindungi.
        </div>
    </div>

    <!-- Scroll to Top -->
    <a href="#"
        class="scrollToTop fixed bottom-6 right-6 bg-primary hover:bg-blue-700 text-white w-10 h-10 rounded-full flex items-center justify-center shadow-lg opacity-0 invisible translate-y-4 transition-all duration-300 ease-in-out animate__animated animate__pulse animate__infinite"
        aria-label="Scroll to top">
        <i class="fa fa-angle-up"></i>
    </a>


</footer>