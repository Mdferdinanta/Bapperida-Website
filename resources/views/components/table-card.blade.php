<div class="bg-white shadow-md rounded-md border border-gray-300 p-4">
    <h4 class="text-detail xl:text-body font-semibold mb-4">{{ $title }}</h4>
    <div class="overflow-x-auto">
        <table class="table-auto w-full text-center text-detail xl:text-body border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 border-b">No.</th>
                    <th class="px-4 py-2 border-b">Tahun</th>
                    <th class="px-4 py-2 border-b">Skor Indeks</th>
                    <th class="px-4 py-2 border-b">Predikat</th>
                    <th class="px-4 py-2 border-b">Peringkat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $index => $row)
                    <tr>
                        <td class="px-4 py-2 border-b">{{ $index + 1 }}</td>
                        <td class="px-4 py-2 border-b">{{ $row['tahun'] }}</td>
                        <td class="px-4 py-2 border-b">{{ $row['skor'] }}</td>
                        <td class="px-4 py-2 border-b">{{ $row['predikat'] }}</td>
                        <td class="px-4 py-2 border-b">{{ $row['peringkat'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
