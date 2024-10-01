@extends('layouts.app')

@section('content')
    <h1>Riwayat Transaksi</h1>

    <table>
        <thead>
            <tr>
                <th>No Kontrak</th>
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
@endsection
