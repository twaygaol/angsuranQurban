<x-filament-panels::page>
    <div class="space-y-6">
        <!-- Informasi Customer -->
        <div class="p-4 mb-6 bg-gray-100 rounded-md shadow-md dark:bg-gray-800">
            <h3 class="mb-2 text-lg font-semibold text-gray-900 dark:text-gray-100">Informasi Customer</h3>
            <div class="flex flex-col p-2 space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                <!-- Kolom Kiri -->
                <div class="flex-1 ">
                    <div class="mb-2 ">
                        <strong class="block text-lg font-medium text-black dark:text-gray-200">Nama: <span class="text-lg text-black dark:text-gray-200">{{ Auth::user()->name }}</span></strong>
                    </div>
                    <div class="mb-2">
                        <strong class="block text-lg font-medium text-black dark:text-gray-200">Email: <span class="text-lg text-black dark:text-gray-200">{{ Auth::user()->email }}</span></strong>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                {{-- <div class="flex-1"  style="margin-top:6px;">
                    <div class="mb-2">
                        <strong class="block text-lg font-medium text-black dark:text-gray-200">Nomor HP: <span class="text-lg text-black dark:text-gray-200">{{ $kelas->nama_kelas }}</span></strong>
                    </div>
                </div> --}}
            </div>
        </div>

        <h2 class="text-xl font-bold text-gray-900 dark:text-gray-100">Riwayat Pelanggaran</h2>

        @if ($violations->isEmpty())
            <p class="text-gray-900 dark:text-gray-100">Tidak ada riwayat pelanggaran.</p>
        @else
            <div class="p-1 mb-6 overflow-x-auto bg-gray-100 rounded-md shadow-md dark:bg-gray-800">
                <table class="w-full text-sm text-gray-700 bg-white border-collapse rounded-sm dark:text-gray-300 dark:bg-gray-900">
                    <thead>
                        <tr class="bg-gray-200 border-b dark:bg-gray-100">
                            <th class="border border-gray-300 dark:border-gray-600 p-2 uppercase w-[5%]">No</th>
                            <th class="border border-gray-300 dark:border-gray-600 p-2 uppercase w-[20%]">Jenis Pelanggaran</th>
                            <th class="border border-gray-300 dark:border-gray-600 p-2 uppercase w-[20%]">Tanggal</th>
                            <th class="border border-gray-300 dark:border-gray-600 p-2 uppercase w-[40%]">Catatan</th>
                            <th class="border border-gray-300 dark:border-gray-600 p-2 uppercase w-[15%]">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($violations as $index => $violation)
                            <tr class="{{ $loop->even ? 'bg-gray-50 dark:bg-gray-100' : 'bg-white dark:bg-gray-100' }}">
                                <td class="p-2 text-center border border-gray-300 dark:border-gray-600">{{ $index + 1 }}</td>
                                <td class="p-2 text-center break-words border border-gray-300 dark:border-gray-600">{{ $violation->jenis_pelanggaran }}</td>
                                <td class="p-2 text-center border border-gray-300 dark:border-gray-600">{{ \Carbon\Carbon::parse($violation->tanggal)->format('d-m-Y') }}</td>
                                <td class="p-2 text-center break-words border border-gray-300 dark:border-gray-600">{{ $violation->catatan }}</td>
                                <td class="p-2 text-center border border-gray-300 dark:border-gray-600">{{ $violation->keterangan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-filament-panels::page>
