@props(['disabled' => false])

<div
    {{ $attributes->merge([
        'class' => 'bg-mist-50 px-4 border border-mist-200 rounded-xs shadow-sm',
    ]) }}>

<select name="kategori" id="kategori">
    <option value="perencanaan">Dokumen Perencanaan</option>
    <option value="penelitian">2</option>
    <option value="perencanaan">3</option>
    <option value="perencanaan">4</option>
    <option value="perencanaan">5</option>
</select>

{{-- <input @disabled($disabled) type="select" placeholder="Search"
        class="border-0 bg-mist-50 focus:border-0 focus:ring-0"> --}}
    {{-- <button type="submit">
        <i class="ri-search-2-line"></i>
    </button> --}}
</div>
