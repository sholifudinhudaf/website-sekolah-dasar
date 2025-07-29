<x-app-layout>
    {{-- Tambah Pengumuman --}}
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4" id="tambah-pengumuman">Tambah Pengumuman</h1>
        <form action="{{ route('pengumuman.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="judul" class="block text-gray-700">Judul</label>
                <input type="text" name="judul" id="judul" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="isi" class="block text-gray-700">Isi</label>
                <textarea name="isi" id="isi" class="w-full px-4 py-2 border rounded"></textarea>
            </div>
            <div class="mb-4">
                @if (session('success'))
                    <div class="mb-4 text-green-500">
                        {{ session('success') }}
                    </div>
                @elseif (session('error'))
                    <div class="mb-4 text-red-500">
                        {{ session('error') }}
                    </div>
                @endif
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>

    {{-- CKEditor untuk Isi --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#isi'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
