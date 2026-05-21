@extends('layouts.app')

@section('title', 'Edit Ijazah - Website Generate dan Cetak Ijazah Simulasi')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <div class="pb-5 border-b border-gray-200">
        <h1 class="text-2xl font-bold font-outfit text-gray-900 sm:text-3xl">Edit Data Ijazah Simulasi</h1>
        <p class="mt-1.5 text-sm text-gray-500">Ubah data ijazah simulasi penelitian di bawah ini.</p>
    </div>

    <!-- Error Validation Display -->
    @if ($errors->any())
        <div class="p-4 bg-red-50 border-l-4 border-red-500 rounded text-red-800 shadow-sm">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-semibold text-red-800">Mohon perbaiki kesalahan berikut:</h3>
                    <ul class="mt-1.5 text-xs text-red-700 list-disc list-inside space-y-0.5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    <form action="{{ route('ijazah.update', $ijazah->id) }}" method="POST" class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
        @csrf
        @method('PUT')
        
        <div class="p-6 sm:p-8 space-y-8">
            <!-- Section 1: Akademik & Mahasiswa -->
            <div>
                <h3 class="text-lg font-semibold font-outfit text-gray-900 border-b border-gray-100 pb-2 mb-4">Informasi Akademik & Mahasiswa</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="nomor_seri" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">Nomor Seri Ijazah <span class="text-red-500">*</span></label>
                        <input type="text" name="nomor_seri" id="nomor_seri" value="{{ old('nomor_seri', $ijazah->nomor_seri) }}" required maxlength="150"
                            class="w-full bg-gray-50 border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:bg-white focus:border-gray-900 transition-colors">
                    </div>

                    <div>
                        <label for="nama_universitas" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">Nama Universitas <span class="text-red-500">*</span></label>
                        <input type="text" name="nama_universitas" id="nama_universitas" value="{{ old('nama_universitas', $ijazah->nama_universitas) }}" required maxlength="150"
                            class="w-full bg-gray-50 border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:bg-white focus:border-gray-900 transition-colors">
                    </div>

                    <div>
                        <label for="nama_mahasiswa" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">Nama Mahasiswa <span class="text-red-500">*</span></label>
                        <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" value="{{ old('nama_mahasiswa', $ijazah->nama_mahasiswa) }}" required maxlength="150"
                            class="w-full bg-gray-50 border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:bg-white focus:border-gray-900 transition-colors">
                    </div>

                    <div>
                        <label for="npm" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">NPM / NIM <span class="text-red-500">*</span></label>
                        <input type="text" name="npm" id="npm" value="{{ old('npm', $ijazah->npm) }}" required maxlength="50"
                            class="w-full bg-gray-50 border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:bg-white focus:border-gray-900 transition-colors">
                    </div>

                    <div>
                        <label for="program_studi" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">Program Studi <span class="text-red-500">*</span></label>
                        <input type="text" name="program_studi" id="program_studi" value="{{ old('program_studi', $ijazah->program_studi) }}" required maxlength="150"
                            class="w-full bg-gray-50 border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:bg-white focus:border-gray-900 transition-colors">
                    </div>

                    <div>
                        <label for="fakultas" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">Fakultas <span class="text-red-500">*</span></label>
                        <input type="text" name="fakultas" id="fakultas" value="{{ old('fakultas', $ijazah->fakultas) }}" required maxlength="150"
                            class="w-full bg-gray-50 border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:bg-white focus:border-gray-900 transition-colors">
                    </div>

                    <div>
                        <label for="gelar" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">Gelar Akademik <span class="text-red-500">*</span></label>
                        <input type="text" name="gelar" id="gelar" value="{{ old('gelar', $ijazah->gelar) }}" required maxlength="150"
                            class="w-full bg-gray-50 border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:bg-white focus:border-gray-900 transition-colors">
                    </div>

                    <div>
                        <label for="tanggal_lulus" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">Tanggal Kelulusan <span class="text-red-500">*</span></label>
                        <input type="date" name="tanggal_lulus" id="tanggal_lulus" value="{{ old('tanggal_lulus', $ijazah->tanggal_lulus) }}" required
                            class="w-full bg-gray-50 border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:bg-white focus:border-gray-900 transition-colors">
                    </div>
                </div>
            </div>

            <!-- Section 2: Penerbitan -->
            <div>
                <h3 class="text-lg font-semibold font-outfit text-gray-900 border-b border-gray-100 pb-2 mb-4">Informasi Penerbitan</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="tempat_terbit" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">Tempat Terbit Ijazah <span class="text-red-500">*</span></label>
                        <input type="text" name="tempat_terbit" id="tempat_terbit" value="{{ old('tempat_terbit', $ijazah->tempat_terbit) }}" required maxlength="150"
                            class="w-full bg-gray-50 border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:bg-white focus:border-gray-900 transition-colors">
                    </div>

                    <div>
                        <label for="tanggal_terbit" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">Tanggal Terbit Ijazah <span class="text-red-500">*</span></label>
                        <input type="date" name="tanggal_terbit" id="tanggal_terbit" value="{{ old('tanggal_terbit', $ijazah->tanggal_terbit) }}" required
                            class="w-full bg-gray-50 border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:bg-white focus:border-gray-900 transition-colors">
                    </div>
                </div>
            </div>

            <!-- Section 3: Tanda Tangan Pejabat -->
            <div>
                <h3 class="text-lg font-semibold font-outfit text-gray-900 border-b border-gray-100 pb-2 mb-4">Penandatangan Ijazah (Pejabat)</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="nama_dekan" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">Nama Dekan <span class="text-red-500">*</span></label>
                        <input type="text" name="nama_dekan" id="nama_dekan" value="{{ old('nama_dekan', $ijazah->nama_dekan) }}" required maxlength="150"
                            class="w-full bg-gray-50 border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:bg-white focus:border-gray-900 transition-colors">
                    </div>

                    <div>
                        <label for="nip_dekan" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">NIP Dekan <span class="text-red-500">*</span></label>
                        <input type="text" name="nip_dekan" id="nip_dekan" value="{{ old('nip_dekan', $ijazah->nip_dekan) }}" required maxlength="50"
                            class="w-full bg-gray-50 border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:bg-white focus:border-gray-900 transition-colors">
                    </div>

                    <div>
                        <label for="nama_rektor" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">Nama Rektor <span class="text-red-500">*</span></label>
                        <input type="text" name="nama_rektor" id="nama_rektor" value="{{ old('nama_rektor', $ijazah->nama_rektor) }}" required maxlength="150"
                            class="w-full bg-gray-50 border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:bg-white focus:border-gray-900 transition-colors">
                    </div>

                    <div>
                        <label for="nip_rektor" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1.5">NIP Rektor <span class="text-red-500">*</span></label>
                        <input type="text" name="nip_rektor" id="nip_rektor" value="{{ old('nip_rektor', $ijazah->nip_rektor) }}" required maxlength="50"
                            class="w-full bg-gray-50 border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:bg-white focus:border-gray-900 transition-colors">
                    </div>
                </div>
            </div>
        </div>

        <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex items-center justify-end space-x-3">
            <a href="{{ route('ijazah.show', $ijazah->id) }}" class="px-4 py-2 border border-gray-300 rounded text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                Batal
            </a>
            <button type="submit" class="px-5 py-2 border border-transparent rounded text-sm font-semibold text-white bg-gray-900 hover:bg-gray-800 focus:outline-none transition-colors">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
