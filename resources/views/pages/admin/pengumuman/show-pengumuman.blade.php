<x-app-layout>
    <div class="container mx-auto px-4 py-10 max-w-4xl">
        <div class="bg-white p-8 rounded-xl shadow-xl">
            
            <!-- Judul Pengumuman -->
            <h1 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                {{ $pengumuman->judul }}
            </h1>

            <!-- Tanggal Pengumuman -->
            <p class="text-sm text-gray-500 mb-6">
                Diposting pada {{ \Carbon\Carbon::parse($pengumuman->created_at)->format('d M Y') }}
            </p>

            <!-- Isi Pengumuman -->
            <div class="prose max-w-none text-gray-800 mb-6">
                {!! nl2br(strip_tags($pengumuman->isi, '<br><ul><li><strong><em><b><i><a>')) !!}
            </div>


            <!-- Tombol Aksi -->
            <div class="flex justify-between items-center">
                <a href="{{ url()->previous() }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow transition">
                    ← Kembali
                </a>

                @auth
                    <a href="{{ route('pengumuman.edit', $pengumuman->id) }}"
                       class="bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-2 rounded-lg shadow transition">
                        ✏️ Edit
                    </a>
                @endauth
            </div>
        </div>
    </div>
</x-app-layout>
