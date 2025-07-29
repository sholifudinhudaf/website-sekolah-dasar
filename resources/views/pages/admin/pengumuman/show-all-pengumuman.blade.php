<x-app-layout>
    <div class="container mx-auto p-6">
        @if (session('success'))
            <div class="mb-4 text-green-500">{{ session('success') }}</div>
        @elseif (session('error'))
            <div class="mb-4 text-red-500">{{ session('error') }}</div>
        @endif

        <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-4 text-center">Daftar Pengumuman</h2>
        <a href="{{ route('pengumuman.add') }}" class="bg-blue-500 text-white px-4 py-3 rounded-lg shadow-md">
            + Tambah Pengumuman
        </a>

        <div class="mt-6 bg-white shadow-lg rounded-lg overflow-hidden">
            <table class="w-full table-auto">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="py-3 px-6 text-left">Judul</th>
                        <th class="py-3 px-6 text-left">Isi</th>
                        <th class="py-3 px-6 text-left">Tanggal</th>
                        <th class="py-3 px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($pengumuman as $item)
                        <tr class="border-b">
                            <td class="py-3 px-6 font-semibold">{{ $item->judul }}</td>
                            <td class="py-3 px-6 text-sm line-clamp-2">{{ Str::limit(strip_tags($item->isi), 60) }}</td>
                            <td class="py-3 px-6 text-sm">{{ $item->created_at->format('d M Y') }}</td>
                            <td class="py-3 px-6 flex justify-center space-x-2">
                                <a href="{{ route('pengumuman.show', $item->id) }}" class="bg-green-500 text-white px-4 py-2 rounded shadow">Lihat</a>
                                <a href="{{ route('pengumuman.edit', $item->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded shadow">Edit</a>
                                <form action="{{ route('pengumuman.destroy', $item->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded shadow" onclick="return confirm('Yakin ingin menghapus pengumuman ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
