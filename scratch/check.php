<?php

// Bootstrap Laravel
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Ijazah;
use Barryvdh\DomPDF\Facade\Pdf;

$ijazah = Ijazah::first();
if (!$ijazah) {
    echo "No ijazah records found in the database!\n";
    exit;
}

echo "Found Ijazah: " . $ijazah->nama_mahasiswa . " (ID: " . $ijazah->id . ")\n";

// Render PDF and save it
try {
    $pdf = Pdf::loadView('ijazah.pdf', compact('ijazah'))->setPaper('a4', 'landscape');
    $pdfPath = __DIR__ . '/test_output.pdf';
    file_put_contents($pdfPath, $pdf->output());
    echo "PDF generated successfully at: " . $pdfPath . "\n";
} catch (\Exception $e) {
    echo "Error generating PDF: " . $e->getMessage() . "\n";
}
