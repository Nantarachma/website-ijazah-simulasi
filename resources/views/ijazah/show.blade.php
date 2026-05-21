<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Ijazah Simulasi - {{ $ijazah->nama_mahasiswa }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Times New Roman', 'Times', 'serif'],
                    }
                }
            }
        }
    </script>
    <style>
        /* Exact A4 Landscape print dimensions */
        @page {
            size: A4 landscape;
            margin: 0;
        }
        
        body {
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        .cert-paper {
            width: 297mm;
            height: 210mm;
            box-sizing: border-box;
            background-color: #ffffff;
            background-image: url('{{ asset('background-ijazah.png') }}');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            font-family: 'Times New Roman', Times, serif;
            padding: 15mm 20mm;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        @media print {
            .no-print {
                display: none !important;
            }
            body {
                background-color: white;
            }
            .cert-paper {
                box-shadow: none;
                margin: 0 !important;
                border-radius: 0 !important;
            }
            .print-center {
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;
                height: 100vh !important;
            }
        }
    </style>
</head>
<body class="flex flex-col items-center min-h-screen">

    <!-- Top floating bar (Excluded from print) -->
    <div class="no-print w-full bg-white border-b border-gray-200 py-4 px-8 sticky top-0 z-50 flex items-center justify-between shadow-sm">
        <div class="flex items-center space-x-3">
            <span class="bg-red-600 text-white font-extrabold text-xs px-2.5 py-1 uppercase rounded tracking-wider">Simulasi</span>
            <h1 class="text-sm font-bold text-gray-800">Ijazah: {{ $ijazah->nama_mahasiswa }} ({{ $ijazah->npm }})</h1>
        </div>
        <div class="flex items-center space-x-2">
            <a href="{{ route('ijazah.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded text-sm font-semibold text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                <svg class="w-4 h-4 mr-1.5 -ml-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Kembali
            </a>
            <a href="{{ route('ijazah.edit', $ijazah->id) }}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded text-sm font-semibold text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                <svg class="w-4 h-4 mr-1.5 -ml-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
                Edit Data
            </a>
            <button onclick="window.print()" class="inline-flex items-center px-5 py-2 border border-transparent rounded text-sm font-bold text-white bg-gray-900 hover:bg-gray-800 shadow transition-colors">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                </svg>
                Cetak Ijazah
            </button>
        </div>
    </div>

    <!-- Print center wrapper -->
    <div class="print-center py-10 flex-grow flex items-center justify-center">
        <!-- Certificate Card (A4 Size) -->
        <div class="cert-paper">
            
            <!-- Top Header -->
            <div class="text-center relative z-10 flex flex-col items-center">
                <!-- DOKUMEN SIMULASI box -->
                <div style="font-family: Helvetica, Arial, sans-serif; border: 1px solid #000000; padding: 2px 16px; font-size: 11px; font-weight: bold; text-transform: uppercase; letter-spacing: 1px;" class="mb-1 text-gray-900 bg-white">
                    Dokumen Simulasi
                </div>
                <!-- TEMPLATE SERTIFIKAT AKADEMIK -->
                <div style="font-family: Helvetica, Arial, sans-serif; font-size: 11px; font-weight: bold; text-transform: uppercase; letter-spacing: 1px;" class="text-gray-900">
                    Template Sertifikat Akademik
                </div>
                <!-- University Name -->
                <h2 style="font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: bold; text-transform: uppercase; color: #5e35b1; letter-spacing: 0.5px;" class="mt-1">
                    {{ $ijazah->nama_universitas }}
                </h2>
                <!-- Warning / Sample text -->
                <div style="font-family: Helvetica, Arial, sans-serif; font-size: 10px; font-weight: bold; text-transform: uppercase; letter-spacing: 1px;" class="text-gray-900 mt-0.5">
                    Sample Penelitian – Tidak Berlaku Sebagai Ijazah
                </div>
                <!-- Serial number -->
                <div style="font-size: 13px;" class="text-gray-800 mt-1">
                    Nomor Seri : {{ $ijazah->nomor_seri }}
                </div>
            </div>

            <!-- Main Certificate Content -->
            <div class="text-center my-auto space-y-2 relative z-10">
                <p style="font-size: 13px;" class="text-gray-800">
                    Pimpinan {{ $ijazah->nama_universitas }} dengan ini menyatakan bahwa :
                </p>
                
                <!-- Student Name -->
                <h3 style="font-size: 26px; font-weight: bold;" class="text-gray-950 mt-1 mb-0.5">
                    {{ $ijazah->nama_mahasiswa }}
                </h3>

                <!-- Student NPM -->
                <p style="font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: bold;" class="text-gray-900 mt-0.5 mb-1.5">
                    NPM : {{ $ijazah->npm }}
                </p>

                <p style="font-size: 13px;" class="text-gray-800">
                    ini telah menyelesaikan dengan baik
                </p>

                <!-- Degree and Study Program Statement -->
                <p style="font-size: 13px; line-height: 1.4;" class="text-gray-800 max-w-2xl mx-auto">
                    dan memenuhi segala syarat Pendidikan Sarjana (S1) pada Program Studi <strong>{{ $ijazah->program_studi }}</strong><br>
                    <strong>{{ $ijazah->fakultas }}</strong>, oleh sebab itu kepadanya diberikan :
                </p>

                <!-- IJAZAH -->
                <h4 style="font-size: 38px; font-weight: bold; letter-spacing: 12px; margin-top: 6px; margin-bottom: 6px;" class="text-gray-950">
                    I J A Z A H
                </h4>

                <p style="font-size: 13px;" class="text-gray-800">
                    dengan gelar akademik
                </p>

                <!-- Gelar -->
                <h5 style="font-size: 18px; font-weight: bold;" class="text-gray-950 mt-0.5 mb-1">
                    {{ $ijazah->gelar }}
                </h5>

                <p style="font-size: 12px; line-height: 1.4;" class="text-gray-800">
                    Lulus pada tanggal <strong>{{ \Carbon\Carbon::parse($ijazah->tanggal_lulus)->translatedFormat('d F Y') }}</strong><br>
                    beserta segala hak dan kewajiban yang melekat pada Ijazah dan Gelar tersebut<br>
                    Diberikan di {{ $ijazah->tempat_terbit }} pada tanggal <strong>{{ \Carbon\Carbon::parse($ijazah->tanggal_terbit)->translatedFormat('d F Y') }}</strong>
                </p>
            </div>

            <!-- Signatures Section -->
            <div class="grid grid-cols-3 items-end px-6 relative z-10 font-serif">
                <!-- Left: Dekan -->
                <div class="text-center space-y-12">
                    <div style="font-size: 13px; font-weight: bold;" class="text-gray-900">
                        Dekan
                    </div>
                    <div>
                        <div style="font-size: 13px; font-weight: bold; text-decoration: underline;" class="text-gray-900 inline-block px-1">
                            {{ $ijazah->nama_dekan }}
                        </div>
                        <div style="font-family: Helvetica, Arial, sans-serif; font-size: 10px;" class="text-gray-700 mt-1">
                            NIP. {{ $ijazah->nip_dekan }}
                        </div>
                    </div>
                </div>

                <!-- Center: Photo Box -->
                <div class="text-center">
                    <!-- 3x4 photo placeholder -->
                    <div style="border: 1px solid #000000; width: 80px; height: 105px; margin: 0 auto;" class="bg-white"></div>
                </div>

                <!-- Right: Rektor -->
                <div class="text-center space-y-12">
                    <div style="font-size: 13px; font-weight: bold;" class="text-gray-900">
                        Rektor
                    </div>
                    <div>
                        <div style="font-size: 13px; font-weight: bold; text-decoration: underline;" class="text-gray-900 inline-block px-1">
                            {{ $ijazah->nama_rektor }}
                        </div>
                        <div style="font-family: Helvetica, Arial, sans-serif; font-size: 10px;" class="text-gray-700 mt-1">
                            NIP. {{ $ijazah->nip_rektor }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Sim Notice -->
            <div style="font-size: 10px;" class="text-center text-gray-600 mt-3 relative z-10">
                Sampel penelitian, bukan dokumen resmi
            </div>
        </div>
    </div>

</body>
</html>
