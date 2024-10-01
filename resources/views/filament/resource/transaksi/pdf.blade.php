<!DOCTYPE html>
<html lang="id" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
    <style>
        @page {
            size: A4;
            margin: 10mm;
        }

        @media print {
            body {
                width: 210mm;
                height: 297mm;
            }

            .break-inside-avoid {
                break-inside: avoid;
            }
        }

        body {
            font-family: sans-serif;
            font-size: 12px;
            line-height: 1.2;
            color: #4a5568;
            height: 100%;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 190mm;
            margin: 0 auto;
            padding: 16px;
        }

        .header {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
            border-bottom: 2px solid black;
            padding-bottom: 12px;
        }

        .header img {
            width: 100%;
            max-width: 115px;
            height: auto;
            margin-left: 8px;
        }

        .header .details {
            flex-grow: 1;
            margin-left: 16px;
        }

        .header .details h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 4px;
            text-align: center;
        }

        .header .details p {
            font-size: 10pt;
            line-height: 1.3;
            text-align: center;
        }

        .title-section {
            text-align: center;
            margin-bottom: 16px;
        }

        .title-section h2 {
            font-size: 18px;
            font-weight: bold;
            color: #4a5568;
        }

        .title-section h5 {
            margin-top: 4px;
            color: #718096;
        }

        .table-container {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 16px;
            font-size: 9pt;
        }

        .table th,
        .table td {
            border: 1px solid #d2d6dc;
            padding: 8px;
            text-align: center;
        }

        .table th {
            background-color: #f7fafc;
            text-transform: uppercase;
        }

        .table tr:nth-child(even) {
            background-color: #f9fafb;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .mt-4 {
            margin-top: 16px;
        }

        .mt-1 {
            margin-top: 4px;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="header">
            {{-- <div class="flex-none w-1/5 pr-4 ml-2">
                <img src="https://tse2.mm.bing.net/th?id=OIP.jo8RF--jtdFjlATp3dzLmAAAAA&pid=Api&P=0&h=180" alt="Batu Keriting Logo">
            </div> --}}
            <div class="details">
                <h1>MAEZA FARM</h1>
                <p>
                    Jalan Batu Berambut Lebat No. 123, Kel. Batu Kribo,<br>
                    Kec. Granit Gondrong, Kota Batu Gaya, Jawa Utara 12345<br>
                    Telp: (0291)123432 / 081222885323 | Email: info@batuemotnusantara.com
                </p>
            </div>
        </div>

        <div class="title-section">
            <h2>DATA RIWAYAT TRANSAKSI (DRT)</h2>
        </div>
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nomor Kontrak</th>
                        <th>Bulan Angsuran</th>
                        <th>Angsuran ke</th>
                        <th>Nilai Angsuran</th>
                        <th>Tanggal Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transaksi as $item)
                    <tr>
                        <td>{{ $item->no }}</td>
                        <td>{{ $item->bulan_angsuran }}</td>
                        <td>{{ $item->angsuran_ke }}</td>
                        <td>{{ $item->nilai_angsuran }}</td>
                        <td>{{ $item->tanggal_pembayaran }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>
