<div class="flex flex-col gap-5">
    <div class="flex flex-col w-full pb-2 bg-white border rounded-xs border-misty-300">
        <img src="{{ asset('storage/' . $staff->foto) }}" alt="" class="object-cover w-full h-full rounded-t-xs" />
        <div class="flex flex-col justify-between mx-2 text-center h-28">
            <span class="mt-2 text-center text-detail">{{ $staff->jabatan }}</span>
            <div>
                <h2 class="mt-2 font-bold max-xl:text-detail">{{ $staff->nama }}</h2>
                <span class="mt-2 text-tiny xl:text-detail">NIP: {{ $staff->nip }}</span>
            </div>
        </div>
    </div>
</div>
