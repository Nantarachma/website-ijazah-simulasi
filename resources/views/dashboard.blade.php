@extends('layouts.app')

@section('title', 'Dashboard - Website Generate dan Cetak Ijazah Simulasi')

@section('content')
<div class="max-w-4xl mx-auto py-12 px-4 sm:px-6">
    <div class="text-center">
        <h1 class="text-4xl sm:text-5xl font-extrabold font-outfit text-gray-900 tracking-tight mb-4">
            Website Generate dan Cetak Ijazah Simulasi
        </h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-10 leading-relaxed">
            Aplikasi ini digunakan untuk membuat template ijazah simulasi berdasarkan data input, menampilkan preview, dan mencetak hasil dokumen.
        </p>

        <!-- Informational Callout (Simulation notice) -->
        <div class="mb-12 bg-amber-50 border-l-4 border-amber-500 p-4 rounded text-left max-w-2xl mx-auto">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-amber-600" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-semibold text-amber-800">Pemberitahuan Penting</h3>
                    <p class="text-xs text-amber-700 mt-1">
                        Dokumen yang dihasilkan melalui aplikasi ini adalah <strong>dokumen simulasi</strong> untuk keperluan penelitian. Dokumen ini <strong>tidak berlaku sebagai ijazah resmi</strong>. Label penanda simulasi akan secara otomatis dicetak pada hasil cetak dan PDF.
                    </p>
                </div>
            </div>
        </div>

        <!-- Action Cards / Buttons -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-2xl mx-auto">
            <a href="{{ route('ijazah.create') }}" class="group relative block bg-white border border-gray-200 hover:border-gray-900 p-8 rounded-xl shadow-sm hover:shadow-md transition-all duration-300">
                <div class="text-left">
                    <div class="w-12 h-12 rounded-lg bg-gray-900 text-white flex items-center justify-center mb-6 group-hover:scale-105 transition-transform duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-outfit text-gray-900 group-hover:text-gray-900">
                        Generate Ijazah
                    </h3>
                    <p class="text-sm text-gray-500 mt-2">
                        Buat data ijazah simulasi baru dengan mengisi formulir input secara lengkap.
                    </p>
                </div>
            </a>

            <a href="{{ route('ijazah.index') }}" class="group relative block bg-white border border-gray-200 hover:border-gray-900 p-8 rounded-xl shadow-sm hover:shadow-md transition-all duration-300">
                <div class="text-left">
                    <div class="w-12 h-12 rounded-lg bg-gray-100 text-gray-900 flex items-center justify-center mb-6 group-hover:bg-gray-900 group-hover:text-white transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-outfit text-gray-900">
                        Lihat Data Ijazah
                    </h3>
                    <p class="text-sm text-gray-500 mt-2">
                        Tampilkan daftar seluruh data ijazah simulasi yang telah disimpan sebelumnya.
                    </p>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
