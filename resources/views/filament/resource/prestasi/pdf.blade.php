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
            text-align: center;
            /* margin-bottom: 20px;
            border-bottom: 2px solid black;
            padding-bottom: 10px; */
        }

        .header h1 {
            font-size: 20px;
            font-weight: bold;
            margin: 0;
        }

        .header p {
            font-size: 12px;
            margin: 0;
            line-height: 1.4;
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
            {{-- <h1>SMAS AL - ULUM TERPADU</h1>
            <p>
                JL. TUASAN NO. 35 MEDAN, Sidorejo Hilir, Kec. Medan Tembung<br>
                Kota Medan, Kode Pos 20124<br>
                Telp: (0291)123432 / 081222885323 | Email: info@batuemotnusantara.com
            </p> --}}
        </div>

        <div class="title-section" style="text-align: center">
            <h2>SURAT KONSELING SISWA ( SKS )</h2>
        </div>

        <div class="content" style="margin: 15px;">
                <p>Nomor:</p>
                <p>Perihal: Surat Hasil Konseling</p>
                <p>Kepada Yth,</p>
                <p>Sdr/i. {{ $prestasi->siswa->nama }}</p>
                <p>Kelas: {{ $prestasi->siswa->kelas->nama_kelas ?? '-' }}</p>
                <p>Di tempat.</p>

                <p style="font-weight: bold;">Dengan hormat,</p>
                <p style="font-size: 15px;">
                    Berdasarkan hasil konseling yang telah dilaksanakan pada tanggal {{ $prestasi->tanggal }}, berikut ini kami
                    sampaikan ringkasan dari hasil konseling:
                </p>

                <p><strong>Jenis Konseling:</strong> {{ $prestasi->prestasi }}</p>
                <p><strong>Catatan Konselor:</strong> {{ $prestasi->catatan }}</p>
                <p><strong>Keterangan:</strong> {{ $prestasi->keterangan }}</p>

                <p style="font-size: 15px;">
                    Kami berharap hasil konseling ini dapat menjadi bahan evaluasi dan motivasi bagi Saudara/i dalam
                    meningkatkan perilaku, kedisiplinan, serta prestasi di sekolah.
                </p>

                <p style="font-size: 15px;">
                    Demikian surat ini kami sampaikan. Terima kasih atas perhatian dan kerjasama Saudara/i.
                </p>
        </div>

        <div class="signature" style="margin: 15px;">
            <p>Medan, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
            <p>Konselor,</p>
            <br><br><br>
            <p><strong>GURU BK </strong></p>
        </div>
    </div>
</body>

</html>
