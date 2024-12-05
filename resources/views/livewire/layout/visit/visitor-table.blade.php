<div class="w-full">
    <table class="w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="p-3 text-left text-detail font-semibold text-gray-500 uppercase tracking-wide">No</th>
                <th scope="col" class="p-3 text-left text-detail font-semibold text-gray-500 uppercase tracking-wide">Nama</th>
                <th scope="col" class="p-3 text-left text-detail font-semibold text-gray-500 uppercase tracking-wide">Email</th>
                <th scope="col" class="p-3 text-left text-detail font-semibold text-gray-500 uppercase tracking-wide">Instansi</th>
                <th scope="col" class="p-3 text-left text-detail font-semibold text-gray-500 uppercase tracking-wide">Tujuan</th>
                <th scope="col" class="p-3 text-left text-detail font-semibold text-gray-500 uppercase tracking-wide">Tanggal</th>
                <th scope="col" class="p-3 text-left text-detail font-semibold text-gray-500 uppercase tracking-wide">Waktu</th>
                <th scope="col" class="p-3 text-left text-detail font-semibold text-gray-500 uppercase tracking-wide">Jumlah</th>
                <th scope="col" class="p-3 text-left text-detail font-semibold text-gray-500 uppercase tracking-wide">Telepon</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($visitors as $index => $visitor)
                <tr>
                    <td class="p-3 whitespace-nowrap">{{ $index + 1 }}</td>
                    <td class="p-3 whitespace-nowrap">{{ $visitor->name }}</td>
                    <td class="p-3 whitespace-nowrap">{{ $visitor->email }}</td>
                    <td class="p-3 whitespace-nowrap">{{ $visitor->department }}</td>
                    <td class="p-3 whitespace-nowrap">{{ $visitor->intention }}</td>
                    <td class="p-3 whitespace-nowrap">{{ $visitor->date }}</td>
                    <td class="p-3 whitespace-nowrap">{{ $visitor->time }}</td>
                    <td class="p-3 whitespace-nowrap">{{ $visitor->participant }}</td>
                    <td class="p-3 whitespace-nowrap">{{ $visitor->phone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
