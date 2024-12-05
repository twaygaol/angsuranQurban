<!DOCTYPE html>
<html lang="id" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Konseling</title>
    <style>
        @page {
            size: A4;
            margin: 10mm;
        }

        body {
            font-family: 'Times New Roman', serif;
            font-size: 12px;
            line-height: 1.5;
            color: #000;
            margin: 0;
        }

        .container {
            width: 190mm;
            margin: 0 auto;
            padding: 16px;
        }

        .header {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .content {
            margin-top: 20px;
        }

        .content p {
            margin: 8px 0;
            text-align: justify;
        }

        .signature {
            margin-top: 40px;
            text-align: right;
        }

        .signature p {
            margin: 4px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ public_path('kop.png') }}" style="width: 100%;margin-top:-30px;" alt="Logo Sekolah">
        </div>

        <div class="title-section" style="text-align: center">
            <h2>SURAT KONSELING SISWA (SKS)</h2>
        </div>

        <div class="content" style="margin: 15px;">
            <p>Nomor:</p>
            <p>Perihal: Surat Hasil Konseling</p>
            <p>Kepada Yth,</p>
            <p>Sdr/i. {{ $pelanggaran->siswa->nama ?? 'Nama tidak ditemukan' }}</p>
            <p>Kelas: {{ $pelanggaran->siswa->kelas->nama_kelas ?? '-' }}</p>
            <p>Di tempat.</p>

            <p style="font-weight: bold;">Dengan hormat,</p>
            <p>
                Berdasarkan hasil konseling yang telah dilaksanakan pada tanggal {{ $pelanggaran->tanggal }},
                berikut ini kami sampaikan ringkasan dari hasil konseling:
            </p>

            <p><strong>Jenis Konseling:</strong> {{ $pelanggaran->jenis_pelanggaran }}</p>
            <p><strong>Catatan Konselor:</strong> {{ $pelanggaran->catatan }}</p>
            <p><strong>Keterangan:</strong> {{ $pelanggaran->keterangan }}</p>

            <p>
                Kami berharap hasil konseling ini dapat menjadi bahan evaluasi dan motivasi bagi Saudara/i
                dalam meningkatkan perilaku, kedisiplinan, serta prestasi di sekolah.
            </p>

            <p>Demikian surat ini kami sampaikan. Terima kasih atas perhatian dan kerjasama Saudara/i.</p>
        </div>

        <div class="signature" style="margin: 15px;">
            <p>Medan, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
            <p>Konselor,</p>
            <br><br><br>
            <p><strong>GURU BK</strong></p>
        </div>
    </div>
</body>

</html>
