@props(['disabled' => false])


<select name="kategori" id="kategori"
    class="px-4 bg-transparent border shadow-sm border-mist-200 rounded-xs focus:border-mist-300 focus:ring-0 focus:bg-primary-50">
    <option value="" disabled selected>Kategori</option>
    <option value="perencanaan">Perencanaan Pembangunan</option>
    <option value="penelitian">Penelitian Pengembangan</option>
    <option value="pelayanan">Standar Pelayanan</option>
    <option value="peraturan">Peraturan</option>
    <option value="rencana">Rencana Kerja</option>
</select>

{{-- <input @disabled($disabled) type="select" placeholder="Search"
        class="border-0 bg-mist-50 focus:border-0 focus:ring-0"> --}}
{{-- <button type="submit">
        <i class="ri-search-2-line"></i>
    </button> --}}
