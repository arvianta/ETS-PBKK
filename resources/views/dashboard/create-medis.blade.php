<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Rekam Medis') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('rekam-medis.add') }}">
                        @csrf

                        <!-- Select User -->
                        <div class="mb-4">
                            <label for="user_id" class="block text-gray-700 text-sm font-bold mb-2">Select User:</label>
                            <select name="user_id" id="user_id" class="form-select rounded-md shadow-sm">
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Select Pasien -->
                        <div class="mb-4">
                            <label for="pasien_id" class="block text-gray-700 text-sm font-bold mb-2">Select Pasien:</label>
                            <select name="pasien_id" id="pasien_id" class="form-select rounded-md shadow-sm">
                                @foreach ($pasiens as $pasien)
                                    <option value="{{ $pasien->id }}">{{ $pasien->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Select Dokter -->
                        <div class="mb-4">
                            <label for="dokter_id" class="block text-gray-700 text-sm font-bold mb-2">Select Dokter:</label>
                            <select name="dokter_id" id="dokter_id" class="form-select rounded-md shadow-sm">
                                @foreach ($dokters as $dokter)
                                    <option value="{{ $dokter->id }}">{{ $dokter->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Kondisi Kesehatan -->
                        <div class="mb-4">
                            <label for="kondisi_kesehatan" class="block text-gray-700 text-sm font-bold mb-2">Kondisi Kesehatan:</label>
                            <input type="text" name="kondisi_kesehatan" id="kondisi_kesehatan" class="form-input rounded-md shadow-sm">
                        </div>

                        <!-- Suhu Tubuh -->
                        <div class="mb-4">
                            <label for="suhu_tubuh" class="block text-gray-700 text-sm font-bold mb-2">Suhu Tubuh:</label>
                            <input type="text" name="suhu_tubuh" id="suhu_tubuh" class="form-input rounded-md shadow-sm">
                        </div>

                        <!-- Resep -->
                        <div class="mb-4">
                            <label for="resep" class="block text-gray-700 text-sm font-bold mb-2">Resep:</label>
                            <textarea name="resep" id="resep" class="form-textarea rounded-md shadow-sm"></textarea>
                        </div>

                        <div class="flex items-center justify-end">
                            <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">Create Rekam Medis</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>