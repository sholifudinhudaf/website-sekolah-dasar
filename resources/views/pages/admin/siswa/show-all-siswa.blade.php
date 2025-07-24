<x-app-layout>
    {{-- Tampilkan daftar siswa --}}
    <div class="container mx-auto p-6">
        {{-- Alert --}}
        @if (session('success'))
            <div class="mb-4 text-green-500">{{ session('success') }}</div>
        @elseif (session('error'))
            <div class="mb-4 text-red-500">{{ session('error') }}</div>
        @endif

        <h1 class="text-3xl font-bold mb-6 text-gray-800">Daftar Siswa</h1>

        <div class="flex justify-between items-center mb-4">
            <a href="{{ route('siswa.add') }}"
                class="bg-blue-500 text-white px-4 py-3 rounded-lg shadow-md hover:bg-blue-600">
                + Tambah Siswa
            </a>

            {{-- Form Pencarian --}}
            <form method="GET" action="{{ route('siswa.page') }}">
                <div class="flex items-center space-x-2">
                    <input type="text" name="search" placeholder="Cari nama / NISN..."
                        value="{{ request('search') }}"
                        class="px-4 py-2 rounded-lg border border-gray-300 focus:ring focus:ring-blue-200 w-64">
                    <button type="submit"
                        class="bg-violet-500 text-white px-4 py-2 rounded-lg hover:bg-violet-600">
                        Cari
                    </button>
                </div>
            </form>
        </div>

        {{-- Tabel Siswa --}}
        <div class="mt-4 bg-white shadow-lg rounded-lg overflow-hidden">
            <table class="w-full table-auto">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="py-3 px-6 text-left">Foto</th>
                        <th class="py-3 px-6 text-left">NISN</th>
                        <th class="py-3 px-6 text-left">Nama</th>
                        <th class="py-3 px-6 text-left">Jenis Kelamin</th>
                        <th class="py-3 px-6 text-left">Kelas</th>
                        <th class="py-3 px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @forelse ($siswas as $siswa)
                        <tr class="border-b">
                            <td class="py-3 px-6">
                                <img src="{{ $siswa->foto ? asset('storage/' . $siswa->foto) : 'https://placehold.co/200x300?text=No+Image' }}"
                                    alt="Foto Siswa" class="w-16 h-16 object-cover rounded-md border">
                            </td>
                            <td class="py-3 px-6">{{ $siswa->nisn }}</td>
                            <td class="py-3 px-6">{{ $siswa->nama }}</td>
                            <td class="py-3 px-6">{{ $siswa->jenis_kelamin }}</td>
                            <td class="py-3 px-6">{{ $siswa->kelas }}</td>
                            <td class="py-3 px-6 flex justify-center space-x-2">
                                <a href="{{ route('siswa.detail', $siswa->id) }}"
                                    class="bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600">
                                    Lihat
                                </a>
                                <a href="{{ route('siswa.edit', $siswa->id) }}"
                                    class="bg-yellow-500 text-white px-4 py-2 rounded shadow hover:bg-yellow-600">
                                    Edit
                                </a>
                                <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 text-white px-4 py-2 rounded shadow hover:bg-red-600"
                                        onclick="return confirm('Hapus siswa ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-4 text-center text-gray-500">
                                Data siswa tidak ditemukan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
