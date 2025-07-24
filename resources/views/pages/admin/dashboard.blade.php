<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">📊 Dashboard</h3>
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Selamat datang Admin</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <h3 class="text-sm text-gray-500 font-semibold uppercase">Total Siswa</h3>
                            <p class="text-4xl font-bold text-blue-600">{{ $totalSiswa }}</p>
                        </div>
                        <div class="text-5xl text-blue-400">
                            🎓
                        </div>
                    </div>
                    <div class="flex justify-between items-center text-sm text-gray-700">
                        <div class="flex items-center space-x-2">
                            <span class="text-blue-500 text-xl">👦</span>
                            <span>Laki-laki: <strong>{{ $lakiLaki }}</strong></span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="text-pink-500 text-xl">👧</span>
                            <span>Perempuan: <strong>{{ $perempuan }}</strong></span>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-sm text-gray-500 font-semibold uppercase">Total Pegawai</h3>
                            <p class="text-4xl font-bold text-green-600">{{ $totalPegawai }}</p>
                        </div>
                        <div class="text-5xl text-green-400">🧑‍🏫</div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-sm text-gray-500 font-semibold uppercase">Total Berita</h3>
                            <p class="text-4xl font-bold text-yellow-600">{{ $totalBerita }}</p>
                        </div>
                        <div class="text-5xl text-yellow-400">📰</div>
                    </div>
                </div>


                <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-sm text-gray-500 font-semibold uppercase">Total Pengaduan</h3>
                            <p class="text-4xl font-bold text-purple-600">{{ $totalPengaduan ?? 0 }}</p>
                        </div>
                        <div class="text-5xl text-purple-400">
                            🗣️
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-sm text-gray-500 font-semibold uppercase">Pengumuman</h3>
                            <p class="text-base font-bold text-red-600">Pemberitahuan Kegiatan Lomba dalam Rangka HUT RI Ke-80</p>
                        </div>
                        <div class="text-5xl text-red-400">📢</div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>