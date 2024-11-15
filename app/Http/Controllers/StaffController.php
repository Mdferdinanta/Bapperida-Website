<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class StaffController extends Controller
{
    use WithPagination;
    public $staffs;

    public function show()
    {
        $customOrder = [
            'Kepala Badan Perencanaan Pembangunan, Riset dan Inovasi Daerah',
            'Sekretaris Badan Perencanaan Pembangunan, Riset dan Inovasi Daerah',
            'Kepala Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah',
            'Kepala Bidang Perekonomian, Sumber Daya Alam, Infrastruktur dan Kewilayahan',
            'Kepala Bidang Pemerintahan dan Pembangunan Manusia',
            'Kepala Bidang Penelitian dan Pengembangan',
            'Kasubag Umum dan Kepegawaian',
            'Perencana Ahli Muda',
            'Perencana Ahli Madya',
            'Analis Kebijakan Ahli Muda',
            'Analis Keuangan Pusat dan Daerah Ahli Muda',
            'Staff lainnya',
        ];

        $this->staffs = Staff::orderByRaw("FIELD(jabatan, '" . implode("','", $customOrder) . "')")
            ->orderByDesc('id') // Secondary ordering by ID if needed
            ->paginate(8);

        return view('livewire.layout.pages.profiles.profile-list', [
            'staffs' => $this->staffs
        ]);
    }
}
