<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ijazah PDF - {{ $ijazah->nama_mahasiswa }}</title>
    @php
        $imagePath = public_path('background-ijazah.png');
        $imageData = base64_encode(file_get_contents($imagePath));
        $src = 'data:image/png;base64,' . $imageData;
    @endphp
    <style>
        @page {
            size: a4 landscape;
            margin: 0;
        }
        body {
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            color: #111827;
        }
        .cert-container {
            width: 297mm;
            height: 210mm;
            position: relative;
            background-image: url('{{ $src }}');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            font-family: 'Times New Roman', Times, serif;
        }
        .cert-content {
            padding: 15mm 20mm 10mm 20mm;
        }
        
        .header {
            text-align: center;
            margin-bottom: 12px;
        }
        .label-simulasi-box {
            display: inline-block;
            border: 1px solid #000000;
            padding: 2px 16px;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 4px;
            background-color: #ffffff;
        }
        .label-sertifikat {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #111827;
            margin-bottom: 2px;
        }
        .univ-name {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            color: #5e35b1;
            margin-top: 4px;
            margin-bottom: 2px;
            letter-spacing: 0.5px;
        }
        .label-peringatan {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 10px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #111827;
            margin-top: 2px;
            margin-bottom: 4px;
        }
        .seri-no {
            font-family: 'Times New Roman', Times, serif;
            font-size: 13px;
            color: #111827;
            margin-top: 4px;
        }
        
        .content-body {
            text-align: center;
            margin-top: 6px;
            margin-bottom: 10px;
        }
        .statement-pimpinan {
            font-family: 'Times New Roman', Times, serif;
            font-size: 13px;
            color: #111827;
            margin-bottom: 4px;
        }
        .student-name {
            font-family: 'Times New Roman', Times, serif;
            font-size: 26px;
            font-weight: bold;
            color: #111827;
            margin-top: 4px;
            margin-bottom: 2px;
        }
        .npm-text {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 13px;
            font-weight: bold;
            color: #111827;
            margin-top: 2px;
            margin-bottom: 6px;
        }
        .statement-regular {
            font-family: 'Times New Roman', Times, serif;
            font-size: 13px;
            color: #111827;
            margin-top: 4px;
            margin-bottom: 4px;
        }
        .main-text {
            font-family: 'Times New Roman', Times, serif;
            font-size: 13px;
            line-height: 1.4;
            color: #111827;
            margin-top: 4px;
            margin-bottom: 6px;
        }
        .ijazah-title {
            font-family: 'Times New Roman', Times, serif;
            font-size: 38px;
            font-weight: bold;
            color: #111827;
            letter-spacing: 12px;
            margin-top: 8px;
            margin-bottom: 8px;
        }
        .gelar-text {
            font-family: 'Times New Roman', Times, serif;
            font-size: 18px;
            font-weight: bold;
            color: #111827;
            margin-top: 2px;
            margin-bottom: 6px;
        }
        .grad-details {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12px;
            line-height: 1.4;
            color: #111827;
            margin-top: 4px;
        }
        
        .signatories-table {
            width: 100%;
            margin-top: 15px;
            border-collapse: collapse;
        }
        .signatories-table td {
            vertical-align: bottom;
            text-align: center;
        }
        .officer-title {
            font-family: 'Times New Roman', Times, serif;
            font-size: 13px;
            font-weight: bold;
            color: #111827;
            margin-bottom: 30px;
        }
        .officer-name {
            font-family: 'Times New Roman', Times, serif;
            font-size: 13px;
            font-weight: bold;
            text-decoration: underline;
            color: #000000;
        }
        .officer-nip {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 10px;
            color: #4b5563;
            margin-top: 4px;
        }
        .photo-box {
            border: 1px solid #000000;
            width: 70px;
            height: 92px;
            margin: 0 auto;
            background-color: #ffffff;
        }
        .footer-note {
            position: absolute;
            bottom: 12mm;
            left: 20mm;
            right: 20mm;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: 10px;
            color: #4b5563;
        }
    </style>
</head>
<body>
    <div class="cert-container">
        <div class="cert-content">
            <!-- Header -->
            <div class="header">
                <div class="label-simulasi-box">Dokumen Simulasi</div>
                <div class="label-sertifikat">Template Sertifikat Akademik</div>
                <div class="univ-name">{{ $ijazah->nama_universitas }}</div>
                <div class="label-peringatan">Sample Penelitian – Tidak Berlaku Sebagai Ijazah</div>
                <div class="seri-no">Nomor Seri : {{ $ijazah->nomor_seri }}</div>
            </div>

            <!-- Content -->
            <div class="content-body">
                <div class="statement-pimpinan">Pimpinan {{ $ijazah->nama_universitas }} dengan ini menyatakan bahwa :</div>
                <div class="student-name">{{ $ijazah->nama_mahasiswa }}</div>
                <div class="npm-text">NPM : {{ $ijazah->npm }}</div>
                <div class="statement-regular">ini telah menyelesaikan dengan baik</div>
                <div class="main-text">
                    dan memenuhi segala syarat Pendidikan Sarjana (S1) pada Program Studi <strong>{{ $ijazah->program_studi }}</strong><br>
                    <strong>{{ $ijazah->fakultas }}</strong>, oleh sebab itu kepadanya diberikan :
                </div>
                
                <div class="ijazah-title">I J A Z A H</div>
                
                <div class="statement-regular">dengan gelar akademik</div>
                <div class="gelar-text">{{ $ijazah->gelar }}</div>
                
                <div class="grad-details">
                    Lulus pada tanggal <strong>{{ \Carbon\Carbon::parse($ijazah->tanggal_lulus)->translatedFormat('d F Y') }}</strong><br>
                    beserta segala hak dan kewajiban yang melekat pada Ijazah dan Gelar tersebut<br>
                    Diberikan di {{ $ijazah->tempat_terbit }} pada tanggal <strong>{{ \Carbon\Carbon::parse($ijazah->tanggal_terbit)->translatedFormat('d F Y') }}</strong>
                </div>
            </div>

            <!-- Signatures Table -->
            <table class="signatories-table">
                <tr>
                    <!-- Dekan -->
                    <td style="width: 38%;">
                        <div class="officer-title">Dekan</div>
                        <div>
                            <div class="officer-name">{{ $ijazah->nama_dekan }}</div>
                            <div class="officer-nip">NIP. {{ $ijazah->nip_dekan }}</div>
                        </div>
                    </td>
                    
                    <!-- Photo Box -->
                    <td style="width: 24%;">
                        <div class="photo-box"></div>
                    </td>
                    
                    <!-- Rektor -->
                    <td style="width: 38%;">
                        <div class="officer-title">Rektor</div>
                        <div>
                            <div class="officer-name">{{ $ijazah->nama_rektor }}</div>
                            <div class="officer-nip">NIP. {{ $ijazah->nip_rektor }}</div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Footer -->
        <div class="footer-note">
            Sampel penelitian, bukan dokumen resmi
        </div>
    </div>
</body>
</html>
