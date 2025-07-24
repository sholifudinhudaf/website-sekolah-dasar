<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Edit Berita</h1>

        <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="judul" class="block text-gray-700">Judul</label>
                <input type="text" name="judul" id="judul" class="w-full px-4 py-2 border rounded"
                    value="{{ $berita->judul }}" required>
            </div>

            <div class="mb-4">
                <label for="isi" class="block text-gray-700">Isi</label>
                <textarea name="isi" id="isi" rows="6" class="w-full px-4 py-2 border rounded" required>{{ $berita->isi }}</textarea>
            </div>

            <div class="mb-4">
                <label for="slug" class="block text-gray-700">Slug</label>
                <input type="text" name="slug" id="slug" class="w-full px-4 py-2 border rounded"
                    value="{{ $berita->slug }}" required>
            </div>

            <div class="mb-4">
                <label for="gambar" class="block text-gray-700">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="w-full px-4 py-2 border rounded" onchange="previewImage(event)">
                @if ($berita->gambar)
                    <img id="preview" src="{{ asset('storage/' . $berita->gambar) }}"
                        alt="Gambar Berita" class="mt-4 w-1/4 rounded border">
                @else
                    <img id="preview" src="https://placehold.co/200x300?text=No+Image" 
                        alt="No Image" class="mt-4 w-1/4 rounded border">
                @endif
            </div>

            <div class="flex gap-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
                <a href="{{ url()->previous() }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700">Kembali</a>
            </div>
        </form>
    </div>

    {{-- Script otomatis slug dan preview --}}
    <script>
        document.getElementById('judul').addEventListener('input', function () {
            const judul = this.value;
            const slug = judul.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)+/g, '');
            document.getElementById('slug').value = slug;
        });

        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function () {
                document.getElementById('preview').src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</x-app-layout>
