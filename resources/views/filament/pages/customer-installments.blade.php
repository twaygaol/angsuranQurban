<x-filament-panels::page>
    <div class="space-y-6">
        <!-- Informasi Customer -->
        <div class="p-4 mb-6 bg-gray-100 rounded-md shadow-md dark:bg-gray-800">
            <h3 class="mb-2 text-lg font-semibold text-gray-900 dark:text-gray-100">Informasi Customer</h3>
            <div class="flex flex-col p-2 space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                <!-- Kolom Kiri -->
                <div class="flex-1 ">
                    <div class="mb-2 ">
                        <strong class="block  text-lg font-medium text-black dark:text-gray-200">Nama: <span class="text-lg text-black dark:text-gray-200">{{ Auth::user()->name }}</span></strong>
                    </div>
                    <div class="mb-2">
                        <strong class="block text-lg font-medium text-black dark:text-gray-200">Email: <span class="text-lg text-black dark:text-gray-200">{{ Auth::user()->email }}</span></strong>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="flex-1"  style="margin-top:6px;">
                    <div class="mb-2">
                        <strong class="block text-lg font-medium text-black dark:text-gray-200">Nomor HP: <span class="text-lg text-black dark:text-gray-200">{{ $customer->no_hp }}</span></strong>
                    </div>
                    <div>
                        <strong class="block text-lg font-medium text-black dark:text-gray-200">Alamat: <span class="text-lg text-black dark:text-gray-200">{{ $customer->alamat }}</span></strong>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-xl font-bold text-gray-900 dark:text-gray-100">Riwayat Pembayaran</h2>

        <!-- Riwayat Pembayaran -->
        @if ($installments->isEmpty())
            <p class="text-gray-900 dark:text-gray-100">Tidak ada riwayat pembayaran.</p>
        @else

            <div class="p-1 mb-6 overflow-x-auto bg-gray-100 rounded-md shadow-md dark:bg-gray-800">
                <table class="w-full text-sm text-gray-700 bg-white border-collapse rounded-sm dark:text-gray-300 dark:bg-gray-900">
                    <thead>
                        <tr class="bg-gray-200 border-b dark:bg-gray-100">
                            <th class="border border-gray-300 dark:border-gray-600  p-2 uppercase w-[5%]">No</th>
                            <th class="border border-gray-300 dark:border-gray-600  p-2 uppercase w-[15%]">Nomor Kontrak</th>
                            <th class="border border-gray-300 dark:border-gray-600  p-2 uppercase w-[10%]">Bulan Angsuran</th>
                            <th class="border border-gray-300 dark:border-gray-600  p-2 uppercase w-[30%]">Jumlah Angsuran</th>
                            <th class="border border-gray-300 dark:border-gray-600  p-2 uppercase w-[8%]">Tanggal Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($installments as $index => $installment)
                            <tr class="{{ $loop->even ? 'bg-gray-50 dark:bg-gray-100' : 'bg-white dark:bg-gray-100' }}">
                                <td class="p-2 text-center border border-gray-300 dark:border-gray-600">{{ $index + 1 }}</td>
                                <td class="p-2 text-center break-words border border-gray-300 dark:border-gray-600">{{ $installment->no }}</td>
                                <td class="p-2 text-center border border-gray-300 dark:border-gray-600">{{ $installment->bulan_angsuran }}</td>
                                <td class="p-2 text-center break-words border border-gray-300 dark:border-gray-600">Rp {{ number_format($installment->nilai_angsuran, 0, ',', '.') }}</td>
                                <td class="p-2 text-center border border-gray-300 dark:border-gray-600" style="color: white; background-color:gray" >
                                    {{ \Carbon\Carbon::parse($installment->tanggal_pembayaran)->format('d-m-Y') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-filament-panels::page>
