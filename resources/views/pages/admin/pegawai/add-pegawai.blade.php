<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-6 border-b pb-2">➕ Tambah Pegawai</h1>

            {{-- Alert --}}
            @if (session('success'))
                <div class="mb-4 px-4 py-2 bg-green-100 text-green-800 rounded-md">
                    {{ session('success') }}
                </div>
            @elseif (session('error'))
                <div class="mb-4 px-4 py-2 bg-red-100 text-red-800 rounded-md">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" required
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:text-white">
                    </div>

                    <div>
                        <label for="jabatan" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" required
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:text-white">
                    </div>

                    <div>
                        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Alamat</label>
                        <input type="text" name="alamat" id="alamat" required
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:text-white">
                    </div>

                    <div>
                        <label for="role" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Role (Opsional)</label>
                        <select name="role" id="role"
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm bg-white dark:bg-gray-700 dark:text-white">
                            <option value="lainnya">Pilih role (lainnya)</option>
                            <option value="guru">Guru</option>
                            <option value="staf">Staf</option>
                        </select>
                    </div>

                    <div class="md:col-span-2">
                        <label for="foto" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Foto Pegawai</label>
                        <input type="file" name="foto" id="foto"
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm bg-white dark:bg-gray-700 dark:text-white">
                    </div>
                </div>

                <div class="mt-6 text-right">
                    <button type="submit"
                        class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg transition duration-200 shadow-md">
                        Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
