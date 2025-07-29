<x-user-layout>
    <section class="pt-24 bg-gray-200">
        <div class="container mx-auto px-4 py-8 max-w-6xl">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <div class="flex items-center text-sm text-gray-500 mb-6">
                    <a href="{{ route('userDashboard') }}" class="hover:text-blue-600 transition-colors">Beranda</a>
                    <span class="mx-2">›</span>
                    <a href="{{ route('pengumuman.index') }}" class="hover:text-blue-600 transition-colors">Pengumuman</a>
                    <span class="mx-2">›</span>
                    <span class="text-gray-700">{{ $pengumuman->judul }}</span>
                </div>
            </nav>

            <!-- Tombol Kembali -->
            <div class="mb-4">
                <a href="{{ route('pengumuman.index') }}"
                   class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded hover:bg-blue-700 transition-colors">
                    ← Kembali 
                </a>
            </div>

            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Main Content -->
                <div class="lg:w-2/3">
                    <article>
                        <header class="mb-8">
                            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $pengumuman->judul }}</h1>
                            <div class="text-sm text-gray-600 mb-4">
                                Diposting pada {{ $pengumuman->created_at->format('d M Y \p\u\k\u\l H:i') }}
                            </div>
                        </header>

                        <!-- Isi Pengumuman -->
                        <div class="prose prose-lg max-w-none text-gray-800">
                            {!! nl2br(e($pengumuman->isi)) !!}
                        </div>
                    </article>
                </div>

                <!-- Sidebar -->
                <div class="lg:w-1/3 bg-white/50 sticky top-24 p-6 rounded-lg">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Pengumuman Terbaru</h2>
                    <div class="space-y-4">
                        @foreach($pengumumanTerbaru as $item)
                            <div class="flex items-start gap-4">
                                <div>
                                    <a href="{{ route('pengumuman.user.show', $item->id) }}"
                                       class="text-gray-900 font-semibold hover:text-blue-600 transition-colors">
                                        {{ Str::limit($item->judul, 60) }}
                                    </a>
                                    <p class="text-sm text-gray-500">{{ $item->created_at->format('d M Y') }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-user-layout>
